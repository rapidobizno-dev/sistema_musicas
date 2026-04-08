<div class="uc-top-navbar panel z-3 overflow-hidden bg-primary-600 swiper-parent" style="--uc-nav-height: 32px"
    data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
    <div class="container container-full">
        <div class="uc-navbar-item bg-dark">
            <div class="swiper swiper-ticker swiper-ticker-sep px-2" style="--uc-ticker-gap: 32px"
                data-uc-swiper="items: auto; gap: 32; center: true; center-bounds: true; autoplay: 10000; speed: 10000; autoplay-delay: 0.1; loop: true; allowTouchMove: false; freeMode: true; autoplay-disableOnInteraction: true;">
                <div class="swiper-wrapper">
                    @foreach($news as $data)
                    <div class="swiper-slide text-white">
                        <div class="type-post post panel">
                            <a href="{{ route('site.details', ['news' => $data])}}" class="fs-7 fw-normal text-none text-inherit">{{ $data->title }}</a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="swiper-slide text-white">
                        <div class="type-post post panel">
                            <a href="blog-details.html" class="fs-7 fw-normal text-none text-inherit">Tech Innovations
                                Reshaping the Retail Landscape: AI Payments</a>
                        </div>
                    </div>
                    <div class="swiper-slide text-white">
                        <div class="type-post post panel">
                            <a href="blog-details.html" class="fs-7 fw-normal text-none text-inherit">Balancing Work and
                                Wellness: Tech Solutions for Healthy</a>
                        </div>
                    </div>
                    <div class="swiper-slide text-white">
                        <div class="type-post post panel">
                            <a href="blog-details.html" class="fs-7 fw-normal text-none text-inherit">The Importance of
                                Sleep: Tips for Better Rest and Recovery</a>
                        </div>
                    </div>
                    <div class="swiper-slide text-white">
                        <div class="type-post post panel">
                            <a href="blog-details.html" class="fs-7 fw-normal text-none text-inherit">The Future of
                                Sustainable Living: Driving Eco-Friendly Lifestyles</a>
                        </div>
                    </div>
                    <div class="swiper-slide text-white">
                        <div class="type-post post panel">
                            <a href="blog-details.html" class="fs-7 fw-normal text-none text-inherit">Business Agility
                                the Digital Age: Leveraging AI and Automation</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
