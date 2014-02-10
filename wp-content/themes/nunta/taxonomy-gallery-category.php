<?php get_header(); ?>
    <section class="singleblog cf">
        <div class="titlepage mainfont"><?php _e('Category', 'aletheme'); ?>: <?php echo get_queried_object()->name; ?></div>
        <div class="whiteboxexternal">
            <div class="whiteboxinternal">
                <div class="paddingbox">
                    <div id="post" class="cf gridstyle">
                        <ul id="da-thumbs" class="da-thumbs">
                            <?php
                            global $query_string;
                            query_posts($query_string.'&post_type=gallery&orderby=menu_order&order=ASC');
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="element <?php $terms = get_the_terms($post->id, 'gallery-category'); foreach($terms as $itcat) { echo $itcat->slug.' ';} ?>">
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
                    <div class="pagination cf">
                        <div class="pagy customfont">
                            <?php previous_posts_link( 'Prev galleries' ); ?> &nbsp; <?php next_posts_link( 'Next galleries' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
<?php get_footer(); ?>