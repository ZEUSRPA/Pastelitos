<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            
        
            return User::where('rol',2)->get();
        }else{
            return view('clients/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        $client->id=\DB::getPdo()->lastInsertId()+1;
        $client->name = '';
        $client->email = '';
        $client->phone = '';
        $client->password = '';
        $client->confirm = '';
        $client->role = -1;
        $data = ['client'=>$client];
        return view('clients/createEdit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->rol = 2;
        $user->save();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $client = Client::findorFail($id);
        $user = User::findorFail($id);
        $data = ['client'=>$user];
        return view('clients/details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorFail($id);
        $data = ['client'=>$user];
        return view('clients/createEdit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);
        $user->name = $request->name;
        $user->save();
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = User::findorFail($id);
            $user->delete();
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
