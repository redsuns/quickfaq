<?php
/**
 * Template Name: Faq
 * Description: Here we show all available FAQs
 * @since 1.0
 * 
 */
get_header();
wp_enqueue_style('quickfaq', get_bloginfo('url').'/wp-content/plugins/quickfaq/includes/quickfaq.css');
?>

<div class="container">

    <div class="row">
        <div class="span12">
            <?php while (have_posts()) : the_post(); ?>
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


<script>
    $(document).ready(function() {
        $(".content-link").click(function() {
            toShow = $(this).attr("id");
            $(".answer").slideUp();
            $("#content_" + toShow).slideDown();
            return false;
        });
    });
</script>

<?php
get_footer();
