@extends('layouts.app')
@section('content')
    <!-- Container (Contact Section) -->






    <div class="container mt-5 px-2">


        <div class="table-responsive">

            <form method="post" enctype="multipart/form-data" action="{{ route('journals.store') }}">
                @csrf
                <table class="table table-responsive table-borderless">

                    <thead>
                        <tr class="bg-light">
                            <th scope="col" width="5%"><i class="fa fa-check-circle-o green"></i><span class="ms-1"></th>
                            <th scope="col" width="10%">Tracking Number</th>
                            <th scope="col" width="10%">Status</th>
                            <th scope="col" width="20%">Shipper Name</th>
                            <th scope="col" width="20%">Date</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($shipments as $shipment)
                            @if (!$shipment->journal_id && $shipment->status == 'done')
                                <tr>
                                    <td>
                                            <input type="checkbox" id="inlineCheckbox1" name="unPaid_shipments[]"
                                                value="{{ $shipment->id }}">

                                        </span></td>
                                    <td class="text-start"> {{ $shipment->code }}</td>
                                    <td class="text-start"><span class="fw-bolder">{{ $shipment->status }}</span></td>
                                    <td class="text-start"><span class="fw-bolder">{{ $shipment->shipper_name }}</span> </td>
                                    <td class="text-start"><span class="fw-bolder">{{ $shipment->created_at }}</span> </td>


                                </tr>
                            @endif
                        @endforeach


                    </tbody>
                </table>
                @if ($shipments)

                <div class="col-md-12 form-group ">
                    <button class="btn pull-right btn-info" type="submit">Create</button>
                </div>
                @endif

            </form>
        </div>

    </div>
@endsection
