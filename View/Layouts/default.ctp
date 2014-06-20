<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'http://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin,latin-ext',
			'http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700',
			'font-awesome',
			'font-awesome-ie7',
			'bootstrap',
			'bootstrap-responsive',
			'reset',
			'style',
			'jquery.combosex',
			'jquery.flexslider',
			'jquery.scrollbar'
			));
		echo $this->Html->script(array(
			'jquery-1.11.0.min',
			"jquery-ui.1.7.2.min",
			'http://maps.google.com/maps/api/js?sensor=true',
			'jquery.combosex.min',
			'jquery.flexslider-min',
			'jquery.mousewheel',
			'jquery.easytabs.min',
			'jquery.gmap.min',
			'jquery.scrollbar.min',
			'jQuery.menutron',
			'jquery.isotope.min',
			'custom'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<?php echo $this->Element('default/topheader'); ?>
		<?php //echo $this->Element('default/header'); ?>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->Element('default/footer'); ?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<script src="<?php echo $this->webroot; ?>js/highmaps/highmaps.js"></script>
	<script src="<?php echo $this->webroot; ?>js/highmaps/modules/data.js"></script>
	<script src="<?php echo $this->webroot; ?>js/highmaps/modules/drilldown.js"></script>
	<!--<script src="http://code.highcharts.com/mapdata/countries/sv/sv-all.js"></script>-->
	<script src="<?php echo $this->webroot; ?>js/highmaps/maps/central-america.js"></script>
</body>
</html>
