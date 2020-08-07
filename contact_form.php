<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   
   $mailTo = "dental-care-123@yopmail.com";
   $headers = "From: ".$email;
   $txt = "You Have a receive an e-mail from ".$name.".\n\n".$message;

   mail($mailTo, $phone, $txt, $headers);
   header("Location: index.php?mailsend");
}

?>