@extends('layouts.blog')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS — Blog with sidebar</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="../index.html">
            <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
            <img class="logo-light" src="{{asset('img/logo-light.png')}}" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">
            <li class="nav-item">
              <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link" href="#">SaaS <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/saas-1.html">SaaS 1</a>
                    <a class="nav-link" href="../demo/saas-2.html">SaaS 2</a>
                    <a class="nav-link" href="../demo/saas-3.html">SaaS 3</a>
                    <a class="nav-link" href="../demo/saas-4.html">SaaS 4</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Software <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/software-1.html">Software 1</a>
                    <a class="nav-link" href="../demo/software-2.html">Software 2</a>
                    <a class="nav-link" href="../demo/software-3.html">Software 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Marketing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/marketing-1.html">Marketing 1</a>
                    <a class="nav-link" href="../demo/marketing-2.html">Marketing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Listing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/listing-1.html">Listing 1</a>
                    <a class="nav-link" href="../demo/listing-2.html">Listing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../demo/finance-1.html">Finance</a>
                </li>

              </ul>
            </li>

           

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/blog.html">Blog</a>
                        <a class="nav-link" href="../block/career.html">Career</a>
                        <a class="nav-link" href="../block/contact.html">Contact</a>
                        <a class="nav-link" href="../block/content.html">Content</a>
                        <a class="nav-link" href="../block/counter.html">Counter</a>
                        <a class="nav-link" href="../block/cover.html">Cover</a>
                        <a class="nav-link" href="../block/cta.html">Call to action</a>
                        <a class="nav-link" href="../block/download.html">Download</a>
                        <a class="nav-link" href="../block/explore.html">Explore</a>
                        <a class="nav-link" href="../block/faq.html">FAQ</a>
                      </nav>
                    </div>

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/feature-text.html">Feature textual</a>
                        <a class="nav-link" href="../block/feature.html">Feature</a>
                        <a class="nav-link" href="../block/footer.html">Footer</a>
                        <a class="nav-link" href="../block/gallery.html">Gallery</a>
                        <a class="nav-link" href="../block/header.html">Header</a>
                        <a class="nav-link" href="../block/map.html">Map</a>
                        <a class="nav-link" href="../block/modal.html">Modal</a>
                        <a class="nav-link" href="../block/offcanvas.html">Offcanvas</a>
                        <a class="nav-link" href="../block/partner.html">Partner</a>
                        <a class="nav-link" href="../block/popup.html">Popup</a>
                      </nav>
                    </div>

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/portfolio.html">Portfolio</a>
                        <a class="nav-link" href="../block/pricing.html">Pricing</a>
                        <a class="nav-link" href="../block/process.html">Process</a>
                        <a class="nav-link" href="../block/service.html">Service</a>
                        <a class="nav-link" href="../block/shop.html">Shop</a>
                        <a class="nav-link" href="../block/signup.html">Signup</a>
                        <a class="nav-link" href="../block/subscribe.html">Subscribe</a>
                        <a class="nav-link" href="../block/team.html">Team</a>
                        <a class="nav-link" href="../block/testimonial.html">Testimonial</a>
                        <a class="nav-link" href="../block/video.html">Video</a>
                      </nav>
                    </div>

                  </div>
                </div>
              </nav>
            </li>

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">UI Kit <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/accordion.html">Accordion</a>
                        <a class="nav-link" href="../uikit/alert.html">Alert</a>
                        <a class="nav-link" href="../uikit/badge.html">Badge</a>
                        <a class="nav-link" href="../uikit/button.html">Button</a>
                        <a class="nav-link" href="../uikit/card.html">Card</a>
                        <a class="nav-link" href="../uikit/color.html">Colors</a>
                        <a class="nav-link" href="../uikit/constellation.html">Constellation</a>
                        <a class="nav-link" href="../uikit/content.html">Content</a>
                        <a class="nav-link" href="../uikit/countdown.html">Count down</a>
                        <a class="nav-link" href="../uikit/countup.html">Count up</a>
                      </nav>
                    </div>

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/dropdown.html">Dropdown</a>
                        <a class="nav-link" href="../uikit/form.html">Form</a>
                        <a class="nav-link" href="../uikit/gallery.html">Gallery</a>
                        <a class="nav-link" href="../uikit/granim.html">Granim</a>
                        <a class="nav-link" href="../uikit/icon.html">Icon</a>
                        <a class="nav-link" href="../uikit/image.html">Image</a>
                        <a class="nav-link" href="../uikit/lightbox.html">Lightbox</a>
                        <a class="nav-link" href="../uikit/map.html">Map</a>
                        <a class="nav-link" href="../uikit/misc.html">Miscellaneous</a>
                        <a class="nav-link" href="../uikit/modal.html">Modal</a>
                      </nav>
                    </div>

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/nav.html">Nav</a>
                        <a class="nav-link" href="../uikit/navbar.html">Navbar</a>
                        <a class="nav-link" href="../uikit/offcanvas.html">Offcanvas</a>
                        <a class="nav-link" href="../uikit/overlay.html">Overlay</a>
                        <a class="nav-link" href="../uikit/popup.html">Popup</a>
                        <a class="nav-link" href="../uikit/pricing.html">Pricing</a>
                        <a class="nav-link" href="../uikit/process.html">Process</a>
                        <a class="nav-link" href="../uikit/progress.html">Progress</a>
                        <a class="nav-link" href="../uikit/scroll.html">Scroll</a>
                        <a class="nav-link" href="../uikit/section.html">Section</a>
                      </nav>
                    </div>

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/shuffle.html">Shuffle</a>
                        <a class="nav-link" href="../uikit/slider.html">Slider</a>
                        <a class="nav-link" href="../uikit/social.html">Social</a>
                        <a class="nav-link" href="../uikit/tab.html">Tab</a>
                        <a class="nav-link" href="../uikit/table.html">Table</a>
                        <a class="nav-link" href="../uikit/topbar.html">Topbar</a>
                        <a class="nav-link" href="../uikit/typing.html">Typing</a>
                        <a class="nav-link" href="../uikit/typography.html">Typography</a>
                        <a class="nav-link" href="../uikit/utility.html">Utility</a>
                        <a class="nav-link" href="../uikit/video.html">Video</a>
                      </nav>
                    </div>

                  </div>
                </div>
              </nav>
            </li>

          </ul>
        </section>

        <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Login</a>

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1>Latest Blog Posts</h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">
                @forelse($posts as $post)
                 
                  <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6 d-block">
                      <a href="{{ route('blog.show', $post->id) }}"><img class="card-img-top" src="{{asset('storage/'. $post->image)}}" alt="Card image cap"></a>
                      <div class="p-6 text-center">
                        <p>
                          <a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">
                            {{$post->category->name}}
                          </a>
                        </p>
                        <h5 class="mb-0">
                          <a class="text-dark" href="{{ route('blog.show', $post->id) }}">
                            {{$post->title}}
                          </a>
                        </h5>
                      </div>
                    </div>
                  </div>

                @empty
                  <p class="text-center">Nenhum resultado encontrado para {{request()->query('search')}}</p>
                @endforelse


               
              </div>


           <!--   <nav class="flexbox mt-30">
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
              </nav> -->

              {{$posts->appends(['search' => request()->query('search')])->links()}}
            </div>



            <div class="col-md-4 col-xl-3">
              <div class="sidebar px-4 py-md-0">

                <h6 class="sidebar-title">Search</h6>
                <form class="input-group" action="{{route('welcome')}}" method="GET">
                  <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
                  <div class="input-group-addon">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                  </div>
                </form>

                <hr>

                <h6 class="sidebar-title">Categories</h6>
                <div class="row link-color-default fs-14 lh-24">
                 
                    @foreach($categories as $category)
                      <div class="col-6">
                        <a href="">
                          {{$category->name}}
                        </a>
                      </div>
                    @endforeach
                </div>

                <hr>

             <!--  <h6 class="sidebar-title">Top posts</h6>
                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/4.jpg">
                  <p class="media-body small-2 lh-4 mb-0">Thank to Maryam for joining our team</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/3.jpg">
                  <p class="media-body small-2 lh-4 mb-0">Best practices for minimalist design</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/5.jpg">
                  <p class="media-body small-2 lh-4 mb-0">New published books for product designers</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/2.jpg">
                  <p class="media-body small-2 lh-4 mb-0">Top 5 brilliant content marketing strategies</p>
                </a>-->

                <hr>

                <h6 class="sidebar-title">Tags</h6>
                <div class="gap-multiline-items-1">
                 @foreach($tags as $tag)
                 <a class="badge badge-secondary" href="#">{{$tag->name}}</a>
                 @endforeach
                  
                </div>
                
                <hr>


              </div>
            </div>

          </div>
        </div>
      </div>
    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="/"><img src="{{asset('img/logo-dark.png')}}" alt="logo"></a>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

  </body>
</html>
