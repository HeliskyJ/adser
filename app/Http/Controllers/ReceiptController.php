<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Receipt,
    App\Customer,
    App\Service,
    App\ReceiptDetail,
    App\Schedule,
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
            $sc = Schedule::all()->where('is_active', 1);
            return view('receipt.create', compact('sc'));
    
        return view('receipt.create', compact('sc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $headerReceipt = $request->all();
        $lastid = Receipt::create($headerReceipt);
        $idd =$lastid->id;
        if(count($request->service_id)>0){
            foreach($request->service_id as $item=>$v){
                $receiptDetail = array(
                'receipt_id' => $idd,
                'service_id' => $request->service_id[$item],
                'address'    => $request->address[$item],
                'duration'   => $request->durations[$item],
                'price'      => $request->prices[$item],
                'total'      => $request->subtol[$item]
                );
                ReceiptDetail::insert($receiptDetail);
            }
        } 
        return redirect('receipt.create');
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
