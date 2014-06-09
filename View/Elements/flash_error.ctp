<?php 
echo $this->Html->scriptBlock('
$(function(){	
	var webroot = $("#main-contentadmin").attr("base");
	$.gritter.add({
		title: "' . __("Error",true) . '",
		text: "' . $message . '",
		image: webroot + "img/warning_48.png",
		sticky: false
	});
});') 
?>