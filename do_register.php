<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$date=$_POST['date'];
$num=$_POST['num'];
$message=$_POST['message'];

$email_from="info@nikolaosmelakis.com";

$email_subject="New Website Message";

$email_body="Name: $name.\n".
                "Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "Date: $date.\n".
                            "Number: $num.\n".
                                "Message: $message.\n";

$to="nick_melakis@yahoo.gr";

$headers="From: $email_from \r\n";

$headers="Reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: messagesent.html");
