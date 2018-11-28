@extends('admin.master')
@section('title','List Product')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Unit_price</th>
                                <th>Promotion_price</th>
                                <th>Image</th>
                                <th>Unit</th>
                                <th>New</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($product as $pd)
                            <tr>
                              <th>{{$pd->name}}</th>
                              <th>{{$pd->category->name}}</th>
                              <th>{{$pd->description}}</th>
                              <th>{{$pd->unit_price}}</th>
                              <th>{{$pd->promotion_price}}</th>
                              <th><img style="width:50px;height:50px;" src="source/image/product/{{$pd->image}}" alt=""></th>
                              <th>{{$pd->unit}}</th>
                              <th>{{$pd->new}}</th>
                              <th>
                                 <a target="_self" href='{{route('f.admin.edit',$pd->id)}}'> Edit</a>
                                 <a target="_self" href='{{route('f.admin.delete',$pd->id)}}'> Delete</a>
                             </th>
                            </tr>
                          @endforeach

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->

</div>
@endsection
