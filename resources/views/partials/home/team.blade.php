<!-- Team Section -->
<div class="team-section spad" id="teamSection">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$teams->title}}</h2>
        </div>
        <div class="row">
            @foreach ($users->where('id', '!=', 1)->random(2) as $item)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img height="400" width="90%" src="{{asset('img/'.$item->photos->src)}}" alt="">
                        <h2>{{$item->name}} {{$item->surname}}</h2>
                        <h3>{{$item->jobs->name}}</h3>
                    </div>
                </div>
                @if ($loop->iteration == 1)
                    <div class="col-sm-4">
                        <div class="member">
                            <img height="400" width="90%" src="{{asset('img/'.$users[0]->photos->src)}}" alt="">
                            <h2>{{$users[0]->name}} {{$users[0]->surname}}</h2>
                            <h3>{{$users[0]->jobs->name}}</h3>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->