<!DOCTYPE html>
<html lang="en">

<head>
<?php readfile("template_head.txt");?>
    <style>
        .sub_content_content>img {
            width: 60%;
            margin: 5%;
            margin-left: 20%;
            box-shadow: 0px 0px 25px rgb(173, 173, 173);
        }
        .sub_content_content>img:hover{
            transform: scale(1.1);
            transition: 200ms;
        }

        @media (orientation:portrait) {
            .sub_content_content>img {
                width: auto;
                max-width: 90%;
                margin: 5%;
                box-shadow: 0px 0px 15px rgb(173, 173, 173);
            }
            .sub_content_content>img:hover{
                transform: scale(1);
                transition: 200ms;
            }
        }
    </style>
</head>

<body>
    <?php
    readfile("template_upper.txt");
    ?>
    <div class="main_content">
        <div class="main_content_title">
            Gallery
        </div>
        <div class="sub_content">
            <div class="sub_content_content">
                <img src="images/islide1.jpg" alt="">
                <img src="images/islide2.jpg" alt="">
                <img src="images/islide3.jpg" alt="">
                <img src="images/islide4.jpg" alt="">
                <img src="images/islide5.jpg" alt="">
                <img src="images/islide6.jpg" alt="">
            </div>
        </div>

    </div>

</body>

</html>