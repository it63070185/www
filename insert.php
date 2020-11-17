<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'database-itf.mysql.database.azure.com', 'it63070183@database-itf', 'YYWfcx51', 'ITFlab', 3306);
if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5 text-center">
      <h3>
        <?php
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
      </h3>
      <a href="index.php" class="btn btn-success mt-3">OK</a>
    </div>
  </div>
</body>

</html>