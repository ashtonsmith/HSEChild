<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- favicon -->
        <link rel="icon" type="image/png" href="<?php echo hippo_option('favicon', 'url', get_template_directory_uri() . '/images/favicon.png') ?>">
    <!-- end favicon -->

    <!-- Apple touch icons -->
    <?php if (hippo_option('apple-icon-normal', 'url')) { ?>
        <link href="<?php echo hippo_option('apple-icon-normal', 'url') ?>" rel="apple-touch-icon"/>
    <?php } ?>

    <?php if (hippo_option('apple-icon-medium', 'url')) { ?>
        <link href="<?php echo hippo_option('apple-icon-medium', 'url') ?>" rel="apple-touch-icon" sizes="76x76"/>
    <?php } ?>

    <?php if (hippo_option('apple-icon-extra-medium', 'url')) { ?>
        <link href="<?php echo hippo_option('apple-icon-extra-medium', 'url') ?>" rel="apple-touch-icon" sizes="120x120"/>
    <?php } ?>

    <?php if (hippo_option('apple-icon-large', 'url')) { ?>
        <link href="<?php echo hippo_option('apple-icon-large', 'url') ?>" rel="apple-touch-icon" sizes="152x152"/>
    <?php } ?>
    <!-- end Apple touch icons -->

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
<div class="wrapper">
<div class="row row-offcanvas row-offcanvas-left">

<div class="inner-wrapper col-md-12">


<header class="header-top">
<div class="container">

<div class="row">
<div class="col-md-3 col-sm-4 col-xs-9">
    <div class="logo">
        <?php if (hippo_option('logo', 'url')) { ?>
            <a href="<?php echo site_url() ?>" title="<?php echo get_bloginfo('name') ?>">
                <img src="<?php echo hippo_option('logo', 'url') ?>"
                     alt="<?php echo get_bloginfo('name') ?>"/>
            </a>
        <?php } else { ?>
            <a href="<?php echo site_url() ?>" title="<?php echo get_bloginfo('name') ?>">
                <img src="<?php echo get_template_directory_uri(); ?>../HSEChild/media/hse-logo.png"
                     data-at2x="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png"
                     alt="<?php bloginfo('name') ?>"/>
            </a>
        <?php } ?>
    </div>
    <!-- .logo -->
</div>

<div class="col-md-9 col-sm-8 col-xs-3">
    <div class="ml-languate pull-right">
        <?php do_action('icl_language_selector'); ?>
    </div>
    
    <div class="login pull-right">
        <div id="css-modal-area">
            <div class="css-panel">
                <div class="modal-button-icon">

                    <?php if (!is_user_logged_in()) { ?>
                        <a data-toggle="modal" href="#cssModal"><i class="fa fa-lock"></i></a>

                        <?php if (get_option('users_can_register')) { ?>
                            <a data-toggle="modal" href="#cssRegi"><i class="fa fa-user"></i></a>
                        <?php
                        }
                    } ?>
                </div>
                <!-- .modal-button-icon -->

                <?php if (!is_user_logged_in()) { ?>
                    <div class="modal fade" id="cssModal" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content css-content-block">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>

                                <h3><?php _e('Login to your account', HIPPO_TEXTDOMAIN) ?></h3>

                                <?php if (get_option('users_can_register')) { ?>

                                    <div class="css-note">
                                        <p><?php _e('Don\'t have an account yet? ', HIPPO_TEXTDOMAIN) ?>
                                            <a data-toggle="modal" data-dismiss="modal" href="#cssRegi">
                                                <?php _e('Register now!', HIPPO_TEXTDOMAIN) ?></a>
                                        </p>
                                    </div>
                                    <!-- .css-note -->
                                <?php } ?>


                                <div class="popup-loginform-wrapper">
                                    <?php wp_login_form(); ?>
                                    <ul id="css_ul">
                                        <li>
                                            <a href="<?php echo wp_lostpassword_url(); ?>"><?php _e('Forgot your password?', HIPPO_TEXTDOMAIN) ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .popup-loginform-wrapper -->
                            </div>
                            <!-- .modal-content -->
                        </div>
                        <!-- .modal-dialog -->
                    </div>
                    <!-- #cssModal -->


                    <?php if (get_option('users_can_register')) { ?>
                        <!-- Register Modal -->
                        <div class="modal fade" id="cssRegi" tabinex="_1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content css-content-block">
                                    <div class="form-wrapper">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>

                                        <form action="<?php echo wp_registration_url(); ?>" method="post">

                                            <div class="css-field">
                                                <div class="css-label ">
                                                    <?php _e('Username *', HIPPO_TEXTDOMAIN) ?>
                                                </div>

                                                <div class="css-input">
                                                    <input type="text" name="user_login" id="user_login"
                                                           class="input"/>
                                                </div>
                                            </div>

                                            <div class="clear"></div>

                                            <div class="css-field">
                                                <div
                                                    class="css-label "><?php _e('Email *', HIPPO_TEXTDOMAIN) ?></div>

                                                <div class="css-input ">
                                                    <input type="text" name="user_email" id="user_email"
                                                           class="input"/>
                                                </div>
                                            </div>
                                            <?php do_action('register_form'); ?>
                                            <div class="submit-btn">
                                                <input type="submit"
                                                       value="<?php _e('Register', HIPPO_TEXTDOMAIN) ?>"
                                                       id="register"/>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } ?>

            </div>
        </div>
    </div>
    <!-- .login -->


    <div class="pull-right hidden-xs">
        <?php if (hippo_option('social-section-show', false, true)) { ?>

            <div class="social-icon">
                <ul>
                    <?php if (hippo_option('rss-link', false, true)) { ?>
                        <li><a href="<?php echo hippo_option('rss-link', false, bloginfo('rss2_url')) ?>" target="_blank"><i
                                    class="fa fa-rss"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('facebook-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('facebook-link') ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('twitter-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('twitter-link') ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('google-plus-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('google-plus-link') ?>"><i class="fa fa-google-plus"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('youtube-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('youtube-link') ?>"><i class="fa fa-youtube"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('skype-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('skype-link') ?>"><i class="fa fa-skype"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('pinterest-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('pinterest-link') ?>"><i class="fa fa-pinterest"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('flickr-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('flickr-link') ?>"><i class="fa fa-flickr"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('linkedin-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('linkedin-link') ?>"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('vimeo-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('vimeo-link') ?>"><i class="fa fa-vimeo-square"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('instagram-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('instagram-link') ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('dribbble-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('dribbble-link') ?>"><i class="fa fa-dribbble"></i></a></li>
                    <?php } ?>

                    <?php if (hippo_option('tumblr-link', false, true)) { ?>
                        <li><a target="_blank" href="<?php echo hippo_option('tumblr-link') ?>"><i class="fa fa-tumblr"></i></a></li>
                    <?php } ?>

                </ul>
            </div> <!-- .social-icon -->
        <?php } ?>
    </div>

</div>
</div>
</div>
<!-- .container -->
</header>
<!-- .header-top -->

<section id="navigation">
    <div class="container">

        <div class="navbar navbar-default mainnav box-shadow">


            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu"
                        data-canvas="#myNavmenuCanvas" data-placement="left">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- .navbar-toggle -->


                <div class="head-search">
                    <form role="search" method="get" id="searchform" class="form-search"
                          action="<?php echo home_url(); ?>">
                        <div class="search">
                            <i class="fa fa-search"></i>
                            <input type="text" size="20" class="form-control " maxlength="20"
                                   value="<?php the_search_query(); ?>" name="s" id="s"/>
                        </div>
                    </form>
                </div>
                <!-- .head-search -->
            </div>
            <!-- .navbar-header -->


            <nav class="navbar-collapse collapse" role="navigation">
                <?php wp_nav_menu(array(
                        'container'      => false,
                        'theme_location' => 'primary',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
                        'walker'         => new Hippo_Menu_Walker(),
                        'fallback_cb'    => 'Hippo_Menu_Walker::fallback'
                    )
                );
                ?></nav>


        </div>
        <!-- .navbar -->
    </div>
    <!-- .container -->
</section>
<!-- #navigation -->

<?php
    get_header('page');
?>



