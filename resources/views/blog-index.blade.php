@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Logisti">  
  <title>Blogs - {{config('app.name')}}</title>
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
      <div class="bg-img"><img src="{{ asset('img/banner5.jpg') }}" alt="News & Media {{config('app.name')}}"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News & Media</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">News & Media</h1>
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

          @if($posts->count() > 0)
          <!-- Blog Item #1 -->
          @foreach($posts as $post)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="{{ route('blogs.show', $post->slug) }}">
                  <img src="{!! postImage($post->image) !!}" alt="{!! $post->title !!}">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <span class="blog__meta-date">{!! $post->created_at->format('M d, Y') !!}</span>
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="{{ route('blogs.show', $post->slug) }}">{!! $post->title !!}</a></h4>
                <p class="blog__desc">{{ strip_tags(str_limit($post->body, 150)) }}</p>
                <a href="{{ route('blogs.show', $post->slug) }}" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          @endforeach
          @else
          @endif

          <ul class="pagination">
            {{ $posts->appends(request()->input())->onEachSide(1)->links() }}
                  
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