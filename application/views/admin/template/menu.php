
    <body>
        <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="<?= base_url(); ?>/administracion">
                      <img width="90px" src="<?= base_url(); ?>pagina/images/tienda/logos/intsu_logo.jpg" />
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administracion <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Usuarios</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Caregorias</a></li>
                      <li><a href="#">Sub Categorias</a></li>
                      <li><a href="<?= base_url(); ?>productos">Productos</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Banners</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Pie de Pagina</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Clientes</a></li>
                      <li><a href="#">Cotizaciones</a></li>
                    </ul>
                  </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->nomUsr; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= base_url(); ?>administracion/salir">Salir</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
