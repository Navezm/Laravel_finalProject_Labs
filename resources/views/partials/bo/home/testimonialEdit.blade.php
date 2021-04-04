<div style="margin-top: 5%;" class="container">
    <h1 style="margin: 1% 0 1% 0;">Edit title & span</h1>
    <form style="margin: 3% 0 3% 0;" action="/testimonials/{{$testimonials->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{$testimonials->title}}">
        <br>
        <label for="">Span</label>
        <input class="form-control" type="text" name="span" value="{{$testimonials->span}}">
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
</div>