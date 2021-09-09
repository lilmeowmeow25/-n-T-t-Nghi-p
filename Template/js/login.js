$(document).ready(function () {
  function alert(type = "primary", message = "", hide = false) {
    var element = $('div[name="alert"]');
    element.attr("class", "alert alert-" + type); // success - primary - warning - error
    element.html(message);

    if (hide) {
      setTimeout(function () {
        element.attr("class", "");
        element.html("");
      }, 3000);
    }
  }

  $('[name="login"]').click(function () {
    var username = $('input[id="username"]').val();
    var password = $('input[id="password"]').val();

    $.ajax({
      type: "POST",
      url: "login_submit.php",
      data: {
        username: username,
        password: password,
      },
      success: function (response) {
        console["log"]("chay ok roi ne. connect lai het xem");
        try {
          var json = JSON.parse(response);
          if (json && json.type != "") {
            if (json.type == "success") {
              alert(json.type, json.message, true);
              location.replace("/Template/index.php");
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
