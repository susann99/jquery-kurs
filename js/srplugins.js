jQuery.fn.extend({
    ImgFade: function() {
        this.each(function(){
            var img = jQuery(this).children("img");
            var rahmen = jQuery(this);
            var pos = 0;
            var getImgCount = function(){
                return img.length;
            }
            var nextBild = function(){
                var nextImg = jQuery(this).children("img").eq(pos);
                console.log($(nextImg).next());
                $(nextImg).fadeOut(1000,function(){ 
                    $(nextImg).next().fadeIn(1000);
                });
                pos++;
                if(pos>=getImgCount()){
                    pos = 0;
                    $(nextImg).fadeOut(1000,function(){ 
                        $(img).first().fadeIn(1000);
                    });
                }
            }
            this.init = function(){
                $(img).hide();
                $(img).eq(0).show();
                $(rahmen).click(nextBild);
            }();
        });
    }
});
(function($){
    $.linkliste=({
        aushtml:function(url){
            return url;
        },
        liste: function(liste){
            return liste;
        },
        austext: function(text){
            return text;
        }
    });
})(jQuery);
//$("#home1").click(function() {
//        $("#home1").fadeOut(1000,function(){
//            $("#home2").fadeIn(1000);
//        });
//    });
//    $("#home2").click(function() {
//        $("#home2").fadeOut(1000,function(){
//            $("#home1").fadeIn(1000);
//    });
//});
