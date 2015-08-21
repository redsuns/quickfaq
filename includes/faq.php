<?php

/**
 * @since 1.0
 */
function show_faq()
{
	wp_reset_query();
	$faqs_args = array(
	                   'post_type' => 'faq',
	                   'orderby' => 'post_date',
	                   'order' => 'ASC',
                       'limit' => -1
	                   );

    $faqs = query_posts($faqs_args);

    if ( !empty( $faqs ) ) : ?>
        <div class="faq">
            <ul>
                <?php foreach ( $faqs as $faq ) : ?>
                    <li>
                        <div class="content" id="<?php echo $faq->ID; ?>">
                            <a href="#" class="content-link" id="<?php echo $faq->ID; ?>"><h4><?php echo $faq->post_title; ?></h4></a>
                            <div class="answer" id="content_<?php echo $faq->ID; ?>">
                                <p><?php echo apply_filters('the_content', $faq->post_content); ?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else : ?>
        <h4><?php _e( 'No questions and answers indexed', 'quickfaq' ); ?></h4>
    <?php endif; ?>
<?php
}
