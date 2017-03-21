$(document).ready(function() {
	var height= $(window).height();
	ajustesIniciales();
	function ajustesIniciales(){
		$('section#body').css({
			"margin-top": height - 80 + "px"
		});
		$('div#container').css({
			"margin-top": height - 80 + "px"
		});
	}
	$(document).scroll(function() {
		var scrollTop= $(this).scrollTop();
		var pixels= scrollTop / 95;

		if(scrollTop < height){
			$("section#contenedor_general").css({
				"-webkit-filter": "blur("+ pixels + "px)",
				"background-position": "center -" + pixels *10 + "px"
			});
		}
	});
});