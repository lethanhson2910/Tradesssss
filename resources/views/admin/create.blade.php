@extends('admin.master')
@section('title','Create Product')
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


                    <form action="{{route('f.admin.create')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Category_id</label>
                            <select class="form-control" name="category_id">
                              @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                        <label>Unit_price</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" name="unit_price">
                            <span class="input-group-addon">$</span>
                        </div>
                        <label>Promotion_price</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" name="promotion_price">
                            <span class="input-group-addon">$</span>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" id="image" name="image" >
                            <img id="imageshow" style="width:100px;height:100px;">
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input class="form-control" name="unit">
                        </div>
                        <div class="form-group">
                            <label>New</label>
                            <select class="form-control" name="new">
                                <option>0</option>
                                <option>1</option>
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
<script>
  $(document).ready(function(){
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#imageshow').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    $('#image').on('change',function(){
      readURL(this);
    });
  });
</script>
@endsection
