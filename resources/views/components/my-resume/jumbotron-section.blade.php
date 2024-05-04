<div>
    @php
        $imageBackground = isset($data->thumbnail)
            ? Storage::url($data->thumbnail)
            : asset('MyResume/assets/img/hero-bg.jpg');
    @endphp

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center"
        style="background: url({{ $imageBackground }}) top right no-repeat !important">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $data->title ?? 'Jhon Doe' }}</h1>
            <p>I'm <span class="typed" data-typed-items="Developer, Freelancer, Full-Stack"></span></p>
            <div class="social-links">
                @foreach ($socials as $social)
                    <a href="{{ $social->link }}" class="{{ $social->name }}"><i class="{{ $social->icon }}"></i></a>
                @endforeach
            </div>
        </div>
    </section><!-- End Hero -->
</div>
