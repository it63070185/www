<?php
	$conn = mysqli_connect('database-itf.mysql.database.azure.com', 'it63070183@database-itf', 'YYWfcx51', 'ITFlab');

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];

    $sql = 'UPDATE guestbook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      
      mysqli_close($conn);
?>