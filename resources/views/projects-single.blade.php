@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="{!! str_limit(strip_tags($project->details), 150) !!}">
  <meta property="og:image" content="{!! postImage($project->image) !!}">
  <title>{!! $project->name !!} -Project | PZI </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
@endsection

@section('main-content')

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{ asset('img/banner1.jpg') }}" alt="{{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News & Media</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">News & Media</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section id="blogSingleCentered" class="blog blog-single pb-60">
      <div class="container">
        @include('inc.messages')
        <div class="row">
          
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="{!! postImage($project->image) !!}" alt="{!! $project->name !!}">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <h4 class="blog__title"><a href="#">{!! $project->name !!}</a></h4>
                <div class="blog__meta justify-content-center">
                  <span class="blog__meta-author pr-20">By: <span>Admin</span></span>
                  <span class="blog__meta-date">{!! $project->created_at->format('M d, Y') !!}</span>
                </div><!-- /.blog-meta -->
                <div class="divider__line divider__theme divider__center"></div>
                <div class="blog__desc">
                  <p>{!! $project->details !!}</p>
                </div><!-- /.blog-desc -->
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
            

          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

@endsection
@section('script')

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection