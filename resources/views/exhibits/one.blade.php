@extends('template.default')

@section('title')
Έκθεμα
@stop

@section('bodyContent')

<div class="exhibit">
    @if($exhibit->image_name!=null && $exhibit->image_name!="")
    <div class="row">
        <div class="col s12  m6 offset-m3 l6 offset-l3 center-align">
            <img src="{{ URL::to('/images') }}/{{$exhibit->image_name}}" class="responsive-img center-align">
        </div>
    </div>
    @endif
    <div class="row info">
        <div class="col s12  m6 offset-m3 l6 offset-l3">
            <p></p>

            <h6>Κατηγορία εκθέματος: {{ $exhibit->category->name }}</h6>
            <h4 class="title">{{ $exhibit->name }} </h4>

            <p>{!! $exhibit->description !!}</p>

            @if($alreadyAnswered)
            <p class="success">Έχεις ήδη απαντήσει σε αυτή την ερώτηση!</p>
            @endif

            <div class="center-align">
                @if(!$alreadyAnswered)
                <a href="{{ url('exhibits/'.$exhibit->id.'/question') }}" class="waves-effect waves-light btn">Πηγαινε στην ερωτηση</a>
                @endif
                <a href="{{ url('exhibits/scanOrCode') }}" class="waves-effect waves-light btn">Αλλο εκθεμα</a>
            </div>
        </div>
    </div>
</div>
@stop
