<div style="margin: 0; padding: 0;" class="row">
    <div style="margin: 0;" class="col-sm-6">
        <h1 class="text-center">Email Subjects</h1>
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
              @foreach ($emailSubjects as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->subject}}</td>
                    <td>
                        <a class="btn btn-success" href="/subjects/{{$item->id}}/edit">Edit</a>
                    </td>
                    <td>
                        <form action="/subjects/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        <h3 style="margin: 1% 0 1% 0;">Create a new subject</h3>
        <form style="margin: 3% 0 3% 0;" action="/subjects" method="POST">
            @csrf
            <label for="">New Email Subject</label>
            <input class="form-control" type="text" name="subject">
            <br>
            <button class="btn btn-info" type="submit">Create</button>
        </form>
    </div>
    <div style="margin: 0;" class="col-sm-6">
        <h1 class="text-center">Contact</h1>
    
    </div>
</div>