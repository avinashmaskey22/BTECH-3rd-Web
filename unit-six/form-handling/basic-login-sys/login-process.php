<?php
if (isset($_POST['uName'], $_POST['uPass'])) {
    if (!empty($_POST['uName']) && !empty($_POST['uPass'])) {
        //success    
        header("Location: welcome.php?user=" . $_POST['uName']);
        exit();
    } else {
        //error
        header("Location: login-form.php?error=Please fill up the form.");
        exit();
    }
} else {
    header("Location: login-form.php");
    exit();
}
