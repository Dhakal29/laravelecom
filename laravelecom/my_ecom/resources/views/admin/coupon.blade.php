@extends('admin/layout');
@section('page_title','Coupon')
@section('container')
{{ session('message') }}
<h3>Coupon</h3>
<a href="coupon/manage_coupon"><button type="button" class="btn btn-success">Add Coupon</button></a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Code</th>
                        <th>Value</th>
                        <th>Action</th>              
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list['id']  }}</td>
                        <td>{{ $list['title'] }}</td>
                        <td>{{ $list['code'] }}</td>
                        <td>{{ $list['value'] }}</td>

                        <td>
                            <a href="{{url('admin/coupon/manage_coupon/')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="{{url('admin/coupon/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
