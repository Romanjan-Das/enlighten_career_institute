<!DOCTYPE html>
<html lang="en">

<head>
<?php readfile("template_head.txt");?>
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
        }

        .flex-container>div {
            width: 15vw;
            margin: 2vw;
            text-align: center;
        }

        .flex-container>div>img:hover {
            transform: scale(1.1);
            transition: 200ms;
        }

        @media only screen and (orientation: portrait) {
            .flex-container {
                display: flex;
                flex-wrap: wrap;
            }

            .flex-container>div {
                width: 80vw;
                margin: 2vw;
                margin-bottom: 10vw;
                text-align: center;
            }
            .flex-container>div>img:hover {
             transform: scale(1);
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
            Our JAM Results
        </div>
        <div class="sub_content">
            <div class="sub_content_content">
                <div class="flex-container">
                    <div>
                        <img src="images/results_people/dhrubajyoti_goswami.jpg" alt="">
                        <div>Dhrubajyoti Goswami</div>
                    </div>
                    <div>
                        <img src="images/results_people/harshit_kagliwal.jpg" alt="">
                        <div>Harshit Kagliwal</div>
                    </div>
                    <div>
                        <img src="images/results_people/kapinjal_talukdar.jpg" alt="">
                        <div>Kapinjal Talukdar</div>
                    </div>
                    <div>
                        <img src="images/results_people/sasanka_talukdar.jpg" alt="">
                        <div>Sasanka Talukdar</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>