<html>

<head>
  <title>63070183</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'database-itf.mysql.database.azure.com', 'it63070183@database-itf', 'YYWfcx51', 'ITFlab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <div class="container mt-5">
    <div class="table-responsive">
      <table class="table table-hover table-bordered table-sm">
        <thead class="thead-dark">
          <tr>
            <th width="100">
              <div align="center">Name</div>
            </th>
            <th width="350">
              <div align="center">Comment </div>
            </th>
            <th width="150">
              <div align="center">Link </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($Result = mysqli_fetch_array($res)) {
          ?>
            <tr>
              <td><?php echo $Result['Name']; ?></td>
              <td><?php echo $Result['Comment']; ?></td>
              <td><?php echo $Result['Link']; ?></td>
              <td><a class="btn btn-primary" href="delete.php?ID=<?php $Result['ID'];?>">DELETE</a>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </div>
    </table>
  </div>
  <a class="btn btn-success" href="form.html">เพิ่มข้อมูล</a>
  </div>

  <?php
  mysqli_close($conn);
  ?>
</body>

</html>