@include('main_header')
  <!-- slider Area Start-->
  <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Card List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- slider Area End-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
               @if($cart && $cart->items->count())
                @php
                     $total = $cart->items->sum(function($item) {
                     return $item->product->prod_price * $item->quantity;
                    });
                @endphp
                    @foreach($cart->items as $item)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="{{asset('product_img/'.$item->product->prod_img)}}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>{{$item->product->prod_name}}</p>
                    </div>
                  </div>
                </td> 
                <td>
                  <h5>{{$item->product->prod_price}}</h5>
                </td>
                <td>    
                   <h5>{{ $item->quantity }}</h5>
                </td>
                <td>
                  <h5>₹{{ $item->product->prod_price * $item->quantity }}</h5>
                </td>
               </tr>
              <tr>
                 @endforeach
                 <td></td>
                 <td></td>
                <td>
                  <h5>Grand Total</h5>
                </td>
                <td>
                  <h5>₹{{ $total }}</h5>
                </td>
              </tr>
             @else
              <center><h3 style="color:red;margin-bottom:20px;">Your cart is empty!</h3></center>
            @endif
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="/product_view">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="/checkout">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
@include('footer')