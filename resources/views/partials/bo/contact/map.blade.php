<div style="margin-top: 2%;" class="container">
    <h1 style="margin-bottom: 1%;">Change the linked address</h1>
    <form style="margin-bottom: 50px;" action="/map/{{$map->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" class="form-control" name="address" value="{{$map->address}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>