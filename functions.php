<?php

if ( function_exists('register_sidebars') ) {
  register_sidebar(array(
      'name'          => 'Venstre',
      'id'            => 'left',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
  ));
  register_sidebar(array(
      'name'          => 'H&oslash;jre',
      'id'            => 'right',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
  ));
  register_sidebar(array(
      'name'          => 'Footer',
      'id'            => 'footer',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
  ));
}

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

function borgerlyst_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    	<div class="comment-author vcard">
    		<?php echo get_avatar($comment,$size='48',$default='' ); ?>
			<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
            |
        	<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>" class="time"><?php printf(__('%1$s til %2$s'), get_comment_date(),  get_comment_time()) ?></a>
			<!--<?php edit_comment_link(__('(Edit)'),'  ','') ?>-->
        </div>
        <div class="comment-body">
        	<?php if ($comment->comment_approved == '0') : ?><em class="moderation"><?php _e('Din kommentar venter på godkendelse - bare rolig, vi skynder os.') ?></em><?php endif; ?>
        	<?php comment_text() ?>
        </div>
        <div class="reply">
        	<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
<?php
}

//EOF
