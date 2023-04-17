$('#btnRegisterUser').click(function(){
    checkIfValid();
}); 

var checkIfValid =()=>{
    if ($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#password').val() != "" && $('#confirmPassword').val() != "") {
        if($('#password').val() == $('#confirmPassword').val()){
            doRegisterThisUser();
        }else{
            alert('Password does not match!');
        }
    }else{
        alert("Please fill-in empty field(s)");
    }
}

var doRegisterThisUser =()=>{
    $.ajax({
        type: "POST",
        url: "./sourceCode/router.php",
        data: {choice:'registerThisUser',Firstname:$('#firstname').val(),Lastname:$('#lastname').val(),Username:$('#username').val(),Email:$('#email').val(),Password:$('#password').val(),Role:$('#host').val()},
        success: function(data){
            if (data == "200"){
                window.location.href = "./login.php";
            }else{
                alert(data);
            }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}