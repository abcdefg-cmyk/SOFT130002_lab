<?php
   require_once("config.php");
   $loggedIn=false;  
   function getLoginForm(){
       return "
       <form action='HomePage.php' method='POST' role='form'>
       <div class='LogInBox'>
          <h2 class='loginTip'>Sign in</h2>
          <input type='text' class='username' placeholder='Username' required=''  name='username'/>
          <input type='password' class='password' placeholder='Password' required='' name='password'/>
          <p>Create your account?<a href='Regster.php' class='sign'>click here</a></p>
          <p>Don't have a account?<a href='HomePage.php' class='sign'>sign up</a></p>
          <input type='submit' value='sign in' class='submitButton'/>
       </div>
       </form>";
   }
   function validLogin(){
          
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);  
    //very simple (and insecure) check of valid credentials. 
    $sql = "SELECT * FROM traveluser WHERE UserName=:user and Pass=:pass";  
  
    $statement = $pdo->prepare($sql);   
    $statement->bindValue(':user',@$_POST['username']);   
    $statement->bindValue(':pass',@$_POST['password']);   
    $statement->execute();   
    if($statement->rowCount()>0){  
          $loggedIn=true;
          return true;  
    }
    
       return false;  
  }
  //$loggedIn=false;  
 
?>