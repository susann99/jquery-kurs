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
    $("#vname").data(
           {
            sel:"#vname",
            iafter:"#vname",
            errtext:"Bitte mindesten 3 Zeichen eingeben!"
           }
    );
    $("#nname").data(
           {
            sel:"#nname",
            iafter:"#nname",
            errtext:"Bitte mindesten 3 Zeichen eingeben!"
           }
    );
    $("#email").data(
           {
            sel:"#email",
            iafter:"#email",
            errtext:"Bitte eine gültige Email eingeben!" 
           }
    );
    $(".auswahl").data(
           {
            sel:".auswahl",
            iafter:"#auswahl1",
            errtext:"Bitte auswählen!" 
           }
    );
    $("#nachricht").data(
           {
            sel:"#nachricht",
            iafter:"#nachricht",
            errtext:"Bitte einen Kommentar eingeben!" 
            }
    );
    $("#vname").change(function(){
        setCheckRemove();
        if($(this).val().length < 3)getCheck($(this),1);
    });
    $("#nname").change(function(){
        setCheckRemove();
        if($(this).val().length < 3)getCheck($(this),1);
    });
    $("#email").change(function(){
       setCheckRemove();
       if(!getCheckEmail($(this).val()))getCheck($(this),1);
    });
    $("#nachricht").change(function(){
        setCheckRemove();
        if($(this).val().length < 3)getCheck($(this),1);
    });
    $("#submit").click(function(){
        setCheckRemove();
        if($("#vname").val().length < 3) {
            getCheck($("#vname"),1);
        } else 
        if($("#nname").val().length < 3){
            getCheck($("#nname"),1);
        } else
        if(!getCheckEmail($("#email").val())){
            getCheck($("#email"),1);
        } else
        if(!$(".auswahl").is(":checked")){
            getCheck($(".auswahl"),1);
        } else
        if($("#nachricht").val().length < 3){
           getCheck($("#nachricht"),1);
        } else {
            setCheckRemove(); 
        }
    });
    function setCheckRemove(){
        $("input").removeClass("error-input");
        $("textarea").removeClass("error-input");
        $(".error").remove();
    }
    function getCheckEmail(email){
        if(!email.match(/\w[a-z0-9\.\-]+@\w[a-z0-9\.\-]+\.\w[a-z]+/gi))return false;
        return true;
    }
    function getCheck(a,err){
        var sel = a.data("sel");   
        var errtext = a.data("errtext");
        var iafter = a.data("iafter");
        setCheckRemove();
        if(err>0){
            $(sel).addClass("error-input");
            $('<span class="error">'+errtext+'</span>').insertAfter(iafter);
            var self = $(iafter);
             setTimeout(function(){
                self.focus();
            }, 1);            
        } 
    }
});
$(document).ready(function(){
    $("#contentRight article p:contains('Kontaktdaten')").html("Susann Rieder<br>E-Mail: susann_rieder@yahoo.de");
})

