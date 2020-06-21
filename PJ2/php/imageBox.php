<?php
   
   if(isset($_POST['submit'])){
       session_start;
       $_SESSION['username']=$_POST['username'];
       header('Location:indexPJ.php');
   }
?>




<!DOCTYPE html>
<html>
<head>
    <title>iamgeBox</title>
</head>
<body>
   <form action="" method="POST">
    <div class="LogInBox">
    <h2 class="loginTip">Sign in</h2>
        <input type="text" class="username" placeholder="Username" required=""  name="username"/>
        <input type="password" class="password" placeholder="Password" required="" name="password"/>
        <p>Create your account?<a href="" class="sign">click here</a></p>
        <p>Don't have a account?<a href="" class="sign">sign up</a></p>
        <input type="submit" value="submit" name="submit" class="submitButton"/>
    </div>
    </form>
</body>
</html>