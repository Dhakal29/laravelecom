@extends('admin/layout');
@section('page_title','Product')
@section('container')
{{ session('message') }}
<h3>Product</h3>
<a href="{{ url('admin/product/manage_product') }}"><button type="button" class="btn btn-success">Add Product</button></a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>              
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list['id']  }}</td>
                        <td>{{ $list['name'] }}</td>
                        <td>{{ $list['slug'] }}</td>
                        <td>
                            <a href="{{url('admin/product/manage_product/')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="{{url('admin/product/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
