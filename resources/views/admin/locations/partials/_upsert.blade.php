  <!-- Modal -->
  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ $location->id == null ? route('location.store') : route('location.update', ['id' => $location->id ]) }}" id="myForm" method="post">
                @csrf
            <div class="modal-header no-bd bg-primary">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        {{ $location->id == null ? "Add" : "Edit" }} Location</span>                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">              
                    <div class="row">      
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-solid" name="name" id="name" value="{{ $location->name }}" placeholder="Enter Name" required>                               
                            </div>
                           
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="head-quarters">Head Quarter<span class="text-danger"></span></label>
                                <input type="text" class="form-control input-solid" name="head_quarters" id="head_quarters" value="{{ $location->head_quarters }}" placeholder="Enter Head Quarter">                               
                            </div>
                           
                        </div>
                       
                    </div>
               
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" class="btn btn-primary btn-sm">{{ $location->id == null ? "Save" : "Update" }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#myForm").validate();
    });
</script>