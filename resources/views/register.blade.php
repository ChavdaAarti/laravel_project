@include('main_header'); 
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                           <h2>Already have an account?</h2>
							<p>Login to access your account, manage orders, and enjoy a smooth shopping experience.</p>
                            <a href="/login" class="btn_3">Login Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            
                            <form class="row contact_form" method="post" action="/register">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                 <div class="col-md-12 form-group p_star">
                                    <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile Number">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="Password" class="form-control" name="password" placeholder="Enter Password">
                                </div>
                                <!--
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="" name="user_mobile" value=""
                                        placeholder="Enter Mobile NO" oninput="this.value = this.value.replace(/[^0-9]/g,'').slice(0,10);" maxlength="10" required>
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <textarea type="text" class="form-control" id="" name="user_address" value=""
                                        placeholder="Enter address" required></textarea>
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="" name="user_city" value=""
                                        placeholder="Enter City">
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="" name="user_pincode" value=""
                                        placeholder="Enter Pincode" required>
                                </div>
								<div class="col-md-12 form-group p_star">
                                   Select Your Photo : <input type="file" class="form-control" id="" name="user_photo" value="">
                                </div>
								
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>-->
                                    <button type="submit" value="submit" class="btn_3">
                                        Register
                                    </button>
                                    <!--<a class="lost_pass" href="#">forget password?</a>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

@include('footer'); 