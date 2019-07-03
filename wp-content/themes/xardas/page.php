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
                <h1 class="brand-heading paper"><strong> <?php the_title(); ?></strong></h1>
            </div>
        </div>
        </div>
        <div class="container page-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p>
                <?php _e('This page does not exist'); ?>
            </p>
            <?php endif; ?>
        </div>
        <?php get_footer(); ?>
