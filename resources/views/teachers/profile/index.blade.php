@extends('layouts.teachers')

@section('content')

                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Profile</h2>
                                </div>
                                <form class="form-3">
                                    <div class="row row-sm">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                            <div class="el-avatar">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input disabled type="file" id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url({{ asset('userassets/images/people/default.jpg') }});">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                            <div class="pr-15">
                                                <div class="form-item">
                                                    <label for="input-name" class="form-label">Name</label>
                                                    @foreach($info as $infos)
                                                    <input disabled name="name" type="text" value="{{$infos->name}}" id="input-name">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-mobile" class="form-label">Mobile</label>
                                                <input disabled name="" type="text" value="{{$infos->number}}" id="input-mobile" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-gender" class="form-label">Gender</label>
                                                <div class="input-select">
                                                    <select  disabled id="input-gender" class="el-select2-gender-empty">
                                                        
                                                        <option selected>{{$infos->gender}}</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-item">
                                                <label for="input-email" class="form-label">E-Mail</label>
                                                <input disabled name="" type="email" value="{{$infos->email}}" id="input-email" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-item">
                                                <label for="input-description" class="form-label">About Me</label>
                                                <textarea disabled name="" placeholder="{{$infos->about}}" id="input-description" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </form>
                                <div class="col-12">
                                    <div class="form-item mb-0">
                                        <a href="{{ route('profile.edit',$infos->id) }}">
                                            <button class="button button-md button-block button-primary" type="submit">
                                                <span class="text">Edit</span>
                                            </button>
                                        </a>
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

@endsection