<div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ isset($data->thumbnail) ? Storage::url($data->thumbnail) : asset('MyResume/assets/img/profile-img.jpg') }}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>{{ $data->title ?? 'WEB Developer' }}</h3>
                    {!! $data->content ?? null !!}
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
</div>
