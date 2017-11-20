 <html>
 <head>
   <style>
   body {
   	margin:0 auto;
   	font-size:100%;
       background: url("./img/Jn3y6mZ.jpg");
       background-repeat: no-repeat;
       background-size: 100% 100%;
       background-origin: content-box;
   	}
    h1 {
      font-size: 100px;
      font-weight: 300;
      font-family:fantasy;
      color:#000066;
      text-decoration: underline;
      text-align: center;
      padding-top: 100px;
      margin-bottom: 100px;
    }
    h2{
      margin-left: 100;
      font-size: 28;
      font-family: fantasy;
    }


    label {

      font-family: fantasy;
      font-size: 24;
    }
    input[type=text]{
      width: 250px;
      height: 39px;
      position: relative;
      border-radius: 20px ;
      background-color: #eee;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09);
      border: solid 5px #cbc9c9;
      margin-left: 25px;
      margin-top: 25px;
     font-size: 18;
    }
    input[type=password]{
      width: 250px;
      height: 39px;
      position: relative;
      border-radius: 20px ;
      background-color: #eee;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09);
      border: solid 5px #cbc9c9;
      margin-left: 30px;
      margin-top: 25px;

    }
    #reglogin
    {
      width: 250;
      height: 40;
      position: relative;
      font-size: 24;
      color:black;
      background-color: #eee;
      margin-left: 30px;
      margin-top: 25px;
      border: solid 5px #cbc9c9;
      border-radius: 15px;

    }
    #reglogin:hover
    {
        border-radius: 20px;
        color: #eee;
        background-color: #0000FF
    }
    form
    {
      margin-left: 400px;
     margin-left: 500px;
     margin-top:100px;
    }
   </style>

 </head>
 <body>
<h1>Tumblelogs</h1>
<form action='login.php' method='POST'>
  <h2 class='highlight'>Login to continue</h2>
  <label>Username<input type='text' name="userid"></label><br/>
  <label>Password<input type='password' name="password"></label><br/>
  <input type='submit' id='reglogin' value='Login'/><br/>
    <input type='button' id='reglogin' onclick="location.href='http://localhost/sys/register.php';"   value='Register'/>
 </body>
 </html>
