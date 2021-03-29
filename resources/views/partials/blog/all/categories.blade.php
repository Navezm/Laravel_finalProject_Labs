<!-- Single widget -->
<div class="widget-item">
    <h2 class="widget-title">Categories</h2>
    <ul>
        @foreach ($categories as $item)
            <li><a class="text-capitalize" href="#">{{$item->name}}</a></li>
        @endforeach
    </ul>
</div>