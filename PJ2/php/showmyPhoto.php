<?php
include_once('header.php');
function getmyPhotoForm(){
    return "
    ";
}
function outputPhotos() {
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
          outputSinglePhoto($row); 
       }
       $pdo = null;
    }
    catch (PDOException $e) {
       die( $e->getMessage() );
    }
 }


 function outputSinglePhoto($row) {
    $img = '<img src="../travel-images/square-medium/' .$row['PATH'] .'">'.'style="margin-left:0px;"'; 
    echo '<div class="transboxPhoto">';
    echo '<div class="imagebox">';
    //echo '<a href="Detailed.html"><img src="images\travel-images\square\square-medium\9494464567.jpg"></a>';
    echo '<a href="genre.php?id='.$row['ImageID']. '">'.$img.'</a>'; 
    echo '</div>';
    echo '<div class="button1">';
    echo '<a href="Upload.html"> <input type="submit" value="修改" style="margin-left:0px;margin-top:0px;width:75px;height:30px;">
    <br></a>';
    echo '<a href=""> <input type="submit" value="删除" style="margin-left:75px;margin-top:-30px;width:75px;height:30px;" 
    onclick=""><br></a>';
    echo '</div>';
    echo '<div class="child1">';
    echo '<h2>';
    echo $row['Title'];
    echo '</h2>';
    echo '<p>';
    echo $row['Description'];
    echo '</p>';
    echo '</div>';
    echo '</div>';
 }
 
?>