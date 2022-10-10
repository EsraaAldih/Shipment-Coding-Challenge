<?php

namespace App\Http\Controllers;

use App\Models\JournalTypes;
use App\Models\Shipment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //count all shipments
        $allShipments = Shipment::all();
        $count = count($allShipments);

        //count pending shipments 

        $shipments_pending = Shipment::where('status', '=', 'pending')->get();
        $pendingCount = count($shipments_pending);

        //count shipments in progress
        $shipments_progress = Shipment::where('status', '=', 'progress')->get();
        $progressCount = count($shipments_progress);

        //count done shipments
        $shipments_done = Shipment::where('status', '=', 'done')->get();
        $doneCount = count($shipments_done);
        $sum_depit_cash =0;
        $sum_credit_payable =0;
        $sum_credit_revenue =0;

        $debit_cash=JournalTypes::where('type' ,'=','debit_cash')->get();
        $credit_revenue=JournalTypes::where('type' ,'=','credit_revenue')->get();
        $credit_payable=JournalTypes::where('type' ,'=','credit_payable')->get();
        $count_debit=count( $debit_cash);

        $all_debit_amounts=[];
        $all_credit_revenue_amounts=[];
        $all_credit_payable_amounts=[];
        for ($i=0 ; $i< $count_debit ; $i++) {
             $amount_debit = $debit_cash[$i]->amount;
             $amount_revenue = $credit_revenue[$i]->amount;
             $amount_payable = $credit_payable[$i]->amount;
             array_push($all_debit_amounts, $amount_debit);
             array_push($all_credit_revenue_amounts, $amount_revenue);
             array_push($all_credit_payable_amounts, $amount_payable);

        }
        foreach ($all_debit_amounts as $debit) {
            $sum_depit_cash += $debit;
        }
        foreach ($all_credit_revenue_amounts as $revenue) {
            $sum_credit_revenue += $revenue;
        }
        foreach ($all_credit_payable_amounts as $payable) {
            $sum_credit_payable += $payable;
        }

        // dd($sum_credit_payable);

        return view('welcome', [
            'shipments_pending' =>$pendingCount,
            'shipments_progress' => $progressCount,
            'shipments_done' => $doneCount,
            'allShipments' => $count,
            'sum_depit_cash'=>$sum_depit_cash,
            'sum_payable' => $sum_credit_payable ,
            'sum_revenue' =>$sum_credit_revenue,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
