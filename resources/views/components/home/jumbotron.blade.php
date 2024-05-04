<section class="home py-5" id="home">
    <div class="container-lg">
        <div class="row  min-vh-100 align-items-center align-content-center">
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="home-img text-center">
                    <img width="80%" class="rounded-circle mw-100" src="{{ Storage::url($data->thumbnail ?? null) }}"
                        alt="Profil img">
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                <div class="home-text">
                    <p class="text-muted mb-1">Hello I'm</p>
                    <h1 class="typewriter text-primary text-uppercase fs-1 fw-bold">
                        {{ get_setting_value('_site_skill') }}</h1>
                    <h2 class="fs-4">{{ $data->title ?? null }}</h2>
                    <p class="mt-4 text-muted">{!! $data->content ?? null !!}</p>
                    <a class="btn btn-primary px-3 mt-3" href="#portfolio">My Work</a>
                    <a class="btn btn-outline-primary px-3 mt-3" target="_blank"
                        href="{{ get_setting_value('_github') }}">My
                        Github</a>
                </div>
            </div>
        </div>
    </div>
</section>
