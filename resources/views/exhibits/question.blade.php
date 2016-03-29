@extends('template.default')

@section('title')
Ερώτηση
@stop

@section('bodyContent')

<div class="exhibit question">
    <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3 center-align">
            {{--
            <div class="img"
                 style="background: url('{{ URL::to('/images') }}/{{$exhibit->image_name}}') no-repeat; background-size: 100%;"></div>
            --}}
            <img src="{{ URL::to('/images') }}/{{$exhibit->image_name}}" class="responsive-img">
        </div>
    </div>
    <div class="row info">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <p></p>

            <h6>Κατηγορία εκθέματος: {{ $exhibit->category->name }}</h6>

            <h4 class="title">{{ $exhibit->name }} </h4>

            @if($alreadyAnswered)
            <p>Έχεις ήδη κατακτήσει το <strong>{{ $exhibit->category->badge->name }}</strong> κομμάτι του εγκεφάλου!</p>

            @else
            <p id="questionId" data-question-id="{{ $exhibit->question->id }}"><strong>{{
                    $exhibit->question->description }}</strong></p>

            @foreach($exhibit->question->answers as $i => $answer)
            <p><input name="answers[]" type="radio" value="{{ $answer->id }}" id="answer-{{$i}}"/>
                <label for="answer-{{$i}}">{{ $answer->description }}</label>
            </p>
            @endforeach

            <p class="error" id="hint" style="display:none;"></p>
            @endif

            <div class="right-align">
                <p><a href="{{ url('exhibits/'.$exhibit->id) }}">Πίσω στο έκθεμα</a></p>
            </div>
        </div>
    </div>
</div>
@stop


@section('footerScripts')
<script>

    //check if the selected answer is correct
    $("input[name='answers[]']").change(function () {
        var questionId = $("#questionId").attr('data-question-id');

        $.ajax({
            url: $("body").attr('data-url') + '/questions/' + questionId + '/checkAnswer',
            method: 'GET',
            data: {
                answer: $(this).val()
            },
            success: function (data) {
                if (data.hasError) {
                    $("#hint").text('Hint: ' + data.hint.description);
                    $("#hint").show();
                }
                else {
                    window.location.href = $("body").attr('data-url') + "/reward/" + data.questionId;
                }
            }
        });
    });
</script>
@append
