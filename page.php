<?php get_header(); ?>

    <div id="content" class="group">
    
        <div class="articles">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="article" id="post-<?php the_ID(); ?>">
                <div class="header group">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="section">
					<?php the_content(); ?>
                </div>
            </div>

		<?php comments_template(); ?>

            <?php endwhile; ?>
        <?php else : ?>
            <h2>Siden blev ikke fundet</h2>
            <p>Ups, men du leder efter noget, som vist ikke er der.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>