<?php get_header(); ?>
    <section class="singleblog blogindex cf">
        <div class="padding">
            <div class="titlepage mainfont cf" style="margin-bottom: 30px;"><?php _e('Archives','aletheme'); ?></div>
            <?php if(ale_get_option('blogpages')=='2c-l-fixed'){
                ale_part('blog-left-sidebar');
            } elseif(ale_get_option('blogpages')=='2c-r-fixed') {
                ale_part('blog-right-sidebar');
            } ?>
            <div id="post" class="content <?php if(ale_get_option('blogpages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('blogpages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('blogpages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php ale_part('posthead');?>
                    <?php ale_part('postpreview' );?>
                    <?php ale_part('postfull');?>
                    <?php ale_part('postfooter');?>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>

        </div>
    </section>
<?php get_footer(); ?>