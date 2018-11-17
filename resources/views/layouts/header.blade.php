<div id="header">
  <div class="header-top">
    <div class="container">
      <div class="pull-left auto-width-left">
        <ul class="top-menu menu-beta l-inline">
          <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
          <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
        </ul>
      </div>
      <div class="pull-right auto-width-right">
        <ul class="top-details menu-beta l-inline">

          @if (Auth::check())
              <li><a target="_self" href="">Chào {{Auth::user()->full_name}}</a></li>
              <li><a target="_self" href="{{route('f.home.logout')}}">Đăng xuất</a></li>
          @else
            <li><a target="_self" href="{{route('f.home.signup')}}">Đăng kí</a></li>
            <li><a target="_self" href="{{route('f.home.login')}}">Đăng nhập</a></li>
          @endif

        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-top -->
  <div class="header-body">
    <div class="container beta-relative">
      <div class="pull-left">
        <a href="index.html" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
      </div>
      <div class="pull-right beta-components space-left ov">
        <div class="space10">&nbsp;</div>
        <div class="beta-comp">
          <form role="search" method="get" id="searchform" action="{{route('f.home.search')}}">
                <input type="text" value="" name="search" id="s" placeholder="Nhập từ khóa..." />
                <button class="fa fa-search" type="submit" id="searchsubmit"></button>
          </form>
        </div>

        <div class="beta-comp">
          <div class="cart"><i class="fa fa-shopping-cart"></i>
            <a target="_self" href="{{route('f.cart.cart')}}">Giỏ hàng</a>
          </div>

        </div>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-body -->
  <div class="header-bottom" style="background-color: #0277b8;">
    <div class="container">
      <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
      <div class="visible-xs clearfix"></div>
      <nav class="main-menu">
        <ul class="l-inline ov">
          <li><a target="_self" href="{{route('f.home.home')}}">Trang chủ</a></li>
          <li><a href="#">Loại sản phẩm</a>
            <ul class="sub-menu">
              @foreach ($loai_sp as $ls)
                  <li><a target="_self" href="{{route('f.home.category',$ls->id)}}">{{$ls->name}}</a></li>
              @endforeach


            </ul>
          </li>
          <li><a target="_self" href="{{route('f.home.aboutus')}}">Giới thiệu</a></li>
          <li><a target="_self" href="{{route('f.home.contact')}}">Liên hệ</a></li>
        </ul>
        <div class="clearfix"></div>
      </nav>
    </div> <!-- .container -->
  </div> <!-- .header-bottom -->
</div> <!-- #header -->
