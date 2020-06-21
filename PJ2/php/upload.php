<?php  
     require_once("config.php");
     try {
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
  
        $sql = 'select ImageId, Title, Description,PATH from travelimage Order By ImageID';
        $result = $pdo->query($sql); 
        
        while ($row = $result->fetch()) {
           echo $row['ImageId']."<br/>";
        }
                 
  
        $pdo = null;
     }
     catch (PDOException $e) {
        die( $e->getMessage() );
     }
?>
 
 