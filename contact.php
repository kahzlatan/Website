 <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $to = 'kahriman.zlatan@gmail.com'; 
    $subject =$_POST['subject'];  
    $headers = "From: " .$email;
    $txt = "You have recieved an e-mail from " .$name ."\n\n" .$msg;

    $body = "From: $name\n E-Mail: $email\n Message:\n $msg";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $txt, $body)) { 
    	header("Location: index.html?mailsent");
        // echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Došlo je do greške, molimo pokušajte ponovno!</p>'; 
    }
}
?>
