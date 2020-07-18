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
                            <li class="breadcrumb-item active">Profile</li>
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



                          <div class="card-body">
                             <div class="row">
                                 <div class="col-md-6 offset-3">
                                     <section class="content">
                                         <div class="container-fluid">
                                             <div class="row">
                                                 <div class="col-md-12">


                                                     <div class="card card-primary ">
                                                         <div class="card-body box-profile">
                                                             <div class="text-center">
                                                                 <img class="profile-user-img img-fluid img-circle"
                                                                      src="{{(!empty($user->image))? asset($user->image) : url('public/upload/anwar.jpg')  }}"


                                                                      alt="User profile picture">
                                                             </div>

                                                             <h3 class="profile-username text-center">{{$user->name}}</h3>

                                                            {{-- <img src="{{asset($user->image)}}" height="100px" width="150px">--}}

                                                             <p class="text-muted text-center">{{$user->address}}</p>

                                                            <table width="100%" class="table table-bordered">

                                                               <tr>
                                                                   <td> Mobile No: </td>
                                                                   <td> {{$user->mobile}} </td>
                                                               </tr>

                                                                <tr>
                                                                    <td> Email: </td>
                                                                    <td> {{$user->email}} </td>
                                                                </tr>

                                                                <tr>
                                                                    <td> Gender: </td>
                                                                    <td> {{$user->gender}} </td>
                                                                </tr>


                                                            </table>



                                                             <a href="{{route('profiles.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                                                         </div>

                                                     </div>



                                                 </div>

                                             </div>

                                         </div><!-- /.container-fluid -->
                                     </section>

                                 </div>
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

