<?php
/**
 * Template Name: Faq
 * Description: Here we show all available FAQs
 * @since 1.0
 * 
 */
get_header();
?>

<div class="container">

    <div class="row">
        <div class="span12">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>
                <br />
                <?php do_shortcode('[faq]'); ?>
                <br/><br/>

            <?php endwhile; ?>
        </div>
    </div>
    <br/>
</div>

<?php
get_footer();