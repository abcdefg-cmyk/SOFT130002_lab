<?php
require_once('config.php');
function register(){
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
?>























<!DOCtype>
<html>
<head>
    <meta charset="utf-8">
    <link rel="Shortcut Icon" href="images/XQX.ico" type="image/x-icon" />
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/Register.css">
    <script type="text/javascript" src="GoToTop.js"></script>
</head>
<body >
<header>

</header>
<div class="transbox">
    <div class="user">
        <p>请设置用户名</p>
    </div>
    <div class="user">
        <p>请设置密码</p>
    </div>
    <div class="user">
        <p>请确认密码</p>
    </div>
    <div class="user">
        <p>请输入手机号</p>
    </div>
    <div class="user">
        <p>请输入电子邮箱</p>
    </div>
    <div class="Input1">
        <form  action="Log.php" method="post">
            <input type="text" name="username" placeholder="USERNAME" pattern="^[0-9a-zA-Z_]{1,}$"required><br>
            <input type="password" name="password1" placeholder="PASSWORD"pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[^]{9,}$"required><br>
            <input type="password" name="password2" placeholder="PASSWORD"pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[^]{9,}$"required><br>
            <input type="text" name="telephone" placeholder="TELEPHONE"pattern="^1\d{10}$" required=""><br>
            <input type="text" name="email" placeholder="EMAIL"pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required><br>
            <a href="Index.html"> <input type="submit" value="注册" style="font-size:30px;margin-left:-700px;margin-top:150px;width:300px;"><br></a>
            <a href="Index.html"> <input type="button" value="返回登录界面" style="font-size:30px;margin-left:-300px;margin-top:150px;width:300px;"><br></a>
        </form>
    </div>


    <script>
function jump(){
window.location.href="HomePage.html";
}
</script>
    </form>
</div>

<footer class="footer2">
    <h3>19302010080@fudan.edu.cn</h3>
</footer>
</body>
</html>

