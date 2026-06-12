<?php
$current_page = $current_page ?? '';
?>
<style>
.site-nav{position:fixed;top:0;left:0;right:0;height:68px;display:flex;align-items:center;gap:40px;padding:0 32px;z-index:100;background:rgba(238,240,250,0.85);backdrop-filter:blur(12px);border-bottom:1px solid rgba(99,102,241,0.08)}
.site-nav .nav-logo{text-decoration:none;flex-shrink:0}
.site-nav .nav-logo img{height:40px;width:auto;opacity:0.92}
.site-nav .nav-links{display:flex;gap:28px;align-items:center}
.site-nav .nav-links a{font-size:13px;font-weight:500;color:#475569;text-decoration:none;transition:color 0.2s;cursor:default}
.site-nav .nav-links a[href]{cursor:pointer}
.site-nav .nav-links a[href]:hover{color:#4f46e5}
.site-nav .nav-links a.active{color:#4f46e5;font-weight:600}
@media(max-width:768px){.site-nav .nav-links{display:none}}
</style>
<nav class="site-nav">
  <a href="/" class="nav-logo"><img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne"></a>
  <div class="nav-links">
    <a href="/digital" <?php echo $current_page==='digital'?'class="active"':''; ?>>Digital</a>
    <a href="/ai" <?php echo $current_page==='ai'?'class="active"':''; ?>>AI</a>
    <a href="/data" <?php echo $current_page==='data'?'class="active"':''; ?>>Data</a>
    <a>Case Studies</a>
    <a href="/contact" <?php echo $current_page==='contact'?'class="active"':''; ?>>Contact</a>
  </div>
</nav>
