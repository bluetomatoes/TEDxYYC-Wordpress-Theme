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
	$('h2 div').animate({'margin-right':'0px'});
>>>>>>> c8be3dff7d8b704fbfc5642c9f8e2046bb86c8b4
	//$('.mainHeader').html(showFlag);

	$('div#main').waypoint(function(event, direction) {
		if (direction === 'down') {
			$('a.logo_sm').fadeTo(400,1);
			$('a.flagNav').animate({'margin-left':'0px'},400);
<<<<<<< HEAD
			$('a.bannerNav').animate({'margin-right':'-352px'},200);
			$('h2 div').animate({'margin-right':'-352px'})

=======
			$('a.bannerNav').animate({'margin-right':'-290px'},200);
			$('h2 div').animate({'margin-right':'-290px'},200);
>>>>>>> c8be3dff7d8b704fbfc5642c9f8e2046bb86c8b4
		} else {
			$('a.bannerNav').animate({'margin-right':'0px'},200);
			$('a.logo_sm').fadeTo(200,0);
			$('a.flagNav').animate({'margin-left':'-195px'},400);
<<<<<<< HEAD

			$('h2 div').animate({'margin-right':'0px'})

=======
			$('h2 div').animate({'margin-right':'0px'},200);
>>>>>>> c8be3dff7d8b704fbfc5642c9f8e2046bb86c8b4
		}
	});

});