$(function () {
    var act = $(".section_2").attr("class").toString().split(" ")[1];
    //  获取当前进入新闻的根目录 item_X
    var list = $(".media-body").attr("class").toString().split(" ")[1];
    //   获取该新闻的位置 list_X
    // debugger;
    $(".section_3." + act + " ." + list).css("border-left","2px solid #ff6600");
    $(".section_3." + act + " ." + list + " a").css("cursor","default");
    // debugger;
    $(".section_3").each(function (i,element) {
        if($(element).css("display") == "block")
        {
            var temp = $(element).attr("class").split(" ")[1].replace("item",".tips");
            $(temp).css("border-bottom", "1px solid #ff6600");
        }
    });
    $(".tip").hover(function (e) {
        var event = e || window.event;
        var $temp = $(event.target);
        if($temp.hasClass("tips1"))
        {
            $(".section_3.item1").css("display","block");
            $(".section_3.item2").css("display","none");
            $(".section_3.item3").css("display","none");
            $(".tips1").css("border-bottom","1px solid #ff6600");
            $(".tips2").css("border-bottom","0");
            $(".tips3").css("border-bottom","0");
        }
        else if($temp.hasClass("tips2"))
        {
            $(".section_3.item2").css("display","block");
            $(".section_3.item1").css("display","none");
            $(".section_3.item3").css("display","none");
            $(".tips2").css("border-bottom","1px solid #ff6600");
            $(".tips1").css("border-bottom","0");
            $(".tips3").css("border-bottom","0");
        }
        else
        {
            $(".section_3.item3").css("display","block");
            $(".section_3.item2").css("display","none");
            $(".section_3.item1").css("display","none");
            $(".tips3").css("border-bottom","1px solid #ff6600");
            $(".tips2").css("border-bottom","0");
            $(".tips1").css("border-bottom","0");
        }
    });
});