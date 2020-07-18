@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage News and Events</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> News and Events</li>
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


                                <h3>   Add News and Events

                                    <a class="btn btn-success float-right" href="{{route('news_events.view')}}"> <i class="fa fa-list"> </i>  News and Events List</a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <form method="post" action="{{route('news_events.store')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-sm-6 offset-3">
                                        <label>Date</label>
                                        <input type="text" name="date"  id="datepicker" readonly placeholder="YYYY-MM-DD"
                                                 class="form-control">
{{--
                                        <textarea name="short_title" class="form-control" rows="4">  </textarea>
--}}
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

                                    <div class="col-sm-6 offset-3">
                                        <label>Short Title</label>
                                        {{--<input type="text" name="short_title"   class="form-control">--}}
                                        <textarea name="short_title" class="form-control" rows="3">  </textarea>

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Long Title</label>
                                        {{--<input type="text" name="short_title"   class="form-control">--}}
                                        <textarea name="long_title" class="form-control" rows="5">  </textarea>

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



                        <script>
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4',

                            });
                        </script>
                    </section>














                    <!-- right col -->
                </div>

            </div>
        </section>

    </div>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'YYYY-MM-DD',
        });
    </script>


@endsection







