<!-- Commert Form -->
<div class="row">
    <div class="col-md-9 comment-from">
        <h2>Leave a comment</h2>
        <form class="form-class">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="name" placeholder="{{$placeholders->name}}">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="email" placeholder="{{$placeholders->email}}">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="{{$placeholders->message}}"></textarea>
                    <button class="site-btn">{{$placeholders->btn}}</button>
                </div>
            </div>
        </form>
    </div>
</div>