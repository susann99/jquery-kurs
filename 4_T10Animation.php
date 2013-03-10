<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">
    <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Spritely 0.4 Examples</title>
	<meta name="viewport" content="width = 320" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<style type="text/css">
	    #stage {
		top: 0px;
		left: 0px;
		z-index: 100;
	    }
	    .stage {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		min-width: 900px;
		height: 359px;
		overflow: hidden;
	    }
	    #clouds {
		background: transparent url(images/spritely/cloud.png) 305px 102px repeat-x;
	    }
	    #bird {
		background: transparent url(images/spritely/flyer-forward-back.png) 0 0 no-repeat;
		position: absolute;
		top: 150px;
		left: 65px;
		width: 180px;
		height: 123px;
		z-index: 2000;
		cursor: pointer;
	    }
	</style>

	<!-- IE6 fixes are found in styles/ie6.css -->
	<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
	<!-- IE6 fixes are found in styles/ie6.css -->
	<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" /><![endif]-->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script src="js/jquery.spritely-0.6.1.js" type="text/javascript"></script>
	<script type="text/javascript">
	    (function($) {
		$(document).ready(function() {

		    $('#bird')
			    .sprite({
			fps: 12,
			no_of_frames: 3,
			start_at_frame: 1,
			// the following are optional: new in version 0.6...

			on_first_frame: function(obj) {
			    if (window.console) {
				console.log('first frame');
			    }
			},
			on_last_frame: function(obj) {
			    // you could stop the sprite here with, e.g.
			    // obj.spStop();
			    if (window.console) {
				console.log('last frame');
			    }
			},
			on_frame: {
			    1: function(obj) {
				// you could change the 'state' of the
				// sprite here with, e.g. obj.spState(2);
				if (window.console) {
				    console.log('frame 2');
				}
			    }
			}
		    })
			    .spRandom({top: 50, bottom: 200, left: 300, right: 320, speed: 4000,
          pause: 3000})
			    .isDraggable()
			    .activeOnClick()
			    .active();
		    $('#clouds').pan({fps: 30, speed: 0.7, dir: 'left', depth: 10});
		    $('#clouds').spRelSpeed(8);

		});
	    })(jQuery);

	</script>
    </head>
    <body>
	<div id="container">
	    <div id="stage" class="stage">
		<div id="tap" class="stage"></div>

		<div id="clouds" class="stage"></div>

                <div id="bird"></div>

	    </div>


	</div>

    </body>
</html>
