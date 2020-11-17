  <?php
    $conn = mysqli_connect('database-itf.mysql.database.azure.com', 'it63070183@database-itf', 'YYWfcx51', 'ITFlab');

    $id = $_GET['ID'];

    $sql = 'SELECT * FROM guestbook WHERE ID = ' . $id . '';
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        header('Location: index.php');
    } else {
        $data = mysqli_fetch_assoc($query);
    }
    ?>
  <!DOCTYPE html>
  <html>

  <head>
      <title>Comment Form</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>

  <body>
      <div class="container">
          <form action="update.php" method="post" id="CommentForm">
              <div class="form-group mt-5">
                  <input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
                  <label class="m-3" for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="idName" value="<?php echo $data['Name'];?>">
                  <label class="m-3" for="comment">Comment</label>
                  <textarea rows="10" class="form-control" cols="20" name="comment" id="idComment" ><?php echo $data['Comment'];?></textarea><br>
                  <label class="m-3" for="link">Link</label>
                  <input type="text" class="form-control" name="link" id="idLink" value="<?php echo $data['Link'];?>">
                  <input class="btn btn-primary mt-5" type="submit" id="commentBtn">
              </div>
          </form>
      </div>
  </body>

  </html>