<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body style="background-color:#ADD8E6">
<center>
<br>
<CENTER>
		<CENTER> <a href="http://cooltext.com"><img src="https://images.cooltext.com/4784961.gif" width="750" height="180" alt="Albern Joseph P. Santos
            "Bern"" /></a>
			
			<br>
		<br>
		<table align="center">
			<tr>
				<td><img width ="450" height = "450" src="IT.jpg" border="5"/></td>
				<td><img width ="450" height = "450" src="Traveler.jpg" border="5"/></td>
			</tr>
			
		</table>
		<button onclick="myFunction()">Click </button>

<p id="place"></p>
<p>What do you do during leisure time?</p>
           
		   <button onclick="myFood()">Click</button>
		   
<p id="food"></p>
<p>What is your favorite food?</p>

            <button onclick="myArtist()">Click</button>
			
<p id="artist"></p>
<p>Who is your inspiration?</p>
       
	        <button onclick="myTime()">Click</button>
			
<p id="pasttime"></p>
<p> What do you like in college?</p>

            <button onclick="myMoment()">Click</button>
			
<p id="moment"></p>
<p>What is your unforgetable moment?</p>


<script>
function myFunction() {
    document.getElementById("place").innerHTML = "I always watch anime, especially the extreme ones("Brutal").";
	}
	</script>
	
<script>	
function myFood() {
     document.getElementById("food").innerHTML = "Anything that is sweet and sour.";
}	

</script>

<script>	
function myArtist() {
     document.getElementById("artist").innerHTML = "My inspiration is my mom because, she really do her best just to raised the 4 of us.";
}	

</script>

<script>	
function myTime() {
     document.getElementById("pasttime").innerHTML = "I don't really like to be a college student at first but, in the end I enjoyed learning something that is new to me.";
}	

</script>

<script>	
function myMoment() {
     document.getElementById("moment").innerHTML = "The moment that I made my mom proud during highschool because, Finally! she got the chance to walk in the stage with me during graduation day.";
}	

</script>
<tr>

</tr>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - <a href="http://cleartuts.blogspot.com" target="_blank">By Cleartuts</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>