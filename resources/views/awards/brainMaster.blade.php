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


<div class="container award center-align ">
    <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3 ">
            <img src="{{ asset('images/badges/brainMaster.png') }}" class="responsive-img square-logo"/>
        </div>
    </div>

    <div class="row msg">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <h5>Συγχαρητήρια!</h5>
            @if($question->exhibit->category->badge->name=='auditory')
            <h6>Απάντησες σωστά στην ερώτηση της κατηγορίας "Ακοή"!</h6>
            @else
            <h6>Ξεκλείδωσες {{ $question->exhibit->category->badge->name}} του εγκεφάλου σου!</h6>
            @endif
            <h5>Είσαι πλέον <strong>Brain Master</strong>!</h5>

            <p><a href="{{ $question->exhibit->site_url }}" target="_blank">Μάθε περισσότερες πληροφορίες για το
                    έκθεμα "{{ $question->exhibit->name }}"</a></p>

            <p><a href="{{ url('exhibits/scanOrCode') }}" class="waves-effect waves-light btn">Δες ξανα αλλο εκθεμα</a>
            </p>
        </div>
    </div>

    <div class="row ">
        <div class="col s12 m6 offset-m3 l6 offset-l3">

            <p>Μοιράσου την επιτυχία σου στα social media!</p>
        </div>
    </div>
    <div class="center-align">
        @if($user->socialUser->social_media=='facebook')
        <a href="{{ $shareLink['facebook'] }}" target="_blank">
            <img src="{{ asset('images/social/facebook.png') }}" class="responsive-img"/>
        </a>
        @elseif($user->socialUser->social_media=='twitter')
        <a href="{{ $shareLink['twitter'] }}" target="_blank">
            <img src="{{ asset('images/social/twitter.png') }}" class="responsive-img"/>
        </a>
        @elseif($user->socialUser->social_media=='googlePlus')
        <a href="{{ $shareLink['gplus'] }}" target="_blank">
            <img src="{{ asset('images/social/googlePlus.png') }}" class="responsive-img"/>
        </a>
        @endif
    </div>
</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


