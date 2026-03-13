 @include('main_header')
 
 <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Brand</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <section class="latest-product-area latest-padding">
            <div class="container">
            
                
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			 <div class="row">
                @foreach($brand as $brands)
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-product mb-60">
						<div class="product-img">
							<img src="{{ asset('product_img/'.$brands->brand_img) }}" alt="" height=250 width=300>
						</div>
						<div class="product-caption">
						    <h4>{{$brands->brand_name}}</h4>
							<div class="price">
							    <p>{{$brands->brand_des}}</p>
							</div>
						</div>
					</div>
				</div> 
               @endforeach
	    	 </div>
	     </div>
	  </div>
  </div>
 </div>
</div>
</section>
@include('footer')