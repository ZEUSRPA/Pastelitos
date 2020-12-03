<?php

namespace App\Http\Controllers;

use App\Models\Devolution;
use Illuminate\Http\Request;

class DevolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            // return Client::all();
            return [];
        }else{
            return view('devolutions/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devolution = new Devolution();
        $devolution->id=0;
        $devolution->id_sale = 0;
        $devolution->id_employee = 0;
        $devolution->approbation = '';
        $devolution->date = '';

        

        $data = ['devolution'=>$devolution];
        return view('devolutions/createEdit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devolution  $devolution
     * @return \Illuminate\Http\Response
     */
    public function show(Devolution $devolution)
    {
        $devolution = new Devolution();
        $devolution->id=1;
        $devolution->id_sale = 1;
        $devolution->id_employee = 1;
        $devolution->employee = 'Juan';
        $devolution->sub=500;
        $devolution->iva=80;
        $devolution->total=580;
        $devolution->approbation = 'Gytecrtessdg';
        $devolution->date = '12/Nov/2020';

        

        $data = ['devolution'=>$devolution];
        return view('devolutions/details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devolution  $devolution
     * @return \Illuminate\Http\Response
     */
    public function edit(Devolution $devolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devolution  $devolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devolution $devolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devolution  $devolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devolution $devolution)
    {
        //
    }
}
