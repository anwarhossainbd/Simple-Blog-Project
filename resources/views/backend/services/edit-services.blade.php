@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Services</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Services</li>
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


                                <h3>   Edit Services

                                    <a class="btn btn-success float-right" href="{{route('services.view')}}"> <i class="fa fa-list"> </i>  ServicesList</a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <form method="post" action="{{route('services.update')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf





                                    <input type="hidden" name="id"  value="{{$editdata->id}}" class="form-control">




                                    <div class="col-sm-6 offset-3">
                                        <label>Short Title</label>
                                        {{--<input type="text" name="short_title"   class="form-control">--}}
                                        <textarea name="short_title" class="form-control" rows="3">{{$editdata->short_title}} </textarea>

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Long Title</label>
                                        {{--<input type="text" name="short_title"   class="form-control">--}}
                                        <textarea name="long_title" class="form-control" rows="5"> {{$editdata->long_title}} </textarea>

                                    </div>


                                    <br>




                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">

                                            <input type="submit"  value="Submit"  class="form-control bg-pink">
                                        </div>
                                    </div>

                                </form>



                            </div>
                        </div>




                    </section>














                    <!-- right col -->
                </div>

            </div>
        </section>

    </div>



@endsection









