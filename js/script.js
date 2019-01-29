
function hide_search() {
    document.getElementById("search-panel").style.height = "0px";
    document.getElementById("search-panel").style.display = "none";
}
function show_search($i = null){
    document.getElementById("search-panel").style.display = "block";
    document.getElementById("search-panel").style.height = "55px";
}
function show_social(){
    document.getElementById("social").style.display="block";
    document.getElementById("social").style.height="64px";
}
function hide_social(){
    document.getElementById("social").style.height="0px";
    document.getElementById("social").style.display="none";
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
        hide_search();
        hide_social();
        document.getElementById("search-btn-head").style.display = "block";
        document.getElementById("header").style.height = "60px"
        document.getElementById("header").style.position = "fixed";
        $( ".lim" ).css( "line-height", "60px" );
        document.getElementById("inheader").style.height = "60px";
        $( ".imuser" ).css( "margin-top", "9px" );
        $( ".text_user" ).css( "line-height", "55px" );
    } else {
       show_social()
        document.getElementById("search-btn-head").style.display = "none";
        document.getElementById("header").style.height = "90px"
        document.getElementById("header").style.position = "relative";
        document.getElementById("inheader").style.height = "90px";
        $( ".lim" ).css( "line-height", "90px" );
        $( ".imuser" ).css( "margin-top", "25px" );
        $( ".text_user" ).css( "line-height", "90px" );

    }
}
function scr_top() {
    window.scroll(0, 0);return false;
    show_search();
    document.getElementById("search-panel").style.height="110px";

}
$(document).ready(function () {
    /*       this part code for hover in post-title.php     */
    $("#i-in-lastpost").hover(function () {
        document.getElementById("post_title_image").style.filter = "grayscale(0%)";
        document.getElementById("i-in-lastpost").style.color = "#00aaff";
        document.getElementById("img-lastpost").style.boxShadow = "1px 1px 15px 2px";
    },function () {
        document.getElementById("post_title_image").style.filter = "grayscale(100%)";
        document.getElementById("i-in-lastpost").style.color = "#444";
        document.getElementById("img-lastpost").style.boxShadow = "1px 1px 5px 2px";
    })

    $(".span-image-lastpost").hover(function () {
        document.getElementById("post_title_image").style.filter = "grayscale(0%)";
        document.getElementById("i-in-lastpost").style.color = "#00aaff";
        document.getElementById("img-lastpost").style.boxShadow = "1px 1px 15px 2px";
    },function () {
        document.getElementById("post_title_image").style.filter = "grayscale(100%)";
        document.getElementById("i-in-lastpost").style.color = "#444";
        document.getElementById("img-lastpost").style.boxShadow = "1px 1px 5px 2px";
    })
    /*          end hover post_title.php           */
})

