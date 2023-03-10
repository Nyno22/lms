@extends('layouts.users')

@section('content')

<!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-inferior page-faq">
    <!--FAQ-->
    <section class="section section-faq section-faq-1">
        <div class="display-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Contact Us</h3>
                                </div>
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                <hr>
                                <form action="" class="form-3">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" name="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label class="form-label">E-Mail</label>
                                                <input type="text" name="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-item">
                                                <label class="form-label">Your Message</label>
                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="button button-md button-primary">
                                                <span class="text">Send</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="el-panel el-panel-teacher-info">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Quick Access</h3>
                                </div>
                                <ul class="el-list">
                                    <li>
                                        <a href="{{ route('faq') }}">
                                            <span class="text">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('privacy') }}">
                                            <span class="text">Policy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">
                                            <span class="text">Apply online for Teaching</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <span class="text">To start learning language</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
</div>

@endsection