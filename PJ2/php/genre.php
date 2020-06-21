<?php 

require_once('config.php'); 

/*
 Displays a list of genres
*/

try {
   $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
   $sql = 'select * from travelimage where ImageID=:id';
   $id =  $_GET['id'];
   $statement = $pdo->prepare($sql);
   $statement->bindValue(':id', $id);
   $statement->execute();   
   
   $row = $statement->fetch(PDO::FETCH_ASSOC);
   $pdo = null;
}
catch (PDOException $e) {
   die( $e->getMessage() );
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 14</title>
    <link href="../css/semantic.css" rel="stylesheet"> 
  </head>
<body>
<main class="ui container">
    <div class="ui secondary segment">
         <h1><?php echo $row['Title']; ?></h1>
    </div>    
    <div class="ui segment">
        <div class="ui grid">
           <div class="three wide column">
           <img src="../travel-images/square-medium/<?php echo $row['PATH'] ;?>">
           
           </div>
           <div class="thirteen wide column">
                <p><?php echo $row['Description']; ?></p>
                <p>
                <a class="ui labeled icon primary button" href="<?php echo $row['Content']; ?>">
                  <i class="external icon"></i>
                  Read more on Wikipedia about <?php echo $row['Title']; ?>
                </a>
                </p>
           </div> 
       </div>
    </div>
</main>


</body>
</html>