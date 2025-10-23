<header class="site-header">
  <div class="header-inner">
    <a class="logo" href="index.php" aria-label="Home">
      <img src="products/Logos-01.jpg" alt="ITD Machines Logo">
    </a>

    <!-- Desktop nav (visible on wide screens) -->
    <nav class="nav-desktop" role="navigation" aria-label="Primary">
      <ul class="nav-menu">
        <li><a href="index.php" class="active" aria-current="page">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        
        <!-- Products Dropdown -->
        <li class="has-submenu">
          <a href="#products">Products</a>
          <ul class="submenu">
            <li><a href="lasercutting.html">Laser Cutting Machines</a></li>
            <li><a href="cncmachine.html">CNC Machining & Turning Centers</a></li>
            <li><a href="injectionmoulding.html">Injection Moulding Machines</a></li>
            <li><a href="laser_accessories.html">Laser Cutting Accessories</a></li>
            <li><a href="mold.html">Mold Bases</a></li>
          </ul>
        </li>
      </ul>
      <a class="btn-get-quote" href="#request-quote">Get Quote</a>
    </nav>

    <!-- Hamburger -->
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-panel">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- Mobile sliding panel + overlay -->
<div class="nav-overlay" data-nav-overlay></div>
<aside id="mobile-panel" class="mobile-panel" aria-hidden="true">
  <div class="mobile-panel-inner">
    <button class="mobile-close" aria-label="Close menu">&times;</button>

    <nav role="navigation" aria-label="Mobile primary">
      <ul class="nav-menu-vertical">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        
        <!-- Mobile Products with submenu -->
        <li class="has-submenu">
          <button class="submenu-toggle" aria-expanded="false">Products</button>
          <ul class="mobile-submenu">
            <li><a href="lasercutting.html">Laser Cutting Machines</a></li>
            <li><a href="cncmachine.html">CNC Machining & Turning Centers</a></li>
            <li><a href="injectionmoulding.html">Injection Moulding Machines</a></li>
            <li><a href="laser_accessories.html">Laser Cutting Accessories</a></li>
            <li><a href="mold.html">Mold Bases</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <a class="btn-get-quote mobile-cta" href="#request-quote">Get Quote</a>
  </div>
</aside>