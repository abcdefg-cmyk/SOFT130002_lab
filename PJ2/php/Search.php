



<!DOCtype>
<html>
<head>
    <meta charset="utf-8">
    <link rel="Shortcut Icon" href="images/XQX.ico" type="image/x-icon" />
    <title>搜索</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/Search.css">
    <script type="text/javascript" src="GoToTop.js"></script>
</head>
<body background="images/background.jpg">
<header>
    <div class="menuDiv">
        <ul>
            <li><a href="HomePage.html" >Home</a> </li>
            <li><a href="Search.html" style="background:#DDDDDD;color:#444444;">Search</a> </li>
            <li><a href="Browse.html">Browse</a> </li>
            <li>
                <a href=""><img src="images/XQX.ico" class="ico" >Me</a>
                <ul>
                    <li><a href="Photos.html"><img src="images/XQX.ico" class="ico" >My Photos</a> </li>
                    <li><a href="Collection.html"><img src="images/XQX.ico" class="ico" >My Collections</a> </li>
                    <li><a href="Upload.html"><img src="images/XQX.ico" class="ico" >Upload</a> </li>
                    <li><a href="Index.html"><img src="images/XQX.ico" class="ico" >Log In</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<div class="transbox">
<form action="" method="POST" name="CountryName">
    <div class="search">
        <input class="search" type="text" placeholder="Search By Title" name="CountrySearch"><br>
        <input class="search" type="submit" value="submit" name="submit">
        <input class="search" type="text" placeholder="Search By Filter" name="TitleSearch"><br>
        <input class="search" type="submit" value="submit" name="submit">
    </div>

    </form>
    <div class="background">
<?php
    echo @$_POST['CountrySearch'];
    require_once("fuzzySearch.php");
    fuzzySearch();
    ?>
        <footer class="footer1">
        <h3>1 2 3 4 5 6 7 8 9</h3>
    </footer>
</div>


</div>




<footer class="footer2">
    <h3>19302010080@fudan.edu.cn</h3>
</footer>
</body>
</html>