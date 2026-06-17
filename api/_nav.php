<?php $current_page = $current_page ?? ''; ?>
<style>
.site-nav{position:fixed;top:0;left:0;right:0;height:68px;display:flex;align-items:center;gap:40px;padding:0 32px;z-index:100;background:rgba(238,240,250,0.85);backdrop-filter:blur(12px);border-bottom:1px solid rgba(99,102,241,0.08)}
.site-nav .nav-logo{text-decoration:none;flex-shrink:0}
.site-nav .nav-logo img{height:40px;width:auto;opacity:0.92}
.site-nav .nav-links{display:flex;gap:28px;align-items:center}
.site-nav .nav-links a{font-size:13px;font-weight:500;color:#475569;text-decoration:none;transition:color 0.2s;cursor:default}
.site-nav .nav-links a[href]{cursor:pointer}
.site-nav .nav-links a[href]:hover{color:#4f46e5}
.site-nav .nav-links a.active{color:#4f46e5;font-weight:600}
.nav-ham{display:none;position:fixed;top:14px;right:16px;z-index:201;width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,0.92);backdrop-filter:blur(12px);border:1px solid rgba(99,102,241,0.15);flex-direction:column;align-items:center;justify-content:center;gap:5px;cursor:pointer;box-shadow:0 2px 12px rgba(15,23,42,0.1)}
.nav-ham span{display:block;width:18px;height:2px;background:#475569;border-radius:2px;transition:all 0.3s}
.nav-ham.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.nav-ham.open span:nth-child(2){opacity:0}
.nav-ham.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.nav-mob{position:fixed;top:0;right:-100%;width:280px;height:100vh;background:#fff;z-index:200;box-shadow:-4px 0 40px rgba(15,23,42,0.15);transition:right 0.35s cubic-bezier(0.4,0,0.2,1);padding:80px 32px 40px;display:flex;flex-direction:column;gap:4px}
.nav-mob.open{right:0}
.nav-mob a{font-size:16px;font-weight:500;color:#475569;text-decoration:none;padding:14px 0;border-bottom:1px solid rgba(226,232,240,0.6);display:block;transition:color 0.2s}
.nav-mob a:hover{color:#4f46e5}
.nav-mob a.active{color:#4f46e5;font-weight:600}
.nav-ov{position:fixed;inset:0;background:rgba(15,23,42,0.3);z-index:199;opacity:0;pointer-events:none;transition:opacity 0.3s}
.nav-ov.open{opacity:1;pointer-events:auto}
@media(max-width:768px){.site-nav .nav-links{display:none}.nav-ham{display:flex}}
</style>

<div class="nav-ham" id="navHam" onclick="toggleNav()"><span></span><span></span><span></span></div>
<div class="nav-ov" id="navOv" onclick="toggleNav()"></div>
<div class="nav-mob" id="navMob">
  <a href="/digital" <?php echo $current_page==='digital'?'class="active"':'';?>>Digital</a>
  <a href="/ai" <?php echo $current_page==='ai'?'class="active"':'';?>>AI</a>
  <a href="/data" <?php echo $current_page==='data'?'class="active"':'';?>>Data</a>
  <a href="/case-studies" <?php echo $current_page==='cases'?'class="active"':'';?>>Case Studies</a>
  <a href="/contact" <?php echo $current_page==='contact'?'class="active"':'';?>>Contact</a>
</div>

<nav class="site-nav">
  <a href="/" class="nav-logo"><img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne"></a>
  <div class="nav-links">
    <a href="/digital" <?php echo $current_page==='digital'?'class="active"':'';?>>Digital</a>
    <a href="/ai" <?php echo $current_page==='ai'?'class="active"':'';?>>AI</a>
    <a href="/data" <?php echo $current_page==='data'?'class="active"':'';?>>Data</a>
    <a href="/case-studies" <?php echo $current_page==='cases'?'class="active"':'';?>>Case Studies</a>
    <a href="/contact" <?php echo $current_page==='contact'?'class="active"':'';?>>Contact</a>
  </div>
</nav>

<script>
function toggleNav(){document.getElementById('navHam').classList.toggle('open');document.getElementById('navMob').classList.toggle('open');document.getElementById('navOv').classList.toggle('open')}
</script>
