<!DOCTYPE html>
<html lang="en">

<head>
    <?php readfile("template_head.txt");?>
    <style>
        /** For slideshow loading screen only **/
        .css_loader {
            border: 1vmin solid #f3f3f3;
            border-radius: 50%;
            border-top: 1vmin solid #3498db;
            width: 5vmin;
            height: 5vmin;
            margin: auto;
            padding: 0px;
            animation: spin 700ms linear infinite;
        }

        .css_helper{
            width: 50%;
            height: 40%;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        var checkDimIntv;
        var slideWidth;
        var imageSlideshow;
        var slidesContainer;
        var numberOfSlides;
        var slideControls;
        var slideshowTimer;
        var slideNumber = 0;
        var slidePointers = [];
        var bodyClientWidth;
        var touchStartX=0;
        var touchmoveX=0;
        var touchStatusBool=true;
        var imgHoverStatus=[];
        var forSlidePointers="";
        var forSlidePointers2="";

        function checkDimensionChange(){
            if(bodyClientWidth != document.body.clientWidth){
                bodyClientWidth = document.body.clientWidth;
                resetTheDimensions();
            }
        }
        function slideshowInitialise(){
            imageSlideshow = document.getElementsByClassName("image_slideshow")[0];
            imageSlideshow.style.padding="0px";
            bodyClientWidth = document.body.clientWidth;
            checkDimIntv = setInterval(() => {
                checkDimensionChange();
            }, 500);
            imageSlideshow.style.overflow="hidden";
            slidesContainer = document.getElementsByClassName("slide_container")[0];
            numberOfSlides= document.getElementsByClassName("slides").length;
            for(i=0;i<numberOfSlides;i++){
                document.getElementsByClassName("slides")[i].style.margin="0px";
                document.getElementsByClassName("slides")[i].style.float="left";
            }
            slideControls = document.getElementsByClassName("slide_controls")[0];
            slideControls.style.padding="0px";
            slideControls.style.backgroundColor="white";
            slidesContainer.style.transition = "700ms";
            document.getElementsByClassName("slide_control_icon")[0].style.float = "left";
            document.getElementsByClassName("slide_control_icon")[1].style.float = "left";
            document.getElementsByClassName("slide_control_pointer_bar")[0].style.float = "left";
            document.getElementsByClassName("slide_control_icon_img")[0].style.float = "left";
            document.getElementsByClassName("slide_control_icon_img")[1].style.float = "left";

            for(i=0;i<numberOfSlides;i++){
                slidePointers[i] = document.createElement("div");
                slidePointers[i].className = "slide_pointers";
                document.getElementsByClassName("slide_control_pointer_container")[0].appendChild(slidePointers[i]); 
            }

            for(i=0;i<numberOfSlides;i++){
                document.getElementsByClassName("slide_pointers")[i].style.border = "1px solid gainsboro";
                document.getElementsByClassName("slide_pointers")[i].style.borderRadius = "50%";
                document.getElementsByClassName("slide_pointers")[i].style.float = "left";
                document.getElementsByClassName("slide_pointers")[i].id="slide_pointer_"+i;
                document.getElementsByClassName("slide_pointers")[i].setAttribute("onclick","gotoSlide(this);");
                forSlidePointers="document.getElementsByClassName(\"slide_pointers\")["+i+"].style.borderColor= \"slategrey\";"
                forSlidePointers2="document.getElementsByClassName(\"slide_pointers\")["+i+"].style.borderColor= \"gainsboro\";"
                document.getElementsByClassName("slide_pointers")[i].setAttribute("onmouseover",forSlidePointers);
                document.getElementsByClassName("slide_pointers")[i].setAttribute("onmouseout",forSlidePointers2);
            }
            

            document.getElementsByClassName("slide_control_pointer_container")[0].style.margin = "auto";
            document.getElementsByClassName("slide_control_pointer_container")[0].style.boxSizing = "border-box";

            for(i=0;i<numberOfSlides;i++){
                document.getElementsByClassName("slide_pointers")[i].style.backgroundColor = "white";
            }
            document.getElementsByClassName("slide_pointers")[0].style.backgroundColor = "gainsboro";
            resetTheDimensions();
            startsTheInterval();
            if(window.innerHeight<window.innerWidth){
                imageSlideshow.addEventListener("mouseover",clearsTheInterval,false);
                imageSlideshow.addEventListener("mouseout",startsTheInterval,false);
            }
            slidesContainer.setAttribute("ontouchstart","ontouchstartEvent(event);");
            slidesContainer.setAttribute("ontouchmove","ontouchmoveEvent(event);");
            slidesContainer.setAttribute("ontouchend","touchStatusBool=true;startsTheInterval();");
            document.getElementsByClassName("slide_control_icon")[0].addEventListener("click",prevSlide,false);
            document.getElementsByClassName("slide_control_icon")[1].addEventListener("click",nextSlide,false);
            document.getElementsByClassName("slide_control_icon_img")[0].style.opacity = "0.25";
            document.getElementsByClassName("slide_control_icon_img")[1].style.opacity = "0.25";
            imgHoverStatus[0]=document.getElementsByClassName("slide_control_icon")[0];
            imgHoverStatus[0].addEventListener("mouseover",function(){document.getElementsByClassName("slide_control_icon_img")[0].style.opacity = "1";},false);
            imgHoverStatus[0].addEventListener("mouseout",function(){document.getElementsByClassName("slide_control_icon_img")[0].style.opacity = "0.25";},false);
            imgHoverStatus[1]=document.getElementsByClassName("slide_control_icon")[1];
            imgHoverStatus[1].addEventListener("mouseover",function(){document.getElementsByClassName("slide_control_icon_img")[1].style.opacity = "1";},false);
            imgHoverStatus[1].addEventListener("mouseout",function(){document.getElementsByClassName("slide_control_icon_img")[1].style.opacity = "0.25";},false);
            document.getElementsByClassName("css_helper")[0].style.display="none";
            document.getElementsByClassName("css_loader")[0].style.display="none";
            document.getElementsByClassName("image_slideshow")[0].style.display="block";
        }
        function ontouchstartEvent(event){
            clearsTheInterval();
            touchStartX = event.touches[0].clientX;
        }
        function ontouchmoveEvent(event){
            if(touchStartX-event.touches[0].clientX>slideWidth/5 && touchStatusBool){
                if(slideNumber!=numberOfSlides-1){
                    nextSlide();
                }
                touchStatusBool = false;
            }
            if(event.touches[0].clientX-touchStartX>slideWidth/5 && touchStatusBool){
                if(slideNumber!=0){
                    prevSlide();
                }
                touchStatusBool = false;
            }
        }
        function clearsTheInterval(){
            clearInterval(slideshowTimer);
        }
        function startsTheInterval(){
            slideshowTimer = setInterval(() => {
                slideNumber++;
                if(slideNumber>numberOfSlides-1){
                    slideNumber=0;
                }
                slidesContainer.style.transform="translateX(-"+slideWidth*slideNumber+"px)";
                for(i=0;i<numberOfSlides;i++){
                    document.getElementsByClassName("slide_pointers")[i].style.backgroundColor = "white";
                }
                document.getElementsByClassName("slide_pointers")[slideNumber].style.backgroundColor = "gainsboro";
            }, 2200);
        }
        function nextSlide(){
            slideNumber++;
                if(slideNumber>numberOfSlides-1){
                    slideNumber=0;
                }
            slidesContainer.style.transform="translateX(-"+slideWidth*slideNumber+"px)";
                for(i=0;i<numberOfSlides;i++){
                    document.getElementsByClassName("slide_pointers")[i].style.backgroundColor = "white";
                }
                document.getElementsByClassName("slide_pointers")[slideNumber].style.backgroundColor = "gainsboro";
        }
        function prevSlide(){
            slideNumber=slideNumber-1;
                if(slideNumber<0){
                    slideNumber=numberOfSlides-1;
                }
            slidesContainer.style.transform="translateX(-"+slideWidth*slideNumber+"px)";
                for(i=0;i<numberOfSlides;i++){
                    document.getElementsByClassName("slide_pointers")[i].style.backgroundColor = "white";
                }
                document.getElementsByClassName("slide_pointers")[slideNumber].style.backgroundColor = "gainsboro";
        }
        function gotoSlide(x){
            var str = x.id;
            str = str.slice(14,str.length);
            slideNumber=parseInt(str);
            slidesContainer.style.transform="translateX(-"+slideWidth*slideNumber+"px)";
                for(i=0;i<numberOfSlides;i++){
                    document.getElementsByClassName("slide_pointers")[i].style.backgroundColor = "white";
                }
                document.getElementsByClassName("slide_pointers")[slideNumber].style.backgroundColor = "gainsboro";
        }
        function resetTheDimensions(){
            slideWidth = document.getElementsByClassName("image_slideshow")[0].parentElement.clientWidth;
            imageSlideshow.style.width=slideWidth+"px";
            imageSlideshow.style.height = slideWidth*7/10 + "px";
            slidesContainer.style.height=slideWidth*6/10+"px";
            slidesContainer.style.width=(numberOfSlides*slideWidth+1)+"px";
            for(i=0;i<numberOfSlides;i++){
                document.getElementsByClassName("slides")[i].style.width=slideWidth+"px";
                document.getElementsByClassName("slides")[i].style.height=slideWidth*6/10+"px";
            }
            slideControls.style.height=slideWidth/10+"px";
            slideControls.style.width=slideWidth+"px";
            document.getElementsByClassName("slide_control_icon")[0].style.width = slideWidth/10+"px";
            document.getElementsByClassName("slide_control_icon")[0].style.height = slideWidth/10+"px";

            document.getElementsByClassName("slide_control_icon")[1].style.width = slideWidth/10+"px";
            document.getElementsByClassName("slide_control_icon")[1].style.height = slideWidth/10+"px";

            document.getElementsByClassName("slide_control_pointer_bar")[0].style.width = (slideWidth - slideWidth/5)+"px";
            document.getElementsByClassName("slide_control_pointer_bar")[0].style.height = slideWidth/10+"px";
            
            document.getElementsByClassName("slide_control_icon_img")[0].style.width = slideWidth/20+"px";
            document.getElementsByClassName("slide_control_icon_img")[0].style.height = slideWidth/20+"px";
            document.getElementsByClassName("slide_control_icon_img")[0].style.margin = slideWidth/40+"px";
            document.getElementsByClassName("slide_control_icon_img")[1].style.width = slideWidth/20+"px";
            document.getElementsByClassName("slide_control_icon_img")[1].style.height = slideWidth/20+"px";
            document.getElementsByClassName("slide_control_icon_img")[1].style.margin = slideWidth/40+"px";

            for(i=0;i<numberOfSlides;i++){
                document.getElementsByClassName("slide_pointers")[i].style.width = slideWidth/25+"px";
                document.getElementsByClassName("slide_pointers")[i].style.height = slideWidth/25+"px";
                document.getElementsByClassName("slide_pointers")[i].style.marginLeft = slideWidth/50+"px";
            }
            
            //document.getElementsByClassName("slide_control_pointer_container")[0].style.width = (slideWidth/16 + slideWidth/50)*numberOfSlides+"px";
            document.getElementsByClassName("slide_control_pointer_container")[0].style.marginLeft= (((slideWidth - slideWidth/5)-(slideWidth/25 + slideWidth/50)*numberOfSlides)/2 - slideWidth/50)+"px";
            document.getElementsByClassName("slide_control_pointer_container")[0].style.height = slideWidth/10+"px";     
            document.getElementsByClassName("slide_control_pointer_container")[0].style.paddingTop = (slideWidth/11 - slideWidth/25)/2+"px";

            slidesContainer.style.transform="translateX(-"+slideWidth*slideNumber+"px)";
        }
    </script>
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

<body onload="slideshowInitialise();">
    <?php
    readfile("template_upper.txt");
    ?>
    <div class="main_content">
        <div class="first_screen">
            <div class="tagline">Your success our dream</div>
        </div>
        <div class="image_slideshow_container">
        <div class="css_helper"></div>
        <div class="css_loader"></div>
        <div class="image_slideshow" style="display:none;">
            <div class="slide_container" onclick="urlf('temp_reg.php?web_address=already_reg.php');">
            <img class="slides" src="images/kslide (1).jpg" />
            <img class="slides" src="images/kslide (2).jpg" />
            <img class="slides" src="images/kslide (3).jpg" />
            <img class="slides" src="images/kslide (4).jpg" />
            <img class="slides" src="images/kslide (5).jpg" />
            <img class="slides" src="images/kslide (6).jpg" />
            <img class="slides" src="images/kslide (7).jpg" />
            </div>
            <div class="slide_controls">
                <div class="slide_control_icon"><img class="slide_control_icon_img" src="images/slide_left_img.svg" alt=""></div>
                <div class="slide_control_pointer_bar">
                    <div class="slide_control_pointer_container">
                    </div>
                </div>
                <div class="slide_control_icon"><img class="slide_control_icon_img" src="images/slide_right_img.svg" alt=""></div>
            </div>
        </div>
            
        </div>
        <div class="main_items first_main_item"
            onclick="urlf('https://forms.gle/Ka3sXqt6LRdtN37u8');">
            Registration for webinar
        </div>
        <div class="main_items"
            onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLSdvScd-O-5SKX-hQs22XD2eaotl-Pz-JftRRRUOhvhprNf4Og/viewform?usp=sf_link');">
            Registration for classes
        </div>
        <!---
        <div class="main_items" onclick="urlf('x_knowf.php');">
            Know Your Fees
        </div>
        ---><!-------
        <div class="main_items"
            onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLScdq97rdr-epuarqpB3YB3HfbNqt3MPDW-GO8bg9x3hKK6xiQ/viewform?usp=pp_url');">
            Know Your Fees
        </div>------>
        <div class="main_items" onclick="urlf('results.php');">
            Our Results
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
        <div class="main_items" onclick="urlf('gallery.php');">
            Gallery
        </div>

        <div class="main_items_land">
            <div class="main_items2"
                onclick="urlf('https://forms.gle/Ka3sXqt6LRdtN37u8');">
                Registration for webinar
            </div>
            <div class="main_items2"
                onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLSdvScd-O-5SKX-hQs22XD2eaotl-Pz-JftRRRUOhvhprNf4Og/viewform?usp=sf_link');">
                Registration for online-offline classes
            </div>
            <!----
            <div class="main_items2" onclick="urlf('x_knowf.php');">
                Know Your Fees
            </div>
            --><!------
            <div class="main_items2"
                onclick="urlf('https://docs.google.com/forms/d/e/1FAIpQLScdq97rdr-epuarqpB3YB3HfbNqt3MPDW-GO8bg9x3hKK6xiQ/viewform?usp=pp_url');">
                Know Your Fees
            </div>------->
            <div class="main_items2" onclick="urlf('results.php');">
                Our Results
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
            <div class="main_items2" onclick="urlf('gallery.php');">
                Gallery
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