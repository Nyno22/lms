@extends('layouts.teachers')

@section('content')

<div class="col-12 col-sm-12 col-md-12 col-lg-8">
    <div class="el-panel">
        <div class="el-panel-body">
            <div class="el-panel-title">
                <h2>Add new Course</h2>
            </div>
            <form class="form-3" action="{{ route('courses.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-item">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-item">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" max="1000000" placeholder="0" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="form-item">
                            <label for="input-type" class="form-label">Language</label>
                            <div class="input-select">
                                <select class="el-select2-select-hour" name="language" required>
                                    <option value="1">">English</option>
                                    <option value="2">">German</option>
                                    <option value="3">">French</option>
                                    <option value="4">">Italian</option>
                                    <option value="5">">Spanish</option>
                                    <option value="6">">Portuguese</option>
                                    <option value="7">">Mandarin</option>
                                    <option value="8">">Japanese</option>
                                    <option value="9">J">Korean</option>
                                    <option value="10">">Russian</option>
                                    <option value="11">">Hindi</option>
                                    <option value="12">">Arabic</option>
                                    <option value="13">">Persian</option>
                                    <option value="14">">Turkish</option>
                                    <option value="15">">Kurdish</option>
                                    <option value="16">">Vietnamese</option>
                                    <option value="17">">Urdu</option>
                                    <option value="18">">Polish</option>
                                    <option value="19">">Hebrew</option>
                                    <option value="20">">Bengali</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-item">
                            <label class="form-label">Description</label>
                            <textarea name="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    {{--<div class="col-12 col-sm-12 col-md-12">
                        <div class="form-item">
                            <label class="form-label">Number of Lessons</label>
                            <div class="quantity">
                                <input type="number" name="count" id="input-add-classrooms" min="1" max="15" step="1" value="1">
                                <div class="quantity-nav">
                                    <div id="button-append-classroom" class="quantity-button quantity-up">+</div>
                                    <div id="button-delete-classroom" class="quantity-button quantity-down">-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12">
                        <div id="form-details-of-classrooms">
                            <ul>
                                <li>
                                    <h4>Lesson <span>1</span></h4>
                                    <div class="row row-sm">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-item">
                                                <label for="input-classroom-name" class="form-label">Name of Lesson</label>
                                                <input type="text" name="cname" id="input-classroom-name">
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 pt-15">
                                                <div class="form-item">
                                                    <label class="form-label">Notes</label>
                                                    <textarea name="notes" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>--}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-item">
                            <label class="form-label">Notes</label>
                            <textarea name="notes" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    
                    <div class="col-12">
                        <button class="button button-md button-block button-primary" type="submit">
                            <span class="text">Add new Course</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection