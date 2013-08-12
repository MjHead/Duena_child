<?php
/**
 *
 * Template Name: Blank Page
 *
 * @package duena
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if( '' != of_get_option('favicon') ){ ?>
<link rel="icon" href="<?php echo esc_url( of_get_option('favicon', "" ) ); ?>" type="image/x-icon" />
<?php } ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-wrapper">
	<?php do_action( 'before' ); ?>
	<header id="header"></header>
	<div id="main" class="site-main">
		<div class="container">
			<div class="row">
				<div id="primary" class="span12">
					<div id="content" class="site-content" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<div class="page_wrap">		
						<h1 class="post-title"><?php the_title(); ?></h1>
						<div class="post_content">
							<?php the_content(''); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'duena' ), 'after' => '</div>' ) ); ?>
						</div>
					</div>
					<?php endwhile; else: ?>
					
							<?php get_template_part( 'no', 'results' ); ?>

			    		<?php endif; ?>

					</div><!-- #content -->
				</div><!-- #primary -->
			</div>
		</div>
	</div><!-- #main -->
</div><!-- .page-wrapper -->

<?php wp_footer(); ?>
</body>
</html>