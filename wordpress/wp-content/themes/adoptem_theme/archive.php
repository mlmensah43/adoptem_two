<?php get_header();?>
 <div class="nav-scroller py-1 mb-2 blog-categories">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Events</a>
      <a class="p-2 link-secondary" href="#">Info</a>
      <a class="p-2 link-secondary" href="#">News</a>
      <a class="p-2 link-secondary" href="#">Stories</a>
      <a class="p-2 link-secondary" href="#">Tips</a>
      <a class="p-2 link-secondary" href="#">Wildlife</a>
    </nav>
  </div>
</div>

<div><?php the_archive_title(); ?></div>

 <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <a class="nav-link" href="<?php echo site_url('/available-pets') ?>"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 hero-button">Read More</button></a>
        <hr>