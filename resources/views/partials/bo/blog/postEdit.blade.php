<div style="margin-top: 2%;" class="container mb-0">
    <h1 style="margin-bottom: 1%;">Edit a post</h1>
    <form class="pb-3" action="/post/{{$edit->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{$edit->title}}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id" id="">
                @foreach ($categories as $item)
                    <option value="{{$item->id}}" {{$item->id == $edit->category_id ? 'selected' : ''}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tags</label> <br>
            @foreach ($tags as $item)
                <input type="checkbox" name="tag[]" value="{{$item->id}}" {{in_array($item->id, $edit->tags) ? "checked" : ''}}>
                <label class="text-capitalize" for="">{{$item->name}}</label> <br>
            @endforeach
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10">{{$edit->content}}</textarea>
            <small>If you wish to split your text in paragraph just put a "/" between them</small>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="src">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>