<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\StoreEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all()->where('deleted', 0);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
        $validateData = $request->validated();
        $employee = Employee::create($validateData);
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pending = Employee::find($id)->receipts->where('is_active', 1)->where('done', 0)->count();
        $record  = Employee::find($id)->receipts->where('is_active', 1)->where('done', 1)->count();
        $cancel  = Employee::find($id)->receipts->where('is_active', 0)->where('done', 0)->count();
        $employee = Employee::where('id', $id)->get();
        return view('employee.show', compact('employee', 'record', 'pending', 'cancel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($employee)
    {
        $employee = Employee::where('id', $employee)->get();
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, $employee)
    {
        $validateData = $request->validated();
        $employee = Employee::whereId($employee)->update($validateData);
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy( $employee)
    {
        $employee = Employee::whereId($employee)->update(array('deleted'=>1));
        return redirect('employees');
    }

    public function receipts($id)
    {
        $receipts = Employee::find($id)->receipts->where('done', 1)->where('is_active', 1);
        return view('employee.showrecords', compact('receipts'));
    }

    public function pendingServices($id)
    {
        $receipts = Employee::find($id)->receipts->where('done', 0)->where('is_active', 1);
        return view('employee.showpending', compact('receipts'));
    }
}