/**
 * Created by PhpStorm.
 * User: john
 * Date: 12/01/19
 * Time: 22:45 PM
 */
// TODO: Double check password ? faire une redirection vers la home si le formulaire s'envoi bien
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

        $.ajax({
            type: "POST",
            url: "http://ec2-34-245-237-17.eu-west-1.compute.amazonaws.com/public/api/inscription/client",
            data: JSON.stringify(dataToSend),
            dataType: 'json',
            contentType: 'application/json',
            success: function (data) {
                $('#success-register').html("<div class='alert alert-success'>");
                $('#success-register > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>")
                    .append("<strong>Votre inscription a bien ete prise en compte. Nous vous tiendrons au courant quand l'application sera prête !</strong>")
                    .append('</div>');
                // $('#registerForm').trigger("reset");
            },
            error: function(error) {
                error = error.responseJSON;
                var message = "Une erreur est survenue, veuillez ré essayer plus tard ";
                if (error)
                {
                    for (let i = 0; i < error.length; i++)
                    {
                        if (error[i].property_path && error[i].property_path === "email") {
                            message = error[i].message
                        }
                    }
                }
                $('#success-register').html("<div class='alert alert-danger'>")
                    .find('> .alert-danger')
                    .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>")
                    .append("<strong>" + message)
                    .append('</div>');

                // $('#registerForm').trigger("reset");
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
});
