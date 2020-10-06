@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="Logistics company in Nigeria, Logistics company in USA, Logistics company in UK, Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria.">
  <meta name="description" content="PZI is a Company registered in Lagos Nigeria with Branch in USA and UK. We provide Procurement services, OEM/Manufacturers Representation, Local customs Clearance, Logistics and Freight Forwarding services, Import and export operations in Nigeria, and Globally via our reliable Affiliates & Partners in different countries."> 
  <meta property="og:image" content="{{ asset('img/favi.png') }}">
  <title>Resources - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('img/banner5.jpg') }}" alt="Resources {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Resources</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Resources</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid">
      <div class="container">
        <div class="row">

          @if($resources->count() > 0)
          <!-- Blog Item #1 -->
          @foreach($resources as $resource)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="{{ route('resources.show', $resource->slug) }}">
                  <img src="{!! postImage($resource->image) !!}" alt="{!! $resource->title !!}" style="height: 250px;">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <span class="blog__meta-date">{!! $resource->created_at->format('M d, Y') !!}</span>
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="{{ route('resources.show', $resource->slug) }}">{!! $resource->title !!}</a></h4>
                <p class="blog__desc">{{ strip_tags(str_limit($resource->body, 150)) }}</p>
                <a href="{{ route('resources.show', $resource->slug) }}" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          @endforeach
          @else
          @endif

          <ul class="pagination">
            {{ $resources->appends(request()->input())->onEachSide(1)->links() }}                  
          </ul>

        </div><!-- /.row -->
        {{--<div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a href="#" class="btn btn__primary btn__hover3 loadMoreBlog">Load More</a>
          </div><!-- /.col-lg-12 -->
        </div>--}}<!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
    
@section('script')    

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
@endsection