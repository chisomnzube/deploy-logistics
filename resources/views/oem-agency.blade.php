@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries.">
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>OEM/Equipment and Sales Representation  - {{config('app.name')}}</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://kit.fontawesome.com/dfbe4c7cae.js" crossorigin="anonymous"></script>
    <style >
    .div {
  /*width: 200px;
  height: 200px;*/
  display: block;
  position: relative;
}

.div::after {
  content: "";
  background: url({{asset('img/back-oem.jpg')}});
  opacity: 0.1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
  </style>
</head>
@endsection
@section('main-content')
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{ asset('img/rep-oem.jpg') }}" alt="OEM/Equipment and Sales Representation  - {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">OEM/Equipment and Sales Representation</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">OEM/Equipment and Sales Representation </h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      case studies Single
    ========================= -->
    <section id="caseStudiesSingle" class="case-studies-single div">
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
                    <h1 class="text__block-title">OEM/Equipment and Sales Representation </h1>
                    <p class="text__block-desc">At PZI , we leverage knowledge of the market and Industry of interest to tailor our marketing approach and the requirements and Services dynamism to present a product that meets the demand of the client or Industry, and to ensure adequation and optimum service delivery. We have broad experience in the Nigerian market and can expand through partnership with other technical partners to deliver required services. We will create a viable product development and market approach and monitor it from start to fruition until maturity of the product or brand. Our representation helps eliminate the huge cost involved in international trips and huge cost of marketing, It also give assurance that your products and service are well represented. <br>

                    Based on our firm understanding of the global supplier and representation for various equipment demand in the Oil & Gas Industry . We have built a relationships with various OEM, Dealers and Buying Houses and have access to wide range of products and services. We can always source for items needed based on requirements and arrange delivery. <br>

                    Support and Ancillary Services <br>
                    We can help OEM with reliable technical partners to help with the following aspects:
                    <ul class="list-group" >
                       <li ><i class="fas fa-angle-double-right"></i>Bids and tender presentation</li>
                       <li ><i class="fas fa-angle-double-right"></i>Market research and product development </li>
                      <li ><i class="fas fa-angle-double-right"></i>Arrangement of Pairing with Local and foreign technical partners </li>
                      <li ><i class="fas fa-angle-double-right"></i>Arrangement of partners for servitization contracts. </li>
                      <li ><i class="fas fa-angle-double-right"></i>Market research in Nigeria in relevant industry and areas of interest. </li>
                      <li ><i class="fas fa-angle-double-right"></i>Arrange travel logistics and presentation materials for technical presentations. </li>
                      <li ><i class="fas fa-angle-double-right"></i>Assist with invoice submission, payment follow-up, processing, and payment. </li>
                      <li ><i class="fas fa-angle-double-right"></i>Assist in supply chain services and delivery of equipment and shipments  to client’s</li>
                    </ul>
                    </p>
                    {{-- <h4 class="text__block-title">Oil & Gas Industry and Other Equipment Sourcing </h4>
                    <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12">

                        <h5 class="text__block-title">Flow Stations</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Vapor & Gas Recovery Systems</li>
                          <li ><i class="fas fa-angle-double-right"></i>Compression Packages</li>
                          <li ><i class="fas fa-angle-double-right"></i>Filters & Strainers</li>
                          <li ><i class="fas fa-angle-double-right"></i>Burners & Flares</li>
                          <li ><i class="fas fa-angle-double-right"></i>Pump Skids</li>
                          <li ><i class="fas fa-angle-double-right"></i>Separation Technology</li>
                        </ul>

                        <h5 class="text__block-title">Drilling Equipment & Accessories</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Drill Pipe & Collars</li>
                          <li ><i class="fas fa-angle-double-right"></i>Bottom Hole Components </li>
                          <li ><i class="fas fa-angle-double-right"></i>Coil Tubing</li>
                          <li ><i class="fas fa-angle-double-right"></i>Sand Control Equipment</li>
                          <li ><i class="fas fa-angle-double-right"></i>Screens & Completion Packers</li>
                          <li ><i class="fas fa-angle-double-right"></i>Blowout Preventers</li>
                          <li ><i class="fas fa-angle-double-right"></i>Parts for Oil Wells & Work Over Rigs</li>
                          <li ><i class="fas fa-angle-double-right"></i>Swivel Joints</li>
                          <li ><i class="fas fa-angle-double-right"></i>Mud Pump Spares</li>
                          <li ><i class="fas fa-angle-double-right"></i>Drill Pipe Elevators</li> 
                          <li ><i class="fas fa-angle-double-right"></i>Traveling Blocks & Hooks</li>
                          <li ><i class="fas fa-angle-double-right"></i>Rotary Tables</li>
                          <li ><i class="fas fa-angle-double-right"></i>Winches</li>
                        </ul>

                        <h5 class="text__block-title">Instrumentation & Control System</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Valves: Ball, Butterfly, Gate, Globe, all types</li>
                          <li ><i class="fas fa-angle-double-right"></i>Transducers & Switches</li>
                          <li ><i class="fas fa-angle-double-right"></i>Sensors</li>
                          <li ><i class="fas fa-angle-double-right"></i>Regulators </li>
                          <li ><i class="fas fa-angle-double-right"></i>Actuators: Pneumatic, Hydraulic, Electric</li>
                          <li ><i class="fas fa-angle-double-right"></i>Control Valves</li>
                          <li ><i class="fas fa-angle-double-right"></i>Motors</li>
                          <li ><i class="fas fa-angle-double-right"></i>Electronic Components</li>
                          <li ><i class="fas fa-angle-double-right"></i>Couplings & Guards</li>
                        </ul>   

                        <h5 class="text__block-title">Storage & Pipeline</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Tanks</li>
                          <li ><i class="fas fa-angle-double-right"></i>Launchers & Receivers</li>
                          <li ><i class="fas fa-angle-double-right"></i>Pigging Products</li>
                          <li ><i class="fas fa-angle-double-right"></i>Expansion Joints</li>
                          <li ><i class="fas fa-angle-double-right"></i>Flame Arrestors & Detonators</li>
                          <li ><i class="fas fa-angle-double-right"></i>Vacuum & Relief Valves</li>
                          <li ><i class="fas fa-angle-double-right"></i>Hot Tapping & Line Stopping Components</li>
                          <li ><i class="fas fa-angle-double-right"></i>Pipes, Fittings & Flanges</li>
                          <li ><i class="fas fa-angle-double-right"></i>Flame & Detonation Arrestors</li>
                          <li ><i class="fas fa-angle-double-right"></i>Storage Tanks </li>
                        </ul>

                        <h5 class="text__block-title"> Process Equipment</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Vapor & Gas Recovery Systems</li>
                          <li ><i class="fas fa-angle-double-right"></i>Separators & Scrubbers</li>
                          <li ><i class="fas fa-angle-double-right"></i>Coolers & Heat Exchangers</li>
                          <li ><i class="fas fa-angle-double-right"></i>Pump & Compression Skids </li>
                          <li ><i class="fas fa-angle-double-right"></i>FWKO (Free Water Knockout)</li>
                          <li ><i class="fas fa-angle-double-right"></i>Gas Conditioning Units</li>
                          <li ><i class="fas fa-angle-double-right"></i>LACT Units</li>
                          <li ><i class="fas fa-angle-double-right"></i>Expansion Joints</li>
                          <li ><i class="fas fa-angle-double-right"></i>Filters & Strainers</li>
                        </ul>

                        <h5 class="text__block-title">Instrumentation & Controls</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Valves: Ball, Butterfly, Gate, Globe, all types </li>
                          <li ><i class="fas fa-angle-double-right"></i>Transducers & Switches</li>
                          <li ><i class="fas fa-angle-double-right"></i>Sensors </li>
                          <li ><i class="fas fa-angle-double-right"></i>Regulators </li>
                          <li ><i class="fas fa-angle-double-right"></i>Actuators: Pneumatic, Hydraulic, Electric </li>
                          <li ><i class="fas fa-angle-double-right"></i>Control Valves </li>
                          <li ><i class="fas fa-angle-double-right"></i>Motors </li>
                          <li ><i class="fas fa-angle-double-right"></i>Electronic Components </li>
                          <li ><i class="fas fa-angle-double-right"></i>Couplings & Guards</li>
                        </ul>  
                         
                        <h5 class="text__block-title">Displacement Pumps</h5>
                        <p>The positive displacement principle applies in these pumps:</p>
                        <ul class="list-group" >
                          
                          <li ><i class="fas fa-angle-double-right"></i>Rotary lobe pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Progressive cavity pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Rotary gear pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Piston pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Diaphragm pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Screw pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Gear pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Hydraulic pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Vane pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Regenerative (peripheral) pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Peristaltic pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Rope pump</li>
                          <li ><i class="fas fa-angle-double-right"></i>Flexible impeller</li>
                          <li ><i class="fas fa-angle-double-right"></i>Centrifugal Pumps</li>
                          <li ><i class="fas fa-angle-double-right"></i>Gravity Pumps</li>
                          <li ><i class="fas fa-angle-double-right"></i>Roto Dynamic Pumps</li>
                          <li ><i class="fas fa-angle-double-right"></i>Vertical Turbines</li>
                        </ul>

                        <h5 class="text__block-title">These products can be sourced from the following locations: </h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i>Europe</li>
                          <li ><i class="fas fa-angle-double-right"></i>India</li>
                          <li ><i class="fas fa-angle-double-right"></i>North America</li>
                          <li ><i class="fas fa-angle-double-right"></i>MEA ( Middle East and Asia) </li>
                        </ul>

                    

                    
                  </div>
                    
                </div> --}}

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