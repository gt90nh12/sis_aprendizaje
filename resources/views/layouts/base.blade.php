<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Sistema de Aprendizaje</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/custombox/dist/custombox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
</head>

<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

    @yield('content')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url(../../assets/img/1920x1080/img4.jpg);">
      <!-- Main Content -->
      <div class="d-lg-flex align-items-lg-center height-85vh--lg">
        <div class="container space-2 space-0--lg mt-lg-8">
          <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
              <!-- Title -->
              <span class="d-block text-white text-uppercase mb-2">Únete al cambio </span>
              <h1 class="display-4 font-size-48--md-down text-white mb-0">Sistema de aprendizaje</h1>
              <!-- End Title -->
            </div>

            <div class="col-lg-5">
              <!-- Signup Form -->
              <div class="bg-white shadow-sm rounded p-6">
                <form class="js-validate">
                  <div class="mb-4">
                    <h2 class="h4">Comienza gratis</h2>
                  </div>

                  <!-- Input -->
                  <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                      <input type="text" class="form-control form__input" name="username" required
                             placeholder="Ingrese su nombre de usuario"
                             aria-label="Ingrese su nombre de usuario">
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Input -->
                  <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                      <input type="email" class="form-control form__input" name="email" required
                             placeholder="Ingrese su dirección de correo electrónico"
                             aria-label="Ingrese su dirección de correo electrónico">
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Input -->
                  <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                      <input type="password" class="form-control form__input" name="password" required
                             placeholder="Ingresa su contraseña"
                             aria-label="Ingresa su contraseña">
                    </div>
                  </div>
                  <!-- End Input -->

                  <button type="submit" class="btn btn-block btn-primary">Empezar</button>
                </form>
              </div>
              <!-- End Signup Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Main Content -->
    </div>

    <div class="d-lg-flex align-items-lg-center height-15vh--lg">
      <!-- Bottom Content -->
      <div class="container space-2 space-0--lg">
        <!-- Slick Carousel -->
        <div class="js-slick-carousel u-slick"
             data-autoplay="true"
             data-speed="5000"
             data-infinite="true"
             data-slides-show="6"
             data-responsive='[{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 576,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 480,
               "settings": {
                 "slidesToShow": 2
               }
             }]'>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/amazon.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/google.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/paypal.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/slack.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/samsung.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/airbnb.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/lenovo.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="../../assets/img/clients/spotify.png" alt="Image Description">
          </div>
        </div>
        <!-- End Slick Carousel -->
      </div>
      <!-- End Bottom Content -->
    </div>
    <!-- End Hero Section -->

    <hr class="my-0">

    <!-- Features Section -->
    <div class="container space-2 space-3--lg">
      <div class="row justify-content-lg-between">
        <div class="col-md-4 col-lg-4 mb-7 mb-md-0">
          <div class="tab-vertical tab-vertical-md py-5 mr-lg-7">
            <div class="pr-md-7 mb-5">
              <h3 class="h4">3 tecnicas para mejorar el rendimiento de los estudiantes</h3>
            </div>

            <!-- Tab Nav -->
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active tab-vertical__nav-link" id="v-pills-features-tab" data-toggle="pill" href="#v-pills-features" role="tab" aria-controls="v-pills-features" aria-selected="true">
                1. Concentración
              </a>
              <a class="nav-link tab-vertical__nav-link" id="v-pills-key-benefits-tab" data-toggle="pill" href="#v-pills-key-benefits" role="tab" aria-controls="v-pills-key-benefits" aria-selected="false">
                2. Memorización
              </a>
              <a class="nav-link tab-vertical__nav-link" id="v-pills-company-tab" data-toggle="pill" href="#v-pills-company" role="tab" aria-controls="v-pills-company" aria-selected="false">
                3. Cálculo mental
              </a>
            </div>
            <!-- End Tab Nav -->
          </div>
        </div>

        <div class="col-md-8">
          <!-- Tab Content -->
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-features-tab">
              <div class="row">
                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/consult-primary-icon.svg" alt="Image Description">
                    <p>This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/plan-brown-icon.svg" alt="Image Description">
                    <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-0">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/create-blue-icon.svg" alt="Image Description">
                    <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/develop-purple-icon.svg" alt="Image Description">
                    <p>Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-key-benefits" role="tabpanel" aria-labelledby="v-pills-key-benefits-tab">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-7 mb-lg-0">
                  <img class="img-fluid" src="../../assets/img/700x900/img1.jpg" alt="Image Description">
                </div>

                <div class="col-lg-7">
                  <!-- Description -->
                  <div class="pl-lg-4">
                    <span class="u-label u-label--sm u-label--purple mb-3">Integrations</span>
                    <h2 class="h3 mb-3">Key benefits of Space template</h2>
                    <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                    <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Description -->
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
              <div class="row">
                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/rocket-red-icon.svg" alt="Image Description">
                    <p>Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/data-analysis-blue-icon.svg" alt="Image Description">
                    <p>We get it, you're busy and it's important that someone keeps up with marketing and driving people to your brand. We've got you covered.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-md-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/arrow-primary-icon.svg" alt="Image Description">
                    <p>It's important to stay detail oriented with every project we tackle. Staying focused allows us to turn every project we complete into something we love.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="../../assets/svg/components/moving-up-brown-icon.svg" alt="Image Description">
                    <p>We strive to embrace and drive change in our industry which allows us to keep our clients relevant and ready to adapt.</p>
                    <a href="#">
                      Learn More
                      <span class="fa fa-angle-right align-middle ml-2"></span>
                    </a>
                  </div>
                  <!-- End Icon Block -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Mockup Section -->
    <div class="bg-gray-100">
      <div class="container space-2-top space-3-top--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <div class="mb-5">
            <span class="u-label u-label--sm u-label--purple mb-3">Características clave</span>
            <h2 class="h1">Cursos de alta calidad</h2>
            <p class="lead">Con el sistema de aprendizaje el estudiante de nivel secundario mejorará el rendimiento académico a través de las técnicas de memorización, concentración y cálculo mental matematico.</p>
          </div>

          <!-- Fancybox -->
          <a class="js-fancybox u-media-player" href="javascript:;"
             data-src="//vimeo.com/167434033"
             data-speed="700"
             data-animate-in="zoomIn"
             data-animate-out="zoomOut"
             data-caption="Space - Responsive Website Template">
            <span class="u-media-player__icon u-media-player__icon--xl u-media-player__icon--box-shadow">
              <span class="fa fa-play u-media-player__icon-inner"></span>
            </span>
          </a>
          <!-- End Fancybox -->
        </div>
        <!-- End Title -->

        <!-- SVG Mockup -->
        <div class="w-lg-80 mx-auto">
          <object type="image/svg+xml" data="../../assets/svg/mockups/devices-1.svg"></object>
        </div>
        <!-- End SVG Mockup -->
      </div>
    </div>
    <!-- End Mockup Section -->

 

    <!-- Divider -->
    <div class="w-50 w-lg-35 mx-auto">
      <hr class="my-0">
    </div>
    <!-- End Divider -->

    <!-- Testimonials Section -->
    <div class="container space-2 space-3--lg">

      <div class="row justify-content-lg-center">
        <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
          <!-- Testimonials -->
          <div class="text-center px-lg-4">
            <div class="mb-2">
              <img class="u-avatar rounded-circle mx-auto mb-2" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
              <h4 class="h6">Lic. Juliana Terrazas Condori</h4>
            </div>
            <blockquote class="text-secondary mb-0">"Mi objetivo profesional es desarrollar en la institución educativa formación de calidad en Geografía e Historia. Mi experiencia profesional abarca prácticamente todas las asignaturas de geografía e historia,  y amplios conocimientos de las TIC's aplicadas a la educación."</blockquote>
          </div>
          <!-- End Testimonials -->
        </div>

        <div class="col-md-6 col-lg-5">
          <!-- Testimonials -->
          <div class="text-center px-lg-4">
            <div class="mb-2">
              <img class="u-avatar rounded-circle mx-auto mb-2" src="../../assets/img/100x100/img15.jpg" alt="Image Description">
              <h4 class="h6">Lic. Juan choque Ventura</h4>
            </div>
            <blockquote class="text-secondary mb-0">"Profesor con amplia experiencia en docencia titulada en la especialidad de lengua y literatura y con segunda especialidad en arte, con estudios concluidos de maestría y educación superior profesor capacitado en las nuevas corrientes pedagogías TIC's."</blockquote>
          </div>
          <!-- End Testimonials -->
        </div>
      </div>

      
    </div>
    <!-- End Testimonials Section -->

    <!-- CTA -->
    <div class="gradient-overlay-half-primary-v1">
      <div class="bg-img-hero" style="background-image: url(../../assets/img/bg/bg2.png);">
        <div class="container">
          <div class="row align-items-lg-center text-center text-lg-left space-2">
            <div class="col-lg-7">
              <h2 class="text-white">Lic. Juliana Terrazas Paniagua</h2>
              <p class="lead text-white mb-0">Space gives you everything you need to manage business, build great stuff, and reach your goals.</p>
            </div>

            <div class="col-lg-5 text-lg-right">
              <a class="btn btn-purple mb-2 mb-sm-0 mr-sm-2" href="../pages/signup-simple.html">Create Free Account</a>
              <a class="btn btn-light mb-2 mb-sm-0" href="../../starter/index.html">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End CTA -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container space-2">
      <div class="row justify-content-md-between">
        <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">About</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../pages/about-agency.html">About Agency</a>
            <a class="list-group-item list-group-item-action" href="../pages/about-start-up.html">About Start-Up</a>
            <a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Services Agency</a>
            <a class="list-group-item list-group-item-action" href="../pages/services-start-up.html">Services Start-Up</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Company</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../pages/contacts-agency.html">Contact Us</a>
            <a class="list-group-item list-group-item-action" href="../pages/help.html">Help</a>
            <a class="list-group-item list-group-item-action" href="../pages/careers.html">Careers</a>
            <a class="list-group-item list-group-item-action" href="../pages/terms.html">Terms &amp; Conditions</a>
            <a class="list-group-item list-group-item-action" href="../pages/privacy.html">Privacy &amp; Policy</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-5 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Shop</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../shop/classic.html">Classic</a>
            <a class="list-group-item list-group-item-action" href="../shop/single-product.html">Single Product</a>
            <a class="list-group-item list-group-item-action" href="../shop/checkout.html">Checkout</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Social</h3>

          <!-- List -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-facebook-f min-width-3 text-center mr-2"></span>
              Facebook
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-twitter min-width-3 text-center mr-2"></span>
              Twitter
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-dribbble min-width-3 text-center mr-2"></span>
              Dribbble
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-github min-width-3 text-center mr-2"></span>
              GitHub
            </a>
          </div>
          <!-- End List -->
        </div>

        <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
          <!-- Logo -->
          <a class="d-inline-block mb-5" href="index.html" aria-label="Space">
            <img src="../../assets/svg/logos/logo-short-white.svg" alt="Logo" style="width: 40px; max-width: 100%;">
          </a>
          <!-- End Logo -->

          <!-- Language -->
          <div class="btn-group d-block position-relative mb-4 mb-lg-auto">
            <a id="footerLanguageInvoker" class="btn-text-secondary d-flex align-items-center u-unfold--language-btn rounded py-2 px-3" href="javascript:;" role="button"
               aria-controls="footerLanguage"
               aria-haspopup="true"
               aria-expanded="false"
               data-unfold-event="click"
               data-unfold-target="#footerLanguage"
               data-unfold-type="css-animation"
               data-unfold-duration="300"
               data-unfold-delay="300"
               data-unfold-hide-on-scroll="false"
               data-unfold-animation-in="slideInUp"
               data-unfold-animation-out="fadeOut">
              <span class="font-size-14">English</span>
              <span class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></span>
            </a>

            <!-- Content -->
            <div id="footerLanguage" class="u-unfold u-unfold--language bottom-0 left-0" aria-labelledby="footerLanguageInvoker">
              <div class="py-6 px-5">
                <h4 class="h6 mb-4">Select your language</h4>

                <div class="row">
                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="active d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
                        English
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/fr.svg" alt="France Flag">
                        Français
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/de.svg" alt="Germany Flag">
                        Deutsch
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/pt.svg" alt="Portugal Flag">
                        Português
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>

                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/es.svg" alt="Spain Flag">
                        Español
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/it.svg" alt="Italy Flag">
                        Italiano
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/ru.svg" alt="Russian Flag">
                        Русский
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/tr.svg" alt="Turkey Flag">
                        Türkçe
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>
                </div>
              </div>

              <!-- Signup -->
              <a class="u-unfold--language__link p-5" href="../pages/signup-simple.html">
                <small class="d-block text-muted mb-1">More languages coming soon.</small>
                <small class="d-block">Signup to get notified <span class="fa fa-arrow-right u-unfold__icon-pointer"></span></small>
              </a>
              <!-- End Signup -->
            </div>
            <!-- End Content -->
          </div>
          <!-- End Language -->

          <p class="small text-muted">All rights reserved. &copy; Space. 2019 Htmlstream.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Panel Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar u-unfold--css-animation u-unfold--hidden" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--panel__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center border-bottom py-4 px-5">
            <h4 class="h5 mb-0">Account</h4>

            <button type="button" class="close u-sidebar__close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content py-5">
              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Menu label</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-5">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/finance-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Dashboard</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/touch-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Activity</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/team-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Team</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/email-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Mailbox</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/projects-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Projects</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->

              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Sub level</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-0">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/calendar-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Calendar</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/cog-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Tools</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/archive-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Archive</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer class="u-sidebar__footer u-sidebar__footer--panel py-4 px-5">
          <!-- List -->
          <ul class="list-inline font-size-14 mb-0">
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pr-2" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link px-2" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pl-2" href="../pages/help.html">
                <i class="fa fa-info-circle"></i>
              </a>
            </li>
          </ul>
          <!-- End List -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Panel Sidebar Navigation -->

  <!-- Signup Modal Window -->
  <div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
    <!-- Modal Close Button -->
    <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
      <span class="fas fa-times"></span>
    </button>
    <!-- End Modal Close Button -->

    <!-- Content -->
    <div class="p-5">
      <form class="js-validate">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign in</h2>
            <p>Signin to manage your account.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" required
                     placeholder="Password"
                     aria-label="Password"
                     data-msg="Your password is invalid. Please try again."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="row mb-3">
            <div class="col-6">
              <!-- Checkbox -->
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                <label class="custom-control-label" for="rememberMeCheckbox">
                  Remember Me
                </label>
              </div>
              <!-- End Checkbox -->
            </div>

            <div class="col-6 text-right">
              <a class="js-animation-link float-right" href="javascript:;"
                 data-target="#forgotPassword"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Forgot Password?</a>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signin</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Do not have an account?
              <a class="js-animation-link" href="javascript:;"
                 data-target="#signup"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Signup
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signin Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook text-nowrap">
                <span class="fab fa-facebook-f mr-2"></span>
                Signin with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <span class="fab fa-twitter mr-2"></span>
                Signin with Twitter
              </button>
            </div>
          </div>
          <!-- End Signin Social Buttons -->
        </div>
        <!-- End Signin -->

        <!-- Signup -->
        <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign up</h2>
            <p>Fill out the form to get started.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" id="password" required
                     placeholder="Password"
                     aria-label="Password"
                     data-msg="Your password is invalid. Please try again."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-key form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="confirmPassword" required
                     placeholder="Confirm Password"
                     aria-label="Confirm Password"
                     data-msg="Password does not match the confirm password."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signup</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;"
                 data-target="#signin"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signup Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook text-nowrap">
                <span class="fab fa-facebook-f mr-2"></span>
                Signup with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <span class="fab fa-twitter mr-2"></span>
                Signup with Twitter
              </button>
            </div>
          </div>
          <!-- End Signup Social Buttons -->
        </div>
        <!-- End Signup -->

        <!-- Forgot Password -->
        <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Recover account</h2>
            <p>Enter your email address and an email with instructions will be sent to you.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Recover Account</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;"
                 data-target="#signin"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>
        </div>
        <!-- End Forgot Password -->
      </form>
    </div>
    <!-- End Content -->
  </div>
  <!-- End Signup Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="javascript:;"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/vendor/custombox/dist/custombox.min.js"></script>
  <script src="../../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Space -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/helpers/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.modal-window.js"></script>
  <script src="../../assets/js/components/hs.show-animation.js"></script>
  <script src="../../assets/js/components/hs.slick-carousel.js"></script>
  <script src="../../assets/js/components/hs.fancybox.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>