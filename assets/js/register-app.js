/**
 * Created by PhpStorm.
 * User: john
 * Date: 12/01/19
 * Time: 22:45 PM
 */
$(function() {
    $("#registerForm").submit(function (e) {

        let dataToSend = {
            first_name: $("input#first_name").val(),
            last_name: $("input#last_name").val(),
            pseudo: $("input#pseudo").val(),
            email: $("input#email").val(),
            password: $("input#password").val(),
            society: $("input#society").val()
        };
        const successMessage = "Votre inscription a bien ete prise en compte. Nous vous tiendrons au courant quand l'application sera prête !";
        const errorMessage = "Une erreur est survenue, veuillez ré-essayer plus tard.";

        function buildAlert(message, type) {
            $('#success-register').html("<div class='alert alert-" + type + "'>");
            $("#success-register > .alert-" + type + "").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>")
                .append("<strong>" + message + "</strong>")
                .append('</div>');
        }

        $.ajax({
            type: "POST",
            url: "http://ec2-34-245-237-17.eu-west-1.compute.amazonaws.com/public/api/inscription/client",
            data: JSON.stringify(dataToSend),
            dataType: 'json',
            contentType: 'application/json',
            success: function (data) {
                buildAlert(successMessage, "success");
                document.location.href="index.html";
            },
            error: function(error) {
                error = error.responseJSON;
                let message = errorMessage;

                if (error) {
                    for (let i = 0; i < error.length; i++) {
                        if (error[i].property_path && error[i].property_path === "email") {
                            message = error[i].message
                        }
                    }
                }

                buildAlert(message, "danger");
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
});
