<table id="datatable" class="display table table-striped table-hover" >
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Location</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date Created</th>
            <th class="text-center">Date updated</th>
            <th>Action</th>
        </tr>
    </thead>                                      
    <tbody>
        @foreach ($markets as $key => $market)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{ $market->name }}</td>
            <td>{{ $market->location ? $market->location->name : null }}</td>
            <td class="text-center">
                @if($market->status == 1)
                    <span class="text-primary h1"><i class="fas fa-toggle-on"></i></span>
                @else
                    <span class="text-danger h1"><i class="fas fa-toggle-off"></i></span>
                @endif
            <td>{{ $market->created_at }}</td>
            <td>{{ $market->updated_at }}</td>
            <td class="text-center">
                <div class="form-button-action">                  
                    <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg raise-modal" data-original-title="Edit"
                    data-url="{{ route('market.upsert', ['id' => $market->id ]) }}" data-targeturl="{{ route('market.load_partial') }}" data-targetdiv="load-partial">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-link btn-danger delete" data-original-title="Delete" 
                    data-item="{{ $market->name }} market" data-url="{{ route('market.destroy', ['id' => $market->id ]) }}" data-targeturl="{{ route('market.load_partial') }}" data-targetdiv="load-partial">
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