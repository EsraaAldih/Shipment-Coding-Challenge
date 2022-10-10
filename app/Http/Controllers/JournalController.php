<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Shipment;
use App\Models\JournalTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $journals=Journal::findOrFail(1)->shipments;
        $journals = Journal::all();
        // dd($journals);
        // dd($journal[0]->code);

        return view('journal.index',['journals'=>$journals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $shipments = Shipment::all();
        return view('journal.create',['shipments'=>$shipments]);

        
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amount=0;
        $unPaid_shipments = $request->input('unPaid_shipments');
        // dd($unPaid_shipments);
        foreach ($unPaid_shipments as  $shipment) {
            $amount += Shipment::findOrFail($shipment)->price;
        }
        $store = Journal::create([
            'amount'=>$amount,
                        
        ]);
        $journal_id=$store->id;
        foreach ($unPaid_shipments as  $shipment) {
            $singleShipment= Shipment::findOrFail($shipment);
            $singleShipment->update([
                'journal_id'=>$journal_id, 

            ]);
        }
            $debit_cash=$amount;

            $credit_revenue= $amount*.2;
            $credit_payable= $amount*.8;
            // dd($credit_revenue);
                $inset_debit_cash = JournalTypes::create([
                    'amount'=>$debit_cash,
                    'type'=>'debit_cash',
                    'journal_id'=>$journal_id
                    
                ]);
                $inset_credit_revenue = JournalTypes::create([
                    'amount'=>$credit_revenue,
                    'type'=>'credit_revenue',
                    'journal_id'=>$journal_id
                    
                ]);
                $inset_credit_payable = JournalTypes::create([
                    'amount'=>$credit_payable,
                    'type'=>'credit_payable',
                    'journal_id'=>$journal_id
                    
                ]);

            

    
        
        return redirect()->route('journals');
    }

    public function search(Request $request){
        $query= $request->get('searchQuery');
            $data = DB::table('journal_entity')
             ->where('amount', 'like', '%'.$query.'%')
             ->orWhere('id', 'like', '%'.$query.'%')
             ->orderBy('id')
             ->get();
             return json_encode($data);
    
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




