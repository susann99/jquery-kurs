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
		#bg {
			background: #aedfe5 url(images/spritely/sky1.png) 0 0 repeat-x;
		}
		#clouds {
			background: transparent url(images/spritely/cloud.png) 305px 102px repeat-x;
		}
		#hill2 {
			background: transparent url(images/spritely/hill2.png) 0 258px repeat-x;
                   
		}
		#hill1 {
			background: transparent url(images/spritely/hill-with-windmill.png) 0 104px repeat-x;
                        z-index: 124;
		}
                #bird {
			background: transparent url(images/spritely/flyer-forward-back.png) 0 0 no-repeat;
			top: 150px;
			left: 65px;
			width: 184px;
			height: 123px;
			z-index: 200;
			cursor: pointer;
		}
                .blase {
                    z-index: 2020;
                    color:blue;
                    position: relative;
                    width: 60px;
                    height: 20px;
                    top: 20px;
                    left: 300px;
                }
		#balloons {
                        z-index: 2000;
                        left: 720px;
			background: transparent url(images/spritely/kuh.png) 0 0 repeat-y;
		}
	</style>
	<!-- IE6 fixes are found in styles/ie6.css -->
	<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" /><![endif]-->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.7.2.spritely.custom.min.js" type="text/javascript"></script>
	<script src="js/jquery.spritely-0.4.js" type="text/javascript"></script>
	<script type="text/javascript">
		(function($) {
			$(document).ready(function() {
				$('#logo').click(function() {
					document.location.href = 'http://www.spritely.net/';
				});
				$('#bird')
					.sprite({fps: 9, no_of_frames: 3})
					.spRandom({top: 50, bottom: 200, left: 300, right: 320})
					.isDraggable()
					.activeOnClick()
					.active();
                                $("#bird").click(function(){
                                    $('<span class="blase">Amelia</span>').insertAfter(this);
                                })
				$('#clouds').pan({fps: 30, speed: 0.7, dir: 'left', depth: 10});
				$('#hill2').pan({fps: 30, speed: 2, dir: 'left', depth: 30});
				$('#hill1').pan({fps: 30, speed: 3, dir: 'left', depth: 70});
                                $('#balloons').pan({fps: 30, speed: 3, dir: 'up', depth: 70});
				$('#hill1, #hill2, #clouds').spRelSpeed(8);
				
				window.actions = {
					fly_slowly_forwards: function() {
						$('#bird')
							.fps(10)
							.spState(1);
						$('#hill1, #hill2, #clouds')
							.spRelSpeed(10)
							.spChangeDir('left');
					},
					fly_slowly_backwards: function() {
						$('#bird')
							.fps(10)
							.spState(2);
						$('#hill1, #hill2, #clouds')
							.spRelSpeed(10)
							.spChangeDir('right');
					},
					fly_quickly_forwards: function() {
						$('#bird')
							.fps(20)
							.spState(1);
						$('#hill1, #hill2, #clouds')
							.spRelSpeed(30)
							.spChangeDir('left');
					},
					fly_quickly_backwards: function() {
						$('#bird')
							.fps(20)
							.spState(2);
						$('#hill1, #hill2, #clouds')
							.spRelSpeed(30)
							.spChangeDir('right');
					},
					fly_like_lightning_forwards: function() {
						$('#bird')
							.fps(25)
							.spState(1);
						$('#hill1, #hill2, #clouds')
							.spSpeed(40)
							.spChangeDir('left');
					},
					fly_like_lightning_backwards: function() {
						$('#bird')
							.fps(25)
							.spState(2);
						$('#hill1, #hill2, #clouds')
							.spSpeed(40)
							.spChangeDir('right');
					}
				};
				
				window.page = {
					hide_panels: function() {
						$('.panel').hide(300);
					},
					show_panel: function(el_id) {
						this.hide_panels();
						$(el_id).show(300);
					}
				}
				
			});
		})(jQuery);
	</script>
</head>
<body>
<div id="container">
	<div id="stage" class="stage">
		<div id="tap" class="stage"></div>
		<div id="bg" class="stage"></div>
		<div id="clouds" class="stage"></div>
		<div id="hill2" class="stage"></div>
                <div id="bird"></div>
		<div id="hill1" class="stage"></div>
                <div id="balloons" class="stage"></div>
		<div id="logo">Amelia on fly</div>
        </div>
	
	<div id="mainContent">
		<h1>Spritely 0.4 Examples</h1>
		<div id="panels">
			<p>Here's a sneak preview of some new Spritely methods (version 0.4). Check the source code to see
			how these functions work - they should be fairly easy to follow and we hope you have fun using them.
			Check back on this site or follow our <a href="http://twitter.com/_spritely_">Twitter page</a>
			where we'll be announcing the final release and full documentation when it's ready. <a href="http://www.spritely.net/">Click here to visit our website.</a></p>
			<p>&nbsp;</p>
			<p>The lockTo example, introduced in spritely 0.4 can be found in <a href="lockTo.html">lockTo.html</a></p>
			<p>&nbsp;</p>
	
			<ul>
				<li><a href="#" onclick="page.show_panel('#panel4')">Cool combined actions to modify a whole scene</a></li>
				<li><a href="#" onclick="page.show_panel('#panel1')">Moving background elements at fixed speeds; stopping and starting backgrounds &amp; changing direction</a></li>
				<li><a href="#" onclick="page.show_panel('#panel2')">Moving background elements at relative speeds</a></li>
				<li><a href="#" onclick="page.show_panel('#panel3')">Changing the speed of and stopping and starting sprites; changing sprite 'states'</a></li>
			</ul>
	
			<p>&nbsp;</p>
			<div id="panel1" class="panel">
				<h2>Moving background elements at fixed speeds</h2>
				<p>You can move multiple background elements together, and they will all
				move at the same speed...</p>
				<button onclick="$('#hill1, #hill2, #clouds').spSpeed(40);">.spSpeed(40)</button>
				<button onclick="$('#hill1, #hill2, #clouds').spSpeed(20);">.spSpeed(20)</button>
				<button onclick="$('#hill1, #hill2, #clouds').spSpeed(3);">.spSpeed(3)</button>
	
				<button onclick="$('#hill1, #hill2, #clouds').spSpeed(1);">.spSpeed(1)</button>
				<button onclick="$('#hill1, #hill2, #clouds').spStop();">.spStop()</button>
				<button onclick="$('#hill1, #hill2, #clouds').spStart();">.spStart()</button>
				<button onclick="$('#hill1, #hill2, #clouds').spToggle();">.spToggle()</button>
				<button onclick="$('#hill1, #hill2, #clouds').spChangeDir('left');">.spChangeDir('left')</button>
				<button onclick="$('#hill1, #hill2, #clouds').spChangeDir('right');">.spChangeDir('right')</button>
                                
                                <p>&nbsp;</p>
                                <h2>Vertical Panning (<span style="color: red;"><small>New!</small></span>)</h2>
				<button onclick="$('#balloons').spChangeDir('up');">.spChangeDir('up')</button>
				<button onclick="$('#balloons').spChangeDir('down');">.spChangeDir('down')</button>
			</div>
			<div id="panel2" class="panel">
				<h2>Moving background elements at relative speeds</h2>
				<button onclick="$('#hill1, #hill2, #clouds').spRelSpeed(40);">.spRelSpeed(40)</button>
				<button onclick="$('#hill1, #hill2, #clouds').spRelSpeed(20);">.spRelSpeed(20)</button>
				<button onclick="$('#hill1, #hill2, #clouds').spRelSpeed(3);">.spRelSpeed(3)</button>
				<p>&nbsp;</p>
	
				<p>You can change the relative speed of a number of background elements at once
				with the .spRelSpeed() method. However, before you do this, you must set a 'depth'
				parameter for each element when you create them with the .pan() method. Please look
				at the source code of this page for an example.<br /><br />
				The 'depth' method is a value between 0 and 100 where 0 is the horizon (distant
				objects which do not move at all) and 100 is for very close-up objects which move
				very quickly:<br /><br />
				<img id="depth-explained" src="images/spritely/depth-explained.jpg" border="0" />
				</p>
			</div>
			<div id="panel3" class="panel">
				<h2>Changing the speed of and stopping and starting sprites; changing sprite 'states'.</h2>
	
				<button onclick="$('#bird').fps(24);">.fps(24)</button>
				<button onclick="$('#bird').fps(12);">.fps(12)</button>
				<button onclick="$('#bird').fps(6);">.fps(6)</button>
                                <button onclick="$('#bird').fps(1);">.fps(1)</button>
				<button onclick="$('#bird').spStop();">.spStop()</button>
				<button onclick="$('#bird').spStop(true);">.spStop(true) (returns to frame 1)</button>
				<button onclick="$('#bird').spStart();">.spStart()</button>
	
				<button onclick="$('#bird').spToggle();">.spToggle()</button>
				<button onclick="$('#bird').spState(1);">.spState(1)</button>
				<button onclick="$('#bird').spState(2);">.spState(2)</button>
				<p>&nbsp;</p>
				<p>To change a sprite's 'state', you need an image with multiple rows, where
				each row is a 'state' (1, 2, 3, etc.) and each row contains multiple frames, 
				like the following image:<br /><br />
				<img src="images/spritely/bird-forward-back.png" border="0" />
				</p>
	
			</div>
			<div id="panel4" class="panel">
				<h2>Combining actions to modify a whole scene</h2>
				<button onclick="actions.fly_slowly_forwards();">actions.fly_slowly_forwards();</button>
				<button onclick="actions.fly_quickly_forwards();">actions.fly_quickly_forwards();</button>
				<button onclick="actions.fly_like_lightning_forwards();">actions.fly_like_lightning_forwards();</button><br />
				<button onclick="actions.fly_slowly_backwards();">actions.fly_slowly_backwards();</button>
	
				<button onclick="actions.fly_quickly_backwards();">actions.fly_quickly_backwards();</button>
				<button onclick="actions.fly_like_lightning_backwards();">actions.fly_like_lightning_backwards();</button>
				<p>Take a look at the source code to see how this is done. It's amazingly easy to do.</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>
