$(function () {
    var $root = $("html,body");
    var location = [];
    location["position_1"] = false;
    location["position_2"] = false;
    location["position_3"] = false;
    location["position_4"] = false;
    location["position_5"] = false;
    location["position_6"] = false;
    location["position_7"] = false;
    var offset1, offset2, offset3,
        offset4, offset5, offset6, offset7;
    offset1 = $("[name = position_1]").offset().top - 2 * parseInt($(".header_top").css("height").toString().split("px")[0]);
    offset2 = $("[name = position_2]").offset().top - 2 * parseInt($(".header_top").css("height").toString().split("px")[0]);
    offset3 = $("[name = position_3]").offset().top - 2 * parseInt($(".header_top").css("height").toString().split("px")[0]);
    offset4 = $("[name = position_4]").offset().top - 2 * parseInt($(".header_top").css("height").toString().split("px")[0]);
    offset5 = $("[name = position_5]").offset().top - 2 * parseInt($(".header_top").css("height").toString().split("px")[0]);
    offset6 = $("[name = position_6]").offset().top - 2 * parseInt($(".header_top").css("height").toString().split("px")[0]);
    offset7 = offset6 + parseInt($("#section_6").css("height").toString().split("px")[0]) / 2;

    function initi () {
        for (var i in location)
            location[i] = false;
    }
    debugger;
    $(window).scroll(function () {
        var Scroll = $(document).scrollTop();
        $("[class = 'active']").removeAttr("class");
        if (Scroll < offset2 && Scroll >= offset1) {
            initi();
            $("[href =#position_1]").parent().attr("class", "active");
            location["position_1"] = true;
        }
        else if (Scroll < offset3 && Scroll >= offset2) {
            initi();
            $("[href=#position_2]").parent().attr("class", "active");
            location["position_2"] = true;
        }
        else if (Scroll < offset4 && Scroll >= offset3) {
            initi();
            $("[href=#position_3]").parent().attr("class", "active");
            location["position_3"] = true;
        }
        else if (Scroll < offset5 && Scroll >= offset4) {
            initi();
            $("[href=#position_4]").parent().attr("class", "active");
            location["position_4"] = true;
        }
        else if (Scroll < offset6 && Scroll >= offset5) {
            initi();
            $("[href=#position_5]").parent().attr("class", "active");
            location["position_5"] = true;
        }
        else if (Scroll < offset7 && Scroll >= offset6) {
            initi();
            $("[href=#position_6]").parent().attr("class", "active");
            location["position_6"] = true;
        }
        else {
            initi();
            $("[href=#position_7]").parent().attr("class", "active");
            location["position_7"] = true;
        }
    });
    $("a").on("click", function (e) {
        debugger;
        var event = e || window.event;
        var son = $(event.target);
        var father = son.parent();
        var Name = father.prop("tagName");
        if (Name == "LI") {
            var act = $("[class ='active']").children("a").attr("href").toString().split("#")[1];
            location[act] = false;
            $("[class ='active']").removeAttr("class");
            var pos = son.attr("href").toString().split("#")[1];
            location[pos] = true;
            $root.animate({
                scrollTop: $("[name=\"" + pos + "\"]").offset().top
            }, 1000);
            father.attr("class", "active");
            return false;
        }
        else if (Name == "A") {
            var flag = false, pri, real, next, total = 0;
            var temp, num_next = 0, num_pri = 0;
            for (var i in location) {
                if (location[i]) {
                    flag = true;
                    break;
                }
            }
            if (flag == false) {
                location["position_1"] = true;
                window.location.href = "#position_1";
            }
            for (i in location) {
                total++;
                if (location[i]) {
                    temp = i.split("_");
                    num_next = parseInt(temp[1]) + 1;
                    num_pri = parseInt(temp[1]) - 1;
                    if (total == 1) {
                        pri = real = i;
                        next = temp[0] + "_" + num_next;
                    }
                    else if (total == 7) {
                        next = real = i;
                        pri = temp[0] + "_" + num_pri;
                    }
                    else {
                        next = temp[0] + "_" + num_next;
                        real = i;
                        pri = temp[0] + "_" + num_pri;
                    }
                    break;
                }
            }
            if (son.hasClass("prev")) {
                location[real] = false;
                location[pri] = true;
                $root.animate({
                    scrollTop: $("[name=\"" + pri + "\"]").offset().top
                }, 1000);
                $("[class ='active']").removeAttr("class");
                $("[href=\"#" + pri + "\"]").parent().attr("class", "active");
                return false;
            }
            else if (son.hasClass("next")) {
                location[real] = false;
                location[next] = true;
                $root.animate({
                    scrollTop: $("[name=\"" + next + "\"]").offset().top
                }, 1000);
                $("[class='active']").removeAttr("class");
                $("[href=\"#" + next + "\"]").parent().attr("class", "active");
                return false;
            }
            else
                return false;

        }
    });
});