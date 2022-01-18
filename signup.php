<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		body
		{
			background: url('background.jpeg');
			background-size: 100% ,100%;
			//background-repeat: no-repeat;

		}

		.maindiv
		{
			/*border:2px solid red;*/
			margin:auto;
			height: 520px;
			width: 450px;
			transform: translate(-50%,-50%);
			position: absolute;
			top: 50%;
			left: 50%;	
			box-shadow: 0px 0px 10px 6px grey;
			border-right: 2px outset red;

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
			/*border:2px solid yellow;*/
			padding:10px 20px;
			font-weight: 600;

		}
		.maindiv form .btn
		{
		
			margin:  3px auto;
			position: relative;
			/*right: 0%;*/
			width: 100%;
			text-transform: uppercase;
			outline: none;

		}
		.maindiv form input[type='text']
		{
			border-left: none;
			border-right: none;
			border-top: none;
			/*outline: none;*/
			background-color: transparent;
			border-bottom: 1px solid #0008;
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
			width: 130px;

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
	</style>
</head>
<body>
	<div class="maindiv">
		<h2>Sign up</h2>
		<form method="POST" action="">
			Name : <input type="text" name="Ename" required><br><br>
			Address : <select name="Eadd">
						<option>SELECT CITY</option>
						<option>Mumbai</option>
						<option>Nagpur</option>
						<option>Pune</option>
						<option>vasai-Virar</option>
					</select> <br><br>
			Age : <input type="text" name="Eage" maxlength="2" id="age"><br><br>
			Qualification : <input list="qual" name="Equal">
					<datalist id="qual">
						<option>Select Qualification</option>
						<option>BSCIT</option>
						<option>BSCCS</option>
						<option>B.Com</option>
						<option>BBA</option>
					</datalist> <br><br>
			Experience : <select name="Eexp">
						<option>Fresher</option>
						<option>1 Year</option>
						<option>2 Years</option>
						<option>3 Years</option>
						<option>More than 3 Years</option>
					</select> <br><br>
			Create Password : <input type="password" name="Epass" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<input type="checkbox" onclick="myFunction()"> Show Password <br><br><br>

			<script>
				function myFunction() {
					var x = document.getElementById("psw");

					if (x.type === "password") {
					x.type = "text";
					} else {
					x.type = "password";
					}
					document.getElementById("psw").style.width='130px';
					}
			</script>


			<input type="submit" value="Submit" name="submit" class="btn btn-success">
			<input type="reset" value="Clear" name="reset" class="btn btn-danger">
			Already have an account? <a href="login.php">Login here</a>
		</form>
		<script type="text/javascript">
			var myInput = document.getElementById("psw");
			myInput.onblur = function() {
 		 document.getElementById("message").style.display = "none";
}

		</script>


		
	</div>
<?php
error_reporting(0);
$servername="localhost";
$username='root';
$password='';
$dbname='employee';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	// echo "Connection Successfull";

}
else
{
	die("connection error".mysqli_connect_error());
}

$name=$_POST['Ename'];
$address=$_POST['Eadd'];
$age =$_POST['Eage'];
$Equal =$_POST['Equal'];
$Eexp =$_POST['Eexp'];
$Epass=$_POST['Epass'];


$sql= "INSERT INTO empinfo VALUES('$name','$address','$age','$Equal','$Eexp','$Epass')";
mysqli_query($conn,$sql);
?>
</body>
</html>