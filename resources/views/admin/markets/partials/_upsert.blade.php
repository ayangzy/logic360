  <!-- Modal -->
  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ $market->id == null ? route('market.store') : route('market.update', ['id' => $market->id ]) }}" id="myForm" method="post">
                @csrf
            <div class="modal-header no-bd bg-primary">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        {{ $market->id == null ? "Add" : "Edit" }} market</span>                    
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
                                <input type="text" class="form-control input-solid" name="name" id="name" value="{{ $market->name }}" placeholder="Enter Name" required>                               
                            </div>
                           
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="roles">Location<span class="text-danger">*</span> </label>
                                <select class="form-control input-solid" data-placeholder="Select market location.." data-allow-clear="1" required name="location_id">
                                    @if ($locations->count() > 0)
                                        @foreach ($locations as $key => $location)
                                            <option value="{{ $location->id }}"
                                                {{ $location->name ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
               
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" class="btn btn-primary btn-sm">{{ $market->id == null ? "Save" : "Update" }}</button>
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

    $(function() {
          $('select').each(function() {
              $(this).select2({
                  theme: 'bootstrap4',
                  width: $(this).data('width') ? $(this).data('width') : $(this).hasClass(
                      'w-100') ? '100%' : 'style',
                  placeholder: $(this).data('placeholder'),
                  allowClear: Boolean($(this).data('allow-clear')),
                  closeOnSelect: !$(this).attr('multiple'),
              });
          });
      });
</script>