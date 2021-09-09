$(document).ready(function () {
  function alert(type = "primary", message = "", hide = false) {
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

  $('[name="register"]').click(function () {
    var name = $('input[name="name"]').val();
    var username = $('input[name="username"]').val();
    var password = $('input[name="password"]').val();
    var repassword = $('input[name="repassword"]').val();
    var email = $('input[name="email"]').val();
    var phone = $('input[name="phone"]').val();
    var address = $('input[name="address"]').val();
    var idcar = $('input[name="idcar"]').val();

    $.ajax({
      type: "POST",
      url: "register_submit.php",
      data:
        "&name=" +
        name +
        "&username=" +
        username +
        "&password=" +
        password +
        "&repassword=" +
        repassword +
        "&email=" +
        email +
        "&phone=" +
        phone +
        "&address=" +
        address +
        "&idcar=" +
        idcar,
      success: function (response) {
        try {
          var json = JSON.parse(response);
          if (json && json.type != "") {
            if (json.type == "success") {
              alert(json.type, json.message, true);
              // location.replace("/Template/login.php");
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
    });
  });
});
