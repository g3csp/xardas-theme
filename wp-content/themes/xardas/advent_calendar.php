<?php /* 
* Template Name: Advent Calendar 2017 
* Template Post Type: post, page, product
*/ ?>
<?php get_header(); ?>
<style>
    body {
        background-color: #0c1f23;
    }
</style>

<body>
    <div class="container page-content">
        <?php echo get_post_field('post_content', $post->ID); ?>
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.rwdImageMaps.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('img[usemap]').rwdImageMaps();
        });
    </script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>
