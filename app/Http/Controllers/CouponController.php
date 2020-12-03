<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return Coupon::all();
            
        }else{
            return view('coupons/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coupon =  new Coupon();
        $coupon->id=\DB::getPdo()->lastInsertId()+1;
        $coupon->percentage=-1;
        $coupon->expiration=null;
        $data= ['coupon'=>$coupon];
        return view('coupons/createEdit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aux=strtotime($request->expiration);
        $coupon = new Coupon();
        $coupon->expiration = date('Y-m-d',$aux);
        $coupon->percentage=$request->percentage;
        $coupon->save();
        return $request->expiration;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon =  Coupon::findorFail($id);
        $data= ['coupon'=>$coupon];
        return view('coupons/details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::findorFail($id);
        $data= ['coupon'=>$coupon];
        return view('coupons/createEdit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coupon = Coupon::findorFail($id);
        $coupon->percentage=$request->percentage;
        $coupon->expiration = $request->expiration;
        $coupon->save();
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $coupon = Coupon::findorFail($id);
            $coupon->delete();
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
