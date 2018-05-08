<?php

/* 
 * @description: Footer do site aberto
 * @author:      David Jeiel <davidjeiel@gmail.com>
 */

;?>

    <footer class="container-fluid">
        <div class="inner-content">
           <div class="container-fluid">
              <h2 class="text-center">Fale conosco em nossas redes sociais</h2>
           </div>
           <div class="container-fluid text-center">
              <ul class="social-medias list-inline">
                 <li class="twitter">
                    <a href="https://twitter.com/yoursite"><i class="fa fa-twitter"></i>Twitter</a>
                 </li>
                 <li class="facebook">
                    <a href="https://www.facebook.com/yoursite"><i class="fa fa-facebook"></i>Facebook</a>
                 </li>
                 <li class="pinterest">
                    <a href="http://pinterest.com/yoursite/"><i class="fa fa-pinterest"></i>Pinterest</a>
                 </li>
                 <li class="instagram">
                    <a href="http://instagram.com/yoursite"><i class="fa fa-instagram"></i>Instagram</a>
                 </li>
              </ul>
           </div>

           <div class="container-fluid footer-last" >
              <div class="row">
                 <div class="col-lg-6 col-md-6 col-xs-4">
                    <p class="copy-right">© Copyright 2017 - Emprestaê.</p>
                 </div>
                 <!--
                   <div class="col-lg-6 col-md-6 col-xs-8">
                      <ul class="breadcrumb">
                         <li><a class="btn-link" href="#">Privacy </a></li>
                         <li><a class="btn-link" href="#">Blog </a></li>
                         <li><a class="btn-link" href="#">About </a></li>
                         <li><a class="btn-link" href="#">Press </a></li>
                         <li><a class="btn-link" href="#">Jobs </a></li>
                         <li><a class="btn-link" href="#">Support </a></li>
                      </ul>
                   </div>
                  -->
              </div>
           </div>
        </div>
     </footer>
    </div>
    <!--main container-->
    <!-- Bootstrap core JavaScript
     ================================================== -->
    <script src="mdl/js/sphinx/jquery-1.10.2.min.js"></script>
    <script src="mdl/js/sphinx/jquery-migrate-1.2.1.min.js"></script>
    <script src="mdl/js/sphinx/bootstrap.min.js"></script>
    <script type="text/javascript" src="mdl/js/sphinx/jquery.parallax-1.1.3.js"></script>
    <script src="mdl/js/sphinx/cbpScroller.js"></script>
    <script src="mdl/js/sphinx/classie.js"></script>
    <script src="mdl/js/sphinx/jquery.scrollTo.js"></script>
    <script src="mdl/js/sphinx/jquery.nav.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="mdl/js/sphinx/base.js"></script>
    <script id="APP"       type="text/javascript" src="./mdl/js/app.js"></script>
    <script>
     function initialize() {
       var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
       var mapOptions = {
            zoom: 4,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
       }
       var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

       var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
       });
     }

     google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div>
         <?php include_once 'view/modal/index.php' ;?>
    </div>
    </body>
</html>