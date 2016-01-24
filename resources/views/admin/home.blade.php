
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <style type="text/css">
#footer{
padding-bottom: 0%;
}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-default navbar-nav navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">

         <a class="pull-left" href="index.html"><img src="images/logo.jpg" /></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="#">Meal Sugestions</a></li>
                    </ul>        
                </div><!--/.nav-collapse -->
        </div>
        </div>
    </header>
    <!-- /header -->

<table class="table table-hover table-responsivetable-striped">
  <thead>
  <tr>
  <td>No.</td>
  <td>Name</td>
  <td>View</td>
  </tr>
  </thead>
    <tbody>
        <tr>
            <td>    </td>
            <td>Lorem Ipsum</td>
            <td><button class="btn btn-primary">View</button></td>
        </tr>
    </tbody>
        <tbody>
        <tr>
            <td>    </td>
            <td>Lorem Ipsum</td>
            <td><button class="btn btn-primary">View</button></td>
        </tr>
    </tbody>
        <tbody>
        <tr>
            <td>    </td>
            <td>Lorem Ipsum</td>
            <td><button class="btn btn-primary">View</button></td>
        </tr>
    </tbody>    
</table>

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; <a href="#">Developed By:UnhollyAlliance</a>
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>




</footer>
<!--/Footer-->


<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>