@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries."> 
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>{{config('app.name')}}</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://kit.fontawesome.com/dfbe4c7cae.js" crossorigin="anonymous"></script>
  <style >
    body, div, p, span, a{
      font-size: 20px;
    }
    .project__img img{
      height: 250px;
    }
  </style>
</head>
@endsection
@section('main-content')

    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
      <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
        data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{ asset('img/banner1.jpg') }}" alt="{{config('app.name')}}"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                @include('inc.messages')
                <div class="slide__content">
                  <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                  <p class="slide__desc">Providing flexibile, improved service levels, and accelerated
                    delivery.</p>
                  <a href="{{ route('forwarding') }}" class="btn btn__white mr-40">Read more</a>
                  <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <i class="fa fa-play"></i>
                    </div>Our Video!
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{ asset('img/banner2.jpg') }}" alt="{{config('app.name')}}"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                  <p class="slide__desc">Providing flexibile, improved service levels, and accelerated delivery.</p>
                  <a href="{{ route('procurement') }}" class="btn btn__white mr-40">Read more</a>
                  <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <i class="fa fa-play"></i>
                    </div>Our Video!
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{ asset('img/banner3.jpg') }}" alt="{{config('app.name')}}"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                  <p class="slide__desc">Providing flexibile, improved service levels, and accelerated
                    delivery.</p>
                  <a href="{{ route('sourcing') }}" class="btn btn__white mr-40">Read more</a>
                  <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <i class="fa fa-play"></i>
                    </div>Our Video!
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{ asset('img/banner4.jpg') }}" alt="{{config('app.name')}}"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                  <p class="slide__desc">Providing flexibile, improved service levels, and accelerated delivery.</p>
                  <a href="{{ route('technology') }}" class="btn btn__white mr-40">Read more</a>
                  <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <i class="fa fa-play"></i>
                    </div>Our Video!
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12  d-none d-lg-block">
            <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
              <button class="owl-thumb-item">
                {{-- <i class="fa fa-shipping-fast"></i> --}}
                <span>Local & International <br> Freight Forwarding </span>
              </button>
              <button class="owl-thumb-item">
                {{-- <i class="fa fa-dolly"></i> --}}
                <span>Local & International <br> Procurement</span>
              </button>
              <button class="owl-thumb-item">
                {{-- <i class="fab fa-searchengin"></i> --}}
                <span>Equipment & Machinery <br> Sourcing </span>
              </button>
              <button class="owl-thumb-item">
                {{-- <i class="fas fa-satellite-dish"></i> --}}
                <span>Information Technology  Services</span>
              </button>
            </div><!-- /.owl-thumbs -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.slider -->

    <!-- ========================
      About 4
    =========================== -->
    <section id="about4" class="about about-2 about-4 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="row heading heading-2">
              <div class="col-sm-12 col-md-12 col-sm-12">
                <h2 class="heading__title">Safe, Reliable And Express Logistic & Transport Solutions
                  That Saves Your Time!</h2>
              </div><!-- /.col-lg-12 -->
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
              <div class="col-sm-12 col-md-7 col-lg-7">
                <p class="heading__desc mb-30">PZI  is a Company registered in Lagos Nigeria with Branch in USA and  UK. We provide Procurement services, customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners  in different countries. </p>
                <p>We pride ourselves on providing Freight forwarding,  transport and shipping services locally and Globally ( through our affiliates and partners) . 
                We also utilize our Vast network to source and secure Project equipment and items from vendors globally through confirmed OEM representation and Global Suppliers.
                We are dedicated to provide services to our clients in line with Industry and international Best practice best combined with decades of experience.
                </p>
                
                <img src="{{ asset('images/signature.JPG') }}" alt="singnture" class="signature mb-30">
              </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-9 col-lg-5">
            <div class="about__img mb-60">
              <img src="{{ asset('images/about_us.jpg') }}" alt="about img" class="img-fluid">
              <span>More About Us!</span>
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 4 -->

{{--     the video section goes here --}}

    

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services pt-0 bg-gray">
      <div class="container">
        <div class="row heading mb-40">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle">Services We Offer</span>
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-6 col-lg-5">
            <h2 class="heading__title">Dynamic  co-ordination of resourcees and Expertise to meet customer expectations.</h2>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
            <p class="heading__desc">Our global logistics partnership , advanced supply chain technology & Service processes will help you  develop and execute required service as expected.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{ asset('images/cargo.jpg') }}" alt="Project Cargo" class="img-fluid" style="height: 300px;">
              </div><!-- /.service-img -->
              <div class="service__overlay">
                {{-- <div class="service__icon"><i class="icon-airplane"></i></div> --}}
                <h4 class="service__title">Project Cargo</h4>
                <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                  transportation by air and all its related.</p>
                <a href="{{ route('project.cargo') }}" class="btn btn__white btn__link btn__underlined">Read More</a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{ asset('images/oem.jpeg') }}" alt="OEM/Agency" class="img-fluid" style="height: 300px;">
              </div><!-- /.service-img -->
              <div class="service__overlay">
                {{-- <div class="service__icon"><i class="icon-ship"></i></div> --}}
                <h4 class="service__title">OEM/Agency</h4>
                <p class="service__desc">Local support for international products that are already in service at sites around Nigeria helps foreign firms to reduce their cost in Nigeria.</p>
                <a href="{{ route('oem.agency') }}" class="btn btn__white btn__link btn__underlined">Read More</a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{ asset('images/consultancy.jpeg') }}" alt="Consultancy" class="img-fluid" style="height: 300px;">
              </div><!-- /.service-img -->
              <div class="service__overlay">
                {{-- <div class="service__icon"><i class="icon-truck"></i></div> --}}
                <h4 class="service__title">Consultancy</h4>
                <p class="service__desc">We are fully on ground to conduct extensive research and liaise with local and international Industry experts to provide vital information to streamline and augment decision making. </p>
                <a href="{{ route('consultancy') }}" class="btn btn__white btn__link btn__underlined">Read More</a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a href="{{ route('contact.us') }}" class="btn btn__primary btn__hover3 btn__lg mt-20">Get in touch Today</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services -->

    <!-- =========================== 
      fancybox Layout2
    ============================= -->

    <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
      <div class="container">
        
        <div class="row">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
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
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-search-worldwide"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Optimum Service Delivery </h4>
                <p class="fancybox__desc">Performance and innovation is our corporate mantra to enable us sustain unrelenting efforts to achieve our corporate vision and mission to engineer growth and optimum service delivery to our clients. </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-boxes"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Prime Client Representation </h4>
                <p class="fancybox__desc">The interests and expectations of our clients and the quality of our service ensures alignment of our objectives and the client/service expectation. </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-balance"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Sustained Development</h4>
                <p class="fancybox__desc">Our operations and procedures are reviewed and realigned with Industry best practice and current events and requirements relevant to all phases or our operation and activities.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox Layout2 -->
    <a name="request_quote"></a>

    <!-- ========================
        Request Quote Tabs
    =========================== -->

    <section id="requestQuoteTabs" class="request-quote request-quote-tabs pt-0 bg-gray">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="request__form">
              <nav class="nav nav-tabs">
                <a class="nav__link active" data-toggle="tab" href="#quote">
                  <div class="request__form-header d-flex align-items-center">
                    <i class="icon-box"></i>
                    <h4 class="request__form-title">Request A Quote</h4>
                  </div><!-- /.request-form-header -->
                </a>
                <a class="nav__link" data-toggle="tab" href="#track">
                  <div class="request__form-header d-flex align-items-center">
                    <i class="icon-worldwide"></i>
                    <h4 class="request__form-title">Track & Trace</h4>
                  </div><!-- /.request-form-header -->
                </a>
              </nav>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="quote">
                  <div class="request__form-body">
                    <div class="row">

                      <div class="col-sm-12 col-md-12 col-lg-8">
                        <form action="{{ route('quote.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @captcha
                          @if(count($errors) > 0)
                              @foreach($errors->all() as $error)
                                  {{ $error }}
                              @endforeach
                          @endif
                        <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <h6>Contact Information</h6>
                          </div><!-- /.col-lg-12 -->
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                              <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                              <input name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                              <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <h6 class="mt-5" id="agenta">Service specification</h6>
                            <button type="button" class="" data-toggle="modal" data-target="#exampleModal" id="prom5" style="display: none;">
                              <span><i class="fa fa-plus"></i></span> Add more Item
                            </button>
                          </div><!-- /.col-lg-12 -->
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group form-group-select">
                              <select name="service" class="form-control dynamic" >
                                <option value="">Select Type</option>
                                <option value="Freight Forwarding">Freight Forwarding</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Project Cargo">Project Cargo</option>
                                <option value="Procurement" >Procurement</option>
                                <option value="Door to Door">Door to Door</option>
                                <option value="Consultancy">Consultancy</option>
                              </select>
                            </div>
                          </div><!-- /.col-lg-6 -->

                          {{--This is for  procurement--}}
                              <div class="col-sm-6 col-md-4 col-lg-4" id="prom" style="display: none;">
                                <div class="form-group form-group-select">
                                  <select name="procurementType" class="form-control">
                                    <option>Select Type</option>
                                    <option value="Local">Local</option>
                                    <option value="International">International</option>
                                  </select>
                                </div>
                              </div><!-- /.col-lg-6 -->

                              
                                <div class="col-sm-6 col-md-4 col-lg-4" id="prom1" style="display: none;">
                                  <div class="form-group">
                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                  </div>
                                </div><!-- /.col-lg-6 -->
                              

                              <div class="col-sm-6 col-md-4 col-lg-4" id="prom2" style="display: none;">
                                <div class="form-group">
                                  <input name="quantity" type="text" class="form-control" placeholder="Quantity">
                                </div>
                              </div><!-- /.col-lg-6 -->
                              <div class="col-sm-6 col-md-4 col-lg-4" id="prom3" style="display: none;">
                                <div class="form-group">
                                  <input name="manufacturer" type="text" class="form-control" placeholder="Manufacturer">
                                </div>
                              </div><!-- /.col-lg-6 -->
                              <div class="col-sm-6 col-md-4 col-lg-4" id="prom4" style="display: none;">
                                <div class="form-group">
                                  <input name="origin" type="text" class="form-control" placeholder="Origin">
                                </div>
                              </div><!-- /.col-lg-6 -->

                              <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add More item</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <input name="item[]" type="text" class="form-control" placeholder="Item">
                                                  </div>
                                                </div><!-- /.col-lg-6 -->
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              <!--// Modal -->    
                        {{--//This is for  procurement--}}     

                          {{--This is for others apart from procurement--}}
                          <div class="col-sm-6 col-md-4 col-lg-4" id="NoProm">
                            <div class="form-group" >
                              <input name="cityOfDeparture" type="text" class="form-control" placeholder="City of Departure">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-4 col-lg-4" id="NoProm1">
                            <div class="form-group" >
                              <input name="deliveryCity" type="text" class="form-control" placeholder="Delivery City">
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-4 col-lg-4" id="NoProm2">
                            <div class="form-group form-group-select" >
                              <select name="incoterms" class="form-control">
                                <option value="Incoterms">Incoterms</option>
                                <option value="Incoterms 1">Incoterms 1</option>
                                <option value="Incoterms 2">Incoterms 2</option>
                              </select>
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-md-4 col-lg-4 d-flex" id="NoProm3">
                            <div class="form-group mr-20" id="NoProm4">
                              <input name="weight" type="text" class="form-control" placeholder="Weight">
                            </div>
                            <div class="form-group" id="NoProm5">
                              <input name="height" type="text" class="form-control" placeholder="Height">
                            </div>
                          </div><!-- /.col-lg-3 -->
                          <div class="col-sm-6 col-md-4 col-lg-4  d-flex" id="NoProm6">
                            <div class="form-group mr-20" id="NoProm7">
                              <input name="width" type="text" class="form-control" placeholder="Width">
                            </div>
                            <div class="form-group" id="NoProm8">
                              <input name="length" type="text" class="form-control" placeholder="Length">
                            </div>
                          </div><!-- /.col-lg-4 -->
                          <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap" id="NoProm9">
                            <div class="form-group input-radio" id="NoProm10">
                              <label class="label-radio">Fragile
                                <input type="radio" name="condition" value="Fragile" checked="">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                            <div class="form-group input-radio" id="NoProm11">
                              <label class="label-radio">Express Delivery
                                <input type="radio" name="condition" value="Express Delivery">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                            <div class="form-group input-radio" id="NoProm12">
                              <label class="label-radio">Insurance
                                <input type="radio" name="condition" value="Insurance">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                            <div class="form-group input-radio" id="NoProm13">
                              <label class="label-radio">Packaging
                                <input type="radio" name="condition" value="Packaging">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                          </div><!-- /.col-lg-12 -->
                          {{--//This is for others apart from procurement--}}

                           


                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">Attatch Documents:
                              <input type="file" name="image" class="form-control" >
                            </div>
                          </div><!-- /.col-lg-6 -->
                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" class="btn btn__secondary btn__block">Request A Quote</button>
                          </div><!-- /.col-lg-12 -->
                        </div>
                      </form>
                      </div><!-- /.col-lg-8 -->





                      <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="widget widget-help bg-theme">
                          <div class="widget__content">
                            <h5>How Can <br> We Help You!</h5>
                            <p>We understand the importance approaching each work integrally and believe in the power of
                              simple
                              and easy communication.</p>
                            <a href="{{ route('contact.us') }}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact
                              Us</a>
                          </div><!-- /.widget-download -->
                        </div><!-- /.widget-help -->
                      </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                  </div><!-- /.request-form-body -->
                </div><!-- /.tab -->
                <div class="tab-pane fade" id="track">
                  <div class="request__form-body">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="row">

                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                              <label>Order ID</label>
                              <div class="form-group form-group-select">
                                <select class="form-control">
                                  <option>Packaging</option>
                                  <option>Packaging 1</option>
                                  <option>Packaging 2</option>
                                </select>
                              </div>
                            </div>
                          </div><!-- /.col-lg-12 -->

                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                              <label>Tracking Number</label>
                              <div class="form-group">
                                <textarea class="form-control"
                                  placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking."></textarea>
                              </div>
                            </div>
                          </div><!-- /.col-lg-12 -->
                          <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                            <div class="form-group input-radio">
                              <label class="label-radio">Fragile
                                <input type="radio" name="radioGroup2" checked="">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                            <div class="form-group input-radio">
                              <label class="label-radio">Express Delivery
                                <input type="radio" name="radioGroup2">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                            <div class="form-group input-radio">
                              <label class="label-radio">Insurance
                                <input type="radio" name="radioGroup2">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                            <div class="form-group input-radio">
                              <label class="label-radio">Packaging
                                <input type="radio" name="radioGroup2">
                                <span class="radio-indicator"></span>
                              </label>
                            </div>
                          </div><!-- /.col-lg-12 -->
                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" class="btn btn__secondary btn__block">Track & Trace</button>
                          </div><!-- /.col-lg-12 -->
                        </div>
                      </div><!-- /.col-lg-8 -->
                      <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="widget widget-help bg-theme">
                          <div class="widget__content">
                            <h5>How Can <br> We Help You!</h5>
                            <p>We understand the importance approaching each work integrally and believe in the power of
                              simple
                              and easy communication.</p>
                            <a href="{{ route('contact.us') }}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact
                              Us</a>
                          </div><!-- /.widget-download -->
                        </div><!-- /.widget-help -->
                      </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                  </div><!-- /.request-form-body -->
                </div><!-- /.tab -->
              </div><!-- /.tab-content -->
            </div><!-- /.request-form -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Request Quote Tabs -->

    

    <!-- =========================
      Carousel Tabs 
      =========================== -->
    <section id="carouselTabs" class="carousel-tabs pb-30">
      <div class="pricing-bg">
        <div class="bg-img bg-overlay"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              {{-- <span class="heading__subtitle color-white">Latest Case Studies</span> --}}
              <h2 class="heading__title color-white">Featured Projects</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav class="nav nav-tabs nav-tabs-white">
              <a class="nav__link active" data-toggle="tab" href="#tab1">ALL Works</a>
              <a class="nav__link" data-toggle="tab" href="#tab2">Freight Forwarding</a>
              <a class="nav__link" data-toggle="tab" href="#tab3">Consultancy</a>
              <a class="nav__link" data-toggle="tab" href="#tab4">Logistics</a>
              <a class="nav__link" data-toggle="tab" href="#tab5">Procurement</a>
              <a class="nav__link" data-toggle="tab" href="#tab6">InformationTechnology</a>
            </nav>
            <div class="tab-content">


              <div class="tab-pane fade show active" id="tab1">
                <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="false" data-speed="800">
                  
                  @if($projects->count() > 0)
                  <!-- project item #1 -->
                  @foreach($projects as $project)
                  <div class="project-item">
                    <div class="project__img">
                      <img src="{{ postImage($project->image) }}" alt="{{$project->name}}}">
                      
                    </div><!-- /.project-img -->
                    <div class="project__content" style="color: black;">
                      <h4 class="project__title"><a href="{{ route('project.show', [$project->name, $project->id]) }}">{{$project->name}}</a></h4>
                      <p ><b style="font-weight: bolder;">Owner:</b> {{$project->owner}} <br>
                        <b>Client:</b> {{$project->client}} <br>
                        <b>Details:</b> {{strip_tags($project->details)}} <br>
                        <b>Scope:</b> 
                            <?php 
                                $arr = json_decode($project->scope);
                                
                            ?>
                            @foreach($arr as $item)
                              {{$item.','}}
                            @endforeach <br>
                        <b>Detailed Scope:</b>    
                                <?php 
                                    $array = json_decode($project->scope);
                                    
                                ?>
                                @foreach($array as $items)
                                  {{$items.','}}
                                @endforeach
                       </p>
                      
                    </div><!-- /.project-content -->
                  </div><!-- /.project-item -->
                  @endforeach
                  @else
                    <div class="project-item">
                      
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">No Project yet</a></h4>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  @endif
                  
                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->

              <div class="tab-pane fade" id="tab2">
                <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="false" data-speed="800">

                  @if(getProjects('Freight Forwarding')->count() > 0)                  
                  <!-- project item #1 -->
                  @foreach(getProjects('Freight Forwarding') as $project)
                  <div class="project-item">
                    <div class="project__img">
                      <img src="{{ postImage($project->image) }}" alt="{{$project->name}}}">
                      
                    </div><!-- /.project-img -->
                    <div class="project__content" style="color: black;">
                      <h4 class="project__title"><a href="{{ route('project.show', [$project->name, $project->id]) }}">{{$project->name}}</a></h4>
                      <p><b>Owner:</b> {{$project->owner}} <br>
                        <b>Client:</b> {{$project->client}} <br>
                        <b>Details:</b> {{strip_tags($project->details)}} <br>
                        <b>Scope:</b> 
                            <?php 
                                $arr = json_decode($project->scope);
                                
                            ?>
                            @foreach($arr as $item)
                              {{$item.','}}
                            @endforeach <br>
                        <b>Detailed Scope:</b>    
                                <?php 
                                    $array = json_decode($project->scope);
                                    
                                ?>
                                @foreach($array as $items)
                                  {{$items.','}}
                                @endforeach
                       </p>
                    </div><!-- /.project-content -->
                  </div><!-- /.project-item -->
                  @endforeach
                  @else
                    <div class="project-item">
                      
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">No Project yet</a></h4>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  @endif
                 

                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab3">
                <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="false" data-speed="800">
                  
                  
                  @if(getProjects('Consultancy')->count() > 0)                  
                  <!-- project item #1 -->
                  @foreach(getProjects('Consultancy') as $project)
                  <div class="project-item">
                    <div class="project__img">
                      <img src="{{ postImage($project->image) }}" alt="{{$project->name}}}">
                      
                    </div><!-- /.project-img -->
                    <div class="project__content" style="color: black;">
                      <h4 class="project__title"><a href="{{ route('project.show', [$project->name, $project->id]) }}">{{$project->name}}</a></h4>
                      <p><b>Owner:</b> {{$project->owner}} <br>
                        <b>Client:</b> {{$project->client}} <br>
                        <b>Details:</b> {{strip_tags($project->details)}} <br>
                        <b>Scope:</b> 
                            <?php 
                                $arr = json_decode($project->scope);
                                
                            ?>
                            @foreach($arr as $item)
                              {{$item.','}}
                            @endforeach <br>
                        <b>Detailed Scope:</b>    
                                <?php 
                                    $array = json_decode($project->scope);
                                    
                                ?>
                                @foreach($array as $items)
                                  {{$items.','}}
                                @endforeach
                       </p>
                    </div><!-- /.project-content -->
                  </div><!-- /.project-item -->
                  @endforeach
                  @else
                    <div class="project-item">
                      
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">No Project yet</a></h4>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  @endif
                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab4">
                <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="false" data-speed="800">
                    @if(getProjects('Logistics')->count() > 0)                  
                    <!-- project item #1 -->
                    @foreach(getProjects('Logistics') as $project)
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{ postImage($project->image) }}" alt="{{$project->name}}}">
                        
                      </div><!-- /.project-img -->
                      <div class="project__content" style="color: black;">
                        <h4 class="project__title"><a href="{{ route('project.show', [$project->name, $project->id]) }}">{{$project->name}}</a></h4>
                        <p><b>Owner:</b> {{$project->owner}} <br>
                        <b>Client:</b> {{$project->client}} <br>
                        <b>Details:</b> {{strip_tags($project->details)}} <br>
                        <b>Scope:</b> 
                            <?php 
                                $arr = json_decode($project->scope);
                                
                            ?>
                            @foreach($arr as $item)
                              {{$item.','}}
                            @endforeach <br>
                        <b>Detailed Scope:</b>    
                                <?php 
                                    $array = json_decode($project->scope);
                                    
                                ?>
                                @foreach($array as $items)
                                  {{$items.','}}
                                @endforeach
                       </p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    @endforeach
                    @else
                    <div class="project-item">
                      
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">No Project yet</a></h4>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    @endif                  

                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->

              <div class="tab-pane fade" id="tab5">
                <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="false" data-speed="800">
                  
                  @if(getProjects('Procurement')->count() > 0)                  
                    <!-- project item #1 -->
                    @foreach(getProjects('Procurement') as $project)
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{ postImage($project->image) }}" alt="{{$project->name}}}">
                        
                      </div><!-- /.project-img -->
                      <div class="project__content" style="color: black;">
                        <h4 class="project__title"><a href="{{ route('project.show', [$project->name, $project->id]) }}">{{$project->name}}</a></h4>
                        <p><b>Owner:</b> {{$project->owner}} <br>
                        <b>Client:</b> {{$project->client}} <br>
                        <b>Details:</b> {{strip_tags($project->details)}} <br>
                        <b>Scope:</b> 
                            <?php 
                                $arr = json_decode($project->scope);
                                
                            ?>
                            @foreach($arr as $item)
                              {{$item.','}}
                            @endforeach <br>
                        <b>Detailed Scope:</b>    
                                <?php 
                                    $array = json_decode($project->scope);
                                    
                                ?>
                                @foreach($array as $items)
                                  {{$items.','}}
                                @endforeach
                       </p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    @endforeach
                    @else
                    <div class="project-item">
                      
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">No Project yet</a></h4>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    @endif    
                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->
              <div class="tab-pane fade" id="tab6">
                <div class="projects-carousel-3 carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                  data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                  data-loop="false" data-speed="800">
                  
                  @if(getProjects('Information Technology')->count() > 0)                  
                    <!-- project item #1 -->
                    @foreach(getProjects('Information Technology') as $project)
                    <div class="project-item">
                      <div class="project__img">
                        <img src="{{ postImage($project->image) }}" alt="{{$project->name}}}">
                        
                      </div><!-- /.project-img -->
                      <div class="project__content" style="color: black;">
                        <h4 class="project__title"><a href="{{ route('project.show', [$project->name, $project->id]) }}">{{$project->name}}</a></h4>
                        <p><b>Owner:</b> {{$project->owner}} <br>
                        <b>Client:</b> {{$project->client}} <br>
                        <b>Details:</b> {{strip_tags($project->details)}} <br>
                        <b>Scope:</b> 
                            <?php 
                                $arr = json_decode($project->scope);
                                
                            ?>
                            @foreach($arr as $item)
                              {{$item.','}}
                            @endforeach <br>
                        <b>Detailed Scope:</b>    
                                <?php 
                                    $array = json_decode($project->scope);
                                    
                                ?>
                                @foreach($array as $items)
                                  {{$items.','}}
                                @endforeach
                       </p>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    @endforeach
                    @else
                    <div class="project-item">
                      
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">No Project yet</a></h4>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                    @endif 

                </div><!-- /.carousel -->
              </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Carousel Tabs  -->

    
    <!-- ======================
      Blog Grid
    ========================= -->

    <section id="blogGrid" class="blog blog-grid pb-60" >
      <div class="container">
        <div class="row" >
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3" >
            <div class="heading text-center mb-50">
              {{-- <span class="heading__subtitle">Insight and Trends</span> --}}
              <h2 class="heading__title">Recent Articles</h2>
              {{-- <div class="divider__line divider__theme divider__center mb-0"></div> --}}
              <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on insight,
                industry trends, top news headlines.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->

        <div class="row">

          @if($posts->count() > 0)
          <!-- Blog Item #1 -->
          @foreach($posts as $post)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="{{ route('blogs.show', $post->slug) }}">
                  <img src="{!! postImage($post->image) !!}" alt="{!! $post->title !!}" style="height: 250px;">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <span class="blog__meta-date">{!! $post->created_at->format('M d, Y') !!}</span>
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="{{ route('blogs.show', $post->slug) }}">{!! $post->title !!}</a></h4>
                <p class="blog__desc" style="font-size: 16px;">{{ strip_tags(str_limit($post->body, 150)) }}
                </p>
                <a href="{{ route('blogs.show', $post->slug) }}" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          @endforeach
          @else
          @endif


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->


@endsection

@section('script')    
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>

    <script>
    $(document).ready(function(){

      $('.dynamic').change(function(){
          if($(this).val() != '')
          {
            var val = $(this).val();
            
            if (val == 'Procurement') 
              {
                document.getElementById('prom').style.display = 'inline-block';
                document.getElementById('prom1').style.display = 'inline-block';
                document.getElementById('prom2').style.display = 'inline-block';
                document.getElementById('prom3').style.display = 'inline-block';
                document.getElementById('prom4').style.display = 'inline-block';
                document.getElementById('prom5').style.display = 'inline-block';

                document.getElementById('NoProm').style.display = 'none';
                document.getElementById('NoProm1').style.display = 'none';
                document.getElementById('NoProm2').style.display = 'none';
                document.getElementById('NoProm3').style.display = 'none';
                document.getElementById('NoProm4').style.display = 'none';
                document.getElementById('NoProm5').style.display = 'none';
                document.getElementById('NoProm6').style.display = 'none';
                document.getElementById('NoProm7').style.display = 'none';
                document.getElementById('NoProm8').style.display = 'none';
                document.getElementById('NoProm9').style.display = 'none';
                document.getElementById('NoProm10').style.display = 'none';
                document.getElementById('NoProm11').style.display = 'none';
                document.getElementById('NoProm12').style.display = 'none';
                document.getElementById('NoProm13').style.display = 'none';
              }else
                {
                  document.getElementById('prom').style.display = 'none';
                  document.getElementById('prom1').style.display = 'none';
                  document.getElementById('prom2').style.display = 'none';
                  document.getElementById('prom3').style.display = 'none';
                  document.getElementById('prom4').style.display = 'none';
                  document.getElementById('prom5').style.display = 'none';

                  document.getElementById('NoProm').style.display = 'inline-block';
                  document.getElementById('NoProm1').style.display = 'inline-block';
                  document.getElementById('NoProm2').style.display = 'inline-block';
                  document.getElementById('NoProm3').style.display = 'inline-block';
                  document.getElementById('NoProm4').style.display = 'inline-block';
                  document.getElementById('NoProm5').style.display = 'inline-block';
                  document.getElementById('NoProm6').style.display = 'inline-block';
                  document.getElementById('NoProm7').style.display = 'inline-block';
                  document.getElementById('NoProm8').style.display = 'inline-block';
                  document.getElementById('NoProm9').style.display = 'inline-block';
                  document.getElementById('NoProm10').style.display = 'inline-block';
                  document.getElementById('NoProm11').style.display = 'inline-block';
                  document.getElementById('NoProm12').style.display = 'inline-block';
                  document.getElementById('NoProm13').style.display = 'inline-block';
                }
          }
      });

    });
    </script>

@endsection