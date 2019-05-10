/**
 * Created by Vinay Jaiswal.
 * User: Toyota
 * Date: 26-02-2019
 * Time: 12:04
 */


//function to validate email
function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}


function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
        return false;
    } else {
        return true;
    }
}

//Show div
function showDiv(id){
    $('#'+id).show();
}

//Hide div
function hideDiv(id){
    $('#'+id).hide();
}


$( function () {

    $('#customDivSpecial').click(function() {
        $("#otherDivSpecial").toggle(this.checked);
    });

    $('#otherdeploy').click(function() {
        $("#otherDiv").toggle(this.checked);
    });

    //User registration
    $("#cio_data").submit( function ( e ) {
        e.preventDefault();

        /*var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var emp_id = $('#emp_id').val();
        var mobile = $('#mobile').val();
        var email_id = $('#email_id').val();*/
        var validate = true;

        /*if ( first_name == '' || last_name == '' || emp_id == '' || mobile == '' || email_id == '') {
            alert("Please fill all the details");
            validate = false;
            return false;
        }
        if( IsEmail( email_id ) == false ){
            alert("Please enter valid email address");
            validate = false;
            return false;
        }*/

        //Validation
        if($("#number_of_nominator").val() == "") {
            $("#number_of_nominator").focus();
            $("#number_of_nominator").css('border-color','#F00');
            validate = false;
        } else if(isNaN($("#number_of_nominator").val()) || $("#number_of_nominator").val().length < 10) {
            $("#number_of_nominator").focus();
            $("#number_of_nominator").css('border-color','#F00');
            validate = false;
        }  else {
            $("#number_of_nominator").css('border-color','#999999');
        }

        var formData = new FormData($(this)[0]);

        if (validate == true) {
            $.ajax({
                type: "POST",
                url: "config/server-response.php",
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                //data: form.serialize(),
                success: function (data) {
                    var data = JSON.parse(data);
                    if (data.success) {
                        $("#success_msg").show();
                        setTimeout(function(){

                            //location.reload();
                            location.href = "thank-you.php";
                        }, 1000);
                    } else {
                        $("#error_msg").show();
                        setTimeout(function(){ location.reload(); }, 1000);
                    }
                }
            });
        }
    });








}); // script end here

