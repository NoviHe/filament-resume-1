<div>
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resume</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>{{ $sumary->title ?? 'Jhon Doe' }}</h4>
                        {!! $sumary->content ?? null !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Education</h3>
                    @foreach ($education as $edu)
                        <div class="resume-item">
                            <h4>{{ $edu->name }}</h4>
                            <h5>{{ $edu->year_start === $edu->year_end ? $edu->year_start : $edu->year_start . ' - ' . $edu->year_end }}
                            </h5>
                            <p><em>{{ $edu->address }}</em></p>
                            {!! $edu->description !!}
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($experiences as $exp)
                        <div class="resume-item">
                            <h4>{{ $exp->name }}</h4>
                            <h5>{{ $exp->year_start === $exp->year_end ? $exp->year_start : $exp->year_start . ' - ' . $exp->year_end }}
                            </h5>
                            <p><em>{{ $exp->address }}</em></p>
                            {!! $exp->description !!}
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->
</div>
