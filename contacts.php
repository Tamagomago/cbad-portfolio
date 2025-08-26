<?php
  include __DIR__ . '/includes/titles.php';
  $Page = 'contact';
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
        class="design-surface d-flex flex-column align-items-center justify-content-center position-relative w-100 p-3 p-md-4 p-lg-5">
        <div class="index-overlay position-absolute"></div>
        <div class="d-flex flex-column flex-sm-row align-items-center gap-3 gap-md-4 gap-lg-5 w-50 stagger">
          <p class="header-text">Have a project in mind? Let’s talk — reach out <a
              href="mailto:tamayoraeanchrissean@gmail.com" class="txt-muted email-link">via email.</a></p>
        </div>
        
        <!-- Social links row -->
        <div class="w-50 mt-4 d-flex flex-row align-items-center justify-content-center gap-4 icons stagger">
          <a href="https://github.com/tamagomago" target="_blank" rel="noopener">
            <i class="bi bi-github fs-3"></i>
          </a>
          <a href="mailto:tamayoraeanchrissean@gmail.com">
            <i class="bi bi-envelope-fill fs-3"></i>
          </a>
          <a href="https://www.facebook.com/raeanchrissean.tamayo.7" target="_blank" rel="noopener">
            <i class="bi bi-facebook fs-3"></i>
          </a>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include __DIR__ . '/includes/footer.php'?>