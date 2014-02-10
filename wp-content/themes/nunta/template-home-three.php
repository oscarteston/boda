<?php
/*
 * Template name: Home 3 page
 * */
get_header(); ?>
    <section class="homepage singleblog cf">
        <div class="topslider">
            <div class="postslider">
                <ul class="slides">
                    <?php $slider = ale_sliders_get_slider(ale_get_meta('sliderslugthree'));  ?>
                    <?php if($slider):?>
                        <?php foreach ($slider['slides'] as $slide) : ?>
                            <li>
                                <figure>
                                    <?php if ($slide['image']) : ?>
                                        <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                                    <?php endif; ?>
                                    <?php if($slide['title'] or $slide['description'] or $slide['html']){ ?><figcaption class="homecaption">
                                        <?php if($slide['title']){ echo '<div class="mainslidertitle customfont">'; if($slide['url']){ echo '<a href="'.$slide['url'].'" class="sliderlinkmore">'; } echo $slide['title']; if($slide['url']){ echo '</a>'; } echo '</div>'; } ?>
                                        <div class="mainsliderdescription">
                                            <?php if($slide['description']){ echo $slide['description']; } ?>
                                            <?php if($slide['html'] and $slide['description']){ echo '<br />'; } ?>
                                            <?php if($slide['html']){ echo $slide['html']; } ?>

                                        </div>
                                        </figcaption><?php } ?>
                                </figure>
                            </li>
                        <?php endforeach; ?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
        <div class="cf" style="margin-bottom: 55px;">

            <div class="leftpart" style="text-align: center;">
                <div class="whiteboxexternal">
                    <div class="whiteboxinternal">
                        <div class="paddingbox cf">
                            <div class="circle">
                                <img src="<?php echo ale_get_option('groomphoto'); ?>" alt="Groom" />
                                <div class="maskcircle">
                                    <div class="circlename mainfont"><?php echo ale_get_option('groom'); ?></div>
                                    <div class="circleage customfont"><?php echo ale_get_option('groomage'); ?></div>
                                </div>
                            </div>
                            <div class="customfont abouttitlehome">
                                <?php _e('About','aletheme'); ?> <?php echo ale_get_option('groom'); ?>
                            </div>
                            <div class="aboutdescrhome">
                                <?php echo ale_get_meta('groomdescr'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightpart" style="text-align: center;">
                <div class="whiteboxexternal">
                    <div class="whiteboxinternal">
                        <div class="paddingbox cf">
                            <div class="circle">
                                <img src="<?php echo ale_get_option('bridephoto'); ?>" alt="Bride" />
                                <div class="maskcircle">
                                    <div class="circlename mainfont"><?php echo ale_get_option('bride'); ?></div>
                                    <div class="circleage customfont"><?php echo ale_get_option('brideage'); ?></div>
                                </div>
                            </div>
                            <div class="customfont abouttitlehome">
                                <?php _e('About','aletheme'); ?> <?php echo ale_get_option('bride'); ?>
                            </div>
                            <div class="aboutdescrhome">
                                <?php echo ale_get_meta('bridedescr'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="abouthome">
            <?php global $query_string; query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
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