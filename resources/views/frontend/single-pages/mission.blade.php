@extends('frontend.master')

@section('content')


    <div class="container">
        <div class="row">

            <div class="col-sm-7 mt-5 mb-5">
                @foreach($mission as $missions )
                {{$missions->short_title}}
                @endforeach
            </div>

            <div class="col-sm-4 mt-5 mb-5 mr-5">
                @foreach($mission as $missions )

                    <img src="{{asset($missions->image)}}">
                @endforeach
            </div>


        </div>
    </div>
@endsection
