//original resource from: https://www.w3schools.com/js/js_cookies.asp
//author: w3c school
// setcookie function
function setCookie(cname, cvalue, exdays) {
    var d = new Date();//data variable
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));//set cookies time
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";//set cookies 
}
// get cookies from web
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');// split cookie by;
    for(var i = 0; i < ca.length; i++) {//loop ca
        //get cookie
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    //stop loop
    return "";
}
// check cookie
function checkCookie() {
    //get cookies
    var user = getCookie("username");
    //check is empty
    if (user != "") {
        //alert message
        alert("Dear "+user+", Welcome to All Mobiles!");
    } 
// clear cookies 
}
function eraseCookie(name) {
    setCookie(name,"",-1);
}