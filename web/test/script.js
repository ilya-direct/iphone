$.fn.Submenu = function() {
    $menu=this.find("#topmenu");
    $close=this.find("#arrow");
    $menu.find("a").each(function(index){

        $(this).click(function(){
            if ($(this).parent().attr("id") != 'portaltab-contacts-ru' && $(this).parent().attr("id") != 'portaltab-contacts-en') {
                if(!$(this).parent().hasClass("active")) {
                    $("#dropdown-submenu").show();
                    $("#topmenu li").removeClass("active");
                    $(this).parent().addClass("active");
                    $("#dropdown-submenu .container-fluid > ul").hide();
                    $("#dropdown-submenu .container-fluid > ul:eq("+index+")").show();
                    return false;
                }
                else {
                    $("#topmenu li").removeClass("active");
                    $("#dropdown-submenu .container-fluid > ul").hide();
                    return false;
                }
            }
        });
    });
    $close.click(function(){
        $menu.find("li").removeClass("active");
        $("#dropdown-submenu .container-fluid > ul").hide();
    });
};