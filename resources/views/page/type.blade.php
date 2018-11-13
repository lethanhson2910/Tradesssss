@extends('master')
@section('title','Product Type')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm {{$typename->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                      @foreach ($typee as $t)
                          <li><a target="_self" href="{{route('f.home.category',$t->id)}}">{{$t->name}}</a></li>
                      @endforeach


                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Danh Sách Sản Phẩm</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($product_type)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                          @foreach ($product_type as $pt)
                            <div class="col-sm-4">
                                <div class="single-item">
                                  @if ($pt->promotion_price!=0)
                                  <div class="ribbon-wrapper">
                                      <div class="ribbon sale">Sale</div>
                                  </div>
                                  @endif
                                    <div class="single-item-header">
                                        <a href="product.html"><img style="width:250px;height:300px;" src="source/image/product/{{$pt->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$pt->name}}</p>
                                        <p class="single-item-price" style="font-size:18px; ">
                                          @if ($pt->promotion_price==0)
                                          <span class="flash-detail">{{number_format($pt->unit_price)}} đồng</span>
                                          @else
                                          <span class="flash-del    ">{{number_format($pt->unit_price)}} đồng</span>
                                          <span class="flash-sale">{{number_format($pt->promotion_price)}} đồng</span>
                                          @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                        <div class="row">
                            {{$product_type->links()}}
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản Phẩm Khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($product_type)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                          @foreach ($another_product as $ap)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="source/image/product/{{$ap->name}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                      <p class="single-item-title">{{$ap->name}}</p>
                                      <p class="single-item-price">
                                          @if ($ap->promotion_price==0)
                                          <span class="flash-detail">{{number_format($ap->unit_price)}} đồng</span>
                                          @else
                                          <span class="flash-del    ">{{number_format($ap->unit_price)}} đồng</span>
                                          <span class="flash-sale">{{number_format($ap->promotion_price)}} đồng</span>
                                          @endif

                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                          @endforeach


                        </div>


                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
<script type="text/javascript">
  $(document).ready(function(){
    $(".page-link").each(function() {
        // checks if its the same on the address bar
        $(this).attr('target','_self');

    });
  });
</script>
@endsection
