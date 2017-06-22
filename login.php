
<html>
<head>
<title>ANDROID</title>
<link rel="shortcut icon" href="img/android.png"> 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css">
<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="/css/bootstrapmin.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css' />
    <script src="js/modernizr-2.5.3.min.js"></script>
<script>
function validateForm() {
    var x = document.forms["myform"]["user"].value;
	var y = document.forms["myform"]["pass"].value;
    if (x == "" && y == "") {
        alert("Details must be filled out");
        return false;
    }
    else if (x == "") {
        alert("Please Fill Your Username");
        return false;
    }
	 else if (y == "") {
        alert("Please Fill Your Password");
        return false;
    }
}
</script>
</head>
<body class="myBox">
<div class="nav">
<div class="fix-wrapper">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="course.html">ABOUT US</a></li>
<li><a href="#">CONTACT US</a></li>
</ul>
</div>
</div>
    <br><br><br><br><br><br>
       
    <div id="slide_show">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active col-sm-12">
      <img class="d-block img-fluid" style="border-radius:10%;height:400px;width:800px" src="./img/android.jpg" alt="First slide" >
    </div>
    <div class="carousel-item col-sm-12">
      <img class="d-block img-fluid " style="border-radius:10%;height:400px;width:800px"  src="./img/mac.jpg"  alt="Second slide" >
        
    </div>
    <div class="carousel-item col-sm-12">
      <img class="d-block img-fluid " style="border-radius:10%;height:400px;width:800px"  src="./img/1.jpg"  alt="Third slide">
    </div>
	<div class="carousel-item col-sm-12">
      <img class="d-block img-fluid " style="border-radius:10%;height:400px;width:800px"  src="./img/bg.jpg"  alt="Fourth slide">
    </div>
  </div>
        
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    </div>
    <script>
            
            $('.carousel').carousel();
            
            </script>
<div class="iphone-wrap">
		<div class="login-wrap">
			<div class="login-form-wrap">
				<div class="card-holder-wrap">
					<div class="hole"></div>
				</div>
				<form action="info.php" method="post" onsubmit="return validateForm()" class="login-form" id="myform">
					<div class="input-wrap">
						<label for="" class="user-id"><input type="text" name="user" placeholder="Enter your User ID"></label> 
						<hr class="form-hr">
						<label for="" class="password"><input type="password" name="pass" placeholder="Enter Your Password"></label> 
					</div>
					<input type="submit" class="button" value="Login" name="submit">
					
				</form>
			</div>
		</div>
	</div>
    
      
</body>
</html>

