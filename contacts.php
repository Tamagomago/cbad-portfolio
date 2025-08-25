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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>
</html>