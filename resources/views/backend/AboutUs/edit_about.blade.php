@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage About Us</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> About Us</li>
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


                                <h3>   Edit About Us

                                    <a class="btn btn-success float-right" href="{{route('about.view')}}"> <i class="fa fa-list"> </i>  About List</a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <form method="post" action="{{route('about.update')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id"  value="{{$editdata->id}}" class="form-control">


                                    <div class="col-sm-8 offset-2">
                                        <label>Title</label>

                                        <textarea name="title"  class="form-control" rows="3" > {{$editdata->title}} </textarea>

                                    </div>
                                    <br>









                                    <br>

                                    <div class="row">
                                        <div class="col-sm-2 offset-5 ">

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






