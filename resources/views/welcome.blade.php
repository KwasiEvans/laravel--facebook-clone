<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><!--Responsive-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--Internet Explorer Compatibility-->
        <title>Facebook - log in or sign up</title>
        <link rel="stylesheet" href="{{asset('auth_asset/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('auth_asset/css/all.min.css')}}"> <!-- Font Awesome library-->
        <link rel="stylesheet" href="{{asset('auth_asset/css/style.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--<link rel="shortcut icon" href="favicon.ico">--><!--FavIcon-->
    </head>
    <body>
       <!--Start: Upper Bluebar-->
        <div class="upper-bluebar">
            <div class="container">
               <div class="row">
                   <div class="col-2 col-md-4">
                        <div class="facebook-image">
                            <img src="{{asset('auth_asset/img/facebook.jpg')}}" alt="Go to Facebook home" class="img-fluid">
                        </div>
                   </div>
                    @include('auth.login')
                </div>
            </div>
        </div>
        <!--End: Upper Bluebar-->
        
        
        <!--Start: Middle Part-->
        <div class="middle-part">
            <div class="container">
                <div class="row">
                    <div class="content col">
                        <p>Facebook helps you connect and share with the people in your life.</p>
                        <div class="connecting-people-img"><img src="{{asset('auth_asset/img/facebook-connecting-people.png')}}" alt="Connecting people" class="img-fluid"></div>
                    </div>
                     @include('auth.register')
                </div>
            </div>
        </div>
        <!--End: Middle Part-->
        
        
        <!--Start: Footer-->
        <footer>
            <div class="container">
                <ul class="language list-unstyled">
                    <li><a href="#">English (UK)</a></li>
                    <li><a href="#">العربية</a></li>
                    <li><a href="#">Français (France)</a></li>
                    <li><a href="#">Italiano</a></li>
                    <li><a href="#">Deutsch</a></li>
                    <li><a href="#">Русский</a></li>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">Bahasa Indonesia</a></li>
                    <li><a href="#">Türkçe</a></li>
                    <li><a href="#">Português (Brasil)</a></li>
                    <li><a href="#">हिन्दी</a></li>
                    <li><a href="#"><i class="far fa-lg fa-plus-square"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <hr>
                <ul class="others list-unstyled">
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">Messenger</a></li>
                    <li><a href="#">Facebook Lite</a></li>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">People</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Page categories</a></li>
                    <li><a href="#">Places</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Marketplace</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">Fundraisers</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Create ad</a></li>
                    <li><a href="#">Create Page</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">AdChoices</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="copyright">Facebook © 2019</div>
            </div>
        </footer>
        <!--End: Footer-->
        
        
        <script src="{{asset('auth_asset/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('auth_asset/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('auth_asset/js/scripts.js')}}"></script>
    </body>
</html>