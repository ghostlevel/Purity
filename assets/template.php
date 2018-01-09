<?php global $artifact; ?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Purity - <?php echo ucfirst($artifact->attributes['name']);?></title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700|Roboto+Mono">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css?ver=<?php echo filemtime('assets/styles/style.css');?>">
</head>

<body>
	<div id="header">
		<div class="header-image" style="background-image: url(<?php echo $artifact->attributes['image'];?>)">
			<span class="header-title-container"><?php echo $artifact->attributes['image name'];?></span>
		</div>
	</div>

	<div id="title">
		<h1 class="title"><?php echo $artifact->attributes['title'];?></h1>
	</div>

	<div id="body">
		<div id="body-content">
			<?php echo $artifact->attributes['content'];?>
		</div>
	</div>

	<div id="footer">
		Tags:
		<?php
			if ($artifact->tags) {
				foreach($artifact->tags as $tag) {
					if ($tag !== end($artifact->tags)) echo $tag.', ';
					else echo $tag;
				}
			}
		?>
	</div>
<script src="assets/requestscript.js"></script>
</body>
</html>