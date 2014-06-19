<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Roxy file manager</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<?php echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>
	<?php echo $this->fetch('script'); ?>
</head>

<body>
	<div id="container">
			
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>

	</div>
</body>
</html>