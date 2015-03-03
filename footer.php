<footer role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-widget box-wrapper ">
                    <div class="row">
                        <?php dynamic_sidebar('hippo-bottom-sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>


        <section class="copyright-text box-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <div class="left-copy-text">
                            <?php if (hippo_option('footer-text')) { ?>
                                <?php echo hippo_option('footer-text') ?>
                            <?php } else { ?>
                                <p>
                                    <?php printf(
                                        __('Copyright &copy; %1$s %2$s. All Rights Reserved.<br/>Designed by <a href="%3$s" title="%4$s" rel="designer">%5$s</a>', HIPPO_TEXTDOMAIN),
                                        date('Y'),
                                        __('HSE'),
                                        esc_url('http://www.pinnacleservices.co'),
                                        'Visit The Designer!',
                                        'Pinnacle Services'); ?>
                                    <br>
                                    
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 hidden-xs">
                    <div class="footer-right">
                        <?php if (hippo_option('footer-social-section-show', false, true)) { ?>
                            <div class="social-icon pull-right footer-social">
                                <ul>
                                    <?php if (hippo_option('footer-rss-link', false, true)) { ?>
                                        <li>
                                            <a href="<?php echo hippo_option('footer-rss-link', false, bloginfo('rss2_url')) ?>"
                                               target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-facebook-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-facebook-link') ?>"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-twitter-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-twitter-link') ?>"
                                                ><i class="fa fa-twitter"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-google-plus-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-google-plus-link') ?>"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-youtube-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-youtube-link', false, true) ?>"><i
                                                    class="fa fa-youtube"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-skype-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-skype-link') ?>"><i
                                                    class="fa fa-skype"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-pinterest-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-pinterest-link') ?>"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-flickr-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-flickr-link') ?>"><i
                                                    class="fa fa-flickr"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-linkedin-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-linkedin-link') ?>"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-vimeo-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-vimeo-link') ?>"><i
                                                    class="fa fa-vimeo-square"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-instagram-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-instagram-link') ?>"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-dribbble-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-dribbble-link') ?>"><i
                                                    class="fa fa-dribbble"></i></a></li>
                                    <?php } ?>

                                    <?php if (hippo_option('footer-tumblr-link', false, true)) { ?>
                                        <li><a target="_blank"
                                               href="<?php echo hippo_option('footer-tumblr-link') ?>"><i
                                                    class="fa fa-tumblr"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </section>
    </div>
</footer>

</div> <!-- .inner-wrapper -->

<div class="offcanvas-wrapper col-sm-3 col-xs-3 hidden-lg hidden-md hidden-sm sidebar-offcanvas">
    <div class="content-scroller">
        <div class="offcanvas-content">
            <div class="sidebar-nav">

                <?php
                    if (is_active_sidebar('offcanvas-menu'))
                        dynamic_sidebar('offcanvas-menu'); ?>

            </div>
            <!-- .sidebar-nav -->
        </div>
        <!-- .offcanvas-content -->
    </div>
    <!-- .content-scroller -->
</div> <!-- .offcanvas-wrapper -->


</div> <!-- .row-offcanvas -->
</div> <!-- .wrapper -->
<?php wp_footer(); ?>
</body>
</html>