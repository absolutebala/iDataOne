<?php
$current_page = $current_page ?? '';
?>
<nav class="site-nav">
  <a href="/" class="nav-logo"><img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne"></a>
  <div class="nav-links">
    <a href="/digital" <?php echo $current_page === 'digital' ? 'class="active"' : ''; ?>>Digital</a>
    <a <?php echo $current_page === 'ai' ? 'class="active"' : ''; ?>>AI</a>
    <a <?php echo $current_page === 'data' ? 'class="active"' : ''; ?>>Data</a>
    <a <?php echo $current_page === 'cases' ? 'class="active"' : ''; ?>>Case Studies</a>
    <a href="/contact" <?php echo $current_page === 'contact' ? 'class="active"' : ''; ?>>Contact</a>
  </div>
</nav>
