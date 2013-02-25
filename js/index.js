/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//klappmenue
function menu(obj){
    if (!obj.length) return;
    $("div").removeClass("menue");
    $(obj).hover(function(){
    $(this).find('ul').slideDown(500,function(){
      $(this).css({
          overflow: "visible"
      });     
      });
    },function(){
    $(this).find('ul').first().stop(true, true).slideUp(500);
  });
  }
  $(document).ready(function(){
  menu($("ul li"));
 });
 // Formular
$(document).ready(function(){
  $(".name").change(function(){
    var name = $(this).val();
    $(".error").remove();
    $(this).removeClass("error-input");
    if(name.length < 4){
        $(this).addClass("error-input");
        $('<span class="error">Bitte mindesten 3 Zeichen eingeben</span>').insertAfter(this);
        var self = $(this);
        setTimeout(function(){
            self.focus();
        }, 1); 
     } 
    });
    $("#email").change(function(){
       var email = $(this).val();
       $("#error-email").remove();
       $(this).removeClass("error-input");
       if(email.length < 4){
           $(this).addClass("error-input");
           $('<span id="error-email" class="error">Bitte mindesten 3 Zeichen eingeben</span>').insertAfter(this);
           var self = $("#auswahl1");
           setTimeout(function(){
               self.focus();
           }, 1); 
       } 
    });
    $("#textfeld").change(function(){
       var content = $(this).val();
       $("#error-email").remove();
       $(this).removeClass("error-input");
       if(content.length < 10){
           $(this).addClass("error-input");
           $('<span id="error-email" class="error">Bitte einen Kommentar eingeben x</span>').insertAfter(this);
           var self = $(this);
           setTimeout(function(){
               self.focus();
           }, 1);  
       } 
    });
    $("#submit").click(function(){
        $(".error").remove();
        $(".auswahl").removeClass("error-input");
        if(!$(".auswahl").is(":checked")){
            $(".auswahl").addClass("error-input");
            $('<span class="error">Bitte auswählen</span>').insertAfter("#auswahl1");
            var self = $("#auswahl1");
            setTimeout(function(){
                self.focus();
            }, 1);            
        } 
    });
});

