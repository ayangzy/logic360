<table id="datatable" class="display table table-striped table-hover" >
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Market</th>
            <th>Location</th>
            <th>Category</th>
            <th class="text-center">Date Created</th>
            <th class="text-center">Date updated</th>
            <th>Action</th>
        </tr>
    </thead>                                      
    <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->market ? $product->market->name : null }}</td>
            <td>{{ $product->market->location ? $product->market->location->name : null }}</td>
            <td>{{ $product->category ? $product->category->name : null }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td class="text-center">
                <div class="form-button-action">                  
                    <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg raise-modal" data-original-title="Edit"
                    data-url="{{ route('product.upsert', ['id' => $product->id ]) }}" data-targeturl="{{ route('product.load_partial') }}" data-targetdiv="load-partial">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-link btn-danger delete" data-original-title="Delete" 
                    data-item="{{ $product->name }} product" data-url="{{ route('product.destroy', ['id' => $product->id ]) }}" data-targeturl="{{ route('product.load_partial') }}" data-targetdiv="load-partial">
                        <i class="fas fa-minus-circle"></i>
                    </button>

                </div>
            </td>
        </tr>    
        @endforeach
                                              
    </tbody>
</table>

<script>
    $('#datatable').DataTable({
		"pageLength": 10,
	});
</script>