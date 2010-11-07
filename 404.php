<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */

get_header();
?>

    <div id="content" class="group">
    
        <div class="articles">

            <h2>Ikke fundet!</h2>
            <p>Ups, men du leder efter noget, som vist ikke er der.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>