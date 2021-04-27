<?php 
session_start();
$db_host = "localhost";
$db_user = "root";
$db_password ="";
$db_name="abaxsoft";
$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_REQUEST['login'])=="login")
{
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];

  $sql = "SELECT Name,Email FROM details WHERE name='$name'AND email='$email'";
  $res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==true)
	{
		echo "login successfully";
		
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		
		header('location:index.html');
		
	}
	else
	{
		echo "not login";
	}
	}
	?>
<html>

<head>
	
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header-top">
		<div class="container">
			
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					
						<a class="navbar-brand" href="index.html">
							<h1>
								Best company
								
							</h1>
						</a>
				</div>
				
	<div class="services-breadcrumb">
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>L</span>ogin
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="#" method="post">
					<div class="">
						<p> Name </p>
						<input type="text" class="name" name="name" required="" />
					</div>
					<div class="">
						<p>Email</p>
						<input type="text" class="email" name="email" required="" />
					</div>
					<label class="anim">
						<input type="checkbox" class="checkbox">
						<span> Remember me ?</span>
					</label>
					<div class="login-agileits-bottom wthree">
						<h6>
							<a href="#">Forgot Email?</a>
						</h6>
					</div>
					<input type="submit" value="Login" name="login">
					<div class="register-forming">
						<p>To Register New Account --
							<a href="bcd.php">Click Here</a>
						</p>
					</div>
				</form>
			</div>

		</div>
	</div>


	<!-- footer -->
	<div class="mkl_footer">
		
	
			
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>

	<script>
		$(document).ready(function () {

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

</body>

</html>