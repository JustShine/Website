<?php
  $db_name="root";
  $db_password="qwerty";
  $database="register";

  $conn = new mysqli('localhost',$db_name,$db_password,$database);
  if ($conn->connect_error) 
    die('Could not connect: ' . $conn->connect_error);

  $sql = "INSERT INTO accounts
          VALUES (NULL, '" . $_POST["username"] . "' , '" . $_POST["email"] . "' , '" . $_POST["pass"] . "',
		  '" . $_POST["birth"] . "', '" . $_POST["gender"] . "', '" . $_POST["terms"] . "');";

	
  if ($conn->query($sql) === TRUE && count($errors) == 0) 
    echo "New record created successfully";
  else
    echo "Error: " . $sql . "<br>" . $conn->error;


  $conn->close();

?>