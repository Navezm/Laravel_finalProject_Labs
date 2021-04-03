<div style="margin-top: 2%" class="container">
    <h1 class="text-center">Footer edit</h1>
    <form style="margin: 3% 0 3% 0;" action="/footer/{{$footers->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Part one</label>
        <input class="form-control" type="text" name="span1" value="{{$footers->span1}}">
        <br>
        <label for="">Url description</label>
        <input class="form-control" type="text" name="span2" value="{{$footers->span2}}">
        <br>
        <label for="">Url link</label>
        <input class="form-control" type="text" name="url" value="{{$footers->url}}">
        <br>
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>