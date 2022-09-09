<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Response</title>
</head>
<body>
	<ul>
		<?php foreach ($lists as $key => $list): ?>
			<li><?=$list?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>