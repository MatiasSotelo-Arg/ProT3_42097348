<?php 
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<div style="background-color:#cdaafe!important">
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-2 px-sm-5 mx-sm-4" style="background-color:#cdaafe!important">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="principal">
        <img src="assets\img\logo-tridente-joyas.jpg" alt="logo tridente joyas" width="90" height="90" class="d-inline-block align-text-top border border-white rounded-circle">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php if(session()->perfil_id == 1): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
          <a href="">Admin: <?php echo session('nombre');?></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="principal">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="quienes_somos">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="acerca">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('/logout');?>">Cerrar sesión</a>
            </li>
          </ul>
        </div>
      <?php elseif(session()->perfil_id == 2): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
          <a href="">Cliente: <?php echo session('nombre');?></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="principal">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="quienes_somos">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="acerca">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('/logout');?>">Cerrar sesión</a>
            </li>
          </ul>
        </div>
      <?php else: ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="principal">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="quienes_somos">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="acerca">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="login">Iniciar Sesión</a>
            </li>
          </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      <?php endif; ?>
    </div>
  </nav>
</div>
