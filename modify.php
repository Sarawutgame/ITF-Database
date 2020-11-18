<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modify</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'thatchon.mysql.database.azure.com', 'btkeiei1@thatchon', 'THEMARI01z', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['ID'];
        
$query = "SELECT * FROM guestbook WHERE id = '$id' ";
$Result = mysqli_fetch_array($res);

mysqli_close($conn);
?>

<h1>ฟอร์มแก้ไข/ปรับปรุงข้อมูล</h1>
<form action = "insert.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name" required value="<?php echo $Result['Name'];?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment" required value="<?php echo $Result['Comment'];?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link" required value="<?php echo $Result['Link'];?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>