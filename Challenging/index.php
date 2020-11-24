<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Lifestyle Store</title>
       <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
	<body>
        <div class="First">
            <div class="Second">
                <div class="logo"><a href="#">Lifestyle Store</a></div>
                <div class="link"><a href="feedback.php">Feedback</a></div>
     
            </div>
        </div>
            <div class="content">
                <div class="banner-image">
                    <div class="inner-banner-image">
                        <center>
                            <div class="banner_content">
                                <h1>We sell lifestyle</h1>
                                <p>Flat 40% OFF on premium brands</p>   
                                <a href="#" class="button">Shop Now</a>
                            </div>
                        </center>                        
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="items">                     
                <a href="products.php#camera" >                         
                    <img src="camera.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Cameras</h2>                             
                        <p>Choose among the best available in the world.</p>                         
                    </div>                     
                </a>                 
            </div>
                <div class="items">
                    <a href="products.php#watch">
                        <image class="thumbnail" src="watch.jpg"></image>
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands</p>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="products.php#shirt">
                        <image class="thumbnail" src="shirt.jpg"></image>
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </a>
                </div>

            </div>
            <footer>
                <div class="container">
                    <center>
                    <p id="Foot">
                        Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000. 
                    </p>
                </center>
                </div>
            </footer>
        </body>
</html>