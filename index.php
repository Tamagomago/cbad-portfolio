<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Raean.dev</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>
</html>