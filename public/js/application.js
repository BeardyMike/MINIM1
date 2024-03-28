// Update from inside AJAX called data form submit
// ===============================================

$("#modal").on('submit', '#form_name_id', function (event) {
    event.preventDefault();
    var data = $("#form_name_id").serialize();
    console.log(data);
    $.ajax({
        url: siteurl + "ajax/update/update-customer/",
        type: 'POST',
        data: data,
        cache: false,
        success: function success(result) {
            $( ".response__text" ).html('Sample messages setup');
            $( "#response").addClass("response--show");
            console.log(result);
            $( "#datapanel").html(result);
        }
    });
});

// Update from click event on class
// ================================

$(".class_name").on( "click", function() {
    var1 = this.data.id;
    var2 = this.dataset.rid;
    $.ajax({
        url: siteurl + "path_to_controller/" + var1 + "/" + var2,
        context: document.body
    }).done(function(result) {
            message = "Update message";
            $( ".response__text" ).html(message);
            $( "#response").addClass("response--show");
            console.log(result);
    });
});
