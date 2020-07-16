@extends('layouts.app')
@section('head')
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Contact Us - {{config('app.name')}} </title>
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
      <div class="bg-img"><img src="{{ asset('images/consultancy1.jpeg') }}" alt="Contact Us - {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Contact Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ==========================
        contact 1
    =========================== -->
    <section id="contact1" class="contact text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Get In Touch</span>
              <h2 class="heading__title">Contact Us</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
              @include('inc.messages')
              <p class="heading__desc">We understand the importance of approaching each work integrally and believe in
                the power of simple and easy communication.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <form action="{{ route('store.contact') }}" method="post" enctype="multipart/form-data">
              @csrf
              @captcha
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"><input name="name" type="text" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input name="phone" type="text" class="form-control" placeholder="Phone"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input name="email" type="text" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Request Details"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">Any Document:
                  <div class="form-group"><input name="image" type="file" class="form-control" placeholder="File"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__hover3">Submit Request</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->



   <!-- ========================= 
            cta 1
    =========================  -->
    <section id="cta1" class="cta cta-1 border-top pt-40 pb-10">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-panel contact-panel-2">
              <div class="contact__panel-header d-flex align-items-center">
                <i class="icon-placeholder"></i>
                <h4 class="contact__panel-title">Global Locations</h4>
              </div>
              <div id="accordion">
                <div class="accordion-item">
                  <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                    <a class="accordion__item-title" href="#">Lagos Office</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse  show" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <ul class="contact__list list-unstyled">
                        <li><a href="tel:+2348173040154">+2348173040154</a></li>
                        <li>Email: Logisti@7oroof.com</li>
                        <li>Address: Lagos <br>
                            suite 6,<br>
                            41 Osolo Way<br> 
                            Ajao Estate-lagos<br>
                            Nigeria.
                          </li>
                        {{-- <li>Hours: Mon-Fri: 8am – 7pm</li> --}}
                      </ul>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion__item-title" href="#">Port-Harcourt Office</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <ul class="contact__list list-unstyled">
                        <li><a href="tel:+2348173040154">+2348173040154</a></li>
                        <li>Email: Logisti@7oroof.com</li>
                        <li>Address: Port-Harcourt Office <br>
                            No 64 Evo Road<br>
                            GRA Phase II,<br>
                            Port-Harcourt, Rivers State<br>
                            Nigeria.
                        </li>
                        {{-- <li>Hours: Mon-Fri: 8am – 7pm</li> --}}
                      </ul>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion__item-title" href="#">London Office</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <ul class="contact__list list-unstyled">
                        <li><a href="tel:+447515370301">UK Contact: +447515370301</a></li>
                        <li><a href="tel:++00918323716873">USA Contact: +009 18323716873</a></li>
                        <li>Email: Logisti@7oroof.com</li>
                        <li>Address: London Office <br>
                            524 York Road, Stevenage,<br>
                            Hertfordshire, SG1 4EP<br>
                            United Kingdom.
                          </li>
                        {{-- <li>Hours: Mon-Fri: 8am – 7pm</li> --}}
                      </ul>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-3 text-right">
            <h2 class="cta__title">Sign up for industry news and insights from Logisti.</h2>
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <form action="{{ route('store.subscription') }}" method="POST">
              @csrf
              <div class="form-group d-flex">
                <input type="email" name="email" class="form-control mr-30" placeholder="Your Email Address">
                <button class="btn btn__primary btn__hover3">Sign Up!</button>
              </div>
            </form>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.cta1 -->

@endsection

@section('script')   

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
@endsection