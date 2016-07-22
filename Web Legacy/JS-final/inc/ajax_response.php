<?php

  if(isset($_POST["username"]))  {
   
    //received username value from registration page
    $username =  $_POST["username"];
 
    if  ( $username == "blutank24" || $username == "Mark" || $username == "Mittens" || strlen($username) < 4) {
      die('<span class="taken">The username is taken!</span>');
    } else {
      die('<span class="free">The username is free!</span>');
    }

  } else {
    return '<span class="taken">Error! Not set?</span>';
  }

?>