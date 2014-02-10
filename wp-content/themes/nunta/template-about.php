<?php
/**
 * Template Name: About page
 */
get_header(); ?>
    <section class="singleblog cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="titlepage mainfont"><?php the_title(); ?></div>
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox">
                        <?php the_content(); ?>
                        <div class="cf"></div>
                        <div class="lentaboxtitle customfont"><?php _e('Our most awesome time','aletheme'); ?><br /><span><?php _e('Hover on circle to see and feel the atmosphere','aletheme'); ?></span></div>
                        <div class="lenta">
                            <div class="coloritem">
                                <div class="leftpart">
                                    <div class="roundbox">
                                        <img src="<?php echo ale_get_meta('tlimageone'); ?>" />
                                        <div class="maskcolor">
                                            <span class="mainfont">
                                                <?php echo ale_get_meta('tltitleone'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rightpart">
                                    <div class="datebox mainfont"><?php echo ale_get_meta('tldateone'); ?></div>
                                </div>
                            </div>
                            <div class="greyitem">
                                <div class="leftpart">
                                    <div class="datebox mainfont"><?php echo ale_get_meta('tldatetwo'); ?></div>
                                </div>
                                <div class="rightpart">
                                    <div class="roundbox">
                                        <img src="<?php echo ale_get_meta('tlimagetwo'); ?>" />
                                        <div class="maskcolor">
                                            <span class="mainfont">
                                                <?php echo ale_get_meta('tltitletwo'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="coloritem">
                                <div class="leftpart">
                                    <div class="roundbox">
                                        <img src="<?php echo ale_get_meta('tlimagethree'); ?>" />
                                        <div class="maskcolor">
                                            <span class="mainfont">
                                                <?php echo ale_get_meta('tltitlethree'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rightpart">
                                    <div class="datebox mainfont"><?php echo ale_get_meta('tldatethree'); ?></div>
                                </div>
                            </div>
                            <div class="greyitem">
                                <div class="leftpart">
                                    <div class="datebox mainfont"><?php echo ale_get_meta('tldatefour'); ?></div>
                                </div>
                                <div class="rightpart">
                                    <div class="roundbox">
                                        <img src="<?php echo ale_get_meta('tlimagefour'); ?>" />
                                        <div class="maskcolor">
                                            <span class="mainfont">
                                               <?php echo ale_get_meta('tltitlefour'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="coloritem">
                                <div class="leftpart">
                                    <div class="roundbox">
                                        <img src="<?php echo ale_get_meta('tlimagefive'); ?>" />
                                        <div class="maskcolor">
                                            <span class="mainfont">
                                                <?php echo ale_get_meta('tltitlefive'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rightpart">
                                    <div class="datebox mainfont"><?php echo ale_get_meta('tldatefive'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
        <?php endif; ?>

    </section>
<?php get_footer(); ?>