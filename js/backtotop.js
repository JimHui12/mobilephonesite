/*
w3schools n.d., How To - Scroll Back To Top Button, viewed 10 May 2017, from:
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_scroll_to_top
*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backtotop").style.display = "block";
    } else {
        document.getElementById("backtotop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}