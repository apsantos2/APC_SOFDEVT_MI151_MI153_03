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
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['text']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
