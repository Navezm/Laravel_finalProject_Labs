<!-- Post Author -->
<div class="author">
    <div class="avatar">
        <img src="{{asset('img/avatar/03.jpg')}}" alt="">
    </div>
    <div class="author-info">
        <h2>{{$show->authors->name}} {{$show->authors->surname}}, <span>{{$show->authors->jobs->name}}</span></h2>
        <p>{{$show->authors->description}}</p>
    </div>
</div>