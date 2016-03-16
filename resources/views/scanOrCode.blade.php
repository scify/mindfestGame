<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> Αναζήτηση εκθέματος | MindFest</title>

    <!-- Include css, js files-->
    @include('template.headerIncludes')
</head>


<body data-url="{!! URL::to('/') !!}">


<div class="container scanOrCode center-align">
    <div class="row">
        <div class="col s12 logo">
            <img src="{{ asset('images/square_logo.png') }}"/>
        </div>
    </div>

    <div class="row ">
        <div class="col s12 ">
            <h5>Είσαι έτοιμος για την επόμενη κατάκτηση;</h5>

            <p>Σκάναρε ένα QR code</p>
            <h4>ή</h4>

            <p>εισήγαγε έναν κωδικό εκθέματος</p>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12 ">
            <input id="exhibitCode" type="text">

            <p><a class="waves-effect waves-light btn viewExhibit">Πάμε!</a></p>

            <p class="error" style="display:none;" id="error"></p>
        </div>
    </div>


</div>


@include('template.footerIncludes')

<script>
    //check if the exchibit code exists
    $(".viewExhibit").click(function () {

        if ($("#exhibitCode").val()) {

            $.ajax({
                url: $("body").attr('data-url') + '/exhibits/getByCode',
                method: 'GET',
                data: {
                    code: $("#exhibitCode").val()
                },
                success: function (data) {
                    if (data) {
                        window.location.href = $("body").attr('data-url') + "/exhibits/" + data.id;
                    }
                    else {
                        $("#error").html("<small>Δεν υπάρχει έκθεμα με αυτόν τον κωδικό!</small>");
                        $("#error").show();
                    }
                }
            });
        } else {
            $("#error").html("<small>Συμπληρώστε κωδικό!</small>");
            $("#error").show();
        }
    });
</script>


</body>
</html>


