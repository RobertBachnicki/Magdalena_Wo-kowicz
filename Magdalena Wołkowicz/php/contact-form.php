<?php

if(isset($_POST['submit'])){
    $name = $_POST['imie'];
    $surname = $_POST['nazwisko'];
    $phoneNo = $_POST['telefon'];
    $mailFrom = $_POST['email'];
    $message = $_POST['wiadomosc'];
    
    $mailTo = 'dani@info.uk';
    $headers = 'From: '.$mailFrom;
    $txt = 'You have received an email from '.$name.'.\n\n'.$message;

    mail($mailTo, $txt, $headers);

    header('Location: index.php?mailsend');
}

?>