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
                            <li class="breadcrumb-item active"> Contact</li>
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


                                <h3>   Add Contact

                                    <a class="btn btn-success float-right" href="{{route('contact.view')}}"> <i class="fa fa-list"> </i>  Contact List</a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <form method="post" action="{{route('contact.store')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf



                                    <div class="col-sm-6 offset-3">
                                        <label>Address</label>
                                        <input type="text" name="address"   class="form-control">

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile_no"   class="form-control">

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Email</label>
                                        <input type="text" name="email"   class="form-control">

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook"   class="form-control">

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter"   class="form-control">

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Youtube</label>
                                        <input type="text" name="youtube"   class="form-control">

                                    </div>

                                    <div class="col-sm-6 offset-3">
                                        <label>Google Play</label>
                                        <input type="text" name="google_play"   class="form-control">

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








