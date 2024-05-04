<section class="about bg-white py-5" id="about">
    <div class="container-lg py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">About Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="about-text mb-4">
                    <h3 class="mt-3">Education</h3>
                    <hr>
                    @foreach ($educations as $edu)
                        <p class="card-text">{{ $edu->name }} <span
                                class="badge bg-dark float-end">{{ $edu->year_start . ' - ' . $edu->year_end }}</span>
                        </p>
                    @endforeach
                    <h3 class="mt-4">Experiences</h3>
                    <hr>
                    @foreach ($experiences as $expe)
                        <p class="card-text">{{ $expe->name }}<span
                                class="badge bg-dark float-end">{{ $expe->year_start == $expe->year_end ? $expe->year_end : $edu->year_start . ' - ' . $edu->year_end }}</span>
                        </p>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex align-items-center">
                        <a href="./assets/file/Resume-Novi-Herlambang.pdf" download
                            class="btn btn-primary me-5">Download CV</a>
                        <div class="social-links">
                            <a href="https://web.facebook.com/herlambang.kun.3/" target="_blank"
                                class="text-dark me-2"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/herlambang.saja/" target="_blank"
                                class="text-dark me-2"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/novi-herlambang/" target="_blank"
                                class="text-dark me-2"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="skill-item mb-4">
                    <h3 class="mt-3">Skills</h3>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/html.png" alt="skil">
                                <figcaption>HTML</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/css.png" alt="skil">
                                <figcaption>CSS</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/js.png" alt="skil">
                                <figcaption>JS</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/jquery.png" alt="skil">
                                <figcaption>JQuery</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/bootstrap.png" alt="skil">
                                <figcaption>Bootstrap</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/php.png" alt="skil">
                                <figcaption>PHP</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/laravel.png" alt="skil">
                                <figcaption>Laravel</figcaption>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure class="text-center">
                                <img class="logo-skils" src="assets/img/Skils/kotlin.png" alt="skil">
                                <figcaption>Kotlin</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
