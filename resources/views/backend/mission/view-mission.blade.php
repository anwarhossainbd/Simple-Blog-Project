@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Mission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Mission</li>
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


                                <h3>  Mission List

                                    @if($count<1)
                                    <a class="btn btn-success float-right" href="{{route('missions.add')}}"> <i class="fa fa-plus-circle"> </i> Add Mission </a>

                                    @endif
                                </h3>

                            </div>
                            <div class="card-body">


                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Image</th>
                                        <th>Title</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php($i=1 )

                                    @foreach($data as $mission )
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> <img src="{{asset($mission->image)}}" height="100px" width="100px"> </td>

                                            <td> {{$mission-> short_title}} </td>
                                            <td>
                                                <a href="{{route('missions.edit',['id'=>$mission->id ])}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"> </i></a>
                                                <a id="delete" href="{{route('missions.delete',['id'=>$mission->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i></a>
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

@endsection


