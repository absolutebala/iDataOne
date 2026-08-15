<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About iDataOne | Human-Led, AI-Powered Software Delivery</title>
<meta name="description" content="iDataOne combines experienced software delivery leadership with specialised AI digital teams to build everything from MVPs to complex enterprise platforms — faster, leaner, at up to 70% lower cost.">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/about">
<meta property="og:type" content="website">
<meta property="og:title" content="About iDataOne | Human-Led, AI-Powered Software Delivery">
<meta property="og:description" content="Human-led. AI-powered. Enterprise-ready. Up to 70% lower development cost.">
<meta property="og:url" content="https://idataone.com/about">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="About iDataOne | Human-Led, AI-Powered Software Delivery">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"AboutPage","name":"About iDataOne","url":"https://idataone.com/about","description":"iDataOne builds AI-first digital products and enterprise software using a human-led, AI-powered delivery model.","publisher":{"@type":"Organization","name":"iDataOne","url":"https://idataone.com"}}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;background:#ffffff;color:#0f172a;overflow-x:hidden;padding-top:68px}
.section{padding:88px 32px;position:relative}
.inner{max-width:1140px;margin:0 auto}
.eyebrow{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#00d4ff;margin-bottom:14px}
.gold{background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.alt{background:#f8fafc}
.bar{width:40px;height:2px;background:linear-gradient(90deg,#00d4ff,#f5c518);border-radius:999px;margin-bottom:20px}

/* ── HERO ── */
.hero{min-height:calc(100vh - 68px);display:flex;align-items:center;padding:72px 32px 64px;position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 75% 30%,rgba(0,212,255,0.1),transparent 50%),radial-gradient(ellipse at 20% 70%,rgba(245,197,24,0.07),transparent 45%),linear-gradient(135deg,#0a0f1e 0%,#0d1535 60%,#0a0f1e 100%)}
.hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(0,212,255,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(0,212,255,0.04) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.hero-inner{max-width:1140px;margin:0 auto;width:100%;position:relative;z-index:1;display:flex;flex-direction:column;align-items:center;text-align:center}
.hero-tag{display:inline-flex;align-items:center;gap:8px;padding:6px 16px;border-radius:999px;border:1px solid rgba(0,212,255,0.2);background:rgba(0,212,255,0.06);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#00d4ff;margin-bottom:28px}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.3}}
.hero-h1{font-size:clamp(44px,6vw,80px);font-weight:900;letter-spacing:-4px;line-height:1.0;margin-bottom:16px;color:#ffffff}
.hero-sub{font-size:18px;font-weight:500;color:rgba(255,255,255,0.65);margin-bottom:28px;letter-spacing:-0.2px}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-bottom:52px}
.btn-p{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#0891b2;color:#fff;font-size:14px;font-weight:700;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-p:hover{opacity:0.9;transform:translateY(-1px)}
.btn-o{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#f5c518;color:#0a0f1e;font-size:14px;font-weight:700;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-o:hover{opacity:0.9;transform:translateY(-1px)}
.hero-img{width:100%;border-radius:20px;display:block;border:1px solid rgba(0,212,255,0.15);box-shadow:0 32px 80px rgba(0,0,0,0.5);position:relative}
.hero-img-wrap{position:relative;width:100%}
.hero-img-fade{position:absolute;bottom:0;left:0;right:0;height:28%;background:linear-gradient(transparent,#0e0c18);border-radius:0 0 20px 20px;pointer-events:none}

/* ── STATS BAR ── */
.stats-bar{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:0;padding:40px 32px}
.stat{padding:32px 24px;text-align:center;background:rgba(255,255,255,0.05);border:1px solid rgba(0,212,255,0.15);border-radius:20px;transition:background 0.3s,transform 0.3s}
.stat:hover{background:#130e24}
.stat-num{font-size:40px;font-weight:900;letter-spacing:-2px;line-height:1;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.stat-label{font-size:12px;color:rgba(255,255,255,0.4);margin-top:6px;line-height:1.4}

/* ── TEAM ── */
.team-head-card{display:grid;grid-template-columns:auto 1fr;gap:32px;align-items:center;padding:32px 40px;background:#f0f9ff;border:1px solid rgba(8,145,178,0.25);border-radius:20px;margin-bottom:24px}
.avatar{width:88px;height:88px;border-radius:50%;overflow:hidden;flex-shrink:0;border:2px solid rgba(0,212,255,0.35);box-shadow:0 0 24px rgba(0,212,255,0.15)}
.head-badge{font-size:10px;font-weight:700;letter-spacing:2px;color:#0891b2;text-transform:uppercase;margin-bottom:6px}
.head-name{font-size:22px;font-weight:800;letter-spacing:-0.5px;margin-bottom:4px;color:#0f172a}
.head-title{font-size:13px;color:#0891b2;font-weight:600;margin-bottom:8px}
.head-bio{font-size:13px;color:#64748b;line-height:1.65}
.ai-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.ai-card{padding:24px 20px;background:#fff;border:1px solid rgba(245,197,24,0.2);border-radius:18px;transition:border-color 0.3s,transform 0.3s;box-shadow:0 2px 12px rgba(0,0,0,0.04)}
.ai-card:hover{border-color:rgba(245,197,24,0.5);transform:translateY(-3px);box-shadow:0 8px 24px rgba(0,0,0,0.08)}
.ai-icon{width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,rgba(0,212,255,0.12),rgba(245,197,24,0.08));border:1px solid rgba(0,212,255,0.2);display:flex;align-items:center;justify-content:center;margin-bottom:14px}.ai-icon svg{width:22px;height:22px;fill:none;stroke:url(#aiGrad);stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.ai-name{font-size:17px;font-weight:800;letter-spacing:-0.5px;color:#b45309;margin-bottom:2px}
.ai-role{font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:1px;color:#94a3b8;margin-bottom:8px}
.ai-desc{font-size:12px;color:#64748b;line-height:1.6}
.plus-bar{text-align:center;padding:16px;font-size:12px;color:#94a3b8;letter-spacing:1px;margin:8px 0}
.plus-bar em{color:#f5c518;font-style:normal}

/* ── COMPARISON ── */
.compare-wrap{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:40px}
.ccard{border-radius:20px;padding:32px}
.ccard-old{background:#f8fafc;border:1px solid rgba(226,232,240,0.8)}
.ccard-new{background:#f0f9ff;border:1px solid rgba(0,212,255,0.25);position:relative;overflow:hidden}
.ccard-new::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(0,212,255,0.07),transparent 60%);pointer-events:none}
.ctitle{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:20px}
.ccard-old .ctitle{color:#94a3b8}
.ccard-new .ctitle{color:#00d4ff}
.citem{display:flex;gap:10px;margin-bottom:12px;font-size:13px;color:#475569;line-height:1.5;align-items:flex-start}
.citem-x::before{content:"—";color:rgba(255,255,255,0.18);flex-shrink:0}
.citem-ok::before{content:"✓";color:#00d4ff;font-weight:700;flex-shrink:0}
.csave{margin-top:24px;padding:24px;background:linear-gradient(135deg,#0a0f1e,#130e24);border:1px solid rgba(0,212,255,0.2);border-radius:16px;text-align:center;position:relative;z-index:1}
.csave-n{font-size:36px;font-weight:900;letter-spacing:-2px;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.csave-l{font-size:12px;color:rgba(255,255,255,0.6);margin-top:4px}
.cfootnote{font-size:11px;color:#94a3b8;font-style:italic;margin-top:10px;text-align:center}

/* ── WORKFLOW ── */
.wf-title{font-size:clamp(28px,3vw,40px);font-weight:800;letter-spacing:-1.5px;margin-bottom:48px;text-align:center;color:#0f172a}
.wf-steps{display:grid;grid-template-columns:repeat(6,1fr);position:relative}
.wf-steps::before{content:"";position:absolute;top:35px;left:8%;right:8%;height:1px;background:linear-gradient(90deg,transparent,rgba(0,212,255,0.25) 20%,rgba(245,197,24,0.25) 80%,transparent);pointer-events:none}
.wf-step{text-align:center;padding:0 6px;position:relative;z-index:1}
.wf-icon{width:70px;height:70px;border-radius:50%;background:#0e0c18;border:1.5px solid rgba(0,212,255,0.25);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;transition:border-color 0.3s,box-shadow 0.3s}
.wf-step:hover .wf-icon{border-color:#00d4ff;box-shadow:0 0 20px rgba(0,212,255,0.2)}
.wf-step.gold-step .wf-icon{border-color:rgba(245,197,24,0.25)}
.wf-step.gold-step:hover .wf-icon{border-color:#f5c518;box-shadow:0 0 20px rgba(245,197,24,0.2)}
.wf-icon svg{width:22px;height:22px;fill:none;stroke:#00d4ff;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.wf-step.gold-step .wf-icon svg{stroke:#f5c518}
.wf-label{font-size:13px;font-weight:700;color:#0f172a;margin-bottom:4px}
.wf-desc{font-size:11px;color:rgba(255,255,255,0.33);line-height:1.5}

/* ── ECONOMICS ── */
.econ-inner{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.econ-left h2{font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:12px;color:#0f172a}
.econ-left p{font-size:14px;color:#64748b;line-height:1.8;margin-bottom:0}
.econ-points{margin-top:32px;display:flex;flex-direction:column;gap:16px}
.ep{display:flex;gap:14px;align-items:flex-start}
.ep-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0;margin-top:5px}
.ep-title{font-size:14px;font-weight:700;color:#0f172a;margin-bottom:2px}
.ep-desc{font-size:12.5px;color:#64748b;line-height:1.6}
.econ-stat{text-align:center;padding:48px 36px;background:#fffbeb;border:1px solid rgba(245,197,24,0.3);border-radius:24px;box-shadow:0 4px 16px rgba(245,197,24,0.08)}
.econ-n{font-size:80px;font-weight:900;letter-spacing:-5px;line-height:1;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.econ-unit{font-size:36px;font-weight:900;letter-spacing:-2px;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.econ-label{font-size:13px;color:#78716c;margin-top:10px;line-height:1.5}
.econ-note{font-size:11px;color:#94a3b8;margin-top:10px;font-style:italic}

/* ── CTA ── */
.cta-inner{text-align:center;max-width:600px;margin:0 auto}
.cta-h{font-size:clamp(32px,4.5vw,56px);font-weight:900;letter-spacing:-3px;line-height:1.05;margin-bottom:16px;color:#ffffff}
.cta-p{font-size:15px;color:rgba(255,255,255,0.7);margin-bottom:32px;line-height:1.7}
.cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
.cta-alt{font-size:12px;color:rgba(255,255,255,0.5);margin-top:18px;font-style:italic}

/* Case Studies list */
.cs-list{display:grid;grid-template-columns:repeat(5,1fr);gap:12px}
.cs-item{display:flex;flex-direction:column;gap:12px;padding:22px 20px;border-radius:16px;border:1px solid rgba(226,232,240,0.8);background:#fff;text-decoration:none;transition:background 0.25s,border-color 0.25s,transform 0.25s;cursor:pointer;position:relative;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.04)}
.cs-item::before{content:"";position:absolute;top:0;left:0;right:0;height:2px;background:var(--c);opacity:0;transition:opacity 0.25s}
.cs-item:hover{background:#fff;border-color:var(--c);transform:translateY(-3px);box-shadow:0 8px 24px rgba(0,0,0,0.1)}
.cs-item:hover::before{opacity:1}
.cs-item-num{font-size:10px;font-weight:700;color:var(--c);letter-spacing:1.5px;opacity:0.7}
.cs-item-label{font-size:13px;font-weight:700;color:#0f172a;line-height:1.35;flex:1}
.cs-item-desc{font-size:11px;color:#94a3b8;line-height:1.55}
.cs-item-arrow{color:var(--c);opacity:0;transition:opacity 0.2s;align-self:flex-end}
.cs-item:hover .cs-item-arrow{opacity:0.8}
@media(max-width:900px){.cs-list{grid-template-columns:repeat(3,1fr)}}
@media(max-width:600px){.cs-list{grid-template-columns:1fr 1fr}.cs-item-desc{display:none}}

@media(max-width:1024px){
  .ai-grid{grid-template-columns:1fr 1fr}
  .wf-steps{grid-template-columns:repeat(3,1fr);gap:24px}
  .wf-steps::before{display:none}
  .econ-inner{grid-template-columns:1fr}
  .stats-bar{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .section{padding:64px 20px}
  .hero{padding:52px 20px 48px}
  .team-grid{grid-template-columns:1fr}
  .team-head-card{text-align:center}
  .avatar{margin:0 auto}
  .compare-wrap{grid-template-columns:1fr}
  .wf-steps{grid-template-columns:1fr 1fr}
  .stats-bar{grid-template-columns:1fr 1fr}
}
@media(max-width:480px){
  .ai-grid{grid-template-columns:1fr}
  .wf-steps{grid-template-columns:1fr}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>
<?php $current_page = 'about'; include __DIR__ . '/_nav.php'; ?>

<!-- HERO -->
<section class="hero">
  <svg style="position:absolute;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.6" viewBox="0 0 1400 900" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
    <!-- Subtle tech pattern: nodes + connectors -->
    <!-- Top left cluster -->
    <circle cx="120" cy="140" r="3" fill="rgba(0,212,255,0.25)"/>
    <circle cx="200" cy="100" r="2" fill="rgba(245,197,24,0.2)"/>
    <circle cx="80" cy="200" r="2" fill="rgba(0,212,255,0.18)"/>
    <line x1="120" y1="140" x2="200" y2="100" stroke="rgba(0,212,255,0.12)" stroke-width="1"/>
    <line x1="120" y1="140" x2="80" y2="200" stroke="rgba(0,212,255,0.1)" stroke-width="1"/>
    <!-- Hex outline top centre -->
    <polygon points="700,40 730,57 730,91 700,108 670,91 670,57" fill="none" stroke="rgba(245,197,24,0.1)" stroke-width="1"/>
    <polygon points="700,55 720,66 720,88 700,99 680,88 680,66" fill="none" stroke="rgba(245,197,24,0.07)" stroke-width="1"/>
    <!-- Top right nodes -->
    <circle cx="1260" cy="80" r="4" fill="rgba(245,197,24,0.2)"/>
    <circle cx="1320" cy="140" r="2.5" fill="rgba(0,212,255,0.2)"/>
    <circle cx="1200" cy="120" r="2" fill="rgba(245,197,24,0.15)"/>
    <line x1="1260" y1="80" x2="1320" y2="140" stroke="rgba(245,197,24,0.1)" stroke-width="1"/>
    <line x1="1260" y1="80" x2="1200" y2="120" stroke="rgba(245,197,24,0.08)" stroke-width="1"/>
    <!-- Circuit trace left -->
    <path d="M40 400 L100 400 L100 460 L160 460" fill="none" stroke="rgba(0,212,255,0.1)" stroke-width="1"/>
    <circle cx="40" cy="400" r="3" fill="rgba(0,212,255,0.2)"/>
    <circle cx="160" cy="460" r="3" fill="rgba(0,212,255,0.15)"/>
    <!-- Circuit trace right -->
    <path d="M1360 300 L1300 300 L1300 360 L1240 360" fill="none" stroke="rgba(245,197,24,0.1)" stroke-width="1"/>
    <circle cx="1360" cy="300" r="3" fill="rgba(245,197,24,0.2)"/>
    <circle cx="1240" cy="360" r="3" fill="rgba(245,197,24,0.15)"/>
    <!-- Bottom scattered -->
    <circle cx="300" cy="820" r="2.5" fill="rgba(0,212,255,0.15)"/>
    <circle cx="400" cy="780" r="2" fill="rgba(245,197,24,0.12)"/>
    <line x1="300" y1="820" x2="400" y2="780" stroke="rgba(0,212,255,0.08)" stroke-width="1"/>
    <circle cx="1050" cy="800" r="2.5" fill="rgba(245,197,24,0.15)"/>
    <circle cx="1150" cy="840" r="2" fill="rgba(0,212,255,0.12)"/>
    <line x1="1050" y1="800" x2="1150" y2="840" stroke="rgba(245,197,24,0.08)" stroke-width="1"/>
    <!-- Diamond sparkles -->
    <polygon points="60,600 64,612 60,624 56,612" fill="rgba(245,197,24,0.15)"/>
    <polygon points="1380,500 1384,512 1380,524 1376,512" fill="rgba(0,212,255,0.15)"/>
  </svg>
  <div class="hero-inner">
    <h1 class="hero-h1">Build More.<br><span class="gold">Spend Less.</span></h1>
    <p class="hero-sub">Human-led. AI-powered. Enterprise-ready.</p>
    <div class="hero-img-wrap">
      <img src="/assets/images/team-hero.png" alt="iDataOne delivery team — Bala Kandaswamy (Delivery Head) with AI specialists Pixel, Forge, Insight and Sentinel" class="hero-img" loading="eager"/>
      <div class="hero-img-fade"></div>
    </div>
    <div class="hero-ctas" style="margin-top:32px">
      <a href="/contact" class="btn-p">Talk to Our Delivery Team <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/case-studies" class="btn-o">See What We've Built <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="section" style="background:#0e0c18;padding:0" style="padding:0">
  <div class="inner">
    <div class="stats-bar">
      <div class="stat"><div class="stat-num">70%</div><div class="stat-label">Lower development cost*</div></div>
      <div class="stat"><div class="stat-num">5×</div><div class="stat-label">Faster AI-assisted delivery</div></div>
      <div class="stat"><div class="stat-num">20+</div><div class="stat-label">Years delivery leadership</div></div>
      <div class="stat"><div class="stat-num">1+4</div><div class="stat-label">Human + AI specialist team</div></div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="section" style="background:#ffffff">
  <div class="inner">
    <div class="eyebrow">The Team</div>
    <div class="bar"></div>
    <h2 style="font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:8px;color:#0f172a">One Delivery Head.<br>Four AI Specialists.</h2>
    <p style="font-size:14px;color:#64748b;margin-bottom:40px">Senior human leadership + specialised AI capability. End to end.</p>
    <div class="team-grid">
      <div class="team-head-card">
        <img src="/assets/images/bala-kandaswamy.jpg" alt="Bala Kandaswamy — Delivery Head, iDataOne" class="avatar" style="width:100px;height:100px;object-fit:cover;object-position:center top">
        <div class="head-badge">Delivery Head</div>
        <div class="head-name">Bala Kandaswamy</div>
        <div class="head-title">Software Delivery Leader · 20+ Years</div>
        <div class="head-bio">Architecture, customer alignment, quality and accountability — human-led on every project. Not outsourced. Not automated away.</div>
      </div>
      <div class="ai-grid">
      <?php foreach([
        ['Pixel','Digital Experience','UI/UX, design systems, user journeys and prototypes.'],
        ['Forge','Software Engineering','Full-stack, APIs, cloud-native and AI-powered development.'],
        ['Insight','Business Transformation','Requirements, product thinking and business-to-tech translation.'],
        ['Sentinel','Cloud Platform','DevOps, Kubernetes, CI/CD, security and scalability.'],
      ] as $m): ?>
      <div class="ai-card">
        <div class="ai-icon">
          <svg viewBox="0 0 32 32" width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs><linearGradient id="bg<?= $m[0] ?>" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#00d4ff"/><stop offset="100%" stop-color="#f5c518"/></linearGradient></defs>
            <ellipse cx="16" cy="15" rx="7" ry="8" stroke="url(#bg<?= $m[0] ?>)" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M9 15c-3 0-4.5 1.3-4.5 3.5S7 22 9 22" stroke="url(#bg<?= $m[0] ?>)" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M23 15c3 0 4.5 1.3 4.5 3.5S25 22 23 22" stroke="url(#bg<?= $m[0] ?>)" stroke-width="1.6" stroke-linecap="round"/>
            <path d="M12 10c0-2.2 1.8-4 4-4s4 1.8 4 4" stroke="url(#bg<?= $m[0] ?>)" stroke-width="1.6" stroke-linecap="round"/>
            <circle cx="13" cy="15" r="1.2" fill="url(#bg<?= $m[0] ?>)"/>
            <circle cx="19" cy="15" r="1.2" fill="url(#bg<?= $m[0] ?>)"/>
            <path d="M14 19v3M18 19v3M14 22h4" stroke="url(#bg<?= $m[0] ?>)" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="ai-name"><?= $m[0] ?></div>
        <div class="ai-role"><?= $m[1] ?></div>
        <div class="ai-desc"><?= $m[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CASE STUDIES -->
<section class="section" style="background:#f0f9ff">
  <div class="inner">
    <div class="eyebrow">Case Studies</div>
    <div class="bar"></div>
    <h2 style="font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:8px;color:#0f172a">What We've Built</h2>
    <p style="font-size:14px;color:#64748b;margin-bottom:40px">A selection of products and platforms delivered across Digital, AI and Data.</p>
    <div class="cs-list">
      <?php
      $cases = [
        ['digital','#00d4ff','/case-study/knight-ryders','Community Platform','80% less maintenance — custom inline CMS replacing WordPress for a 460-member riding club.'],
        ['digital','#00d4ff','/case-study/telecom-pm-platform','Infrastructure PMS','Telecom project management platform for Venus Energy — PO to close-out, multi-trade, live dashboards.'],
        ['digital','#00d4ff','/case-study/aidesker','SaaS Platform','aiDesker — multi-tenant AI chat SaaS with Stripe billing, knowledge base and one-line embed.'],
        ['ai','#a855f7','/case-study/aidesker','Conversational AI','Knowledge-grounded AI chat assistant with lead capture, BYO-key and real-time CRM sync.'],
        ['digital','#00d4ff','/case-study/risk-platform','Enterprise Platform','Risk &amp; Compliance platform for an FMCG leader — 5×5 matrix, dashboards and workflow automation.'],
        ['data','#f5c518','/case-study/risk-dashboard','Data Intelligence','Real-time risk intelligence dashboard — live metrics, drill-down and cross-system data integration.'],
        ['digital','#00d4ff','/case-study/isportone','Sports Platform','iSportOne — a lifelong sports passport for athletes with profiles, stats and club management.'],
        ['digital','#00d4ff','/case-study/mealmate','Mobile App','MealMate — AI-powered family meal planning app on React Native, GPT-4o-mini powered.'],
        ['digital','#f59e0b','/infra360PMS','Product Launch','Infra360 PMS — live infrastructure project management product for telecom and civil contractors.'],
      ];
      foreach($cases as $i => [$cat,$col,$url,$label,$desc]): ?>
      <a href="<?= $url ?>" class="cs-item" style="--c:<?= $col ?>">
        <div class="cs-item-num"><?= str_pad($i+1,2,'0','0') ?></div>
        <div class="cs-item-label"><?= $label ?></div>
        <div class="cs-item-desc"><?= $desc ?></div>
        <div class="cs-item-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
      </a>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:36px">
      <a href="/case-studies" class="btn-p" style="display:inline-flex">View All Case Studies <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<!-- COMPARISON -->
<section class="section" style="background:#ffffff">
  <div class="inner">
    <div class="eyebrow">The Difference</div>
    <div class="bar"></div>
    <h2 style="font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:0;color:#0f172a">Enterprise Capability.<br>Without Enterprise Overhead.</h2>
    <div class="compare-wrap">
      <div class="ccard ccard-old">
        <div class="ctitle">Traditional Model</div>
        <?php foreach(['Large specialist teams','Management layers','Long coordination cycles','High resource overhead','Slower iteration'] as $i): ?>
        <div class="citem citem-x"><?= $i ?></div>
        <?php endforeach; ?>
      </div>
      <div class="ccard ccard-new">
        <div class="ctitle">iDataOne Model</div>
        <?php foreach(['Senior Delivery Head on every project','4 specialised AI team members','Lean, focused team structure','AI-accelerated execution throughout','Faster delivery cycles'] as $i): ?>
        <div class="citem citem-ok"><?= $i ?></div>
        <?php endforeach; ?>
        <div class="csave">
          <div class="csave-n">Up to 70%</div>
          <div class="csave-l">lower development cost</div>
        </div>
        <div class="cfootnote">*Varies by scope, complexity, stack and delivery model.</div>
      </div>
    </div>
  </div>
</section>

<!-- WORKFLOW -->
<section style="background:linear-gradient(135deg,#0e0c18 0%,#130e24 50%,#0e0c18 100%);padding:88px 32px">
  <div class="inner">
    <div style="text-align:center;margin-bottom:40px">
      <div class="eyebrow" style="color:#00d4ff">How We Deliver</div>
      <div class="bar" style="margin:12px auto 0"></div>
      <h2 style="font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;color:#fff;margin-top:16px">AI-Assisted. <span style="background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent">Every Step.</span></h2>
    </div>
    <div>
      <img
        src="/assets/images/our-process.png"
        alt="iDataOne Process — Tell us your Idea, We turn it into a plan, Build MVP Fast, Approve & Launch, Evolve"
        style="width:80%;height:auto;display:block;margin:0 auto"
        loading="lazy"
      />
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section style="background:linear-gradient(135deg,#050d1a,#0d1535);padding:96px 32px;border-top:1px solid rgba(0,212,255,0.15)">
  <div class="inner">
    <div class="cta-inner">
      <div class="eyebrow" style="color:#00d4ff">Start Building</div>
      <h2 class="cta-h">Have a Software<br><span class="gold">Idea?</span></h2>
      <p class="cta-p">Tell us what you're trying to build. We'll match you with the right technology, delivery model and AI team.</p>
      <div class="cta-btns">
        <a href="/contact" class="btn-p">Talk to Our Delivery Team <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/contact" class="btn-o">Start a Conversation</a>
      </div>
      <div class="cta-alt">The Team You Need. Not the Team You Have to Pay For.</div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
