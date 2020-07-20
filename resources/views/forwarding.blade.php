@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries.">
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>Local & International Freight Forwarding  - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('img/banner4.jpg') }}" alt="Local & International Freight Forwarding  - {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Air Freight</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Local & International Freight Forwarding </h1>
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
         {{--  <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-categories widget-categories-2">
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#" class="active">Retail & Consumer</a></li>
                    <li><a href="#">Sciences & Healthcare</a></li>
                    <li><a href="#">Industrial & Chemical</a></li>
                    <li><a href="#">Power Generation</a></li>
                    <li><a href="#">Food & Beverage</a></li>
                    <li><a href="#">Oil & Gas</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-download">
                <h5 class="widget__title">Download</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__primary btn__block btn__hover2 mb-20 d-flex justify-content-between">
                    <span>Company Report 2018</span>
                    <img src="assets/icons/pdf.png" alt="pdf">
                  </a>
                  <a href="#" class="btn btn__primary btn__block btn__hover2">
                    <span>Company Brochure</span>
                    <img src="assets/icons/pdf.png" alt="pdf">
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-download -->
              <div class="widget widget-help bg-theme">
                <div class="widget__content">
                  <h5>How Can <br> We Help You!</h5>
                  <p>We understand the importance approaching each work integrally and believe in the power of simple
                    and easy communication.</p>
                  <a href="#" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact Us</a>
                </div><!-- /.widget-download -->
              </div><!-- /.widget-help -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 --> --}}
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="case-single-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="text__block mb-40">
                    <h1 class="text__block-title">Local & International Freight Forwarding </h1>
                    <p class="text__block-desc">We have a robust local service we provide locally in Nigeria for Diverse industries in the country. 
                      We serve both the Oil & Gas Industry , Manufacturing, Business Outfit, Government Agencies, etc. 
                    </p>
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5 class="text__block-title">Local Freight Forwarding Services. </h5>
                    <p class="text__block-desc">We are fully in ground and have vast expertise to handle your shipment upon entry into Nigerian Borders and onward delivery to any location in Nigeria. 
                    Among the services we offer with adept efficiency are:  
                    </p>

                    <ul class="list-group" >
                      <li ><i class="fas fa-angle-double-right"></i> Customs clearance </li>
                      <li ><i class="fas fa-angle-double-right"></i> Air Cargo import and export services</li>
                      <li ><i class="fas fa-angle-double-right"></i> Sea Cargo import and export services </li>
                      <li ><i class="fas fa-angle-double-right"></i> Temporary Import Permit </li>
                      <li ><i class="fas fa-angle-double-right"></i> Conversion to home use </li>
                      <li ><i class="fas fa-angle-double-right"></i> Export and import documentation</li>
                      <li ><i class="fas fa-angle-double-right"></i> Shipment documentation </li>
                      <li ><i class="fas fa-angle-double-right"></i> Pre-Release and fast tract</li>
                      <li ><i class="fas fa-angle-double-right"></i> Direct delivery </li>
                      <li ><i class="fas fa-angle-double-right"></i> Logistics and haulage ( with technical partners) </li>
                      <li ><i class="fas fa-angle-double-right"></i> Heavy lifting and deliveries ( with technical partners) </li>
                      <li ><i class="fas fa-angle-double-right"></i> Local Sourcing and  Procurement </li>
                      <li ><i class="fas fa-angle-double-right"></i> OEM manufacturers representation </li>
                      <li ><i class="fas fa-angle-double-right"></i> Ship Brokers</li>
                      <li ><i class="fas fa-angle-double-right"></i> Cargo Insurance </li>
                      <li ><i class="fas fa-angle-double-right"></i> Repair and Return processing</li> 
                      <li ><i class="fas fa-angle-double-right"></i> PAAR Processing </li>
                      <li ><i class="fas fa-angle-double-right"></i> Customs Demand Notice and Response </li>
                      <li ><i class="fas fa-angle-double-right"></i> Shipping Consultancy </li>

                    </ul>
                  </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5 class="text__block-title">International Freight Forwarding </h5>
                    <p class="text__block-desc">We have vast network of partners and freight forwarders to liaise with to handle all international shipping  and freight forwarding. 
                    We can handle pick up in various countries around the globe and deliver to Nigeria and other covered areas around the Globe. 
                    Our services in this regards are: </p>
                    <ul class="list-group" >
                      <li ><i class="fas fa-angle-double-right"></i> Cargo pick-up and Export from destination ( Ex-Work)</li>
                      <li ><i class="fas fa-angle-double-right"></i> Airline  or vessel charter </li>
                      <li ><i class="fas fa-angle-double-right"></i> Cargo Insurance </li>
                      <li ><i class="fas fa-angle-double-right"></i> Ship Brokerage ( Through partners)  </li>
                      <li ><i class="fas fa-angle-double-right"></i> Shipping from destination to various international destination </li>
                      <li ><i class="fas fa-angle-double-right"></i> Cargo management </li>
                      <li ><i class="fas fa-angle-double-right"></i> Equipment sourcing from different International manufacturers.</li>
                      <li ><i class="fas fa-angle-double-right"></i> Handle Project cargoes and shipments.</li>
                      <li ><i class="fas fa-angle-double-right"></i> Agency Service</li>
                    </ul>
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