$(document).ready(function(){


   $("header").mouseenter(function(){
		$(this).css("background-image", "url('https://picsum.photos/1980/400/?image=507')"); })
	
	 $("header").mouseleave(function(){
$(this).css("background-image", "url('https://picsum.photos/1980/400/')");
		});

	});
