<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset('img/'.$carrousels[0]->src)}}" alt="">
            <p>{{$carrousels[0]->paragraph}}</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carrousels->where('id', '!=', 1) as $item)
            <div class="item  hero-item" data-bg="{{asset('img/'.$item->src)}}"></div>
            {{-- <p>{{$item->paragraph}}</p> --}}
        @endforeach
    </div>
</div>
<!-- Intro Section -->