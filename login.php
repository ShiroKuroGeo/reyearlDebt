<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login To My DEBT System</title>
        <link rel="stylesheet" href="CSS/login.css">
    </head>
    <style>
        .cirleTop2 {
            height: 600px;
            width: 600px;
            border-radius: 50%;
            background-color: #550b72;
            position: absolute;
            top: 50vh;
            right: 1000px;
        }

        .cirleTop3 {
            height: 600px;
            width: 600px;
            border-radius: 50%;
            background-color: #c5ec58;
            position: absolute;
            top: 1vh;
            right: 1500px;
        }

        img {
            padding: 10px;
        }
    </style>
    <body>
        <div class="container-left"></div>
        <div class="container-right">
            <div class="cirleTop1"></div>
            <div class="cirleTop2"></div>
            <div class="cirleTop2"></div>
            <div class="cirleTop3"></div>
            <div class="greet">
                <h2>
                    Welcome to<br>
                    <span>DEBT STORE APP</span>
                </h2>
            </div>
            <div class="wrapper">
                <div class="form">
                    <form action="">
                        <div class="logo">
                            <img src="IMG/Shop.png" alt="">
                        </div>
                        <br>
                        <div>
                            <h2 class="log in">LOG IN</h2>
                        </div>
                        <div class="form">
                            <div>
                                <i class="fa fa-user icon"></i>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                            </div>
                            <div>
                                <i class="fa fa-key icon"></i>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                            </div>
                        </div>
                        </div>
                            <select id="host">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        <div class="btn">
                            <button type="button" id="btnLoginThisUser">Login</button>
                        </div>
                        <div class="signin">
                        <p>
                            You dont have an account? please <a href="register.php">Sign up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
</div>
</body>
    <script src="./JS/Jquery.js"></script>
    <script src="./JS/login.js"></script>
</html>