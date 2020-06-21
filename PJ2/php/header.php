<?php
  require_once("homepageImage.php");
  require_once('login.php');
  ?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/HomePage.css">
        
</head>
<header>
    <div class="menuDiv">
        <ul>
            <li><a href="HomePage.html" style="background:#DDDDDD;color:#444444;">Home</a> </li>
            <li><a href="Search.php">Search</a> </li>
            <li><a href="Browse.php">Browse</a> </li>
            <li>
                <a href=""><img src="images/XQX.ico" class="ico" id="username"><?php
                                                                                include_once("login.php");
                                                                                validLogin();
                                                                                if(validLogin()){
                                                                                echo $_POST['username'];}
                                                                                else{
                                                                                    echo "loggedIn";
                                                                                }
                                                                                    
                                                                                ?></a>
                <ul>
                    <li><a href="Photos.html"><img src="images/XQX.ico" class="ico" >My Photos</a> </li>
                    <li><a href="Collection.html"><img src="images/XQX.ico" class="ico" >My Collections</a> </li>
                    <li><a href="Upload.html"><img src="images/XQX.ico" class="ico" >Upload</a> </li>
                    <li><a href="Index.html"><img src="images/XQX.ico" class="ico" > <?php
                                                                                include_once("login.php");
                                                                                //validLogin();
                                                                                if(validLogin()){
                                                                                echo "Logout";}
                                                                                else{
                                                                                    echo "Login";
                                                                                }
                                                                                    
                                                                                ?></a> </li>
                </ul>
            </li>
        </ul>
    </div>




</header>

<!--refresh button-->
<!--<input type="button" name="refresh" value="Top"  class="top" name="refresh" >
<script  src="../js/refresh.js">
</script>-->

</html>
