<?php get_header(); ?>
<?php
$a = get_header_image();
if($a)
    echo ('<div id="tf-page-header" style="background-image: url(' . $a . ')">');
 else
 {
      $blog_url = get_bloginfo('template_directory');
      echo('<div id="tf-page-header" style="background-image: url(' . $blog_url . '/img/background.jpg)">');
 }
?>
    <div class="lower-border">

        <div class="container">
            <?php
            the_archive_title( '<h1 class="paper"><strong>', '</strong></h1>' );
            the_archive_description( '<div class="taxonomy-description paper">', '</div>' );
            ?>
        </div>
    </div>
    </div>
    </div>




    <div class="container article-container">

        <?php

         if ( have_posts() ) : ?>


        <?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous', 'xardas' ),
				'next_text'          => __( 'Next', 'xardas' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'xardas' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

    </div>
    <!-- .content-area -->

    <?php get_footer(); ?>
