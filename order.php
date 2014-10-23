<?php

    setcookie("order_complete", "true", time()+3600);

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sales@jtroasting.com";
    $email_subject = "Jimmy Thomas Coffee Order";
    
     
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $message = $_POST['message']; 
    $amount = $_POST['amount'];
    $phone = $_POST['phone'];
    $coffeeselect = $_POST['coffeeselect'];
   if(isset($_POST['ground']) && 
        $_POST['ground'] == 'yes') 
    {
        $ground = "yes";
    }
    else
    {
        $ground = "no";
    }
   
    $email_message = "Coffee Order:\r\n\r\n";
     
   
    $email_message .= "Name: " . $name;
    $email_message .= "\r\nEmail: " . $email;
    $email_message .= "\r\nPhone Number: " . $phone;
    $email_message .= "\r\nAmount of 12oz bags: " . $amount;
    $email_message .= "\r\nCoffee Ground? " . $ground;
    $email_message .= "\r\nFurther Details: " . $message;
    $email_message .= "\r\nCoffee Selection: " . $coffeeselect;
         
// create email headers
$headers = 'From: noreply@jtroasting.com';
@mail($email_to, $email_subject, $email_message, $headers);  
header("Location: /");
die();
?>
 
<!-- include your own success html here -->
<p>Thank you for your message! We will get back to you as soon as possible. <a href="/">Click Here </a> to return to the home page. </p>

