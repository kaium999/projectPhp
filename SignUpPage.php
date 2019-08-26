<?php
	include("Connection.php");
	error_reporting(0);
?>

<html>
	<head>
		<title>Student Input from</title>
	</head>
	<body>
		<form action="" method="GET">
			Email: <input type="email" name="email" value=""/></br></br>
			Password: <input type="password" name="Password" value=""/></br></br>
			Confrom Password: <input type="password" name="ConfirmPassword" value=""/></br></br>
			<input type="submit" name="submit" value="submit"/>
		</form>
		
				<?php
					if($_GET['submit'])
					{
						$Email = $_GET['email'];
				        $password = $_GET['Password'];
				        $confirmPassword = $_GET['ConfirmPassword'];
					
						if($Email!=""&& $password!=""&& $confirmPassword!="")
						{
								$query="insert into signup values('$Email','$password','$confirmPassword')";
	                            $data= mysqli_query($conn,$query);
				                if($data)
				                  {
					                header('location:LogIn.php');
				                  }
								  else{
									  echo "Data Not inserted";
								  }
						}
					}
				
				?>
			
				
			
				
			
		
	</body>
</html>