<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $file = fopen("reg_data.html","r");
    $file_content = fread($file,filesize("reg_data.html"));
    //echo  $file_content;
    fclose($file);
/*
    $reg_form_data = "<br>" . "username: " . $_POST["username"] ."<br>" .  "fullname: " . $_POST["full_name"] ."<br>" .  "phone_number: " . 
     $_POST["phone_number"] ."<br>" .  "mail_address: " . $_POST["mail_address"] ."<br>" .  "address: " . $_POST["address"] ."<br>" .  
     "password: " . $_POST["password"];
*/

    $reg_form_data = $file_content . "<br>" . $_POST["full_name"] ."<br>" . 
    $_POST["phone_number"] ."<br>" . $_POST["mail_address"] ."<br>" . $_POST["address"] .
    "<br>____________________________<br>";

    $file2 = fopen("reg_data.html","w");
    fwrite($file2,$reg_form_data);
    fclose($file2);

    $cookie_name = "eci_user";
    $cookie_value = "eci_user_data";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    header('Location: ' . $_POST["url_address"]);
}

?>