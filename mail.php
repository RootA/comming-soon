<?php
    // Check if the form is submitted 
    if ( isset( $_POST['submit'] ) ) {
        echo '<h3>Form POST Method</h3>'; 
        echo 'Your name is ' . $lastname . ' ' . $firstname; 
        $logfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $now = date("Y/m/d h:i:sa");
        $txt = " [. $now .] . $email .\n";
        fwrite($logfile, $txt);
        fclose($logfile);
        exit; 
    } 