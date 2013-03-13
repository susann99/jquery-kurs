<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 20 Ajax und Json</title>
        <style>
            .test2 {
                background-color: yellowgreen;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">//UTF8
            
            $("document").ready(function(){
                //                $("a:eq(0)").click(function(){
                //                    $("#test").toggle(300);
                //                    var such = $(this).text();
                //                    $("h1:contains('hallo1')").css("color","red");//data, Id, class = index im DOM (Browser Optimiert),
                //                    
                //                });
                //                $("a:eq(1)").click(function(){
                //                    $("#test").css("color","red");
                //                });
                //                $("a:eq(2)").click(function(){
                //                    $("#test").addClass("test2").css("color","darkblue");
                //                });
                var arrFarben = ["yellow","green","red"];
                $("a").click(function(){
                    var content = $(this).html();
                    var i = $(this).index();
                    $("h1:contains('"+content+"')").css("color",arrFarben[i%arrFarben.length]);
                });
            })
        </script>
    </head>
    <body>
        <a href="#">hallo1</a> - <a href="#">hallo2</a> - <a href="#">hallo3</a> - <a href="#">hallo4</a>
        <div id="test">
            <p>Der Inhalt wird hier eingesetzt.</p>
        </div>
        <h1>hallo1</h1>
        <p>
            primefaces, bilder gallery, links Menue, Header, Galerie, klassisches design
        </p>
        <h1>hallo2</h1>
        <p>
            view the topic in the right pane of the Help viewer.
            Searching the Online Help To perform a full-text search of all IDE help topics, 
            click the Search tab and type a keyword in the Find text box.
            Using the IndexClick any entry in the Index tab to view the topic. 
            To search the index, enter a term in the search field and press Enter. 
            Press Enter multiple times to cycle through all occurrences of the term in the index. 
        </p>
        <h1>hallo3</h1>
        <p>
            Click any entry in the Contents tab to view the topic in the right pane of the Help viewer.
            Searching the Online Help To perform a full-text search of all IDE help topics, click the Search tab and type a keyword in the Find text box.
            Using the IndexClick any entry in the Index tab to view the topic. To search the index, enter a term in the search field and press Enter. Press Enter multiple times to cycle through all occurrences of the term in the index. 
        </p>
        <h1>hallo4</h1>
        <p>
            view the topic in the right pane of the Help viewer.
            Searching the Online Help To perform a full-text search of all IDE help topics, click the Search tab and type a keyword in the Find text box.
            Using the IndexClick any entry in the Index tab to view the topic. To search the index, enter a term in the search field and press Enter. Press Enter multiple times to cycle through all occurrences of the term in the index. 
        </p>
    </body>
</html>
