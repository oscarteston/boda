<?php
/*
 * Template name: Home 4 page
 * */
get_header(); ?>
    <section class="homepage singleblog cf">
        <div class="topslider">
            <div class="postslider">
                <ul class="slides">
                    <?php $slider = ale_sliders_get_slider(ale_get_meta('sliderslugfour'));  ?>
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
            <div class="titlepage mainfont"><?php _e('Recent Galleries','aletheme'); ?></div>
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox">


                        <div id="post" class="cf gridstyle">
                            <ul id="filters">
                                <li class="activefilter"><a href="#" data-filter="*"><?php _e('show all', 'aletheme')?></a></li>
                                <?php $args = array(
                                    'type'                     => 'gallery',
                                    'child_of'                 => 0,
                                    'parent'                   => '',
                                    'orderby'                  => 'name',
                                    'order'                    => 'ASC',
                                    'hide_empty'               => 1,
                                    'hierarchical'             => 1,
                                    'exclude'                  => '',
                                    'include'                  => '',
                                    'number'                   => '',
                                    'taxonomy'                 => 'gallery-category',
                                    'pad_counts'               => false );

                                $categories = get_categories( $args );

                                foreach($categories as $cat){
                                    echo '<li><a href="#" data-filter=".'.$cat->slug.'">'.$cat->name.'</a></li>';
                                }
                                ?>
                            </ul>
                            <ul id="da-thumbs" class="da-thumbs">
                                <?php query_posts('&post_type=gallery&posts_per_page='.ale_get_meta('itemsfour')); if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <li class="element <?php $terms = get_the_terms($post->id, 'gallery-category'); if($terms){foreach($terms as $itcat) { echo $itcat->slug.' ';}} ?>">
                                        <a href="<?php the_permalink(); ?>">
                                            <span class="imagebox"><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumba'); ?></span>
                                            <span class="titlebox"><?php echo ale_truncate(get_the_title(), 30); ?></span>
                                            <span class="linedouble"></span>
                                            <span class="galcat"><?php $terms = get_the_terms($post->id, 'gallery-category'); if($terms) {foreach($terms as $itcat) { echo $itcat->name.' ';} echo " | ";} ?>  <?php echo get_the_date(); ?></span>

                                            <div class="maskgaly"><span class="galhovtit"><span class="one"><span class="two"><span style="padding-top: 5px; padding-bottom: 5px; display: inline-block;"><?php echo ale_truncate(get_the_title(), 30); ?></span></span></span></span></div>
                                        </a>
                                    </li>
                                <?php endwhile; else: ?>
                                    <?php ale_part('notfound')?>
                                <?php endif; ?>
                            </ul>
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