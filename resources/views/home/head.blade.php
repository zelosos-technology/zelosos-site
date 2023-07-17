  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/zt-logo.png" alt="">
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#features">treinamentos</a></li>
          <li><a href="#portfolio">Portfólio</a></li>
          <li><a href="#team">Equipa</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li class="dropdown has-dropdown"><a href="#"><span>O que fazemos?</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Cabeamento estruturado</a></li>
              <li><a href="#">Design Gráfico</a></li>
              <li><a href="#">Telefonia VoIP</a></li>
              <li><a href="#">Redes de Computadores</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="index.html#about">Contacte-nos</a>

    </div>
  </header><!-- End Header -->
