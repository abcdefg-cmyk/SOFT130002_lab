<!DOCtype>
<html>
<head>
    <meta charset="utf-8">
    <link rel="Shortcut Icon" href="images/XQX.ico" type="image/x-icon" />
    <title>浏览</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="../css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/Browse.css">
    <script type="text/javascript" src="GoToTop.js"></script>
</head>

<header>
<?php include_once('header.php');
?>


<div class="transbox">
    <div class="search">
        <input type="text" placeholder="Search By Title"><br>
        <input type="button" value="点击搜索" onclick="alert('已显示搜索结果')" style="width:250px;height:40px;margin-top:50px;margin-left:25px;" >
    </div>

    <aside>
        <div class="aside2">
            <p >Hot City</p>
            <ul>
                <li><a href="BrowseResult.html">CHINA</a> </li><br>
                <li><a href="BrowseResult.html">AMERICA</a> </li><br>
                <li><a href="BrowseResult.html">ITALY</a> </li><br>
                <li><a href="SearchResult.html">JAPAN</a> </li><br>
            </ul>
        </div>
    </aside>

    <div class="aside2">
        <p>Hot City</p>
        <ul>
            <li><a href="BrowseResult.html">Shang Hai</a> </li><br>
            <li><a href="BrowseResult.html">Tokyo</a> </li><br>
            <li><a href="BrowseResult.html">Roma</a> </li><br>
            <li><a href="BrowseResult.html">New York</a> </li><br>
        </ul>
    </div>
    </aside>
</div>


<div class="background">
    <!--<form name="select" action="Browse.php" method="POST" role="form">
        <select class="selection" name="scenery"></select>
        <select class="selection" name='country' id="A" onChange="GetCity()" >
            <option value="Andorra">Andorra</option>
            <option value="China">China</option>
            <option value="Japan">Japan</option>
            <option value="Italy">Italy</option>
            <option value="America">America</option>
        </select> 
        <select class="selection" name="city">
            <option value="0"> </option>
        </select>
        <input class="button" type="submit" value="Search">   
    </form>-->
    <?php require_once('getCountry.php');
          echo getSelectForm();?>
    <div class="ui segment">  
         <div class="ui six doubling cards">
         <?php
            require_once("getCountry.php");
            selectCountries();
            ?>

         </div>
      </div> 
      <div class="buttons">
        <span class="on">1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
    </div>

   
</div>


</header>

<footer class="footer2">
    <h3>19302010080@fudan.edu.cn</h3>
</footer>


    <script src="country.js">

    </script>

</html>