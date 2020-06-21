<!DOCtype>
<html>
<head>
    <meta charset="utf-8">
    <link rel="Shortcut Icon" href="images/XQX.ico" type="image/x-icon" />
    <title>浏览</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/Browse.css">
    <link rel="stylesheet" href="../css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/Browse.css">
    <script type="text/javascript" src="GoToTop.js"></script>
</head>
<body>
<div class="buttons">
            <span class="on" style="display:inline-block;" >1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
        </div>
</body>
<style>
    .buttons {
    position: absolute;
    right: 5px;
    bottom:40px;
    width: 150px;
    height: 10px;
    z-index: 2;
}
 .buttons span {
    margin-left: 5px;
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: green;
    text-align: center;
    color:white;
    cursor: pointer;
}
 .buttons span.on{
    background-color: red;
}
</style>
</html>