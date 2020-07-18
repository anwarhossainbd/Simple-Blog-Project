@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Vission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Vission</li>
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


                                <h3>   Add Vission

                                    <a class="btn btn-success float-right" href="{{route('vission.view')}}"> <i class="fa fa-list"> </i>  Vission List</a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <form method="post" action="{{route('vission.store')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-sm-6 offset-3">
                                        <label>Title</label>
                                        {{--<input type="text" name="short_title"   class="form-control">--}}
                                        <textarea name="title" class="form-control" rows="4">  </textarea>

                                    </div>


                                    <br>


                                    <div class="col-sm-4 offset-4">
                                        <img id="showImage" src="{{(!empty($user->image)) ? url($user->image):url('public/upload/anwar.jpg') }}" height="100px" width="100px">

                                    </div>



                                    <div class="col-sm-4 offset-4">
                                        <label>Image.</label>
                                        <input type="file" name="image"  id="image" class="form-control">

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







