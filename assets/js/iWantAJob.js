$(function () {

    $("input, textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour

            // get values from FORM
            let fname = $("input#fname").val();
            let lname = $("input#lname").val();
            let email = $("input#email").val();
            let phone = $("input#phone").val();
            let car = $("input#car").val();
            let birth = $("input#birth").val();
            let identity = $("input#identity").val();

            $.ajax({
                url: "php/iWantAJob.php",
                type: "POST",
                data: {
                    fname: fname,
                    lname: lname,
                    email: email,
                    phone: phone,
                    car: car,
                    birth: birth,
                    identity: identity
                },
                cache: false,
                success: function () {
                    // Success message
                    $('#success-mail').html("<div class='alert alert-success'>");
                    $('#success-mail > .alert-success')
                        .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>")
                        .append("<strong>Votre message a bien été envoyé.</strong>")
                        .append('</div>');

                    //clear all fields
                    $('#jobForm').trigger("reset");
                },
                error: function () {
                    // Fail message
                    $('#success-mail').html("<div class='alert alert-danger'>");
                    $('#success-mail > .alert-danger')
                        .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>")
                        .append("<strong>Désolé, il semble que le serveur mail ne soit pas disponible. Réessayez plus tard !")
                        .append('</div>');

                    //clear all fields
                    $('#jobForm').trigger("reset");
                },
            })
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function () {
    $('#success-mail').html('');
});