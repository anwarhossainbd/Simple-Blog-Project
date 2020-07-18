
@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage News and Event</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">News and Event</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">

                        <div class="card">
                            <div class="card-header">


                                <h3>  News and Event List


                                        <a class="btn btn-success float-right" href="{{route('news_events.add')}}"> <i class="fa fa-plus-circle"> </i> Add News&Events </a>


                                </h3>

                            </div>
                            <div class="card-body">


                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th> Date</th>
                                        <th>Image</th>
                                        <th> Short Title</th>
                                        <th> Long Title</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php($i=1 )

                                    @foreach($data as $news_events )
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> {{$news_events-> date}} </td>
                                            <td> <img src="{{asset($news_events->image)}}" height="100px" width="100px"> </td>

                                            <td> {{$news_events-> short_title}} </td>
                                            <td> {{$news_events-> long_title}} </td>
                                            <td>
                                                <a href="{{route('news_events.edit',['id'=>$news_events->id ])}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"> </i></a>
                                                <a id="delete" href="{{route('news_events.delete',['id'=>$news_events->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i></a>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>


                                </table>







                            </div>
                        </div>





                    </section>
                    <!-- right col -->
                </div>

            </div>
        </section>
        <!-- Main content -->

        <!-- /.content -->
    </div>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'YYYY-MM-DD',
        });
    </script>

@endsection


