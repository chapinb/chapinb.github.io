<?php

if (isset($_POST['submit'])){
  $to = 'chapinb4n6@gmail.com';
  $from = $_POST['email'];
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  if (strlen($from) > 0 and strlen($name) > 0){
      $headers = "From: " . $from;
      mail($to, $subject, $message, $headers);
      echo "Message sent. Thank you " . $name . ", I will get back to you as soon as possible!";
    }else{
      echo "<center>Message not sent, must have all fields complete!</center>";
    }
}
?>