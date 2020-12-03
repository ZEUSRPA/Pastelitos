<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
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
            return view('sales/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = new Sale();
        $sale->id=0;
        $sale->pay_method ='';
        $sale->id_employee = 0;
        $sale->id_client = 0;
        $sale->id_coupon = 0;
        $sale->date='';
        $sale->sub=0;
        $sale->iva=0;
        $sale->total=0;

        

        $data = ['sale'=>$sale];
        return view('sales/createEdit',$data);
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
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        $sale = new Sale();
        $sale->id=1;
        $sale->pay_method ='Efectivo';
        $sale->id_employee = 1;
        $sale->employee='Juan';
        $sale->id_client = 2;
        $sale->client='Zeus';
        $sale->id_coupon = 5;
        $sale->coupon = 50;
        $sale->date='12/Nov/2020';
        $sale->sub=500;
        $sale->total=580;
        $sale->iva=80;
        

        $data = ['sale'=>$sale];
        return view('sales/details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
