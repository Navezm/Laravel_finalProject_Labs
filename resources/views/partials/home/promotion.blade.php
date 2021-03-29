<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>{{$stands->title}}</h2>
                <p>{{$stands->paragraph}}</p>
            </div>
            <div class="col-md-5">
                <div class="promo-btn-area">
                    <h2 class="text-center">{{$newsletters->title}}</h2>
                    <!-- newsletter form -->
                    <form class="nl-form d-flex" method="POST">
                        @csrf
                        <input type="text" placeholder="{{$newsletters->placeholder}}">
                        <button type="submit" class="site-btn btn-2">{{$newsletters->btn}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->