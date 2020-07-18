@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User v1</li>
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


                                <h3>   User List

                                    <a class="btn btn-success float-right" href="{{route('users.add')}}"> <i class="fa fa-plus-circle"> </i> Add User </a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Role</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @php($i=1 )

                                    @foreach($data as $singledata )
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$singledata->usertype}}</td>
                                        <td>{{$singledata->name}}</td>
                                        <td>{{$singledata->email}}</td>
                                        <td>
                                            <a href="{{route('users.edit',['id'=>$singledata->id ])}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"> </i></a>
                                            <a id="delete" href="{{route('users.delete',['id'=>$singledata->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i></a>
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
