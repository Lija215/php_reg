<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container">
  <h2>Registration form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" onkeyup="cheekemail()">
      <span class="txt-danger" id="track"></span>
      <span class="text-primary" id="pwd-medium-span"></span>

    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" onkeyup="cheekpswd()">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
  </form>
</div>
<script>
  var button = document.getElementById("submit");
  button.disabled = true;

  function cheekemail(){
    var email = document.getElementById("email").value;
    valids = ["gmail.com","yahoo.com","outlook.com"]
    var emailDanger = document.getElementById("email-danger-span");
    var emailSuccess = document.getElementById("email-success-span");

   
    if(email.indexof('@')!=-1){
      var domain = email.split('@')[1];
      if (valids.includes(domain)) {
        emailSuccess.innerHTML = "Valid email";
        emailDanger.innerHTML = "";
      }

        else{
          emailDanger.innerHTML = "Invalid email";
          emailSuccess.innerHTML = "";
          button.disabled = true;
          
        }
        else {
          emailDanger.innerHTML = "";
          emailSuccess.innerHTML = "";
          button.disabled = true;
          
        }
      }
    }
    function checkPwd() {
      var pwd = document.getElementById("password").value;
      var specialChar = /[!@#$%^&*]/;
      var upperCase = /[A-Z]/;
      var lowerCase = /[a-z]/;
      var digit = /[0-9]/;



      var upperCaseSpan = document.getElementById("upper-case-span");
      var lowerCaseSpan = document.getElementById("lower-case-span");
      var digitSpan = document.getElementById("digit-span");
      var specialCharSpan = document.getElementById("special-char-span");
      var lengthSpan = document.getElementById("length-span");


      if (pwd.length >= 8) {
        lengthSpan.innerHTML = "";
      } else {
        lengthSpan.innerHTML = " & at least 8 characters.";
        button.disabled = true;
      }

      if (specialChar.test(pwd)) {
        specialCharSpan.innerHTML = "";
      } else {
        specialCharSpan.innerHTML = "& one special character";
        button.disabled = true;
      }

      if (upperCase.test(pwd)) {
        upperCaseSpan.innerHTML = "";
      } else {
        upperCaseSpan.innerHTML = "Password Must one uppercase letter";
        button.disabled = true;
      }

      if (lowerCase.test(pwd)) {
        lowerCaseSpan.innerHTML = "";
      } else {
        lowerCaseSpan.innerHTML = "&  one lowercase letter";
        button.disabled = true;
      }

      if (digit.test(pwd)) {
        digitSpan.innerHTML = "";
      } else {
        digitSpan.innerHTML = "& one digit";
        button.disabled = true;
      }

      if (pwd.length >= 8 && specialChar.test(pwd) && upperCase.test(pwd) && lowerCase.test(pwd) && digit.test(pwd)) {
        document.getElementById("pwd-danger-span").innerHTML = "";
        document.getElementById("pwd-success-span").innerHTML = "Your password is secure.";
        button.disabled = false;
      } else {
        document.getElementById("pwd-success-span").innerHTML = "";
      }
   
  }
 </script>

</body>
</html>

    
















