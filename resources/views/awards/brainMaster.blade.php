<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> Brain Master | MindFest</title>

    <!-- Include css, js files-->
    @include('template.headerIncludes')
</head>


<body data-url="{!! URL::to('/') !!}">


<div class="container award center-align">
    <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3 logo">
            <img src="{{ asset('images/badges/brainMaster.png') }}" class="responsive-img"/>
        </div>
    </div>

    <div class="row msg">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <h5>Συγχαρητήρια!</h5>
            <h6>Κατέκτησες την <strong>{{ $question->exhibit->category->badge->name}}</strong> περιοχή του εγκεφάλου</h6>
            <h5>Είσαι πλέον <strong>Brain Master</strong>!</h5>
            <p><a href="{{ $question->exhibit->site_url }}" target="_blank">Μάθε περισσότερες πληροφορίες για το έκθεμα</a></p>
            <p><a href="{{ url('exhibits/scanOrCode') }}" class="waves-effect waves-light btn">Δες ξανα αλλο εκθεμα</a></p>
        </div>
    </div>

    <div class="row ">
        <div class="col s12 m6 offset-m3 l6 offset-l3">

            <p>Μοιράσου την επιτυχία σου στα social media!</p>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s2 offset-s3 m2 offset-m3 l2 offset-l3">
            <img src="{{ asset('images/social/facebook.png') }}" class="responsive-img"/>
        </div>
        <div class="col s2 m2 offset-m3 l2">
            <img src="{{ asset('images/social/twitter.png') }}" class="responsive-img"/>
        </div>
        <div class="col s2 m2 offset-m3 l2">
            <img src="{{ asset('images/social/googlePlus.png') }}" class="responsive-img"/>
        </div>
    </div>


</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


