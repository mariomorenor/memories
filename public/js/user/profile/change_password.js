
var $btn_see_actual_password = $("#btn_see_actual_password");
var $btn_see_password = $("#btn_see_password");
var $btn_see_password_confirmation = $("#btn_see_password_confirmation");

var $input_actual_password = $("#input_actual_password");
var $input_password = $("#input_password");
var $input_password_confirmation = $("#input_password_confirmation");


// BUTTON EVENTS

$btn_see_actual_password.on("click",function(e){
    toggle_button_see_password($(this),$input_actual_password);
});

$btn_see_password.on("click",function(e){
    toggle_button_see_password($(this),$input_password);
});

$btn_see_password_confirmation.on("click",function(e){
    toggle_button_see_password($(this),$input_password_confirmation);
});


// FUNCTIONS

function toggle_button_see_password($button, $input) {
    $button.empty();
    if ($input.attr("type") == "password") {
        $button.removeClass("btn-outline-info");
        $button.addClass("btn-outline-danger");
        $button.append('<i class="fas fa-eye-slash"></i>');
        $input.attr("type","text");
    }else{
        $button.removeClass("btn-outline-danger");
        $button.addClass("btn-outline-info");
        $button.append('<i class="fas fa-eye"></i>');
        $input.attr("type","password");
    }
    
    
}