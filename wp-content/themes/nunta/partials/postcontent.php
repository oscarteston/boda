<div class="whiteboxexternal">
    <div class="whiteboxinternal">
        <div class="paddingbox">
            <section class="story cf">
                <div class="boxcontent cf">
                    <?php the_content(); ?>
                    <?php if(get_the_tags()){ ?>
                        <p><i class="icon-tags"></i>&nbsp; <?php the_tags(); ?></p>
                    <?php } ?>
                </div>
                <?php wp_link_pages(array(
                    'before' => '<section class="story-pages"><p>' . __('Pages:', 'aletheme'),
                    'after'	 => '</p></section>',
                )) ?>
            </section>
        </div>
    </div>
</div>

