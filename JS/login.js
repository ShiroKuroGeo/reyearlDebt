// $(document).ready(function(){
//     let tmp = localStorage.getItem('isloggedin');
//     if (tmp == "200") {
//         window.location.href = "./Dashboard.html";
//     }
// });

$('#btnLoginThisUser').click(function(){
    checkIfValid();
}); 

var checkIfValid =()=>{
    if ($('#username').val() != "" && $('#password').val() != "") {
        if($('#host').val() == "1"){
            doLoginThisUserAdmin();
        }else if($('#host').val() == "2"){
            doLoginThisUserUser();
        }
    }else{
        alert("Please fill-in empty field(s)");
    }
}

var doLoginThisUserAdmin =()=>{
    $.ajax({
        type: "POST",
        url: "./sourceCode/router.php",
        data: {choice:'doLoginThisUser',Username:$('#username').val(),Password:$('#password').val(),Role:$('#host').val()},
            success: function(data){
                if (data == "1") {
                    localStorage.setItem('isloggedin','200');
                    window.location.href = "./adminhomep.php";
                }else{
                    alert('No data has been found');
                }
            }, 
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            }
    });
}

var doLoginThisUserUser =()=>{
    $.ajax({
        type: "POST",
        url: "./sourceCode/router.php",
        data: {choice:'doLoginThisUser',Username:$('#username').val(),Password:$('#password').val(),Role:$('#host').val()},
            success: function(data){
                if (data == "2") {
                    localStorage.setItem('isloggedin','200');
                    window.location.href = "./userhomep.php";
                }else{
                    alert('No data has been found');
                }
            }, 
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            }
    });
}