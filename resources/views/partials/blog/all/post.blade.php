@foreach ($posts as $item)
    <!-- Post item -->
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="{{asset('img/'.$item->src)}}" alt="">
            <div class="post-date">
                @if ($item->created_at == NULL)
                    <h2>03</h2>
                    <h3>Nov 2017</h3>
                @else
                    <h2></h2>
                    <h3></h3> 
                @endif
            </div>
        </div>
        <div class="post-content">
            <h2 class="post-title">{{$item->title}}</h2>
            <div class="post-meta">
                <a href="">{{$item->authors->name}} {{$item->authors->surname}}</a>
                @foreach ($item->tags->pluck('name')->random(2) as $tags)
                    @if ($loop->iteration == 1)
                        <a class="text-capitalize" href="">{{$tags}}</a>
                    @else
                        <a class="a_tag_style" href="">, {{$tags}}</a>
                    @endif
                @endforeach
                <a href="">{{count($comments->where('post_id', $item->id))}} Comments</a>
            </div>
            <p>{{Str::limit($item->content, 300)}}</p>
            <a href="/post/{{$item->id}}" class="read-more">Read More</a>
        </div>
    </div>
@endforeach
<!-- Pagination -->
<div>
    {{$posts->fragment('service')->links('vendor.pagination.bootstrap-4')}}
</div>