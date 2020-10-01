<!DOCTYPE html>
<html lang="en">
<link href="{{ asset('img/favi.png') }}" rel="icon">
@yield('head')


<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('landingpage') }}">
            <img src="{{ asset('images/pzi-remove-bg.png') }}" class="logo-light" alt="{{config('app.name')}} logo">
            <img src="{{ asset('images/pzi-remove-bg.png') }}" class="logo-dark" alt="{{config('app.name')}} logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="header__top-right d-none d-lg-block">
            <ul class="list-unstyled d-flex justify-content-end align-items-center">
              <li><i class="icon-phone"></i><span><a href="tel:+2348173040154">+2348173040154</a></span></li>
             
              <li ><a href="#request_quote" class="btn btn__white" ><i class="icon-list"></i><span style="font-size: 12px;">Request A Quote</span></a></li>
            </ul>
          </div><!-- /.header-top-right -->
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="{{ route('landingpage') }}" class="dropdown-toggle nav__item-link active">Home</a>
                {{-- <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="{{ route('landingpage') }}" class="nav__item-link">Home Main</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="" class="nav__item-link">Home Moderm</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="" class="nav__item-link">Home classic</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu --> --}}
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="{{ route('about.us') }}" class="dropdown-toggle nav__item-link">Company</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="{{ route('about.us') }}" class="nav__item-link">About Us</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="{{ route('why.us') }}" class="nav__item-link">Why Choose Us</a></li>
                  <!-- /.nav-item -->
                  {{-- <li class="nav__item"><a href="" class="nav__item-link">Leadership Team</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="" class="nav__item-link">Global Locations</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="" class="nav__item-link">Our Gallery</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="" class="nav__item-link">careers</a></li> --}}
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="{{ route('services') }}" class="dropdown-toggle nav__item-link">Services</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <h6>What We Do</h6>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('forwarding') }}">Local & International Freight</br> Forwarding and Shipping </a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('procurement') }}">Procurement & Supply Chain Management </a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('project.cargo') }}">Project Cargo shipping and Delivery </a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('oem.agency') }}">OEM/Equipment and Sales Representation</a>
                          </li> <!-- /.nav-item --> 
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('sourcing') }}">Equipment & Machinery Sourcing</a>
                          </li> <!-- /.nav-item -->                          
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('technology') }}">Information technology & Consultancy </a></li>
                          <li class="nav__item"><a class="nav__item-link" href="{{ route('product.sales') }}">Product Sales & Marketing  Development</a></li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <h6>Who We Serve</h6>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="">Oil & Gas </a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="">Manufacturers</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="">Importers and Exporters </a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="">Pharmaceuticals</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="">Government Agencies</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="">IT Industry </a></li>
                          <li class="nav__item"><a class="nav__item-link" href="">Aviation  Industry </a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="">Power Sector </a></li>
                          <li class="nav__item"><a class="nav__item-link" href="">Specialized Projects </a></li> <!-- /.nav-item -->
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              
              <li class="nav__item with-dropdown">
                <a href="{{ route('blogs.index') }}" class="dropdown-toggle nav__item-link">News & Media</a>
                
              </li><!-- /.nav-item -->
             
              <li class="nav__item">
                <a href="{{ route('contact.us') }}" class="nav__item-link">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-modules">
            <div class="modules__wrapper d-flex align-items-center">
              <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
            </div><!-- /.modules-wrapper -->
          </div><!-- /.navbar-modules -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->






    @yield('main-content')
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
                    <div class="accordion__item-body" >
                      <ul class="contact__list list-unstyled" >
                        <li><a href="tel:+2348173040154" style="font-size: 15px;">Phone: +2348173040154</a></li>
                        <li><a href="mailto:info@precision-zodiak.com" style="font-size: 15px;">Email: info@precision-zodiak.com</a></li>
                        <li>Address: Lagos <br>
                            Suite 6,<br>
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
                        <li><a href="tel:+2348173040154" style="font-size: 15px;">Phone: +2348173040154</a></li>
                        <li><a href="mailto:info@precision-zodiak.com" style="font-size: 15px;">Email: info@precision-zodiak.com</a></li>
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
                        <li><a href="tel:+447515371301" style="font-size: 15px;">UK Contact: +447515371301</a></li>
                        <li><a href="tel:+00918323716873" style="font-size: 15px;">USA Contact: +009 18323716873</a></li>
                        <li><a href="mailto:info@precision-zodiak.com" style="font-size: 15px;">Email: info@precision-zodiak.com</a></li>
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
    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-1">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="{{ asset('images/pzi.png') }}" alt="logo" class="mb-30">
              </div>
            </div><!-- /.col-lg-4 -->

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">What We Do</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li ><a  href="{{ route('forwarding') }}">Local & International Freight Forwarding and Shipping </a> </li>
                    <li ><a  href="{{ route('procurement') }}">Procurement & Supply Chain Management </a>    </li>
                    <li ><a  href="{{ route('project.cargo') }}">Project Cargo shipping and Delivery </a>        </li>
                    <li ><a  href="{{ route('oem.agency') }}">OEM/Equipment and Sales Representation</li>
                    <li ><a  href="{{ route('sourcing') }}">Equipment & Machinery Sourcing</li>
                    <li ><a  href="{{ route('technology') }}">Information technology & Consultancy </a></li>
                    <li ><a  href="{{ route('product.sales') }}">Product Sales & Marketing  Development</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Who We Serve</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                      <li ><a  href="">Oil & Gas </a></li> 
                      <li ><a  href="">Manufacturers</a></li> 
                      <li ><a  href="">Importers and Exporters </a></li> 
                      <li ><a  href="">Pharmaceuticals</a></li> 
                      <li ><a  href="">Government Agencies</a></li> 
                      <li ><a  href="">IT Industry </a></li>
                      <li ><a  href="">Aviation  Industry </a></li> 
                      <li ><a  href="">Power Sector </a></li>
                      <li ><a  href="">Specialized Projects </a></li> 
                      
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            {{-- <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Quick Links</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Request A Quote</a></li>
                    <li><a href="#">Track & Trace</a></li>
                    <li><a href="#">Find A Location</a></li>
                    <li><a href="#">Global Agents</a></li>
                    <li><a href="#">Help & FAQ</a></li>
                  </ul>
                </nav>
              </div>
            </div> --}}
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="container">
        <div class="footer-bottom">
          <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
              <div class="footer__copyright">
                {{-- <nav>
                  <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
                    <li><a href="{{ route('tandc') }}">Terms & Conditions </a></li>
                    <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Employee login</a></li>
                  </ul>
                </nav> --}}
                <span style="font-size: 14px;">&copy; {{date('Y')}} {{config('app.name')}} by</span>
                <a style="font-size: 14px;" href="">PZI</a>
              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-6 -->
            {{-- <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
              <div class="social__icons justify-content-end w-100">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div><!-- /.social-icons -->
            </div><!-- /.col-lg-6 --> --}}
          </div><!-- /.row -->
        </div><!-- /.Footer-bottom -->
      </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <form action="{{ route('search.posts') }}" method="GET" class="module__search-form">
        @csrf
        <input name="post" type="text" class="search__input" placeholder="Search Here">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.module-search-container -->

  </div><!-- /.wrapper -->

  @yield('script')
</body>

</html>