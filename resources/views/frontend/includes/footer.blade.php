<section class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 style="color: white">Contact Us</h4>
                @foreach($contact as $con)
                <p style="color: white">Address: {{$con->address}}, Mobile: {{$con->mobile_no}}, Email:  {{$con->email}}</p>

            </div>
            <div class="col-md-4">
                <h4 style="color: white">Follow Us</h4>
                <div class="social">
                    <ul>
                        <li><a href="{{$con->facebook}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCiO1LbMZH6E4vSEoaqS5erA/playlists" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        @endforeach
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="color: white;padding: 50px 0px 10px 0px;">
                    Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @ Popularsoft
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="gotoup">
                <img src="{{asset('public/frontend')}}/image/scrl.jpg" style="width: 40px; height: 40px;">
            </div>
        </div>
    </div>
</div>
