<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/argon.min.css" type="text/css">
        <link href="{{asset('assets/css/nucleo.css')}}" rel="stylesheet">
        {{-- <link rel="stylesheet" href=" {{mix ('css/style.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        
        <link rel="stylesheet" href="{{asset('')}}/assets/css/app.css">
        <link href="{{asset('assets/css/argon-design-system.css')}}" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        

    </head>
   
        

        <body class="landing-page">
            <!-- Extra details for Live View on GitHub Pages -->
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
                    style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <!-- Navbar -->
            <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
                <div class="container">
                    <a class="navbar-brand mr-lg-5" href="../index.html">
                        <img src="../assets/img/brand/white.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar_global">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="../../../index.html">
                                        <img src="../assets/img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                    <i class="ni ni-ui-04 d-lg-none"></i>
                                    <span class="nav-link-inner--text">Components</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl">
                                    <div class="dropdown-menu-inner">
                                        <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html"
                                            class="media d-flex align-items-center">
                                            <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                                <i class="ni ni-spaceship"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="heading text-primary mb-md-1">Getting started</h6>
                                                <p class="description d-none d-md-inline-block mb-0">Learn how to use compiling
                                                    Scss, change brand colors and more.</p>
                                            </div>
                                        </a>
                                        <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html"
                                            class="media d-flex align-items-center">
                                            <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                                <i class="ni ni-palette"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="heading text-primary mb-md-1">Foundation</h6>
                                                <p class="description d-none d-md-inline-block mb-0">Learn more about colors,
                                                    typography, icons and the grid system we used for .</p>
                                            </div>
                                        </a>
                                        <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html"
                                            class="media d-flex align-items-center">
                                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                                <i class="ni ni-ui-04"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h5 class="heading text-warning mb-md-1">Components</h5>
                                                <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful
                                                    handcrafted components offered in the Free version.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                    <i class="ni ni-collection d-lg-none"></i>
                                    <span class="nav-link-inner--text">Examples</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="../examples/landing.html" class="dropdown-item">Landing</a>
                                    <a href="../examples/profile.html" class="dropdown-item">Profile</a>
                                    @if (Route::has('login'))
                                    @auth
                                            <a class="py-2 d-none d-md-inline-block" href="{{ route('logout') }}"></a>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                    @else
                                            <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                                        
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                        @endif
                                    @endauth
                                    @endif
                                </div>
                            </li>
                           
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank"
                                    data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                                    <i class="fa fa-facebook-square"></i>
                                    <span class="nav-link-inner--text d-lg-none">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial"
                                    target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                                    <i class="fa fa-instagram"></i>
                                    <span class="nav-link-inner--text d-lg-none">Instagram</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank"
                                    data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                                    <i class="fa fa-twitter-square"></i>
                                    <span class="nav-link-inner--text d-lg-none">Twitter</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon"
                                    href="https://github.com/creativetimofficial/argon-design-system" target="_blank"
                                    data-toggle="tooltip" title="" data-original-title="Star us on Github">
                                    <i class="fa fa-github"></i>
                                    <span class="nav-link-inner--text d-lg-none">Github</span>
                                </a>
                            </li>
                           
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="btn btn-neutral" target="_blank" href="{{ route('logout') }}">
                                            <span class="nav-link-inner--text">Logout</span>
                                        </a>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>

                                @else       
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="btn btn-neutral" target="_blank">
                                            <span class="nav-link-inner--text">Login</span>
                                        </a>
                                    </li>
                        
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                        
                                            <a class="btn btn-neutral btn-icon" target="_blank" href="{{ route('register') }}">
                                                <span class="btn-inner--icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </span>
                                                <span class="nav-link-inner--text">Register</span>
                                            </a>
                                        
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="wrapper">
                <div class="section section-hero section-shaped">
                    <div class="shape shape-style-3 shape-default">
                        <span class="span-150"></span>
                        <span class="span-50"></span>
                        <span class="span-50"></span>
                        <span class="span-75"></span>
                        <span class="span-100"></span>
                        <span class="span-75"></span>
                        <span class="span-50"></span>
                        <span class="span-100"></span>
                        <span class="span-50"></span>
                        <span class="span-100"></span>
                    </div>
                    <div class="page-header">
                        <div class="container shape-container d-flex align-items-center py-lg">
                            <div class="col px-0">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-6 text-center">
                                        <h1 class="text-white display-1">People stories</h1>
                                        <h2 class="display-4 font-weight-normal text-white">The time is right now!</h2>
                                        <div class="btn-wrapper mt-4">
                                            <a href="https://www.creative-tim.com/product/argon-design-system"
                                                class="btn btn-warning btn-icon mt-3 mb-sm-0">
                                                <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                                <span class="btn-inner--text">Play more</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-bottom separator-skew zindex-100">
                        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                </div>
                <div class="section features-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="info info-horizontal info-hover-primary">
                                    <div class="description pl-4">
                                        <h5 class="title">For Developers</h5>
                                        <p>The time is now for it to be okay to be great. People in this world shun people for
                                            being great. For being a bright color. For standing out. But the time is now.</p>
                                        <a href="#" class="text-info">Learn more</a>
                                    </div>
                                </div>
                                <div class="info info-horizontal info-hover-primary mt-5">
                                    <div class="description pl-4">
                                        <h5 class="title">For Designers</h5>
                                        <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                            That’s my skill. I’m not really specifically talented at anything except for the
                                            ability to learn.</p>
                                        <a href="#" class="text-info">Learn more</a>
                                    </div>
                                </div>
                                <div class="info info-horizontal info-hover-primary mt-5">
                                    <div class="description pl-4">
                                        <h5 class="title">For Beginners</h5>
                                        <p>That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you
                                            can’t learn anything from a compliment. If everything I did failed - which it
                                            doesn't.</p>
                                        <a href="#" class="text-info">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-10 mx-md-auto">
                                <img class="ml-lg-5" src="../assets/img/ill/ill.png" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section features-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 mx-auto text-center">
                                <span class="badge badge-primary badge-pill mb-3">Insight</span>
                                <h3 class="display-3">Full-Funnel Social Analytics</h3>
                                <p class="lead">The time is now for it to be okay to be great. For being a bright color. For
                                    standing out.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                                        <i class="ni ni-settings-gear-65"></i>
                                    </div>
                                    <h6 class="info-title text-uppercase text-primary">Social Conversations</h6>
                                    <p class="description opacity-8">We get insulted by others, lose trust for those others. We
                                        get back stabbed by friends. It becomes harder for us to give others a hand.</p>
                                    <a href="javascript:;" class="text-primary">More about us
                                        <i class="ni ni-bold-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                                        <i class="ni ni-atom"></i>
                                    </div>
                                    <h6 class="info-title text-uppercase text-success">Analyze Performance</h6>
                                    <p class="description opacity-8">Don't get your heart broken by people we love, even that we
                                        give them all we have. Then we lose family over time. As we live, our hearts turn
                                        colder.</p>
                                    <a href="javascript:;" class="text-primary">Learn about our products
                                        <i class="ni ni-bold-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                                        <i class="ni ni-world"></i>
                                    </div>
                                    <h6 class="info-title text-uppercase text-warning">Measure Conversions</h6>
                                    <p class="description opacity-8">What else could rust the heart more over time? Blackgold.
                                        The time is now for it to be okay to be great. or being a bright color. For standing
                                        out.</p>
                                    <a href="javascript:;" class="text-primary">Check our documentation
                                        <i class="ni ni-bold-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <footer class="footer">
                    <div class="container">
                        <div class="row row-grid align-items-center mb-5">
                            <div class="col-lg-6">
                                <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                                <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
                            </div>
                            <div class="col-lg-6 text-lg-center btn-wrapper">
                                <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow"
                                    class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip"
                                    data-original-title="Follow us">
                                    <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                                </button>
                                <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow"
                                    class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip"
                                    data-original-title="Like us">
                                    <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                                </button>
                                <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow"
                                    class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip"
                                    data-original-title="Follow us">
                                    <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
                                </button>
                                <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow"
                                    class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip"
                                    data-original-title="Star on Github">
                                    <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="row align-items-center justify-content-md-between">
                            <div class="col-md-6">
                                <div class="copyright">
                                    © 2020 <a href="" target="_blank">Creative Tim</a>.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-footer justify-content-end">
                                    <li class="nav-item">
                                        <a href="" class="nav-link" target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
            <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
            <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
            <script src="../assets/js/plugins/bootstrap-switch.js"></script>
            <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
            <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
            <script src="../assets/js/plugins/moment.min.js"></script>
            <script src="../assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
            <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>
            <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
            <!-- Place this tag in your head or just before your close body tag. -->
            <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
            <script src="../assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
            <!-- Sharrre libray -->
            <script src="../assets/demo/jquery.sharrre.js"></script>
            <script>
                $(document).ready(function() {
        
        
        
              // Goolge Analytics Code Don't Delete
        
              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-46172202-1']);
              _gaq.push(['_trackPageview']);
        
              (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
              })();
        
              // Facebook Pixel Code Don't Delete
              ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                  n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
              }(window,
                document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        
              try {
                fbq('init', '111649226022273');
                fbq('track', "PageView");
        
              } catch (err) {
                console.log('Facebook Track Error:', err);
              }
        
        
              // 
              // 
        
            });
            </script>
            <noscript>
                <img height="1" width="1" style="display:none"
                    src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
            </noscript>
            <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
            <script>
                window.TrackJS &&
              TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-design-system-pro"
              });
            </script>
        
        
        
            <style>
                #ofBar {
                    background: #1A1E21;
                    z-index: 999999999;
                    font-size: 16px;
                    color: #fff;
                    padding: 16px;
                    font-weight: 400;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    position: fixed;
                    bottom: 20px;
                    width: 80%;
                    border-radius: 5px;
                    left: 0;
                    right: 0;
                    margin-left: auto;
                    margin-right: auto;
                    box-shadow: 0 13px 27px -5px rgba(50, 50, 93, 0.25), 0 8px 16px -8px rgba(0, 0, 0, 0.3), 0 -6px 16px -6px rgba(0, 0, 0, 0.025);
                }
        
                #ofBar-logo img {
                    height: 50px;
                }
        
                #ofBar-content {
                    display: inline;
                    padding: 0 15px;
                }
        
                #ofBar-right {
                    display: flex;
                    align-items: center;
                }
        
                #ofBar b {
                    font-size: 15px !important;
                }
        
                #count-down {
                    display: initial;
                    padding-left: 10px;
                    font-weight: bold;
                    font-size: 20px;
                }
        
                #close-bar {
                    font-size: 17px;
                    opacity: 0.5;
                    cursor: pointer;
                }
        
                #close-bar:hover {
                    opacity: 1;
                }
        
                #btn-bar {
                    background-color: #fff;
                    color: #40312d;
                    border-radius: 4px;
                    padding: 10px 20px;
                    font-weight: bold;
                    text-transform: uppercase;
                    text-align: center;
                    font-size: 12px;
                    opacity: .95;
                    margin-right: 20px;
                    box-shadow: 0 5px 10px -3px rgba(0, 0, 0, .23), 0 6px 10px -5px rgba(0, 0, 0, .25);
                }
        
                #btn-bar:hover {
                    opacity: 0.9;
                }
        
                #btn-bar {
                    opacity: 1;
                }
        
                #btn-bar span,
                #ofBar-content span {
                    color: red;
                    font-weight: 700;
                }
        
                #oldPriceBar {
                    text-decoration: line-through;
                    font-size: 16px;
                    color: #fff;
                    font-weight: 400;
                    top: 2px;
                    position: relative;
                }
        
                #newPrice {
                    color: #fff;
                    font-size: 19px;
                    font-weight: 700;
                    top: 2px;
                    position: relative;
                    margin-left: 7px;
                }
        
                #fromText {
                    font-size: 15px;
                    color: #fff;
                    font-weight: 400;
                    margin-right: 3px;
                    top: 0px;
                    position: relative;
                }
        
                @media(max-width: 991px) {
                    #count-down {
                        display: block;
                        margin-top: 15px;
                        text-align: center;
                        font-size: 19px;
                    }
                }
        
                @media (max-width: 768px) {
        
                    #ofBar {
                        flex-direction: column;
                        align-items: normal;
                    }
        
                    #ofBar-content {
                        margin: 15px 0;
                        text-align: center;
                        font-size: 18px;
                    }
        
                    #ofBar-right {
                        justify-content: flex-end;
                    }
                }
            </style>
        
          
            <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
                src="https://vars.hotjar.com/box-469cf41adb11dc78be68c1ae7f9457a4.html"
                style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
        </body>
      
            
      
</html>
