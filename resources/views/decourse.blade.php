 @extends('layouts.users')

@section('content')

 <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-course">
    <!--Course-->
    <section class="section section-course">
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
        </figure>
        <div class="display-spacing display-spacing-plus">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-lg-8 col-xl-8 order-lg-1">
                        <div class="el-panel el-panel-course-info">
                            <div class="el-panel-body">
                                <div class="course-summary">
                                    <div class="el-panel-title">
                                        <h1>About this course</h1>
                                    </div>
                                    <p>{{$course->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-calendar">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Lesson</h2>
                                </div>
                                <div class="row row-xs">
                                @if($purchases!='0')
                                        @if(($purchases->status)!="paid")
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="row row-xs">
                                                    <h5>You have to pay to view this lesson</h5>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="row row-xs">
                                                    <div class="col">
                                                        <p>{{$course->notes}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    
                                @else
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="row row-xs">
                                            <h5>You have to pay to view this lesson</h5>
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                <span>{{$course->user->name}}</span>
                                            </a>
                                        </p>
                                        <p class="excerpt">{{$course->user->email}}</p>
                                    </div>
                                    {{--@foreach($purchases as $purchase)--}}
                                    @if($purchases!='0')
                                        @if(($purchases->status)!="paid")
                                            <form method="post" action="{{ route('purchase.store') }}">
                                                @csrf
                                                @method('POST')
                                                <input name="course" type="hidden" value="{{$course->id}}"/>
                                                <input name="status" type="hidden" value="paid"/>
                                                <input name="user" type="hidden" value="{{auth()->user()->id}}"/>
                                                <button class="button button-md button-block button-primary">
                                                    <span class="text">Pay</span>
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        <form method="post" action="{{ route('purchase.store') }}">
                                            @csrf
                                            @method('POST')
                                            <input name="course" type="hidden" value="{{$course->id}}"/>
                                            <input name="status" type="hidden" value="paid"/>
                                            <input name="user" type="hidden" value="{{auth()->user()->id}}"/>
                                            <button class="button button-md button-block button-primary">
                                                <span class="text">Pay</span>
                                            </button>
                                        </form>
                                    @endif
                                    {{--@endforeach--}}
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
</div>

@endsection