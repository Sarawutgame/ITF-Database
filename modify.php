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
mysqli_real_connect($conn, 'data-itf.mysql.database.azure.com', 'Gamezanet@data-itf', 'Game5711106', 'itflabdata', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
echo $id;
        
$query = "SELECT * FROM guestbook WHERE ID = $id";
$Result = mysqli_fetch_array($res);

?>

<h1>ฟอร์มแก้ไข/ปรับปรุงข้อมูล</h1>
  <div class="row">
      <div class="col-sm-8">
          <h4 class="page-header">Name</h4>
          <form role="form" action = "update.php" method = "post" id="CommentForm">
              <div class="form-group float-label-control">
                  <label for="">Enter Name Here</label>
                  <input class="form-control" name ="name" id="idName" placeholder="Name" required value="<?php echo $Result['Name'];?>">
              </div>
              <h4 class="page-header">Comment ^ ^</h4>
              <div class="form-group float-label-control">
                  <label for="">Please Comment</label>
                  <textarea rows="10" class="form-control" name="comment" id="idComment" placeholder="Comment in there" rows="1" required value="<?php echo $Result['Comment'];?>"></textarea>
              </div>
              <h4 class="page-header">Link</h4>
              <div class="form-group float-label-control">
                  <label for="">Please Insert Link</label>
                  <input class="form-control" name="link" id="idLink" placeholder="Link" rows="1" required value="<?php echo $Result['Link'];?>">
              </div>
            <input type="submit" id="btn btn-outline-warning">
          </form>
      </div>
    </div>
  <?php
  mysqli_close($conn);
  ?>
</body>
</html>