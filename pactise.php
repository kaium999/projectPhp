<?php
	session_start();
	include("Connection.php");
	error_reporting(0);
?>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>pactise </h1>
	<form action="" method="GET">
		Enter your Roll: <input type="text" name="roll" value=""/></br></br>
		Enter your class:<input type="text" name="fullname" value=""/></br></br>
		
			
       <input type="submit" name="submit" value="submit"/>
		
	</form>
	<?php
	if($_GET['submit'])
					{
						$Roll = $_GET['roll'];
				        $Fullname = $_GET['fullname'];
				        
						$email=$_SESSION['session_email'];
					
						if($Roll!=""&& $Fullname!="")
						{
								$query="insert into kaium values('$Roll','$Fullname','$email')";
	                            $data= mysqli_query($conn,$query);
				                if($data)
				                  {
					                header('location:Home.php');
				                  }
								  else{
									  echo "Data Not inserted";
								  }
						}
					}
	
	
	?>

</body>
</html>