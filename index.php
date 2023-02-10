<?php
  // Connect to the database
  $servername = "localhost";
  $username = "username";
  $password = "";
  $dbname = "loginpage";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the form data
  $name = $_POST['name'];
  $comment = $_POST['comment'];

  // Insert the data into the database
  $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
