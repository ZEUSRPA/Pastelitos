<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Employee;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax){
            $orders = Order::with('details','employee')->get();
            foreach($orders as $order){
                foreach($orders->details as $detail){
                    $detail->cake;
                }
                $order->employee->user;
                $order->client;
            }
            return $orders;
        }else{
            return view('orders/index');
        }
    }

    public function getAll(Request $request){
        if($request->ajax){
            $orders = Order::with('details','employee')->get();
            foreach($orders as $order){
                $order->details->cakes;
                $order->employee->user;
            }
            return $orders;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        $order->id=\DB::getPdo()->lastInsertId()+1;
        $order->orderDate='';
        $order->employee= new Employee();
        $order->employee->user;
        $order->employee->user=new User();
        $order->details=[];
        $order->payMethod=1;
        $order->dueDate='';
        $order->idEmployee = -1;
        $order->idUser=0;
        $order->status = 1;
        $data = ['order'=>$order];
        return view('orders/createEdit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->orderDate = $request->orderDate;
        $order->payMethod = $request->payMethod;
        $order->dueDate = $request->dueDate;
        $order->idEmployee = $request->idEmployee;
        $order->idUser = $request->idUser;
        $order->status = $request->status;
        $order->save();

        foreach($requets->details as $aux){
            $detail = new OrderDetail();
            $detail->idOrder=$order->id;
            $detail->idCake=$aux->idCake;
            $detail->price=$aux->cake->price;
            $detail->quantity=$aux->quantity;
            $detail->save();
        }
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $order = Order::findorFail($id);
        $order->details->cakes;
        $order->employee->user;
        
        $data = ['order'=>$order];
        return view('orders/details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
