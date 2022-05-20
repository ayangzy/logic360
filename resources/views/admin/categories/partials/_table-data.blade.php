<table id="datatable" class="display table table-striped table-hover" >
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th class="text-center">description</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date Created</th>
            <th class="text-center">Date updated</th>
            <th class="text-center" style="width: 10%">Action</th>
        </tr>
    </thead>                                      
    <tbody>
        @foreach ($categories as $key => $category)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{$category->name}}</td>
            <td >{{$category->description}}</td>
            <td class="text-center">
                @if($category->status == 1)
                    <span class="text-primary h1"><i class="fas fa-toggle-on"></i></span>
                @else
                    <span class="text-danger h1"><i class="fas fa-toggle-off"></i></span>
                @endif
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
            <td class="text-center">
                <div class="form-button-action">                  
                    <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg raise-modal" data-original-title="Edit"
                    data-url="{{ route('category.upsert', ['id' => $category->id ]) }}" data-targeturl="{{ route('category.loadpartial') }}" data-targetdiv="load-partial">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-link btn-danger delete" data-original-title="Delete" 
                    data-item="{{ $category->name }} Category" data-url="{{ route('category.destroy', ['id' => $category->id ]) }}" data-targeturl="{{ route('category.loadpartial') }}" data-targetdiv="load-partial">
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