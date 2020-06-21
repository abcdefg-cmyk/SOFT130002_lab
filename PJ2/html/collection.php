<?php 

require_once('config.php'); 
function outputGenres() {
    try {
       $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 
 
       $sql = 'select ImageId, Title, Description,PATH from travelimage Order By ImageID';
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
 
 /*
  Displays a single genre
 */
 function outputSingleGenre($row) {
 
       echo '<div class="ui fluid card">';
    echo '<div class="ui fluid image">';
    $img = '<img src="../travel-images/square-medium/' .$row['PATH'] .'">'; 
    echo constructGenreLink($row['ImageId'], $img);
    echo '</div>';
    echo '<div class="extra">';
    echo '<h4>';
    echo constructGenreLink($row['ImageId'], $row['Title']);
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








































<!DOCtype>
<html>
   <head>
       <title>collection</title>
       <!-- 新 Bootstrap 核心 CSS 文件 -->
       <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

       <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
       <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>

       <link rel="stylesheet" type="text/css" href="..\css\headline.css">
       <link rel="stylesheet" type="text/css" href="..\css\collection.css">
       <link href="semantic/semantic.css" rel="stylesheet"> 
   </head>
   <body>
   <header>
       <div class="headline">
       <!--<a href="#" class="logo"><img src="..\travel-images\logo.jpg"> </a>-->
       <ul>
           <li><a href="#" class="logo"><img src="..\travel-images\logo.jpg"> </a></li>
           <li><a>Home</a></li>
           <li><a>Home</a></li>
           <li><a>Home</a></li>
       </ul>
       <!--导航栏-->
       <ul></ul>
       </div>
       <!--<div class="myAccount">
       --<ul>
           <li class="username">username</li>
       </ul>
       </div>-->
   </header>

   <main class="ui container">
      
      <div class="ui segment">  
         <div class="ui six doubling cards">
            <?php outputGenres(); ?>  
         </div>
      </div>            
</main>






   <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/homepage.js"></script>
   </body>
</html>