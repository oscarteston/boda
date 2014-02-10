<?php
/**
 * Template Name: RSVP page
 */
// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
get_header(); ?>
    <section class="singleblog cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="titlepage mainfont"><?php the_title(); ?></div>
            <div class="leftpart">
                <div class="whiteboxexternal">
                    <div class="whiteboxinternal">
                        <div class="paddingbox" style="min-height: 500px;">
                            <?php the_content(); ?>
                            <div class="rvspform">
                                <form method="post" action="<?php the_permalink();?>">
                                    <?php if (isset($_GET['success'])) : ?>
                                        <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                                    <?php endif; ?>
                                    <?php if (isset($error) && isset($error['msg'])) : ?>
                                        <p class="error"><?php echo $error['msg']?></p>
                                    <?php endif; ?>
                                    <div class="ta nametwo">
                                        <!--<label for="contact-form-name"><?php _e('Your name','aletheme'); ?></label>-->
                                        <input type="text" placeholder="<?php _e('Type here your name', 'aletheme')?> *" name="contact[name]" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                                    </div>
                                    <div class="ta emailtwo">
                                        <!--<label for="contact-form-email"><?php _e('Your email','aletheme'); ?></label>-->
                                        <input type="email" placeholder="<?php _e('Type here your email', 'aletheme')?> *" name="contact[email]" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                                    </div>
                                    <div class="ta phonetwo">
                                        <!--<label for="contact-form-how"><?php _e('No. of Guests','aletheme'); ?></label>-->
                                        <input type="text" placeholder="<?php _e('Type here your guests number', 'aletheme')?>" name="contact[how]" value="<?php echo isset($_POST['contact']['how']) ? $_POST['contact']['how'] : ''?>" id="contact-form-how" />
                                    </div>
                                    <div class="cf"></div>
                                    <div class="commenttextarea">
                                        <!--<label for="contact-form-message"><?php _e('Message','aletheme'); ?></label>-->
                                        <textarea name="contact[message]" placeholder="<?php _e('Type here your message', 'aletheme')?> *" id="contact-form-message" cols="40" rows="5" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                                    </div>
                                    <div class="buttoncomment">
                                        <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>" />
                                    </div>
                                    <?php wp_nonce_field() ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightpart">
                <div class="imageone">
                    <div class="imagetwo">
                        <?php echo get_the_post_thumbnail($post->ID,'full'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
        <?php endif; ?>

    </section>
<?php get_footer(); ?>