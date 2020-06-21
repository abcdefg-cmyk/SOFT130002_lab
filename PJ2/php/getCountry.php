<?php
    require_once('config.php');
    require_once('Browse.php');
    require_once('homepageImage.php');
    function getSelectForm(){
      return "
      <form name='select' action='Browse.php' method='POST' role='form'>
      <select class='selection' name='scenery'></select>
      <select class='selection' name='country' id='A' onChange='GetCity()' >
          <option value='Andorra'>Andorra</option>
          <option value='China'>China</option>
          <option value='Japan'>Japan</option>
          <option value='Italy'>Italy</option>
          <option value='America'>America</option>
      </select> 
      <select class='selection' name='city'>
          <option value='0'> </option>
      </select>
      <input class='button' type='submit' value='Search'>   
      </form>
      ";
  }
    function selectCountries() {
      
         $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $country=@$_POST['country'];
         $city=@$_POST['city'];
         $scenery=@$_POST['scenery'];
         
            // $sql = 'select * from travelimage Order By ImageID limit 0,30';
         $EveryPage="select * from geocountries  left  JOIN  travelimage  ON (geoCountries.fipsCountryCode=travelimage.CountryCodeISO ) 
         where PATH is not Null 
         
          ";
         //$countryOption="<script>document.getElementById('country')</script>";
         //$buttons="<script>document.getElementsByTagName('span')</script>";
         //$buttonIndex=0;
         for($i=0;$i<1;$i++){
         displayCountries($EveryPage,$i);}
   
}
function displayCountries($EveryPage,$PageNumber){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $LastPageNumber=$PageNumber+7;
    $sql=$EveryPage."limit"." ".$PageNumber.$LastPageNumber;
    $statement = $pdo->prepare($sql);   
    $statement->bindValue(':user',@$_POST['country']);   
    //$statement->bindValue(':pass',@$_POST['password']);   
    $statement->execute(); 
    $result = $pdo->query($sql);  
    echo @$_POST['country']; 
    /*if($statement->rowCount()>0){  
     $loggedIn=true;
     return true;  
    }

     return false;  */
     while ($row = $result->fetch()) {
       outputSingleGenre($row); 
    }
    
}


      
?>