@extends('layouts.app')
@section('content')
    <!-- Container (Contact Section) -->

    <div id="contact" class="container">


            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3>Edit  Shipment</h3>
                        @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <li class="ps-2 ms-1">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <div class="card">
                            <h5 class="text-center mb-4">Track Number : <span class="text-info">{{ $shipment->code }}</span></h5>
                            <form class="form-card" method="post" enctype="multipart/form-data"
                                 action="{{ route('shipments.update', ['shipment' => $shipment->id]) }}">
                                @csrf
                                @method('put')
        
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">shipper name<span class="text-danger"> *</span></label>
                                        <input type="text" id="shipper_name" name="shipper_name"
                                            value="{{ $shipment->shipper_name }}" placeholder="Enter Shipper name"
                                            onblur="validate(1)" disabled> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">weight<span class="text-danger"> *</span></label> <input
                                            type="text" id="weight" name="weight" value="{{ $shipment->weight }}"
                                            placeholder="Enter weight" onblur="validate(2)" disabled> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">Image<span class=""> *</span></label> <input
                                            type="file" id="image" name="image" placeholder="" onblur="validate(3)"> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Status<span class=""> *</span>
                                        </label>
                                        @if ($shipment->status == 'progress')
                                            <select id="status" name="status" class="form-control" onblur="validate(3)">
        
                                                <option value="pending">Pending</option>
                                                <option value="progress" selected>In Progress</option>
                                                <option value="done">Done</option>
                                            </select>
                                        @elseif($shipment->status == 'pending')
                                            <select id="status" name="status" class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example" onblur="validate(3)">
                                                <option value="pending" selected>Pending</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        @else
                                            <select class="form-select" aria-label="Disabled select example" disabled>
                                                <option value="done">Done</option>
        
                                            </select>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex">
                                        <label class="form-control-label px-3">Description<span class="text-danger">
                                                *</span></label>
                                        <textarea name="description" name="description" onblur="validate(6)" disabled>{{ $shipment->description }}</textarea>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="form-group col-sm-6"> <button type="submit"
                                                class="btn-block btn-primary bg-primary ">Edit Shipment</button> </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>



@endsection
