<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WIFI USER MANAGEMENT SYSTEM">
<!--	
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'> -->

    <title>Wifi User Management System</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all"> 
	<!--  Bootstrap Core CSS 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	-->
	
	<!-- Menu Items Animation CSS -->	
    <link href="css/animate.css" rel="stylesheet">

	<!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet"  media="screen" >
	<link href="css/awesome-bootstrap-checkbox.css" rel="stylesheet"  media="screen" >

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- Template js -->
	<link href="css/print.css" rel="stylesheet" type="text/css" media="print">
	<link href="css/customModal.css" rel="stylesheet" type="text/css" media="screen">
	
	<!--
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	-->
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<!--
	<script src="https://use.fontawesome.com/a45bcd3e7b.js"></script>  -->

	<script src="js/jquery-2.1.1.min.js"></script> 
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script> 
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	-->	
	<!--<script src="printThis.js"></script> -->
	<script src="js/customModal.js"></script>
	<!--	<script src="js/gen_validatorv4.js" type="text/javascript"></script> -->

   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<div class="container">
	<header>
		<h1 style="text-align:center;">Wifi User Management System</h1>	
		<h2 style="text-align:center;">Student Registration</h2>

	</header>
	<div class="row">
		<div class="col-sm-9 col-sm-offset-1 well" style="box-shadow: 10px 10px 5px #888888;">
			<div class="panel panel-primary">
				
					
				
				
				<div class="panel panel-heading">
					<p><strong>Enter Your Credentials To Register For The Wifi</strong></p>
				</div>
				
				<div class="panel-body">		
					<form class="form-horizontal" id="loginform" action="connect.php" method="POST">
						<div class="form-group form-group-sm">
							<label class="col-sm-3 control-label" for="Name">Name:</label>
							<div class="col-sm-8">
								<input type="text" id="Name" name="t1" placeholder="Enter Your Name" required class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<label class="col-sm-3 control-label" for="Roll_Num">Roll Number:</label>
							<div class="col-sm-8">
								<input type="text" id="Roll" name="t2" placeholder="Enter Your College Roll Number" required class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<label class="col-sm-3 control-label" for="Email_ID">Email ID:</label>
							<div class="col-sm-8">
								<input type="text" id="Email ID" name="t3" placeholder="Enter Your Email ID" required class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<label class="col-sm-3 control-label" for="Mobile_Num">Mob Number:</label>
							<div class="col-sm-8">
								<input type="text" id="Mobile Num" name="t4" placeholder="Enter Your Mobile Number" required class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<label class="col-sm-3 control-label" for="MACAddress">MAC Address:</label>
							<div class="col-sm-8">
								<input type="text" id="MAC Address" name="t5" placeholder="Enter Your Device MAC Address" required class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-2 col-sm-offset-4">
								<button id="btn_login" name="btn_login" type="submit" class="btn btn-primary">&nbsp;Submit</button>
							</div>
							<div class="col-sm-2">
								<button id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-success">&nbsp;Cancel</button>
							</div>
						</div>
					</form>
		
				</div>
			</div>
		</div>
	</div>
</div>
</head>