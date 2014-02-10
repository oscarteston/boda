<?php get_header(); ?>
<section class="singleblog cf">
    <div class="padding">

        <div class="titlepage mainfont">404 Error</div>
        <div class="errorbox cf ">
            <h1 style="font-size: 28px;text-transform: none;" class="customfont"><?php _e('Error, page not found','aletheme'); ?></h1>
            <p><?php _e('Sorry, but the page you\'re looking for has not found. Try checking the URL for errors, then hit the refresh<br /> button on your browser.','aletheme'); ?></p>
            <a href="<?php echo home_url();?>" class="gohomebut customfont"><?php _e('Return to the homepage','aletheme'); ?></a>
            <div class="cf"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>