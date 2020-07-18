
@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Password</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Password</li>
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


                                <h3>   Edit Password

                                </h3>

                            </div>
                            <div class="card-body">



                                <form method="post" action="{{route('profiles.password.Update')}}" id="myForm">
                                    @csrf


                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">
                                            <label> Current Password</label>
                                            <input type="password" name="current_password" id="current_password" class="form-control">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>New  Password</label>
                                            <input type="password" name="new_password" id="new_password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>Confirm New Password</label>
                                            <input type="password" name="confirm_new_password"  class="form-control">
                                        </div>
                                    </div>

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

    <script>
        $(function () {

            $('#myForm').validate({
                rules: {


                    current_password: {
                        required: true,

                    },

                    new_password: {
                        required: true,
                        minlength:6
                    },

                    confirm_new_password: {
                        required: true,
                        equalTo: '#new_password'
                    },

                },
                messages: {

                    current_password: {
                        required: "Please Enter Current Password ",

                    },

                    new_password: {
                        required: "Please enter new Password",
                        minlength: "Your password must be at least 6 characters long"

                    },



                    confirm_new_password: {
                        required: "Please enter Confirm  new password",
                        equalTo: "Confirm password does not match"
                    },



                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

@endsection
