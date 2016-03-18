<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TourAgent | Azerbaijan</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- TOP SECTION START HERE >>THIS SECTION FOR AYSEL -->
    <div id="top">
    	<div id="top-menu">
    		
    	</div>
    	<div class="slider-wrap">
    		
    	</div>
    </div>
    <!-- TOP SECTION END HERE -->

    <!-- ADVANTAGES START HERE >>THIS SECTION FOR ORKHAN -->
    <div id="advatages">

        <div class="container">
            <div class="row">
                <h1 class="section-title">Üstünlüklərİmİz</h1>
                <img class="section-icon" src="media/icon2.png" alt="">
            </div>
        </div>

    </div>
    <!-- ADVANTAGES END HERE -->
    <!-- POPULAR PLACES START HERE >>THIS SECTION FOR ORKHAN -->
    <div id="popular-places">

        <div class="container">
            <div class="row">
                <h1 class="section-title">BU yerlərə heyran qalacaqsınıZ</h1>
                <img class="section-icon" src="media/icon3.png" alt="">
            </div>

            <div class="places-wrap">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="New York">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Baku">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Istanbul">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Moscow">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Barcelona">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Milan">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Roma">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Berlin">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Saint Peterburg">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Budapest">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="Pragua">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="media/place1.jpg" alt="London">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    	
    </div>
    <!-- POPULAR PLACES END HERE -->
    <!-- PARTNERS START HERE >>THIS SECTION FOR MUSHVIQ -->    
    <div id="partners">
    	
    </div>
    <!-- PARTNERS END HERE -->
    <!-- SUBSCRIBE START HERE >>THIS SECTION FOR MUSHVIQ -->    
    <div id="subscribe">
    	
    </div>
    <!-- SUBSCRIBE END HERE -->
    <!-- FOOTER START HERE >>THIS SECTION FOR MUSHVIQ -->  
    <div id="footer">
    	<div id="footer-menu">
    		
    	</div>
    	<div id="footer-bottom">
    		<div id="copyright"></div>
    		<div id="language"></div>
    	</div>
    </div>
    <!-- FOOTER END HERE -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
            $(".places-wrap .thumbnail img").each(function() {
            var placeName = $(this).attr("alt");
            if (placeName != '') {
                var imgHeight = $(this).height();
                var position = $(this).position();
                var positionTop = ((position.top + imgHeight)/2.2)
                $("<span class='img-caption'>" + placeName +
                    "</span>").css({
                    "font-family":"PFSquare-Thin",
                    "position": "absolute",
                    "color": "#fff",
                    "top": positionTop + "px",
                    "text-align":"center",
                    "font-size":"2vmax",
                    "text-transform":"uppercase",
                    "width": "100%",
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
</script>