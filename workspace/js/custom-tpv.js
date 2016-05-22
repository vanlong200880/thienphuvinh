$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
    
    $('.icon-click').on('click',function(){
        var elParent = $(this).closest('.show-cat');
        elParent.find('.list-brand').slideToggle();
    });
    
});