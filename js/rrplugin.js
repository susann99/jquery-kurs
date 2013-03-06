(function($){
    $.mathUtils=({
       sum: function(array){
        var total = 0;
        $.each(array,function(index,value){
            value=$.trim(value);
            value=parseFloat(value)||0;
            total += value;
        });
        return total;
        },
        mittel: function(array){
            if($.isArray(array)){
                return $.mathUtils.sum(array)/array.length;
            }
            return '';
        }
    });
})(jQuery);
(function($){
    $.fn.swapClass = function(class1,class2){
       return this.each(function(){
            var elem = $(this);
            if(elem.hasClass(class1)){
                elem.removeClass(class1).addClass(class2);
            } else if (elem.hasClass(class2)){
                elem.removeClass(class2).addClass(class1);
            }
        });
    };
})(jQuery);
(function($){
    $.fn.schatten = function(opts){
        var options = $.extend({},$.fn.schatten.defs,opts);
//       var defs = {
//           copies:5,
//           opacity:0.1,
//           copyOffset: function(index){
//               return {x:index,y:index};
//           }
//       };
//     var options = $.extend(defs,opts);
console.log($(this));
console.log(this);
       return $(this).each(function(){
            var originalElem = $(this);
            for(var i = 0; i < options.copies; i++){
                var offset = options.copyOffset(i);
                 originalElem.clone().css({
                     position:'absolute',
                     left: originalElem.offset().left + offset.x,
                     top: originalElem.offset().top + offset.y,
                     margin: 0,
                     zIndex: -1,
                     opacity: options.opacity
                 }).appendTo('body');
            }
        });  
    };
    $.fn.schatten.defs = {
        copies: 5,
        opacity: 0.1,
        copyOffset: function(index){
               return {x:index,y:index};
        }
    };
})(jQuery);
