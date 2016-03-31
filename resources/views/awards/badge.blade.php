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


<div class="container award center-align ">
    @if(sizeof($badges)>0)
    <div class="badges">
            <img src="{{ asset('images/badges/no_badge.png') }}"
                 class="responsive-img1 baseBadge"/>
            @foreach($badges as $badge)
            <img src="{{ asset('images/badges/'.$badge) }}"
                 class="responsive-img1 overlayBadge"/>
            @endforeach
    </div>
    @endif

    <div class="row msg">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <h5>Συγχαρητήρια!</h5>
            <h6>Κατέκτησες την <strong>{{ $question->exhibit->category->badge->name}}</strong> περιοχή του εγκεφάλου
            </h6>

            <p><a href="{{ $question->exhibit->site_url }}" target="_blank">Μάθε περισσότερες πληροφορίες για το έκθεμα</a></p>

            <p><a href="{{ url('exhibits/scanOrCode') }}" class="waves-effect waves-light btn">Συνεχισε</a></p>
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
        @elseif($user->socialUser->social_media=='google')
            <a href="{{ $shareLink['google'] }}" target="_blank">
            <img src="{{ asset('images/social/googlePlus.png') }}" class="responsive-img"/>
            </a>
        @endif
    </div>


</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


