   <?php
      if ( is_single() ) :
      	the_title( '<p class="entry-title">', '</p>' );
      else :
      	the_title( sprintf( '<h3 class="entry-title"><strong><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></strong></h3>' );
      endif;
      ?>
   <div class="dark"><span class="entry-date"><?php echo get_the_date(); ?></span> - <?php the_time(); ?></div>
<br />
