		  	</div> <!-- end of #content -->
		    
		</div> <!-- end of #main -->
		    
	</div> <!-- end of #wrap -->
	
	<nav id="mainNav">
			
		<a href="<?php echo home_url(); ?>" class="logo_sm">TEDxYouth@Hillsborough</a>
	
    	<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'depth' => 1)); ?>
		
		<ul class="clearfix">
			<li><a href="http://tedxyouthhillsborough.com/about">About</a></li>
			<li><a href="http://tedxyouthhillsborough.com/event-details">Event Details</a></li>
			<li><a href="http://tedxyouthhillsborough.com/speakers">Speakers</a></li>
			<li><a href="http://tedxyouthhillsborough.com/sponsors">Sponsors</a></li>
			<li><a href="http://tedxyouthhillsborough.com/register">Register</a></li>
		</ul>
		
		<a href="/event-details/" class="flagNav">
			<h2>Saturday May 24th 2014</h2>
			<h3>The Nueva School</h3>
		</a>

	</nav>

	<div id="footerWrap">

	<footer class="row">
								
		<section class="navigation three columns clearfix">
			<h2>Navigation</h2>
			<?php wp_nav_menu(array(
				'theme_location' => 'footer_left',
				'menu_class' => 'left'
				));
			?>
			<?php wp_nav_menu(array(
				'theme_location' => 'footer_right',
				'menu_class' => 'left'
				));
			?>
		</section>
		
		<section class="social three columns clearfix">
			<h2>We Like To Be Social</h2>
			<?php wp_nav_menu(array(
				'theme_location' => 'footer_social',
				));
			?>
		</section>
		<section class="legalStuff three columns clearfix">
			<h2>What Is TEDx?</h2>
			<p></p>
		</section>
		
		<section class="legalStuff three columns clearfix">
			<h2>Legal Stuff</h2>
			<p>This independent TEDx event is operated under license from TED.</p>
		</section>

		
	</footer>

	</div> <!-- footer wrap -->

	<script>
	    window._gaq = [['_setAccount','UA-20245932-1'],['_trackPageview'],['_trackPageLoadTime']];
	    Modernizr.load({
	      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	    });
  	</script>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

</body>
</html>
