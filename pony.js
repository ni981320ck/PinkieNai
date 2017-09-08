(function(){
	var canvas = document.getElementById('cover');
	var context = canvas.getContext('2d');
	canvas.width = document.body.offsetWidth;
	canvas.height = document.body.offsetHeight;
	var width = parseInt(canvas.width);
	var height = parseInt(canvas.height);

	var clock;
	var x = 0;
	var y = 0;
	var u = 0;
	var v = 100;
	var imgLoad = false, img2Load = false;
	var key = [false, false, false, false];

	var img = new Image();
	img.src = "cover.jpg";
	img.onload = function(){
		imgLoad = true;
	};

	var img2 = new Image();
	img2.src = "Fluffle.png";
	img2.onload = function(){
		img2Load = true;
	};

	clock = setInterval(function(){
		if(imgLoad && img2Load)
		{
			context.clearRect(0, 0, width, height);
			context.drawImage(img, x, y+55);
			context.drawImage(img2, u, v);
			if (key[0]) u--;
			if (key[1]) v--;
			if (key[2]) u++;
			if (key[3]) v++;
			if(u > width)
				u = -1*img2.width;
			if(v > height)
				v = -1*img2.height;
			if(u < 0)
				u = 0;
			if(v < 0)
				v = 0;

			if(x > width)
				x = -1*img.width;
			else
				x++;
		}
	}, 1);

	window.onkeydown = function()
	{
		switch(event.keyCode)
		{
			case 37: key[0] = true; break;
			case 38: key[1] = true; break;
			case 39: key[2] = true; break;
			case 40: key[3] = true; break;
		}
	}
	window.onkeyup = function()
	{
		switch(event.keyCode)
		{
			case 37: key[0] = false; break;
			case 38: key[1] = false; break;
			case 39: key[2] = false; break;
			case 40: key[3] = false; break;
		}
	}

	/*
	context.fillStyle = "#FF0000";
	context.fillRect(0, 0, 100, 100);
	*/
	//context.clearRect(0, 0, width, height);
})();