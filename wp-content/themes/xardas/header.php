<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title(''); ?>
        <?php if (!(is_404()) && (is_single()) || (is_page()) || (is_archive())) { ?> -
        <?php } ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="description" content="Gothic 3 Neu erleben - Eine verbesserte, durch Kapitel gegliederte Story - Aufgewertete und interessante Charaktere - noch mehr spannende Quests">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/fav.png" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" id="navbar-button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <table >
                    <tr>
                        <td>
                            <a href="<?php bloginfo('url'); ?>">
                                <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logotype"/>
                            </a>
                        </td>
                        <td>
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">&nbsp;CSP</a>

                        </td>
                    </tr>
                </table>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php navi_link('') ?>" class="page-scroll nav-text"><?php _e('Home', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('faq', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('FAQ', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('archive', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('Archive', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('gallery', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('Gallery', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('jobs', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('Jobs', 'xardas')?></a></li>
                    <li>
			<a href="https://forum.worldofplayers.de/forum/threads/1493094-Gothic-3-Community-Story-Project-38" target="_blank" class="page-scroll nav-text"><?php _e('WoG', 'xardas')?></a>
		    </li>
                    <li>
                        <a href="https://www.youtube.com/user/Gothic3CSP"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/g3csp"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
