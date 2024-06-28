$(document).ready(function() {

	function makeParalaxEffect(obName) {
		$(document).scroll(function() {
			var menuHeight = 100;
			if($("#bx-panel").length > 0) {
				menuHeight = 0;
				$(".title-page-background").addClass("bxPanel");
			}
			var $th = $(obName);
			var bot = $(document).scrollTop();
// 			console.log(bot);
			var obOffset = $th.offset();
			if(bot > 0) $("#page.title").removeClass("big");
				else $("#page.title").addClass("big");
// 			if(bot > obOffset.top-menuHeight) 
// 				$th.find(".fixedCont").addClass("fixed");
// 			if(bot < obOffset.top-menuHeight) 
// 				$th.find(".fixedCont").removeClass("fixed");
			if(bot > 2000) 
 				$("#sec1 .fixedCont").addClass("transparent");
 			else if(bot < 2000) 
 				$("#sec1 .fixedCont").removeClass("transparent");
			if(bot > 400) {
				$("#page.title header .bottom").addClass("showen");
			} else {
				$("#page.title header .bottom").removeClass("showen");
			}
		});
	}
	
	//var is_safari = (navigator.userAgent.indexOf('Safari') != -1) && (navigator.userAgent.indexOf('Chrome') == -1);
	//if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) || is_safari) {
	
	makeParalaxEffect(".title-page-background #sec1");
	
	//}
	//makeParalaxEffect(".title-page-background #sec2");
	//makeParalaxEffect(".title-page-background #sec3");
});
