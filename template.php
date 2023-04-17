<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            min-height:100vh;
            background: #0c192c;
        }
        .container{
            position: relative;
            width:100%;
            height:100vh;
            overflow:hidden;
        }
        .bubbles{
            position: relative;
            display:flex;
        }
        .bubbles span{
            width:30px;
            height:30px;
            background:#4fc3dc;
            margin:0 4px;
            border-radius:50%;
            box-shadow: 0 0 0 10px #4fc3dc44,
            0 0 50px #4fc3dc,
            0 0 100px #4fc3dc;
            animation:animate 15s linear infinite;
            animation-duration: calc(125s / var(--1))
        }
        .bubbles span:nth-child(even)
        {
            background:#ff2d75;
            box-shadow: 0 0 0 10px #ff2d7544,
            0 0 50px #4fc3dc,
            0 0 100px #4fc3dc;
        }
        @keyframes animate {
            0% {
                transform: translateY(100vh) scale(0);
            }
            100% {
                transform: translateY(-10vh) scale(1);
            }
        }
        .container-box{
            height:95%;
            width:90%;
            padding:10px;
            background:rgba(255,255,255,.10);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            margin:auto;
            border-radius:10px;
        }
        .container-box-col{
            display:flex;
            margin-left:10px;
            
        }
        .container-box-col .box1{
            height:300px;
            width:300px;
            
            margin:0 0 0 10px;
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:
        }
        .container-box-col .box1 .profile {
            border:2px solid red;
            height:50%;
            width:50%;
            border-radius:50%;
            margin-left:70px;
        }
        
        .container-box-col .box2{
            height:150px;
            width:2000px;
            
            margin:0 0 0 10px;
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:
        }
        .box3{
            height:500px;
            width:400px;
           
            margin:0 0 0 10px;
            margin-top:165px;
            float:right;        
            margin-top:-955px;
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:
        }
        .box4{
            height:795px;
            width:295px;
            
            margin:10px;
            margin-left:20px;
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:
        }
        .box5{
            
            text-align:center;
            margin-top:-945px;
            margin-left:463px;
            height:100px;
            width:1550px;
            
            
           
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:
        }
        .box6{
            text-align:center;
            
            height:834px;
            width:1550px;
            
            margin-top:10px;
            margin-left:463px;
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:
        }
        .box7{
            
            float:right;
            height:440px;
            width:400px;
            margin-top:-467px;
            margin-right:136px;
            background:rgba(255,255,255,.30);
            box-shadow:0 5px 15px rgba(0,0,0,0.25);
            border-radius:20px:

        }
        /*calculator*/
        
        
    </style>
</head>
<body>
    <div class="container">
        <div class="bubbles">
            <span style="--1:11;"></span>
            <span style="--1:12;"></span>
            <span style="--1:24;"></span>
            <span style="--1:10;"></span>
            <span style="--1:14;"></span>
            <span style="--1:23;"></span>
            <span style="--1:18;"></span>
            <span style="--1:16;"></span>
            <span style="--1:19;"></span>
            <span style="--1:20;"></span>
            <span style="--1:22;"></span>
            <span style="--1:25;"></span>
            <span style="--1:18;"></span>
            <span style="--1:21;"></span>
            <span style="--1:15;"></span>
            <span style="--1:13;"></span>
            <span style="--1:26;"></span>
            <span style="--1:17;"></span>
            <span style="--1:13;"></span>
            <span style="--1:18;"></span>
            <span style="--1:11;"></span>
            <span style="--1:12;"></span>
            <span style="--1:24;"></span>
            <span style="--1:10;"></span>
            <span style="--1:14;"></span>
            <span style="--1:23;"></span>
            <span style="--1:18;"></span>
            <span style="--1:16;"></span>
            <span style="--1:19;"></span>
            <span style="--1:20;"></span>
            <span style="--1:22;"></span>
            <span style="--1:25;"></span>
            <span style="--1:18;"></span>
            <span style="--1:21;"></span>
            <span style="--1:15;"></span>
            <span style="--1:13;"></span>
            <span style="--1:26;"></span>
            <span style="--1:17;"></span>
            <span style="--1:13;"></span>
            <span style="--1:18;"></span>
            <span style="--1:11;"></span>
            <span style="--1:12;"></span>
            <span style="--1:24;"></span>
            <span style="--1:10;"></span>
            <span style="--1:14;"></span>
            <span style="--1:23;"></span>
            <span style="--1:18;"></span>
            <span style="--1:16;"></span>
            <span style="--1:19;"></span>
            <span style="--1:20;"></span>
            <span style="--1:22;"></span>
            <span style="--1:25;"></span>
            <span style="--1:18;"></span>
            <span style="--1:21;"></span>
            <span style="--1:15;"></span>
            <span style="--1:13;"></span>
            <span style="--1:26;"></span>
            <span style="--1:17;"></span>
            <span style="--1:13;"></span>
            <span style="--1:18;"></span>
            <span style="--1:11;"></span>
            <span style="--1:12;"></span>
            <span style="--1:24;"></span>
            <span style="--1:10;"></span>
            <span style="--1:14;"></span>
            <span style="--1:23;"></span>
            <span style="--1:18;"></span>
            <span style="--1:16;"></span>
            <span style="--1:19;"></span>
            <span style="--1:20;"></span>
            <span style="--1:22;"></span>
            <span style="--1:25;"></span>
            <span style="--1:18;"></span>
            <span style="--1:21;"></span>
            <span style="--1:15;"></span>
            <span style="--1:13;"></span>
            <span style="--1:26;"></span>
            <span style="--1:17;"></span>
            <span style="--1:13;"></span>
            <span style="--1:18;"></span>
            <span style="--1:11;"></span>
            <span style="--1:12;"></span>
            <span style="--1:24;"></span>
            <span style="--1:10;"></span>
            <span style="--1:14;"></span>
            <span style="--1:23;"></span>
            <span style="--1:18;"></span>
            <span style="--1:16;"></span>
            <span style="--1:19;"></span>
            <span style="--1:20;"></span>
            <span style="--1:22;"></span>
            <span style="--1:25;"></span>
            <span style="--1:18;"></span>
            <span style="--1:21;"></span>
            <span style="--1:15;"></span>
            <span style="--1:13;"></span>
            <span style="--1:26;"></span>
            <span style="--1:17;"></span>
            <span style="--1:13;"></span>
            <span style="--1:18;"></span>
            <span style="--1:11;"></span>
            <span style="--1:12;"></span>
            <span style="--1:24;"></span>
            <span style="--1:10;"></span>
            <span style="--1:14;"></span>
            <span style="--1:23;"></span>
            <span style="--1:18;"></span>
            <span style="--1:16;"></span>
            <span style="--1:19;"></span>
            <span style="--1:20;"></span>
            <span style="--1:22;"></span>
            <span style="--1:25;"></span>
            <span style="--1:18;"></span>
            <span style="--1:21;"></span>
            <span style="--1:15;"></span>
            <span style="--1:13;"></span>
            <span style="--1:26;"></span>
            <span style="--1:17;"></span>
            <span style="--1:13;"></span>
            <span style="--1:18;"></span>

            
        </div>
        <div class="container-box">
            <div class="container-box-col">
                <div class="box1">
                    <h1>1</h1>
                    <div class="profile">
                        <img src="" alt="">
                    </div>
                    <div class="name">name</div>
                    <div class="id">store id:</div>
                </div>


                <div class="box2">
                    <h1>2</h1>
                    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">add store<i class="fa fa-search"></i></button>
    </form>
    <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button>
                </div>
                

            </div>
            <div class="box4">
                <h1>4</h1>
                <h2>Dashboard</h2>
                <form action="">
                    <nav>
                        <ul>
                            <li>home</li>
                            <li>about</li>
                            <li>contact</li>
                            
                        </ul>
                    </nav>
                </form>
            </div>


            <div class="box3">
                    <h1>3</h1>
                    <div class="container">
    <div id="app">
    <input type="number" v-model="num1">
    <select v-model="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" v-model="num2">
    <button @click="calculate">Calculate</button>
    <p v-if="result" class="result">{{ result }}</p>
  </div>
    </div>
    </div>
                </div>
                <div class="box5">
                    <h1>5</h1>
                    user name debt list 
                </div>


                <div class="box6"><h1>6</h1>
            <p>debt list input</p></div>
        </div>


        <div class="box7"><h1>7</h1></div>
    </div>
</body>
<script>
    var app = new Vue({
      el: '#app',
      data: {
        num1: null,
        num2: null,
        operator: 'add',
        result: null
      },
      methods: {
        calculate: function() {
          if (this.operator === 'add') {
            this.result = parseInt(this.num1) + parseInt(this.num2);
          } else if (this.operator === 'subtract') {
            this.result = parseInt(this.num1) - parseInt(this.num2);
          } else if (this.operator === 'multiply') {
            this.result = parseInt(this.num1) * parseInt(this.num2);
          } else if (this.operator === 'divide') {
            this.result = parseInt(this.num1) / parseInt(this.num2);
          }
          this.num1 = this.result;
          this.num2 = null;
        }
      }
    });
  </script>
</html>
