<?php

$name =$_POST['name'];

$visitor_email =$_POST['email'];

$subject =$_POST['subject'];

$message =$_POST['message'];

$email_form = ' University website '; //domain name

$email_subject = ' New form submission ';

$email_body= ' User Name : $name\n . '
             ' Usser Email : $visitor_email\n . '
             ' Subject : $subject\n . '
             ' Usser Message : $message\n . ' ;

$to = " rabbi8535@gmail.com ";

$headers = " From : $email_form\r\n ";

$headers .= " Reply-to : $visitor_email\r\n ";


mail($to, $email_subject, $email_body, $headers);


header('Location: contact.html');




?>