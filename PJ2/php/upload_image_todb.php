<?php 
// 连接数据库 
$conn=@mysqli_connect("localhost","root","","demo")  or die(mysql_error()); 
@mysqli_select_db('demo',$conn) ;//or die(mysqli_error()); 
if (!$conn)
{
    die("连接错误: " . mysqli_connect_error());
}
 
// 判断action 
$action = isset($_REQUEST['action'])? $_REQUEST['action'] : ''; 
 
// 上传图片 
if($action=='add'){ 
    $image = mysqli_escape_string($conn,file_get_contents($_FILES['photo']['tmp_name'])); 
    move_uploaded_file($_FILES['photo']['tmp_name'],'../tempStore/'.$_FILES['photo']['name']);//保存图片到指定文件夹
    $type = $_FILES['photo']['type']; 
    $sqlstr = "insert into photo(type,binarydata) values('".$type."','".$image."')"; 
    @mysqli_query($conn,$sqlstr) or die(mysqli_error($conn)); 
    header('location:upload_image_todb.php'); 
    exit(); 
// 显示图片 
}elseif($action=='show'){ 
    $id = isset($_GET['id'])? intval($_GET['id']) : 0; 
    $sqlstr = "select * from photo where id=$id"; 
    $query = mysql_query($sqlstr) or die(mysql_error()); 
    $thread = mysql_fetch_assoc($query); 
    if($thread){ 
        header('content-type:'.$thread['type']); 
        echo $thread['binarydata']; 
        exit(); 
    } 
}else{ 
// 显示图片列表及上传表单 
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
 <head> 
  <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
  <title> upload image to db demo </title> 
 </head> 
 
 <body> 
  <form name="form1" method="post" action="upload_image_todb.php" enctype="multipart/form-data"> 
  <p>图片：<input type="file" name="photo"></p> 
  <p><input type="hidden" name="action" value="add"><input type="submit" name="b1" value="提交"></p> 
  </form> 
 
<?php 
    $sqlstr = "select * from photo order by id desc"; 
    $query = mysqli_query($conn,$sqlstr) or die(mysqli_error($conn)); 
    $result = array(); 
    while($thread=mysqli_fetch_assoc($query)){ 
        $result[] = $thread; 
    } 
    foreach($result as $val){ 
        echo '<p><img src="upload_image_todb.php?action=show&id='.$val['id'].'&t='.time().'   " width="150"></p>'; 
    } 
?> 
</body> 
</html> 
<?php 
} 
?>
 