@extends('master')
@section('title','CheckOut')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đặt hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">

        <form action="#" method="post" class="beta-form-checkout">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Đặt hàng</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label for="name">Họ tên*</label>
                        <input type="text" id="name" placeholder="Họ tên" required>
                    </div>
                    <div class="form-block">
                        <label>Giới tính </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

                    </div>

                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" required placeholder="expample@gmail.com">
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa chỉ*</label>
                        <input type="text" id="adress" placeholder="Street Address" required>
                    </div>


                    <div class="form-block">
                        <label for="phone">Điện thoại*</label>
                        <input type="text" id="phone" required>
                    </div>

                    <div class="form-block">
                        <label for="notes">Ghi chú</label>
                        <textarea id="notes"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head">
                            <h5>Đơn hàng của bạn</h5>
                        </div>
                        {{-- @if (session()->has('success_message'))
              <div class="alert alert-success">
                  {{session()->get('success_message')}}
                    </div>
                    @endif --}}

                    <div class="your-order-body" style="padding: 0px 10px">
                        <div class="your-order-item">
                            <div>
                                @foreach (Cart::content() as $item)
                                <!--  one item	 -->
                                <div class="media">
                                    <img width="25%" src="source/image/product/{{$item->model->image}}" alt="" class="pull-left">
                                    <div class="media-body">
                                        <p class="font-large">{{$item->name}}</p>
                                        <span class="color-gray your-order-info">Giá:{{$item->price}}</span>
                                        <input type="hidden" name="" value="{{$item->price}}" id="price_{{$item->model->id}}">
                                        <span class="color-gray your-order-info">So luong hien tai:{{$item->qty}}</span>
                                        <span class="color-gray your-order-info"> Số lượng:
                                            <select class="quantity" id="quantity" name="unit" data-id="{{$item->rowId}}">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </span>

                                            <a target="_self" href="{{route('f.cart.delete',$item->rowId)}}">Delete</a>


                                    </div>
                                </div>
                                @endforeach
                                <!-- end one item -->
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="your-order-item">
                            <div class="pull-left">
                                <p class="your-order-f18">Tổng tiền:</p>
                            </div>
                            <div class="pull-right">
                                <h5 class="color-black">{{Cart::total()}}</h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>




                    <div class="your-order-head">
                        <h5>Hình thức thanh toán</h5>
                    </div>

                    <div class="your-order-body">
                        <ul class="payment_methods methods">
                            <li class="payment_method_bacs">
                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
                                <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                <div class="payment_box payment_method_bacs" style="display: block;">
                                    Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                                </div>
                            </li>

                            <li class="payment_method_cheque">
                                <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
                                <label for="payment_method_cheque">Chuyển khoản </label>
                                <div class="payment_box payment_method_cheque" style="display: none;">
                                    Chuyển tiền đến tài khoản sau:
                                    <br>- Số tài khoản: 123 456 789
                                    <br>- Chủ TK: Nguyễn A
                                    <br>- Ngân hàng ACB, Chi nhánh TPHCM
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>
                </div> <!-- .your-order -->
            </div>
    </div>
    </form>
</div> <!-- #content -->
</div> <!-- .container -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    //bat su kien input quantity
    (function(){

      const classname = document.querySelectorAll('.quantity');

      Array.from(classname).forEach(function(element){
        element.addEventListener('change',function(){
          const id = element.getAttribute('data-id');
          axios.patch('cart/' +id,{
            quantity:this.value
          })
          .then(function(response) {
              // console.log(response);

              window.location.href='{{route ('f.cart.cart')}}'
          })
          .catch(function(error) {
              console.log(error);
          });
        });

      });
    })();



    //lay gia tri cua options

    //thay doi hien thi cua ket qua
</script>
@endsection
