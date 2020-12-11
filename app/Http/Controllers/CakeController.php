<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class CakeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return Cake::all();
        }else{
            return view('cakes/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',App\Http\Controllers\Cake::class);
        $cake = new Cake();
        $all=Cake::orderBy('id', 'DESC')->get();
        // dd($all);
        $cake->id=sizeof($all)==0?1:$all[0]->id+1;
        $cake->name = '';
        $cake->description = '';
        $cake->price = -1.0;
        $cake->image = '';
        $cake->quantity=0;
        $data = ['cake'=>$cake];
        return view('cakes/createEdit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->edit!=null){
            //se llama el metodo desde aqui porque se tuvieron problemas al enviar la imagen mediante el metodo put.
            $this->update($request);
            return;
        }
        $cake = new Cake();
        $cake->name = $request->name;
        $cake->price = $request->price;
        $cake->description = $request->description;
        $cake->stock = $request->stock;
        if ($request->image != '') {
            if ($request->hasFile('image')) {

                //Storage:: delete ('public/'.$usercdu -> pic);
                $path = $request->image->store('public');
                $ur = (string)$request->image->hashName();
                $cake->image=$ur;
            }
        }
        $cake->save();
        return $cake;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cake = Cake::findorFail($id);
        $data = ['cake'=> $cake];
        return view('cakes/details',$data);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('admin');
        $cake = Cake::findorFail($id);
        $data = ['cake'=> $cake];
        return view('cakes/createEdit',$data);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cake = Cake::findorFail($request->edit);
        if ($request->hasFile('image')){
            $cake->name = $request->name;
            $cake->description = $request->description;
            $cake->price = $request->price;
            $cake->stock = $request->stock;
            try{
                Storage:: delete ('public/'.$cake->image);

            }catch(exception $e){

            }
            $path = $request->image->store('public');
            $ur = (string)$request->image->hashName();
            $cake->image=$ur;
        }
        try{
            $cake->save();
        }catch(\Illuminate\Database\QueryException $e){
            
        }
        return $cake;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $cake = Cake::findorFail($id);
            $cake->delete();
            $information = 'good';
            $data = ['information'=>$information];
            return $data;
        }catch(\Illuminate\Database\QueryException $e){
            $information = 'bad';
            $data = ['information'=>$information];
            return $data;
        }
    }
}
