@extends('layouts.app')
@section('head')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="keywords" content="{!! strip_tags(str_limit($post->meta_keywords, 60)) !!}">
  <meta name="description" content="{!! strip_tags(str_limit($post->body, 150)) !!}">
  <meta property="og:image" content="{!! postImage($post->image) !!}">
  <title>{!! $post->title !!} - PZI </title>
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
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              
              <div class="widget widget-categories">
                <h5 class="widget__title">categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    @if($categorys->count() > 0)
                      @foreach($categorys as $category)
                      <li><a href="{{ route('blogs.index', ['category' => $category->slug]) }}">{{$category->name}}</a></li>
                      @endforeach
                    @endif
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Recent Posts</h5>
                <div class="widget__content">
                  @if($posts->count() > 0)
                  <!-- post item #1 -->
                  @foreach($posts as $item)
                  <div class="widget-post-item">
                    <div class="widget__post-img">
                      <a href="{{ route('blogs.show', $item->slug) }}"><img src="{!! postImage($item->image) !!}" alt="{{$item->title}}"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget__post-content">
                      <div class="d-flex flex-wrap align-items-center">
                        
                        <span class="widget__post-date">{!! $item->created_at->format('M d, Y') !!}</span>
                      </div>
                      <h6 class="widget__post-title"><a href="{{ route('blogs.show', $item->slug) }}">{{$item->title}}</a></h6>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  @endforeach
                 @endif

                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="{!! postImage($post->image) !!}" alt="{!! $post->title !!}">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <h4 class="blog__title"><a href="#">{!! $post->title !!}</a></h4>
                <div class="blog__meta justify-content-center">
                  <span class="blog__meta-author pr-20">By: <span>Admin</span></span>
                  <span class="blog__meta-date">{!! $post->created_at->format('M d, Y') !!}</span>
                </div><!-- /.blog-meta -->
                <div class="divider__line divider__theme divider__center"></div>
                <br>
                @if(!empty($post->document) && $post->document != '[]')
                  <a href="{{ route('downloadFile',$post->id) }}" class="btn btn-primary">Download File</a>
                @endif
                <br>
                <div class="blog__desc">
                  <p>{!! $post->body !!}</p>
                </div><!-- /.blog-desc -->
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
            {{-- <div class="row">
              <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="blog__tags mb-30">
                  <a href="#">Responsive</a>
                  <a href="#">Modern</a>
                  <a href="#">Corporate</a>
                  <a href="#">Business</a>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="blog-share">
                  <div class="social__icons justify-content-end mb-30">
                    <h5 class="blog__share-title">Share :</h5>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div><!-- /.blog-share -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row --> --}}

            <hr>
            <div class="blog-comments mb-50">
              <h5 class="blog__widget-title">{{$comments->count()}} comments</h5>
              <ul class="comments-list">


                @if($comments->count() > 0)
                @foreach($comments as $comment)
                <li class="comment__item">
                  <div class="comment__content">
                    <h6 class="comment__author">{{$comment->name}}</h6>
                    <span class="comment__date">{{$comment->created_at->format('M d, Y')}}</span>
                    <p class="comment__desc">{{$comment->body}}</p>
                    {{-- <a class="comment__reply" href="#" data-toggle="modal" data-target="#exampleModal">reply</a> --}}
                  </div>

                  {{-- @if(checkCommentRef($comment->id)->count() > 0)
                  <ul class="nested__comment">
                    @foreach(checkCommentRef($comment->id) as $refComment)
                    <li class="comment__item">
                      <div class="comment__content">
                        <h6 class="comment__author">{{$refComment->name}}</h6>
                        <span class="comment__date">{{$refComment->created_at->format('M d, Y')}}</span>
                        <p class="comment__desc">{{$refComment->body}}</p>
                      </div>
                    </li><!-- /.comment -->
                    @endforeach
                  </ul><!-- /.nested-comment -->
                  @endif --}}

                </li><!-- /.comment -->
                {{-- <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Reply a comment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{ route('ref.comment.now', [$post->id,$comment->id]) }}" method="post">
                          @csrf
                          @captcha
                          @if(count($errors) > 0)
                              @foreach($errors->all() as $error)
                                  {{ $error }}
                              @endforeach
                          @endif
                          <div class="modal-body">
                            <div class="row">
                                  <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                      <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                  </div><!-- /.col-lg-6 -->
                                  <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                      <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                  </div><!-- /.col-lg-6 -->
                                  <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                      <textarea name="body" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                  </div><!-- /.col-lg-6 -->
                            </div>
                          </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
              <!--// Modal --> --}}
              @endforeach
              @endif    

              </ul><!-- /.comments-list -->
            </div><!-- /.blog-comments -->
            <div class="blog-widget blog-comments-form">
              <h5 class="blog__widget-title">Leave A Reply</h5>
              <form action="{{ route('comment',$post->id) }}" method="post">
                @csrf
                @captcha
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Name:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" placeholder="Email:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea name="body" class="form-control" placeholder="Comment"></textarea>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block">Submit Comment</button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.blog-comments-form -->
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