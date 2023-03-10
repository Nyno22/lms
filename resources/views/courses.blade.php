@extends('layouts.users')

@section('content')

<!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-teachers">
    <!--Teachers-->
    <section class="section section-teachers section-teachers-list section-teachers-list-1">
        <figure class="section-shape shape-2">
            <img src="{{ asset('userassets/images/shapes/2.svg') }}" alt="Image Description" />
        </figure>
        <figure class="section-shape shape-3">
            <img src="{{ asset('userassets/images/shapes/3.svg') }}" alt="Image Description" />
        </figure>
        <div class="display-spacing display-spacing-double">
            <div class="container">
                <header class="el-heading center">
                    <h2>Meet Our <span class="text-primary">Professional</span> Teachers</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</h3>
                    <div class="divider divider-line"></div>
                </header>
                <div class="mb-30">
                    <div class="section-navbar">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-sortination">
                                    <p>
                                        <span class="fa fa-sort"></span>
                                        <span class="title">Sort by:</span>
                                    </p>
                                    <ul>
                                        <li class="active">Featured</li>
                                        <li>Newest</li>
                                        <li>Oldest</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <ul class="el-pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li>...</li>
                                    <li><span>23</span></li>
                                    <li><span>Next</span><span class="fa fa-caret-right"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="row row-sm">
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
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
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
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
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/3.jpg') }}" alt="alt" />
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
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/4.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Aashita Hiya</h3>
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
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/5.jpg') }}" alt="alt" />
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
                                                    <img src="{{ asset('userassets/images/flags/portugal.svg') }}" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
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
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="{{ asset('userassets/images/flags/japan.svg') }}" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/7.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Burak Taylor</h3>
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
                                                    <img src="{{ asset('userassets/images/flags/turkey.svg') }}" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="{{ asset('userassets/images/icons/graduation.svg') }}" alt="Is experienced" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-off">
                                                    <span>%20</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/8.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Adaliya Taylor</h3>
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
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/9.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Sam woo</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$20.00</span>
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
                                                    <img src="{{ asset('userassets/images/icons/graduation.svg') }}" alt="Is experienced" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/10.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Armita Mirani</h3>
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
                                                    <img src="{{ asset('userassets/images/flags/iran.svg') }}" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-off">
                                                    <span>%20</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/11.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Adda Ramos</h3>
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
                                                    <img src="{{ asset('userassets/images/flags/spain.svg') }}" alt="Lang" />
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
                        <!--Item-->
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="{{ asset('userassets/images/people/12.jpg') }}" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Lucia Fox</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$20.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="{{ asset('userassets/images/flags/italy.svg') }}" alt="Lang" />
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
                                                <p class="icon-status bg-secondary">
                                                    <span>Starter</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--Item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
</div>

@endsection