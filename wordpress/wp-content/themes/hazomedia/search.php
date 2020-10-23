<?php
   /**
    * The template for displaying search results pages
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
    *
    * @package ws247
    */
   
   get_header();
   ?>
   <main>
   	<section class="page-banner" style="background-image:url(<?php the_field('b1_banner','option') ?>);">
		<div class="container text-center">
			<h1 class="title">Tìm kiếm</h1>
		</div>
	</section>
	<?php get_template_part( 'template-parts/breadcrumb', '' ); ?>
   	<section id="primary" class="content-area">
   		<main id="main" class="site-main container">
   			<div class="row">
   				<div class="col-12">
   					<?php if ( have_posts() ) : ?>
   						<header class="page-header">
   							<h1 class="page-title">
   								<?php
   								printf( esc_html__( 'Search Results for: %s', 'ws247' ), '<span>' . get_search_query() . '</span>' );
   								?>
   							</h1>
   						</header>
   						<div class="row">
   						<?php
   						while ( have_posts() ) :
   							the_post(); ?>
   							<div class="col-lg-3 col-md-4">
   								<?php get_template_part( 'template-parts/content', 'newsh' ); ?>
   							</div>
   						<?php endwhile; ?>
   						</div>
   						<?php the_posts_navigation(); ?>
   					<?php
   					else :
   						get_template_part( 'template-parts/content', 'none' );
   					endif;
   					?>
   					<?php wp_reset_postdata(); ?>
   				</div>
   			</div>
   		</main>
   	</section>
</main>
<?php
get_footer();