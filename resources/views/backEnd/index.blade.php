<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-sivali.png') }}">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/modules/fontawesome/css/all.min.css')}}">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="{{asset('https://www.googletagmanager.com/gtag/js?id=UA-94034622-3')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- /END GA -->
    <style>
        .sideactive{
            background-color: rgb(238, 238, 238);
            color: white;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Histories
                            </div>
                            <div class="search-item">
                                <a href="#">How to hack NASA using CSS</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">Kodinger.com</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">#Stisla</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-header">
                                Result
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="{{asset('../theme/dist/assets/img/products/product-3-50.png')}}"
                                        alt="product">
                                    oPhone S9 Limited Edition
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png"
                                        alt="product">
                                    Drone X2 New Gen-7
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png"
                                        alt="product">
                                    Headphone Blitz
                                </a>
                            </div>
                            <div class="search-header">
                                Projects
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-danger text-white mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    Stisla Admin Template
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-primary text-white mr-3">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    Create a new Homepage Design
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('../theme/dist/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{route('logoutadmin')}}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand py-3" style="height: max-content;">
                        <a href="index.html"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">SF</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'dashboard' ? 'sideactive' : null }}" href="{{ url('dashboard' )}}"><i class="fas fa-fire"></i>
                            <span>Dashboard</span></a>
                        </li> 
                        <li class="menu-header">Menu</li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'kategoriBarang' ? 'sideactive' : null }}" href="{{ url('kategoriBarang' )}}"><i class="fas fa-th"></i>
                            <span>Kategori Barang</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'barang' ? 'sideactive' : null }}" href="{{ url('barang' )}}"><i class="far fa-file-alt"></i>
                            <span>List Barang</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'admartikel' ? 'sideactive' : null }}" href="{{ url('admartikel' )}}"><i class="far fa-file-alt"></i>
                            <span>Artikel</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'banner' ? 'sideactive' : null }}" href="{{ url('banner' )}}"><i class="far fa-file-alt"></i>
                            <span>Banner</span></a>
                        </li>
                        <!-- <li>
                            <a class="nav-link {{ Request::segment(1) === 'manage_user' ? 'sideactive' : null }}" href="{{ url('manage_user' )}}"><i class="far fa-user"></i>
                            <span>Manage User</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'list_chart' ? 'sideactive' : null }}" href="{{ url('list_chart' )}}"><i class="far fa-file-alt"></i>
                            <span>List Cart</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'list_fav' ? 'sideactive' : null }}" href="{{ url('list_fav' )}}"><i class="far fa-file-alt"></i>
                            <span>List Favorit</span></a>
                        </li> -->
                        {{-- <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Layout</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                            </ul>
                        </li>
                        <li class=active><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                                    Page</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                                <span>Bootstrap</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                                <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                                <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                                <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                                <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                                <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                                <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                                <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                                <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                                <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                                <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                                <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                                <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                                <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                                <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                                <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                                <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                                <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                                <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                                <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Stisla</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                                <span>Components</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="components-article.html">Article</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
                                <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty
                                        State</a></li>
                                <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
                                <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a>
                                </li>
                                <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
                                <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                                <li><a class="nav-link" href="components-table.html">Table</a></li>
                                <li><a class="nav-link" href="components-user.html">User</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                <span>Forms</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google
                                    Maps</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                                <li><a href="gmaps-marker.html">Marker</a></li>
                                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                                <li><a href="gmaps-route.html">Route</a></li>
                                <li><a href="gmaps-simple.html">Simple</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                                <span>Modules</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                                <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                                <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                                <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                                <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                                <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                                <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                                <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                                <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                                <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                                <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                                <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Pages</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                                <li><a href="auth-login.html">Login</a></li>
                                <li><a href="auth-register.html">Register</a></li>
                                <li><a href="auth-reset-password.html">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i>
                                <span>Errors</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="errors-503.html">503</a></li>
                                <li><a class="nav-link" href="errors-403.html">403</a></li>
                                <li><a class="nav-link" href="errors-404.html">404</a></li>
                                <li><a class="nav-link" href="errors-500.html">500</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i>
                                <span>Features</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                                <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                                <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                                <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                                <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                                <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                                <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                                <span>Utilities</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="utilities-contact.html">Contact</a></li>
                                <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                                <li><a href="utilities-subscribe.html">Subscribe</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i>
                                <span>Credits</span></a></li> --}}
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        {{-- <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Documentation
                        </a> --}}
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    {{-- <div class="section-header"> --}}
                        @yield('mainContent')
                    {{-- </div> --}}

                    {{-- <div class="section-body">
                    </div> --}}
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright Sivali <div class="bullet"></div> Design By <a href="/">Sivali</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('../theme/dist/assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/popper.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js') }}" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js') }}" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('../theme/dist/assets/js/scripts.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/js/custom.js')}}"></script>
</body>

</html>
