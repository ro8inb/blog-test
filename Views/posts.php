<?php

foreach ($posts as $post) { ?>
    <a href="?p=post/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
<?php }