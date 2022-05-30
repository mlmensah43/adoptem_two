<?php get_header(); ?>
    <div class="px-4 py-5 my-5 text-center page-banner">
        <!-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"> </p>
        </div>
    </div>

    <div class="container py-5">
    <?php the_content(); ?>
    </div>

 <?php
    get_footer();
?>