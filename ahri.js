(function(){
	var count = 0;
	document.onkeydown = function(){
		if(event.keyCode == 65)
			count++;
		else if(event.keyCode == 69)
			count+=3;
		else if(event.keyCode == 72)
			count+=5;
		else if(event.keyCode == 73)
			count+=7;
		else if(event.keyCode == 78)
			count+=10;
		else if(event.keyCode == 84)
			count+=11;
		else
			count=0;
		if(count == 37) 
			window.location = "beauty.php";
	};
}(event));