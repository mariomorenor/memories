// VARIABLES

var $btn_update_user = $("#btn_update_user");
var $input_file_user_profile_image = $("#input_file_user_profile_image");

var $form_user_profile = $("#form_user_profile");

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
