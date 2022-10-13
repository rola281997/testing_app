@extends('layouts.index')
@section('content')
    <section class="page-section">
        <div class="container">

            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="padding-top: 150px;">
                Admin
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
                    <form id="post_create" method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        @include('flash')
                        <div class="form-floating mb-3">
                            <textarea name="headline" style="border: 1px solid #ccc !important;height:250px;" class="form-control" required>{{ old('headline') }} </textarea>
                        </div>



                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">ADD</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
