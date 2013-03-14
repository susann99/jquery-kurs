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
