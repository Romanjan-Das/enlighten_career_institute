<?php
$cookie_name = "eci_user";
if(isset($_COOKIE[$cookie_name])){
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        header('Location: ' . $_GET['web_address']);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlighten Career Institute : Best IIT JAM Coaching in Guwahati Register Page</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .main_content{
            position: absolute;
            padding: 0px;
            margin: 0px;
            left: 20vw;
            top: 12vh;
        }
        #msg_span{
            color: tomato;
        }
    </style>
</head>
<body>
    <div class="main_content">
    <form id="form_id" action="temp_save.php" method="post">
        <label for="full_name">Enter your name</label><br>
        <input type="text" name="full_name" id="full_name" placeholder="Full Name" required><br><br>
        <label for="phone_number">Enter your phone number</label><br>
        <input type="text" name="phone_number" id="phone_number" placeholder="phone number" required><br><br>
        <label for="mail_address">Enter your email</label><br>
        <input type="text" name="mail_address" id="mail_address" placeholder="xyz@example.com" required><br><br>
        <label for="address">Enter your address</label><br>
        <input type="text" name="address" id="address" placeholder="address" required>
        <input style="display: none;" type="text" name="url_address" id="url_address" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>