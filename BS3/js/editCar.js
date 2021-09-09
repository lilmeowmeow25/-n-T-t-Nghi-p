$(document).ready(function () {
    function alert(type = 'primary', message = '', hide = false) {
        var element = $('div[name="alert"]');
        element.attr("class", "alert alert-" + type); // success - primary - warning - error
        element.html(message);

        if (hide) {
            setTimeout(function () {
                element.attr("class", "");
                element.html("");
            }, 1000);
        }
    }

    function redirect(url) { 
        setTimeout(function () {
            window.location.href = url;
        }, 3000);
    }

});


  