@extends('frontend.master')

@section('content')



        <section class="nesw_events" style="background: #ddd">
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="padding-top: 15px;">
                        <h3 class="text-center" style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
                    </div>
                    <div class="col-md-12" style="padding-top: 15px;">
                        <table class="table table-striped table-bordered  table-hover table-md table-warning">
                            <thead class="thead-dark">
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1 ;
                            @endphp
                            @foreach($news as $newsevent)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{date('d-m-y',strtotime($newsevent->date))}}</td>
                                    <td><img src="{{asset($newsevent->image)}}" width="150px" height="140px"></td>
                                    <td>{{$newsevent->short_title}}</td>
                                    <td><a href="{{route('frontend_details',['id'=>$newsevent->id])}}" class="btn btn-info">Details</a></td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>






@endsection


