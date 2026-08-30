<?php $current_page = $current_page ?? ''; ?>
<style>
@view-transition{navigation:auto}
.site-nav{position:fixed;top:0;left:0;right:0;height:68px;display:flex;align-items:center;gap:40px;padding:0 32px;z-index:100;background:rgba(10,15,30,0.95);backdrop-filter:blur(12px);border-bottom:0.5px solid rgba(0,212,255,0.12)}
.site-nav .nav-logo{text-decoration:none;flex-shrink:0;min-width:160px}
.site-nav .nav-logo img{height:32px;width:auto;opacity:1}
.site-nav .nav-links{display:flex;gap:28px;align-items:center}
.site-nav .nav-links a{font-size:13px;font-weight:500;color:rgba(255,255,255,0.82);text-decoration:none;transition:color 0.2s;cursor:default}
.site-nav .nav-links a[href]{cursor:pointer}
.site-nav .nav-links a[href]:hover{color:#00d4ff}
.site-nav .nav-links a[href]:active{transform:scale(0.95);opacity:0.7}
.site-nav .nav-links a.active{color:#00d4ff;font-weight:600}
.nav-whatsapp{margin-left:auto;flex-shrink:0;display:flex;align-items:center;gap:10px;padding:6px 18px 6px 8px;border-radius:999px;background:linear-gradient(135deg,rgba(0,212,255,0.08),rgba(0,212,255,0.02));border:1px solid rgba(0,212,255,0.22);text-decoration:none;transition:border-color 0.25s,background 0.25s,transform 0.25s;cursor:pointer}
.nav-whatsapp:hover{border-color:rgba(0,212,255,0.45);background:rgba(0,212,255,0.1);transform:translateY(-1px)}
.nav-whatsapp-icon{width:30px;height:30px;border-radius:50%;background:linear-gradient(135deg,#2fe27a,#0d9c53);display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:0 2px 10px rgba(37,211,102,0.35)}
.nav-whatsapp-icon svg{width:16px;height:16px;fill:#fff}
.nav-whatsapp-text{display:flex;flex-direction:column;line-height:1.2}
.nav-whatsapp-label{font-size:9px;font-weight:700;letter-spacing:1.2px;text-transform:uppercase;color:rgba(255,255,255,0.4)}
.nav-whatsapp-number{font-size:13px;font-weight:700;color:#fff;letter-spacing:0.2px;white-space:nowrap}
.nav-mob-whatsapp{display:flex;align-items:center;gap:12px;padding:14px 16px;border-radius:14px;background:linear-gradient(135deg,rgba(37,211,102,0.08),rgba(13,156,83,0.04));border:1px solid rgba(37,211,102,0.25);text-decoration:none;margin-top:16px}
.nav-mob-whatsapp .nav-whatsapp-icon{width:36px;height:36px}
.nav-mob-whatsapp .nav-whatsapp-icon svg{width:19px;height:19px}
.nav-mob-whatsapp .nav-whatsapp-label{color:#64748b}
.nav-mob-whatsapp .nav-whatsapp-number{color:#0f172a;font-size:14px}
@media(max-width:768px){
  .nav-whatsapp{position:fixed;top:14px;right:64px;z-index:201;padding:0;width:40px;height:40px;justify-content:center;border-radius:10px;background:rgba(10,15,30,0.95);backdrop-filter:blur(12px);border:1px solid rgba(37,211,102,0.25)}
  .nav-whatsapp .nav-whatsapp-icon{box-shadow:none}
  .nav-whatsapp-text{display:none}
}
.nav-ham{display:none;position:fixed;top:14px;right:16px;z-index:201;width:40px;height:40px;border-radius:10px;background:rgba(10,15,30,0.95);backdrop-filter:blur(12px);border:1px solid rgba(99,102,241,0.15);flex-direction:column;align-items:center;justify-content:center;gap:5px;cursor:pointer;box-shadow:0 2px 12px rgba(15,23,42,0.1)}
.nav-ham span{display:block;width:18px;height:2px;background:#475569;border-radius:2px;transition:all 0.3s}
.nav-ham.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.nav-ham.open span:nth-child(2){opacity:0}
.nav-ham.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.nav-mob{position:fixed;top:0;right:-100%;width:280px;height:100vh;background:#fff;z-index:200;box-shadow:-4px 0 40px rgba(15,23,42,0.15);transition:right 0.35s cubic-bezier(0.4,0,0.2,1);padding:80px 32px 40px;display:flex;flex-direction:column;gap:4px}
.nav-mob.open{right:0}
.nav-mob a{font-size:16px;font-weight:500;color:#475569;text-decoration:none;padding:14px 0;border-bottom:1px solid rgba(226,232,240,0.6);display:block;transition:color 0.2s}
.nav-mob a:hover{color:#00d4ff}
.nav-mob a.active{color:#00d4ff;font-weight:600}
.nav-ov{position:fixed;inset:0;background:rgba(15,23,42,0.3);z-index:199;opacity:0;pointer-events:none;transition:opacity 0.3s}
.nav-ov.open{opacity:1;pointer-events:auto}
@media(max-width:768px){.site-nav .nav-links{display:none}.nav-ham{display:flex}}
.nav-progress{position:fixed;top:0;left:0;height:3px;width:0%;background:linear-gradient(90deg,#4f46e5,#7c3aed);z-index:300;transition:width 0.25s ease-out;box-shadow:0 0 8px rgba(99,102,241,0.6)}
.nav-progress.active{width:75%}
</style>

<div class="nav-progress" id="navProgress"></div>

<div class="nav-ham" id="navHam" onclick="toggleNav()"><span></span><span></span><span></span></div>
<div class="nav-ov" id="navOv" onclick="toggleNav()"></div>
<div class="nav-mob" id="navMob">
  <a href="/digital" <?php echo $current_page==='digital'?'class="active"':'';?>>Digital</a>
  <a href="/ai" <?php echo $current_page==='ai'?'class="active"':'';?>>AI</a>
  <a href="/data" <?php echo $current_page==='data'?'class="active"':'';?>>Data</a>
  <a href="/products" <?php echo $current_page==='products'?'class="active"':'';?>>Products</a>
  <a href="/case-studies" <?php echo $current_page==='cases'?'class="active"':'';?>>Case Studies</a>
  <a href="/about" <?php echo $current_page==='about'?'class="active"':''?>>About</a>
  <a href="/contact" <?php echo $current_page==='contact'?'class="active"':'';?>>Contact</a>
  <a href="https://wa.me/916385155341" target="_blank" rel="noopener" class="nav-mob-whatsapp">
    <span class="nav-whatsapp-icon"><svg viewBox="0 0 24 24"><path d="M17.6 6.32A7.85 7.85 0 0 0 12.05 4c-4.34 0-7.87 3.53-7.87 7.87 0 1.39.36 2.74 1.05 3.93L4 20l4.3-1.13c1.15.63 2.45.96 3.75.96h0c4.34 0 7.87-3.53 7.87-7.87 0-2.1-.82-4.08-2.32-5.64zM12.05 18.4h0c-1.15 0-2.28-.31-3.27-.89l-.23-.14-2.44.64.65-2.38-.15-.24a6.4 6.4 0 0 1-.98-3.4c0-3.54 2.88-6.42 6.42-6.42a6.38 6.38 0 0 1 6.42 6.42c0 3.54-2.88 6.41-6.42 6.41zm3.52-4.8c-.19-.1-1.14-.56-1.32-.62-.18-.07-.31-.1-.44.1-.13.19-.5.62-.62.75-.11.13-.23.14-.42.05-.19-.1-.82-.3-1.56-.96-.58-.51-.97-1.15-1.08-1.34-.11-.19-.01-.3.09-.39.09-.09.19-.23.29-.35.1-.12.13-.19.19-.32.06-.13.03-.24-.02-.34-.05-.1-.44-1.06-.6-1.45-.16-.38-.32-.33-.44-.34h-.38c-.13 0-.34.05-.52.24-.18.19-.68.66-.68 1.62 0 .95.7 1.87.79 2 .1.13 1.37 2.09 3.32 2.93.46.2.83.32 1.11.41.47.15.89.13 1.23.08.37-.06 1.14-.47 1.3-.92.16-.45.16-.83.11-.92-.05-.09-.18-.14-.37-.24z"/></svg></span>
    <span class="nav-whatsapp-text">
      <span class="nav-whatsapp-label">WhatsApp Us</span>
      <span class="nav-whatsapp-number">+91 6385 155 341</span>
    </span>
  </a>
</div>

<nav class="site-nav">
  <a href="/" class="nav-logo"><img src="/assets/images/iDataOneLogoFinal.png" alt="iDataOne"></a>
  <div class="nav-links">
    <a href="/digital" <?php echo $current_page==='digital'?'class="active"':'';?>>Digital</a>
    <a href="/ai" <?php echo $current_page==='ai'?'class="active"':'';?>>AI</a>
    <a href="/data" <?php echo $current_page==='data'?'class="active"':'';?>>Data</a>
    <a href="/products" <?php echo $current_page==='products'?'class="active"':'';?>>Products</a>
    <a href="/case-studies" <?php echo $current_page==='cases'?'class="active"':'';?>>Case Studies</a>
    <a href="/about" <?php echo $current_page==='about'?'class="active"':''?>>About</a>
    <a href="/contact" <?php echo $current_page==='contact'?'class="active"':'';?>>Contact</a>
  </div>
  <a href="https://wa.me/916385155341" target="_blank" rel="noopener" class="nav-whatsapp">
    <span class="nav-whatsapp-icon"><svg viewBox="0 0 24 24"><path d="M17.6 6.32A7.85 7.85 0 0 0 12.05 4c-4.34 0-7.87 3.53-7.87 7.87 0 1.39.36 2.74 1.05 3.93L4 20l4.3-1.13c1.15.63 2.45.96 3.75.96h0c4.34 0 7.87-3.53 7.87-7.87 0-2.1-.82-4.08-2.32-5.64zM12.05 18.4h0c-1.15 0-2.28-.31-3.27-.89l-.23-.14-2.44.64.65-2.38-.15-.24a6.4 6.4 0 0 1-.98-3.4c0-3.54 2.88-6.42 6.42-6.42a6.38 6.38 0 0 1 6.42 6.42c0 3.54-2.88 6.41-6.42 6.41zm3.52-4.8c-.19-.1-1.14-.56-1.32-.62-.18-.07-.31-.1-.44.1-.13.19-.5.62-.62.75-.11.13-.23.14-.42.05-.19-.1-.82-.3-1.56-.96-.58-.51-.97-1.15-1.08-1.34-.11-.19-.01-.3.09-.39.09-.09.19-.23.29-.35.1-.12.13-.19.19-.32.06-.13.03-.24-.02-.34-.05-.1-.44-1.06-.6-1.45-.16-.38-.32-.33-.44-.34h-.38c-.13 0-.34.05-.52.24-.18.19-.68.66-.68 1.62 0 .95.7 1.87.79 2 .1.13 1.37 2.09 3.32 2.93.46.2.83.32 1.11.41.47.15.89.13 1.23.08.37-.06 1.14-.47 1.3-.92.16-.45.16-.83.11-.92-.05-.09-.18-.14-.37-.24z"/></svg></span>
    <span class="nav-whatsapp-text">
      <span class="nav-whatsapp-label">WhatsApp Us</span>
      <span class="nav-whatsapp-number">+91 6385 155 341</span>
    </span>
  </a>
</nav>

<script>
function toggleNav(){document.getElementById('navHam').classList.toggle('open');document.getElementById('navMob').classList.toggle('open');document.getElementById('navOv').classList.toggle('open')}

(function(){
  var navLinks = document.querySelectorAll('.site-nav .nav-links a[href], .nav-mob a[href]');
  var prefetched = {};

  function prefetch(url){
    if(prefetched[url]) return;
    prefetched[url] = true;
    var link = document.createElement('link');
    link.rel = 'prefetch';
    link.href = url;
    document.head.appendChild(link);
  }

  navLinks.forEach(function(a){
    a.addEventListener('mouseenter', function(){
      prefetch(a.href);
    });
    a.addEventListener('click', function(){
      if(a.pathname === window.location.pathname) return;
      var bar = document.getElementById('navProgress');
      bar.classList.add('active');
    });
  });
})();
</script>
