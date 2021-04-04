<div style="margin-top: 5%;" class="container">
    <h1 style="margin: 1% 0 1% 0;">Edit title & button</h1>
    <form style="margin: 3% 0 3% 0;" action="/services/{{$services->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{$services->title}}">
        <br>
        <label for="">Button</label>
        <input class="form-control" type="text" name="btn" value="{{$services->btn}}">
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
</div>