<?php
   require_once('config.php');
   /*$countrySearch=$_POST['CountrySearch'];
   function fuzzySearch(){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="select * from geocountries  left  JOIN  travelimage  ON (geoCountries.fipsCountryCode=travelimage.CountryCodeISO ) 
    where PATH is not Null and  CountryName like '%A%'";
    $sql = "SELECT * FROM traveluser WHERE UserName=:user and Pass=:pass";  
  
    $statement = $pdo->prepare($sql);   
    $statement->bindValue(':user',@$_POST['CountryName']);   
    //$statement->bindValue(':pass',@$_POST['password']);   
    $statement->execute();   
    if($statement->rowCount()>0){  
          $loggedIn=true;
          return true;  
    }
    
       return false;  
   }*/
   function fuzzySearch(){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
?>