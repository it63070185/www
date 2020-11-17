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
    <form action="insert.php" method="post" id="CommentForm">
      <div class="form-group mt-5">
        <label class="m-3" for="name">Name</label>
        <input type="text" class="form-control" name="name" id="idName" placeholder="Enter Name">
        <label class="m-3" for="comment">Comment</label>
        <textarea rows="5" class="form-control" cols="20" name="comment" id="idComment"
          placeholder="Enter Comment"></textarea><br>
        <label class="m-3" for="link">Link</label>
        <input type="text" class="form-control" name="link" id="idLink" placeholder="Enter Link">
        <input class="btn btn-primary mt-5" type="submit" id="commentBtn">
      </div>
    </form>
  </div>
</body>

</html>