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


                                <h3>   Add User

                                    <a class="btn btn-success float-right" href="{{route('users.view')}}"> <i class="fa fa-list"> </i> User List </a>
                                </h3>

                            </div>
                            <div class="card-body">



                                <form method="post" action="{{route('users.store')}}" id="myForm">
                                    @csrf


                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>User Role</label>
                                            <select name="usertype" id="usertype" class="form-control">
                                                <option> ---Select User Role--- </option>
                                                <option value="Admin"> Admin  </option>
                                                <option value="User"> User </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>Name</label>
                                            <input type="text" name="name" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-6 offset-3 ">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password2"  class="form-control">
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

    <script type="text/javascript">
       /* $(function () {*/

         $(document).ready(function () {

             $('#myForm').validate({
                 rules: {

                     usertype: {
                         required: true,
                     },

                     name: {
                         required: true,
                     },

                     email: {
                         required: true,
                         email: true,
                     },
                     password: {
                         required: true,
                         minlength: 6
                     },

                     password2: {
                         required: true,
                         equalTo: '#password'
                     },

                 },
                 messages: {

                     usertype: {
                         required: "Please enter Confirm password",

                     },

                     name: {
                         required: "Please enter Confirm password",
                     },


                     email: {
                         required: "Please enter a email address",
                         email: "Please enter a vaild email address"
                     },
                     password: {
                         required: "Please enter your password",
                         minlength: "Your password must be at least 6 characters long"
                     },

                     password2: {
                         required: "Please enter Confirm password",
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


         })



    </script>

@endsection
