<?php 

require_once('config.php'); 
$isRefresh=true;
/*
 Displays a list of genres
*/
function refreshGenres(){
    this.$isRefresh=false;
}
function outputGenres() {
   try {
      $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //$sql;
      //if($isRefresh){
          $sql = 'select * from travelimage Order By ImageID limit 0,30';
      //}
      //else{
          //$sql='select * from travelimage Order By RAND() LIMIT 0,30';
          //$sql = 'select * from travelimage Order By ImageID limit 0,5';
      //}
      $result = $pdo->query($sql); 
      
      while ($row = $result->fetch()) {
         outputSingleGenre($row); 
      }
               

      $pdo = null;
   }
   catch (PDOException $e) {
      die( $e->getMessage() );
   }
}

function outputGenresRandom($isRefresh) {
    try {
       $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
       $sql;
       //if($isRefresh){
           //$sql = 'select * from travelimage Order By ImageID limit 0,30';
       //}
       //else{
        $sql='select * from travelimage Order By RAND() LIMIT 0,30';
           //$sql = 'select * from travelimage Order By ImageID limit 0,5';
       //}
       $result = $pdo->query($sql); 
       
       while ($row = $result->fetch()) {
          outputSingleGenre($row); 
       }
                
 
       $pdo = null;
    }
    catch (PDOException $e) {
       die( $e->getMessage() );
    }
 }

 
 



       //$sql='select * from geocountries AS a LEFT JOIN  travelimage AS b ON (a.fipsCountryCode=b.CountryCodeISO)';

 

/*
 Displays a single genre
*/
function outputSingleGenre($row) {

   echo '<div class="ui fluid card">';
   echo '<div class="ui fluid image">';
   $img = '<img src="../travel-images/square-medium/' .$row['PATH'] .'">'; 
   echo constructGenreLink($row['Title'], $img);
   echo '</div>';
   echo '<div class="extra">';
   echo '<h4>';
   echo constructGenreLink($row['ImageID'], $row['Title']);
   echo '</h4>';
   echo '</div>'; // end class=extra
   echo '</div>'; // end class=card
}

/* 
  Constructs a link given the genre id and a label (which could
  be a name or even an image tag
*/
function constructGenreLink($id, $label) {
   $link = '<a href="genre.php?id=' . $id . '">'; 
   $link .= $label;
   $link .= '</a>';
   return $link;

}


?>
