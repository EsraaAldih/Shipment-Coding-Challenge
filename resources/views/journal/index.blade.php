@extends('layouts.app')
@section('content')
    <div class="container mt-5 px-2">

        <div class="container">
           
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title m-b-0">Journal Entity Reports</h5>
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

                                        <th scope="col">Journal Entity</th>
                                        {{-- <th scope="col">Amount</th> --}}
                                        <th scope="col" >Type</th>
                                    </tr>
                                </thead>
                                <tbody id="dynamic-row" class="customtable">
                                    @foreach ($journals as $journal)
                                        <tr>
                                            <td> {{ $journal->id }}</td>
                                            {{-- <td>{{ $journal->amount }}</td> --}}
                                            <td>
                                                @foreach ($journal->types as $type)
                                                    <p>{{ $type->type }} : {{ $type->amount }} </p>
                                                        
                                                     @endforeach
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
                    url : '{{route("journals.search")}}',
                    dataType : 'json',
                    data:{ '_token':'{{csrf_token()}}',
                        searchQuery : searchQuery
                    },
                    
                    success: function(res){
                        console.log(res);
                        var tableRow = ''
                        $('#dynamic-row').html('');
                        $.each(res,function(index ,value){
                            tableRow=`<tr>
                                <td>${value.id}</td>
                                <td>${value.amount}</td>
                                </tr>`
                            $('#dynamic-row').append(tableRow)
                        console.log(tableRow);
    
                        })
                    },
                    error: function(err){
                        console.log(JSON.stringify(err));
                    }
                })
    
            })
        })
        
         
    </script>