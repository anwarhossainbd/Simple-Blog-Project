@extends('frontend.master')

{@section('content')

  {{--  <section class="banner_part">
        <img src="{{asset('public/frontend')}}/image/banner.jpg" style="width: 100%">
    </section>--}}



        <div class="container-fluid ml-5">
            <div class="row">
                <div class="col-sm-12">
                         <h2 class="text-center mt-4 text-success" > Details of {{$front->short_title}} </h2>

                   <table class="mx-auto">
                       <tr>
                           <td>   <div class="col-sm-7">
                                   {{ ($front->long_title)  }}

                               </div></td>
                           <td><div class="col-sm-5">
                                   <img src="{{asset($front->image)}}" class="float-right" height="300px"  width="300ox" ">


                               </div> </td>
                       </tr>
                   </table>



                </div>
            </div>
        </div>


@endsection

