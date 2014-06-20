<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'login/bootstrap.min',
			'login/main',
			'login/responsive',
			'login/icons',
			'login/login',
			'login/font-awesome.min'
			));
		echo $this->Html->script(array(
			'jquery-1.11.0.min',
			'admin/bootstrap.min',
			'login',
			'validation'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script>
	$(document).ready(function(){
		"use strict";

		Login.init(); // Init login JavaScript
	});
	</script>
</head>
<body class="login">
	<div id="container">
		<div id="content1" url = '<?php echo $this->webroot; ?>'>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
