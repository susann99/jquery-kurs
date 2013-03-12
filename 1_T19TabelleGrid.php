<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Tabellen mit jq-grid und Ajax</title>
        <link rel="stylesheet"
              type="text/css" href="css/ui-lightness/jquery-ui-1.10.1.custom.css"/>
        <link rel="stylesheet" type="text/css" href="js/grid/themes/ui.jqgrid.css" />
        <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/grid/js/i18n/grid.locale-de.js" type="text/javascript"></script>
        <script src="js/grid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function (){
                $("#list").jqGrid({
                    url:'jsongrid.php',
                    mtype: 'POST',
                    datatype: 'json',
                    jsonReader: {
                        root: 'rows',
                        id: 'id',
                        repeatitems: false,
                        page:  function(obj) { return 1; },
                        total: function(obj) { return 1; },
                        records: function(obj) { return obj.rows.length; },
                        userdata: "userData"
                    },
                    colNames:['Invas No','Date', 'Amount','Tax'],
                    colModel:[
                        {name:'id',label:'id'},
                        {name:'datum',label:'datum'},
                        {name:'wert1',label:'wert1'},
                        {name:'wert2',label:'wert2'}
                    ],
                    rowNum:5,
                    pager: jQuery('#pager'),
                    viewrecords: true,
                    caption:"json Example"
                }).navGrid('#pager',{edit:false,add:false,del:false});
            }); 
        </script>
    </head>
    <body>
        <div id="datentablet">
            <table id="list"></table>
            <div id="pager"></div>
        </div>
    </body>
</html>
