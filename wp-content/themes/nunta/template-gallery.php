<?php
/*
* Template name: Gallery Filter
*/
get_header();
$gallery_page_id = $post->ID;
?>
    <style>
        .isotope-item {
            z-index: 2;
        }

        .isotope-hidden.isotope-item {
            pointer-events: none;
            z-index: 1;
        }
    </style>
    <section class="singleblog cf">
        <div class="titlepage mainfont"><?php _e('Galleries','aletheme'); ?></div>
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
                        <ul id="da-thumbs" class="da-thumbs <?php if(ale_get_meta('galgrid','true',$gallery_page_id)=='twocol'){ echo "twocol"; } elseif(ale_get_meta('galgrid','true',$gallery_page_id)=='threecol'){ echo "threecol";} elseif(ale_get_meta('galgrid','true',$gallery_page_id)=='fourcol'){ echo "fourcol";} ?>">
                            <?php
                            query_posts('&post_type=gallery&posts_per_page=-1&orderby=menu_order&order=ASC');
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="element <?php $terms = get_the_terms($post->ID, 'gallery-category'); if($terms){foreach($terms as $itcat) { echo $itcat->slug.' ';}} ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <span class="imagebox"><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumba'); ?></span>
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


    </section>
<?php get_footer(); ?>