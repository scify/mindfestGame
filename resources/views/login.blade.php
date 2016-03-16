<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> Login | MindFest</title>

    <!-- Include css, js files-->
    @include('template.headerIncludes')
</head>


<body data-url="{!! URL::to('/') !!}">


<div class="container login center-align">
    <div class="row">
        <div class="col s12 logo">
            <img src="{{ asset('images/square_logo.png') }}"/>
        </div>
    </div>

    <div class="row msg">
        <div class="col s12 ">
            <h5>Μάθε πόσο brain master είσαι!</h5>
        </div>
    </div>


    <div class="row social">
        <div class="col s12">
            <a href="{!!URL::to('login/facebook')!!}"><img src="{{ asset('images/social/signin_fb.png') }}"/></a>
        </div>
    </div>
    <div class="row social">
        <div class="col s12">
            <a href="{!!URL::to('login/twitter')!!}"><img src="{{ asset('images/social/signin_twitter.png') }}"/></a>
        </div>
    </div>
    <div class="row social">
        <div class="col s12">
            <img src="{{ asset('images/social/signin_googlePlus.png') }}"/>
        </div>
    </div>
</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


