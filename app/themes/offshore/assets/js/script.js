//if (window.location.protocol != "https:") {
//   window.location='https://'+document.location.host+'/'+document.location.pathname;
//}


$(document).ready(function() {


/*
Arturs custom
*/

$(".BrowseCompaniesByRegion li label").click(function(){
    $(this).parent('li').toggleClass('act');
});




$("#companyDetailBody div.more").click(function() {
	var id = $(this).attr("data-id");
	$(this).find("img.plus").toggleClass("transparent");
	var $tr = $("tr.moreBlock[data-bid='"+id+"']");
	$tr.find("td").slideToggle();
	$tr.find("td *").fadeToggle();
});


$('tab').each(function(){
	$(this).addClass('init');
	$(this).find('section').click(function(){
		var id = $(this).attr('data-id');
		var tab = $(this).parent('tab').children('section');
		var tabContent = $(this).parent('tab').next("tabContent").children('section');
		var tabContentAct = $(this).parent('tab').next("tabContent").children('section[data-id="'+id+'"]');
		$(tab).removeClass('act');
		$(this).addClass('act');
		$(tabContent).removeClass('act');
		$(tabContentAct).addClass('act');
        $.cookie('tab_id', id);
	});
});

var tabID = $.cookie('tab_id');
if ($.cookie('tab_id')) {
    $(".smallBanks section[data-id='" + tabID + "']").trigger("click");
}




$(function(){
 $('#dialog-thankyou').dialog({
     autoOpen: false,
     height: 'auto',
     width: "450px",
     position: ["50%", "50%"],
     modal:true,
     dialogClass:"contact-us-dialog thankyou-dialog",
     create: function (event) {
       $(event.target).parent().css({ 'position': 'fixed', 'left': '50%', "top": "20%", "margin-left": "-250px" });
     },
     open: function(){
           $(".thankyou-dialog .ui-dialog-title").html("Thank you, your message has been sent.<br/>We will contact you soon.");
          }
 });
});



 function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 1000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 90) { // 1.5 minutes
        var popup_closed = getCookie("popup_closed");


        if ($('.ui-dialog').is(':visible')) {
          popup_closed = "1";
        }


        if (popup_closed!=="1") $('#dialog-contactus2').dialog('open');
        idleTime = 0;
    }
}


$(function(){
    $(".clickable").each(function(){
        $(this).click(function() {
        window.location = $(this).attr("data-url");
        });
    });
})



/* for  function Back from breadscrumbs to products page*/
$(function(){
  var type = window.location.hash.substr(1);
  $("#accordion_"+type).addClass("act");

  if (type.indexOf("personal") !== -1){
    $("#tab_corporate").removeClass("act");
    $("#tab_personal").addClass("act");
  }
  if (type.indexOf("corporate") !== -1){
    $("#tab_personal").removeClass("act");
    $("#tab_corporate").addClass("act");
  }

  if (type.indexOf("audit") !== -1){
    $("#tab_accounting").removeClass("act");
    $("#tab_audit").addClass("act");
  }
  if (type.indexOf("accounting") !== -1){
    $("#tab_audit").removeClass("act");
    $("#tab_accounting").addClass("act");
  }

  var elementExists = document.getElementById('accordion_'+type);
  if (elementExists)
    document.getElementById('accordion_'+type).scrollIntoView();

})



/* end of Arturs*/








	$("input.phone, table.about-form-table input[name='form_text_4']").intlTelInput({
		initialCountry: "auto",
		geoIpLookup: function(callback) {
			$.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
			var countryCode = (resp && resp.country) ? resp.country : "";
			callback(countryCode);
			});
		},
		autoHideDialCode: false,
		nationalMode: false,
		utilsScript: "/local/templates/offshore/js/telInput/js/utils.js",

	});

	$( ".terms-dialog" ).dialog({
		autoOpen: false,
		height: 660,
		width: 800,
		title: $(".terms-opener").html(),
		closeOnEscape: true,
		modal: true,
		open: function( event, ui ) {
			$(".terms-dialog").jScrollPane();
			$(this).parent().find(".ui-dialog-title").addClass("terms");
			$('body').css('overflow','hidden');
		},
		close: function( event, ui ) {
			$('body').css('overflow','auto');
		}
	});

	$( ".terms-opener" ).on( "click", function() {
		$( ".terms-dialog" ).dialog("open");
	});

	$( ".privacy-dialog" ).dialog({
		autoOpen: false,
		height: 660,
		width: 800,
		title: $(".privacy-opener").html(),
		closeOnEscape: true,
		modal: true,
		open: function( event, ui ) {
			$(".privacy-dialog").jScrollPane();
			$(this).parent().find(".ui-dialog-title").addClass("policy");
			$('body').css('overflow','hidden');
		},
		close: function( event, ui ) {
			$('body').css('overflow','auto');
		}
	});

	$( ".privacy-opener" ).on( "click", function() {
		$( ".privacy-dialog" ).dialog("open");
	});

	$( ".business-dialog" ).dialog({
		autoOpen: false,
		height: 660,
		width: 800,
		title: $(".business-opener").html(),
		closeOnEscape: true,
		modal: true,
		open: function( event, ui ) {
			$(".business-dialog").jScrollPane();
			$(this).parent().find(".ui-dialog-title").addClass("policy");
			$('body').css('overflow','hidden');
		},
		close: function( event, ui ) {
			$('body').css('overflow','auto');
		}
	});

	$( ".business-opener" ).on( "click", function() {
		$( ".business-dialog" ).dialog("open");
	});


	$(".elipsis").dotdotdot({	//change at end of multiple lines text to dots if exeeds borders
		watch: "window",
	});

	$('body').on( "click", ".ui-widget-overlay", function() { //close pop up terms and privacy tabs on click everythere
		$('body').css('overflow','auto');
		$( ".privacy-dialog" ).dialog( "close" );
		$( ".terms-dialog" ).dialog( "close" );
		$( ".business-dialog" ).dialog( "close" );
		$( ".terms-dialog-business" ).dialog( "close" );
		$( "#infopopup" ).dialog( "close" );
		$( "#cartpopup" ).dialog( "close" );
		$( "#form3" ).dialog("close");
		$( ".notetext" ).dialog( "close" );
		$( "#form3-message" ).dialog("close");
	});

	$("#bx_auth_servform").click(function(){
		$("#bx_auth_servform").hide();
	});

});
/*
	document.documentElement.addEventListener('gesturestart', function (event) {
		event.preventDefault();
	}, false);

*/
