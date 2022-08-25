  <!-- Modal -->
  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ $product->id == null ? route('product.store') : route('product.update', ['id' => $product->id ]) }}" id="myForm" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-header no-bd bg-primary">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        {{ $product->id == null ? "Add" : "Edit" }} product</span>                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">              
                    <div class="row">      
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Categories<span class="text-danger">*</span></label>
                                <select class="form-control input-solid mySelect2" name="category_id" id="category" required>
                                    <option value="" selected disabled>Select Category--</option>
                                    @if ($categories->count() > 0)
                                        @foreach ($categories as $key => $category)
                                            <option value="{{ $category->id }}" {{$product->category_id == $category->id ? "selected" : ""}}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantity">Quantity<span class="text-danger"></span></label>
                                <input type="text" class="form-control input-solid" name="quantity" id="quantity" value="{{ $product->quantity }}" placeholder="Enter Product Quantity" required>                               
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location">Locations<span class="text-danger">*</span> </label>
                                <select class="form-control input-solid mySelect2" id="location" name="location" required>
                                    <option value="" selected disabled>Select Location--</option>
                                    @if ($locations->count() > 0)
                                        @foreach ($locations as $key => $location)
                                            <option value="{{ $location->id }}">
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="market">Market<span class="text-danger">*</span> </label>
                                <select class="form-control input-solid mySelect2" id="market" name="market_id" required>
                                    <option value="" selected disabled>Select Market--</option>
                                    
            
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Product Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-solid" name="name" id="name" value="{{ $product->name }}" placeholder="Enter Product Name" required>                               
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Price<span class="text-danger">*</span></label>
                                <input type="number" class="form-control input-solid" name="price" id="price" value="{{ $product->price }}" placeholder="Enter Price" required>                               
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Product snapshop<span class="text-danger">*</span></label>
            
                                {{-- <input type="file" name="image" id="image" class="dropify" @if($product->image_url != null) data-default-file="{{ asset('storage/products/'.$product->image_url) }}" @endif> --}}
                               <input type="file" name="image" id="image" class="dropify" data-max-file-size="6M"  @if($product->image_url != null) data-default-file="{{ $product->image_url }}" @endif>
                               
                            </div>
                            
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger"></span></label>
                               <textarea name="description" class="form-control" placeholder="Add description of product here...">{{ $product->description }}</textarea>
                            </div>
                           
                        </div>


                    </div>

                    
               
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" class="btn btn-primary btn-sm">{{ $product->id == null ? "Save" : "Update" }}</button>
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
    $('.dropify').dropify();

    
   
    $(document).ready(function() {
        $("#location").change(function() {
            var a = $(this).val();
    
            $("#market").find("option").not(":first").remove(),
                $.ajax({
                    url: "/getMarkets/" + a,
                    type: "get",
                    dataType: "json",
                    success: function(a) {
                        var n = 0;
                        if ((null != a.data && (n = a.data.length), n > 0))
                            for (var t = 0; t < n; t++) {
                                var e = "<option value='" + a.data[t].id + "'>" + a.data[t].name + "</option>";
                                $("#market").append(e);
                            }
                    },
                });
        });
    });

    $('.mySelect2').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass(
        'w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
        closeOnSelect: !$(this).attr('multiple'),
        dropdownParent: $('#addRowModal'),
    }).change(function(e) {
            $(this).valid();
        });
</script>