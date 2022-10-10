<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EditShipmentRequest;
use App\Http\Requests\StoreShipmentRequest;
use Illuminate\Notifications\Action;

class ShipmentController extends Controller
{



 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // function index()
    // {
    //  return view('index');
    // }

    // function search(Request $request)
    // {
    //  if($request->ajax())
    //  {
    //   $output = '';
    //   $query = $request->get('query');
    //   if($query != '')
    //   {
    //    $data = DB::table('shipments')
    //      ->where('shipper_name', 'like', '%'.$query.'%')
    //      ->orWhere('code', 'like', '%'.$query.'%')
    //      ->orWhere('status', 'like', '%'.$query.'%')
    //      ->orWhere('price', 'like', '%'.$query.'%')
    //      ->orWhere('weight', 'like', '%'.$query.'%')
    //      ->orderBy('id')
    //      ->get();
         
    //   }
    //   else
    //   {
    //    $data = DB::table('shipments')
    //      ->orderBy('id')
    //      ->get();
    //   }
    //   $total_row = $data->count();
    //   if($total_row > 0)
    //   {
    //    foreach($data as $row)
    //    {
    //     $output .= '
    //     <tr>
    //     <td>'.$row->code.'</td>
    //      <td>'.$row->shipper_name.'</td>
    //      <td>'.$row->weight.'</td>
    //      <td>'.$row->status.'</td>
    //      <td>'.$row->price.'</td>
    //      <td>'.$row->journal_id.'</td>
    //      <td>'.$row->image.'</td>
    //      <td>'.$row->created_at.'</td>
    //      <td>'.$row->updated_at.'</td>
    //      <td>Action</td>
    //     </tr>
    //     ';
    //    }
    //   }
    //   else
    //   {
    //    $output = '
    //    <tr>
    //     <td align="center" colspan="5">No Data Found</td>
    //    </tr>
    //    ';
    //   }
    //   $data = array(
    //    'table_data'  => $output,
    //    'total_data'  => $total_row
    //   );

    //   echo json_encode($data);
    //  }
    // }

public function search(Request $request){
    $query= $request->get('searchQuery');

        $data = DB::table('shipments')
         ->where('shipper_name', 'like', '%'.$query.'%')
         ->orWhere('code', 'like', '%'.$query.'%')
         ->orWhere('status', 'like', '%'.$query.'%')
         ->orWhere('price', 'like', '%'.$query.'%')
         ->orWhere('weight', 'like', '%'.$query.'%')
         ->orderBy('id')
         ->get();
         return json_encode($data);

}
    public function index()
    {

        $shipments = Shipment::all();
        return view("index", ['shipments' => $shipments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShipmentRequest $request)
    {
        $image = "";
        if ($request->weight > 0 && $request->weight < 10) {
            $price = 10;
        } elseif ($request->weight >= 10 && $request->weight < 25) {
            $price = 100;
        } else {
            $price = 300;
        }
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $image = $filename;
        } else {
            $image = "";
        }
        $code = generateBarcodeNumber();
        $shipper_name = $request->shipper_name;
        $weight = $request->weight;
        // $price = $request->price;
        $description = $request->description;
        $store = Shipment::create([
            'code' => $code,
            'shipper_name' => $shipper_name,
            'weight' => $weight,
            'price' => $price,
            'status' => 'pending',
            'description' => $description,
            'image' => $image,
        ]);
        return redirect()->route('shipments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($shipment)
    {
        $singleShipment = Shipment::findOrFail($shipment);
        return view('show', ['shipment' => $singleShipment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($shipment)
    {
        $singleShipment = Shipment::findOrFail($shipment);
        return view("edit", ['shipment' => $singleShipment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shipment)
    {
        $singleShipment = Shipment::findOrFail($shipment);

        $image = "";
        if ($request->weight > 0 && $request->weight < 10) {
            $price = 10;
        } elseif ($request->weight >= 10 && $request->weight < 25) {
            $price = 100;
        } else {
            $price = 300;
        }

        if ($singleShipment->status == "done") {
            $status = "done";
        } else {

            $status = $request->status;
        }
        $singleShipment->update([

            'status' => $status,
        ]);
        // dd($singleShipment->status);
        if ($singleShipment->status == 'done') {
            return redirect()->route('journals.create');
        } else {

            return redirect()->route('shipments');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($shipment)
    {
        $singleShipment = Shipment::findOrFail($shipment);
        $singleShipment->delete();
        // $singleShipment=Shipment::where('id',$shipment)->delete();
        return redirect()->route('shipments');
    }
}

// ________________________________________________
//Generate random code for every shipment
function generateBarcodeNumber()
{
    //generate random NumberCode
    // $code = mt_rand(1000000000, 9999999999);

    //generate random StringCode
    $code = Str::random(8);

    // call the same function if the barcode exists already
    if (barcodeNumberExists($code)) {
        return generateBarcodeNumber();
    }

    // otherwise, it's valid and can be used
    return $code;
}

function barcodeNumberExists($code)
{
    // query the database and return a boolean
    return Shipment::whereCode($code)->exists();
}
