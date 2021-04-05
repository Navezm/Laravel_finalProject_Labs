<div style="margin-top: 2%;" class="container">
    <h1 style="margin-bottom: 1%;">New post</h1>
    <form style="margin-bottom: 50px;" action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id" id="">
                @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
            <small></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>