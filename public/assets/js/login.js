$(document).ready(function () {
    $('#user_login_form').validate({
        /* rules:{
            "username":"required",
            "password":"required"
        },
        messages:{
            "username":"Please enter username",
            "password":"Please enter password"

        } */
        submitHandler:function(form){
            //var btn = $('#user_login_form').loading('set');
            $.ajax({
                type: "POST",
                url: $('#user_login_form').attr('data-url'),
                data: new FormData($('#user_login_form')[0]),
                contentType: false,
				cache: false,
				processData: false,
                //dataType: "json",
                success: function (r) {
                    alert(r);
                    /* if(r.status=='success'){
                        window.location.href=r.url;
                    }else{
                        console.log(r.status);
                    } */
                    //return false;
                }
            }).always(function () {
                //btn.loading('reset');
            });
            return false;

        }
    });

});