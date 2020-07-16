@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>About Us - {{config('app.name')}} </title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
@endsection

@section('main-content')
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{ asset('images/about_us.jpg') }}" alt="About {{config('app.name')}} "></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">About Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 2
    =========================== -->
    <section id="about2" class="about about-2 pb-30">
      <div class="container">
        @include('inc.messages')
        <div class="row">
          <div class="col-sm-12 col-md-9 col-lg-5">
            <div class="about__img mb-60">
              <img src="{{ asset('images/about_us.jpg') }}" alt="about us - {{config('app.name')}}" class="img-fluid">
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="row heading heading-2">
              <div class="col-sm-12 col-md-12 col-sm-12">
                <h2 class="heading__title">Safe, Reliable And Express Logistic & Transport Solutions
                  That Saves Your
                  Time!</h2>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-7 col-lg-7">
                <p class="heading__desc mb-30">PZI  is a Company registered in Lagos Nigeria with Branch in USA and  UK. We provide Procurement services, customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners  in different countries. </p>

                <p>We pride ourselves on providing Freight forwarding,  transport and shipping services locally and Globally ( through our affiliates and partners) . 
                We also utilize our Vast network to source and secure Project equipment and items from vendors globally through confirmed OEM representation and Global Suppliers.
                We are dedicated to provide services to our clients in line with Industry and international Best practice best combined with decades of experience.
                </p>
                <img src="{{ asset('images/signature.JPG') }}" alt="signature" class="signature mb-30">
              </div><!-- /.col-lg-7 -->
              <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
                  data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                  data-speed="700">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-worldwide"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Our Mission</h4>
                      <p class="fancybox__desc">Utilizing the international best practice to ensure optimum client satisfaction and service delivery at all points.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-transfer"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Our Vision</h4>
                      <p class="fancybox__desc">To provide the  best reliable service obtainable in the Freight Forwarding, shipping and Procurement supply Chain.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.carousel -->
              </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 2 -->



    <!-- ======================
           banner 1
      ========================= -->
    <section id="banner1" class="banner banner-1 video fancybox-layout2 p-0 bg-theme">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 equal-height">
            <div class="inner-padding">
              <div class="heading heading-2 mb-50">
                <h2 class="heading__title color-white">Services Delivery to Your Expectation </h2>
                <p class="heading__desc color-white">PZI Group is firm is dedicated to providing specific services with expertise and dedication to your expectation.  We represent many top Brands, service Providers and Original Equipment Manufacturers (OEM) to provide distinct services and supplies in line with the relevant industry best practice.</p>
              </div><!-- /.heading -->
              <div class="row">
                <!-- fancybox item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-credit-cards"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Customer Focus</h4>
                      <p class="fancybox__desc">We take care of our customers and client to ensure prime service delivery and seamless interface to understand service requirements. </p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-search-worldwide"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Optimum Service Delivery </h4>
                      <p class="fancybox__desc">Performance and innovation is our corporate mantra to enable us sustain unrelenting efforts to achieve our corporate vision and mission to engineer growth and optimum service delivery to our clients.  </p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
              <a href="{{ route('contact.us') }}" class="btn  btn__white btn__hover2 btn__lg">Contact us</a>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="bg-overlay">
              <div class="bg-img"><img src="assets/images/video/2.jpg" alt="background"></div>
              <div class="video__btn video__btn-white align-v-h equal-height">
                <a class="popup-video" href="https://www.youtube.com/watch?4=&v=TKnufs85hXk">
                  <span class="video__player-animation"></span>
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a>
              </div>
            </div><!-- /.video -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner 1 -->

    <!-- ========================= 
            Testimonial #2
    =========================  -->
    <section id="testimonial2" class="testimonial testimonial-2 text-center pb-170">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
              <span class="heading__subtitle mb-0">Client’s Testimonials</span>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class=" owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">

              <!-- Testimonial #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc">PZI is an awesome company that prides itself in efficiency to the satisfaction of the client. Keep up the good works</p>
                </div><!-- /.testimonial-content -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #2 -->
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc">PZI Team is the best among our service providers.They have expertly trained team of Staff who take the extra step and go the Extra Mile to fulfill its obligation to Clients</p>
                </div><!-- /.testimonial-content -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #3 -->
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc">PZI is well organized and work to deliver services based on best practice and to the satisfaction of the customers.”</p>
                </div><!-- /.testimonial-content -->
              </div><!-- /. testimonial-item -->
            </div>
            <div class="owl-thumbs" data-slider-id="1">
              <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title">John Efobi</span>
                  <span class="testimonial__meta-desc">Bature Consult</span>
                </span><!-- /.testimonial-meta -->
              </button>
              <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title">Edith Amuchi</span>
                  <span class="testimonial__meta-desc">Daewoo Nigeria Limited</span>
                </span><!-- /.testimonial-meta -->
              </button>
              <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title">Ada Obaide</span>
                  <span class="testimonial__meta-desc">Zodiak Freight Services</span>
                </span><!-- /.testimonial-meta -->
              </button>
            </div><!-- /.owl-thumbs -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.testimonial2 -->


    <!-- ========================= 
            cta 1
    =========================  -->
    <section id="cta1" class="cta cta-1 border-top pt-40 pb-10">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-panel contact-panel-2">
              <div class="contact__panel-header d-flex align-items-center">
                <i class="icon-placeholder"></i>
                <h4 class="contact__panel-title">Global Locations</h4>
              </div>
              <div id="accordion">
                <div class="accordion-item">
                  <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                    <a class="accordion__item-title" href="#">Lagos Office</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse  show" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <ul class="contact__list list-unstyled">
                        <li><a href="tel:+2348173040154">+2348173040154</a></li>
                        <li>Email: Logisti@7oroof.com</li>
                        <li>Address: Lagos <br>
                            suite 6,<br>
                            41 Osolo Way<br> 
                            Ajao Estate-lagos<br>
                            Nigeria.
                          </li>
                        {{-- <li>Hours: Mon-Fri: 8am – 7pm</li> --}}
                      </ul>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion__item-title" href="#">Port-Harcourt Office</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <ul class="contact__list list-unstyled">
                        <li><a href="tel:+2348173040154">+2348173040154</a></li>
                        <li>Email: Logisti@7oroof.com</li>
                        <li>Address: Port-Harcourt Office <br>
                            No 64 Evo Road<br>
                            GRA Phase II,<br>
                            Port-Harcourt, Rivers State<br>
                            Nigeria.
                        </li>
                        {{-- <li>Hours: Mon-Fri: 8am – 7pm</li> --}}
                      </ul>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion__item-title" href="#">London Office</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <ul class="contact__list list-unstyled">
                        <li><a href="tel:+447515370301">UK Contact: +447515370301</a></li>
                        <li><a href="tel:++00918323716873">USA Contact: +009 18323716873</a></li>
                        <li>Email: Logisti@7oroof.com</li>
                        <li>Address: London Office <br>
                            524 York Road, Stevenage,<br>
                            Hertfordshire, SG1 4EP<br>
                            United Kingdom.
                          </li>
                        {{-- <li>Hours: Mon-Fri: 8am – 7pm</li> --}}
                      </ul>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-3 text-right">
            <h2 class="cta__title">Sign up for industry news and insights from Logisti.</h2>
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <form action="{{ route('store.subscription') }}" method="POST">
              @csrf
              <div class="form-group d-flex">
                <input type="email" name="email" class="form-control mr-30" placeholder="Your Email Address">
                <button class="btn btn__primary btn__hover3">Sign Up!</button>
              </div>
            </form>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.cta1 -->
@endsection
   
@section('script')   
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
@endsection