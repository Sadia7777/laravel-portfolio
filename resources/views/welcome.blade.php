<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{asset('assets/home/css/all.min.css')}}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Bootstarp -->
        <link rel="stylesheet" href="{{asset('assets/home/css/bootstrap.css')}}">
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/home/css/style.css')}}">
        <!-- Responsive Css -->
        <link rel="stylesheet" href="{{asset('assets/home/css/responsive.css')}}">
       
    </head>
   
<body>
<!-- Navbar Start -->
 <header class="header_section sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{asset('assets/home/image/logo.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">


              <li class="nav-item">
                <a class="nav-link" href="{{route('welcome')}}">Home</a>
              </li>

              @foreach ($menus as $item)
              <li class="nav-item">
                <a class="nav-link" href="#{{$item->link}}">{{$item->name}}</a>
              </li>
              @endforeach
             
            
            </ul>
           <span>
            <li class="nav-item">
                <a class="nav-link" href="#">EN</a>
            </li>
           </span>
          </div>
        </div>
    </nav>
 </header>
<!-- Navbar End -->

<!-- Hero Section Start -->
@if ($hero)
<section class="heroSection" id="{{$hero->sectionId}}" style="background-image: url('{{ asset($hero->image) }}');">
    <div class="container">
        <div class="row">
            <div class="col text-center main_contant">
                <h1>{{$hero->title}}</h1>
                <p>{{$hero->description}}</p>
            </div>
            <div class="overlay"></div>
        </div>
    </div>
 </section>
@endif
<!-- Hero Section End -->

<!-- Service Section Start -->
 @if ($services)
 <section class="services" id="{{$services->sectionId}}">
    <div class="container">
        <div class="row title">
           <div class="col text-center">
                <h2>{{$services->title}}</h2>
                <h3>{{$services->sub_title}}</h3>
           </div>
        </div>

        @foreach ($subservices as $item)
        <div class="row services_item py-5">
            <div class="col-lg-6">
                 <img src="{{asset($item->image)}}" class="w-100" alt="services-1">
            </div>
            <div class="col-lg-6 service_content">
                <h3>{{$item->title}}</h3>
                <p>{{$item->description}}</p>
                <div class="services_icon">
                    <div class="d-flex">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="icon_text">
                            <p>{{$item->list_item}}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="icon_text">
                            <p>Aenean quam ornare curabitur blandit.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="icon_text">
                            <p>Aenean quam ornare curabitur blandit.</p>
                        </div>
                    </div>
                    <div class="button">
                        <button>More Details</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>
 </section>
 @endif
<!-- Service Section End -->

<!-- Working process Section Start -->
 <section id="working_process">
    <div class="container">
        <div class="row">
            <div class="col text-center">

                 <video controls src="{{asset('assets/home/image/working-process-video.mp4')}}" style="width: 100%;"></video>
            </div>
        </div>

        <div class="row title text-center d-flex py-5">
           <div class="col-10">
                <h2>Our Working Process</h2>
                <h3>Find out everything you need to know about creating a business process model</h3>
           </div>
           <div class="col-2">
                <img src="{{asset('assets/home/image/SVG.svg')}}"class="w-100">
           </div>
        </div>
        <div class="row">
            <div class="col-md-4 working_item">
                 <img src="{{asset('assets/home/image/working-process-1.png')}}" alt="">
                <h3>1. Collect Ideas</h3>
                <p>Etiam porta malesuada magna mollis euismod consectetur leo elit.</p>
            </div>
            <div class="col-md-4 working_item">
                 <img src="{{asset('assets/home/image/working-process-2.png')}}" alt="">
                <h3>1. Collect Ideas</h3>
                <p>Etiam porta malesuada magna mollis euismod consectetur leo elit.</p>
            </div>
            <div class="col-md-4 working_item">
                 <img src="{{asset('assets/home/image/working-process-3.png')}}" alt="">
                <h3>1. Collect Ideas</h3>
                <p>Etiam porta malesuada magna mollis euismod consectetur leo elit.</p>
            </div>
        </div>
    </div>
 </section>
<!-- Working process  Section End -->

<!-- Projects Ideas Section Start -->
 <section id="Projects_ideas">
    <div class="container">
        <div class="row title">
            <div class="col text-center">
                 <h2>Our Projects</h2>
                 <h3>Check out some of our awesome projects
                    <br>with creative ideas and great design.</h3>
            </div>
         </div>
         <div class="row project_item">
            <div class="col-md-4 pb-4">
                 <img src="{{asset('assets/home/image/project-1.jpeg')}}" class="w-100" alt="project-1">
                <h2 class="pt-3">Cras Fermentum Sem</h2>
                <p>Stationary</p>
            </div>
            <div class="col-md-4 pb-4">
                 <img src="{{asset('assets/home/image/project-2.jpeg')}}" class="w-100" alt="project-1">
                <h2 class="pt-3">Cras Fermentum Sem</h2>
                <p>Stationary</p>
            </div>
            <div class="col-md-4 pb-4">
                 <img src="{{asset('assets/home/image/project-3.jpeg')}}" class="w-100" alt="project-1">
                <h2 class="pt-3">Cras Fermentum Sem</h2>
                <p>Stationary</p>
            </div>
            <div class="col-md-4 pb-4">
                 <img src="{{asset('assets/home/image/project-1.jpeg')}}" class="w-100" alt="project-1">
                <h2 class="pt-3">Cras Fermentum Sem</h2>
                <p>Stationary</p>
            </div>
            <div class="col-md-4 pb-4">
                 <img src="{{asset('assets/home/image/project-2.jpeg')}}" class="w-100" alt="project-1">
                <h2 class="pt-3">Cras Fermentum Sem</h2>
                <p>Stationary</p>
            </div>
            <div class="col-md-4 pb-4">
                 <img src="{{asset('assets/home/image/project-3.jpeg')}}" class="w-100" alt="project">
                <h2 class="pt-3">Cras Fermentum Sem</h2>
                <p>Stationary</p>
            </div>
         </div>
        <div class="button text-center">
            <button>Start a Project</button>
        </div>
    </div>
 </section>
<!-- Projects Ideas process Section End -->

<!-- Clients Section Start -->
 <section id="clients_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Our Clients</p>
                <h3>Trusted by over <br>300+ clients</h3>
                <h5>We bring solutions to make life easier for our customers.</h5>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-1.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-2.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-3.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-4.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-5.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-6.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-7.png')}}" class="w-100" alt="">
                    </div>
                    <div class=" col-md-3 col-sm-3 mb-4">
                         <img src="{{asset('assets/home/image/client-8.png')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
         </div>
    </div>
 </section>
<!-- Clients Section Section End -->

<!-- Why Us Section Start -->
<section id="why_us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                 <img src="{{asset('assets/home/image/whyUs-1.jpeg')}}" class="w-100" alt="whyUs-1">
            </div>
            <div class="col-lg-6">
                <div class="row title">
                    <div class="col">
                         <h2>What Makes Us Different?</h2>
                         <h3>We make spending stress free so you have the perfect control.</h3>
                    </div>
                 </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 d-flex why_us_item py-4">
                        <div class="image">
                             <img src="{{asset('assets/home/image/why-us-2.png')}}" alt="">
                        </div>
                        <div class="contant">
                            <h6>Creativity</h6>
                            <p>Curabitur blandit lacus porttitor ridiculus mus.</p>
                        </div>
                     </div>
                    <div class="col-md-6 col-sm-6 d-flex why_us_item py-4">
                        <div class="image">
                             <img src="{{asset('assets/home/image/why-us-3.png')}}" alt="">
                        </div>
                        <div class="contant">
                            <h6>Creativity</h6>
                            <p>Curabitur blandit lacus
                            <br>porttitor ridiculus mus.</p>
                        </div>
                     </div>
                    <div class="col-md-6 col-sm-6 d-flex why_us_item py-4">
                        <div class="image">
                             <img src="{{asset('assets/home/image/why-us-4.png')}}" alt="">
                        </div>
                        <div class="contant">
                            <h6>Creativity</h6>
                            <p>Curabitur blandit lacus
                            <br>porttitor ridiculus mus.</p>
                        </div>
                     </div>
                    <div class="col-md-6 col-sm-6 d-flex why_us_item py-4">
                        <div class="image">
                             <img src="{{asset('assets/home/image/why-us-5.png')}}" alt="">
                        </div>
                        <div class="contant">
                            <h6>Creativity</h6>
                            <p>Curabitur blandit lacus
                            <br>porttitor ridiculus mus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row title pt-5">
            <div class="col text-center">
                 <h2>Join Our Community</h2>
                 <h3>We are trusted by over 5000+ clients.
                 <br>Join them now and grow your business.</h3>
            </div>
         </div>
         <div class="row counter_part text-center">
            <div class="col-md-4 col-sm-4 py-4">
                <h6>100+</h6>
                <p>Completed Projects</p>
            </div>
            <div class="col-md-4 col-sm-4 py-4">
                <h6>100+</h6>
                <p>Completed Projects</p>
            </div>
            <div class="col-md-4 col-sm-4 py-4">
                <h6>100+</h6>
                <p>Completed Projects</p>
            </div>
         </div>

         <div class="row">
            <div class="col">
                 <img src="{{asset('assets/home/image/community.png')}}"class="w-100" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Why Us Section End -->

<!--Footer Section Start -->
 <footer id="footer_section">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-3 py-2">
                <div class="footer_logo">
                     <img src="{{asset('assets/home/image/footer-logo.png')}}" alt="footer-logo">
                </div>
                <p>© 2023 Sandbox.
                All rights reserved.</p>
                <div class="social_icon">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-firefox-browser"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
           </div>
           <div class="col-lg-3 py-2">
                <h4>Get in Touch</h4>

                <p>Moonshine St. 14/05
                <br> Light City, London,
                <br>United Kingdom</p>

                <p>info@email.com
                <br>00 (123) 456 78 90</p>
           </div>
           <div class="col-lg-2 py-2">
                <h4>Learn More</h4>
                <div class="important_link">
                    <ul class="ps-0">
                        <a href="#"><li>About Us</li></a>
                        <a href="#"><li>Our Story</li></a>
                        <a href="#"><li>Projects</li></a>
                        <a href="#"><li>Terms of Use</li></a>
                        <a href="#"><li>Privacy Policy</li></a>
                    </ul>
                </div>
           </div>
           <div class="col-lg-4 py-2">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our newsletter to get our
                <br>news & deals delivered to you.</p>

                <div class="subscirbe">
                    <form action="">
                        <input type="email" placeholder="Email Address">
                        <button class="subscribe_btn">Join</button>
                    </form>
                </div>
           </div>
         </div>
    </div>
 </footer>
<!--Footer Section End -->

    <!-- Jquary Core -->
     <script src="{{asset('assets/home/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap -->
     <script src="{{asset('assets/home/js/bootstrap.bundle.js')}}"></script>
     <!-- Fantawesome -->
     <script src="{{asset('assets/home/js/all.min.js')}}"></script>
    <!-- Custom Js -->
     <script src="{{asset('assets/home/js/script.js')}}"></script>
</body>
</html>
