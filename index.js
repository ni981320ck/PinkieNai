var URL = "about.php"
function reload() { 
location = URL 
} 
setTimeout("reload()", 27000);

var pudding = 0;
(function(){
	document.onkeydown = function(){
		if(event.keyCode == 13)
			window.location = "about.php";
		if(event.keyCode == 40)
			pudding++;
		if(pudding == 7) 
			window.location = "natsuki.php";
	};
}(event));

(function(){
	var canvas = document.getElementById('img-pudding');
	var context = canvas.getContext('2d');
	canvas.width = document.body.offsetWidth;
	canvas.height = document.body.offsetHeight;
	var width = parseInt(canvas.width);
	var height = parseInt(canvas.height);

	var clock;
	var x = 0;
	var y = 270;
	var imgLoad = false;
	var key = [false, false, false, false];

	var img = new Image();

	img.src = "icon.ico";
	img.onload = function(){
		imgLoad = true;
	};

	clock = setInterval(function(){
		if(imgLoad)
		{
			context.clearRect(0, 0, width, height);
			for (var i = 0; i < pudding; i++) {
				if (i == 0) {context.drawImage(img, x+52, y-205);}
				if (i == 1) {context.drawImage(img, x+145, y+85);}
				if (i == 2) {context.drawImage(img, x+73, y+145);}
				if (i == 3) {context.drawImage(img, x+320, y-85);}
				if (i == 4) {context.drawImage(img, x+27, y-145);}
				if (i == 5) {context.drawImage(img, x+145, y-25);}
				if (i == 6) {context.drawImage(img, x+25, y+205);}
			}

			if(x > width)
				x = -1*img.width;
			else
				x++;
		}
	}, 1);
})();