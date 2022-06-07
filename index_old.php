<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlighten Career Institute : Best IIT JAM Coaching in Guwahati</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>
        var numberOfSlides = 7;

        function firstSlide() {
            document.getElementsByClassName("image_slide")[0].style.display = "block";
        }

        var i = 1;
        setInterval(function () {
            if (i == numberOfSlides) {
                i = 0;
            }
            for (j = 0; j < numberOfSlides; j++) {
                if (i != j) {
                    document.getElementsByClassName("image_slide")[j].style.display = "none";
                }
            }
            document.getElementsByClassName("image_slide")[i].style.display = "block";
            i++;
        }, 4000);
    </script>
    <script src="script.js"></script>
    <style>
        .main_content {
            position: absolute;
            left: 0px;
            top: 20vw;
            width: 100vw;
            padding: 0px;
            box-sizing: border-box;
        }

        .login_icon {
            position: absolute;
            top: 5vw;
            left: 75vw;
            height: 6vw;
            width: 20vw;
            background-color: white;
            border-radius: 7vw;
            border: solid 0.1vw black;
            font-size: 3.5vw;
            text-align: center;
            box-sizing: border-box;
        }

        @media only screen and (orientation: landscape) {

            .main_content {
                position: absolute;
                left: 0px;
                top: 14vh;
                width: 100vw;
                padding: 0px;
                padding-bottom: 15vh;
                box-sizing: border-box;
            }

            .login_icon{
                display: none;
            }
        }
    </style>
</head>

<body onload="firstSlide();">
    <?php
    readfile("template_upper.txt");
    ?>
    <div class="main_content">
        <div class="first_screen">
            <div class="tagline">Your success our dream</div>
        </div>
        <div class="image_slideshow" onclick="urlf('temp_reg.php?web_address=already_reg.php');">
            <img class="image_slide" src="images/slide1.jpg" />
            <img class="image_slide" src="images/slide2.jpg" />
            <img class="image_slide" src="images/slide3.jpg" />
            <img class="image_slide" src="images/slide4.jpg" />
            <img class="image_slide" src="images/slide5.jpg" />
            <img class="image_slide" src="images/slide6.jpg" />
            <img class="image_slide" src="images/slide7.jpg" />
        </div>
        <div class="main_items"
            onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLSdvScd-O-5SKX-hQs22XD2eaotl-Pz-JftRRRUOhvhprNf4Og/viewform?usp=sf_link');">
            Registration for offline classes
        </div>
        <!---
        <div class="main_items" onclick="urlf('x_knowf.php');">
            Know Your Fees
        </div>
        --->
        <div class="main_items"
            onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLScdq97rdr-epuarqpB3YB3HfbNqt3MPDW-GO8bg9x3hKK6xiQ/viewform?usp=pp_url');">
            Know Your Fees
        </div>
        <div class="main_items" onclick="urlf('x_oldque.php');">
            Old Question Paper
        </div>
        <div class="main_items" onclick="urlf('x_freque.php');">
            JAM Practice Paper
        </div>
        <div class="main_items" onclick="urlf('x_doubt.php');">
            24x7 Doubt Submission
        </div>

        <div class="main_items_land">
            <div class="main_items2"
                onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLSdvScd-O-5SKX-hQs22XD2eaotl-Pz-JftRRRUOhvhprNf4Og/viewform?usp=sf_link');">
                Registration for offline classes
            </div>
            <!----
            <div class="main_items2" onclick="urlf('x_knowf.php');">
                Know Your Fees
            </div>
            -->
            <div class="main_items2"
                onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLScdq97rdr-epuarqpB3YB3HfbNqt3MPDW-GO8bg9x3hKK6xiQ/viewform?usp=pp_url');">
                Know Your Fees
            </div>
            <div class="main_items2" onclick="urlf('x_oldque.php');">
                Old Question Paper
            </div>
            <div class="main_items2" onclick="urlf('x_freque.php');">
                JAM Practice Paper
            </div>
            <div class="main_items2" onclick="urlf('x_doubt.php');">
                24x7 Doubt Submission
            </div>
        </div>

        <div class="login_icon" onclick="urlf('temp_reg.php?web_address=already_reg.php');">Register</div>

        <div class="home_div_class">
            <div class="home_div_heading">ENLIGHTEN CAREER INSTITUTE(ECI)</div>
            <div class="home_div_content">A pioneering institute present at the heart of North east (Guwahati).It
                provides quality education and encouraging atmosphere to the aspiring candidates for getting admissions
                into the top most institutes of the Country like IISc , IIT/NIT and other prestigious institutes for
                doing M.Sc. ,Joint M.Sc.-PhD ,M.Sc.-PhD Dual degree , M.Sc.-Mtech Dual degree and integrated Phd Through
                Joint Admission test for Masters (JAM , Formally known as Joint Admission test for M.Sc.) and Through
                TIFR,JEST,HCU,BHU,DU,JNU,IISER, CMI , NBHM , CUCET etc.

            </div>
        </div>





        <div class="share_bar">
            <img class="share_bar_icons" src="images/facebook.png" alt=""
                onclick="urlf('https://www.facebook.com/enlightencareerinstitute/');">
            <img class="share_bar_icons" src="images/twitter.png" alt=""
                onclick="urlf('https://twitter.com/EnlightenCaree1');">
            <img class="share_bar_icons" src="images/instagram.png" alt=""
                onclick="urlf('https://www.instagram.com/instituteenlightencareer/?igshid=of2odc10h11b');">
            <img class="share_bar_icons" src="images/gmail.png" alt=""
                onclick="urlf('mailto: enlightencareerinstitute@gmail.com');">
            <img class="share_bar_icons" src="images/gmaps.png" alt=""
                onclick="urlf('https://goo.gl/maps/PChBBU5xwWYh6P5d9');">
            <img class="share_bar_icons" src="images/whatsapp.png" alt="" onclick="urlf('https://wa.me/916026675355');">
        </div>
    </div>
</body>

</html>