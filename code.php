<?php
session_start();
$mail=$_SESSION['session_email'];
echo$mail;
include("Connection.php");
?>
<html>
<head>

</head>
<body>
<form>
<input type="button" name="submit" value="Edit"/>
<input type="button" name="submit" value="insert"/>

</form
</body
</html>
<?php
$query = "select Code from userinfo where Email ='$mail'; ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
echo($row['Code']);
?>