
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>kleine Galerie</title>
        <style>
            #slideshow {
                position:relative;
                height:440px;
            }

            #slideshow img {
                position:absolute;
                top:0;
                left:0;
                z-index:8;
            }

            #slideshow img.active {
                z-index:10;
            }

            #slideshow img.last-active {
                z-index:9;
            }
        </style>
        <script type="text/javascript">
            function DiaShow() {
                var $active = $('#slideshow img.active');
                if ($active.length == 0)
                    $active = $('#slideshow img:last');

                var $next = $active.next().length ? $active.next()
                : $('#slideshow img:first');
                $active.addClass('last-active');
                $next.css({opacity: 0.0})
                .addClass('active')
                .animate({opacity: 1.0}, 800, function() {
                    $active.removeClass('active last-active');
                });
            }
            $(document).ready(function() {
                var nureinmal = 1;
                var slide;
                $("#start").click(function() {
                    DiaShow();
                    if (nureinmal < 2) {
                        slide = setInterval("DiaShow()", 2000);
                    }
                    nureinmal++;
                });
                $("#slideshow").click(function() {
                    DiaShow();
                    if (nureinmal < 2) {
                        slide = setInterval("DiaShow()", 2000);
                    } else if (nureinmal > 1){
                        nureinmal = 0;
                        clearInterval(slide);
                    }
                    nureinmal++;
                });
                $("#stop").click(function() {
                    nureinmal = 1;
                    clearInterval(slide);
                });
                $("#arc").accordion({
                    heightStyle: "content"
                });
            });
        </script>
    </head>
    <body>
        <div id="arc">
            <h3>Quellecode der Slideshow</h3>
            <div>
                <div id="slideshow" class="Fadeimg"> 
                    <img class="active" name="home1" id="home1" src="fotos/bild7.jpg" width="80%">
                    <img class="bildhome" name="home2" id="home2" src="fotos/bild8.jpg" width="80%">
                    <img class="bildhome" name="home3" id="home3" src="fotos/bild9.jpg" width="80%">
                    <img class="bildhome" name="home4" id="home4" src="fotos/bild6.jpg" width="80%">
                </div> 
                <button id="start"> [>>] </button><button id="stop"> [stop] </button>
            </div>
            <h3>Quellecode der Slideshow</h3>
            <div class="quellcode">
                <?php
                show_source(__FILE__);
                ?>
            </div>
        </div>
    </body>
</html>