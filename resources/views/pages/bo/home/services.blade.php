@extends('template.third')

@section('content')
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>{{$services->title}}</h2>
            </div>
            <div class="my-3"></div>
            <div class="text-center">
                <a href="{{$services->btnLink}}" class="site-btn">{{$services->btn}}</a>
            </div>
        </div>
    </div>
    @include('partials.bo.home.servicesEdit')
@stop