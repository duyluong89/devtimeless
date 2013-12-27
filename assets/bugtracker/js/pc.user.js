/**
 * Created with JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/26/13
 * Time: 11:45 AM
 * To change this template use File | Settings | File Templates.
 */
var user = {
    login: function () {
        $("#btn_login").click(function () {
            $.ajax({
                url: config.url + "/login",
                type: "POST",
                data: $("#user_login").serialize(),
                dataType: "json",
                beforeSend: function () {
                    $("#login-form").append("<div class='loading-ajax'><img src='" + config.loading + "' /></div>");
                }
            }).done(function (data) {
                    if (data.error === 0) {
                        window.location = config.url + "/home";
                    } else {
                        notifications.addError({
                            text: data.message,
                            duration: 2000
                        });
                        $("#login-form .loading-ajax").remove();
                        return false;
                    }
                });
            return false;
        });
    }

}