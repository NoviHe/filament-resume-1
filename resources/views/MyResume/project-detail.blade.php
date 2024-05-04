@include('MyResume.layouts.partial.style')

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ Storage::url($data->thumbnail) }}" alt="">
                        </div>

                        @foreach ($data->images as $key => $item)
                            <div class="swiper-slide">
                                <img src="{{ Storage::url($item) }}" alt="">
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>{{ $data->title }}</h3>
                    <ul>
                        <li><strong>Category</strong>: {{ $data->category->name }}</li>
                        <li><strong>Client</strong>: {{ $data->client }}</li>
                        <li><strong>Project date</strong>: {{ date('d F, Y', strtotime($data->date)) }}</li>
                        <li><strong>Project URL</strong>: <a href="{{ $data->link }}">{{ $data->link }}</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    {!! $data->content !!}
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->

@include('MyResume.layouts.partial.script')
