<!DOCTYPE HTML>  
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Users! - By Yours Truly</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<br>
<CENTER>
		<CENTER> <a href="http://cooltext.com"><img src="https://images.cooltext.com/4784961.gif" width="750" height="180" alt="Albern Joseph P. Santos
            "Bern"" /></a>
			
			<br>
		<br>
		<table align="center">
			<tr>
				<td><img width ="350" height = "350" src="IT.jpg" border="5"/></td>
				<td><img width ="350" height = "350" src="Traveler.jpg" border="5"/></td>
			</tr>
		</table>
		<div id="header">
 <div id="content">
    <label>Welcome Users! - By Yours Truly</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
		


</body>
</html>

