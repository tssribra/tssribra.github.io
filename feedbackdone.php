<?php
    $name = $_POST['customername'];
    $phone = $_POST['customerphone'];
    $feedback = $_POST['customerfeedback'];
    $from = 'From: tssribra.github.io'; 
    $to = 'samudithakrx@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for your feedback!</p>';
    } else { 
        echo '<p>Oops! An error occurred. Try sending your feedback again.</p>'; 
    }
}
?>