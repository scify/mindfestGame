@extends('template.default')

@section('title')
Ερώτηση
@stop

@section('bodyContent')

<div class="exhibit question">
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

            <p id="questionId" data-question-id="{{ $exhibit->category->question->id }}"><strong>{{
                    $exhibit->category->question->description }}</strong></p>

            @foreach($exhibit->category->question->answers as $i => $answer)
            <p><input name="answers[]" type="radio" value="{{ $answer->id }}" id="answer-{{$i}}"/>
                <label for="answer-{{$i}}">{{ $answer->description }}</label>
            </p>
            @endforeach

            <p class="error" id="hint" style="display:none;"></p>

            <div class="right-align">
                <a href="{{ url('exhibits/'.$exhibit->id) }}">Πίσω στο έκθεμα</a>
            </div>
        </div>
    </div>
</div>
@stop


@section('footerScripts')
<script>

    //check if the selected answer is correct
    $("input[name='answers[]']").change(function () {
        console.log($(this).val());
        var questionId = $("#questionId").attr('data-question-id');

        $.ajax({
            url: $("body").attr('data-url') + '/questions/' + questionId + '/checkAnswer',
            method: 'GET',
            data: {
                answer: $(this).val()
            }
            success: function (data) {
                if (data) {
                    $("#hint").text('Hint: ' + data.description);
                    $("#hint").show();
                }
                else {
                    $("#hint").hide();
                }
                console.log(data);
            }
        });
    });
</script>
@append
