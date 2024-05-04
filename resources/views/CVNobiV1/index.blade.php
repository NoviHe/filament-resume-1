@extends('layouts.app')
@section('content')
    <x-home.jumbotron />

    <x-about />

    <section class="portfolio bg-white py-5" id="portfolio">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Latest Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="lightSlider" id="portfolio-items">

                </ul>
            </div>
        </div>
    </section>

    <section class="freelancer-available py-5 bg-primary">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="text-light fs-5">Do you have any project ?</p>
                    <h2 class="fs-1 text-white mb-4">I'm Available For Freelance Projects</h2>
                    <a href="#contact" class="btn btn-outline-light">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
@endsection
