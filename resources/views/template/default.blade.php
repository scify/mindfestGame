<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> @yield('title') | MindFest</title>

    <!-- Include css, js files-->
    @include('template.headerIncludes')
</head>


<body data-url="{!! URL::to('/') !!}">

<div>
    <div class="row">
        <div class="col s12 logo">
            <img src="{{ asset('images/logo.png') }}"/>
        </div>
    </div>
    @yield('bodyContent')
</div>


@include('template.footerIncludes')
@yield('footerScripts')
</body>
</html>


