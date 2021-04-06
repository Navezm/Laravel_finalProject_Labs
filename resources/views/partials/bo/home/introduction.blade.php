<div style="margin-top: 11%" class="container">
    <h1 class="text-center">Edit introduction</h1>
    <form style="margin: 3% 0 3% 0;" action="/introduction/{{$introductions->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{$introductions->title}}">
        <small>Put between paranthesis the part of the title you want in green</small>
        <br> <br>
        <label for="">Paragraphs</label>
        <textarea class="form-control" name="p1" id="" cols="30" rows="5">{{$introductions->p1}}</textarea>
        <textarea class="form-control" name="p2" id="" cols="30" rows="5">{{$introductions->p2}}</textarea>
        <br>
        <label for="">Video url</label>
        <input class="form-control" type="text" name="url" value="{{$introductions->url}}">
        <br>
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>