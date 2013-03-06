jQuery.fn.extend({
    ImgFade: function() {
        this.each(function(){
            var a = jQuery(this).children("img");
            var pos = 0;
            var getImgCount = function(){
                return a.length;
            }
            var nextBild = function(){
                var b = this;
                console.log($(this));
                console.log(this);
                $(b).fadeOut(1000,function(){ 
                    $(b).next().fadeIn(1000);
                });
                pos++;
                if(pos>=getImgCount()){
                    pos = 0;
                    $(b).fadeOut(1000,function(){ 
                        $(a).first().fadeIn(1000);
                    });
                }
            }
            this.init = function(){
                console.log(this);
                $(a).hide();
                $(a).eq(0).show();
                $(a).click(nextBild);
            }();
        });
     
    //   this.init();
    }
});

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
