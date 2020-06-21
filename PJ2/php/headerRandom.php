<?php
  require_once("homepageImage.php");
  ?>



<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/Homepage.css">
    <link rel="stylesheet" href="../css/semantic.css">
        
</head>
<header>
    <div class="menuDiv">
        <ul>
            <li><a href="HomePage.html" style="background:#DDDDDD;color:#444444;">Home</a> </li>
            <li><a href="Search.html">Search</a> </li>
            <li><a href="Browse.html">Browse</a> </li>
            <li>
                <a href=""><img src="images/XQX.ico" class="ico" id="username"><?php
                                                                                include_once("login.php");
                                                                                validLogin();
                                                                                if(validLogin()){
                                                                                echo $_POST['username'];}
                                                                                else{
                                                                                    echo "LoggedIN";
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
    <main class="ui container">
      <div class="ui secondary segment">
         
      </div>
      
      <div class="ui segment">  
         <div class="ui six doubling cards">
            <?php 
            //require_once("homepageImage.php");
            if($isRefresh){
            outputGenresRandom(true);}
            else{
                outputGenresRandom(false);
                echo "setfalse";
            } ?>  
         </div>
      </div>            
</main>



</header>
<a href="headerRandom.php"><input type="button" name="refresh" value="refresh"  class="refresh" name="refresh"  onclick="refreshGenres"></a>
<!--refresh button-->
<!--<input type="button" name="refresh" value="Top"  class="top" name="refresh" >
<script  src="../js/refresh.js">
</script>-->

</html>
