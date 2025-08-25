<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Projects | Raean.dev</title>
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
<div class="container-fluid g-0 p-0 h-100 d-flex align-items-center justify-content-center">
  <!-- sidebar (3 cols), main content (9 cols) -->
  <div class="row g-0 w-100">
    <aside class="col-12 col-md-3 g-0 p-0 mb-md-0">
      <?php include __DIR__ . '/menu.php'; ?>
    </aside>
    <main class="col-12 col-md-9 g-0 px-3 p-md-5  h-md-100 main-pane" id="main-content">
      <!-- header -->
      <div class="container-fluid g-0 px-3 px-md-5 py-4">
        <div
          class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 stagger">
          <div class="text-center text-md-start">
            <h1 class="header-text">My Projects</h1>
            <p class="txt-muted mt-3 section-description">
              A collection of web and software projects demonstrating my work.
            </p>
          </div>
          <div class="d-flex  w-sm-auto">
            <a
              href="https://www.github.com/Tamagomago"
              target="_blank"
              rel="noopener"
              class="btn btn-outline-light w-100 w-sm-auto d-flex align-items-center justify-content-center gap-2 py-2 px-3"
            >
              All Projects
              <img src="assets/icons/arrow-right.svg" alt="arrow right" class="img-fluid btn-icon">
            </a>
          </div>
        </div>
      </div>
      
      <!-- projects grid -->
      <div class="container-fluid g-0 px-3 px-md-5 pb-5">
        <div class="row row-cols-md-2 row-cols-1 g-4 stagger">
          <!-- Weather App -->
          <div class="col">
            <article class="d-flex flex-column position-relative h-100 p-3 card card-border rounded-3">
              <div class="rounded-2 overflow-hidden mb-3">
                <img src="assets/images/weather-app.png" alt="Weather App preview"
                     class="w-100 h-100 object-fit-cover">
              </div>
              <h3 class="fs-4 mb-3">Weather App</h3>
              <div class="d-flex flex-wrap gap-2">
                <span class="btn btn-outline-muted btn-sm">HTML</span>
                <span class="btn btn-outline-muted btn-sm">CSS</span>
                <span class="btn btn-outline-muted btn-sm">JavaScript</span>
              </div>
              <div class="mt-auto d-flex justify-content-end pt-3">
                <a href="https://weather-app-omega-three-28.vercel.app/" target="_blank" rel="noopener"
                   class="btn btn-outline-light d-inline-flex align-items-center gap-2">
                  <span>Open</span>
                  <img src="assets/icons/arrow-top-right.svg" alt="" class="btn-icon flex-shrink-0" width="20"
                       height="20">
                </a>
              </div>
            </article>
          </div>
          
          <!-- Newton Library -->
          <div class="col">
            <article class="d-flex flex-column position-relative h-100 p-3 card card-border rounded-3">
              <div class="rounded-2 overflow-hidden mb-3">
                <img src="assets/images/newton-library.png" alt="Newton Library preview"
                     class="w-100 h-100 object-fit-cover">
              </div>
              <h3 class="fs-4 mb-3">Newton Library</h3>
              <div class="d-flex flex-wrap gap-2">
                <span class="btn btn-outline-muted btn-sm">Vite</span>
                <span class="btn btn-outline-muted btn-sm">React</span>
                <span class="btn btn-outline-muted btn-sm">shadcn/ui</span>
                <span class="btn btn-outline-muted btn-sm">TanStack Router</span>
                <span class="btn btn-outline-muted btn-sm">TanStack Query</span>
                <span class="btn btn-outline-muted btn-sm">Tailwind</span>
              </div>
              <div class="mt-auto d-flex justify-content-end pt-3">
                <a href="https://newton-library.vercel.app/" target="_blank" rel="noopener"
                   class="btn btn-outline-light d-inline-flex align-items-center gap-2">
                  <span>Open</span>
                  <img src="assets/icons/arrow-top-right.svg" alt="" class="btn-icon flex-shrink-0" width="20"
                       height="20">
                </a>
              </div>
            </article>
          </div>
          
          <!-- Motoki Pomodoro -->
          <div class="col">
            <article class="d-flex flex-column position-relative h-100 p-3 card card-border rounded-3">
              <div class="rounded-2 overflow-hidden mb-3">
                <img src="assets/images/motoki.png" alt="Motoki Pomodoro preview"
                     class="w-100 h-100 object-fit-cover">
              </div>
              <h3 class="fs-4 mb-3">Motoki Pomodoro</h3>
              <div class="d-flex flex-wrap gap-2">
                <span class="btn btn-outline-muted btn-sm">Vite</span>
                <span class="btn btn-outline-muted btn-sm">React</span>
                <span class="btn btn-outline-muted btn-sm">shadcn/ui</span>
                <span class="btn btn-outline-muted btn-sm">Tailwind</span>
              </div>
              <div class="mt-auto d-flex justify-content-end pt-3">
                <a href="https://motoki-pomodoro.vercel.app/" target="_blank" rel="noopener"
                   class="btn btn-outline-light d-inline-flex align-items-center gap-2">
                  <span>Open</span>
                  <img src="assets/icons/arrow-top-right.svg" alt="" class="btn-icon flex-shrink-0" width="20"
                       height="20">
                </a>
              </div>
            </article>
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
