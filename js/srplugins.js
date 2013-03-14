jQuery.fn.extend({
    ImgFade: function() {
        this.each(function() {
            var FlagNurEinmal = 0;
            var img = jQuery(this).children("img");
            var rahmen = jQuery(this);
            var pos = 0;
            var getImgCount = function() {
                return img.length;
            }
            var nextBild = function() {
                var nextImg = jQuery(this).children("img").eq(pos);
                //		console.log($(nextImg).next());
                if(FlagNurEinmal<1){
                    FlagNurEinmal++;
                    $(nextImg).fadeOut(1000, function() {
                        $(nextImg).next().fadeIn(1000);
                        FlagNurEinmal = 0;
                    });
                    pos++;
                    if (pos >= getImgCount()) {
                        pos = 0;
                        $(nextImg).fadeOut(1000, function() {
                            $(img).first().fadeIn(1000);
                        });
                    }
                }
            }
            this.init = function() {
                $(img).hide();
                $(img).eq(0).show();
                $(rahmen).click(nextBild);
            }();
        });
    }
});
jQuery.fn.extend({
    linkliste: function(url) {
        var selector = $(this);
        this.each(function() {
            $.ajax({
                url: url,
                context: document.body,
                success: function(data, textStatus, jqXHR) {
                    selector.html(data);
		    
                },
                error: function(data, textStatus, jqXHR) {
                    selector.html("<h2 class=\"error\">Error: Logbuch nicht geladen!</h2>");
                }
            });
        });
    }
});

