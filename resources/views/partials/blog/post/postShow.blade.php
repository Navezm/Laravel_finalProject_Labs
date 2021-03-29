<div class="post-thumbnail">
    <img src="{{asset('img/'.$show->src)}}" alt="">
    <div class="post-date">
        <h2>03</h2>
        <h3>Nov 2017</h3>
    </div>
</div>
<div class="post-content">
    <h2 class="post-title">{{$show->title}}</h2>
    <div class="post-meta">
        <a href="">{{$show->authors->name}} {{$show->authors->surname}}</a>
        <a href="">Design, Inspiration</a>
        <a href="">2 Comments</a>
    </div>
    <p>{{$paragraphs[0]}}</p>
    <p>{{$paragraphs[1]}}</p>
    <p>{{$paragraphs[2]}}</p>
</div>