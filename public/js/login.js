// Update from click event on class
// ================================

$("#login_form").on( "submit", function(event) {
    event.preventDefault();
    var data = $("#login_form").serialize();
    console.log(url + "login/index/");

    $.ajax({
        url: url + "login/index/",
        type: 'POST',
        data: data,
        cache: false,
    }).done(function(result) {
            message = "Update message";
            $( "#login_response").html(result);
            console.log(result);
    });
});