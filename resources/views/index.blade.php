@extends('layouts.app')
{{-- @push('css')
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    
@endpush --}}
@section('content')

    <div class="container my-5">
        
<div class="row">
    {{-- <input type="text" id="search" placeholder="Search Name"> --}}
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title m-b-0">Shipment Mangement</h5>
            </div>
            <div class="card-title m-b-0">
                <a href="{{ route('shipments.create') }}" class="btn btn-primary">Create Shipment</a>
                <a href="{{ route('journals.create') }}" class="btn btn-success ">Create Journal</a>
                <input type="text" id="search" placeholder="Search Name">
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tracking Number</th>
                            <th scope="col">Shipper Name</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Status</th>
                            <th scope="col">Price</th>
                            <th scope="col">Journal Entity</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody id="dynamic-row" class="customtable">
                        @foreach ($shipments as $shipment)
                        <tr>
    
                            <td>{{ $shipment['code'] }}</td>
                            <td>{{ $shipment['shipper_name'] }}</td>
                            <td>{{ $shipment['weight'] }}</td>
                            <td>{{ $shipment['status'] }}</td>
                            <td>{{ $shipment['price'] }}</td>
                            @if ($shipment['journal_id'] )
                            <td class="text-center">{{ $shipment['journal_id'] }}</td>
                            @else
                            <td class="text-center">Not Paid</td>

                            @endif
                            <td>
                                @if ($shipment->image)
                                    <img src="{{ url('public/images/' . $shipment->image) }}"
                                        style="height: 70px; width: 70px;">
                                @else
                                    <img src="{{ URL::asset('/images/default.jpg') }}" style="height: 70px; width: 70px;">
                                @endif
                            </td>
                            <td>{{ $shipment->created_at->diffForHumans() }}</td>
                            <td>{{ $shipment->updated_at->diffForHumans() }}</td>
                            <td class="row">
                                <div class="col-4">
                                    <a href="{{ route('shipments.show', ['shipment' => $shipment->id]) }}"
                                        class="btn btn-info ">view</a>
                                </div>
                                <div class="col-4 ms-1">
                                    @if ($shipment->status !== 'done')
                                        <a href="{{ route('shipments.edit', ['shipment' => $shipment->id]) }}"
                                            class="btn btn-success ">Edit</a>
                                    @endif
                                </div>
    
                                {{-- <form class="col-4" method="post"
                                    action="{{ route('shipments.destroy', ['shipment' => $shipment->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Sure Want Delete?')"
                                        class="btn btn-danger">Delete</button>
                                </form>  --}}
                             </td>
    
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





    </div>
@endsection
<!-- Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">

</script>


<script>
    $(document).ready(function(){
        $('body').on('keyup','#search',function(){
            var searchQuery = $(this).val()
            $.ajax({
                method: 'POST' ,
                url : '{{route("shipments.search")}}',
                dataType : 'json',
                data:{
                    '_token':'{{csrf_token()}}',
                    searchQuery : searchQuery
                },
                success: function(res){
                    console.log(res);
                    var tableRow = ''
                    $('#dynamic-row').html('');
                    $.each(res,function(index ,value){
                        tableRow=`<tr>
                            <td>${value.code}</td>
                            <td>${value.shipper_name}</td>
                            <td>${value.weight}</td>
                            <td>${value.status}</td>
                            <td>${value.price}</td>
                            <td>${value.journal_id}</td>
                            <td>${value.image}</td>
                            <td>${value.created_at}</td>
                            <td>${value.updated_at}</td>
                            </tr>`
                        $('#dynamic-row').append(tableRow)
                    console.log(tableRow);

                    })
                }
            })

        })
    })
    
     
</script>
