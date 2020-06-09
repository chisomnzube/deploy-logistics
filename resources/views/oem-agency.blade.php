@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>OEM/Agency  - {{config('app.name')}}</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://kit.fontawesome.com/dfbe4c7cae.js" crossorigin="anonymous"></script>
</head>
@endsection
@section('main-content')
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{ asset('images/oem2.jpeg') }}" alt="OEM/Agency"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">OEM/Agency</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">OEM/Agency</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      case studies Single
    ========================= -->
    <section id="caseStudiesSingle" class="case-studies-single">
      <div class="container">
        <div class="row">
         
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="case-single-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="text__block mb-40">
                    <h1 class="text__block-title">OEM/Agency</h1>
                    <p class="text__block-desc">Local support for international products that are already in service at sites around Nigeria helps foreign firms to reduce their cost in Nigeria. We have agreements with original equipment manufacturers of world leading technology and can also establish new OEM representation and services for foreign companies that wish to do business in Nigeria and other African Countries. We can also help with visa arrangement and other processing for entry to do maintenance work and other technical services for clients with utmost ease and simplicity. 
                    </p>
                    <p class="text__block-desc">Among services offered are: </p>
                    <ul class="list-group" >
                        <li ><i class="fas fa-angle-double-right"></i> Sales Representation </li>
                        <li ><i class="fas fa-angle-double-right"></i> Product marketing and Representation </li>
                        <li ><i class="fas fa-angle-double-right"></i> Sales Engineering </li>
                        <li ><i class="fas fa-angle-double-right"></i> Vendor Management </li>
                        <li ><i class="fas fa-angle-double-right"></i> Local Company and Product Registration </li>
                        <li ><i class="fas fa-angle-double-right"></i> Marketing Consultancy </li>
                        <li ><i class="fas fa-angle-double-right"></i> Local Consultancy </li>
                        <li ><i class="fas fa-angle-double-right"></i> Product and Market Intelligence Gathering </li>
                        <li ><i class="fas fa-angle-double-right"></i> Assist in Payment Processing </li>

                    </ul>
                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('images/oem1.png') }}">
                      </div>
                      <div class="col-md-3  col-sm-6">
                        <img src="{{ asset('images/oem2.jpg') }}">
                      </div>
                      <div class="col-md-3  col-sm-6">
                        <img src="{{ asset('images/oem3.jpg') }}">
                      </div>
                      <div class="col-md-3  col-sm-6">
                        <img src="{{ asset('images/oem4.jpg') }}">
                      </div>
                      <div class="col-md-3  col-sm-6">
                        <img src="{{ asset('images/oem5.jpg') }}">
                      </div>
                    </div>


                  </div><!-- /.text-block -->
                  

            </div><!-- /.case-single-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.case studies Single -->
@endsection

@section('script')   

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
@endsection