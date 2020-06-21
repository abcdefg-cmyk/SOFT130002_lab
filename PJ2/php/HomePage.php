<html>
<head>
<title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/Homepage.css">
    <!--<link rel="stylesheet" href="../css/semantic.css">-->
</head>
<header>
<?php
 include_once('header.php');
?>
    <main class="ui container">
      <div class="ui secondary segment">
         
      </div>
      
      <div class="ui segment">  
         <div class="ui six doubling cards">
            <?php 
            //require_once("homepageImage.php");
            if($isRefresh){
            outputGenres(true);}
            else{
                outputGenres(false);
                echo "setfalse";
            } ?>  
         </div>
      </div>            
</main>
</header>
<a href="headerRandom.php"><input type="button" name="refresh" value="refresh"  class="refresh" name="refresh"  
onclick="refreshGenres"></a>
</html>