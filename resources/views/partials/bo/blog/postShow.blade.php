<div class="jumbotron mb-0">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4">{{$post->title}}</h1>
            <p class="lead">Author: {{$post->authors->name}} {{$post->authors->surname}}</p>
            <p class="lead">
                @if ($post->created_at == NULL)
                    <span>Date: 03 Nov 2017</span>
                @else
                    <span>Date: {{$post->created_at->format('d M Y')}}</span> 
                @endif
            </p>
            <p class="lead text-capitalize">tags: 
                @foreach ($post->tags as $item)
                    {{$item->name}},
                    @if ($loop->last)
                        {{$item->name}}
                    @endif
                @endforeach
            </p>
            <p class="lead">Comments: {{$nbrComment}}</p>
        </div>
        <div class="col-6">
            <img height="300" width="750" class="shadow" src="{{asset('img/blog/'.$post->src)}}" alt="">
        </div>
    </div>
    <hr class="my-4">
    @foreach ($paragraphs as $item)
        <p>{{$item}}</p>
    @endforeach
    <div class="d-flex">
        <a class="btn btn-success btn-lg" href="/postEdit/{{$post->id}}" role="button">Edit</a>
        <form action="/post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-lg ml-3" type="submit">Delete</button>
        </form>
    </div>
</div>