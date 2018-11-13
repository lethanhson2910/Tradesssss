@extends('master')
@section('title','Home')
@section('slider')
@include('layouts.slider')


@endsection
@section('content')

<!-- THE FIRST SLIDE -->
<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
      data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/1.jpg" data-src="source/assets/dest/images/thumbs/1.jpg"
          style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
        </div>
    </div>

</li>
<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
      data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/1.jpg" data-src="source/assets/dest/images/thumbs/1.jpg"
          style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
        </div>
    </div>

<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
      data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/1.jpg" data-src="source/assets/dest/images/thumbs/1.jpg"
          style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
        </div>
    </div>

</li>

<li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
      data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/1.jpg" data-src="source/assets/dest/images/thumbs/1.jpg"
          style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
        </div>
    </div>

</li>
</ul>
</div>
</div>

<div class="tp-bannertimer"></div>
</div>
</div>
<!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($new_product as $new)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if ($new->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif

                                    <div class="single-item-header">
                                        <a href="product.html"><img style="width:250px;height:300px;" src="source/image/product/{{$new->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$new->name}}</p>
                                        <p class="single-item-price">
                                            @if ($new->promotion_price==0)
                                            <span class="flash-detail">{{number_format($new->unit_price)}} đồng</span>
                                            @else
                                            <span class="flash-del    ">{{number_format($new->unit_price)}} đồng</span>
                                            <span class="flash-sale">{{number_format($new->promotion_price)}} đồng</span>
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

                        </div> <!-- .beta-products-list -->
                        <div class="row">
                            {{$new_product->links()}}
                        </div>
                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Sản phẩm khuyến mãi</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($product_sale)}} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach ($product_sale as $p_s)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                      @if ($new->promotion_price!=0)
                                      <div class="ribbon-wrapper">
                                          <div class="ribbon sale">Sale</div>
                                      </div>
                                      @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img style="width:250px;height:300px;" src="source/image/product/{{$p_s->image}}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$p_s->name}}</p>

                                            <p class="single-item-price">
                                                <span class="flash-del    ">{{number_format($new->unit_price)}} đồng</span>
                                                <span class="flash-sale">{{number_format($new->promotion_price)}} đồng</span>
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
                            </div> <!-- .beta-products-list -->
                            <div class="row">
                                {{$product_sale->links()}}
                            </div>
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
        @endsection
