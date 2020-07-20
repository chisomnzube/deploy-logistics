@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries.">
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>Consultancy - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('images/consultancy1.jpeg') }}" alt="Consultancy"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Consultancy</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Consultancy</h1>
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
                    <h1 class="text__block-title">Consultancy</h1>
                    <p class="text__block-desc">We are fully on ground to conduct extensive research and liaise with local and international Industry experts to provide vital information to streamline and augment decision making. 
                    </p>
                    <p class="text__block-desc">We can handle your international expansion support services into the Nigerian Market in any industry of choice. We offer bespoke corporate services which support and enable non-locally registered companies and investors by providing access to emerging and existing markets in Nigeria and some West Africa. </p>
                    <p class="text__block-desc">We achieve this by providing the necessary level of advice and support to enable you to make informed business decisions and manage all your risks, both physical and commercial.</p>
                    <p class="text__block-desc">Our vast network and contacts both local and international can help in sourcing products and services, Procurement, Project Tender Submission, Information gathering relating to pricing and taxes. </p>
                    <p class="text__block-desc">We can also design products and solutions for various industries to meet service requirements and expectations. </p>
                    <p class="text__block-desc">We can deploy resources in various sectors within our Purview. </p>
                    <p class="text__block-desc">Our services in the sections are: </p>
                    <ul class="list-group" >
                        <li ><i class="fas fa-angle-double-right"></i> Feasibility Studies </li>
                        <li ><i class="fas fa-angle-double-right"></i> Market Survey </li>
                        <li ><i class="fas fa-angle-double-right"></i> Product and Brand development </li>
                        <li ><i class="fas fa-angle-double-right"></i> Expansion Service to Nigeria </li>
                        <li ><i class="fas fa-angle-double-right"></i> Business/Industry information gathering </li>
                        <li ><i class="fas fa-angle-double-right"></i> Technical support for tenders in Projects and contracts</li>
                        <li ><i class="fas fa-angle-double-right"></i> OEM Product Development </li>
                        <li ><i class="fas fa-angle-double-right"></i> Sales Representation </li>
                        <li ><i class="fas fa-angle-double-right"></i> Contract Tender and Support Services</li>
                    </ul>
                    <p class="text__block-desc">Give us a call so we can discuss you </p>
                    <div class="row">
                      <div class="col">
                        <img height="220" src="{{ asset('images/consultancy1.jpg') }}">
                      </div>
                      <div class="col">
                        <img height="220" src="{{ asset('images/consultancy2.jpg') }}">
                      </div>
                      <div class="col">
                        <img height="220" src="{{ asset('images/consultancy3.jpg') }}">
                      </div>
                      <div class="col">
                        <img height="220" src="{{ asset('images/consultancy4.jpg') }}">
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