/* 

Author: FLIPP Advertising Inc. 

*/

//var showFlag = 'false';

$(document).ready(function() {

	/*$(window).resize(function(){
		if ($(window).width() < 1024){
			showFlag = 'false';
		} else {
			showFlag = 'true';
		}
	});*/

	$('a.logo_sm').fadeTo(0,0);
	$('a.bannerNav').animate({'margin-right':'0px'})
<<<<<<< HEAD
	$('h2 div').animate({'margin-right':'0px'})
=======
	$('h3 div').animate({'margin-right':'0px'});
	$('h2 div').animate({'margin-right':'0px'});
>>>>>>> FETCH_HEAD
	//$('.mainHeader').html(showFlag);

	$('div#main').waypoint(function(event, direction) {
		if (direction === 'down') {
			$('a.logo_sm').fadeTo(400,1);
			$('a.flagNav').animate({'margin-left':'0px'},400);
			$('a.bannerNav').animate({'margin-right':'-352px'},200);
<<<<<<< HEAD
			$('h2 div').animate({'margin-right':'-352px'})
=======
			$('h3 div').animate({'margin-right':'-352px'},200);
			$('h2 div').animate({'margin-right':'-352px'},200);
>>>>>>> FETCH_HEAD
		} else {
			$('a.bannerNav').animate({'margin-right':'0px'},200);
			$('a.logo_sm').fadeTo(200,0);
			$('a.flagNav').animate({'margin-left':'-195px'},400);
<<<<<<< HEAD
			$('h2 div').animate({'margin-right':'0px'})
=======
			$('h3 div').animate({'margin-right':'0px'},200);
			$('h2 div').animate({'margin-right':'0px'},200);
>>>>>>> FETCH_HEAD
		}
	});

});