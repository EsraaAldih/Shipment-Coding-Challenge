@extends('layouts.app')
@section('content')

<!-- Container (Contact Section) -->

<div id="contact" class="container my-5">

@if($errors->any())
<ul class="alert alert-warning">
    @foreach ($errors->all() as $error)
    <li class="ps-2 ms-1">{{$error}}</li>
        
    @endforeach
</ul>
@endif


</div>




<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Request a Shipment</h3>
            <div class="card">
                <h5 class="text-center mb-4">Create a New shipment Request</h5>
                <form class="form-card" method="post" enctype="multipart/form-data" action="{{ route('shipments.store') }}">
                     @csrf
                    
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">shipper name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="shipper_name" placeholder="Enter Shipper name" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">weight<span class="text-danger"> *</span></label> <input type="text" id="weight" name="weight" placeholder="Enter weight" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Image<span class="text-danger"> *</span></label> <input type="file" id="image" name="image" placeholder="" onblur="validate(3)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> 
                            <label class="form-control-label px-3">Description<span class="text-danger"> *</span></label>
                            <textarea name="description" name="description"  onblur="validate(6)"></textarea>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary bg-primary ">Request a Shipment</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- 
@section('scripts')
   <script src="{{ asset('js/partials.js') }}"></script>
@endsection --}}
