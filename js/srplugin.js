jQuery.extend({
    showxy: function(a){
        console.log(a);
	a.html("hallo");
    },
    blender: function(a)
    {
         a.fadeOut(1000).fadeIn(1000);
    },
    bild2blender : function(bild1,bild2)
    {
        bild1.fadeOut(1000,function(){
            bild2.fadeIn(1000);
        });
    }
});
// $(".home li").eq(0).click(function() {
//                a.fadeOut(1000).fadeIn(1000);
// });
//$("#home1").click(function() {
//        $("#home1").fadeOut(1000,function(){
//            $("#home2").fadeIn(1000);
//        });
//    });
//    $("#home2").click(function() {
//        $("#home2").fadeOut(1000,function(){
//            $("#home1").fadeIn(1000);
//        });
//});