<div class="contact_section text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Social Icons-->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Occurred Question ?</h4>
                <h4 class="text-uppercase mb-4"> write to us</h4>
                <p>24 woodpark</p>
                <p>67 street</p>
                <p> Email:test@gmail.com</p>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-telegram"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                        class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                        class="fab fa-fw fa-whatsapp"></i></a>

                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                        class="fab fa-fw fa-instagram"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-6">
                <form id="send_message" method="POST" action="{{ route('send_mail') }}">
                    @csrf
                    @include('flash')

                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" name="name" placeholder="Your Name"
                            value="{{ old('name') }}" required />


                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="Email"
                            value="{{ old('email') }}" required />

                    </div>

                    <div class="form-floating mb-3">
                        <textarea name="message" style="border: 1px solid #ccc !important;height:250px;" placeholder="message"
                            class="form-control" required>{{ old('message') }}</textarea>
                    </div>



                    <!-- Submit Button-->
                    <button class="btn custom_color_button btn-xl" id="submitButton" type="submit"
                        style="color: white;">SUBMIT</button>

                </form>
            </div>

        </div>
    </div>
</div>
