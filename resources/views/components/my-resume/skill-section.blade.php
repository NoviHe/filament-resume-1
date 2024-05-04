<div>
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">
                @php
                    $totalDatas = $datas->count();
                    $bagiRata = (int) round($totalDatas / 2);
                @endphp

                <div class="col-lg-6">

                    @foreach ($datas->slice(0, $bagiRata) as $data)
                        <div class="progress">
                            <span class="skill">{{ $data->name }} <i class="val">{{ $data->mastering }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $data->mastering }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="col-lg-6">

                    @foreach ($datas->slice($bagiRata, $bagiRata) as $data)
                        <div class="progress">
                            <span class="skill">{{ $data->name }} <i
                                    class="val">{{ $data->mastering }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $data->mastering }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->
</div>
