<!DOCtype>
<html>
<head>
    <meta charset="utf-8">
    <link rel="Shortcut Icon" href="images/XQX.ico" type="image/x-icon" />
    <title>my photos</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="../css/myPhotos.css">
    <script type="text/javascript" src="GoToTop.js"></script>
</head>

<header>


<?php include_once('header.php');
      include_once('showmyPhoto.php');
      echo outputPhotos();
?>
</header>
</html>
