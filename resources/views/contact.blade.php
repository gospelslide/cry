<!DOCTYPE html>
<html class="no-js"> 
<head>
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
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
function initialize() {
  var myLatLng = {lat: 18.9954398, lng: 72.8264378};
  var myLatLng1 = {lat: 12.9993248, lng: 77.6163803};
  var myLatLng2 = {lat: 13.0724599, lng: 80.2404959};
  var myLatLng3 = {lat: 17.4447097, lng: 78.4625904};
  var myLatLng4 = {lat: 28.4875991, lng: 77.1772737};
  var myLatLng5 = {lat: 22.4988878, lng: 88.4161523};
  
  

  var mapProp1 = {
    center:new google.maps.LatLng(12.9993248,77.6163803),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp1);
  
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Sane Guruji Marg,Lower Parel(E),Mumbai'
  });
  
  var marker1 = new google.maps.Marker({
    position: myLatLng1,
    map: map,
    title: 'Bachammal Road,Cox Town,Bengaluru'
  });

  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'McNicholas Road,Chetpet,Chennai'
  });

  var marker3 = new google.maps.Marker({
    position: myLatLng3,
    map: map,
    title: ' Chiran Fort Lane, Begumpet,Hyderabad'
  });

  var marker4 = new google.maps.Marker({
    position: myLatLng4,
    map: map,
    title: 'Near Saket Metro Station, Saiyad-ul-Ajaib,New Delhi'
  });

  var marker5 = new google.maps.Marker({
    position: myLatLng5,
    map: map,
    title: ' Gitanjali Park,New No. 8,2nd Street,Kolkata'
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>
    #googleMap {
        
    }
</style>

</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/donate">Donate</a></li>
                        <li><a href="/volunteer">Volunteer</a></li>
                        <li class="active"><a href="#">Contact</a></li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
    <h2 stylre="text-align:center;">Our Centers</h2>
            <div id="googleMap" style="width:100%;height:500px;"></div>


    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>	Mumbai / Pune
				CRY - Child Rights and You
				189/A Anand Estate,
				Sane Guruji Marg,
				Mumbai - 400 011</p>
            <p>
                <i class="icon-envelope"></i> &nbsp;E-mail: cryinfo.mum@crymail.org
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;Tel: 022- 23063647/3651/1740<br>022-23098324/6472/6845
													<br>Fax: 022-23080726
            </p>
        </div>

    </div>

</section>


<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; <a href="index.html">Developed By:UnhollyAlliance</a>
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

</body>
</html>
