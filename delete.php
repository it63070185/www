<?php
	$conn = mysqli_connect('database-itf.mysql.database.azure.com', 'it63070183@database-itf', 'YYWfcx51', 'ITFlab');
    $sql = 'DELETE FROM guestbook WHERE ID = '.$_GET['ID'].'';
    

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      
      mysqli_close($conn);
      
?>