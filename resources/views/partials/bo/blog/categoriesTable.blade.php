<h5 style="margin: 1% 0 1% 0;">Create a new category</h5>
<form style="margin: 3% 0 3% 0;" action="/categories" method="POST">
    @csrf
    <label for="">New Category</label>
    <input class="form-control" type="text" name="name">
    <br>
    <button class="btn btn-info" type="submit">Create</button>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>
              <a class="btn btn-success" href="/categories/{{$item->id}}/edit">Edit</a>
            </td>
            <td>
              <form action="/categories/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>