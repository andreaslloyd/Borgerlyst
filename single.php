<?php get_header(); ?>

    <div id="content" class="group">
    
        <div class="articles">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="article" id="post-<?php the_ID(); ?>">
                <div class="header group">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <p>
                        <a href="<?php the_permalink() ?>#commentform" class="comments"><?php $comment_count = get_comment_count($post->ID); ?>Kommentarer (<?=$comment_count['approved']?>)</a>
                        <span class="meta">
                            <span class="time"><?php the_time('j. F, Y') ?></span> &ndash; 
                            <span class="author">skrevet af <?php the_author_posts_link(); ?></span>
                        </span>
                    </p>
                </div>
                <div class="section">
					<?php the_content('Læs mere'); ?>
                </div>
                <div class="footer group">
                    <p>
                        <span class="categories">Kategori: <?php the_category(', ') ?></span>
                    </p>
                </div>
            </div>

		<?php comments_template(); ?>
        
        <?php endwhile; else : ?>
            <h2>Posten blev ikke fundet</h2>
            <p>Ups, men du leder efter noget, som vist ikke er der.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>