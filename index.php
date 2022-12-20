<?php
  // Get the user agent string
  $user_agent = $_SERVER['HTTP_USER_AGENT'];

  // Check if the user is using a mobile device
  if (preg_match('/mobile/i', $user_agent)) {
    // If they are, redirect them to the mobile version of the website
    header('Location: http://m.example.com');
  }
?>
