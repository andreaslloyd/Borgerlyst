<?php

?><div class="col1"><?php

$borgerlyst = array();
while (have_posts()) {
  the_post();
  include('box.php');
  $borgerlyst[] = $post->ID;
  if (sizeof($borgerlyst)==3)
    break;
}

?></div><div class="col2"><?php

$random = get_posts('numberposts=5&orderby=rand');
foreach($random as $post) {
  setup_postdata($post);
  if (in_array($post->ID, $borgerlyst))
    continue;
  include('box.php');
  $borgerlyst[] = $post->ID;
  if (sizeof($borgerlyst)==5)
    break;
}

?></div><?php

// EOF
