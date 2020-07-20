@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries.">
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>Project Cargo  - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('images/cargo2.jpg') }}" alt="Project Cargo"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Cargo</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Project Cargo</h1>
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
                    <h1 class="text__block-title">Project Cargo</h1>
                    <p class="text__block-desc">PZI is a provider also transport and Logistics solutions to the Oil, Gas and other Industrial   cargoes/machineries and products that are out of Gauge (OOG). Through our extensive network of logistics partners and capable service providers at major locations around the globe, we provide our clients with a large variety of services ranging from small courier shipments to project transports of complete oil rigs from one continent to another. 
                    </p>
                    <p class="text__block-desc">Projects varies by Industry and shipping requirements and are typically large-scale and highly complex resulting in detailed and strategically well planned operational procedure to ensure the schedule, Risk management and safety requirements are factored into the execution of the logistics and shipping. 
                    As a result of multi parties involved in the various stages from manufacturing to delivery, we have capacity to management the process as a single point of contact to handle the logistics flow.
                    </p>
                    <p class="text__block-desc">We can arrange pick up from location, handling, vessel or charter vessel arrangement and destination handling through our vast network of reliable and capable hands to meet client’s expectation.</p>
                    <div class="row">
                      <div class="col">
                        <img src="{{ asset('images/cargo1.jpg') }}">
                      </div>
                      <div class="col">
                        <img src="{{ asset('images/cargo2.jpg') }}">
                      </div>
                      <div class="col">
                        <img src="{{ asset('images/cargo3.jpg') }}">
                      </div>
                      <div class="col">
                        <img src="{{ asset('images/cargo4.jpg') }}">
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