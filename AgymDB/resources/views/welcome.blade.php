@extends('layouts.main')

@section('topnav')

<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/#services">Services</a></li>
        <li><a href="facility">Facility</a></li>
        <li><a href="products">Products</a></li>
        <li><a href="/#rates">Rates</a></li>
        <li><a href="/#contact">Contact</a></li>
        @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/home') }}">My Account</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            @else
            <li><a href="{{ route('login') }}">Log In</a></li>
            <li><a href="{{ route('register') }}">Register</a></li><!-- Here for testing. Remove later -->
            @endauth

        @endif

    </ul>
</nav>

@endsection


@section('hero')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h1>Welcome to CalFit Gym</h1>
    <h2>where we help you obtain a healthy and fit lifestyle</h2>
    <a href="#about" class="btn-get-started scrollto">Learn More</a>
    </div>
</section><!-- End Hero -->

@endsection

@section('main')

<main id="main">
    <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                     <img src="{{ asset('images/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                <h3>What we do</h3>
                <p>
                    A stong and healthy body is essential to be able to enjoy life to the fullest
                    and we at California Fitness Gym, are here to journey with you in the mission
                    to attain a strong and fit body through excellent euqipment, service, and amenities.
                    Our team is always keen to help you achieve your fitness goals. Join us now!
                </p>
                </div>
            </div>

            </div>
        </section><!-- End About Section -->

         <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

            <div class="section-title">
                <span>Services</span>
                <h2>Services</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            </div>


            <div class="grid">
                <div>
                    <div class="container">
                        <div class="row quality-equipment">
                            <div class="col-lg-4 text-block" data-aos="fade-right">
                                <div class="text-lockup">
                                    <h3>We provide you</h3>
                                    <h2>Quality Equipment</h2>
                                    <i class="icofont-gym-alt-2 icofont-2x"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <a href="">View Gallery</a>
                                </div>
                            </div>
                            <div class="col-lg-8 large-thumb" data-aos="fade-left"></div>

                        </div>

                        <div class="row personalized-coaching">
                            <div class="col-lg-8 large-thumb" data-aos="fade-right"></div>
                            <div class="col-lg-4 text-block" data-aos="fade-left">
                                <div class="text-lockup">
                                    <h3>Improve through</h3>
                                    <h2>Personalized Coaching</h2>
                                    <i class="icofont-gym icofont-2x"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <a href="">View Rates</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row mid-unit">
                        <div class="col-lg-4 healthy-options">
                            <div class="small-thumb" data-aos="fade-right"></div>
                            <div class="text-block" data-aos="fade-right">
                                <div class="text-lockup">
                                    <h3>Enjoy our</h3>
                                    <h2>Healthy Options</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <a href="">View Products</a>
                                    <i class="icofont-food-basket icofont-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 summer-fun">
                            <div class="large-thumb" data-aos="fade-left"></div>
                            <div class="text-block" data-aos="fade-left">
                                <div class="text-lockup">
                                    <h2>Summer of Fun</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row bottom-unit">
                        <div class="col-lg-8 merchandise">
                            <div class="large-thumb" data-aos="fade-right"></div>
                            <div class="text-block" data-aos="fade-right">
                                <div class="text-lockup">
                                    <h3>Helping You</h3>
                                    <h2>Get Involved In Yourself</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur.</p>
                                    <a href="">View Merchandise</a>
                                    <i class="icofont-shopping-cart icofont-2x"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 merchandise-pics">
                            <div class="small-thumb-1" data-aos="fade-left"></div>
                            <div class="small-thumb-2" data-aos="fade-left"></div>
                        </div>
                    </div>
                </div>
            </div><br><br>

            <div class="container">

                <div class="section-title">
                  <span>Other Amenities</span>
                  <h2>Other Amenities</h2>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box">
                      <div class="icon"><i class="bx bx-wifi"></i></div>
                      <h4><a href="">Wi-Fi</a></h4>
                      <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="icon-box">
                      <div class="icon"><i class="bx bx-closet"></i></div>
                      <h4><a href="">Locker Room</a></h4>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                      <div class="icon"><i class="bx bx-droplet"></i></div>
                      <h4><a href="">Shower Room</a></h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                  </div>

                </div>

              </div>

        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Let's do this together!</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#contact">Contact Us!</a>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Rates Section ======= -->
        <section id="rates" class="pricing">
            <div class="container">

            <div class="section-title">
                <span>Pricing</span>
                <h2>Pricing</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                <div class="box">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li class="na">Pharetra massa</li>
                    <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                    <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
                <div class="box featured">
                    <h3>Business</h3>
                    <h4><sup>$</sup>19<span> / month</span></h4>
                    <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                    <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                <div class="box">
                    <h3>Developer</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                    <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                </div>

            </div>

            </div>
        </section><!-- End Rates Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

            <div class="section-title">
                <span>Contact</span>
                <h2>Contact</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p style="padding: 15px;">Elizabeth's Happy Corner Remedio Compound, 826 Gov. M. Cuenco Ave, Nasipit Tambalan, Cebu City, 6000 Cebu, Philippines</p>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p style="padding: 27px;">cebuultimategym@gmail.com</p>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p style="padding: 27px;">0905 523 1075</p>
                </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up">

                <div class="col-lg-12">
                <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=California Fitness Gym MMXVIII Elizabeth's Happy Corner Remedio Compound, 826 Gov. M. Cuenco Ave, Nasipit Tambalan, Cebu City, 6000 Cebu  &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->


</main><!-- End #main -->

@endsection

