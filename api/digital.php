<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Products — iDataOne | Build. Transform. Scale.</title>
<meta name="description" content="From web apps to enterprise platforms, iDataOne designs, builds and scales digital products tailored precisely to your business needs.">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/digital">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden}

/* Nav */
.site-nav{position:fixed;top:0;left:0;right:0;height:68px;display:flex;align-items:center;gap:40px;padding:0 32px;z-index:100;background:rgba(238,240,250,0.85);backdrop-filter:blur(12px);border-bottom:1px solid rgba(99,102,241,0.08)}
.site-nav .nav-logo{text-decoration:none;flex-shrink:0}
.site-nav .nav-logo img{height:40px;width:auto;opacity:0.92}
.site-nav .nav-links{display:flex;gap:28px;align-items:center}
.site-nav .nav-links a{font-size:13px;font-weight:500;color:#475569;text-decoration:none;transition:color 0.2s;cursor:default}
.site-nav .nav-links a[href]{cursor:pointer}
.site-nav .nav-links a[href]:hover{color:#4f46e5}
.site-nav .nav-links a.active{color:#4f46e5;font-weight:600}
/* ── Banner ── */
.banner{
  min-height:100vh;
  display:flex;align-items:center;
  padding:100px 0 60px;
  position:relative;overflow:hidden;
  background:
    radial-gradient(ellipse at 10% 30%, rgba(99,102,241,0.12), transparent 45%),
    radial-gradient(ellipse at 90% 10%, rgba(124,58,237,0.09), transparent 40%),
    radial-gradient(ellipse at 60% 90%, rgba(20,184,166,0.07), transparent 40%),
    linear-gradient(135deg,#f8fafc 0%,#eef2ff 45%,#f0f4ff 100%);
}
.banner::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#6366f1;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#0f172a;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(99,102,241,0.25);color:#4f46e5;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-secondary:hover{background:rgba(99,102,241,0.06);transform:translateY(-1px)}
.banner-illus{position:relative;display:flex;align-items:center;justify-content:center}

/* ── Section base ── */
.section{padding:80px 32px}
.section-inner{max-width:1140px;margin:0 auto}
.section-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#6366f1;margin-bottom:12px;text-align:center}
.section-title{font-size:clamp(28px,3vw,40px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;text-align:center;margin-bottom:12px}
.section-sub{font-size:16px;color:#64748b;text-align:center;line-height:1.7;max-width:560px;margin:0 auto 48px}

/* ── Success Stories ── */
.stories{background:#fff}
.stories-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.story-card{border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px;display:grid;grid-template-columns:1fr 180px;gap:24px;align-items:start;transition:box-shadow 0.3s}
.story-card:hover{box-shadow:0 16px 48px rgba(99,102,241,0.08)}
.story-tag{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#6366f1;margin-bottom:12px}
.story-title{font-size:20px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;line-height:1.3;margin-bottom:12px}
.story-desc{font-size:13px;color:#64748b;line-height:1.7;margin-bottom:20px}
.story-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#4f46e5;text-decoration:none}
.story-link svg{width:13px;height:13px;fill:none;stroke:#4f46e5;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.story-visual{background:linear-gradient(135deg,#eef2ff,#f5f3ff);border-radius:12px;overflow:hidden;display:flex;align-items:center;justify-content:center;min-height:140px}

/* ── Process ── */
.process{background:#0f172a;position:relative;overflow:hidden}
.process::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(99,102,241,0.15),transparent 55%),radial-gradient(ellipse at 75% 30%,rgba(124,58,237,0.12),transparent 50%);pointer-events:none}
.process .section-tag{color:#818cf8}
.process .section-title{color:#f1f5f9}
.process-steps{display:flex;align-items:flex-start;position:relative;margin-top:56px}
.process-steps::before{content:"";position:absolute;top:28px;left:calc(10%);right:calc(10%);height:1px;background:linear-gradient(90deg,rgba(99,102,241,0.4),rgba(124,58,237,0.4));z-index:0}
.process-step{flex:1;text-align:center;position:relative;z-index:1;padding:0 12px}
.step-icon{width:56px;height:56px;border-radius:50%;background:rgba(99,102,241,0.12);border:1px solid rgba(99,102,241,0.3);display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.step-icon svg{width:22px;height:22px;fill:none;stroke:#818cf8;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.step-title{font-size:15px;font-weight:700;color:#f1f5f9;margin-bottom:8px}
.step-desc{font-size:12.5px;color:rgba(255,255,255,0.45);line-height:1.65}

/* ── Products ── */
.products{background:#f8fafc}
.products-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.product-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;overflow:hidden;transition:box-shadow 0.3s,transform 0.3s}
.product-card:hover{box-shadow:0 20px 48px rgba(99,102,241,0.1);transform:translateY(-4px)}
.product-card-img{height:160px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.product-card-img.rose{background:linear-gradient(135deg,#fff1f2,#ffe4e6)}
.product-card-img.sky{background:linear-gradient(135deg,#f0f9ff,#e0f2fe)}
.product-card-img.emerald{background:linear-gradient(135deg,#ecfdf5,#d1fae5)}
.product-card-body{padding:24px}
.product-card-title{font-size:17px;font-weight:700;color:#0f172a;margin-bottom:6px}
.product-card-desc{font-size:13px;color:#64748b;line-height:1.65;margin-bottom:16px}
.product-card-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#4f46e5;text-decoration:none}
.product-card-link svg{width:13px;height:13px;fill:none;stroke:#4f46e5;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.product-badge{display:inline-block;padding:3px 10px;border-radius:999px;font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:8px}
.badge-live{background:#f0fdf4;color:#16a34a}
.badge-soon{background:#f8fafc;color:#94a3b8}

/* ── CTA ── */
.cta-section{background:#f8fafc;padding:40px 32px 80px}
.cta-card{max-width:900px;margin:0 auto;background:#0f172a;border-radius:28px;padding:34px 48px;position:relative;overflow:hidden;display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(99,102,241,0.2),transparent 60%);pointer-events:none}
.cta-card-left{position:relative;z-index:1}
.cta-icon{width:56px;height:56px;border-radius:50%;border:1px solid rgba(255,255,255,0.12);display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.cta-icon svg{width:22px;height:22px;fill:none;stroke:rgba(255,255,255,0.6);stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.cta-heading{font-size:clamp(22px,2.5vw,32px);font-weight:800;letter-spacing:-1px;color:#f1f5f9;margin-bottom:10px;line-height:1.2}
.cta-heading em{font-style:normal;background:linear-gradient(90deg,#818cf8,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cta-sub{font-size:14px;color:rgba(255,255,255,0.4);line-height:1.7}
.cta-btns{display:flex;flex-direction:column;gap:12px;align-items:flex-end;position:relative;z-index:1}
.btn-cta-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s}
.btn-cta-primary:hover{opacity:0.9}
.btn-cta-secondary{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:rgba(255,255,255,0.45);text-decoration:none;transition:color 0.2s}
.btn-cta-secondary:hover{color:rgba(255,255,255,0.8)}
.btn-cta-secondary svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}


/* Responsive */
@media(max-width:768px){
  .banner-inner{grid-template-columns:1fr}
  .banner-illus{display:none}
  .stories-grid{grid-template-columns:1fr}
  .story-card{grid-template-columns:1fr}
  .story-visual{display:none}
  .process-steps{flex-direction:column;gap:32px}
  .process-steps::before{display:none}
  .products-grid{grid-template-columns:1fr}
  .cta-inner{grid-template-columns:1fr}
  .cta-btns{align-items:flex-start}
}
</style>
<?php include __DIR__ . '/_footer_css.php'; ?>
</head>
<body>

<!-- ── Nav ── -->
<?php $current_page = 'digital'; include __DIR__ . '/_nav.php'; ?>

<!-- ── Banner ── -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <div class="banner-tag">Digital Products</div>
      <h1 class="banner-h1">Build Digital Products<br>Your Business Can<br><em>Depend On</em></h1>
      <p class="banner-sub">From web apps to enterprise platforms, we design, build and scale software products tailored precisely to your business needs within your budget.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Start Your Project <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#stories" class="btn-secondary">View Case Studies <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <svg viewBox="0 0 520 420" width="520" height="420" xmlns="http://www.w3.org/2000/svg">
        <!-- Dashboard window -->
        <rect x="60" y="20" width="400" height="280" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(99,102,241,0.15)" stroke-width="1.5"/>
        <rect x="60" y="20" width="400" height="36" rx="14" fill="rgba(99,102,241,0.06)"/>
        <rect x="60" y="40" width="400" height="16" fill="rgba(99,102,241,0.06)"/>
        <!-- Traffic lights -->
        <circle cx="80" cy="38" r="5" fill="rgba(244,63,94,0.5)"/>
        <circle cx="96" cy="38" r="5" fill="rgba(245,158,11,0.5)"/>
        <circle cx="112" cy="38" r="5" fill="rgba(20,184,166,0.5)"/>
        <!-- Tab text -->
        <rect x="130" cy="32" width="60" height="8" rx="4" fill="rgba(99,102,241,0.2)"/>
        <rect x="130" y="30" width="60" height="8" rx="4" fill="rgba(99,102,241,0.2)"/>
        <!-- Sidebar -->
        <rect x="60" y="56" width="80" height="244" fill="rgba(248,250,252,0.8)"/>
        <rect x="72" y="70" width="56" height="8" rx="4" fill="rgba(99,102,241,0.25)"/>
        <rect x="72" y="86" width="44" height="6" rx="3" fill="rgba(15,23,42,0.08)"/>
        <rect x="72" y="100" width="44" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="72" y="114" width="44" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="72" y="128" width="44" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="72" y="142" width="44" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <!-- Main content area -->
        <!-- Metric cards -->
        <rect x="152" y="68" width="74" height="52" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="236" y="68" width="74" height="52" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="320" y="68" width="74" height="52" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="404" y="68" width="44" height="52" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="160" y="76" width="36" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="160" y="84" width="48" height="10" rx="3" fill="rgba(99,102,241,0.3)"/>
        <rect x="160" y="98" width="28" height="4" rx="2" fill="rgba(20,184,166,0.4)"/>
        <rect x="244" y="76" width="36" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="244" y="84" width="48" height="10" rx="3" fill="rgba(124,58,237,0.25)"/>
        <rect x="244" y="98" width="28" height="4" rx="2" fill="rgba(20,184,166,0.4)"/>
        <rect x="328" y="76" width="36" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="328" y="84" width="48" height="10" rx="3" fill="rgba(245,158,11,0.3)"/>
        <rect x="328" y="98" width="28" height="4" rx="2" fill="rgba(244,63,94,0.4)"/>
        <!-- Chart area -->
        <rect x="152" y="132" width="168" height="108" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="160" y="140" width="60" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <polyline points="160,224 180,210 200,215 220,198 240,188 260,195 280,178 300,172" stroke="rgba(99,102,241,0.7)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        <polygon points="160,224 180,210 200,215 220,198 240,188 260,195 280,178 300,172 300,232 160,232" fill="rgba(99,102,241,0.06)"/>
        <!-- Table area -->
        <rect x="330" y="132" width="118" height="108" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="338" y="140" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="338" y="154" width="102" height="1" fill="rgba(226,232,240,0.9)"/>
        <rect x="338" y="162" width="70" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="416" y="160" width="26" height="7" rx="3" fill="rgba(99,102,241,0.15)"/>
        <rect x="338" y="176" width="70" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="416" y="174" width="26" height="7" rx="3" fill="rgba(20,184,166,0.15)"/>
        <rect x="338" y="190" width="70" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="416" y="188" width="26" height="7" rx="3" fill="rgba(245,158,11,0.15)"/>
        <rect x="338" y="204" width="70" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="416" y="202" width="26" height="7" rx="3" fill="rgba(124,58,237,0.15)"/>
        <!-- Bar chart at bottom -->
        <rect x="152" y="252" width="242" height="56" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <rect x="162" y="282" width="14" height="18" rx="3" fill="rgba(99,102,241,0.3)"/>
        <rect x="180" y="270" width="14" height="30" rx="3" fill="rgba(99,102,241,0.45)"/>
        <rect x="198" y="276" width="14" height="24" rx="3" fill="rgba(99,102,241,0.35)"/>
        <rect x="216" y="264" width="14" height="36" rx="3" fill="rgba(99,102,241,0.55)"/>
        <rect x="234" y="260" width="14" height="40" rx="3" fill="rgba(99,102,241,0.65)"/>
        <rect x="252" y="268" width="14" height="32" rx="3" fill="rgba(99,102,241,0.5)"/>
        <rect x="270" y="272" width="14" height="28" rx="3" fill="rgba(99,102,241,0.4)"/>
        <rect x="288" y="264" width="14" height="36" rx="3" fill="rgba(99,102,241,0.55)"/>
        <rect x="320" y="252" width="62" height="56" rx="8" fill="#fff" stroke="rgba(226,232,240,0.9)" stroke-width="1"/>
        <circle cx="351" cy="272" r="16" fill="none" stroke="rgba(99,102,241,0.15)" stroke-width="8"/>
        <circle cx="351" cy="272" r="16" fill="none" stroke="rgba(99,102,241,0.6)" stroke-width="8" stroke-dasharray="42 58" stroke-dashoffset="25"/>
        <circle cx="351" cy="272" r="16" fill="none" stroke="rgba(20,184,166,0.5)" stroke-width="8" stroke-dasharray="20 80" stroke-dashoffset="-17"/>

        <!-- Phone mockup -->
        <rect x="0" y="80" width="110" height="210" rx="18" fill="rgba(255,255,255,0.96)" stroke="rgba(99,102,241,0.2)" stroke-width="1.5"/>
        <rect x="8" y="98" width="94" height="180" rx="10" fill="rgba(248,250,252,0.9)"/>
        <rect x="38" y="86" width="34" height="7" rx="3.5" fill="rgba(99,102,241,0.15)"/>
        <!-- Phone header -->
        <rect x="14" y="104" width="82" height="28" rx="7" fill="rgba(99,102,241,0.08)"/>
        <rect x="20" y="110" width="40" height="5" rx="2.5" fill="rgba(99,102,241,0.3)"/>
        <rect x="20" y="120" width="28" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <circle cx="86" cy="118" r="8" fill="rgba(99,102,241,0.15)"/>
        <!-- Phone content rows -->
        <rect x="14" y="140" width="82" height="22" rx="6" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="20" y="146" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="76" y="145" width="14" height="8" rx="3" fill="rgba(20,184,166,0.25)"/>
        <rect x="14" y="168" width="82" height="22" rx="6" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="20" y="174" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="76" y="173" width="14" height="8" rx="3" fill="rgba(245,158,11,0.25)"/>
        <rect x="14" y="196" width="82" height="22" rx="6" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="20" y="202" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="76" y="201" width="14" height="8" rx="3" fill="rgba(244,63,94,0.25)"/>
        <!-- Phone bottom nav -->
        <rect x="14" y="258" width="82" height="14" rx="4" fill="rgba(99,102,241,0.06)"/>
        <circle cx="34" cy="265" r="4" fill="rgba(99,102,241,0.35)"/>
        <circle cx="55" cy="265" r="4" fill="rgba(15,23,42,0.1)"/>
        <circle cx="76" cy="265" r="4" fill="rgba(15,23,42,0.1)"/>

        <!-- Floating badge -->
        <rect x="140" y="310" width="160" height="36" rx="18" fill="rgba(255,255,255,0.96)" stroke="rgba(99,102,241,0.2)" stroke-width="1"/>
        <circle cx="158" cy="328" r="8" fill="rgba(99,102,241,0.15)"/>
        <rect x="172" y="322" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="172" y="331" width="56" height="4" rx="2" fill="rgba(99,102,241,0.3)"/>

        <!-- Floating notification -->
        <rect x="340" y="316" width="140" height="36" rx="10" fill="rgba(255,255,255,0.96)" stroke="rgba(20,184,166,0.25)" stroke-width="1"/>
        <circle cx="356" cy="334" r="6" fill="rgba(20,184,166,0.25)"/>
        <rect x="368" y="326" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="368" y="335" width="60" height="4" rx="2" fill="rgba(20,184,166,0.3)"/>
      </svg>
    </div>
  </div>
</section>

<!-- ── Success Stories ── -->
<section class="section stories" id="stories">
  <div class="section-inner">
    <div class="section-tag">Success Stories</div>
    <h2 class="section-title">Digital Products. Real Impact.</h2>
    <p class="section-sub">Real results from businesses that chose to build smarter.</p>
    <div class="stories-grid">
      <div class="story-card">
        <div>
          <div class="story-tag">SaaS Platform</div>
          <div class="story-title">Scaling a SaaS Platform from 0 to 100K Users</div>
          <div class="story-desc">We helped a B2B SaaS company build a scalable platform with advanced analytics, automation and a seamless user experience that grew to 100K users in under 12 months.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="18" width="60" height="6" rx="3" fill="rgba(99,102,241,0.2)"/>
            <rect x="16" y="30" width="80" height="12" rx="4" fill="rgba(99,102,241,0.35)"/>
            <rect x="16" y="46" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
            <polyline points="16,96 36,82 56,86 76,70 96,58 116,62 136,48" stroke="rgba(99,102,241,0.7)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <polygon points="16,96 36,82 56,86 76,70 96,58 116,62 136,48 136,100 16,100" fill="rgba(99,102,241,0.06)"/>
          </svg>
        </div>
      </div>
      <div class="story-card">
        <div>
          <div class="story-tag">Enterprise Modernisation</div>
          <div class="story-title">Modernising Legacy Systems for a Global Enterprise</div>
          <div class="story-desc">We modernised legacy applications and streamlined operations with a unified digital platform, cutting processing time by 60% and reducing operational costs significantly.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="16" width="128" height="20" rx="5" fill="rgba(20,184,166,0.08)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
            <rect x="22" y="22" width="50" height="5" rx="2.5" fill="rgba(20,184,166,0.3)"/>
            <circle cx="134" cy="26" r="5" fill="rgba(20,184,166,0.2)"/>
            <rect x="16" y="44" width="128" height="20" rx="5" fill="rgba(99,102,241,0.05)" stroke="rgba(99,102,241,0.15)" stroke-width="1"/>
            <rect x="22" y="50" width="50" height="5" rx="2.5" fill="rgba(99,102,241,0.25)"/>
            <circle cx="134" cy="54" r="5" fill="rgba(99,102,241,0.15)"/>
            <rect x="16" y="72" width="128" height="20" rx="5" fill="rgba(245,158,11,0.05)" stroke="rgba(245,158,11,0.15)" stroke-width="1"/>
            <rect x="22" y="78" width="50" height="5" rx="2.5" fill="rgba(245,158,11,0.3)"/>
            <circle cx="134" cy="82" r="5" fill="rgba(245,158,11,0.2)"/>
          </svg>
        </div>
      </div>

      <div class="story-card">
        <div>
          <div class="story-tag">Mobile Application</div>
          <div class="story-title">Launching a Cross-Platform Mobile App in 90 Days</div>
          <div class="story-desc">We designed and built a consumer mobile app for iOS and Android, going from wireframes to App Store launch in 90 days with a 4.8 star rating from day one.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="48" y="12" width="64" height="96" rx="10" fill="rgba(124,58,237,0.06)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="54" y="22" width="52" height="76" rx="6" fill="rgba(248,250,252,0.9)"/>
            <rect x="70" y="15" width="20" height="4" rx="2" fill="rgba(124,58,237,0.2)"/>
            <rect x="58" y="28" width="44" height="6" rx="3" fill="rgba(124,58,237,0.25)"/>
            <rect x="58" y="40" width="44" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="58" y="50" width="44" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
            <rect x="58" y="62" width="20" height="14" rx="5" fill="rgba(124,58,237,0.18)"/>
            <rect x="82" y="62" width="20" height="14" rx="5" fill="rgba(20,184,166,0.15)"/>
            <circle cx="72" cy="96" r="4" fill="rgba(124,58,237,0.3)"/>
            <circle cx="84" cy="96" r="4" fill="rgba(15,23,42,0.08)"/>
            <circle cx="96" cy="96" r="4" fill="rgba(15,23,42,0.08)"/>
          </svg>
        </div>
      </div>

      <div class="story-card">
        <div>
          <div class="story-tag">Web Application</div>
          <div class="story-title">Building a Real-Time Analytics Dashboard for a FinTech Startup</div>
          <div class="story-desc">We built a high-performance web application with real-time data visualisation, role-based access and automated reporting that reduced manual work by 70%.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="8" y="8" width="144" height="20" rx="8" fill="rgba(20,184,166,0.08)"/>
            <rect x="8" y="18" width="144" height="10" fill="rgba(20,184,166,0.08)"/>
            <circle cx="20" cy="18" r="3" fill="rgba(244,63,94,0.4)"/>
            <circle cx="30" cy="18" r="3" fill="rgba(245,158,11,0.4)"/>
            <circle cx="40" cy="18" r="3" fill="rgba(20,184,166,0.4)"/>
            <rect x="16" y="36" width="36" height="20" rx="4" fill="rgba(20,184,166,0.1)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
            <rect x="18" y="40" width="20" height="3" rx="1.5" fill="rgba(15,23,42,0.08)"/>
            <rect x="18" y="47" width="28" height="6" rx="2" fill="rgba(20,184,166,0.3)"/>
            <rect x="58" y="36" width="36" height="20" rx="4" fill="rgba(99,102,241,0.08)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
            <rect x="60" y="40" width="20" height="3" rx="1.5" fill="rgba(15,23,42,0.08)"/>
            <rect x="60" y="47" width="28" height="6" rx="2" fill="rgba(99,102,241,0.25)"/>
            <rect x="100" y="36" width="44" height="20" rx="4" fill="rgba(245,158,11,0.08)" stroke="rgba(245,158,11,0.18)" stroke-width="1"/>
            <rect x="102" y="40" width="20" height="3" rx="1.5" fill="rgba(15,23,42,0.08)"/>
            <rect x="102" y="47" width="34" height="6" rx="2" fill="rgba(245,158,11,0.3)"/>
            <rect x="16" y="64" width="128" height="38" rx="4" fill="rgba(248,250,252,0.8)"/>
            <polyline points="22,92 36,80 50,84 64,72 78,66 92,70 106,60 120,64 134,56" stroke="rgba(20,184,166,0.6)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <polygon points="22,92 36,80 50,84 64,72 78,66 92,70 106,60 120,64 134,56 134,100 22,100" fill="rgba(20,184,166,0.05)"/>
          </svg>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── Process ── -->
<section class="section process">
  <div class="section-inner">
    <div class="section-tag">Our Process</div>
    <h2 class="section-title">From Idea To Scale</h2>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
        <div class="step-title">Discover</div>
        <div class="step-desc">We understand your vision, market and business goals.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
        <div class="step-title">Design</div>
        <div class="step-desc">We craft intuitive experiences and product designs.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="step-title">Build</div>
        <div class="step-desc">We engineer robust, scalable and secure applications.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/></svg></div>
        <div class="step-title">Launch</div>
        <div class="step-desc">We deploy, test and launch your product with confidence.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div>
        <div class="step-title">Scale</div>
        <div class="step-desc">We help you scale and evolve for long-term success.</div>
      </div>
    </div>
  </div>
</section>

<!-- ── Products ── -->
<section class="section products">
  <div class="section-inner">
    <div class="section-tag">Explore Our Products</div>
    <h2 class="section-title">Built by iDataOne</h2>
    <p class="section-sub">AI-powered products designed to solve real problems for real people.</p>
    <div class="products-grid">

      <div class="product-card">
        <div class="product-card-img rose">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="12" width="160" height="116" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
            <rect x="20" y="12" width="160" height="28" rx="12" fill="rgba(244,63,94,0.08)"/>
            <rect x="20" y="28" width="160" height="12" fill="rgba(244,63,94,0.08)"/>
            <circle cx="60" cy="26" r="5" fill="rgba(244,63,94,0.3)"/>
            <circle cx="74" cy="26" r="5" fill="rgba(245,158,11,0.3)"/>
            <circle cx="88" cy="26" r="5" fill="rgba(20,184,166,0.3)"/>
            <rect x="32" y="50" width="64" height="10" rx="5" fill="rgba(244,63,94,0.2)"/>
            <rect x="32" y="68" width="136" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
            <rect x="32" y="78" width="110" height="5" rx="2.5" fill="rgba(15,23,42,0.05)"/>
            <rect x="32" y="92" width="52" height="22" rx="8" fill="rgba(244,63,94,0.12)" stroke="rgba(244,63,94,0.2)" stroke-width="1"/>
            <rect x="92" y="92" width="52" height="22" rx="8" fill="rgba(20,184,166,0.1)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-badge badge-live">Live</div>
          <div class="product-card-title">MealMate</div>
          <div class="product-card-desc">Never wonder what to cook again. AI-powered meal planning personalised to your family's health conditions, dietary preferences and nutritional needs.</div>
          <a href="https://mealmate.idataone.com" target="_blank" class="product-card-link">Explore MealMate <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-card-img sky">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="20" width="140" height="40" rx="14" fill="rgba(255,255,255,0.85)" stroke="rgba(14,165,233,0.2)" stroke-width="1"/>
            <rect x="32" y="30" width="90" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="32" y="40" width="70" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <circle cx="148" cy="40" r="7" fill="rgba(14,165,233,0.15)"/>
            <rect x="40" y="76" width="140" height="40" rx="14" fill="rgba(14,165,233,0.1)" stroke="rgba(14,165,233,0.25)" stroke-width="1"/>
            <rect x="52" y="86" width="100" height="5" rx="2.5" fill="rgba(14,165,233,0.4)"/>
            <rect x="52" y="96" width="80" height="4" rx="2" fill="rgba(14,165,233,0.25)"/>
            <circle cx="44" cy="96" r="7" fill="rgba(14,165,233,0.2)"/>
            <circle cx="96" cy="64" r="4" fill="rgba(14,165,233,0.2)"/>
            <circle cx="108" cy="64" r="4" fill="rgba(14,165,233,0.15)"/>
            <circle cx="120" cy="64" r="4" fill="rgba(14,165,233,0.1)"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-badge badge-soon">Coming Soon</div>
          <div class="product-card-title">aiChat</div>
          <div class="product-card-desc">Always on. Always intelligent. AI agents for websites and business operations that handle queries, qualify leads and automate support workflows.</div>
          <a href="/contact" class="product-card-link">Get Early Access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

      <div class="product-card">
        <div class="product-card-img emerald">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="12" y="10" width="176" height="120" rx="10" fill="rgba(255,255,255,0.7)" stroke="rgba(16,185,129,0.15)" stroke-width="1"/>
            <rect x="12" y="10" width="176" height="22" rx="10" fill="rgba(16,185,129,0.08)"/>
            <rect x="12" y="20" width="176" height="12" fill="rgba(16,185,129,0.08)"/>
            <rect x="22" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(16,185,129,0.15)" stroke-width="1"/>
            <rect x="78" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(16,185,129,0.15)" stroke-width="1"/>
            <rect x="134" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(16,185,129,0.15)" stroke-width="1"/>
            <rect x="28" y="47" width="24" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="28" y="55" width="36" height="7" rx="3" fill="rgba(16,185,129,0.3)"/>
            <rect x="22" y="78" width="100" height="42" rx="6" fill="rgba(255,255,255,0.8)"/>
            <rect x="30" y="104" width="8" height="12" rx="2" fill="rgba(16,185,129,0.4)"/>
            <rect x="42" y="96" width="8" height="20" rx="2" fill="rgba(16,185,129,0.55)"/>
            <rect x="54" y="100" width="8" height="16" rx="2" fill="rgba(16,185,129,0.4)"/>
            <rect x="66" y="92" width="8" height="24" rx="2" fill="rgba(16,185,129,0.65)"/>
            <rect x="78" y="88" width="8" height="28" rx="2" fill="rgba(5,150,105,0.7)"/>
            <rect x="130" y="78" width="42" height="42" rx="6" fill="rgba(255,255,255,0.8)"/>
            <polyline points="136,110 144,100 152,104 160,94 168,90" stroke="rgba(5,150,105,0.6)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="168" cy="90" r="3" fill="rgba(5,150,105,0.7)"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-badge badge-soon">Coming Soon</div>
          <div class="product-card-title">DatInsights</div>
          <div class="product-card-desc">One view of all your data. Unified business intelligence platform with real-time dashboards, predictive analytics and actionable insights.</div>
          <a href="/contact" class="product-card-link">Get Early Access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="cta-section">
  <div class="cta-card">
    <div class="cta-card-left">
      <div class="cta-icon"><svg viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg></div>
      <h2 class="cta-heading">Ready To Build Something <em>Intelligent?</em></h2>
      <p class="cta-sub">Whether you're launching a startup, modernising an enterprise platform, or building a SaaS product — we can help you get there.</p>
    </div>
    <div class="cta-btns">
      <a href="/contact" class="btn-cta-primary">Talk To Our Experts <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/contact" class="btn-cta-secondary">Schedule a Consultation <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<!-- ── Footer ── -->
<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
