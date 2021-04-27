<?php
$db_host = "localhost";
$db_user = "root";
$db_password ="";
$db_name="abaxsoft";
$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_POST['signup']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobno'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $address=$_POST['address'];
  
  $sql = "INSERT INTO details(Id,Name,Email,Mobile,State,City,Address)
  VALUES('','$name','$email','$mobile','$state','$city','$address')";
  $conn->query($sql);
  if($conn)
  {
  echo "inserted";
}
else
{
  echo " not inserted";
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
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <h1>
                Best company
                
              </h1>
            </a>
          </div>
        
    </div>
  </div>
  <!-- //short-->
  <div class="register-form-main">
    <div class="container">
      <div class="title-div">
        <h3 class="tittle">
          <span>R</span>egistation
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
            <p>E-mail</p>
            <input type="email" class="password" name="email" required="" />
          </div>
          <div class="">
            <p> Mobile </p>
            <input type="text" class="mob" name="mobno" required="" />
          </div>
          <div class="">
            <p> Address </p>
            <input type="text" class="add" name="address" required="" />
          </div>

          <div class="">
 <p>State</p>

           <select name="state">
  <option>Uttar Pradesh</option>
<option>Bihar</option>
<option>Punjab</option>
<option>Gujarat</option>
<option>Rajasthan</option>
<option>Odisha</option>
<option>Assam</option>
<option>Haryana</option>
<option>Madhya Pradesh</option>
<option>Goa</option>
<option>Kerala</option>
</select>
</div>

<div class="">
 <p>City</p>

           <select name="city">
  <option>Kanpur</option>
<option>Lucknow</option>
<option>Delhi</option>
<option>Allahabad</option>
<option>Agra</option>
<option>Mumbai</option>
<option>Hyderabad</option>
<option>Chennai</option>
<option>Kolkata</option>
<option>Jaipur</option>
<option>Bhopal</option>
<option>Bangalore</option>
</select>
</div>
          <label class="anim">
            <input type="checkbox" class="checkbox">
            <span>I Accept Terms & Conditions</span>
          </label>
          <input type="submit" value="Register" name="signup">
        </form>
      </div>

    </div>
  </div>

  <script src="js/jquery-2.1.4.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- smooth scrolling -->
  <script src="js/SmoothScroll.min.js"></script>
  <script src="js/move-top.js"></script>
  <script src="js/easing.js"></script>
  <!-- here stars scrolling icon -->
  <script>
    $(document).ready(function () {
      

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  
  <script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
  

</body>

</html>