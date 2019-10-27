<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\StoreCustomer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all()->where('deleted',0);
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomer $request)
    {
        $validateCustomer = $request->validated();
        $customer = Customer::create($validateCustomer);
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($cui)
    {
        $customer = Customer::where('cui',$cui)->get();
        return view('customer.show', compact('customer'));

        $countPending = Customer::withCount('receipts.is_active', '0')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($customer)
    {
        $customer = Customer::where('id', $customer)->get();
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCustomer $request, $id)
    {
        $validateData = $request->validated();
       Customer::whereId($id)->update($validateData);
        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::whereId($id)->update(array('deleted'=> 1));
        return redirect('customers');
    }
}
