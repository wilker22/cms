<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
        @yield('title')
    </title>

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
          <a class="navbar-brand" href="{{route('welcome')}}">
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


   @yield('header')


   @yield('content')

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
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cdc1362dc0da852"></script>

  </body>
</html>
