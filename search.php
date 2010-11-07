<?php get_header(); ?>

    <div id="content" class="group">
    
        <div class="articles search">
        <?php if (have_posts()) : ?>
        	<h1>S&oslash;geresultater</h1>
            <?php while (have_posts()) : the_post(); ?>
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
            </div>
            <?php endwhile; ?>
            <div class="nav" id="nav-articles">
                <?php next_posts_link('&laquo; Ældre indlæg') ?>
                <?php previous_posts_link('Nyere indlæg &raquo;') ?>
            </div>
        <?php else : ?>
            <h1>Ingen indl&aelig;g fundet - pr&oslash;v en anden s&oslash;gning:</h1>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>