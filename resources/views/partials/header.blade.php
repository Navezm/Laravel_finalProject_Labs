<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img height="32" src="{{asset('img/'.$logo->src)}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @foreach ($navs as $item)
                @if ($item->link === "home")
                    <li class="{{Route::getCurrentRoute()->uri()== '/' ? 'active' : ''}}"><a class="text-capitalize" href="/">{{$item->link}}</a></li>
                @else
                    <li class="{{Route::getCurrentRoute()->uri()== $item->link? 'active' : ''}}"><a class="text-capitalize" href="/{{$item->link}}">{{$item->link}}</a></li>
                @endif
            @endforeach
        </ul>
    </nav>
</header>
<!-- Header section end -->