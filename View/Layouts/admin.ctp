<!DOCTYPE html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'/js/admin/iCheck/skins/minimal/minimal',
			'/js/admin/iCheck/skins/square/square',
			'/js/admin/iCheck/skins/square/red',
			'/js/admin/iCheck/skins/square/blue',
			'admin/clndr',
			'admin/style',
			'gritter/jquery.gritter',
			'admin/style-responsive',
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
	<script src="<?php echo $this->webroot; ?>js/jquery-1.11.0.min.js"></script>
</head>
<body class="sticky-header">

	<section>
    <!-- left side start-->
    <?php echo $this->element("admin/aside"); ?>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" id="main-contentadmin" base="<?php echo $this->webroot; ?>">
        <!-- header section start-->
       	<?php echo $this->element("admin/layoutheader"); ?>
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
        </div>
        <!--body wrapper end-->
    </div>
    <!--footer section start-->
        <footer>
            <?php echo date("Y"); ?>&copy; ESEN
        </footer>
    <!--footer section end-->
	<?php // echo $this->element('sql_dump'); ?>
	<?php
	echo $this->Html->script(array(
			'admin/jquery-ui-1.9.2.custom.min',
			'admin/jquery-migrate-1.2.1.min',
			'admin/bootstrap.min',
			'admin/modernizr.min',
			'admin/jquery.nicescroll',
			'admin/easypiechart/jquery.easypiechart',
			'admin/easypiechart/easypiechart-init',
			'admin/sparkline/jquery.sparkline',
			'admin/sparkline/sparkline-init',
			'admin/iCheck/jquery.icheck',
			'admin/icheck-init',
			'gritter/jquery.gritter.min',
			/*'admin/flot-chart/jquery.flot',
			'admin/flot-chart/jquery.flot.tooltip',
			'admin/flot-chart/jquery.flot.resize',
			'admin/flot-chart/jquery.flot.pie.resize',
			'admin/flot-chart/jquery.flot.selection',
			'admin/flot-chart/jquery.flot.stack',
			'admin/flot-chart/jquery.flot.time',
			'admin/main-chart',*/
			'admin/scripts'
			));
	echo $this->fetch('script');
	echo $this->fetch('customscript');
	?>
</body>
</html>
