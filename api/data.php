<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../includes/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Intelligence & Analytics Services | iDataOne — Build. Transform. Scale.</title>
<meta name="description" content="Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.">
<meta name="keywords" content="data intelligence, business intelligence, data analytics, real-time dashboards, BI platform, predictive analytics, unified data, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="Data Intelligence & Analytics Services | iDataOne — Build. Transform. Scale.">
<meta property="og:description" content="Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.">
<meta property="og:url" content="https://idataone.com/data">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Data Intelligence & Analytics Services | iDataOne — Build. Transform. Scale.">
<meta name="twitter:description" content="Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Data Intelligence & Analytics",
  "provider": {"@id": "https://idataone.com/#organization"},
  "description": "Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.",
  "serviceType": "Data Intelligence",
  "areaServed": "Worldwide",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Data Services",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Unified Data Layer"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Business Intelligence Dashboards"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Predictive Analytics"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "BI Platform Development"}}
    ]
  }
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/data">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/../includes/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden}
/* Nav via _nav.php */
.banner{min-height:100vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:linear-gradient(145deg,#faf4e8 0%,#f5ead4 35%,#ede0c4 60%,#f2ead8 100%)}
.banner::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 15% 50%,rgba(180,120,0,0.08),transparent 55%),radial-gradient(ellipse at 85% 20%,rgba(0,160,150,0.06),transparent 50%);pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#92400e;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#1c1008;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#b45309,#d97706);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:#57534e;line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#b45309;color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1.5px solid rgba(180,83,9,0.35);color:#b45309;font-size:14px;font-weight:600;text-decoration:none;background:rgba(180,83,9,0.05);transition:all 0.2s}
.btn-secondary:hover{background:rgba(180,83,9,0.1);border-color:#b45309;transform:translateY(-1px)}
.banner-illus{display:flex;align-items:center;justify-content:center}
.section{padding:80px 32px}
.section-inner{max-width:1140px;margin:0 auto}
.section-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#d97706;margin-bottom:12px;text-align:center}
.section-title{font-size:clamp(28px,3vw,40px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;text-align:center;margin-bottom:12px}
.section-sub{font-size:16px;color:#64748b;text-align:center;line-height:1.7;max-width:560px;margin:0 auto 48px}
.stories{background:#fff}
.stories-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.story-card{border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px;display:grid;grid-template-columns:1fr 180px;gap:24px;align-items:start;transition:box-shadow 0.3s}
.story-card:hover{box-shadow:0 16px 48px rgba(217,119,6,0.08)}
.story-tag{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#d97706;margin-bottom:12px}
.story-title{font-size:20px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;line-height:1.3;margin-bottom:12px}
.story-desc{font-size:13px;color:#64748b;line-height:1.7;margin-bottom:20px}
.story-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#d97706;text-decoration:none}
.story-link svg{width:13px;height:13px;fill:none;stroke:#d97706;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.story-visual{background:linear-gradient(135deg,#fffbeb,#fef3c7);border-radius:12px;display:flex;align-items:center;justify-content:center;min-height:140px}
.process{background:linear-gradient(160deg,#0d1f35 0%,#0a2540 50%,#0d1f35 100%);position:relative;overflow:hidden}
.process .section-title{color:#f1f5f9}
.proc-track{margin-top:48px;position:relative}
.proc-line{position:absolute;top:36px;left:36px;right:36px;height:2px;background:linear-gradient(90deg,rgba(56,189,248,0.3),rgba(167,139,250,0.3),rgba(52,211,153,0.3),rgba(251,146,60,0.3),rgba(244,114,182,0.3));z-index:0}
.proc-steps{display:flex;gap:16px;position:relative;z-index:1}
.proc-step{flex:1;display:flex;flex-direction:column;align-items:center;text-align:center}
.proc-num{font-size:11px;font-weight:700;color:rgba(255,255,255,0.3);letter-spacing:0.08em;margin-bottom:12px}
.proc-dot{width:12px;height:12px;border-radius:50%;background:#1e3a5f;border:2px solid rgba(255,255,255,0.2);margin-bottom:20px;flex-shrink:0}
.proc-step:nth-child(1) .proc-dot{border-color:#38bdf8;box-shadow:0 0 8px rgba(56,189,248,0.4)}
.proc-step:nth-child(2) .proc-dot{border-color:#a78bfa;box-shadow:0 0 8px rgba(167,139,250,0.4)}
.proc-step:nth-child(3) .proc-dot{border-color:#34d399;box-shadow:0 0 8px rgba(52,211,153,0.4)}
.proc-step:nth-child(4) .proc-dot{border-color:#fb923c;box-shadow:0 0 8px rgba(251,146,60,0.4)}
.proc-step:nth-child(5) .proc-dot{border-color:#f472b6;box-shadow:0 0 8px rgba(244,114,182,0.4)}
.proc-body{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:16px;padding:24px 16px;width:100%}
.proc-icon{width:72px;height:72px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.proc-step:nth-child(1) .proc-icon{background:rgba(56,189,248,0.12);border:1px solid rgba(56,189,248,0.3)}
.proc-step:nth-child(2) .proc-icon{background:rgba(167,139,250,0.12);border:1px solid rgba(167,139,250,0.3)}
.proc-step:nth-child(3) .proc-icon{background:rgba(52,211,153,0.12);border:1px solid rgba(52,211,153,0.3)}
.proc-step:nth-child(4) .proc-icon{background:rgba(251,146,60,0.12);border:1px solid rgba(251,146,60,0.3)}
.proc-step:nth-child(5) .proc-icon{background:rgba(244,114,182,0.12);border:1px solid rgba(244,114,182,0.3)}
.proc-icon svg{width:32px;height:32px;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.proc-step:nth-child(1) .proc-icon svg{stroke:#38bdf8}
.proc-step:nth-child(2) .proc-icon svg{stroke:#a78bfa}
.proc-step:nth-child(3) .proc-icon svg{stroke:#34d399}
.proc-step:nth-child(4) .proc-icon svg{stroke:#fb923c}
.proc-step:nth-child(5) .proc-icon svg{stroke:#f472b6}
.proc-title{font-size:14px;font-weight:700;color:#f1f5f9;margin-bottom:8px;line-height:1.3}
.proc-desc{font-size:12px;color:rgba(255,255,255,0.45);line-height:1.65}
.products{background:#f8fafc}
.products-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.product-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;overflow:hidden;transition:box-shadow 0.3s,transform 0.3s}
.product-card:hover{box-shadow:0 20px 48px rgba(217,119,6,0.1);transform:translateY(-4px)}
.product-card-img{height:160px;display:flex;align-items:center;justify-content:center}
.product-card-img.amber{background:linear-gradient(135deg,#fffbeb,#fef3c7)}
.product-card-img.emerald{background:linear-gradient(135deg,#ecfdf5,#d1fae5)}
.product-card-img.violet{background:linear-gradient(135deg,#f5f3ff,#ede9fe)}
.product-card-body{padding:24px}
.product-card-title{font-size:17px;font-weight:700;color:#0f172a;margin-bottom:6px}
.product-card-desc{font-size:13px;color:#64748b;line-height:1.65;margin-bottom:16px}
.product-card-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#d97706;text-decoration:none}
.product-card-link svg{width:13px;height:13px;fill:none;stroke:#d97706;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.cta-section{background:linear-gradient(135deg,#b45309 0%,#d97706 40%,#f59e0b 70%,#fbbf24 100%);padding:80px 32px;text-align:center}
.cta-heading{font-size:clamp(22px,3vw,36px);font-weight:800;letter-spacing:-1px;color:#fff;margin-bottom:12px;line-height:1.2}
.cta-heading em{font-style:normal;color:#fff3c4}
.cta-sub{font-size:15px;color:rgba(255,255,255,0.75);line-height:1.7;max-width:540px;margin:0 auto 36px}
.cta-btns{display:flex;gap:16px;justify-content:center;flex-wrap:wrap}
.btn-cta-primary{display:inline-flex;align-items:center;gap:8px;padding:16px 32px;border-radius:12px;background:#fff;color:#b45309;font-size:15px;font-weight:700;text-decoration:none;white-space:nowrap;transition:opacity 0.2s}
.btn-cta-primary:hover{opacity:0.92}
.btn-cta-secondary{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:rgba(255,255,255,0.75);text-decoration:none;transition:color 0.2s;padding:16px 0}
.btn-cta-secondary:hover{color:#fff}
.btn-cta-secondary svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
@media(max-width:768px){.site-nav .nav-links{display:none}.banner-inner{grid-template-columns:1fr}.banner-illus{display:flex;align-items:center;justify-content:center}.stories-grid{grid-template-columns:1fr}.story-card{grid-template-columns:1fr}.story-visual{display:none}.proc-line{display:none}.proc-steps{flex-direction:column;gap:16px}.products-grid{grid-template-columns:1fr}.cta-btns{flex-direction:column;align-items:center}}
</style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://idataone.com/"},
    {"@type": "ListItem", "position": 2, "name": "Data Intelligence", "item": "https://idataone.com/data"}
  ]
}
</script>
</head>
<body>
<?php include __DIR__ . '/../includes/_gtm_body.php'; ?>

<?php $current_page = 'data'; include __DIR__ . '/../includes/_nav.php'; ?>

<!-- Banner -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <h1 class="banner-h1">Smarter<br>Business Decisions <em>with AI</em></h1>
      <p class="banner-sub">Connect, analyse, and visualise your business data with AI to uncover insights that drive confident decisions and sustainable growth.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Start With Your Data <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#stories" class="btn-secondary">View Case Studies <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <span class="hz-wrap"><img
        src="/assets/images/data-hero-visual.png"
        alt="iDataOne Data Intelligence — Business Intelligence, Real-Time Analytics, Predictive Analytics and Actionable Insights"
        style="width:100%;height:auto;display:block;border-radius:24px;box-shadow:0 24px 64px rgba(180,120,0,0.18),0 8px 24px rgba(0,0,0,0.1);transition:transform 0.4s ease,box-shadow 0.4s ease"
        loading="eager"
        onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this);this.style.transform='translateY(-4px)'"
        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 24px 64px rgba(180,120,0,0.18),0 8px 24px rgba(0,0,0,0.1)'"
      /><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>
  </div>
</section>

<!-- Success Stories -->
<section class="section stories" id="stories">
  <div class="section-inner">
    <div class="section-tag">Success Stories</div>
    <h2 class="section-title">Data Intelligence. Real Clarity.</h2>
    <p class="section-sub">Businesses that unified their data and unlocked real competitive advantage.</p>
    <div class="stories-grid" style="grid-template-columns:1fr;max-width:760px;margin:0 auto">
      <div class="story-card" onclick="location.href='/case-study/risk-dashboard'" style="cursor:pointer">
        <div>
          <div class="story-tag">Risk Analytics</div>
          <div class="story-title">Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company</div>
          <div class="story-desc">We built a real-time risk analytics dashboard with severity matrix visualisation, 12-month trend tracking, department-level breakdowns and automated compliance scoring across 8 risk categories.</div>
          <a href="/case-study/risk-dashboard" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e;align-self:stretch">
          <img src="/assets/images/risk-platform-hero.png" alt="Real-Time Risk Intelligence Dashboard for an enterprise FMCG company" style="width:100%;height:100%;min-height:140px;object-fit:cover;object-position:center center;display:block"/>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process -->
<section class="section process">
  <div class="section-inner">
    <h2 class="section-title">From Idea To Scale</h2>
    <div class="proc-track">
      <div class="proc-line"></div>
      <div class="proc-steps">
        <div class="proc-step">
          <div class="proc-num">01</div>
          <div class="proc-dot"></div>
          <div class="proc-body">
            <div class="proc-icon"><svg viewBox="0 0 24 24"><path d="M9 18h6M10 22h4M12 2a7 7 0 0 1 4 12.9V17H8v-2.1A7 7 0 0 1 12 2z"/></svg></div>
            <div class="proc-title">Tell us your idea</div>
            <div class="proc-desc">Share your vision or business problem. No detailed document needed.</div>
          </div>
        </div>
        <div class="proc-step">
          <div class="proc-num">02</div>
          <div class="proc-dot"></div>
          <div class="proc-body">
            <div class="proc-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
            <div class="proc-title">We turn it into a plan</div>
            <div class="proc-desc">Define scope, architecture, user flows, and an initial feature roadmap.</div>
          </div>
        </div>
        <div class="proc-step">
          <div class="proc-num">03</div>
          <div class="proc-dot"></div>
          <div class="proc-body">
            <div class="proc-icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="6" height="14" rx="1"/><rect x="9" y="3" width="6" height="18" rx="1"/><rect x="16" y="10" width="6" height="11" rx="1"/></svg></div>
            <div class="proc-title">Build MVP Fast</div>
            <div class="proc-desc">Turn the approved plan into a usable, core-featured product quickly.</div>
          </div>
        </div>
        <div class="proc-step">
          <div class="proc-num">04</div>
          <div class="proc-dot"></div>
          <div class="proc-body">
            <div class="proc-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
            <div class="proc-title">Approve &amp; Launch</div>
            <div class="proc-desc">Gather feedback, obtain approval, and release the validated product.</div>
          </div>
        </div>
        <div class="proc-step">
          <div class="proc-num">05</div>
          <div class="proc-dot"></div>
          <div class="proc-body">
            <div class="proc-icon"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
            <div class="proc-title">Evolve</div>
            <div class="proc-desc">Analyze data, gather feedback, and iteratively improve features.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <h2 class="cta-heading">Ready To Turn Your Data Into <em>Intelligence?</em></h2>
  <p class="cta-sub">Whether you need unified data, dashboards, BI or predictive analytics — we can help you get there.</p>
  <div class="cta-btns">
      <a href="/contact" class="btn-cta-primary">Talk To Our Experts <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#b45309" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/contact" class="btn-cta-secondary">Schedule a Consultation <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/../includes/_footer.php'; ?>



<!-- Hover zoom lightbox -->
<div id="hz-overlay" onclick="hzClose()" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0);align-items:center;justify-content:center;transition:background 0.3s ease;cursor:zoom-out">
  <img id="hz-img" src="" alt="" onclick="event.stopPropagation()" style="max-width:92vw;max-height:90vh;border-radius:16px;box-shadow:0 32px 120px rgba(0,0,0,0.7);transform:scale(0.85);opacity:0;transition:transform 0.35s cubic-bezier(0.34,1.56,0.64,1),opacity 0.3s ease;object-fit:contain;cursor:default"/>
</div>
<script>
(function(){
  var ov=document.getElementById('hz-overlay');
  var im=document.getElementById('hz-img');
  var closeTimer=null;

  window.hzOpen=function(src,alt){
    clearTimeout(closeTimer);
    im.src=src; im.alt=alt||'';
    ov.style.display='flex';
    requestAnimationFrame(function(){
      requestAnimationFrame(function(){
        ov.style.background='rgba(0,0,0,0.85)';
        im.style.transform='scale(1)';
        im.style.opacity='1';
      });
    });
  };

  window.hzHover=function(el){ if(el.dataset.hzSeen) return; el.dataset.hzSeen='1'; window.hzOpen(el.src,el.alt); };

  window.hzClose=function(){
    ov.style.background='rgba(0,0,0,0)';
    im.style.transform='scale(0.85)';
    im.style.opacity='0';
    clearTimeout(closeTimer);
    closeTimer=setTimeout(function(){ ov.style.display='none'; },320);
  };

  document.addEventListener('keydown',function(e){
    if(e.key==='Escape') window.hzClose();
  });
})();
</script>
</body>
</html>
