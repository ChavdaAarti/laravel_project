@include('main_header')
 
 <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Product</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <section class="latest-product-area padding-bottom">
            <div class="container">
                    <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            
                        </div>
                    </div>    
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
						@foreach($product as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{asset('product_img/'.$product->prod_img)}}" alt="">
                                    </div>
                                        <h4>{{$product->prod_name}}</h4>
                                        <div class="price">
                                            <ul>
                                                <li style="color:red;">₹{{$product->prod_price}}</li>
                                            </ul>
                                        </div>
										<div class="price">
											<p>{{$product->prod_des}}</p>
                                        </div>
                                        <form action="/add-to-cart/{{ $product->id }}" method="POST">
                                         @csrf
                                         <div class="col-md-12 form-group p_star">
                                            <input type="number" class="form-control" name="quantity" value="1" min="1"
                                                placeholder="quantity" required>
                                        </div>
                                         <button class="bottom button" type="submit">Add to Cart</button>
                                         </form>
                                    </div>
                                </div>
								 @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Card two -->
                    <!-- Card three --> 
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
@include('footer')