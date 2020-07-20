@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries.">
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>Procurement and Supply Chain - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('img/banner4.jpg') }}" alt="Procurement and Supply Chain  - {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Procurement and Supply Chain</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Procurement and Supply Chain</h1>
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
                    <h1 class="text__block-title">Procurement and Supply Chain</h1>
                    <p class="text__block-desc">We source and procure items both locally and globally based on our wide coverage of the local market.  
                    </p>
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5 class="text__block-title">Local Sourcing &  Procurement</h5>
                    <p class="text__block-desc">We have built vast network of resources with various service providers, dealers and vendors in Nigeria for local supplies. <br>
                    We have vast network to facilitate sourcing and procurement of goods, equipment and other project specific items all over the Globe. 
  
                    </p>

                  </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5 class="text__block-title">International Sourcing &  Procurement</h5>
                    <p class="text__block-desc">We have access to vast buying houses that provide the necessary support and service needed by the client and in line with details and specified requirements. This operations is complimented by our Local and international freight forwarding and shipping operations to provide a seamless service delivery in line with international best practice. <br>
                    We source and procure items both locally and globally based on our wide coverage of the local market. <br>
                    We have built a relationships with various  OEM, Dealers and Buying Houses and have access to wide range of products and services. <br>
                    We can offer OEM & Product Representation in the following Industries:
                    </p>
                    <ul class="list-group" >
                      <li ><i class="fas fa-angle-double-right"></i>Oil & Gas </li>
                      <li ><i class="fas fa-angle-double-right"></i>Power Industry </li>
                      <li ><i class="fas fa-angle-double-right"></i>Renewable Energy Industry </li>
                      <li ><i class="fas fa-angle-double-right"></i>Heavy Equipment </li>
                      <li ><i class="fas fa-angle-double-right"></i>Allied & Petrochemical Company</li>
                      <li ><i class="fas fa-angle-double-right"></i>Other specified requirements that can be sourced</li>
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