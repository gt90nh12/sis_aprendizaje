@extends('layouts.base')
@section('content')
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--bordered u-header--bg-transparent u-header--white-nav-links u-header--sticky-top-lg">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="index.html" aria-label="Space">
              <img class="u-header__navbar-brand-default" src="{{ asset('assets/svg/logos/logo-white.svg') }}" alt="Logo">
              <img class="u-header__navbar-brand-on-scroll" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo">
              <img class="u-header__navbar-brand-mobile" src=" {{ asset('assets/svg/logos/logo-short.svg') }} " alt="Logo">
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="javascript:;"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="homeSubMenu">
                  Inicio
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Home - Submenu -->
                <ul id="homeSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;"
                    aria-labelledby="homeMegaMenu">
                  <!-- Classic -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeClassic" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuHomeClassic">
                      Classic
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeClassic" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkHomeClassic">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="index.html">Default</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="classic-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="classic-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="classic-start-up.html">Start-Up</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Classic -->

                  <!-- Corporate -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeCorporate" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuHomeCorporate">
                      Corporate
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeCorporate" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkHomeCorporate">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="corporate-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="corporate-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="corporate-start-up.html">Start-Up</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Corporate -->

                  <!-- Creative -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeCreative" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuHomeCreative">
                      Creative
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeCreative" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkHomeCreative">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="creative-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="creative-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="creative-start-up.html">Start-Up</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Creative -->

                  <!-- Modern -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeModern" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuHomeModern">
                      Modern
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeModern" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkHomeModern">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="modern-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="modern-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="modern-start-up.html">Start-Up</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="modern-digital.html">Digital</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Modern -->

                  <!-- App -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeApp" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuHomeApp">
                      App
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeApp" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkHomeApp">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="app-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="app-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="app-start-up.html">Start-Up</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="app-digital.html">Digital</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="app-modern.html">Modern</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="app-minimal.html">Minimal</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- End App -->

                  <li class="dropdown-divider"></li>

                  <!-- Demos Estudiantes -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeDemos" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuHomeDemos">
                      Estudiantes
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeDemos" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkHomeDemos">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="real-estate.html">Real Estate <span class="badge badge-primary">New</span></a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="hotel.html">Hotel <span class="badge badge-primary">New</span></a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="restaurant.html">Restaurant</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="event.html">Event</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="shipping.html">Shipping</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- End Demos -->
                </ul>
                <!-- End Home - Submenu -->
              </li>
              <!-- End Home -->

             

           

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="javascript:;"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="blogSubMenu">
                  Profesores
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Blog - Submenu -->
                <ul id="blogSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;"
                    aria-labelledby="blogMegaMenu">
                  <!-- Classic -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogClassic" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuBlogClassic">
                      Classic
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogClassic" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkBlogClassic">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Classic -->

                  <!-- Grid -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogGrid" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuBlogGrid">
                      Grid
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogGrid" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkBlogGrid">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Grid -->

                  <!-- List -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogList" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuBlogList">
                      List
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogList" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkBlogList">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- List -->

                  <!-- Masonry -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogGridMinimal" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuBlogGridMinimal">
                      Masonry
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogGridMinimal" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkBlogGridMinimal">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Masonry -->

                  <!-- Single Article -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogGridMasonry" class="nav-link u-header__sub-menu-nav-link" href="javascript:;"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="navSubmenuBlogGridMasonry">
                      Single Article
                      <span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogGridMasonry" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px;"
                        aria-labelledby="navLinkBlogGridMasonry">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-article-classic.html">Classic</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-article-simple.html">Simple</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Single Article -->
                </ul>
                <!-- End Submenu -->
              </li>
              <!-- End Blog -->

              <!-- Shop tienda -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="javascript:;"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="shopSubMenu">
                  Tienda
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Shop - Submenu -->
                <ul id="shopSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;"
                    aria-labelledby="shopMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="../shop/classic.html">Classic</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="../shop/single-product.html">Single Product</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="../shop/checkout.html">Checkout</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="../shop/empty-cart.html">Empty Cart</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="../shop/gift-card.html">Gift Card</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="../shop/order-completed.html">Order Completed</a>
                  </li>
                </ul>
              </li>
              <!-- End Shop tienda-->

              <!-- Docs -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="fadeInUp"
                  data-animation-out="fadeOut">
                <a id="docsMegaMenu" class="nav-link u-header__nav-link" href="javascript:;"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-labelledby="docsSubMenu">
                  Documentos
                  <span class="fa fa-angle-down u-header__nav-link-icon"></span>
                </a>

                <!-- Docs - Submenu -->
                <ul id="docsSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 260px;"
                    aria-labelledby="docsMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link d-block u-header__sub-menu-nav-link" href="../../documentation/index.html">
                      <div class="media align-items-center">
                        <img class="max-width-5 mr-3" src="{{ asset('assets/svg/components/news-dark-icon.svg') }}" alt="Image Description">
                        <div class="media-body">
                          <span class="d-block text-dark font-weight-medium">Documentation</span>
                          <small class="d-block">Development guides</small>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link d-block u-header__sub-menu-nav-link" href="../../starter/index.html">
                      <div class="media align-items-center">
                        <img class="max-width-5 mr-3" src="{{ asset('assets/svg/components/portfolio-dark-icon.svg') }}" alt="Image Description">
                        <div class="media-body">
                          <span class="d-block text-dark font-weight-medium">Get Started</span>
                          <small class="d-block">Components and snippets</small>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Docs -->

              <!-- Button -->
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="#signupModal" role="button"
                   data-modal-target="#signupModal"
                   data-overlay-color="#151b26">
                  <span class="fa fa-user-circle mr-1"></span>
                  Registrarse
                </a>
              </li>
              <!-- End Button -->

              <!-- Search -->
              <li class="nav-item u-header__navbar-icon u-header__navbar-v-divider">
                <a class="btn btn-xs btn-icon btn-text-dark u-header__search-toggle" href="javascript:;" role="button"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-controls="search"
                   data-unfold-target="#search"
                   data-unfold-hide-on-scroll="false"
                   data-unfold-type="css-animation"
                   data-unfold-duration="300"
                   data-unfold-delay="300"
                   data-unfold-animation-in="slideInUp">
                  <span class="fa fa-search btn-icon__inner"></span>
                </a>

                <!-- Input -->
                <form id="search" class="js-focus-state input-group form u-header__search u-unfold--css-animation u-unfold--hidden">
                  <input class="form-control form__input" type="search" placeholder="Search Space">
                  <div class="input-group-addon u-header__search-addon p-0">
                    <button class="btn btn-primary u-header__search-addon-btn" type="button">
                      <span class="fa fa-search"></span>
                    </button>
                  </div>
                </form>
                <!-- End Input -->
              </li>
              <!-- End Search -->
            </ul>
          </div>
          <!-- End Navigation -->

          <ul class="navbar-nav flex-row u-header__secondary-nav">
            <!-- Shopping Cart -->
            <li class="nav-item u-header__navbar-icon-wrapper u-header__navbar-icon">
              <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-dark" href="javascript:;" role="button"
                      aria-controls="shoppingCartDropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                      data-unfold-event="click"
                      data-unfold-target="#shoppingCartDropdown"
                      data-unfold-type="css-animation"
                      data-unfold-duration="300"
                      data-unfold-delay="300"
                      data-unfold-hide-on-scroll="true"
                      data-unfold-animation-in="slideInUp"
                      data-unfold-animation-out="fadeOut">
                <span class="fa fa-shopping-cart btn-icon__inner"></span>
              </a>

              <div id="shoppingCartDropdown" class="u-unfold u-unfold--cart text-center border rounded-0 right-0 p-7" aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px;">
                <span class="u-icon u-icon--primary u-icon--md rounded-circle mb-3">
                  <span class="fa fa-shopping-basket u-icon__inner"></span>
                </span>
                <span class="d-block">Your Cart is Empty</span>
              </div>
            </li>
            <!-- End Shopping Cart -->

            <!-- Account Signin -->
            <li class="nav-item u-header__navbar-icon">
              <!-- Account Sidebar Toggle Button -->
              <a id="sidebarNavToggler" class="btn btn-xs btn-icon btn-text-dark" href="javascript:;" role="button"
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
                <span class="fa fa-bars btn-icon__inner font-size-13"></span>
              </a>
              <!-- End Account Sidebar Toggle Button -->
            </li>
            <!-- End Account Signin -->
          </ul>
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
@endsection