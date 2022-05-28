<?php 

    get_header();
    ?><h2 class="page-title"><?php echo get_the_title(); ?></h2>
    <?php
    the_content();
    get_footer();

?>