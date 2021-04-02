<div style="margin-top: 2%;" class="container">
    <h1 style="margin-bottom: 1%;">Edit the subject</h1>
    <form style="margin-bottom: 50px;" action="/subjects/{{$subjects->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Subject</label>
          <input type="text" class="form-control" name="subject" value="{{$subjects->subject}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>