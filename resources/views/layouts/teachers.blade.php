<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <title>Learnguage</title>
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base >
    <link rel="shortcut icon" href="http://../favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600,700,900&amp;display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('userassets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('userassets/css/styles.css') }}" />
</head>

<body>
    <!-- Loading -->
    <div id="preloader" class="preloader">
        <div class="preloader-inner">
            <div class="preloader-6">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- / -->
    <!--Overlay-->
    <span class="mega-menu-overlay"></span>
    <!--/-->
    <!--Header-->
    <header class="app-header app-header-1 boxed">
        <div class="container">
            <div class="header-wrap">
                <button class="button button-menu button-open-sidenav">
                    <span></span>
                </button>
                <div class="header-menu">
            </div>

                <div class="header-logo">
                    <a href="http://../index.html" class="primary-logo">
                        <span class="text-1">Learnguage</span>
                        <span class="text-2"></span>
                    </a>
                </div>
                <div class="header-links">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" class="button button-md button-line-primary"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--Sidenav-->
<div class="app-sidenav app-sidenav-1">
    <div class="sidenav-menu">
        <div class="sidenav-head">
            <img src="{{ asset('userassets/images/sidenav.jpg') }}" alt="sidenav banner">
            <button class="button button-close-sidenav"></button>
        </div>
        <div class="sidenav-body">
            <div class="sidenav-body-inner">
                <div class="sidenav-links">
                    <a href="{{ route('login') }}" class="button button-md button-block button-line-primary">
                        <span class="text">Sign In</span>
                    </a>
                    <a href="{{ route('register') }}" class="button button-md button-block button-primary">
                        <span class="text">Sign Up</span>
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="http://../home.html">
                            <span class="text">Home</span>
                            <span class="icon fa fa-angle-right"></span>
                        </a>
                    </li>
                    <li class="has-menu">
                        <a href="#">
                            <span class="text">All Pages</span>
                            <span class="icon fa fa-angle-right"></span>
                        </a>
                        <div class="mega-menu">
                            <p class="title">Quick Access</p>
                            <ul class="sidenav-menu-ul">
                                <li>
                                    <a href="http://../page-blog.html">
                                        <span class="text">Blog/News</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-single-post.html">
                                        <span class="text">Single Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-cooperation.html">
                                        <span class="text">Cooperation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-start.html">
                                        <span class="text">Getting Started!</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="title">Quick Access</p>
                            <ul class="sidenav-menu-ul">
                                <li>
                                    <a href="http://../page-teacher.html">
                                        <span class="text">Teacher</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-teachers.html">
                                        <span class="text">List of Teachers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-course.html">
                                        <span class="text">Course Details</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-courses.html">
                                        <span class="text">List of Courses</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="title">Dashboard</p>
                            <ul class="sidenav-menu-ul">
                                <li>
                                    <a href="http://../teacher/dashboard.html">
                                        <span class="text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../teacher/dashboard-profile.html">
                                        <span class="text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../teacher/dashboard-skills.html">
                                        <span class="text">Edit Skills</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../teacher/dashboard-classrooms.html">
                                        <span class="text">Classrooms</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="title">Communication</p>
                            <ul class="sidenav-menu-ul">
                                <li>
                                    <a href="http://../page-about.html">
                                        <span class="text">About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-contact.html">
                                        <span class="text">Contact Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-faq.html">
                                        <span class="text">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-policy.html">
                                        <span class="text">Policy</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="title">Other Pages</p>
                            <ul class="sidenav-menu-ul">
                                <li>
                                    <a href="http://../page-login.html">
                                        <span class="text">Sign-In</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-register.html">
                                        <span class="text">Sign-Up</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://../page-departements.html">
                                        <span class="text">Departements</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-menu">
                        <a href="#">
                            <span class="text">Languages</span>
                            <span class="icon fa fa-angle-right"></span>
                        </a>
                        <div class="mega-menu">
                            <ul>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/uk.svg') }}" alt="alt" />
                                            <h3>English</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/germany.svg') }}" alt="alt" />
                                            <h3>German</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/france.svg') }}" alt="alt" />
                                            <h3>French</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/italy.svg') }}" alt="alt" />
                                            <h3>Italian</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/china.svg') }}" alt="alt" />
                                            <h3>Chinese</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/japan.svg') }}" alt="alt" />
                                            <h3>Japanese</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/south-korea.svg') }}" alt="alt" />
                                            <h3>Korean</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/russia.svg') }}" alt="alt" />
                                            <h3>Russian</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/arabic.svg') }}" alt="alt" />
                                            <h3>Arabic</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/turkey.svg') }}" alt="alt" />
                                            <h3>Turkish</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/iran.svg') }}" alt="alt" />
                                            <h3>Persian</h3>
                                        </a>
                                    </div>
                                </li>
                                <li class="el-flag">
                                    <div class="inner">
                                        <a href="http://../page-departements.html">
                                            <img src="{{ asset('userassets/images/flags/spain.svg') }}" alt="alt" />
                                            <h3>Spanish</h3>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://../page-courses.html">
                            <span class="text">Courses</span>
                            <span class="icon fa fa-angle-right"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <span class="sidenav-close"></span>
</div>
<!--/-->

    <!--Wrapper-->
    <div class="app-wrapper">
        <div class="page page-dashboard page-dashboard-student">
            <!--Section-->
            <section class="section section-dashboard section-dashboard-student">
                <div class="container">
                    <div class="display-spacing display-spacing-plus">
                        @if(session()->get('success'))
                            <div class="el-alert alert-success">
                                <div class="container">
                                    <div class="alert-flex d-flex align-items-center">
                                        <div class="alert-content">
                                            {{ session()->get('success') }}  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <aside class="sidebar">
                                    <div class="el-panel el-panel-teacher-widget">
                                        <div class="el-panel-body">
                                            <div class="el-panel-title">
                                                <h2>Settings</h2>
                                            </div>
                                            <ul class="el-list-icon">
                                                <li>
                                                    <a href="{{ route('home')}} ">
                                                        <i class="fa fa-cog"></i>
                                                        <span class="text">Dashboard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tcourses') }}">
                                                        <i class="fa fas fa-book"></i>
                                                        <span class="text">Courses</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tstudents') }}">
                                                        <i class="fa fas fa-user"></i>
                                                        <span class="text">Students</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tprofile')}} ">
                                                        <i class="fa fa-cog"></i>
                                                        <span class="text">Your Profile</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
    @yield('content')
    </div>
    </div>
    <script src="{{ asset('userassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('userassets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('userassets/js/main-scripts.js') }}"></script>
    <script src="{{ asset('userassets/js/dashboard.js') }}"></script>
</body>

</html>