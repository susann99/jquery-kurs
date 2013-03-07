function ImgFade(id){
   // var id = id;
    var pos = 0;
    var getImgCount = function(){
       // console.log($("#"+id+" img"));
        return $("#"+id+" img").length;
    }
    var next = function(){
       $("#"+id+" img:not(:eq("+pos+"))").hide(); 
       $("#"+id+" img:eq("+pos+")").show();
       pos++;
       if(pos >= getImgCount()){
           pos=0;
       }
    }
    this.init = function(){
         $("#"+id+" img").click(next);
         next();
    };
    this.init();
    
    //getImgCount();
}
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