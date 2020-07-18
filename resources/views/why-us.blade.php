@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Why Choose Us - {{config('app.name')}} </title>
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
      <div class="bg-img"><img src="{{ asset('images/about_us.jpg') }}" alt="Why Choose Us"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Why Choose Us!</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Why Choose Us!</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 1
    =========================== -->
    <section id="about1" class="about about-1 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading heading-2">
              <h2 class="heading__title">Services Delivery to Your Expectation</h2>
              <p class="heading__desc mb-30">PZI Group is firm is dedicated to providing specific services with expertise and dedication to your expectation.  We represent many top Brands, service Providers and Original Equipment Manufacturers (OEM) to provide distinct services and supplies in line with the relevant industry best practice.</p>
              
              <img src="{{ asset('images/signature.jpg') }}" alt="signature" class="signature">
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-10 col-lg-6">
            <div class="about__img text-right">
              <img src="{{ asset('images/about_us.jpg') }}" alt="about us {{config('app.name')}}" class="img-fluid" style="height:250px;">
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 1 -->

    <!-- =========================== 
      fancybox Layout2
    ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pt-0 pb-80">
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
                <p class="fancybox__desc">Performance and innovation is our corporate mantra to enable us sustain unrelenting efforts to achieve our corporate vision and mission to engineer growth and optimum service delivery to our clients.  </p>
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

   

    <!-- =========================== 
      awards
    ============================= -->
    <section id="awards" class="awards text-center pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Pursuit Of Excellence</span>
              <h2 class="heading__title">Awards & Milestones</h2>
              <div class="divider__line divider__center divider__theme mb-0"></div>
              <p class="heading__desc">The essence of our business is service and customer focus, we realize like no
                other that receiving timely and accurate information plays a key role.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- feature item #1 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award1.jpg') }}" alt="{{config('app.name')}} award 1" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Contract Award</h4>
                <p class="feature__desc">Approved as a Service Provider for Indorama Eleme Fertilizer Company Limited Phase II Construction.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <!-- feature item #2 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award2.jpg') }}" alt="{{config('app.name')}} award 2" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Contract Award</h4>
                <p class="feature__desc">Approved as a Service Provider for Daewoo Nigeria Limited on Indorama Eleme Fertilizer Company Limited Phase II Construction.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <!-- feature item #3 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award3.jpg') }}" alt="{{config('app.name')}} award 3" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Service Provider Shortlist</h4>
                <p class="feature__desc">Approved as Service Provider for Azikiel Refinery Project in Bayelsa Nigeria.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->

          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award4.jpg') }}" alt="{{config('app.name')}} award 4" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Contract Award</h4>
                <p class="feature__desc">Approved as Service Provider For Nigeria Independent Power Project/Niger Delta Power Holding Company. </p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award5.jpg') }}" alt="{{config('app.name')}} award 5" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Approved Service Provider</h4>
                <p class="feature__desc">Approved as a Service Provider for Delta Tek Engineering Procurement & Construction Company.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award6.jpg') }}" alt="{{config('app.name')}} award 6" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Technical Partnership Agreement</h4>
                <p class="feature__desc">Executed and technical Service management agreement with Zodiak Freight Service for Freight Forwarding and customs Clearance.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('images/award7.jpg') }}" alt="{{config('app.name')}} award 7" class="img-fluid" style="height:250px;">
              </div><!-- /.feature-img -->
              <div class="feature__content">
                <h4 class="feature__title">Door to Door Delivery Service </h4>
                <p class="feature__desc">Executed Door to Door International Freight Forwarding services for Saipem Contracting on the Dangote Refinery Project.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->

          


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.awards -->

    

@endsection
@section('script')

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
@endsection