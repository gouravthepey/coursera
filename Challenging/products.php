<!DOCTYPE html>
<html>
<head>
	<title>Products | LifeStyle Store</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
        	function buy(){
			alert("Thankyou for buying! Please do give us your valuable feedback!");
		}
        </script>
</head>
<body>
	<div class="First">
            <div class="Second">
                <div class="logo"><a href="index.php">Lifestyle Store</a></div>
                <div class="link"><a href="feedback.php">Feedback</a></div>
     
            </div>
        </div>
<div class="container" style="margin-top: 60px;">
    <div class="jumbotron">
        <h1>Welcome to our Lifestyle Store!</h1>
        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
    </div><br>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6" id="camera">
            <div class="thumbnail">
                <image src="img/5.jpg" alt=""></image>
                <div class="caption">
                    <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                          <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/2.jpg" alt="">
                <div class="caption">
                    <h3>Nikon EOS </h3>
                    <p>Price: Rs. 40,000.00 </p>
                     <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/3.jpg" alt="">
                <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs. 50000.00</p>
                     <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/4.jpg" alt="">
                <div class="caption">
                    <h3>Olympus DSLR</h3>
                    <p>Price: Rs. 50000.00</p>
                     <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>
    </div>
    <!--Cameras End-->
    <div class="row text-center">
        <div class="col-md-3 col-sm-6" id="watch">
            <div class="thumbnail">
                <img src="img/9.jpg" alt="">
                <div class="caption">
                    <h3>Titan Model #301 </h3>
                    <p>Price: Rs. 13000.00 </p>
                     <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/10.jpg" alt="">
                <div class="caption">
                    <h3>Titan Model #201</h3>
                    <p>Price: Rs. 3000.00 </p>
                    <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/11.jpg" alt="">
                <div class="caption">
                    <h3>HMT Milan</h3>
                    <p>Price: Rs. 8000.00 </p>
                    <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/12.jpg" alt="">
                <div class="caption">
                    <h3>Faber Luba #111 </h3>
                    <p>Price: Rs. 18000.00 </p>
                    <button class="btn-primary btn-block" onclick="buy()">Buy</button>
                </div>
            </div>
        </div>
    </div>
<!--Watches End-->
<div class="row text-center" id="shirt">
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/8.jpg" alt="">
            <div class="caption">
                <h3>H&W </h3>
                <p>Price: Rs. 800.00 </p>
                <button class="btn-primary btn-block" onclick="buy()">Buy</button>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/6.jpg" alt="">
            <div class="caption">
                <h3>Luis Phil</h3>
                <p>Price: Rs. 1000.00</p>
                  <button class="btn-primary btn-block" onclick="buy()">Buy</button>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/13.jpg" alt="">
            <div class="caption">
                <h3>John Zok</h3>
                <p>Price: Rs. 1500.00</p>
                 <button class="btn-primary btn-block" onclick="buy()">Buy</button>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/14.jpg" alt="">
            <div class="caption">
                <h3>Jhalsani</h3>
                <p>Price Rs. 1300.00</p>
                 <button class="btn-primary btn-block" onclick="buy()">Buy</button>
            </div>
        </div>
    </div>
</div>
</div>
<!--Shirts End-->
</div>
</body>
</html>