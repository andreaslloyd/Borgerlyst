            <div class="article" id="post-<?php the_ID(); ?>">
                <div class="box<?php global $borgerlyst; if(!sizeof($borgerlyst)) echo ' first-post'?>">
                    <?php if ( !sizeof($borgerlyst) && function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(400,320), array("class" => "post_thumbnail")); } ?>
                    <?php if ( sizeof($borgerlyst) && function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "post_thumbnail")); } ?>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="excerpt">
            					<?php the_excerpt('Læs mere'); ?>
            				</div>
                    <p>
                      <span class="meta">
                        <span class="author">Af <?php the_author_posts_link(); ?></span>,
                        <span class="time"><?php the_date() ?></span>
                      </span>
                    </p>
                </div>
            </div>
