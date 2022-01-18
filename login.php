<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		*
		{
			/*border:2px solid red;*/

		}
		body
		{
			background: url('background.jpeg');
			background-size: cover;
			background-repeat: no-repeat;
			box-sizing: border-box;

		}

		.maindiv
		{
			/*border:2px solid red;*/
			margin:auto;
			height: 320px;
			width: 420px;
			transform: translate(-50%,-50%);
			position: absolute;
			top: 50%;
			left: 50%;	
			box-shadow: 0px 0px 10px 6px grey;
			border-right: 2px outset red;
			/*background-color: #fff;*/

		}
		.maindiv h2
		{
			text-transform: uppercase;
			/*border:2px solid yellow;*/
			text-align: center;
			font-size: 25px;
			font-family: sans-serif;
			padding: 5px;
			/*text-decoration:underline;*/
			margin-top: 5px;
			font-weight: bold;



		}
		.maindiv form
		{
			/*border:2px solid red;*/
			padding:10px 20px;
			font-weight: 600;
			height: 220px;


		}
		.maindiv form .btn
		{
			/*border:2px solid yellow;*/
		
			margin:  8% auto;
			/*position: relative;*/
			/*right: 0%;*/
			width: 100%;
			text-transform: uppercase;
			outline: none;
			padding: 10px;

		}
		.maindiv form input[type=text]
		{
			border-left: none;
			border-right: none;
			border-top: none;
			/*outline: none;*/
			background-color: transparent;
			border-bottom: 1px solid #0008;
			margin-top: 20px;
		}
		.maindiv form input[type=text]:focus
		{
			/*background-color: #0001;*/
			outline: none;
			
		}
		.maindiv form input[type='password']
		{
			border-left: none;
			border-right: none;
			border-top: none;
			/*outline: none;*/
			background-color: transparent;
			border-bottom: 1px solid #0008;
		}
		.maindiv form input[type=password]:focus
		{
			/*background-color: #0001;*/
			outline: none;
			
		}
	
		.maindiv form #age
		{
			width: 50px;
		}
		label
		{
			transform: translate(0px,-20px);
		}
	</style>
</head>
<body>
	<div class="maindiv">
		<h2>Login </h2>
		<form method="POST" action="">
			Username : <input type="text" name="Ename"><br><br>
			Password :<input type="password" name="pass"><br><br>
			<input type="submit" value="Login" name="submit" class="btn btn-success">
			<!-- <input type="reset" value="Clear" name="reset" class="btn btn-danger"> -->
			<label>Not have an account? <a href="signup.php">SignUp</a></label>
			
		</form>
		
	</div>
	<script type="text/javascript">
		$(document).ready(function() {

			$("input").focus(function() {
				$(this).css('paddingBottom','5px');

				
			});
			
			$("input").focusout(function(  ) {
				$(this).css('paddingBottom','0px');
				$(this).css('','');
			});

			
		});

	</script>
<?php
error_reporting(0);

$conn=mysqli_connect('localhost','root','','proexam');
if($conn)
{
	// echo "Connection Successfull";

}
else
{
	die("connection error".mysqli_connect_error());
}

$name=$_POST['Ename'];
$pass =$_POST['pass'];

$sql= "INSERT INTO Empinfo VALUES('$name','$pass')";
mysqli_query($conn,$sql);

?>
</body>
</html>