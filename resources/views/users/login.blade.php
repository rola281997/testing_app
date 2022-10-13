@extends('layouts.index')
@section('content')
    <section class="page-section">
        <div class="container">

            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"
                style="padding-top: 67px;margin-top: 10%;">
                Login
            </h2>

            <!-- Contact Section Form-->
            <div class="row justify-content-center" style="margin-top: 7%">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="user_login" method="POST" action="{{ route('users.authenticate') }}">
                        @csrf
                        @include('flash')
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="login" type="text" name="login" placeholder="Login"
                                value="{{ old('login') }}" required />
                            <label for="login">Login</label>

                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" type="password" name="password"
                                placeholder="Password" required />
                            <label for="login">Password</label>
                        </div>

                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Login</button>
                        <p>Don't you have an account?<a href="#">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
