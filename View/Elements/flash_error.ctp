<?php 
echo $this->Html->scriptBlock('
$(function(){	
	$.gritter.add({
		title: "' . __("Error",true) . '",
		text: "' . $message . '",
		image: "<?php echo $this->webroot; ?>img/warning_48.png",
		sticky: false
	});
});') 
?>