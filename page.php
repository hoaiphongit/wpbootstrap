<?php get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page">
    <?php do_action( 'wpbootstrap_before_content' ); ?>
    <div class="row">
        <div class="col-sm-12 col-md-8 columns" role="main">
          <article class="main-content">          
            <?php while ( have_posts() ) : the_post(); ?>
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                
                <?php do_action( 'wpbootstrap_page_before_entry_content' ); ?>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php edit_post_link( __( 'Edit', 'wpbootstrap' ), '<span class="edit-link">', '</span>' ); ?>
                </div>
                
                <footer>
                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'wpbootstrap' ), 'after' => '</p></nav>' ) ); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
                
                <?php //do_action( 'wpbootstrap_page_before_comments' ); ?>            
                <?php //comments_template(); ?>
                <?php //do_action( 'wpbootstrap_page_after_comments' ); ?>
            <?php endwhile; ?>
           
          </article>
        </div> 

    <?php get_sidebar(); ?>
    </div>
    <?php do_action( 'wpbootstrap_after_content' ); ?>
</div>

<?php get_footer(); ?>