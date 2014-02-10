<?php
	// Do not delete these lines for security reasons
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die ('Please do not load this page directly. Thanks!');
	}
?>

    <?php if (ale_get_option('comments_style') == 'off') : ?>
        <?php
            // comments are disabled
            return;
        ?>
    <?php elseif (ale_get_option('comments_style') == 'wp') : ?>
    <section class="commentform cf">
        <a name="comments"></a>
            <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
                <p class="comments-closed"><?php _e('Comments are closed.', 'aletheme'); ?></p>
            <?php endif; ?>
        <?php if (comments_open()) : ?>
        <section class="comments">
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox" style="height: 240px;">
                        <div class="scrollbox">
                        <?php if (post_password_required()) : ?>
                            <p class="comments-protected"><?php _e('This post is password protected. Enter the password to view comments.', 'aletheme'); ?></p>
                        <?php
                        return; endif; ?>
                        <?php if (have_comments()) : ?>
                            <ol class="commentlist">
                                <?php wp_list_comments(array('callback' => 'aletheme_comment', 'max_depth' => 2)); ?>
                            </ol>
                            <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
                                <nav class="comments-nav" class="pager">
                                    <div class="previous"><?php previous_comments_link(__('&larr; Older comments', 'aletheme')); ?></div>
                                    <div class="next"><?php next_comments_link(__('Newer comments &rarr;', 'aletheme')); ?></div>
                                </nav>
                            <?php endif; // check for comment navigation ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="respond cf">
            <div class="whiteboxexternal">
                <div class="whiteboxinternal">
                    <div class="paddingbox" style="height: 240px;">
                        <a name="respond"></a>
                        <p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
                        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                            <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'aletheme'), wp_login_url(get_permalink())); ?></p>
                        <?php else : ?>
                            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="comment-form">
                                <p class="error"></p>
                                <div class="area1 ta cf">
                                    <?php if (is_user_logged_in()) : ?>
                                        <p><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'aletheme'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'aletheme'); ?>"><?php _e('Log out &raquo;', 'aletheme'); ?></a></p>
                                    <?php else : ?>
                                    <div class="comentforminput" style="margin-bottom: 10px;">
                                        <label for="author"><?php _e('Your name', 'aletheme'); ?></label>
                                        <input type="text" class="text" placeholder="<?php _e('Type here your name', 'aletheme'); ?> *" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> required="required">
                                    </div>
                                    <div class="comentforminput" style="margin-bottom: 10px;">
                                        <label for="email"><?php _e('Your email', 'aletheme'); ?></label>
                                        <input type="email" placeholder="<?php _e('Type here your email', 'aletheme'); ?> *" class="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> required="required" email="true">
                                    </div>

                                    <?php endif; ?>
                                </div>
                                <div class="area2 ta cf">
                                    <div class="commenttextarea">
                                        <label for="comment"><?php _e('Your comment', 'aletheme'); ?></label>
                                        <textarea name="comment" placeholder="<?php _e('Type here your comment', 'aletheme'); ?> *" id="comment" class="input-xlarge" tabindex="4" rows="5" cols="40" required="required"></textarea>
                                        <span class="succes"></span>
                                    </div>
                                    <div class="buttoncomment">
                                        <input name="submit" class="submit" type="submit" tabindex="5" value="<?php _e('Submit', 'aletheme'); ?>" />
                                    </div>
                                </div>
                                <div class="cf"></div>
                                <?php comment_id_fields(); ?>
                                <?php do_action('comment_form', $post->ID); ?>
                            </form>
                        <?php endif; // if registration required and not logged in ?>
                    </div>
                </div>
             </div>
        </section>
    </section>
        <?php endif; ?>
    <?php elseif(ale_get_option('comments_style') == 'fb') : ?>
        <section class="facebook-comments">
            <div id="fb-comments<?php the_ID()?>" class="fb-comments" data-href="<?php the_permalink()?>" data-num-posts="5"></div>
        </section>
    <?php elseif(ale_get_option('comments_style') == 'dq') : ?>
        <section class="disqus-comments">
            <?php _e('Please download the DISQUS plugin from Wordpress Repository and install it.', 'aletheme'); ?>
        </section>
    <?php elseif(ale_get_option('comments_style') == 'lf') : ?>
        <section class="disqus-comments">
            <?php _e('Please download the Livefyre Realtime Comments plugin from Wordpress Repository and install it.', 'aletheme'); ?>
        </section>
    <?php elseif(ale_get_option('comments_style') == 'ws') : ?>
        <section class="defaultwp">
            <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
                <p class="comments-closed"><?php _e('Comments are closed.', 'aletheme'); ?></p>
            <?php endif; ?>
            <div id="comments">
                <?php //wp_list_comments()
                 wp_list_comments(array('callback' => 'aletheme_comment_default', 'max_depth' => 2,'avatar_size' => 80,));
                ?>

                <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
                <nav id="comment-nav-below" class="navigation" role="navigation">
                    <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'aletheme' ); ?></h1>
                    <div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'aletheme' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'aletheme' ) ); ?></div>
                </nav>
                <?php endif; // check for comment navigation ?>
            </div>
            <div class="respondbox">
                <?php comment_form(); ?>
            </div>
        </section>
    <?php endif; ?>