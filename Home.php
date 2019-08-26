<?php
	session_start();
	include("Connection.php");
	error_reporting(0);
?>

<html>

	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="style.css" />

	</head>
	<body>
		<h1 class="header">Please fill up your information</h1>
		
			<form action="" method="GET">
				
				
					<h3 class="header3">Present Information</h3>
					District <input type="text" name="district" value="" placeholder="Enter your District Name"/></br></br>
					Thana <input type="text" name="thana" value="" placeholder="Enter your Thana Name"/></br></br>
					Post Office <input type="text" name="post" value="" placeholder="Enter your Post office Name"/></br></br>
			
					House Number   <input type="text" name="housnumber" value=""placeholder="Enter your housenumber"/></br></br>
		
				
		
			
			
				<h3 class="header3">Parmanent Information</h3>
				
					District <input type="text" name="pdistrict" value=""placeholder="Enter your District Name"/></br></br>
					Thana <input type="text" name="pthana" value=""placeholder="Enter your Thana Name"/></br></br>
					Post Office <input type="text" name="ppost" value="" placeholder="Enter your Post office Name"/></br></br>
			
					House Number   <input type="text" name="phousenumber" value=""placeholder="Enter your housenumber"/></br></br>
		
				
				
			
		
		
			<h3 class="header3">Education</h3>
			
			Degree <input type="text" name="pdegree" value="" placeholder="Enter your Degree"/></br></br>
			Institution <input type="text" name="pInstitution" value=""placeholder="Enter your Institution"/></br></br>
			Result <input type="text" name="presult" value=""placeholder="Enter your Result"/></br></br>
			Year <input type="text" name="pyear" value="" placeholder="Enter your Result"/></br></br>
			
		
		
			
		    <h3 class="header3">Experience</h3>
			Company Name <input type="text" name="pcompany" value=""placeholder="Enter your Company Name"/></br></br>
			Designation <input type="text" name="pdesignation" value=""placeholder="Enter your designation" /></br></br>
			Department <input type="text" name="pdepartment" value=""placeholder="Enter your Department"/></br></br>
			Code <input type="text" name="code" value="" placeholder="Please enter your code"></br></br>
		
			<input type="submit" name="submit" value="submit"/>
		</form>
			<?php
	             if(isset($_GET['submit']))
					{
						$District = $_GET['district'];
				        $Thana = $_GET['thana'];
						$Post=$_GET['post'];
						$House=$_GET['housnumber'];
						$Pdistrict=$_GET['pdistrict'];
						$Pthana=$_GET['pthana'];
						$Ppost=$_GET['ppost'];
						$Phouse=$_GET['phousenumber'];
						$Pdegree=$_GET['pdegree'];
						$PInstitution=$_GET['pInstitution'];
						$Presult=$_GET['presult'];
						$Pyear=$_GET['pyear'];
						$Pcompany=$_GET['pcompany'];
						$Pdesignation=$_GET['pdesignation'];
						$Pdepartment=$_GET['pdepartment'];
						$Code=$_GET['code'];
				        
						$email=$_SESSION['session_email'];
						echo $email;
						print_r($_GET);
						
						if($District!=""&& $Thana!=""&& $Post!=""&& $House!=""&& $Pdistrict!=""&& $Pthana!=""&& $Ppost!=""
						&& $Phouse!=""&& $Pdegree!=""&& $PInstitution!=""&& $Presult!=""&& $Pyear!=""&& $Pcompany!=""
						&& $Pdesignation!=""&& $Pdepartment!=""&&$Code!="")
						{
								$query="insert into userinfo values('$District','$Thana','$Post','$House','$Pdistrict',
								'$Pthana','$Ppost','$Phouse','$Pdegree','$PInstitution','$Presult','$Pyear','$Pcompany',
								'$Pdesignation','$Pdepartment','$Code','$email')";
								echo $sql;
	                            $data= mysqli_query($conn,$query);
				                if($data)
				                  {
					                header('location:pactise.php');
				                  }
								  else{
									  echo "Data Not inserted";
								  }
						} else
						{
							echo "not work";
						}
					
						
					} 
					
				
	
	
	?>

		
		
		
	</body>
</html>