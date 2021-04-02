<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Role</th>
        <th scope="col">Function</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}} {{$item->surname}}</td>
            <td>{{$item->roles->name}}</td>
            <td>{{$item->jobs->name}}</td>
            <td></td>
            <td></td>
        </tr>
      @endforeach
    </tbody>
</table>