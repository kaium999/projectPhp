
<?php
	session_start();
	include("Connection.php");
	error_reporting(0);
?>


<html>
<head>
	<title>Log in Page</title>
</head>
<body>
	<h1>Welcome to log in page</h1>
	<form action="" method="GET">
			Enter your Email: <input type="email" name="email" value=""/></br></br>
			Enter Your Password: <input type="password" name="Password" value=""/></br></br>
			
			<input type="submit" name="submit" value="submit"/>
		</form>
		
		<?php
			if(isset($_GET['submit']))
			{
				$em=$_GET['email'];
				$Psd=$_GET['Password'];
				$query="select * from signup where Email='$em' && Password='$Psd'";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				
				if($total==1)
				{
					$_SESSION['session_email']=$em;
					header('location:Home.php');
				}
				else
				{
					echo"Cheack your Email and Password";
				}
				
			}
			
		
		?>
</body>

</html>