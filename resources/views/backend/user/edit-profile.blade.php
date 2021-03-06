@extends('backend.layouts.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> profile</li>
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


                                <h3>   Edit Profile

                                    <a class="btn btn-success float-right" href="{{route('profiles.view')}}"> <i class="fa fa-list"> </i> Your Profile </a>
                                </h3>

                            </div>
                            <div class="card-body">


                                <form method="post" action="{{route('profiles.update')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf


                                   <div class="container-fluid">
                                       <div class="row">
                                           <div class="col-sm-12">

                                               {{--<div class="row">
                                       <div class="col-sm-4 ">
                                           <label>User Role</label>
                                           <select name="usertype" id="usertype" class="form-control">
                                               <option> ---Select User Role--- </option>
                                               <option value="Admin" {{ $user->usertype=='Admin'?'selected':''  }}> Admin  </option>
                                               <option value="User" {{ $edituser->usertype=='User'?'selected':''  }} > User </option>
                                           </select>
                                       </div>
                                   </div>
--}}


                                               <div class="row">
                                                   <div class="col-sm-4">
                                                       <label>Name</label>
                                                       <input type="text" name="name" value="{{$user->name}}" required class="form-control">
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <label>Email</label>
                                                       <input type="email" name="email" value="{{$user->email}}" class="form-control">
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <label>Mobile No.</label>
                                                       <input type="text" name="mobile" value="{{$user->mobile}}" class="form-control">
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <label>Address.</label>
                                                       <input type="text" name="address" value="{{$user->address}}" class="form-control">
                                                   </div>



                                                   <div class="col-sm-4 ">
                                                       <label>Gender</label>
                                                       <select name="gender" id="gender" class="form-control">
                                                           <option> ---Select Gender--- </option>
                                                           <option value="Male" {{ $user->gender=='Male'?'selected':''  }}> Male  </option>
                                                           <option value="Female" {{ $user->gender=='Female'?'selected':''  }} > Female </option>
                                                       </select>
                                                   </div>
                                               </div>
                                               <br>
                                               <div class="col-sm-4">
                                                   <img id="showImage" src="{{(!empty($user->image)) ? url($user->image):url('public/upload/anwar.jpg') }}" height="100px" width="100px">

                                               </div>

                                               <div class="col-sm-4">
                                                   <label>Image.</label>
                                                   <input type="file" name="image"  id="image" class="form-control">

                                               </div>
                                               <br>





                                               <div class="row">
                                                   <div class="col-sm-6 offset-3 ">

                                                       <input type="submit"  value="Submit"  class="form-control bg-pink">
                                                   </div>
                                               </div>



                                           </div>
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
                        required: "Please Select One ",

                    },

                    name: {
                        required: "Please enter your name",

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
        });
    </script>

@endsection


