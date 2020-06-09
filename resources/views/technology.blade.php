@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Information Technology  Services - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('img/banner4.jpg') }}" alt="Information Technology  Services - {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Information Technology  Services</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Information Technology  Services </h1>
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
                    <h1 class="text__block-title">Information Technology  Services</h1>
                    <p class="text__block-desc">We have offer VAST services for IT solutions from our office based in London which can cater for some core information technology requirements. <br>
                    Below are some area of expertise in our IT Services. 

                    </p>
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-12">
                        <h4 class="text__block-title" style="color: navy;">ENTERPRISE INFRASTRUCURE</h4>
                            <h5 class="text__block-title">DATA CENTER SOLUTIONS</h5>
                            <ul class="list-group" >
                              <li ><i class="fas fa-angle-double-right"></i> Storage: Storage Area Network (SAN), Azure StorSimple, Azure Storage, Amazon Web Services Storage, SQL, NoSQL, MongoDB</li>
                              <li ><i class="fas fa-angle-double-right"></i> Computing: Microsoft (Windows 7, 8, 10, Server 2012 and 2016), Apple Mac, Redhat Linux, Ubuntu</li>
                              <li ><i class="fas fa-angle-double-right"></i> Network Infrastructure: Cisco and HP routers and switches, WAN, LAN and GWAN</li>
                              <li ><i class="fas fa-angle-double-right"></i> Virtualization: Hyper V, Citrix Xen Server, Vmware</li>
                              <li ><i class="fas fa-angle-double-right"></i> Data Centre design: Rack location, air flow, power management, security, Hardware</li>
                              <li ><i class="fas fa-angle-double-right"></i> Active Directory</li>
                              <li ><i class="fas fa-angle-double-right"></i> Dynamics CRM – 2011 and 2013</li>
                              <li ><i class="fas fa-angle-double-right"></i> SharePoint</li>
                            </ul>

                            <h5 class="text__block-title">CLOUD SOLUTIONS</h5>
                            <ul class="list-group" >
                              <li ><i class="fas fa-angle-double-right"></i> Microsoft Azure: Cloud Compute/Virtual machines, Virtual Networks, Storage, Web Apps, Power Business Intelligence, HD Insight, SQL, Azure SQL Etc.</li>
                              <li ><i class="fas fa-angle-double-right"></i> Amazon Web Services (AWS): Application services, Mobile servers and Enterprise application</li>
                              <li ><i class="fas fa-angle-double-right"></i> Big Data/Data Integration – Amazon Elastic MapReduce, Apache Hive, Apache Pick, Apache Spark, MapResque, CouchBase, Hadoop, HD Insight and MongoDB</li>
                              <li ><i class="fas fa-angle-double-right"></i> Cloud Integration – Saas (Software as a service), PaaS (Platform as a service), IaaS (Infrastructure as a service), IaaC (Infrastructure as a Code), IdaaS (Identity as a Service)</li>
                              <li ><i class="fas fa-angle-double-right"></i> Automation – PowerShell, Chef, Puppet, CLI, .Net, Azure Resource Manager (ARM), Docker, JSON, System Centre Orchestrator</li>
                            </ul>

                            <h5 class="text__block-title">COLLABORATION SOLUTIONS</h5>
                            <ul class="list-group" >
                              <li ><i class="fas fa-angle-double-right"></i> IP Telephony: Cisco Jabber, ShoreTel, Skype for Business</li>
                              <li ><i class="fas fa-angle-double-right"></i> Telepresence/Video conference: Skype for Business Conferencing, Cisco Unified Call Manager, Polycom, HP</li>
                              <li ><i class="fas fa-angle-double-right"></i> Unified Messaging/Collaboration: Microsoft Exchange Active Sync, Google Messaging platform, Cisco Unity, ShorTel, Lync, Skype and Skype for Business</li>
                              <li ><i class="fas fa-angle-double-right"></i> Messaging: Microsoft Exchange (2003, 2007, 2010, 2013), Google enterprise mail solution</li>
                            </ul>

                            <h5 class="text__block-title">ENTERPRISE MANAGEMENT SOLUTIONS</h5>
                            <ul class="list-group" >
                              <li ><i class="fas fa-angle-double-right"></i> Service Management</li>
                              <li ><i class="fas fa-angle-double-right"></i> Infrastructure Management: Including hosting infrastructure in the cloud</li>
                              <li ><i class="fas fa-angle-double-right"></i> Application Management</li>
                            </ul>

                            <h5 class="text__block-title">SYSTEM CENTER SUITE</h5>
                            <ul class="list-group" >
                              <li ><i class="fas fa-angle-double-right"></i> System centre configuration Manager</li>
                              <li ><i class="fas fa-angle-double-right"></i> System centre Operations Manager</li>
                              <li ><i class="fas fa-angle-double-right"></i> System centre Data Protection Manager</li>
                              <li ><i class="fas fa-angle-double-right"></i> System centre Virtual Machine Manager</li>
                              <li ><i class="fas fa-angle-double-right"></i> System centre Service Manager</li>
                              <li ><i class="fas fa-angle-double-right"></i> Orchestrator and App controller</li>
                            </ul>      

                    
                  </div>

                  <div class="col-md-6 col-lg-6 col-sm-12">
                    <h4 class="text__block-title" style="color: navy;">ENTERPRISE SOLUTIONS</h4>

                        <h5 class="text__block-title">MICROSOFT PRODUCTIVITY <br>  
                        Office 365 is Microsoft cloud Productivity Solution with the following products:
                        </h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i> Exchange Online: Including migration from on-premise to exchange online, design and implementation of exchange online</li>
                          <li ><i class="fas fa-angle-double-right"></i> SharePoint Online</li>
                          <li ><i class="fas fa-angle-double-right"></i> Skype for Business</li>
                          <li ><i class="fas fa-angle-double-right"></i> Office Web Apps</li>
                          <li ><i class="fas fa-angle-double-right"></i> Yammer</li>
                          <li ><i class="fas fa-angle-double-right"></i> Teams</li>
                          <li ><i class="fas fa-angle-double-right"></i> OneDrive for Business</li>
                          <li ><i class="fas fa-angle-double-right"></i>  Intune</li>
                          <li ><i class="fas fa-angle-double-right"></i> Multifactor Authentication</li>
                          <li ><i class="fas fa-angle-double-right"></i> SSO – Single Sign On</li>
                          <li ><i class="fas fa-angle-double-right"></i> Microsoft Dynamics CRM Online and Dynamics 365</li>
                        </ul>

                        <h5 class="text__block-title">MOBILITY AND SECURITY</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i> Microsoft Azure Active Directory Premium (Hybrid Identity)</li>
                          <li ><i class="fas fa-angle-double-right"></i> Mobile Device management (Windows Intune)</li>
                          <li ><i class="fas fa-angle-double-right"></i> Microsoft Azure Rights Management service (Access and Information Protection)</li>
                          <li ><i class="fas fa-angle-double-right"></i> Advanced Threat Protection</li>
                          <li ><i class="fas fa-angle-double-right"></i> AirWatch: Enterprise Mobile devices management</li>
                          <li ><i class="fas fa-angle-double-right"></i> OKTA: Enterprise Identity solution</li>
                          <li ><i class="fas fa-angle-double-right"></i> Single Sign On (SSO)</li>
                          <li ><i class="fas fa-angle-double-right"></i> ADFS – Active Directory Federated Services</li>
                          <li ><i class="fas fa-angle-double-right"></i> Forefront Identity Management (FIM)</li>
                          <li ><i class="fas fa-angle-double-right"></i> Microsoft Identity Manager</li>
                          <li ><i class="fas fa-angle-double-right"></i> CyberArk – Privileged Account Solution</li>
                        </ul>

                        <h5 class="text__block-title">INFORMATION SECURITY</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i> Forefront Enterprise Security</li>
                          <li ><i class="fas fa-angle-double-right"></i> Cisco ASA – Adaptive Security Appliance</li>
                          <li ><i class="fas fa-angle-double-right"></i> Firewall: Checkpoint, Microsoft Firewall, Barracuda Firewall</li>
                          <li ><i class="fas fa-angle-double-right"></i> Anti-virus: McAfee, Windows defender</li>
                        </ul>

                        <h5 class="text__block-title">Industry recognized Professional Certifications</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i> MCSD Azure: Microsoft Certified Cloud Solutions Architect for Azure</li>
                          <li ><i class="fas fa-angle-double-right"></i> MCSE Infrastructure: Microsoft Certified Infrastructure Solutions Expert/Architect</li>
                          <li ><i class="fas fa-angle-double-right"></i> ITIL: Infrastructure Information Technology Library</li>
                          <li ><i class="fas fa-angle-double-right"></i> MCSE: Server – Microsoft Certified Systems Engineer for server 2003, 2008 and 2012</li>
                          <li ><i class="fas fa-angle-double-right"></i> MCSA: Messaging – Microsoft Certified Systems Administrator for Exchange Server</li>
                          <li ><i class="fas fa-angle-double-right"></i> Enterprise Mobility Immersion Specialist</li>
                          <li ><i class="fas fa-angle-double-right"></i> CCNA: Cisco Certified Solutions Associate</li>
                        </ul>

                        <h5 class="text__block-title">OUR PAST UK CLIENTS INCLUDE</h5>
                        <ul class="list-group" >
                          <li ><i class="fas fa-angle-double-right"></i> McDonald's <img src="{{ asset('images/mcdonalds.jpg') }}" style="width: 100px;"></li> 
                          <li ><i class="fas fa-angle-double-right"></i> Hertfordshire County Council: <img src="{{ asset('images/hertford.jpg') }}" style="width: 100px;"></li> 
                          <li ><i class="fas fa-angle-double-right"></i> Tesco  <img src="{{ asset('images/tesco.jpg') }}" style="width: 100px;"></li>
                          <li ><i class="fas fa-angle-double-right"></i> Digiterre  <img src="{{ asset('images/digi.jpg') }}" style="width: 100px;"></li>
                          <li ><i class="fas fa-angle-double-right"></i> Wonga  <img src="{{ asset('images/wonga.jpg') }}" style="width: 100px;"></li>
                          <li ><i class="fas fa-angle-double-right"></i> Virgin Active  <img src="{{ asset('images/virgin.jpg') }}" style="width: 100px;"></li>
                          <li ><i class="fas fa-angle-double-right"></i> ARM  <img src="{{ asset('images/arm.jpg') }}" style="width: 100px;"></li>
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