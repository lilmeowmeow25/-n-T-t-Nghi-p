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

    $('[name="addContract"]').click(function () {
        var nameser = $('input[name="nameser"]').val();
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var phone = $('input[name="phone"]').val();
        var address = $('input[name="address"]').val();
        var address2 = $('input[name="address2"]').val();
        var date = $('input[name="date"]').val();
        var time = $('input[name="time"]').val();
        var note = $('input[name="note"]').val();

        $.ajax({
            type: "POST",
            url: "addContract_submit.php",
            data: "nameser=" + nameser + "&name=" + name + "&email=" + email +  "&phone=" + phone + "&address=" + address + "&address2=" + address2 + "&date=" + date + "&time=" + time + "&note=" + note 
            
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


  