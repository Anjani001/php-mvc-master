<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/lib/css/style.css"/>
		<title><?php echo $title;?></title>
	</head>
	<body>
		<div id="container">
			test foler

			<?php foreach($posts as $post):?>
				<h2><?php echo $post['title'];?></h2>
			<?php endforeach;?>
		</div>
	</body>
</html>
