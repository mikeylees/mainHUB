<?php
    //gather info from form 
    switch($_SERVER['REQUEST_METHOD'])
    {
        case 'POST':
        $email = $_POST['emailSub'];
        mail($email,'Subscription from Ragsack','testing');
        break;
        case 'GET' :
        header('Location: ../index.html');
        break;
    }
    

?>