<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<style>
    .cirleTop2{
    height: 600px;
    width: 600px;
    border-radius: 50%;
    background-color: #550b72;
    position: absolute;
    top: 50vh;
    right: 1000px;

}
.cirleTop3{
    height: 600px;
    width: 600px;
    border-radius: 50%;
    background-color: #c5ec58;
    position: absolute;
    top: 1vh;
    right: 1500px;

}
img{
    
    padding:10px;
}
</style>
<body>
<body>
    <div id="app">
        <div class="container-left">left</div>
    
        <div class="container-right">
        <div class="cirleTop1">
        </div>
        <div class="cirleTop2">
        </div>
        <div class="cirleTop2">
        </div>
        <div class="cirleTop3">
        </div>
           <div class="greet">
           <h2>Welcome to<br>      <span>DEBT STORE APP</span></h2>
           </div>
           
           <div class="wrapper">
           <div class="form">
               <form @submit="registerFunction" class="thisUserForm">
                    <div class="logo"><img src="IMG/pic1.jpeg" alt=""></div>
                      <div>
                      <h2 class="log in">
                           Register for free
                       </h2>
                      </div>
                        <div>
                            <i class="fa fa-user icon"></i>
                            <input type="text" id="firstname" placeholder="Enter Firstname"><br>
                        </div>
                        <div>
                            <i class="fa fa-user icon"></i>
                            <input type="text" id="lastname" placeholder="Enter Lastname"><br>
                        </div>
                        <div>
                            <i class="fa fa-user icon"></i>
                            <input type="text" id="username" placeholder="Enter username" required><br>
                        </div>
                        <div>
                            <i class="fa fa-user icon"></i>
                            <input type="email" id="email" placeholder="Enter email"><br>
                        </div>
                        <div>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="password" placeholder="Password"><br>
                        </div>
                        <div>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="confirmPassword" placeholder="Confirm Password"><br>
                        </div>
                       </div>
                        <select id="host">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                       <button type="button" id="btnRegisterUser">Register</button>
                    <div class="signin">
                        <p>Do you have an account? <a href="login.php">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    </div>
</body>
</body>
    <script src="./JS/Jquery.js"></script>
    <script src="./JS/register.js"></script>
</html>