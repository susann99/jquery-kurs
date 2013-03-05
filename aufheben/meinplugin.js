function test(){
    console.log($("div:first").html());
}
jQuery.extend({
    testWert:45,
    testFunc:function(wertA,wertB){
        console.log("testFunc -> wertA %i wertB %i", wertA, wertB);
    },
    show: function(){
        console.log("test");
    }
});
jQuery.fn.extend({
    wertA:3,
    display: function(wertA){
        jQuery.fn.wertA = wertA;
        console.log("display");
        this.each(function(){
            console.log("each %s wertA", $(this).html(), jQuery.fn.wertA);
        })
    }
});
