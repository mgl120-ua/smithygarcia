<!doctype html>
<html lang="es">

<head>
    <link rel="stylesheet" href="/css/estilos-layout.css">
</head>

<body>
  <nav class="navbar" >
    <div class="logo-container">
      <ul class="nav-menu-left">
          <li class="nav-item">
            <a class="nav-link" href="/inspirate">INSPIRATE </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact" >CONTACTANOS</a>
          </li>
      </ul>

      <a href="/" class="logo" ><img src="img/logo.png" loading="lazy" width="280" alt=""></a>

      <ul class="nav-menu-right">
          <li class="nav-item">
            <a class="nav-link" href="/cart">CARRITO </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login" >CUENTA</a>
          </li>
      </ul>
    </div>
  </nav>

  @yield('content') 
</body>

<footer>
  <div class="footer-logo">
    <a href="/" class="logo" ><img src="img/logo.png" loading="lazy" width="280" alt=""></a>
    <div class="social-container">
      <div class="social-item">
        <a href="/" class="" ><img src="img/facebook.png" loading="lazy" width="280" alt=""></a>
      </div>
      <div class="social-item">
        <a href="/" class="" ><img src="img/instagram.png" loading="lazy" width="280" alt=""></a>
      </div>      
      <div class="social-item">
        <a href="/" class="" ><img src="img/tiktok.png" loading="lazy" width="280" alt=""></a>
      </div>
    </div>
    
  </div>

  <div class="footer-tienda">
    <h3 class="footer-header">Tienda</h3>
    <a href="/paneles-acusticos"><p class="text">Panel Acustico Decorativo</p></a>
    <a href="/jv-sintetico"><p class="text">Jardin Vertical Sintetico</p></a>
    <a href="/jv-natural"><p class="text">Jardin Vertical Natural</p></a>
  </div>

  <div class="footer-ayuda">
    <h3 class="footer-header">Ayuda</h3>
    <p class="text">info@smithygarcia.com</p>
    <a href="/contact"><p class="text">Contactanos</p></a>
  </div>
</footer>

</html>