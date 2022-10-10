<table class="table" id="shipments">
    <thead class="thead-dark">
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
    <tbody>
        @foreach ($shipments as $shipment)
            <tr>

                <td>{{ $shipment['code'] }}</td>
                <td>{{ $shipment['shipper_name'] }}</td>
                <td>{{ $shipment['weight'] }}</td>
                <td>{{ $shipment['status'] }}</td>
                <td>{{ $shipment['price'] }}</td>
                <td class="text-center">{{ $shipment['journal_id'] }}</td>
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
                    <div class="col-4">
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
                    </form> --}}
                </td>

            </tr>
        @endforeach


    </tbody>
</table>