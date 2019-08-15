<?php
    // Check if the form is submitted 
    if ( isset( $_POST['submit'] ) ) {
        echo '<h3>Form POST Method</h3>'; 
        $now = date("Y/m/d h:i:sa");
        $txt = " [. $now .] . $email .\n";
        fwrite($logfile, $txt);
        fclose($logfile);
        header("Location: http://work4fce.com");
        exit; 
    } 