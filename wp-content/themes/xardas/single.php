<?php get_header(); ?>
<?php
         $a = get_header_image();
         if($a)
             echo ('<div id="tf-single-header" style="background-image: url(' . $a . ')">');
          else
          {
               $blog_url = get_bloginfo('template_directory');
               echo('<div id="tf-single-header" style="background-image: url(' . $blog_url . '/img/background.jpg)">');
          }
         ?>
    <div class="lower-border">
        <div class="container">
            <h1 class="paper"><strong><?php single_post_title(); ?></strong></h1>
            <h4 class="paper"><span class="entry-date"><?php echo get_the_date(); ?></span> -
                <?php the_time(); ?>
            </h4>
        </div>
    </div>
    </div>
    <div class="container text-left">
        <div class="single-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p>
                <?php _e('This page does not exist'); ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container single-meta text-left">
        <div class="row">
            <div class="col-md-6">
                <h4 class="dark">
                    <?php _e('Categories', 'xardas')?>
                </h4>
                <p>
                    <?php the_category(', '); ?>
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="dark">
                    <?php _e('Tags', 'xardas')?>
                </h4>
                <p>
                    <?php the_tags( '', ', ', '<br />' ); ?>
                </p>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
