<?php get_header(); ?>
    <section class="singleblog blogindex cf">
        <div class="padding">
            <div class="titlepage mainfont cf" style="margin-bottom: 30px;"><?php the_title(); ?></div>
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                            <div class="cf"></div>
                        <?php endwhile; else: ?>
                            <?php ale_part('notfound')?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>