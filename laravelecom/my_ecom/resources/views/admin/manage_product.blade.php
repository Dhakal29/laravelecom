@extends('admin/layout');
@section('page_title','Manage Product')
@section('container')
<h3>Manage Product</h3>
<a href="{{ url('admin/product') }}"><button type="button" class="btn btn-success">Back</button></a>
<div class="row m-t-30">
    <div class="col-md-12"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="card col-lg-10">
                    <div class="card-body" >
                        <form action="{{ route('product.manage_product_process') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">Product Name</label>
                                <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="slug" class="control-label mb-1">Product Slug</label>
                                <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('slug')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="image" class="control-label mb-1">Product Image</label>
                                <input id="image" value="{{$image}}" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="brand" class="control-label mb-1">Product Brand</label>
                                <input id="brand" value="{{$brand}}" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('brand')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="model" class="control-label mb-1">Product model</label>
                                <input id="model" value="{{$model}}" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('model')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="short_desc" class="control-label mb-1">Product short desc</label>
                                <textarea id="short_desc" value="{{$short_desc}}" name="short_desc"  class="form-control" aria-required="true" aria-invalid="false" required>
                                </textarea>
                                    @error('short_desc')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="desc" class="control-label mb-1">Product desc</label>
                                <textarea id="desc" value="{{$desc}}" name="desc"  class="form-control" aria-required="true" aria-invalid="false" required>
                                </textarea>
                                    @error('desc')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="keywords" class="control-label mb-1">Product Keywords</label>
                                <textarea id="keywords" value="{{$keywords}}" name="keywords"  class="form-control" aria-required="true" aria-invalid="false" required>
                                </textarea>
                                    @error('keywords')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label for="technical_specification" class="control-label mb-1">Technical Specification</label>
                                <input id="technical_specification" value="{{$technical_specification}}" name="technical_specification" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('technical_specification')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="uses" class="control-label mb-1">Uses</label>
                                <input id="uses" value="{{$uses}}" name="uses" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('uses')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="warranty" class="control-label mb-1">Warranty</label>
                                <input id="warranty" value="{{$warranty}}" name="warranty" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('warranty')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>             
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                   Submit
                                </button>
                            </div>
                            <input type="hidden" name="id" value="{{$id}}">
                        </form>
                    </div>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection
