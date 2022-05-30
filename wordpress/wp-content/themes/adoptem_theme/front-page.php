<?php get_header();?>
    <div class="container col-xxl-8">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-8">
        <img src="<?php echo get_theme_file_uri('assets/images/Hero-Dogs.svg')?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-4">
        <h1 class="display-5 fw-bold lh-1 mb-3 hero-title">The best breeds are the ones in need.</h1>
        <p class="lead">Adopting an abandoned animal is one of the best ways to change a life. Help change a life today and adopt.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a class="nav-link" href="<?php echo site_url('/pets') ?>"><button type="button" title="view our available pets" class="btn btn-primary btn-lg px-4 me-md-2 hero-button">Find a pet</button></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3">Our Resources</h2>
        <p class="lead">Learn more about animal welfare issues in our community and stay up-to-date on the work we’re doing.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a class="nav-link" href="<?php echo site_url('/blog') ?>"><button type="button" title="visit our blog" class="btn btn-primary btn-lg px-4 me-md-2 hero-button">Learn More</button></a>
        <a class="nav-link" href="#newsletter-section"><button type="button" title="subscribe to our newsletter" class="btn btn-primary btn-lg px-4 me-md-2 hero-button">Newsletter</button></a>    
        </div>
      </div>
      <div class="col-10 col-sm-8 col-lg-6">
      <img src="<?php echo get_theme_file_uri('assets/images/homepage-2.svg')?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
 
    </div>
  </div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="<?php echo get_theme_file_uri('assets/images/homepage-1.svg')?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3">Your new best friend is waiting! </h2>
        <p class="lead">Check out our available animals and apply for adoption today.</p>
    </div>
    </div>
  </div>

<?php get_footer(); ?>