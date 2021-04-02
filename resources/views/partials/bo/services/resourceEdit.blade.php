<div style="margin-top: 10%;" class="container">
    <h1 style="margin-bottom: 1%;">Edit the resource</h1>
    <form style="margin-bottom: 50px;" action="/resources/{{$resource->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{$resource->title}}">
        <br>
        <label for="">Content</label>
        <textarea class="form-control" name="content" id="" cols="30" rows="5">{{$resource->content}}</textarea>
        <br>
        <label for="">Icon</label>
        <select class="form-control" name="icon_id" id="">
            @foreach ($icons as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>