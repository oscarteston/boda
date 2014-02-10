<?php get_header(); ?>
    <section class="singleblog cf">
        <div class="titlepage mainfont"><?php _e('Wishes','aletheme'); ?></div>
        <div class="whiteboxexternal">
            <div class="whiteboxinternal">
                <div class="paddingbox">
                    <div id="post" class="cf">
                        <ul class="wishesbox">
                            <?php
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="wishitem cf">
                                    <div class="leftimage">
                                        <?php echo get_the_post_thumbnail($post->ID, 'wishes-tumb'); ?>
                                    </div>
                                    <div class="righttext">
                                        <div class="title mainfont"><?php the_title(); ?></div>
                                        <div class="excerpt"><?php the_excerpt(); ?></div>
                                        <div class="viewmore customfont"><?php _e('View more','aletheme'); ?></div>
                                        <div class="popupbox">
                                            <div class="whitebox">
                                                <div class="close customfont cf">Close</div>
                                                <div class="cf"></div>
                                                <div class="divider"></div>
                                                <div class="textwish cf">
                                                    <?php the_content(); ?>
                                                </div>
                                                <div class="dividerbottom"></div>
                                                <div class="cf"></div>
                                            </div>
                                        </div>
                                    </div>
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