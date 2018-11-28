@extends('admin.master')
@section('title','Edit Product')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">


                    <form action="{{route('f.admin.edit',$product->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label>Category_id</label>
                            <select class="form-control" name="category_id" value="{{$product->category_id}}">
                              <option value="1" {{ $product->category_id == '1' ? "selected" : ""  }}>Bánh mặn</option>
                              <option value="2" {{ $product->category_id == '2' ? "selected" : ""  }}>Bánh ngọt</option>
                              <option value="3" {{ $product->category_id == '3' ? "selected" : ""  }}>Bánh kem</option>
                              <option value="4" {{ $product->category_id == '4' ? "selected" : ""  }}>Bánh trái cây</option>
                              <option value="5" {{ $product->category_id == '5' ? "selected" : ""  }}>Bánh crepe</option>
                              <option value="6" {{ $product->category_id == '6' ? "selected" : ""  }}>Bánh Pizza</option>
                              <option value="7" {{ $product->category_id == '7' ? "selected" : ""  }}>Bánh su kem</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description">{{$product->description}}</textarea>
                        </div>
                        <label>Unit_price</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" name="unit_price" value="{{$product->unit_price}}">
                            <span class="input-group-addon">$</span>
                        </div>
                        <label>Promotion_price</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" name="promotion_price" value="{{$product->promotion_price}}">
                            <span class="input-group-addon">$</span>
                        </div>
                        {{-- <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" onchange="changeImg(this)">
                            <img style="width:250px;height:300px;"  src="source/image/product/{{$product->image}}">
                        </div> --}}
                        <div class="form-group">
                            <label>Unit</label>
                            <input class="form-control" name="unit" value="{{$product->unit}}">
                        </div>
                        <div class="form-group">
                            <label>New</label>
                            <select class="form-control" name="new" value="{{$product->new}}">
                                <option value="0" {{ $product->new == '0' ? "selected" : ""  }}>0</option>
                                <option value="1" {{ $product->new == '1' ? "selected" : ""  }}>1</option>
                            </select>
                        </div>
                </div>
                <div class="form-group" style="text-align:center;">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>




                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
@endsection
