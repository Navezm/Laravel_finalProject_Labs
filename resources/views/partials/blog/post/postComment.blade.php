<!-- Post Comments -->
<div class="comments" id="commentId">
    <h2>Comments ({{$nbrComment}})</h2>
    <ul class="comment-list">
        @foreach ($comments as $item)
            <li>
                <div class="avatar">
                    <img src="{{asset('img/'.$item->photos->src)}}" alt="">
                </div>
                <div class="commetn-text">
                    <h3>{{$item->name}} | 03 nov, 2017</h3>
                    <p>{{$item->content}}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>