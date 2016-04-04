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
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
    <?php 
      include 'sections/header.php';
      if(isset($_GET['tour_id'])){
        include 'sections/singleTour.php';
      }else{
        include 'sections/tourList.php';
      }
      
    ?>
  	
  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
  <script type="text/javascript">
    
  $(document).ready(function(){
    $childCount = 0;
    $adultCount = 1;
    $result = 0;
    $adultPrice = 230;
    $childPrice = 200;
    $totalPrice = $adultCount*$adultPrice + $childCount*$childPrice;
    $('#total-price').text($totalPrice);
    $('.inc-count').on('click',function(){ 

      $count = $(this).parents('.input-group').children('input').val();
      $count++;
      $(this).parents('.input-group').children('input').val($count);
      $target = '#' + $(this).parents('.input-group').attr('data-target');
      $($target).text($count);
      if($target == "#adult-count"){
        $adultCount = $count;
      }else{
        $childCount = $count;
      }      
      $totalPrice = $adultCount*$adultPrice + $childCount*$childPrice;
      $('#total-price').text($totalPrice);
    });
    $('.dec-count').on('click',function(){
      
      if($(this).parents('.input-group').children('input').val()>0){
        $count = $(this).parents('.input-group').children('input').val();
        $count--;
        $(this).parents('.input-group').children('input').val($count);
        $target = '#' + $(this).parents('.input-group').attr('data-target');
        $($target).text($count);
        if($target == "#adult-count"){
          $adultCount = $count;
        }else{
          $childCount = $count;
        }      
        $totalPrice = $adultCount*$adultPrice + $childCount*$childPrice;
        $('#total-price').text($totalPrice);
      }
      
    });
  });
</script>