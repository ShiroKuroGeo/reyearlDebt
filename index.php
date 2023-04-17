<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<style>
   *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;

}
.container{
    
    background:black;
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding:600px;
    
   }
   nav{
    color:white;
    float:right;
    margin-top:-500px;
    word-spacing:10px;
    font-size:1.3rem;
    letter-spacing:10px;
    
   }
   li {
  display: inline;
}
nav li:hover{
    color:rgb(255,165,0);
}
.row{
    color:white;
    display:flex;
    height:88%;
    align-items:center;
}
.col{
    flex-basis:50%;
}
   h1{
    color:rgb(255,165,0);
    font-size:100px;
    margin-top:-200px;
    
   }
   p{
    color:white;
    font-size:17px;
    line-height:20px;
   }
   button{
    width:180px;
    color:000;
    font-size:20px;
    padding:12px 0;
    background: #fff;
    border:0;
    border-radius:20px;
    outline:none;
    margin-top:30px;
   }
   button:hover{
    color:white;
    background:rgb(255,165,0);
   }
   .card{
    width:300px;
    height:450px;
    display:inline-block;
    border-radius:10px;
    padding:20px 25px;
    box-sizing:border-box;
    cursor:pointer;
    margin:20px 30px;
    background:rgb(255,165,0);
    line-height:20px;
    color:black;
    transition: transform 0.5s;
   }
   .card p{
    margin-top:10px;
   }
   .card:hover{
    transform:translateY(-10px);
   }
   /*container 2*/
   .container2{
    background:lightblue;
    height: 500px; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding:600px;
   }
   .container2 .row{
    
    height:1200px;
    width:2800px;
    margin-top:-300px;
   
   }
   .container2 .row .col1{
    background:white;
    height:100%;
    width:150px;
    border-radius:10px 0 0 10px;
   }
   .container2 .row .col2{
    background:#617ed4;
    height:100%;
    width:100px;
    border-radius:0 10x 10px 0;
   }
   .container2 form input  h1{
    color:black;
    
   }
   label{
    color:black;
   }
   
   
   
</style>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href=""></a>HOME</li>
                    <li><a href=""></a>ABOUT</li>
                    <li><a href=""></a>CONTACT</li>
                    <li><a href=""></a>SERVICE</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col">
                <h1>"Debt Store App"</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button type="button">Get Started</button>
            </div>
           
            <div class="col">
                <div class="card">
                    <h2>CARD 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card">
                    <h2>CARD 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card">
                    <h2>CARD 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card">
                    <h2>CARD 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card">
                    <h2>CARD 5</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card">
                    <h2>CARD 6</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        </div>
    </div>
    
   </div>
   <div class="container2">
    <div class="row">
        <div class="col col1">
            <h1>CONTACT US</h1>
            <form action="">
                    <label for="">Name</label>
                    <input type="text"><br>
                    <label for="">Phone Number</label>
                    <input type="text"><br>
                    <label for="">Email</label>
                    <input type="text"><br>
                    <label for="">message</label>
                    <input type="text"><br>

            </form>

        </div>
        <div class="col col2">

        </div>
    </div>
   </div>
    
</body>
    <script src="JS/axios.js"></script>
    <script src="JS/vue.3.js"></script>
    <script src="JS/middleWare.js"></script>
</html>