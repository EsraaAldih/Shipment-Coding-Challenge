@extends('layouts.app')
@section('content')
    <style>
          </style>
          <div id="show">
            <div class="card mt-5">
                <div class="title">Shipment Information</div>
                <div class="info">
                    <div class="row">
                        <div class="col-7">
                            <span id="heading">Last Updated Date</span><br>
                            <span id="details">{{ $shipment->updated_at }}</span>
                        </div>
                        <div class="col-5 pull-right">
                            <span id="heading">Tracking No.</span><br>
                            <span id="details">{{ $shipment->code }}</span>
                        </div>
                    </div>
                </div>
                <div class="pricing">
                    <div class="row">
                        <div class="col-9">
                            <span id="name">Price</span>
                        </div>
                        <div class="col-3">
                            <span id="price">&pound; {{ $shipment->price }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <span id="name">Weight</span>
                        </div>
                        <div class="col-3">
                            <span id="price">Kg {{ $shipment->weight }}</span>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div class="row">
                        <div class="col-9"> Shipper Name</div>
                        <div class="col-3"><big>{{ $shipment->shipper_name }}</big></div>
                    </div>
                </div>
                <div class="tracking">
                    <div class="title">Tracking Order</div>
                </div>
                <div class="progress-track">
                    <ul id="progressbar">
                        @if ($shipment->status == 'pending' || $shipment->status == 'done' || $shipment->status == 'progress')
                            <li class="step0 active " id="step1">Pending</li>
                        @else
                            <li class="step0  " id="step1">Pending</li>
                        @endif
                        @if ($shipment->status == 'progress' || $shipment->status == 'done')
                            <li class="step0 active text-center" id="step2">In Progress</li>
                        @else
                            <li class="step0  " id="step1">In Progress</li>
                        @endif
                        @if ($shipment->status == 'done')
                            <li class="step0 active " id="step1">Done</li>
                        @else
                            <li class="step0  " id="step1">Done</li>
                        @endif
                    </ul>
                </div>
        
        
                <div class="footer">
                    <div class="row">
                        @if ($shipment->image)
                            <div class="col-2"><img class="img-fluid" src="{{ url('public/images/' . $shipment->image) }}"></div>
                        @else
                            <div class="col-2"><img class="img-fluid" src="{{ URL::asset('/images/default.jpg') }}"></div>
                        @endif
        
                        <div class="col-10">{{ $shipment->description }}</div>
                        @if ($shipment->status !== 'done')
                        <a href="{{ route('shipments.edit', ['shipment' => $shipment->id]) }}"
                            class="btn btn-success card-link mt-1 text-light">Edit</a>
                         @endif
                    </div>
        
        
                </div>
            </div>
          </div>

@endsection
