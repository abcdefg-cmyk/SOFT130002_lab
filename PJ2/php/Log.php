<?php
   
   if(isset($_POST['submit'])){
       session_start;
       $_SESSION['username']=$_POST['username'];
       header('Location:header.php');
   }
?>



<!DOCtype>
<html>
<head>
    <title>Log In</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>


    <link type="text/css" rel="stylesheet" type="text/css" href="..\css\index.css">
</head>
<body background="..\travel-images\background.jpg">




<?php
   require_once("config.php");
   require_once("login.php");
   //require_once("Logout.php");
   


    //$loggedIn=false;  

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(validLogin()){   
         echo "Welcome ".$_POST['username'];  
         //echo getLoginForm();  
         $loggedIn=true;   
         $expiryTime = time()+60*60*24;  
         setcookie("UserName", $_POST['username'], $expiryTime);
      }  
      else{ 
        echo getLoginForm();  
      }  
   }
   /*else if(isset($_COOKIE['Username'])){  
      echo "WelcomeCook ".$_COOKIE['Username'];  
   }*/  
   else{    
     echo "No Post detected";
   } 
?>

<?php 
   if (!isset($_COOKIE['Username'])){  
      echo getLoginForm();   
   }  
   else{  
      echo "This is some content";  
   }
/*if(!$loggedIn){
   echo getLoginForm();
} else{
   echo "This is some content"; 
}*/

?>
</body>
</html>
