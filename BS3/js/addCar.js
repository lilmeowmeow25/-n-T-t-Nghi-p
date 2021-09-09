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

    $('[name="addCar"]').click(function () {
        var carname = $('input[name="carname"]').val();
        var idcar = $('input[name="idcar"]').val();
        var price = $('input[name="price"]').val();
        var brand = $('input[name="brand"]').val();
        var sale = $('input[name="sale"]').val();
        var satatus = $('input[name="satatus"]').val();
        var company = $('input[name="company"]').val();
        var level = $('input[name="level"]').val();
        var dongco = $('input[name="dongco"]').val();
        var sit = $('input[name="sit"]').val();
        var hopso = $('input[name="hopso"]').val();
        var img = $('input[name="img"]').val();

        $.ajax({
            type: "POST",
            url: "addCar_submit.php",
            data: "carname=" + carname + "&idcar=" + idcar + "&price=" + price +  "&brand=" + brand + "&sale=" + sale + "&satatus=" + satatus + "&company=" + company + "&level=" + level + "&dongco=" + dongco + "&img=" + img +
            "&sit=" + sit + "&hopso=" +hopso
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


  