<div style="margin-top: 5%;" class="container">
    <h1 style="margin: 1% 0 1% 0;">Edit title</h1>
    <form style="margin: 3% 0 3% 0;" action="/team/{{$teams->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{$teams->title}}">
        <small>Put between paranthesis the part of the title you want in green</small>
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
</div>