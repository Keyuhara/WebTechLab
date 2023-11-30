function checkCookie() {
    var user = getCookie('username');
    if (user != '') {
        alert('Welcome again ' + user);
    }
    else {
        setCookie();
    }
}

function getCookie(name) {
    var cookieArr = document.cookie.split(';');
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split('=');
        if (name == cookiePair[0].trim()) {
        return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}

function setCookie() {
    document.cookie = "username = Joe";
    //document.cookie = "username = Joe; max-age = " + 100; 
}