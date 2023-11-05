<section class="home-slider position-relative mb-15"  style="background-color: #deeef5;">
    <div class="container">

        <div class="home-slide-cover">
            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                @if ($banners)
                @foreach ($banners as $banner )
              <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('images/slider')}}/{{ $banner->image }})">
                <div class="slider-content">
                    <h1 class="display-2 mb-40">
                       {!! $banner->title !!}
                    </h1>
                    <p class="display-2 mb-10">
                       {{ $banner->subtitle }}
                    </p>

                </div>
             </div>
             @endforeach

             @endif
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>

    </div>
</section>
