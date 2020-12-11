<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny',Employee::class);
        if($request->ajax()){
            
            return Employee::with('user')->get();
        }else{
            return view('employees/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Employee::class);
        $employee = new Employee();
        $all=Employee::orderBy('id', 'DESC')->get();
        // dd($all);
         $employee->id=sizeof($all)==0?1:$all[0]->id+1;
        $employee->rol = -1;
        $employee->rfc='';
        $employee->address='';
        $employee->workplace='';
        $employee->user=new User();
        $data = ['employee'=>$employee];
        return view('employees/createEdit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Employee::class);
        try{
            if($request->edit===null){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->rol = 1;
        $user->save();
            }
        if($request->edit!=null){
            $employee = Employee::findorFail($request->edit);
            }else{
        $employee = new Employee();
        $employee->idUser=$user->id;
            }
        $user=$employee->user;
        $user->name=$request->name;
        $user->email = $request->email;
        $user->save();
        $employee->rfc = $request->rfc;
        $employee->address = $request->address;
        $employee->workplace = $request->workplace;
        $employee->save();
        }catch(\Exception $p){
            return 0;
        }
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Employee();
        $model->id=$id;
        $this->authorize('view',$model);
        $employee = Employee::findorFail($id);
        $employee->user;
        $data = ['employee'=>$employee];
        return view('employees/details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new Employee();
        $model->id=$id;
        $this->authorize('update',$model);
        $employee = Employee::findorFail($id);
        $employee->user;
        $data = ['employee'=>$employee];
        return view('employees/createEdit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',Employee::class);
        try{
            $employee = Employee::findorFail($id);
            $employee->delete();
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
