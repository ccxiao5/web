$(function () {
    var username = /^[\u4e00-\u9fa5]+(·[\u4e00-\u9fa5]+)*$/;
    var email = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
    var mobile = /^1[3|4|5|8][0-9]\d{4,8}$/;//手机
    $("input.name").blur(function () {
        debugger;
        if($("div.name").find("p").length == 0) {
            $("div.name").append('<p class="danger"></p>');
        }
        if($("input.name").val() == ""){
            $("div.name .danger").text("请输入姓名");
            return;
        }
        else{
            if(!username.test($("input.name").val())){
                $("div.name .danger").text("请输入正确姓名");
                return;
            }
            else{
                $("div.name .danger").remove();
            }
        }
    });
    $("input.email").blur(function () {
        // debugger;
        if($("div.email").find("p").length == 0) {
            $("div.email").append('<p class="danger"></p>');
        }
        if ($("input.email").val() == "") {
            $("div.email .danger").text("请输入邮箱");
            return;
        }
        else {
            if (!email.test($("input.email").val())) {
                $("div.email .danger").text("请输入正确邮箱");
                return;
            }
            else{
                $("div.email .danger").remove();
            }
        }
    });
    $("input.phone").blur(function () {
        // debugger;
        if($("div.phone").find("p").length == 0) {
            $("div.phone").append('<p class="danger"></p>');
        }
        if ($("input.phone").val() == "") {
            $("div.phone .danger").text("请输入电话");
            return;
        }
        else {
            if (!mobile.test($("input.phone").val())) {
                $("div.phone .danger").text("请输入正确的电话");
                return;
            }
            else{
                $("div.phone .danger").remove();
            }
        }
    });
    $("textarea").blur(function () {
        // debugger;
        if($("#advice").find("p").length == 0) {
            $("#advice").append('<p class="danger"></p>');
        }
        if ($("textarea").val().toString().length < 5) {
            $("#advice .danger").text("建议不少于五个字");
            return;
        }
        else {
            $("#advice .danger").remove();
        }
    });


});