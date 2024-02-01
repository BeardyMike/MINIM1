// Update from inside AJAX called data form submit
// ===============================================
$(document).ready(function(){
    // Demo AJAX load
    $.ajax({
        url: url + "ajax/read/get-homepage/",
        context: document.body
    }).done(function(result) {
        console.log(result);
        $( "#ajaxresponse").html(result);
    });
});