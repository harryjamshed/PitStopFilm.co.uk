<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/pitstopfavicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/pitstopfavicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        
        
        <script>
		var arrow, header, yPos;
		function yscroll (){
			  header = document.getElementById ('header');
		      arrow = document.getElementById ('arrow');
		      yPos = window.pageYOffset;
		      if (yPos > 100) {
			        arrow.style.display = "none";				
		            header.style.backgroundColor = "black";
		      } else {
		            arrow.style.display = "block";
		            header.style.backgroundColor = "rgba(0, 0, 0, 0.1)";
		
		      }
		}
		window.addEventListener("scroll", yscroll);
		</script>
		
		<script>
		var fadeonscroll, yPos;
		function yscroll (){
			  fadeonscroll = document.getElementById ('fadeonscroll');
		      yPos = window.pageYOffset;
		      if (yPos > 200) {
			        fadeonscroll.style.opacity = "0";				
		      } else {
			        fadeonscroll.style.opacity = "1";				
		
		      }
		}
		window.addEventListener("scroll", yscroll);
		</script>
		
		<script>
			var arrows, yPos;
		function yscroll (){
		      arrows = document.getElementById ('arrows');
		      yPos = window.pageYOffset;
		      if (yPos > 500) {
		            arrows.style.opacity = "1";
		            arrows.style.display = "block";
		      } else {
		            arrows.style.opacity = "0";
		            arrows.style.display = "none";
		           
		
		      }
		}
		window.addEventListener("scroll", yscroll);
		</script>
				
		<script>
		function toggleCP(){
			var cp = document.getElementById("cp");
			cp.style.height = window.innerHeight - 60+"px";
			if(cp.style.left == "0px"){
				cp.style.left = "-260px";
			} else {
				cp.style.left = "0px";
			}
		}
		</script>
		
		<script type="text/javascript">
		  WebFontConfig = {
		    google: { families: [ 'Palanquin:300:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })(); 
		 </script>
				
	</head>
	<body <?php body_class(); ?>>

	<header id="header" class="animated fadeInDown">
		
		<nav id="nav">
			
			<ul>
				
				<nav>
				<?php wp_nav_menu()?>
				</nav>
				
			</ul>
					
		</nav>
		
		<!--SOCIAL NETWORK ICONS-->

			<ul class="socialnetwork">
				
				<!--<li class="youtube"><a href="#"></a></li>-->
				
				<li class="vimeo"><a href="https://vimeo.com/finiteprods" target="_blank"></a></li>
				
				<li class="twitter"><a href="https://twitter.com/finiteprods" target="_blank"></a></li>
				
				<li class="facebook"><a href="https://www.facebook.com/finiteprods" target="_blank"></a></li>
			
			</ul>
			
		<div id="cpBtn" onclick="toggleCP()">
		  <p>MENU</p>
		</div>
		<div id="cp">
			<?php wp_nav_menu()?>
		</div>
			
		
	</header>
	
	
	<!--SIDEBAR ARROWS-->
	<div id="arrows" class="arrows">
			
		<li><a href="#home"><img class="up" src="http://pitstopfilm.co.uk/wp-content/themes/pitstopweb/images/up.png" alt="up"></a></li>
				
		<li><a href="#contact"><img class="down" src="http://pitstopfilm.co.uk/wp-content/themes/pitstopweb/images/up.png" alt="down"></a></li>

	</div>


