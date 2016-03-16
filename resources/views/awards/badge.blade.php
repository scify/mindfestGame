<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> Congrats | MindFest</title>

    <!-- Include css, js files-->
    @include('template.headerIncludes')
</head>


<body data-url="{!! URL::to('/') !!}">


<div class="container award center-align">
    <div class="row">
        <div class="col s12 logo">
            <img src="{{ asset('images/badges/'.$question->category->badge->image_name) }}"/>
        </div>
    </div>

    <div class="row msg">
        <div class="col s12 ">
            <h5>Συγχαρητήρια!</h5>
            <h6>Κατέκτησες την <strong>{{ $question->category->badge->name}}</strong> περιοχή του εγκεφάλου</h6>
            <p><a href="#">Μάθε περισσότερες πληροφορίες για το έκθεμα</a></p>
            <p><a href="{{ url('exhibits/scanOrCode') }}" class="waves-effect waves-light btn">Συνέχισε</a></p>
        </div>
    </div>

    <div class="row ">
        <div class="col s12 ">

            <p>Μοιράσου την επιτυχία σου στα social media!</p>
        </div>
    </div>
    <div class="row social center-align">
        <div class="col s2 offset-s3">
            <img src="{{ asset('images/social/facebook.png') }}"/>
        </div>
        <div class="col s2">
            <img src="{{ asset('images/social/twitter.png') }}"/>
        </div>
        <div class="col s2">
            <img src="{{ asset('images/social/googlePlus.png') }}"/>
        </div>
    </div>


</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


