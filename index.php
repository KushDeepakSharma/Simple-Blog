<!DOCTYPE html>
<html lang="en">
  <style>
  body{
margin: 0;
padding: 0;
background: url("imageedit_3_7254420053.png");
background-size: cover;
font-family: sans-serif;
}
.loginbox{
width: 320px;
height: 420px;
background: #333;
color: #fff;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);
box-sizing: border-box;
padding: 70px 30px;
opacity: 0.9;
}
.avatar{
width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: -50px;
left: calc(50% - 50px);
}
h1{
margin: 0;
padding: 0 0 20px;
text-align: center;
font-size: 22px;
}
.loginbox p{
margin: 0;
padding: 0;
font-weight: bold;
}
.loginbox input{
width: 100%;
margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"], input[type="Email"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 40px;
color: #fff;
font-size: 16px;
}
.loginbox input[type="submit"]
{
border: none;
outline: none;
height: 40px;
background: black;
color: #fff;
font-size: 18px;
border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
cursor: pointer;
background: lightblue;
color: #000;
}
.loginbox a{
text-decoration: none;
font-size: 12px;
line-height: 20px;
color: darkgrey;
}
.loginbox a:hover
{
color:lightblue;
}
  </style>
<div class="loginbox">
<img src="blue_user.png" class="avatar">
<h1>Login Here</h1>
<form name="myForm" action = "signin.php" id ="demo" method = "post" onsubmit="return validateForm();">
<p>Email</p>
<input type="Email" name="email" id="Email" placeholder="Email ID" autocomplete="off" required>
<p>Password</p>
<input type="password" name="password" id="psw" placeholder = "Password" name="Password" required>
<input type="submit" name="" value="Login">
<a href="register.php">Don't have an account?</a>
</form>
</div>
<script>
    function validateForm() {
    var b = document.forms["myForm"]["email"].value;
    var p = document.forms["myForm"]["password"].value;
    if (b == "") {
    alert("Email ID must be filled.");
    return false;
    }
    if (p == "") {
    alert("Password must be filled.");
    return false;
    }
    return true;
    }
    </script>
</html>