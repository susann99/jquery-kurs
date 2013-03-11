﻿var sortTable = function(obj) {
	if(!obj.length) return;
	var Helper = {
		replaceSpecials: function(str) {
			var specials = {"ö":"oe","ä":"ae","ü":"ue","ß":"ss"};
			for (var char in specials) {
				var regExp = new RegExp(char,"g");
				str = str.replace(regExp,specials[char]);
			}
			return str;
		}
	}
	
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
			});
		});
	});
}

$(document).ready(function() {
	sortTable($('table#sortable'));
});
