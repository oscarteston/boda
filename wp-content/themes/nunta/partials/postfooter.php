<?php if (!is_single() && !is_attachment()) : ?>
    <footer class="storyopenlink cf">
        <div class="storyopenlinktwo">
            <div class="blogcomnum">
                <a href="<?php the_permalink()?>#comments">Comments (<?php comments_number( '0', '1', '%' ); ?>)</a>
            </div>
            <div class="blogsocialicon">
                <?php if (ale_get_option('social_sharing')) : ?>
                    <span class="sharesoctext">Share:</span> <a href="<?php echo ale_get_share('fb'); ?>" rel="external" class="fbsoc" onclick="window.open(this.href, 'Share on Facebook', 'width=600,height=300'); return false">FB</a> / <a href="<?php echo ale_get_share('twi'); ?>" class="twsoc" rel="external" onclick="window.open(this.href, 'Share on Twitter', 'width=600,height=300'); return false">TW</a> / <a href="<?php echo ale_get_share('goglp'); ?>" class="gogsoc" rel="external" onclick="window.open(this.href, 'Share on Google+', 'width=600,height=300'); return false">G+</a>
                <?php endif; ?>
            </div>
            <div class="blogfulllink">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="toggle ta customfont"><?php _e('Expand Story', 'aletheme')?></a>
            </div>
            <span class="loading"></span>
        </div>
    </footer>
<?php endif; ?>
</article>