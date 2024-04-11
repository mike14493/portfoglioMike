<nav class="navbar navbar-expand-lg customNav">
  <div class="container-fluid">
      <a class="navbar-brand navLogo" href="/">< M/C ></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ">
          <li class="nav-item">
              <!-- Imagen para la versión de escritorio -->
              <a class="nav-link active" aria-current="page" href="/">
                  <img class="desktop-image" src="/casa-desktop.jpg" alt="">
                  <!-- Imagen para la versión móvil -->
                  {{-- <img class="mobile-image" src="/casa-mobile.jpg" alt=""> --}}
              </a>
          </li>
          <li class="nav-item">
              <!-- Imagen para la versión de escritorio -->
              <a class="nav-link" id="returnLink" onclick="history.back(); return false;" href="#">
                  <img class="desktop-image" src="/return-desktop.jpg" alt="">
                  <!-- Imagen para la versión móvil -->
                  <img class="mobile-image" src="/return-mobile.jpg" alt="">
              </a>
          </li>
      </ul>
      <div id="reloj"></div>
  </div>
</nav>