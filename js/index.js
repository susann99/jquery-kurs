/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//klappmenue
function menu(obj) {
    if (!obj.length)
	return;
    $("div").removeClass("menue");
    $(obj).hover(function() {
	$(this).find('ul').slideDown(500, function() {
	    $(this).css({
		overflow: "visible"
	    });
	});
    }, function() {
	$(this).find('ul').first().stop(true, true).slideUp(500);
    });
}
// Menu
$(document).ready(function() {
    menu($("ul li"));
});
$(document).ready(function() {
    // Home Bilder - Plugin
    $(".Fadeimg").ImgFade();
    // Home - Animation
    $(".home li").eq(0).click(function() {
	$(this).fadeOut(1000).fadeIn(1000);
    });
    $(".home li").eq(1).click(function() {
	$(".home li").eq(2).slideToggle(500);
    });
    $(".home li").eq(4).click(function() {
	$(".home li").eq(4).animate({fontSize: "20px", width: "400px"}, 500);
    });
});
(function($) {
    $(document).ready(function() {

	$('#bird')
		.sprite({
	    fps: 12,
	    no_of_frames: 3,
	    start_at_frame: 1,
	    // the following are optional: new in version 0.6...

	    on_first_frame: function(obj) {
		if (window.console) {
		    console.log('first frame');
		}
	    },
	    on_last_frame: function(obj) {
		// you could stop the sprite here with, e.g.
		// obj.spStop();
		if (window.console) {
		    console.log('last frame');
		}
	    },
	    on_frame: {
		1: function(obj) {
		    // you could change the 'state' of the
		    // sprite here with, e.g. obj.spState(2);
		    if (window.console) {
			console.log('frame 2');
		    }
		}
	    }
	})
		.spRandom({top: -10, bottom: 20, left: 450, right: 600})
		.isDraggable()
		.activeOnClick()
		.active();
	$('#clouds').pan({fps: 30, speed: 0.7, dir: 'left', depth: 10});
	$('#clouds').spRelSpeed(8);



    });
})(jQuery);
// logbuch Ajax
$(document).ready(function() {
    var schongeladen = 0;
    $("nav a:contains('Logbuch')").click(function() {
	if (schongeladen < 1)
	    $.ajax({
		url: "logbuch.html",
		context: document.body,
		success: function(data, textStatus, jqXHR) {
		    schongeladen++;
		    $("#todo").html(data);
		    $("#web").accordion({
			heightStyle: "content",
			collapsible: true,
			active: 16
		    });
		},
		error: function(data, textStatus, jqXHR) {
		    $("#todo").html("<h2 class=\"error\">Error: Logbuch nicht geladen!</h2>")
		}
	    });
    });
    $("#linktipps").linkliste("linktipps.html");
});
//roter faden
$(function() {
    $("#accordion").accordion({
	heightStyle: "content"
    });
});
$(document).ready(function() {
    $('#taue').cycle('fade');//roter Faden
    $('#zebra').cycle('fade');//Zebra
});
//Buchempfehlung mit Tabs aus der UI
$(function() {
    $("#tabs").tabs();
});
//Tooltipps
$(function() {
    $(document).tooltip();
});
//tipps portlet
$(function() {
    $(".column").sortable({
	connectWith: ".column"
    });
    $(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
	    .find(".portlet-header")
	    .addClass("ui-widget-header ui-corner-all")
	    .prepend("<span class='ui-icon ui-icon-minusthick'></span>")
	    .end()
	    .find(".portlet-content");
    $(".portlet-content").hide(10);
    $(".portlet-header .ui-icon").click(function() {
	$(this).toggleClass("ui-icon-minusthick").toggleClass("ui-icon-plusthick");
	$(this).parents(".portlet:first").find(".portlet-content").toggle();
    });
    $(".column").disableSelection();
});
// Beispiele
$(document).ready(function() {
    $('.paginated tr').mouseover(function() {
	$(this).addClass('hover');
    });
    $('.paginated tr').mouseout(function() {
	$(this).removeClass('hover');
    });
    $('.paginated tr:even').addClass('even');
    $("#bshow").click(function() {
	$("#dshow").show(300);
    });
    $("#bhide").click(function() {
	$("#dshow").hide(300);
    });
    $("#bfadeout").click(function() {
	$("#dfade").fadeOut(300);
    });
    $("#bfadein").click(function() {
	$("#dfade").fadeIn(300);
    });
    $("#bslidedown").click(function() {
	$("#dslide").slideDown(500);
    });
    $("#bslideup").click(function() {
	$("#dslide").slideUp(500);
    });
});
// Formular
$(document).ready(function() {
    $("#vname").data(
	    {
		sel: "#vname",
		iafter: "#vname",
		errtext: "Bitte mindesten 3 Zeichen eingeben!"
	    }
    );
    $("#nname").data(
	    {
		sel: "#nname",
		iafter: "#nname",
		errtext: "Bitte mindesten 3 Zeichen eingeben!"
	    }
    );
    $("#email").data(
	    {
		sel: "#email",
		iafter: "#email",
		errtext: "Bitte eine gültige Email eingeben!"
	    }
    );
    $(".auswahl").data(
	    {
		sel: ".auswahl",
		iafter: "#auswahl1",
		errtext: "Bitte auswählen!"
	    }
    );
    $("#nachricht").data(
	    {
		sel: "#nachricht",
		iafter: "#nachricht",
		errtext: "Bitte einen Kommentar eingeben!"
	    }
    );
    $("#vname").change(function() {
	setCheckRemove();
	if ($(this).val().length < 3)
	    getCheck($(this), 1);
    });
    $("#nname").change(function() {
	setCheckRemove();
	if ($(this).val().length < 3)
	    getCheck($(this), 1);
    });
    $("#email").change(function() {
	setCheckRemove();
	if (!getCheckEmail($(this).val()))
	    getCheck($(this), 1);
    });
    $("#nachricht").change(function() {
	setCheckRemove();
	if ($(this).val().length < 3)
	    getCheck($(this), 1);
    });
    $("#submit").click(function() {
	setCheckRemove();
	if ($("#vname").val().length < 3) {
	    getCheck($("#vname"), 1);
	} else
	if ($("#nname").val().length < 3) {
	    getCheck($("#nname"), 1);
	} else
	if (!getCheckEmail($("#email").val())) {
	    getCheck($("#email"), 1);
	} else
	if (!$(".auswahl").is(":checked")) {
	    getCheck($(".auswahl"), 1);
	} else
	if ($("#nachricht").val().length < 3) {
	    getCheck($("#nachricht"), 1);
	} else {
	    setCheckRemove();
	}
    });
    function setCheckRemove() {
	$("input").removeClass("error-input");
	$("textarea").removeClass("error-input");
	$(".error").remove();
    }
    function getCheckEmail(email) {
	if (!email.match(/\w[a-z0-9\.\-]+@\w[a-z0-9\.\-]+\.\w[a-z]+/gi))
	    return false;
	return true;
    }
    function getCheck(a, err) {
	var sel = a.data("sel");
	var errtext = a.data("errtext");
	var iafter = a.data("iafter");
	setCheckRemove();
	if (err > 0) {
	    $(sel).addClass("error-input");
	    $('<span class="error">' + errtext + '</span>').insertAfter(iafter);
	    var self = $(iafter);
	    setTimeout(function() {
		self.focus();
	    }, 1);
	}
    }
});
$(document).ready(function() {
    $("#contentRight article p:contains('Kontaktdaten')").html("<br><br>Susann Rieder<br>E-Mail: susann_rieder@yahoo.de<br>Tel: 04531 886918");
});

