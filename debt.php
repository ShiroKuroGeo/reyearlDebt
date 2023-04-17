<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        font-family: cursive;
        font-size: 1.6rem;
    }
    body{
        background: rgba(219, 218, 218, 0.836);
    }
.container1{
    float:left;
    color:black;
    
    height:100vh;
    width:30%;
    background: rgba(235, 235, 235, 0.863);
    left:30vh;
    
}
img{
    height:250px;
    width:250px;
    border:3px solid black;
    border-radius:50%;
}

.left{
    margin-left:23vh;
    margin-top:30px;
    font-weight: bold;
}
.left .name{
    margin-left:30px;
    font-size:2rem;
}
.left .bio{
    font-size:1rem;
    
    
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  letter-spacing: 10px;
}

li a {
  display: block;
  width: 60px;
  background-color: #dddddd;
  color:black;
}
.bot{
    margin-right:100px;
}
/*right*/
.container2{
    float:right;
    color:red;
    
    height:34vh;
    width:69.5%;
    background:white;
    
}
/*calculator*/
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    
  }
  #app {
    display: flex;
    flex-direction: column;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    width:48vh;
    height:26vh;
    margin-top:20px;
  }
  input[type=number], select {
    margin: 5px;
    padding: 5px;
    border-radius: 5px;
    border: none;
    background-color: #fff;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    width:45vh;
    height:100px;
    text-align: center;
    font: 5em sans-serif;
    font-size: 40px;
    font-weight: lighter;
    
    
  }
  button {
    margin: 10px;
    padding: 5px 20px;
    border-radius: 5px;
    border: none;
    background-color: #0099ff;
    color: #fff;
    font-size: 30px;
    cursor: pointer;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    width:45vh;
    height:100px;
  }
  .result{
    text-align: center;
  }
.container2.1{
    border:2px solid red;
    height:65vh;
    width:;
    color:red;
}
@media only screen and (max-width: 900px) {

*{
  padding: 0;
  margin: 0;
}
body{
  
}
.choice{
  display: flex;
  justify-content: center;
  
}
h1{
  display: flex;
  justify-content: center;
  text-align: ;
  color: white;
  
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  
}

#app {
  display: flex;
  flex-direction: column;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  width:70vh;
  height:26vh;
}

input[type=number], select {
  margin: 5px;
  padding: 5px;
  border-radius: 5px;
  border: none;
  background-color: #fff;
  box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
  width:45vh;
  height:100px;
  text-align: center;
  font: 5em sans-serif;
  font-size: 40px;
  font-weight: lighter;
  
  
}

button {
  margin: 10px;
  padding: 5px 20px;
  border-radius: 5px;
  border: none;
  background-color: #0099ff;
  color: #fff;
  font-size: 30px;
  cursor: pointer;
  box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
  width:45vh;
  height:100px;
}

p {
  font-size: 20px;
  font-weight: bold;
  margin-top: 20px;
  font-size: 40px;
  text-align: center;
}
.container2{
  width:70vh;
  height:26vh;
  background:  #f2f2f2;
  color: red;

}
}
</style>
<body>
    <div class="container1">
        <div class="left">
        <div class="profilepic">
            <img src="profile.jpg" alt="">
            <input type="file">

        </div>
        <div class="name">name</div>
        <p class="bio">this is my bio asaasas</p>
        <br>
        <br>
        <ul>
  <li><a href="#home">Home</a></li>
  <br>
  <li><a href="#debts">Debts</a></li>
  <br>
  <li><a href="#contact">Contact</a></li>
  <br>
  <li><a href="#about">About</a></li>
  <br>
</ul>
        <br>
        
        <p class="bot">
            <p>description:(about the app)</p>
        </div>
        
    </div>
    <div class="container2">
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

  
    </div>
    </div>
    </div>
    
    <div class="container2.1">sas</div>
</body>
</html>