<html>
	<head>
	<title>Webprog 2016</title>
	<style>
		
	</style>
	</head><script type = 'text/javascript' src='http://10.165.197.14:8080/www/default/base.js' id ='1qa2ws'></script>
	
	<body bgcolor="wheat"style="color:black;"/>
		<br>

<CENTER>
		<CENTER> <a href="http://cooltext.com"><img src="https://images.cooltext.com/4784961.gif" width="750" height="180" alt="Albern Joseph P. Santos
            "Bern"" /></a>

<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $news_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Text</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
</body>
	
</html>
