<?php 
echo $this->Html->scriptBlock('
	$(function(){
		var webroot = $("#main-contentadmin").attr("base");
		$.gritter.add({
			title: "' . __("Información",true) . '",
			text: "' . $message . '",
			image: webroot + "img/info_48.png",
			sticky: false
		});
	});	
') 
?>