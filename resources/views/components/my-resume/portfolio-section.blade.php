<div>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>List Project yang pernah dikerjakan untuk client maupun project untuk dijual berupa Source Code dll.
                    Disediakan demo project nya juga, clik gambar untuk lebih lengkap</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $category)
                            <li data-filter=".filter-{{ $category->slug }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->category->slug }}">
                        <div class="portfolio-wrap">
                            <img src="{{ Storage::url($project->thumbnail) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $project->title }}</h4>
                                <p>{{ $project->category->name }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ Storage::url($project->thumbnail) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{ $project->title }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ route('project-details', $project->slug) }}"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->
</div>
