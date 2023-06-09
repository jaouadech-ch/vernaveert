<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'jawadchaoui379@gmail.com'; // Replace with the recipient's email address
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  
  if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
  } else {
    echo 'Failed to send email. Please try again later.';
  }
}
?>
