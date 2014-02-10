<?php get_header(); ?>
<section class="singleblog cf">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="titleitem">
        <div class="customfont">
            <div class="lineone">
                <?php the_title(); ?>
            </div>
        </div>
        <div class="cf"></div>
        <span class="catybox"><?php
            $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
            foreach($current_category as $curcat){
                echo $curcat->name.' ';
            }
            ?> | <?php echo the_date(); ?></span>
    </div>
        <div class="topslider">
        <div class="postslider">
            <ul class="slides">
                <?php
                $args = array(
                    'post_type' => 'attachment',
                    'numberposts' => -1,
                    'post_status' => null,
                    'order'				=> 'ASC',
                    'orderby'			=> 'menu_order ID',
                    'meta_query'		=> array(
                        array(
                            'key'		=> '_ale_hide_from_gallery',
                            'value'		=> 0,
                            'type'		=> 'DECIMAL',
                        ),
                    ),
                    'post_parent' => $post->ID
                );
                $attachments = get_posts( $args );
                if ( $attachments ) {
                    foreach ( $attachments as $attachment ) {
                        echo "<li>".wp_get_attachment_image( $attachment->ID, 'gallery-big' )."</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="whiteboxexternal">
        <div class="whiteboxinternal">
            <div class="paddingbox">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>