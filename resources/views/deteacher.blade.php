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
                            <div class="el-panel el-panel-teacher-widget">
                                <div class="el-panel-body">
                                    <div class="teacher">
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="{{ asset('userassets/images/flags/uk.svg') }}" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/1.jpg') }}" alt="teacher avatar">
                                        </div>
                                        <h1 class="title">{{$deteacher->name}}</h1>
                                    </div>
                                        <a href="{{ route('teachercourse',$deteacher->id) }}">
                                            <button class="button button-md button-block button-primary">
                                                <span class="text">Check Courses</span>
                                            </button>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-8 col-xl-8 order-lg-1">
                        <div class="el-panel el-panel-teacher-info">
                            <div class="el-panel-body">
                                <div class="teacher-summary">
                                    <div class="el-panel-title">
                                        <h3>About Me</h3>
                                    </div>
                                    <p>{{$deteacher->about}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Teacher Stats</h3>
                                </div>
                                <div class="teacher-stats teacher-stats-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="{{ asset('userassets/images/icons/stats-2.svg') }}" alt="stats icon">
                                                </div>
                                                <h3 class="title">Joined Eduline</h3>
                                                <h4 class="subtitle">4 years ago</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="{{ asset('userassets/images/icons/stats-4.svg') }}" alt="stats icon">
                                                </div>
                                                <h3 class="title">Total Lessons</h3>
                                                <h4 class="subtitle">210</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="{{ asset('userassets/images/icons/stats-6.svg') }}" alt="stats icon">
                                                </div>
                                                <h3 class="title">Average Rating</h3>
                                                <h4 class="subtitle">5</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-teacher-posts">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Latests Posts</h3>
                                </div>
                                <div class="el-excerpt-posts">
                                    <ul class="row row-xs">
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">Blogging for business? Here’s everything you need to know.</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">The benefits of blogging for business and marketing.</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">5 powerful benefits of blogging for your small business.</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">How many blog posts should your business publish each month?</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-comments">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Leave a comment</h3>
                                </div>
                                <div class="el-comments">
                    <div class="comments-form">
                        <div class="comments-body">
                            <form class="form form-3">
                                <div class="form-item">
                                    <label for="input-message" class="form-label">Your Message</label>
                                    <textarea id="input-message"></textarea>
                                </div>
                                <div class="form-item">
                                    <button class="button button-md button-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-comments">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Comments</h3>
                                </div>
                                <div class="el-comments">
    <div class="comments-list">
        <div class="comments-head">
        </div>
        <div class="comments-body">
            <ul class="comments-ul row row-xs">
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/1.jpg" alt="Relevant textual alternative to the person-1 image">
                            </div>
                            <h5 class="author">Miranda Fox</h5>
                            <span class="opacity">3 lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">Score</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/2.jpg" alt="Relevant textual alternative to the person-1 image">
                            </div>
                            <h5 class="author">James Maxwell</h5>
                            <span class="opacity">3 lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">Score</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/3.jpg" alt="Relevant textual alternative to the person-3 image">
                            </div>
                            <h5 class="author">John Woo</h5>
                            <span class="opacity">3 Lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/4.jpg" alt="Relevant textual alternative to the person-4 image">
                            </div>
                            <h5 class="author">Emily Thompson</h5>
                            <span class="opacity">3 Lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">

                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/5.jpg" alt="Relevant textual alternative to the person-3 image">
                            </div>
                            <h5 class="author">Robert Fox</h5>
                            <span class="opacity">3 Lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">

                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/6.jpg" alt="Relevant textual alternative to the person-3 image">
                            </div>
                            <h5 class="author">Ava Taylor</h5>
                            <span class="opacity">3 lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="el-pagination">
                <li class="active"><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
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