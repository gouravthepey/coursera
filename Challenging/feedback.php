<?php
  require 'includes/common.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback | LifeStyle Store</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
        	function validate(){
        		 if( document.myForm.name.value == "") {
                 alert( "Please provide your name!");
                 document.myForm.name.focus() ;
                 return false;
                }
                if( document.myForm.email.value == "") {
                alert( "Please provide your Email!");
                document.myForm.email.focus() ;
                return false;
                }
                if( document.myForm.feedback.value == "") {
                alert( "Please give your feedback!");
                document.myForm.feedback.focus() ;
                return false;
                }
                if(document.myForm.name.value!= "" && document.myForm.email.value!= "" && document.myForm.feedback.value!= "")
                {
                	alert("Thankyou for your feedback!");
                	return true;
                }
        	}
        </script>
</head>
<body>
	<div class="First">
            <div class="Second">
                <div class="logo"><a href="index.php">Lifestyle Store</a></div>
                <div class="link"><a href="#">Feedback</a></div>
     
            </div>
        </div>
      <div class="row">
            <div class="col-sm-6 col-md-6">
                <center>
                <img src="feedback2.jpg" alt="feedback image">
               </center>
            </div>
            <div class="col-sm-6 col-md-6">
            <h2 class="font">FeedBack Please!</h2>
            <form id="form1" name = "myForm" onsubmit="return(validate());" method="POST" action="submit.php">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name"><br>
            </div>
            <div class="form-group">
            <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" ><br>
            </div>
            <div class="form-group">
            <label>Feedback</label>
                <input type="text" class="form-control" placeholder="Feedback" name="feedback"><br>
            </div>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form><br>
            </div>	
            </div>        
         <footer class="footer1">
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