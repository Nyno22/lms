 @extends('layouts.users')

@section('content')

 <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-teacher">
    <!--Teacher Profile-->
    <section class="section section-teacher">
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="{{ asset('userassets/images/shapes/2.svg') }}" alt="Image Description" />
        </figure>
        <div class="display-spacing display-spacing-plus">
            <div class="container">
                <div class="row mb--30">
                    <aside class="col-lg-4 col-xl-4 order-lg-2">
                        <div class="sticky-sidebar">
                            <div class="el-panel el-panel-course-widget">
                                <div class="el-panel-body">
                                    <div class="teacher">
                                        <div class="avatar">
                                            <ul class="icons">
                                                <li>
                                                    <div class="icon-lang">
                                                        <img src="{{ asset('userassets/images/flags/uk.svg') }}" alt="Lang" />
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="page-teacher.html" target="_blank">
                                                <img src="{{ asset('userassets/images/people/2.jpg') }}" alt="teacher avatar">
                                            </a>
                                        </div>
                                        <p class="title">
                                            <a href="page-teacher.html" target="_blank">
                                                <span>{{$deteacher->name}}</span>
                                            </a>
                                        </p>
                                        <p class="excerpt">{{$deteacher->email}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-8 col-xl-8 order-lg-1">
                        <div class="el-panel el-panel-comments">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Courses</h3>
                                </div>
                                <div class="el-comments">
                                    <div class="comments-list">
                                        <div class="comments-body">
                                            @foreach($decourses as $decourse)
                                                <ul class="comments-ul row row-xs">
                                                    <li class="col-xl-6">
                                                        <a href="{{ route('steachercourse',$decourse->id) }}">
                                                            <div class="comment el-card">
                                                                <div class="comment-head">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset($decourse->language->flag) }}" alt="Relevant textual alternative to the person-1 image">
                                                                    </div>
                                                                    <h5 class="author">{{$decourse->language->language}}</h5>
                                                                    <p>{{$decourse->name}}</p>
                                                                    <span class="date">₦{{$decourse->price}}</span>
                                                                </div>
                                                                <div class="comment-body">
                                                                    <p>{{$decourse->description}}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                            <ul class="el-pagination">
                                                <li class="active"><span>1</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Teachers-->
<section class="section section-teachers section-teachers-slider">
    <div class="display-spacing">
        <div class="container">
            <header class="el-heading center">
                <h2>Other professional teachers</h2>
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
            <div class="el-read-more div-center text-center">
                <a href="page-teachers.html" class="el-popover">
                    <p class="button button-circle-lg button-circle button-primary">
                        <span class="fa fa-refresh"></span>
                    </p>
                    <p class="el-popover-title">
                        <span>More Teachers?</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
<!--/-->
</div>

@endsection