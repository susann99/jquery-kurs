var sortTable = function(obj) {
    if(!obj.length) return;
    var Helper = {
        replaceSpecials: function(str) {
            var specials = {
                "ö":"oe",
                "ä":"ae",
                "ü":"ue",
                "ß":"ss"
            };
            for (var char in specials) {
                var regExp = new RegExp(char,"g");
                str = str.replace(regExp,specials[char]);
            }
            return str;
        },
        paginate: function(){
            TableRows = $("tbody tr",obj);
            msg.text("Seite:"+ (current + 1));
            tableRows.hide()
            .slice(current * numMax,(current + 1) * numMax)
            .show();
        }
    }
    // pagination
    var current = 0;
    var numMax = 4;
    var tableRows = $('tbody tr',obj);
    var pages = Math.ceil(tableRows.length / numMax);
    var msg = $("#tools #msg");
    Helper.paginate();
    
    $("#up").click(function(e) {
        e.preventDefault();
        (current < pages-1) ? current += 1 : current = pages-1;
        Helper.paginate();
    })
    $("#down").click(function(e) {
        e.preventDefault();
        (current > 0) ? current -= 1 : current = 0;
        Helper.paginate();
    })
	
    obj.each(function() {
        $('tbody tr:even', obj).addClass("even");
        var th = $('th', obj);
        th.each(function(index) {
            var asc = false;
            $(this).click(function() {
                asc ? asc = false : asc = true;
                th.removeClass("desc asc");
                asc?$(this).addClass("asc"):$(this).addClass("desc");
                var tableRows = $('tbody > tr',obj).get();
                var isNumeric = $(this).hasClass("numeric");
                tableRows.sort(function(a, b) {
                    var sortA = Helper.replaceSpecials($(a).children('td').eq(index).text().toLowerCase());
                    var sortB = Helper.replaceSpecials($(b).children('td').eq(index).text().toLowerCase());
                    var num;
                    asc ? num = 1 :num = -1;
                    if (isNumeric) return asc ? sortA - sortB : sortB - sortA;
                    return (sortA == sortB) ? 0 : (sortA > sortB) ? num : num * -1;
                });
                for (var tr in tableRows) {
                    $('tbody',obj).append(tableRows[tr]);
                }
                $('tbody tr', obj).removeClass("even");
                $('tbody tr:even', obj).addClass("even");
                Helper.paginate();
            });
        });
    });
}

$(document).ready(function() {
    sortTable($('table#sortable'));
});
// GRID ------------------------------------------- //
$(document).ready(function (){
    $("#list").jqGrid({
        url:'grid.xml',
        datatype: "xml",
        colNames:['Inv No','Date','Tax','Total'],
        colModel:[
        {
            name:'id',
            index:'id', 
            width:50,
	    sorttype:"int"
        },

        {
            name:'invdate',
            index:'invdate', 
            width:120,
	    sorttype:"date"
        },
        {
            name:'tax',
            index:'tax', 
            width:80, 
            align:"right",
	    sorttype:"int"
        },

        {
            name:'total',
            index:'total', 
            width:80,
            align:"right",
	    sorttype:"int"
        }
        ],
        height: '180',
        rowNum:10,
        autowidth: true,
        rowList:[10,20,30],
        pager: jQuery('#pager'),
        loadonce: true,
        sortname: 'id',
        viewrecords: true,
        sortorder: "desc",
        caption:"XML Example"
    }).navGrid('#pager',{
        edit:false,
        add:false,
        del:false
    });
    $("#pager_left, #pager_center", "#pager").width('20%');
});
