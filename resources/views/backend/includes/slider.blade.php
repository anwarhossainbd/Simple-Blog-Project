
@php

$prefix =Request::route()->getprefix() ;
$route = Route::current()->getName();

@endphp







<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('public/backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ !empty(Auth::user()->image)? asset(Auth::user()->image)  :asset('public/backend/dist/img/user2-160x160.jpg ') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                @if(Auth::user()->usertype=='Admin')

                <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Manage User
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.view')}}" class="nav-link {{$route=='users.view'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View User </p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif


                    <li class="nav-item has-treeview   {{($prefix=='/Profile')?'menu-open':''}} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Manage Profile
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('profiles.view')}}" class="nav-link {{$route=='profiles.view'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Your Profile</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('profiles.password.change')}}" class="nav-link {{$route=='profiles.password.change'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>

                    </ul>
                </li>

                    <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Logo
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('logos.view')}}" class="nav-link {{$route=='logos.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Logo </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}}  ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Slider
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('sliders.view')}}" class="nav-link {{$route=='sliders.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Slider </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{($prefix=='/missions')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Missions
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('missions.view')}}" class="nav-link {{$route=='missions.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Mission </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview  {{($prefix=='/Vission')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Vission
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('vission.view')}}" class="nav-link {{$route=='vission.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Vission </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                 {{--   <li class="nav-item has-treeview {{($prefix=='/News_events')?'menu-open':''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Vission
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('vission.view')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Vission </p>
                                </a>
                            </li>

                        </ul>
                    </li>--}}

                    <li class="nav-item has-treeview  {{($prefix=='/News_events')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage News_events
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('news_events.view')}}" class="nav-link {{$route=='news_events.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View News_events </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{($prefix=='/Services')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Services
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('services.view')}}" class="nav-link {{$route=='services.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View services </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview  {{($prefix=='/contact')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Content
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('contact.view')}}" class="nav-link  {{$route=='contact.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Content </p>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{($prefix=='/About-Us')?'menu-open':''}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Manage Abouts Us
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('about.view')}}" class="nav-link {{$route=='about.view'?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View About us </p>
                                </a>
                            </li>

                        </ul>
                    </li>






            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
