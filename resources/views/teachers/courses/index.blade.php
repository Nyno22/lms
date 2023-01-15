@extends('layouts.teachers')

@section('content')

<div class="col-12 col-sm-12 col-md-12 col-lg-8">
    <div class="el-panel">
        <div class="el-panel-body">
            <div class="el-panel-title">
                <h2>Your Courses</h2>
                <a href="{{ route('courses.create') }}"><button class="button button-md button-block button-primary" type="submit">
                    <span class="text">Add new Course</span>
                </button>
                </a>
            </div>
            @foreach($courses as $course)
                <aside style="margin-top: 7%" class="sidebar">
                    <div class="el-panel el-panel-teacher-widget">
                        <div class="el-panel-body">
                            <div class="el-panel-title">
                                <h2>{{$course->name}}</h2>
                            </div>
                            <ul class="el-list-icon">
                                <li>
                                    <a>
                                        <i class="fa fa-money"></i>
                                        <span class="text">{{$course->price}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fas fa-language"></i>
                                        <span class="text">{{$course->lang}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            @endforeach
        </div>
    </div>
</div>
@endsection