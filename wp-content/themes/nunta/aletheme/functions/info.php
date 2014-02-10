<?php
//Theme Information Data
function aletheme_information_page(){ ?>
    <div class="wrap" id="aletheme-edit-slider-page">
    <h2><?php echo _e('Theme Information','aletheme'); ?></h2>
    <div id="optionsframework-metabox" class="metabox-holder">
    <div id="optionsframework" class="postbox">
    <h3><?php _e('General Information','aletheme'); ?></h3>
    <div class="page">
        <ul>
            <li><?php _e('WordPress Version','aletheme'); ?>: <b><?php echo get_bloginfo('version'); ?></b></li>
            <li><?php _e('URL','aletheme'); ?>: <b><a href="<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></b></li>
            <li><?php _e('Theme Version','aletheme'); ?>: <b><?php $ale_theme = wp_get_theme(); echo $ale_theme->get( 'Version' ); ?></b></li>
            <li><?php _e('PHP Version','aletheme'); ?>: <b><?php echo phpversion(); ?></b></li>
            <li><?php _e('MySQL server version','aletheme'); ?>: <b><?php echo  mysql_get_server_info(); ?></b></li>
            <li><?php _e('Theme created date','aletheme'); ?>: <b>31 May 13</b></li>
            <li><?php _e('Theme last update date','aletheme'); ?>: <b>6 January, 2014</b></li>
        </ul>
    </div>
    <h3><?php _e('Installed Plugins','aletheme'); ?></h3>
    <div class="page">
        <ul>
            <?php foreach(get_option( 'active_plugins' ) as $plugin) { echo '<li>'.$plugin.'</li>'; } ?>
        </ul>
    </div>
    <h3><?php _e('Changelog','aletheme'); ?></h3>
    <div class="page">
    <b><i>Version 1.4 - 06/01/14</i></b><br />
    <p class="greycolor">
        - Added new section Theme Information in Theme Options Panel<br>
        - Updated custom post type icons in admin panel for WordPress 3.8<br>
        - WordPress 3.8 Ready<br>
        - Fixed the toggle shortcode height issue<br>
        - Fixed the logo issue on Admin Panel Login Page<br>
        - Fixed caption images issue. Now images with caption are responsive too<br>
        - Added an Upload button and short text specification to a Gallery box on Edit Page Section<br>
        - Added new fields in theme options Typography section for google fonts Advanced attributes<br>
        - Added pagination on the Blog archive page<br>
        - Added option to disable or enable custom scroll bar from Theme Options Panel<br>
        - Updated nicescroll.js plugin for custom scrollbar<br>
        - Updated the style for custom scroll bar<br>
        - Added menu third level drop down support<br>
        - Changed buttons shortcode styles<br>
        - Updated columns shortcode. Now Columns are responsive<br>
        - Added new Shortcode - Dividers<br>
        - Added new Shortcode - Maps<br>
        - Added new Shortcode - Partners<br>
        - Added new Shortcode - Services<br>
        - Added new Shortcode - Team<br>
        - Added new Shortcode - Testimonials<br>
        - Included logo.psd file in download archive<br>
        - Changed default demo background style<br>
        - Updated the color selector box and added new patterns preview<br>
        - Removed the old twitter widget<br>
        - Updated languages files<br>
    </p>
    <b><i>Version 1.3 - 12/08/13</i></b><br />
    <p class="greycolor">
        - Support WordPress 3.6<br>
        - Optimized JS Scripts<br>
        - Added CountDown Timer on all Home pages<br>
        - Added options to show or hide CountDown<br>
    </p>
    <b><i>Version 1.2 - 13/06/13</i></b><br />
    <p class="greycolor">
        - Changed Home Style 1 Design<br>
        - Changed the default theme background color<br>
        - Fixed responsive css on iPad and iPhone<br>
        - Changed the Home Style 5 Design<br>
    </p>
    <b><i>Version 1.1 - 02/06/13</i></b><br />
    <p class="greycolor">
        - Created new template, Gallery archive with filter 2 columns.<br>
        - Created new template, Gallery archive with filter 3 columns.<br>
        - Created new template, Gallery archive with filter 4 columns.<br>
        - Created new template, Home Page 2<br>
        - Created new template, Home Page 3<br>
        - Created new template, Home Page 4<br>
        - Created new template, Home Page 5<br>
    </p>
    <b><i>Version 1.0 - 31/05/13</i></b><br />
    <p class="greycolor">
        - Initial Release
    </p>
    </div>
    </div>
    </div>
    </div>
<?php }