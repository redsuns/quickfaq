<?php

/**
 * @since 1.0
 */
function show_faq()
{
    $faqs = get_posts(array('post_type' => 'faq', 'orderby' => 'post_date', 'order' => 'ASC'));

    if (!empty($faqs)) : ?>
        <div class="faq">
            <ul>
                <?php foreach ($faqs as $faq) : ?>
                    <li>
                        <div class="content" id="<?php echo $faq->ID; ?>">
                            <a href="#" class="content-link" id="<?php echo $faq->ID; ?>"><h4><?php echo $faq->post_title; ?></h4></a>
                            <div class="answer" id="content_<?php echo $faq->ID; ?>" style="display:none;">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $faq->post_content; ?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else : ?>
        <h4>Não há perguntas e respostas cadastradas</h4>
    <?php endif; ?>
<?php
}
