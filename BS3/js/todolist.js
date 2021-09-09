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
        }, 1200);
    }

    $('[name="todolist"]').click(function () {
        var name = $('input[name="name"]').val();
        var do1 = $('input[name="do1"]').val();
        var do2 = $('input[name="do2"]').val();
        var do3 = $('input[name="do3"]').val();
        var do4 = $('input[name="do4"]').val();
        var do5 = $('input[name="do5"]').val();
        var do6 = $('input[name="do6"]').val();

        $.ajax({
            type: "POST",
            url: "todolist_submit.php",
            data: "name=" + name + "&do1=" + do1 + "&do2=" + do2 +  "&do3=" + do3 + "&do4=" + do4 + "&do5=" + do5 + "&do6=" + do6 
            ,
            success: function (response) {
                try {
                    var json = JSON.parse(response);
                    if (json && json.type != '') {
                        if (json.type == "success") {
                            alert(json.type, json.message, true);
                            location.replace("#");
                        }
                        alert(json.type, json.message);
                    }
                } catch (error) {
                    alert(error);
                }
            },
            error: function (error) {
                alert(error);
            },
        })
    });
});


  