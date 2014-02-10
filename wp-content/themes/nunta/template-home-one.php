<?php
/*
 * Template name: Home 1 page
 * */
get_header(); ?>
    <section class="homepage cf">
        <div class="homeheader">
            <div class="ball1"></div>
            <div class="ball2"></div>
            <div class="ball3"></div>
            <div class="ball4"></div>
        </div>
        <div class="grommandbridebox">
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox">
                        <div class="leftgroom"></div>
                        <div class="rightbride"></div>
                        <div class="circlesandverse">
                            <div class="circle">
                                <img src="<?php echo ale_get_option('groomphoto'); ?>" alt="Groom" />
                                <div class="maskcircle">
                                    <div class="circlename mainfont"><?php echo ale_get_option('groom'); ?></div>
                                    <div class="circleage customfont"><?php echo ale_get_option('groomage'); ?></div>
                                </div>
                            </div>
                            <div class="versebox">
                                <div class="verses customfont">
                                    <?php echo ale_get_option('verse'); ?>
                                </div>
                            </div>
                            <div class="circle">
                                <img src="<?php echo ale_get_option('bridephoto'); ?>" alt="Bride" />
                                <div class="maskcircle">
                                    <div class="circlename mainfont"><?php echo ale_get_option('bride'); ?></div>
                                    <div class="circleage customfont"><?php echo ale_get_option('brideage'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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