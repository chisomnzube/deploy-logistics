@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Services - {{config('app.name')}} </title>
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
      <div class="bg-img"><img src="{{ asset('img/banner4.jpg') }}" alt="Services - {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">What We Do</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">What We Do</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->



    <!-- =========================== 
      fancybox Layout2
    ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
      <div class="container">
        <div class="row">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="fancybox-item">
              {{-- <div class="fancybox__icon">
                <i class="icon-credit-cards"></i>
              </div><!-- /.fancybox-icon --> --}}
              <div class="fancybox__content">
                <h4 class="fancybox__title">What we do</h4>
                <p class="fancybox__desc">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('forwarding') }}">Local & International Freight Forwarding and Shipping</a> </li>
                    <li class="list-group-item"><a href="{{ route('procurement') }}">Procurement & Supply Chain Management</a></li>
                    <li class="list-group-item">Project Cargo shipping and Delivery </li>
                    <li class="list-group-item">OEM Representation and International Sales Representation</li>
                    <li class="list-group-item"><a href="{{ route('sourcing') }}">Equipment & Machinery Sourcing </a></li>
                    <li class="list-group-item"><a href="{{ route('technology') }}">Information technology and Consultancy</a> </li>
                    <li class="list-group-item">Product Sales and & Marketing  Development</li>                  
                  </ul>
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="fancybox-item">
              {{-- <div class="fancybox__icon">
                <i class="icon-search-worldwide"></i>
              </div> --}}<!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Who we serve</h4>
                <p class="fancybox__desc">
                  <ul class="list-group">
                    <li class="list-group-item">Oil & Gas </li>
                    <li class="list-group-item">Manufacturers</li>
                    <li class="list-group-item">Importers and Exporters </li>
                    <li class="list-group-item">Pharmaceuticals</li>
                    <li class="list-group-item">Government Agencies </li>
                    <li class="list-group-item">IT Industry </li>
                    <li class="list-group-item">Aviation  Industry </li>
                    <li class="list-group-item">Power Sector </li>
                    <li class="list-group-item">Specialized Projects </li>
                  </ul>
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox Layout2 -->

   

   
@endsection

@section('script')    

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
@endsection