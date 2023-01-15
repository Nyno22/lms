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
                                    <h3>Privacy Policy</h3>
                                </div>
                                <div class="el-panel-image">
                                    <img src="assets/images/blog/featured-post-3.jpg" alt="--Alternative--">
                                </div>
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
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
                                        <a href="{{ route('contact') }}">
                                            <span class="text">Contact us</span>
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