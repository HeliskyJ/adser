<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Receipt,
    App\Customer,
    App\Service,
    Illuminate\Http\Request;

class ReceiptController extends Controller
{
    private $customer = null;
    private $service = null;
    private $employee = null;

    public function __CONSTRUCT(){
        $this->customer = new Customer();
        $this->service = new Service();
        $this->employee = new Employee();
    }

    public function findCustomer(Request $req){
       return $this->customer
                   ->findByFullname($req->input('q'));
    }

    public function findService(Request $req){
        return $this->service
                    ->findByName($req->input('q')); 
    }

    public function findEmployee(Request $req){
        return $this->employee
                    ->findByFull($req->input('q'));
    }
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
        return view('receipt.create');
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
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function show(Receipt $receipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipt $receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt $receipt)
    {
        //
    }
}
