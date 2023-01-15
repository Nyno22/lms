@extends('layouts.teachers')

@section('content')

                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-panel el-panel-financial bg-color-2">
                                    <div class="el-panel-body">
                                        <p class="text-center text-light">Total Number of Student</p>
                                        <p class="price">
                                            <span class="value text-light">18</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-panel el-panel-financial bg-color-1">
                                    <div class="el-panel-body">
                                        <p class="text-center text-light">Total Courses</p>
                                        <p class="price">
                                            <span class="value text-light">{{$courses}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection