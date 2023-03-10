@extends('layouts.users')

{{--@section('title', 'Create User')--}}

@section('content')

<!--Wrapper-->
<div class="app-wrapper">
    <div class="page-home">
    
        <!--Hero-->
        <section class="section section-hero section-hero-5 bg-gradient-180">
            <figure class="section-shape shape-1">
                <img src="{{ asset('userassets/images/shapes/1.svg') }}" alt="Image Description" />
            </figure>
            <div class="display-center">
                <div class="container">
                    <div class="hero-content">
                        <h1>Learn a new language<br /> with an online tutor</h1>
                        <p class="text-light">Hold an online language class with your favorite teacher!<br />Find your teacher, choose the time and start learning the language.</p>
                    </div>
                </div>
            </div>
            <div class="el-floating-shapes">
                <span class="shape shape-1">
                    <img src="{{ asset('userassets/images/shapes/1.png') }}" alt="--Alternative--">
                </span>
                <span class="shape shape-2">
                    <img src="{{ asset('userassets/images/shapes/2.png') }}" alt="--Alternative--">
                </span>
                <span class="shape shape-3">
                    <img src="{{ asset('userassets/images/shapes/3.png') }}" alt="--Alternative--">
                </span>
                <span class="shape shape-4">
                    <img src="{{ asset('userassets/images/shapes/4.png') }}" alt="--Alternative--">
                </span>
            </div>
        </section>
        <!--/-->

        <!--Features-->
        <section class="section section-features section-features-1">
            <div class="container">
                <div class="row row-xs">
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','English') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/uk.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">English</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Spanish') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/spain.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Spanish</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','German') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/germany.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">German</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Italian') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/italy.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Italian</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','French') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/france.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">French</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Portuguese') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/portugal.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Portuguese</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Russian') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/russia.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Russian</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Mandarin') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/china.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Mandarin</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Japanese') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/japan.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Japanese</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Persian') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/iran.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Persian</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Hindi') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/india.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Hindi</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                    <!--Col-->
                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="{{ route('courses','Turkish') }}">
                            <div class="item">
                                <div class="inner">
                                    <img src="{{ asset('userassets/images/flags/turkey.svg') }}" alt="alt" />
                                    <h3>
                                        <span class="text">Turkish</span>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/-->
                </div>
            </div>
        </section>
        <!--/-->
        
        <!--Teachers-->
        <section class="section section-teachers section-teachers-slider">
            <div class="display-spacing">
                <div class="container">
                    <header class="el-heading center">
                        <h2>Our professional teachers</h2>
                        <p>We provide the best service that comes with the best results.</p>
                        <div class="divider divider-line"></div>
                    </header>
                    <div class="el-slider">
                        <div class="swiper-container swiper-teachers">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card el-card">
                                        <a href="page-teacher.html">
                                            <div class="inner">
                                                <div class="avatar">
                                                    <img src="{{ asset('userassets/images/people/1.jpg') }}" alt="alt" />
                                                </div>
                                                <div class="details">
                                                    <h3>Miranda Fox</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                                </div>
                                                <div class="other">
                                                    <p class="price">
                                                        <span>Price</span>
                                                        <span class="text-color">$25.00</span>
                                                    </p>
                                                </div>
                                                <ul class="icons icons-left">
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/flags/russia.svg') }}" alt="Lang" />
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/icons/graduation.svg') }}" alt="Is experienced" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card el-card">
                                        <a href="page-teacher.html">
                                            <div class="inner">
                                                <div class="avatar">
                                                    <img src="{{ asset('userassets/images/people/2.jpg') }}" alt="alt" />
                                                </div>
                                                <div class="details">
                                                    <h3>James Maxwell</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                                </div>
                                                <div class="other">
                                                    <p class="price">
                                                        <span>Price</span>
                                                        <span class="text-color">$25.00</span>
                                                    </p>
                                                </div>
                                                <ul class="icons icons-left">
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/flags/germany.svg') }}" alt="Lang" />
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/icons/language-exhange.svg') }}" alt="language exhange" />
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="icons icons-right">
                                                    <li>
                                                        <p class="icon-status bg-danger">
                                                            <span>Native</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card el-card">
                                        <a href="page-teacher.html">
                                            <div class="inner">
                                                <div class="avatar">
                                                    <img src="{{ asset('userassets/images/people/3.jpg') }}" alt="alt" />
                                                </div>
                                                <div class="details">
                                                    <h3>John Woo</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                                </div>
                                                <div class="other">
                                                    <p class="price">
                                                        <span>Price</span>
                                                        <span class="text-color">$25.00</span>
                                                    </p>
                                                </div>
                                                <ul class="icons icons-left">
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/flags/italy.svg') }}" alt="Lang" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card el-card">
                                        <a href="page-teacher.html">
                                            <div class="inner">
                                                <div class="avatar">
                                                    <img src="{{ asset('userassets/images/people/4.jpg') }}" alt="alt" />
                                                </div>
                                                <div class="details">
                                                    <h3>Emily Thompson</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                                </div>
                                                <div class="other">
                                                    <p class="price">
                                                        <span>Price</span>
                                                        <span class="text-color">$25.00</span>
                                                    </p>
                                                </div>
                                                <ul class="icons icons-left">
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/flags/uk.svg') }}" alt="Lang" />
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="icons icons-right">
                                                    <li>
                                                        <p class="icon-status bg-secondary">
                                                            <span>Starter</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card el-card">
                                        <a href="page-teacher.html">
                                            <div class="inner">
                                                <div class="avatar">
                                                    <img src="{{ asset('userassets/images/people/5.jpg') }}" alt="alt" />
                                                </div>
                                                <div class="details">
                                                    <h3>Robert Fox</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                                </div>
                                                <div class="other">
                                                    <p class="price">
                                                        <span>Price</span>
                                                        <span class="text-color">$25.00</span>
                                                    </p>
                                                </div>
                                                <ul class="icons icons-left">
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/flags/india.svg') }}" alt="Lang" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card el-card">
                                        <a href="page-teacher.html">
                                            <div class="inner">
                                                <div class="avatar">
                                                    <img src="{{ asset('userassets/images/people/6.jpg') }}" alt="alt" />
                                                </div>
                                                <div class="details">
                                                    <h3>Ava Taylor</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                                </div>
                                                <div class="other">
                                                    <p class="price">
                                                        <span>Price</span>
                                                        <span class="text-color new-price">$20.00</span>
                                                        <span class="text-color old-price">$25.00</span>
                                                    </p>
                                                </div>
                                                <ul class="icons icons-left">
                                                    <li>
                                                        <div class="icon-lang">
                                                            <img src="{{ asset('userassets/images/flags/france.svg') }}" alt="Lang" />
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon-off">
                                                            <span>%20</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="icons icons-right">
                                                    <li>
                                                        <p class="icon-status bg-danger">
                                                            <span>Native</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/-->

        <!--Call-To-Action-->
        <div class="section el-cta el-cta-1 overlay-color bg-animation-2">
            <div class="display-center">
                <div class="container">
                    <div class="heading">
                        <h2>Learn a new language<br/>with an online tutor</h2>
                        <p>Let's work together. We can help to develop your business. <br />We provide the best service that comes with the best results.</p>
                        <a href="page-start.html" class="button button-md button-light">
                            <span class="wave-hover"></span>
                            <span class="text text-primary">Let's get started.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/-->
        
        <section class="section section-services">
            <figure class="section-shape shape-2">
                <img class="img-fluid" src="{{ asset('userassets/images/shapes/2.svg') }}" alt="Image Description" />
            </figure>
            <figure class="section-shape shape-3">
                <img src="{{ asset('userassets/images/shapes/3.svg') }}" alt="Image Description" />
            </figure>
            <div class="display-spacing">
                <div class="container">
                    <header class="el-heading center">
                        <h2>Join our global community</h2>
                        <p>We provide the best service that comes with the best results.</p>
                        <div class="divider divider-line"></div>
                    </header>
                    <div class="row row-sm row-lg-5 row-xl-5 mb--30" style="margin: auto;">
                        <div class="col-6 col-md-4 col-lg-3">
                            <h3>America</h3>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/us.svg') }}" /></div>
                                <span class="name">?????????? ??????????</span>
                                <span class="name name-en">United States</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/br.svg') }}" /></div>
                                <span class="name">??????????</span>
                                <span class="name name-en">Brasil</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/ca.svg') }}" /></div>
                                <span class="name">????????????</span>
                                <span class="name name-en">Canada</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/mx.svg') }}" /></div>
                                <span class="name">??????????</span>
                                <span class="name name-en">Mexico</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/pr.svg') }}" /></div>
                                <span class="name">??????????????????</span>
                                <span class="name name-en">Puerto Rico</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <h3>Asia</h3>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/hk.svg') }}" /></div>
                                <span class="name">?????? ??????</span>
                                <span class="name name-en">Hong Kong</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/in.svg') }}" /></div>
                                <span class="name">??????</span>
                                <span class="name name-en">India</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/id.svg') }}" /></div>
                                <span class="name">??????????????</span>
                                <span class="name name-en">Indonezia</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/ma.svg') }}" /></div>
                                <span class="name">??????????</span>
                                <span class="name name-en">Malaysia</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/ph.svg') }}" /></div>
                                <span class="name">??????????????</span>
                                <span class="name name-en">Philippines</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/sg.svg') }}" /></div>
                                <span class="name">??????????????</span>
                                <span class="name name-en">Singapore</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/ir.svg') }}" /></div>
                                <span class="name">??????????</span>
                                <span class="name name-en">Iran</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <h3>Europe</h3>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/pt.svg') }}" /></div>
                                <span class="name">????????????</span>
                                <span class="name name-en">Portugal</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/es.svg') }}" /></div>
                                <span class="name">??????????????</span>
                                <span class="name name-en">Espa??a</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/ch.svg') }}" /></div>
                                <span class="name">????????</span>
                                <span class="name name-en">Suisse</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/gb.svg') }}" /></div>
                                <span class="name">????????????</span>
                                <span class="name name-en">United Kingdom</span>
                            </div>
                        
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/fr.svg') }}" /></div>
                                <span class="name">????????????</span>
                                <span class="name name-en">France</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/de.svg') }}" /></div>
                                <span class="name">??????????????</span>
                                <span class="name name-en">Deutschland</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <h3><span class="opacity-0">Africa</span></h3>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/no.svg') }}" /></div>
                                <span class="name">????????</span>
                                <span class="name name-en">Norge</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/at.svg') }}" /></div>
                                <span class="name">??????????</span>
                                <span class="name name-en">??sterreich</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/be.svg') }}" /></div>
                                <span class="name">??????????</span>
                                <span class="name name-en">Belgi??</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/dk.svg') }}" /></div>
                                <span class="name">??????????????</span>
                                <span class="name name-en">Danmark</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/fi.svg') }}" /></div>
                                <span class="name">????????????</span>
                                <span class="name name-en">Suomi</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <h3><span class="opacity-0">Australia</span></h3>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/au.svg') }}" /></div>
                                <span class="name">????????????????</span>
                                <span class="name name-en">Australia</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/pr.svg') }}" /></div>
                                <span class="name">????????????????</span>
                                <span class="name name-en">Australia</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/au.svg') }}" /></div>
                                <span class="name">????????????????</span>
                                <span class="name name-en">Australia</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <div class="image"><img alt="Image placeholder" src="{{ asset('userassets/images/flags/pr.svg') }}" /></div>
                                <span class="name">????????????????</span>
                                <span class="name name-en">Australia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonial-->
        <section class="section section-testimonial bg-primary">
            <div class="display-spacing">
                <header class="el-heading center light">
                    <h2>What clients say about us?</h2>
                    <p>We provide the best service that comes with the best results.</p>
                    <div class="divider divider-line"></div>
                </header>
                <div class="container">
                    <div class="el-slider el-slider-dots">
                        <div class="swiper-container swiper-testimonial">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="content">
                                            <p>You've saved our business! I can't say enough about you. We were treated like royalty. We can't understand how we've been living without you.</p>
                                        </div>
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{ asset('userassets/images/people/1.jpg') }}" alt="alt" />
                                            </div>
                                            <h4>Miranda Fox</h4>
                                            <h5>Our Customer</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="content">
                                            <p>Dude, your stuff is the bomb! I love your system. It's all good. I was treated like royalty. Keep up the excellent work. I will definitely be ordering again!</p>
                                        </div>
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{ asset('userassets/images/people/2.jpg') }}" alt="alt" />
                                            </div>
                                            <h4>James Maxwell</h4>
                                            <h5>Our Customer</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="content">
                                            <p>You've saved our business! I can't say enough about you. We were treated like royalty. We can't understand how we've been living without you.</p>
                                        </div>
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{ asset('userassets/images/people/3.jpg') }}" alt="alt" />
                                            </div>
                                            <h4>John Whoo</h4>
                                            <h5>Our Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/-->
    </div>



@endsection