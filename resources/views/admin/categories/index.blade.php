@extends('layouts.app')

@section('content') 
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Categories</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{url('/')}}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Categories</a>
                    </li>
                   
                </ul>
            </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title"></h4>
                                    <button class="btn btn-primary btn-round btn-sm ml-auto raise-modal" data-url="{{ route('category.upsert', ['id' => 'new' ]) }}" data-targeturl="{{ route('category.loadpartial') }}" data-targetdiv="load-partial">
                                        <i class="fa fa-plus"></i>
                                        Add Category
                                    </button> 
                                </div>
                            </div>
                            <div class="card-body">   
                                <div class="table-responsive" id="load-partial"></div>
                            </div>
                        </div>
                    </div>                
                </div>
        </div>
    </div> 
@endsection



@push("script")
<script>
    $(document).ready(function () {
        LoadContentToDiv("{{ route('category.loadpartial') }}", "load-partial");
    });
</script>
@endpush
