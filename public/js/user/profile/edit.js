// VARIABLES

var $btn_update_user = $("#btn_update_user");
var $btn_change_password = $("#btn_change_password");

var $input_file_user_profile_image = $("#input_file_user_profile_image");

var $form_user_profile = $("#form_user_profile");
var $form_change_user_password = $("#form_change_user_password");

var $img_user_profile_img = $("#img_user_profile_img");

// BUTTONS EVENTS

$btn_update_user.on("click",function(e){
    Swal.fire({
        icon:"question",
        title:"Confirmar Cambios?",
        showCancelButton:true
    }).then((result)=>{
        if(result.value){
            update_user();
        }
    });
});

$btn_change_password.on("click",function (e) {  
    Swal.fire({
        icon:"question",
        title:"Confirmar Cambios?",
        showCancelButton:true
    }).then((result)=>{
        if(result.value){
            change_password();
        }
    });
});

// INPUT EVENTS

$input_file_user_profile_image.on("change",function (e) {  
    
    let reader = new FileReader();

    reader.onload = function (e) {  
        $img_user_profile_img.attr("src",e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

});

// FUNCTIONS

function update_user() {
    $form_user_profile.submit();
}

function change_password() {
    $form_change_user_password.submit();
}