<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to my first CodeIgniter application.</title>
<style type="text/css">
    body {background-color: #f5deb3;margin: 40px;font: 13px/20px normal Helvetica, Arial, sans-serif;color: #4F5155;}
    h1 {color: #fff;background-color: #FB4314;border-bottom: 1px solid #D0D0D0;font-size: 19px;font-weight: normal;margin: 0 0 14px 0;padding: 14px 15px 10px 15px;}
    #container{margin: 0px;border: 1px solid #D0D0D0;-webkit-box-shadow: 0 0 0px #D0D0D0;}
    .gallery{ width:100%; float:left; }
    .gallery ul{ margin:0; padding:0; list-style-type:none;}
    .gallery ul li{ padding:0px; border:0px solid #ccc; float:left; margin:0px 0px; background:none; width:auto; height:auto;}
</style>
</head>
<body>

<div id="container">
    <h1>Welcome to First CodeIgniter Application.</h1>
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
    <div id="body">
        <div class="gallery">
            <ul>
            <?php if(!empty($images)): foreach($images as $img): ?>
               <li><img src="uploads/<?php echo $img['image']; ?>" alt=""></li>
            <?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>