<?php
/*
 * Template name: Home main page
 * */
get_header(); ?>
    <section class="homepage cf">

        <div class="mainhomepage">
            <div class="leftfonbg">
                <div class="circle">
                    <img src="<?php echo ale_get_option('groomphoto'); ?>" alt="Groom" />
                    <div class="maskcircle">
                        <div class="circlename mainfont"><?php echo ale_get_option('groom'); ?></div>
                        <div class="circleage customfont"><?php echo ale_get_option('groomage'); ?></div>
                    </div>
                </div>
                <div class="buterfly"></div>
            </div>
            <div class="rightfonbg">
                <div class="circle">
                    <img src="<?php echo ale_get_option('bridephoto'); ?>" alt="Bride" />
                    <div class="maskcircle">
                        <div class="circlename mainfont"><?php echo ale_get_option('bride'); ?></div>
                        <div class="circleage customfont"><?php echo ale_get_option('brideage'); ?></div>
                    </div>
                </div>
                <div class="buterfly"></div>
            </div>
            <div class="heart1">
                <a href="<?php echo ale_get_option('homeimg1'); ?>" class="wishes"></a>
            </div>
            <div class="heart2">
                <a href="<?php echo ale_get_option('homeimg2'); ?>" class="contact"></a>
            </div>
            <div class="heart3"></div>
            <div class="heart4">
                <a href="<?php echo ale_get_option('homeimg3'); ?>" class="bottle"></a>
            </div>
            <div class="heart5"></div>
            <div class="heart6">
                <a href="<?php echo ale_get_option('homeimg4'); ?>" class="flowers"></a>
            </div>
            <div class="heart7">
                <a href="<?php echo ale_get_option('homeimg5'); ?>" class="gallery"></a>
            </div>
        </div>
        <div class="abouthome">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="titlepage mainfont"><?php the_title(); ?></div>
                <div class="whiteboxexternal">
                    <div class="whiteboxinternal">
                        <div class="paddingbox">
                            <?php if(ale_get_meta('countstatus')=='yes'){ ?>
                                <div id="countdown" class="cf" data-c_year="<?php echo ale_get_meta('c_year'); ?>" data-c_month="<?php echo ale_get_meta('c_month'); ?>" data-c_day="<?php echo ale_get_meta('c_day'); ?>" data-c_hour="<?php echo ale_get_meta('c_hour'); ?>"></div>
                            <?php } ?>
                            <div class="cf"></div>
                            <?php the_content(); ?>
                            <?php if(ale_get_option('abouthomelink')){ ?><a href="<?php echo ale_get_option('abouthomelink'); ?>" class="customfont readmoreabout"><?php _e('Read more','aletheme'); ?></a> <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>