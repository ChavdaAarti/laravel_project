 @include('main_header')

 <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

<section class="checkout_area section_padding">
    <div class="container">
      <div class="returning_customer">
        <p>
          If you have shopped with us before, please enter your details in the
          boxes below.
        </p>
         <form class="row contact_form" action="/checkout" method="post">
            @csrf   
          <div class="col-md-12 form-group p_star">
            <input type="textarea" class="form-control" name="address" placeholder="Delivery Address"/>
          </div>
          <div class="col-md-12 form-group">
             <div class="creat_account">
              <input type="checkbox" id="f-option" name="selector" checked/>
              <label for="f-option">cash_on_delivery</label>
             </div>
        </div>
        <div class="col-md-12 form-group">
            <button type="submit" value="submit" class="btn_3">
              Checkout
            </button>
            </div>
        </form>
</div>
</div>
</section>

@include('footer')