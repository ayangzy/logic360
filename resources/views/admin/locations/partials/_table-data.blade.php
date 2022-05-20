<table id="datatable" class="display table table-striped table-hover" >
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th class="text-center">Head Quarters</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date Created</th>
            <th class="text-center">Date updated</th>
            <th>Action</th>
        </tr>
    </thead>                                      
    <tbody>
        @foreach ($locations as $key => $location)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{$location->name}}</td>
            <td >{{$location->head_quarters}}</td>
            <td class="text-center">
                @if($location->status == 1)
                    <span class="text-primary h1"><i class="fas fa-toggle-on"></i></span>
                @else
                    <span class="text-danger h1"><i class="fas fa-toggle-off"></i></span>
                @endif
            <td>{{ $location->created_at }}</td>
            <td>{{ $location->updated_at }}</td>
            <td class="text-center">
                <div class="form-button-action">                  
                    <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg raise-modal" data-original-title="Edit"
                    data-url="{{ route('location.upsert', ['id' => $location->id ]) }}" data-targeturl="{{ route('location.load_partial') }}" data-targetdiv="load-partial">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-link btn-danger delete" data-original-title="Delete" 
                    data-item="{{ $location->name }} location" data-url="{{ route('location.destroy', ['id' => $location->id ]) }}" data-targeturl="{{ route('location.load_partial') }}" data-targetdiv="load-partial">
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