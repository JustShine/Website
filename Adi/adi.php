<?php
  $db_name="root";
  $db_password="cata123";
  $database="sertar";

  $conn = new mysqli('localhost',$db_name,$db_password,$database);
  if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
  }
  $sql = "INSERT INTO dosare
          VALUES (NULL, '" . $_POST["nume"] . "' , '" . $_POST["pagini"] . "' , '" . $_POST["an"] . "');";

  if ($conn->query($sql) === TRUE) 
    echo "New record created successfully";
  else
    echo "Error: " . $sql . "<br>" . $conn->error;


  $conn->close();

?>