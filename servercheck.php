<?php

// define variables and set to empty values
$numeserverErr = $ipErr = $locatieErr = $asignatErr = "";
$numeserver = $ip = $locatie = $asignat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["numeserver"])) {
    $numeserverErr = "Name is required";
  } else {
    $numeserver = test_input($_POST["numeserver"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$numeserver)) {
      $numeserverErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["ip"])) {
    $ipErr = "Name is required";
  } else {
    $ip = test_input($_POST["ip"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9. ]*$/",$ip)) {
      $ipErr = "Only numbers are allowed";
    }
  }
  
  if (empty($_POST["locatie"])) {
      $locatieErr = "Name is required";
  } else {
    $locatie = test_input($_POST["locatie"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$locatie)) {
      $locatieErr = "Only letters and white space allowed";
    }
  }
  
  
   if (empty($_POST["asignat"])) {
      $asignatErr = "Name is required";
  } else {
    $asignat = test_input($_POST["asignat"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$asignat)) {
      $asignatErr = "Only letters and white space allowed";
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