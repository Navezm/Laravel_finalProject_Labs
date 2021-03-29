<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$phones->title}}</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($lastServices as $item)
                    @if($loop->iteration <= 3)
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->content}}</p>
                            </div>
                            <div class="icon">
                                <i class="{{$item->icon}}"></i>
                            </div>
                        </div>
                    @endif

                    @if ($loop->iteration == 3)
                        </div>
                        <div class="col-md-4 col-sm-4 devices">
                            <div class="text-center">
                                <img src="{{asset('img/'.$phones->src)}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 features">
                    @endif

                    @if($loop->iteration > 3)
                        <div class="icon-box light right">
                            <div class="icon">
                                <i class="{{$item->icon}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->content}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Devices -->
        </div>
        <div class="text-center mt100">
            <a href="{{$phones->btnLink}}" class="site-btn">{{$phones->btn}}</a>
        </div>
    </div>
</div>
<!-- features section end-->