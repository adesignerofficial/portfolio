<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header("front");
?>
<!--START :: Main Header Content -->
<div class="main-header container-fluid">
	<div class="row">
		<div class="col-sm-12 py-2">
			<div class="brand-name">
				<a href="<?php echo get_site_url(); ?>">
					<?php echo get_bloginfo( 'name' ); ?>
				</a>
			</div>
			<!-- <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'primary' ) ); ?> -->
			<ul class="float-right list-inline">
				<li class="list-inline-item"><a href="/blog" class="text-white">
				<?php	_e("Blog"); ?>
				</a></li>
			</ul>
		</div>
	</div>
	<h2 class="hire-me">
		<?php _e('Hire Me!'); ?>
	</h2>
</div>
<!--END :: Main Header Content -->

<!--START :: Services -->
<?php get_template_part( 'template-parts/front/services' ); ?>
<!--END :: Services -->

<!--START :: Technology that we use -->
<?php //get_template_part( 'template-parts/front/technology-we-use' ); ?>
<!--END :: Technology that we use -->

<!--START :: Get In Touch -->
<?php get_template_part( 'template-parts/front/contact-form' ); ?>
<!--END :: Get In Touch -->

<!--START :: Footer 1 -->
<?php get_template_part( 'template-parts/front/footer-1' ); ?>
<!--END :: Footer 1 -->

<?php
get_footer("front");
