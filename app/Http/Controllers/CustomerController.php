<?php

namespace App\Http\Controllers;

use App\Customer;
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
        //
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
    public function store()
    {
        $validateCustomer = request()->validate([
            'fullname' =>
            [
                'bail',
                'required',
                'string',
                'min:5',
                'max:60'
            ],
            'cui' =>
            [
                'bail',
                'required',
                'unique:customers',
                'digits:13'
            ],
            'number_phone' =>
            [
                'bail',
                'nullable',
                'numeric',
                'digits_between:8,12'
            ],
            'address' =>
            [
                'bail',
                'required',
                'max:60'
            ],
            'description' =>
            [
                'bail',
                'alpha_num',
                'nullable',
                'max:100'
            ]
        ]);


        $customer = Customer::create($validateCustomer);
        return view('customer.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
