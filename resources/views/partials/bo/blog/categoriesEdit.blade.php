<div style="margin-top: 2%;" class="container">
    <h1 style="margin-bottom: 1%;">Edit the category</h1>
    <form style="margin-bottom: 50px;" action="/categories/{{$category->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>