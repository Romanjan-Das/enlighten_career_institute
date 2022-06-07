function afterCollapse() {
    setTimeout(function () {
        var xx = document.getElementsByClassName("links").length;
        for (iii = 0; iii < xx; iii++) {
            document.getElementsByClassName("links")[iii].style.display = "none";
            document.getElementsByClassName("quick_links")[0].style.height = "9vh";
        }
    }, 500);
}

function expandQuickLinks() {
    var xx = document.getElementsByClassName("links").length;
    for (ii = 0; ii < xx; ii++) {
        document.getElementsByClassName("links")[ii].style.display = "inline-block";
    }
    document.getElementsByClassName("quick_links")[0].style.height = "70vh";
    document.getElementsByClassName("quick_links")[0].style.transition = "all 0.5s";
    if (window.innerHeight > window.innerWidth) {
        document.getElementsByClassName("quick_links")[0].style.transform = "translate(0vw,-50vh)";
    }
    else if (window.innerHeight < window.innerWidth) {
        document.getElementsByClassName("quick_links")[0].style.transform = "translate(0vw,-35vh)";
    }
    document.getElementsByClassName("quick_links_menu")[0].innerHTML = "&#8595; Quick Links";
    document.getElementsByClassName("quick_links_menu")[0].setAttribute("onclick", "collapseQuickLinks();");
}

function collapseQuickLinks() {
    document.getElementsByClassName("quick_links")[0].style.transition = "all 0.5s";
    document.getElementsByClassName("quick_links")[0].style.transform = "translate(0vw,0vh)";
    document.getElementsByClassName("quick_links_menu")[0].innerHTML = "&#8593; Quick Links";
    document.getElementsByClassName("quick_links_menu")[0].setAttribute("onclick", "expandQuickLinks();");
    afterCollapse();
}

var boolMenuFlag = false;

function showMenuModal() {
    if (boolMenuFlag == false) {
        document.getElementsByClassName("main_content")[0].style.display="none";
        document.getElementsByClassName("menu_modal")[0].style.transition = "all 0.3s";
        document.getElementsByClassName("menu_modal")[0].style.transform = "translate(0vw,240vw)";


        document.getElementsByClassName("menu_bar")[0].style.transform = "translate(0vw,2.9vw) rotate(40deg)";
        document.getElementsByClassName("menu_bar")[1].style.transform = "rotate(-40deg)";
        document.getElementsByClassName("menu_bar")[2].style.display = "none";
        document.getElementsByClassName("menu_bar")[0].style.transition = "all 0.2s";
        document.getElementsByClassName("menu_bar")[1].style.transition = "all 0.2s";

        boolMenuFlag = true;
    }
    else if (boolMenuFlag == true) {
        document.getElementsByClassName("main_content")[0].style.display="block";
        document.getElementsByClassName("menu_modal")[0].style.transition = "all 0.3s";
        document.getElementsByClassName("menu_modal")[0].style.transform = "translate(0vw,-240vw)";

        document.getElementsByClassName("menu_bar")[0].style.transform = "translate(0vw,0vw) rotate(0deg)";
        document.getElementsByClassName("menu_bar")[1].style.transform = "rotate(0deg)";
        document.getElementsByClassName("menu_bar")[2].style.display = "block";
        document.getElementsByClassName("menu_bar")[0].style.transition = "all 0.2s";
        document.getElementsByClassName("menu_bar")[1].style.transition = "all 0.2s";

        for (hk = 0; hk < document.getElementsByClassName("sub_menu_items").length; hk++) {
            document.getElementsByClassName("sub_menu_items")[hk].style.display = "none";
        }
        menu_expan_status = false;
        menu_prev = null;
        /*
        hideJamItems();
        hideDownloadItems();
        hideCourseItems();
        */
        boolMenuFlag = false;
    }


}

function showJamItems() {
    var jamitemslength = document.getElementsByClassName("jam").length;
    for (si = 0; si < jamitemslength; si++) {
        document.getElementsByClassName("jam")[si].style.display = "block";
    }
}

function hideJamItems() {
    var jamitemslength = document.getElementsByClassName("jam").length;
    for (si = 0; si < jamitemslength; si++) {
        document.getElementsByClassName("jam")[si].style.display = "none";
    }
}

function showDownloadItems() {
    var downloaditemslength = document.getElementsByClassName("downl").length;
    for (fi = 0; fi < downloaditemslength; fi++) {
        document.getElementsByClassName("downl")[fi].style.display = "block";
    }
}

function hideDownloadItems() {
    var downloaditemslength = document.getElementsByClassName("downl").length;
    for (fi = 0; fi < downloaditemslength; fi++) {
        document.getElementsByClassName("downl")[fi].style.display = "none";
    }
}

function showCourseItems() {
    var courseitemslength = document.getElementsByClassName("course").length;
    for (gi = 0; gi < courseitemslength; gi++) {
        document.getElementsByClassName("course")[gi].style.display = "block";
    }
}

function hideCourseItems() {
    var courseitemslength = document.getElementsByClassName("course").length;
    for (gi = 0; gi < courseitemslength; gi++) {
        document.getElementsByClassName("course")[gi].style.display = "none";
    }
}
/*
var boolLoginFlag = false;
function displayLogIn(){
    if (boolLoginFlag == false) {
        document.getElementsByClassName("login_modal")[0].style.transition = "all 0.8s";
        document.getElementsByClassName("login_modal")[0].style.transform = "translate(0vw,100vh)";
        document.getElementsByClassName("login_modal")[0].style.position = "fixed";
        boolLoginFlag = true;
    }
    else if(boolLoginFlag == true){
        document.getElementsByClassName("login_modal")[0].style.transition = "all 0.8s";
        document.getElementsByClassName("login_modal")[0].style.transform = "translate(0vw,-100vh)";
        document.getElementsByClassName("login_modal")[0].style.position = "absolute";
        boolLoginFlag = false;
    }
}
*/
var boolLoginFlag = false;
function displayLogIn() {/*
    if (boolLoginFlag == false) {
        document.getElementsByClassName("login_modal")[0].style.display = "block";
        boolLoginFlag = true;
    }
    else if (boolLoginFlag == true) {
        document.getElementsByClassName("login_modal")[0].style.display = "none";
        boolLoginFlag = false;
    }
*/
    window.location="login.php";
}

/*
function showReg(){
    document.getElementsByClassName("form_class")[0].display = "none";
    document.getElementsByClassName("form_class_2")[0].display = "block";
}

function showLogin(){
    document.getElementsByClassName("form_class")[0].display = "block";
    document.getElementsByClassName("form_class_2")[0].display = "none";
}
*/

function fun_co() {
    document.getElementsByClassName("courses_bar")[0].style.display = "none";
    document.getElementsByClassName("courses_bar")[1].style.display = "none";
    document.getElementsByClassName("courses_bar")[2].style.display = "none";
    //document.getElementsByClassName("courses_bar")[0].style.display = "block";
}

function fun_ja() {
    document.getElementsByClassName("courses_bar")[0].style.display = "none";
    document.getElementsByClassName("courses_bar")[1].style.display = "none";
    document.getElementsByClassName("courses_bar")[2].style.display = "none";
    //document.getElementsByClassName("courses_bar")[1].style.display = "block";
}

function fun_do() {
    document.getElementsByClassName("courses_bar")[0].style.display = "none";
    document.getElementsByClassName("courses_bar")[1].style.display = "none";
    document.getElementsByClassName("courses_bar")[2].style.display = "none";
    //document.getElementsByClassName("courses_bar")[2].style.display = "block";
}

function ddd(x) {
    x.style.height = "auto";
    //console.log(x.childNodes.length);
    var tt = x.childNodes;
    //console.log(tt[1]);
    for (gh = 1; gh < x.childNodes.length; gh = gh + 2) {
        tt[gh].style.display = "block";
    }
    //x.childNodes.style.display ="block";
}

function eee(x) {
    x.style.height = "6vh";
    //console.log(x.childNodes.length);
    var tt = x.childNodes;
    //console.log(tt[1]);
    for (gh = 1; gh < x.childNodes.length; gh = gh + 2) {
        tt[gh].style.display = "none";
    }
    //x.childNodes.style.display ="block";
}

/*
var menu_expan_status = false;
var menu_prev = null;
function show_sub_menu(x) {
    for (hk = 0; hk < document.getElementsByClassName("sub_menu_items").length; hk++) {
        document.getElementsByClassName("sub_menu_items")[hk].style.display = "none";
    }

    x.style.height = "auto";
    ///console.log(x.childNodes.length);
    var tt = x.childNodes;
    for (gh = 1; gh < x.childNodes.length; gh = gh + 2) {
        tt[gh].style.display = "block";
    }

    menu_expan_status = true;

    
    if(x==menu_prev){
        console.log(x);
        for (hk = 0; hk < document.getElementsByClassName("sub_menu_items").length; hk++) {
            document.getElementsByClassName("sub_menu_items")[hk].style.display = "none";
        }
        menu_expan_status = false;
        menu_prev = null;
    }
    else{
        menu_prev = x;
    }
}
*/



var menu_expan_status = false;
var menu_prev = null;
function show_sub_menu(x) {
    for (hk = 0; hk < document.getElementsByClassName("sub_menu_items").length; hk++) {
        document.getElementsByClassName("sub_menu_items")[hk].style.display = "none";
    }

    x.style.height = "auto";
    ///console.log(x.childNodes.length);
    var tt = x.childNodes;
    for (gh = 1; gh < x.childNodes.length; gh = gh + 2) {
        tt[gh].style.display = "block";
    }

    menu_expan_status = true;

    
    if(x==menu_prev){
        //console.log(x);
        /*
        for (hk = 0; hk < document.getElementsByClassName("sub_menu_items").length; hk++) {
            document.getElementsByClassName("sub_menu_items")[hk].style.display = "none";
        }
        */
        menu_expan_status = false;
        menu_prev = null;
    }
    else{
        menu_prev = x;
    }
}




function urlf(x){
    window.location=x;
}


window.onscroll = function(){
    scrollLimit();
} 

var scrollTopValue=0;

function scrollLimit(){
    if(document.body.scrollTop>scrollTopValue || document.documentElement.scrollTop>scrollTopValue){
        document.getElementsByClassName("top_bar")[0].style.position="absolute";
        document.getElementsByClassName("heading")[0].style.position="absolute";
        document.getElementsByClassName("quick_links")[0].style.display="none";
        if(document.body.scrollHeight>document.body.scrollWidth){
            document.getElementsByClassName("menu_icon")[0].style.position="absolute";
            //document.getElementsByClassName("quick_links")[0].style.display="block";  ///remove comment lines when quick links is used
        }
    }
    else if(document.body.scrollTop<scrollTopValue || document.documentElement.scrollTop<scrollTopValue){
        document.getElementsByClassName("top_bar")[0].style.position="fixed";
        document.getElementsByClassName("heading")[0].style.position="fixed";
        //document.getElementsByClassName("quick_links")[0].style.display="block";   ///remove comment lines when quick links is used
        if(document.body.scrollHeight>document.body.scrollWidth){
            document.getElementsByClassName("menu_icon")[0].style.position="fixed";
        }
    }
    scrollTopValue = document.body.scrollTop;
    scrollTopValue = document.documentElement.scrollTop;
}
