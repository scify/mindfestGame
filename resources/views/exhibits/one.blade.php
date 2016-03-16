@extends('template.default')

@section('title')
Έκθεμα
@stop

@section('bodyContent')

<div class="exhibit">
    <div class="row">
        <div class="col s12 no-padding">
            <div class="img"
                 style="background: url('{{ URL::to('/images') }}/{{$exhibit->image_name}}') no-repeat; background-size: 100%;"></div>
        </div>
    </div>
    <div class="row info">
        <div class="col s12">
            <p></p>

            <h6>Κατηγορία εκθέματος: {{ $exhibit->category->name }}</h6>
            <h4 class="title">{{ $exhibit->name }} </h4>

            <p>{{$exhibit->description}}</p>

            <div class="center-align">
                <a href="{{ url('exhibits/'.$exhibit->id.'/question') }}" class="waves-effect waves-light btn">Πήγαινε στην ερώτηση</a>
            </div>
        </div>
    </div>
</div>
@stop
