@extends('layouts.teachers')

@section('content')

                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Profile</h2>
                                </div>
                                <form class="form-3" action="{{ route('profile.update',$info->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row row-sm">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                            <div class="el-avatar">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
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
                                                    <input name="name" type="text" value="{{$info->name}}" id="input-name">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-mobile" class="form-label">Mobile</label>
                                                <input name="number" type="text" value="{{$info->number}}" id="input-mobile" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-gender" class="form-label">Gender</label>
                                                <div class="input-select">
                                                    <select name="gender" id="input-gender" class="el-select2-gender-empty">
                                                        <option value="">&nbsp;</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-item">
                                                <label for="input-email" class="form-label">E-Mail</label>
                                                <input name="email" type="email" value="{{$info->email}}" id="input-email" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-item">
                                                <label for="input-description" class="form-label">About You</label>
                                                <textarea name="about" id="input-description" value="{{$info->about}}" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-item mb-0">
                                                <button class="button button-md button-block button-primary" type="submit">
                                                    <span class="text">Save</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->

@endsection