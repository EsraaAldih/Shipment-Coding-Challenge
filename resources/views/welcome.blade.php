@extends('layouts.app')
@section('content')
    <style>
        .grey-bg {
            background-color: #F5F7FA;
        }
    </style>
    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h2 class="text-info">Home Page</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="bi bi-hourglass-top primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $shipments_pending }}</h3>
                                        <span> Pending </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="bi bi-truck  warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $shipments_progress }}</h3>
                                        <span> In progress</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="bi bi-check-circle  success font-large-2 float-left"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <h3>{{ $shipments_done }}</h3>
                                        <span> Done shipments </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="bi bi-file-earmark danger font-large-2 float-left"></i>
                                    </div>
                                    <a href="{{ route('shipments') }}">
                                        <div class="media-body text-right">
                                            <h3>{{ $allShipments }}</h3>
                                            <span>All Shipments</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">{{ $sum_payable }}</h3>
                                        <span>Sum Payable</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-cash danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success"> {{ $sum_revenue }}</h3>
                                        <span> Sum Revenue</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-cash success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning"> {{ $sum_depit_cash }}</h3>
                                        <span> Sum Depit Cash</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-cash-stack warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>

    </div>
@endsection
