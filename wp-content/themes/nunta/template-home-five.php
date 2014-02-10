<?php
/*
 * Template name: Home 5 page
 * */
get_header(); ?>
    <section class="homepage singleblog homefive cf">

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
                        <?php if(ale_get_meta('countstatus')=='yes'){ ?>
                            <div id="countdown" class="cf" data-c_year="<?php echo ale_get_meta('c_year'); ?>" data-c_month="<?php echo ale_get_meta('c_month'); ?>" data-c_day="<?php echo ale_get_meta('c_day'); ?>" data-c_hour="<?php echo ale_get_meta('c_hour'); ?>"></div>
                        <?php } ?>
                        <div class="cf"></div>
                        <?php global $query_string; query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
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
                                <?php query_posts('&post_type=gallery&posts_per_page='.ale_get_meta('itemsfive')); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
    </section>
<?php get_footer(); ?>