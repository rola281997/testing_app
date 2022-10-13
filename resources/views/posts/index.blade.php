@extends('layouts.index')
@section('content')
    @include('masthead')
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="posts">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Posts</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="row justify-content-center">
                        <!-- Portfolio Item 1-->
                        <div class="col-lg-12 col-xl-11">
                            <div class="card bg-light mb-2">
                                <div class="card-body">
                                    <p class="card-text alignleft">{{ $post->headline }}</p>
                                    <p class="card-text alignright">{{ $post->published_date }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            @endif
        </div>
    </section>
    @include('contact')
@endsection
