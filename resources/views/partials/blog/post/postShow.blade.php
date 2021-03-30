<div class="post-thumbnail">
    <img src="{{asset('img/'.$post->src)}}" alt="">
    <div class="post-date">
        @if ($post->created_at == NULL)
            <h2>03</h2>
            <h3>Nov 2017</h3>
        @else
            <h2></h2>
            <h3></h3>
        @endif
    </div>
</div>
<div class="post-content">
    <h2 class="post-title">{{$post->title}}</h2>
    <div class="post-meta">
        <a href="">{{$post->authors->name}} {{$post->authors->surname}}</a>
            @foreach ($post->tags->pluck('name') as $item)
                @if ($loop->iteration == 1)
                    <a class="text-capitalize" href="">{{$item}}</a>
                @else
                    <a class="a_tag_style" href="">, {{$item}}</a>
                @endif
            @endforeach
        <a href="#commentId">{{$nbrComment}} Comments</a>
    </div>
    <p>{{$paragraphs[0]}}</p>
    <p>{{$paragraphs[1]}}</p>
    <p>{{$paragraphs[2]}}</p>
</div>