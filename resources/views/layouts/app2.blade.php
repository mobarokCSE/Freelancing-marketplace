
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <title>FreelanWeb</title>

      <link rel="icon" href="{{ asset('assets/img/core-img/favicon.jpg') }}">


      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

      <div id="preloader">
            <div class="dorne-load"></div>
      </div>

      <div class="dorne-search-form d-flex align-items-center">
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <div class="search-close-btn" id="closeBtn">
                                    <i class="pe-7s-close-circle" aria-hidden="true"></i>
                              </div>
                              <form action="#">
                                    <input type="search" name="caviarSearch" id="search"
                                          placeholder="Search Your Desire Destinations or Events">
                                    <input type="submit" class="d-none" value="submit">
                              </form>
                        </div>
                  </div>
            </div>
      </div>

      @include('partials.header')


      @yield('content')


      @include('partials.footer')


      <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>

      <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap/popper.min.js+bootstrap.min.js.pagespeed.jc.XfQ1IyzZZZ.js') }}"></script>

      <script src="{{ asset('assets/js/others/plugins.js') }}"></script>

      <!-- <script src="assets/js/active.js"></script>
      <script async src="assets/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->

      <script>
            //<![CDATA[
            (function ($) {
                  'use strict';

                  if ($.fn.owlCarousel) {
                        // Hero Slider Active Code
                        $(".features-slides").owlCarousel({
                                    items: 5,
                                    loop: true,
                                    autoplay: true,
                                    smartSpeed: 2000,
                                    margin: 50,
                                    nav: false,
                                    responsive: {
                                          0: {
                                                items: 1
                                          },
                                          576: {
                                                items: 2
                                          },
                                          992: {
                                                items: 3
                                          },
                                          1200: {
                                                items: 5
                                          }
                                    }
                              }),
                              $(".features-slides-custom").owlCarousel({
                                    items: 5,
                                    loop: true,
                                    autoplay: true,
                                    smartSpeed: 2000,
                                    margin: 50,
                                    nav: false,
                                    responsive: {
                                          0: {
                                                items: 1
                                          },
                                          576: {
                                                items: 2
                                          },
                                          992: {
                                                items: 4
                                          },
                                          1200: {
                                                items: 4
                                          }
                                    }
                              }),
                              $(".features-slides-airliens").owlCarousel({
                                    items: 7,
                                    loop: true,
                                    autoplay: true,
                                    smartSpeed: 2000,
                                    margin: 50,
                                    nav: false,
                                    responsive: {
                                          0: {
                                                items: 1
                                          },
                                          576: {
                                                items: 2
                                          },
                                          992: {
                                                items: 3
                                          },
                                          1200: {
                                                items: 6
                                          }
                                    }
                              }),
                              $(".features-slides-hu").owlCarousel({
                                    items: 5,
                                    loop: true,
                                    autoplay: true,
                                    smartSpeed: 2000,
                                    margin: 50,
                                    nav: false,
                                    responsive: {
                                          0: {
                                                items: 1
                                          },
                                          576: {
                                                items: 1
                                          },
                                          992: {
                                                items: 1
                                          },
                                          1200: {
                                                items: 2
                                          }
                                    }
                              })
                  }

                  // Search Active Code
                  $('#search-btn, #closeBtn').on('click', function () {
                        $('body').toggleClass('search-form-on');
                  });

                  // matchHeight Active Code
                  if ($.fn.matchHeight) {
                        $('.equal-height').matchHeight();
                  }

                  // ScrollUp Active Code
                  if ($.fn.scrollUp) {
                        $.scrollUp({
                              scrollSpeed: 1500,
                              scrollText: '<i class="pe-7s-angle-up" aria-hidden="true"></i>'
                        });
                  }

                  // onePageNav Active Code
                  if ($.fn.onePageNav) {
                        $('#listingNav').onePageNav({
                              currentClass: 'active',
                              scrollSpeed: 2000,
                              easing: 'easeOutQuad'
                        });
                  }

                  // PreventDefault a Click
                  $("a[href='#']").on('click', function ($) {
                        $.preventDefault();
                  });

                  // wow Active Code
                  if ($.fn.init) {
                        new WOW().init();
                  }

                  var $window = $(window);

                  // Sticky Active JS
                  $window.on('scroll', function () {
                        if ($window.scrollTop() > 0) {
                              $('body').addClass('sticky');
                        } else {
                              $('body').removeClass('sticky');
                        }
                  });

                  // Preloader Active Code
                  $window.on('load', function () {
                        $('#preloader').fadeOut('slow', function () {
                              $(this).remove();
                        });
                  });

            })(jQuery);
            //]]>
      </script>
</body>

</html>
