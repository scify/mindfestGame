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
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <img src="{{ asset('images/square_logo.png') }}" class="responsive-img"/>
        </div>
    </div>

    <div class="row msg">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <h5>Μάθε πόσο brain master είσαι!</h5>
        </div>
    </div>


    <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <a href="{!!URL::to('login/facebook')!!}"><img src="{{ asset('images/social/signin_fb.png') }}"
                                                           class="responsive-img"/></a>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <a href="{!!URL::to('login/twitter')!!}"><img src="{{ asset('images/social/signin_twitter.png') }}"
                                                          class="responsive-img"/></a>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3 ">
            <a href="{!!URL::to('login/googlePlus')!!}"><img src="{{ asset('images/social/signin_googlePlus.png') }}" class="responsive-img"/></a>
        </div>
    </div>
</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


