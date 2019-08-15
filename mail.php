<?php
    // Check if the form is submitted 
    if ( isset($_POST['submit'] ) ) {
        $now = date("Y/m/d h:i:sa");
        $email = $_REQUEST['email'];
        $txt = " [. $now .] . $email .\n";
        fwrite($logfile, $txt);
        fclose($logfile);
        header("Location: http://work4fce.com");
    } 