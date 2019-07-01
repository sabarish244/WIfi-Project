<?php
$er="";
if(isset($_REQUEST['btn_login']))
{
	
	$u = $_REQUEST['t1'];
	$p = $_REQUEST['t2'];
	
	if($u=="admin" && $p=="admin")
	{
	 header('location:menu.php');
	 
	}
	else
	{
		$er="Invalid Login";
	}
	
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>WIFI USER MANAGEMENT SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					ADMIN LOGIN
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input type="text" id="Name" name="t1" placeholder="Enter user Name" required class="input100" autofocus>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input type="password" id="Roll" name="t2" placeholder="Enter Password" required class="input100" autofocus>
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn m-b-30">
					<button id="btn_login" name="btn_login" type="submit" class="login100-form-btn">&nbsp;SIGN IN</button>
					
					</button>
				</div>
                <div class="container-login100-form-btn ">
					<button id="btn_cancel" name="btn_cancel" type="reset" class="login100-form-btn">&nbsp;RESET</button>
			
					</button>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>