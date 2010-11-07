<?php get_header(); ?>

    <div id="content" class="group">
    
        <div class="articles">
        <?php if (have_posts()) : ?>
            <?php include('3plus2.php'); ?>
            <div class="nav" id="nav-articles">
                <?php next_posts_link('&laquo; Ældre indlæg') ?>
                <?php previous_posts_link('Nyere indlæg &raquo;') ?>
            </div>
        <?php else : ?>
            <h2>Ikke fundet</h2>
            <p>Ups, men du leder efter noget, som vist ikke er der.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>