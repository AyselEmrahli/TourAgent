$(document).ready(function(){
        $(".places-wrap .thumbnail img").each(function() {
            var placeName = $(this).attr("alt");
            if (placeName != '') {
                var imgWidth = $(this).width();
                var imgHeight = $(this).height();
                var position = $(this).position();
                var positionTop = ((position.top + 157)/2.2) //157 is imgHeight
                $("<span class='img-caption'>" + placeName +
                    "</span>").css({
                    "font-family":"PFSquare-Thin",
                    "position": "absolute",
                    "color": "#fff",
                    "top": positionTop + "px",
                    "text-align":"center",
                    "font-size":"1.5vmax",
                    "text-transform":"uppercase",
                    "width": 157, //157 is imgWidth
                    "transition":"all 1s ease"
                }).insertAfter(this);
            }
        });

        $(".places-wrap .thumbnail span").mouseenter(function(){
            $(this).prev().css({
                "-webkit-filter":"brightness(100%)",
                "filter":"brightness(100%)"
            });       
        });

        $(".places-wrap .thumbnail span").mouseleave(function(){
            $(this).prev().removeAttr('style');   
        });
    });