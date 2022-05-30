<?php get_header(); ?>
    <div class="px-4 py-5 my-5 text-center page-banner">
        <!-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Check out our available animals and apply for adoption today. Your new friend is waiting!</p>
            <!-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div> -->
        </div>
    </div>

    <div class="album py-5">
    <div class="container">
    <div class="row">  

    <?php 
      $available_pets = new WP_Query(array(
        'post_type' => 'pets'
      ));
      $col = 0;

      while($available_pets->have_posts()){
        $available_pets->the_post();
        $image = get_field('image');
      ?>
            <div class=" col">
              <div class="card pet-card">
                  <img src="<?php echo $image['url'];?>" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="pet-name"><?php echo get_the_title() ?> <span class="pet-breed text-muted">(<?php the_field('breed') ?>)<span></p>
                  <span class="this"><span class="pet-age"><?php the_field('gender') ?>, <?php the_field('age') ?></span><button class="info-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-circle-info"></i></button></span>


                  <!-- Button trigger modal -->
                  

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><?php echo get_the_title() ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p><?php echo the_field('description') ?></p>
                          <p>Stop by and visit <?php echo get_the_title() ?> today!</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div>

              <!-- <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div> -->
            </div>
            <?php $col++;
            if($col == 3){ ?>
              </div>
              <div class="row py-5">  
            <?php 
              $col = 0;
              } }?>
      </div>
            </div>
            </div>
 <?php
    get_footer();
?>