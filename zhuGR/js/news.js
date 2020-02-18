$(function () {
    $(".tip").hover(function (e) {
        var event = e || window.event;
        var $temp = $(event.target);
        // debugger;
        if($temp.hasClass("tips1"))
        {
            $(".item1").css("display","block");
            $(".item2").css("display","none");
            $(".item3").css("display","none");
            $(".header-name").text("  新闻中心>>集团新闻");
            $(".tips1").css("border-bottom","1px solid #ff6600");
            $(".tips2").css("border-bottom","0");
            $(".tips3").css("border-bottom","0");
        }
        else if($temp.hasClass("tips2"))
        {
            $(".item2").css("display","block");
            $(".item1").css("display","none");
            $(".item3").css("display","none");
            $(".header-name").text("  新闻中心>>地方动态");
            $(".tips2").css("border-bottom","1px solid #ff6600");
            $(".tips1").css("border-bottom","0");
            $(".tips3").css("border-bottom","0");
        }
        else
        {
            $(".item3").css("display","block");
            $(".item2").css("display","none");
            $(".item1").css("display","none");
            $(".header-name").text("  新闻中心>>媒体报道");
            $(".tips3").css("border-bottom","1px solid #ff6600");
            $(".tips2").css("border-bottom","0");
            $(".tips1").css("border-bottom","0");
        }
    });
    
});