@extends('frontend.master')

@section('content')

    <section class="banner_part">
        <img src="{{asset('public/frontend')}}/image/banner.jpg" style="width: 100%">
    </section>


    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 11%;">About Us</h3>
                    @foreach($about as $abouts)
                    <p>  {{$abouts->title}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
