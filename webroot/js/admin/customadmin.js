$(document).ready(function() {
		  // Chosen (chosen)
  if($('.chosen-select').length > 0)
  {
    $('.chosen-select').each(function(){
      var $el    = $(this);
      var search = ($el.attr("data-nosearch") === "true") ? true : false,
      opt = {};
      if(search) opt.disable_search_threshold = 9999999;
      $el.chosen(opt);
    });
  }

  $(window).resize(function() {
	// chosen resize bug
	resize_chosen();
});

function resize_chosen(){
	$('.chzn-container').each(function() {
		var $el = $(this);
		$el.css('width', $el.parent().width()+'px');
		$el.find(".chzn-drop").css('width', ($el.parent().width()-2)+'px');
		$el.find(".chzn-search input").css('width', ($el.parent().width()-37)+'px');
	});
}

if($(".select2-me").length > 0){
		$(".select2-me").select2();
	}

});