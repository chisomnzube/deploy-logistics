@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries.">
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>Product sales and marketing development  - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('img/rep-product-sales.jpg') }}" alt="Product sales and marketing development"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product sales and marketing development</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Product sales and marketing development</h1>
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
                    <h1 class="text__block-title">Product sales and marketing development</h1>
                    <p class="text__block-desc">We offer other services that will help boost sales and add value to your business. Among such strategies to boost sales and marketing activities are :</p>

                    <b style="text-decoration: underline;">Product Development</b>

                    <p class="text__block-desc">We will explore and evaluate all the stages involved in bringing your product from concept or idea, through market release and beyond. Our product development incorporates a product’s entire journey, including:</p>
                    <ul class="list-group" >
                      <li ><i class="fas fa-angle-double-right"></i>Identifying a market need</li>
                      <li ><i class="fas fa-angle-double-right"></i>Conceptualizing and designing the product</li>
                      <li ><i class="fas fa-angle-double-right"></i>Building the product roadmap</li>
                      <li ><i class="fas fa-angle-double-right"></i>Developing a minimum viable product (MVP)</li>
                      <li ><i class="fas fa-angle-double-right"></i>Releasing the MVP to users</li>
                      <li ><i class="fas fa-angle-double-right"></i>Iterating based on user feedback</li>
                    </ul> 

                    <b style="text-decoration: underline;">Consultancy</b>

                    <p class="text__block-desc">We offer consultancy services in some fields such as enabling clients get partners in Nigeria for strategic co-operation. We also development feasibility studies and related activities to guide with decision making and risk management.</p>

                    <b style="text-decoration: underline;">Market Research</b>

                    <p class="text__block-desc">Get the market data you need fast & take action. Recognized by our clients as being one of the most innovative and reliable market research companies, our expertise is in creating and developing new ideas, measuring customer satisfaction, tracking marketing performance or helping brand owners to know their customers inside out.</p>

                    <b style="text-decoration: underline;">Brand Building & Positioning</b>

                    <p class="text__block-desc">Our brand building and positioning strategies help distinguishes you from the competition. Branding can be used as a differentiation strategy when the product cannot be easily distinguished in terms of tangible features or in products which are perceived as a commodity.</p>

                    <b style="text-decoration: underline;">Analyze Competitors Activities</b>

                    <p class="text__block-desc">Most product marketers face competition when they enter the market, but having competition for a product isn’t necessarily a negative. In fact, it can be helpful in two ways:</p>
                    <ul class="list-group" >
                      <li>1. Having competition shows you there is a market for the product you hope to sell.</li>
                      <li>2. Studying existing competitors helps you see which sales channels and marketing tactics work, spot what doesn’t, and uncover what consumers expect from your product.</li>
                    </ul>
                    <p class="text__block-desc">We get an idea of what your competition is doing and develop their management and sales strategy to guide in your activities and map out your market strategy. This will uncover a wealth of information that you can use to analyze both the current market and the competition for your product.</p>

                    <p class="text__block-desc">We can provide much more service once the scope s clearly defined. We will build a profile of your expectation and then leverage with other partners to enable us get the desired result to boost your business and stay ahead of the competition.</p>                    


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