<?php get_header() ?>

<header class="text-center">
    <table class="table-center">
        <tr>
            <td>
                <img class="logo" alt="Logotype" src="<?php bloginfo('template_directory'); ?>/img/logo.png" />
                <h1>Gothic 3 <strong><span class="color"><br>Community Story Project</span></strong></h1>
            </td>
        </tr>
    </table>
</header>

<div id="tf-about-wrapper">
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-7">
                    <div class="about-text">
                        <div class="section-title section-title-dark">
                            <h4 class="paper">
                                <?php _e('The Community Story Project', 'xardas')?>
                            </h4>
                            <h1 class="paper">
                                <?php _e('Gothic 3 <strong>Revived</strong>', 'xardas')?></h1>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro paper">
                            <?php _e('Created by the community for the community', 'xardas')?>
                        </p>
                        <ul class="about-list paper">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <?php _e('<strong>Story</strong> - <em>a more sophisticated, chapter-wise story</em>', 'xardas')?>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <?php _e('<strong>Characters</strong> - <em>improved character design</em>', 'xardas')?>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <?php _e('<strong>Quests</strong> - <em>even more exciting quests</em>', 'xardas')?>
                            </li>

                        </ul>
                        <br>
                        <h4 class="paper">
                            <a href="<?php navi_link(__('faq', 'xardas')) ?>">
                                <?php _e('read more in our FAQ', 'xardas')?>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="tf-news" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong><?php _e('News', 'xardas')?></strong></h2>
            <div class="line">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="news-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <h4>
                    <?php the_date(); ?> -
                    <?php the_time(); ?>
                </h4>
                <br>
                <?php the_excerpt(); ?>
                <br>
                <br>
                <hr style="border-top: 1px solid #444;">
                <br>
                <br>
                <?php endwhile; else: ?>
                <p>
                    <?php _e('No posts found'); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <a href="<?php navi_link(__('archive', 'xardas')) ?>">
        <h4>
            <?php _e('Archive', 'xardas')?>
        </h4>
    </a>
</div>

<div id="wallpaper-paralax" class="text-center" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/map.jpg);">
    <div class="upper-border">
        <div class="lower-border">
        </div>
    </div>
</div>

<div id="tf-works">
    <div class="container">
        <!-- Container -->
        <div class="section-title text-center center">
            <h2><strong><?php _e('Screenshots', 'xardas')?></strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="space"></div>



        <div class="row">

            <div class="col-xs-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/01.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/01_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 photography app">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/02.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/02_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/03.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/03_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/04.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/04_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/05.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/05_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 app">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/06.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/06_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 photography web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/07.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/07_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/08.jpg" class="foobox" rel="gallery">
                            <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/08_thumb.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="wallpaper-paralax" class="text-center" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/hero.jpg);">
    <div class="upper-border">
        <div class="lower-border">
        </div>
    </div>
</div>



<div id="partners" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong>G3CSP</strong> <?php _e('Partners', 'xardas')?></h2>
            <div class="line">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="http://www.piranhabytesitalia.it">
				    <img src="<?php bloginfo('template_directory'); ?>/img/partner/piranha-bytes-italia.jpg">
				</a>
            </div>
            <div class="col-md-6">
                <a href="http://gothic.org.pl/">
				    <img src="<?php bloginfo('template_directory'); ?>/img/partner/gothic-pl.jpg">
				</a>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
