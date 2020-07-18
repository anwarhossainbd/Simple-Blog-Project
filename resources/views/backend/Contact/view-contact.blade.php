
@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Contact</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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


                                <h3>  Contact List


                                    @if($count<1)
                                    <a class="btn btn-success float-right" href="{{route('contact.add')}}"> <i class="fa fa-plus-circle"> </i> Add Contacts </a>
@endif

                                </h3>

                            </div>
                            <div class="card-body">


                                <table id="example1" class="table table-bordered table-hover ">
                                    <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th> Address</th>
                                        <th>Mobile</th>
                                        <th> Email</th>
                                        <th> Facebook</th>
                                        <th> Twitter</th>
                                        <th> Youtube</th>
                                        <th> Google Plus</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php($i=1 )

                                    @foreach($data as $contact )
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> {{$contact-> address}} </td>

                                            <td> {{$contact-> mobile_no}} </td>
                                            <td> {{$contact-> email}} </td>
                                            <td> {{$contact-> facebook}} </td>
                                            <td> {{$contact-> twitter}} </td>
                                            <td> {{$contact-> youtube}} </td>
                                            <td> {{$contact-> google_play}} </td>
                                            <td>
                                                <a href="{{route('contact.edit',['id'=>$contact->id ])}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"> </i></a>
                                                <a id="delete" href="{{route('contact.delete',['id'=>$contact->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i></a>
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




