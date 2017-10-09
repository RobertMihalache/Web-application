<?php

// define variables and set to empty values
$userErr = $parolaErr = "";
$user = $parola = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $userErr = "User is required";
  } else {
    $user = test_input($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
      $userErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["parola"])) {
    $parolaErr = "Parola is required";
  } else {
    $parola = test_input($_POST["parola"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$parola)) {
      $parolaErr = "Invalid password";
    }
  }
}
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
  
  
  
}
?>