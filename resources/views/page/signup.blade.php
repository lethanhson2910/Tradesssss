@extends('master')
@section('title','Sign Up')
@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Đăng kí</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb">
        <a href="index.html">Home</a> / <span>Đăng kí</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">

    <form action="{{route('f.home.signup')}}" method="post" class="beta-form-checkout">
      {{csrf_field()}}
      <div class="row">
        <div class="col-sm-3"></div>
        @if (Session::has('thanhcong'))
          <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
        @endif
        <div class="col-sm-6">
          <h4>Đăng kí</h4>
          <div class="space20">&nbsp;</div>


          <div class="form-block">
            <label for="email">Email address*</label>
            <input type="email" id="email" required name="email">
          </div>

          <div class="form-block">
            <label for="your_last_name">Fullname*</label>
            <input type="text" id="your_last_name" required name="name">
          </div>
          <div class="form-block">
            <label for="phone">Password*</label>
            <input type="text" id="phone" required name="password">
          </div>
          <div class="form-block">
            <label for="phone">Re password*</label>
            <input type="text" id="phone" required name="repassword">
          </div>
          <div class="form-block">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </div>
        <div class="col-sm-3"></div>
      </div>
    </form>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
