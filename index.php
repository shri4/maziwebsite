<!DOCTYPE html> 

<?php
if(isset($_POST['submit'])){
     $user = $_POST['username'];
     $pass = $_POST['password'];
     if($user=="admin" && $pass=="admin"){
          echo("welcome");
      }else {
     echo("invalid");
    }
}

?>
<html>

<head>
  <title>LOGIN</title>
</head>
<body>
 <form action="home.html" method="POST" accept-charset="utf-8">
    <div id="login">
      <strong>LOGIN </strong>
    </div>
    
    <div id="inputtext">
Name :<br />
<input type="text" name="username" id="text" required placeholder="Your Name" />
    </div>
    
    <div id="inputpassword">
  
      Password : <br />
    
      <input type="password" name="password" id="password" placeholder="Your Password" required/>
    </div>
    </div>

    <div id="submitbtn">
      <input type="submit" name="submit" id="submit" value="LOGIN" />
    </div>
  </form>
</body>

</html>

