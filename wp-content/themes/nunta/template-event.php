<?php
/*
 * Template name: Event page
 * */
get_header(); ?>
    <section class="singleblog cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="titlepage mainfont"><?php the_title(); ?></div>
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox">
                        <div class="eventslider">
                            <div id="ei-slider" class="ei-slider">
                                <ul class="ei-slider-large">
                                    <li>
                                        <img src="<?php echo ale_get_meta('imageone'); ?>" alt="<?php the_title(); ?>"/>
                                        <div class="ei-title">
                                            <h2 class="mainfont"><?php echo ale_get_meta('titleone'); ?></h2>
                                            <h3 class="customfont"><?php echo ale_get_meta('subone'); ?></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php echo ale_get_meta('imagetwo'); ?>" alt="<?php the_title(); ?>" />
                                        <div class="ei-title">
                                            <h2 class="mainfont"><?php echo ale_get_meta('titletwo'); ?></h2>
                                            <h3 class="customfont"><?php echo ale_get_meta('subtwo'); ?></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php echo ale_get_meta('imagefree'); ?>" alt="<?php the_title(); ?>" />
                                        <div class="ei-title">
                                            <h2 class="mainfont"><?php echo ale_get_meta('titlefree'); ?></h2>
                                            <h3 class="customfont"><?php echo ale_get_meta('subfree'); ?></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php echo ale_get_meta('imagefour'); ?>" alt="<?php the_title(); ?>"/>
                                        <div class="ei-title">
                                            <h2 class="mainfont"><?php echo ale_get_meta('titlefour'); ?></h2>
                                            <h3 class="customfont"><?php echo ale_get_meta('subfour'); ?></h3>
                                        </div>
                                    </li>

                                </ul><!-- ei-slider-large -->
                                <ul class="ei-slider-thumbs">
                                    <li class="ei-slider-element">Current</li>
                                    <li><a href="#">Slide 6</a><img src="<?php echo ale_get_meta('thumbone'); ?>" alt="<?php the_title(); ?>" /></li>
                                    <li><a href="#">Slide 1</a><img src="<?php echo ale_get_meta('thumbtwo'); ?>" alt="<?php the_title(); ?>" /></li>
                                    <li><a href="#">Slide 2</a><img src="<?php echo ale_get_meta('thumbfree'); ?>" alt="<?php the_title(); ?>" /></li>
                                    <li><a href="#">Slide 2</a><img src="<?php echo ale_get_meta('thumbfour'); ?>" alt="<?php the_title(); ?>" /></li>
                                </ul><!-- ei-slider-thumbs -->
                            </div><!-- ei-slider -->
                        </div>
                        <div style="margin-top: 50px;">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php if(has_post_thumbnail()){
                echo "<div class='eventimage'><div class='eventtwoimage'>".get_the_post_thumbnail($post->ID,'full')."</div></div>";
            } ?>

            <div class="whiteboxexternal" style="margin-top: 11px;">
                <div class="whiteboxinternal">
                    <div class="paddingbox">
                        <div class="weddingparty cf">
                            <div class="leftwed">
                                <div class="customfont placeone">
                                    <?php _e('Lugar','aletheme'); ?>
                                </div>
                                <div class="mainfont placetwo">
                                    <?php echo ale_get_meta('place') ?><br />
                                    <span class="customfont placethree"><?php echo ale_get_meta('placeadress'); ?></span>
                                </div>
                            </div>
                            <div class="rightwed">
                                <div class="customfont dateone">
                                    <?php _e('Fecha Y Hora','aletheme'); ?>
                                </div>
                                <div class="mainfont datetwo">
                                    <?php echo ale_get_meta('weddingdate'); ?><br />
                                    <span class="customfont datethree"><?php echo ale_get_meta('weddingtime'); ?></span>
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