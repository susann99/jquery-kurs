$(document).ready(function() {
	$('#icons1')
		.sprite({fps: 9, no_of_frames: 12})
		.spRandom({top: 50, bottom: 200, left: 300, right: 320})
		.isDraggable()
		.activeOnClick()
	$('#icons2')
		.sprite({fps: 9, no_of_frames: 12})
		.spRandom({top: 0, bottom: 400, left: 30, right: 620})
		.isDraggable()
		.activeOnClick()
		.active();
	$('#icons3')
		.sprite({fps: 9, no_of_frames: 6})
		.spRandom({top: 50, bottom: 20, left: 0, right: 620})
		.isDraggable()
		.activeOnClick();
	$('html').flyToTap();
	$('#level1')
		.pan({fps: 30, speed: 0.7, dir: 'left', depth: 10});
	$('#level2').pan({fps: 30, speed: 2, dir: 'left', depth: 30});
	$('#level3').pan({fps: 30, speed: 3, dir: 'left', depth: 70});
	$('#level2, #level3, #level1').spRelSpeed(8);
	$("#container").mousemove(function(event) {
		var newSpeed = Math.round(event.pageX / 100);
		$('#level2').spSpeed(newSpeed);
		$('#level3').spSpeed(newSpeed * -1);
	});
});
