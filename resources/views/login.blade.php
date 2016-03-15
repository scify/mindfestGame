@extends('template.default')

@section('title')
Login
@stop

@section('bodyContent')

<div class="row info">
    <div class="col s12">
        <a href="{!!URL::to('github')!!}">Login with Github</a>
    </div>
</div>
@stop
