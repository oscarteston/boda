<?php
/*
 * Template name: Home 2 page
 * */
get_header(); ?>
    <section class="homepage singleblog cf">
        <div class="topslider">
            <div class="postslider">
                <ul class="slides">
                    <?php $slider = ale_sliders_get_slider(ale_get_meta('sliderslugtwo'));  ?>
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
        <div class="recentfromblog">
            <div class="titlepage mainfont"><?php _e('Recent from the blog','aletheme'); ?></div>
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox">
                        <div class="recgaly cf">
                            <?php query_posts('&post_type=post&posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="itemonhome">
                                    <div class="previewimg">
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'medium'); ?></a>
                                        <a href="<?php the_permalink(); ?>" class="mask">
                                            <span class="galhovtit"><span class="one"><span class="two"><span style="padding-top: 5px; padding-bottom: 5px; display: inline-block;"><?php _e('Open Post','aletheme'); ?></span></span></span></span>
                                        </a>
                                    </div>
                                    <div class="title customfont"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="doubleline"></span></div>
                                </div>
                            <?php endwhile; endif; ?>
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