<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package wpbootstrap
 */ 

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page">
    <?php do_action( 'wpbootstrap_before_content' ); ?>
    <div class="row">
        <div class="col-sm-12 col-md-8 columns" role="main">
          	<article class="main-content">                      
                <header>
                    <h1 class="entry-title"><?php _e( 'File Not Found', 'foundationpress' ); ?></h1>
                </header>
                
                <?php do_action( 'wpbootstrap_page_before_entry_content' ); ?>
                
                <div class="entry-content">
                    <div class="error">
						<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'foundationpress' ); ?></p>
					</div>
					<p><?php _e( 'Please try the following:', 'foundationpress' ); ?></p>
					<ul>
						<li><?php _e( 'Check your spelling', 'foundationpress' ); ?></li>
						<li><?php printf( __( 'Return to the <a href="%s">home page</a>', 'foundationpress' ), home_url() ); ?></li>
						<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'foundationpress' ); ?></li>
					</ul>
                </div>                                                       
          	</article>
        </div> 

    <?php get_sidebar(); ?>
    </div>
    <?php do_action( 'wpbootstrap_after_content' ); ?>
</div>

<?php get_footer(); ?>