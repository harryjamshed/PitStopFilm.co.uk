<?php
/*
Template Name: MAIN PAGE
*/
?>

<?php get_header()?>

<div class="wrapper"><a id="home"></a>
	<div class="logocontainer animated fadeIn delay2">
		<div id="pitstop">
			<img class="pitstop flicker move" src="http://pitstopfilm.co.uk/wp-content/themes/pitstopweb/images/pitstoplogo.png" alt="jackking-pitstop" />
		</div>
		<div id="ashortfilm">
			<h2>A SHORT FILM BY JACK KING</h2>
		</div>
	</div>
	
	<div id="fadeonscroll" class="industrylogocontainer">
		<a href="http://bradford-city-of-film.com/" target="_blank"><div class="bradfordfilm"><img class="bradfordfilm" src="http://pitstopfilm.co.uk/wp-content/uploads/2015/08/cityoffilm.png" alt="bradford-film">
		</div>
		
		<a href="#"><div class="londonfilm"><img class="londonfilm" src="http://pitstopfilm.co.uk/wp-content/uploads/2015/10/londonfflaurel2.png" alt="london-film">
		</div>
		
		<a href="http://www.finiteproductions.co.uk/" target="_blank"><div class="finitebig"><img class="finitebig" src="http://pitstopfilm.co.uk/wp-content/uploads/2015/08/finiteproductionslogo.png" alt="finite productions"></div></a>
	</div>
	
	<!-- MAIN PAGE BOUNCING ARROW -->
	<a href="#synopsis"> 
		<div class="animated fadeIn delay3">
			
			<div id="arrow" class="arrow bounce"></div>
			
		</div>
	</a>   

	<div>
	
	
	<?php while(have_posts()): the_post()?>
	
	    <!--<h2><?php the_title()?></h2>-->
	    
		<?php the_content();?>
		
	<?php endwhile;?>
	
</div>

<?php get_footer()?>
