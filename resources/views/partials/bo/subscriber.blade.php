<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($subscribers as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->email}}</td>
            <td></td>
            <td></td>
        </tr>
      @endforeach
    </tbody>
</table>