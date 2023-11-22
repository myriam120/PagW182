  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Librería Virtual</h6>
          
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Fecha</h6> <p><?php
            $fechaActual = date('d-m-Y'); // Formato: Año-Mes-Día
            echo "La fecha actual es: " . $fechaActual;
            ?>
            </p>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 Todos los derechos reservados.</p>
        </div>

      </div>
    </div>
</footer>