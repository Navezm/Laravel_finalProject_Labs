<div style="margin-top: 5%" class="container">
    <h1 class="text-center">Edit Stand Out</h1>
    <form style="margin: 3% 0 3% 0;" action="/standOut/{{$stands->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{$stands->title}}">
        <br>
        <label for="">Paragraph</label>
        <input class="form-control" type="text" name="paragraph" value="{{$stands->paragraph}}">
        <br>
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>