        </div>
    </div>
    <footer id="footer-main" role="contentinfo" class="cf">
        <div class="socialprof cf">
            <div class="lineone"></div>
            <div class="socialicons cf">
                <?php if(ale_get_option('fb')){ echo '<a href="'.ale_get_option('fb').'" rel="external" class="socic fbicon" >Facebook</a>'; } ?>
                <?php if(ale_get_option('twi')){ echo '<a href="http://twitter.com/#!/'.ale_get_option('twi').'" rel="external" class="socic twiicon" >Twitter</a>'; } ?>
                <?php if(ale_get_option('gog')){ echo '<a href="'.ale_get_option('gog').'" rel="external" class="socic gogicon" >Google+</a>'; } ?>
                <?php if(ale_get_option('pint')){ echo '<a href="'.ale_get_option('pint').'" rel="external" class="socic pinticon" >Pinterest</a>'; } ?>
            </div>
        </div>
        <div class="footertext">
            <div class="lineone"></div>
            <?php if (ale_get_option('copyrights')) : ?>
                <p class="copy"><?php echo ale_option('copyrights'); ?></p>
            <?php else: ?>
                <p class="copy">&copy; <?php _e('Copyright 2013, Alethemes WordPress Theme<br /><a href="#">Nunta Responsive WordPress Theme</a>', 'aletheme')?></p>
            <?php endif; ?>
        </div>
	</footer>
    </div>
    <div class="bottom"></div>
        <?php if(ale_get_option('previewbox') == "1") {
            ale_part('colorselector');
        } ?>
<?php wp_footer(); ?>

</body>
</html>