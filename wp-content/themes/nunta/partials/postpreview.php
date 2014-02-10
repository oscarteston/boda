<header class="preview blogpreview cf">
        <div class="titleitem">
            <div class="customfont">
                <div class="lineone">
                    <?php if(is_single()) { the_title(); } else { ?> <a href='<?php the_permalink(); ?>'> <?php the_title(); ?></a> <?php  } ?>
                </div>
            </div>
            <div class="cf"></div>
            <span class="catybox"><?php echo the_category(', '); ?>  | <?php echo get_the_date(); ?></span>
        </div>
        <div class="topslider">
            <div class="previewimage">
                <figure id="simplefigure">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(array(900, 600))?></a>
                </figure>
            </div>
        </div>
</header>