<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Employee;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            $orders = Order::with('details.cake','employee.user','client')->get();
            
            return $orders;
        }else{
            $orders = Order::with('details.cake','employee.user','client')->get();
            
            $data = ['orders'=>$orders];
            return view('orders/index',$data);
        }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Employee::where('idUser',Auth::user()->id)->first();
        if($user==null){
            return redirect('/admin/pedidos/');
        }
        $order = new Order();
        $order->id=\DB::getPdo()->lastInsertId()+1;
        $order->orderDate=Carbon::now()->toDateString();
        $order->payMethod=1;
        $order->dueDate='';
        $order->idEmployee = $user->id;
        $order->employee;
        $order->employee->user;
        $order->idUser=-1;
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
        $request->orderDate=strtotime($request->orderDate);
        $request->dueDate=strtotime($request->dueDate);
        $order = new Order();
        $order->orderDate = date('Y-m-d',$request->orderDate);
        $order->payMethod = $request->payMethod;
        $order->dueDate = date('Y-m-d',$request->dueDate);
        $order->idEmployee = $request->idEmployee;
        $order->idUser = $request->idUser;
        $order->status = 1;
        $order->save();
        $all=Order::orderBy('id', 'DESC')->get();
        // dd($all);
        $order->id=sizeof($all)==0?1:$all[0]->id;
        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/admin/pedidos/');
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
