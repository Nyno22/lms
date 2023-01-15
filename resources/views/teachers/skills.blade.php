@extends('layouts.teachers')

@section('content')
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Resume & Skills</h2>
                                </div>
                                <form class="form-3" action="#" method="">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-item">
                                                <label for="input-type" class="form-label">Select your language</label>
                                                <div class="input-select">
                                                    <select class="el-select2-teacher-languages" name="flag">
                                                        <option value="">&nbsp;</option>
                                                        <option value="uk">English</option>
                                                        <option value="france">French</option>
                                                        <option value="spain">Spanish</option>
                                                        <option value="germany">German</option>
                                                        <option value="italy">Italian</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-item">
                                                <label for="input-classroom-name" class="form-label">Response Time</label>
                                                <input type="text" name="cname">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-item">
                                                <label class="form-label">Summary</label>
                                                <textarea name="excerpt" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 pt-15">
                                            <div class="form-item">
                                                <label class="form-label">Embed Code</label>
                                                <textarea name="video" cols="30" rows="10"></textarea>
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