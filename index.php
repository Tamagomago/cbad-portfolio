<?php
  include __DIR__ . '/includes/titles.php';
  $Page = 'index';
  $PageTitle = $PageTitles[$Page];
  include __DIR__ . '/includes/header.php';
 ?>
<div class="container-fluid g-0 p-0 min-vh-100 d-flex align-items-center justify-content-center">
  <!-- sidebar (3 cols), main content (9 cols) -->
  <div class="row g-0 w-100">
    <aside class="col-12 col-md-3 mb-md-0 g-0 p-0">
      <?php include __DIR__ . '/menu.php'; ?>
    </aside>
    <main class="col-12 col-md-9 d-flex align-items-center justify-content-center main-pane g-0 p-0">
      <div
        class="design-surface d-flex align-items-center justify-content-center position-relative w-100 p-3 p-md-4 p-lg-5">
        <div class="index-overlay position-absolute"></div>
        <div class="d-flex flex-column flex-sm-row align-items-center gap-3 gap-md-4 gap-lg-5">
          <!-- Profile -->
          <div class="profile-wrapper mx-auto mx-sm-0 flex-shrink-0 fade-in">
            <img src="assets/images/profile.png" alt="profile" class="img-fluid">
          </div>
          
          <!-- Content -->
          <div class="content-box d-flex flex-column justify-content-center gap-1
              text-center text-sm-start align-items-center align-items-sm-start stagger">
            
            <div class="d-flex flex-column align-items-center align-items-sm-start">
              <h1 class="fs-2">Raean Chrissean R. Tamayo</h1>
              <h1 class="fs-4 txt-muted">Fullstack Developer</h1>
            </div>
            
            <div class="d-flex align-items-center justify-content-center justify-content-sm-start gap-2 mb-3">
              <div class="loc-img d-flex items-center justify-center">
                <img src="assets/icons/loc.svg" alt="location" class="img-fluid">
              </div>
              <a href="https://share.google/WoNZNqpzuqZwmlUbf" target="_blank" class="txt-muted fs-5 loc-link">
                Philippines
              </a>
            </div>
            
            <div class="d-flex w-100 w-sm-auto">
              <a href="projects.php"
                 class="btn btn-outline-light w-100 w-sm-auto d-flex align-items-center justify-content-center gap-2">
                See my works
                <img src="assets/icons/arrow-right.svg" alt="arrow right" class="img-fluid btn-icon">
              </a>
            </div>
            
            <div class="about-me mt-4">
              <p class="fs-6 txt-muted">
                I’m a Computer Science student at the University
                of Saint La Salle – Bacolod. I enjoy building clean and user-friendly applications.
              </p>
            </div>
          </div>
        </div>
      
      </div>
    </main>
  </div>
</div>
<?php include __DIR__ . '/includes/footer.php'?>