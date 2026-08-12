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
body{font-family:'Inter',sans-serif;background:#0e0c18;color:#fff;overflow-x:hidden;padding-top:68px}
.section{padding:88px 32px;position:relative}
.inner{max-width:1140px;margin:0 auto}
.eyebrow{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#00d4ff;margin-bottom:14px}
.gold{background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.alt{background:#09071200}
.bar{width:40px;height:2px;background:linear-gradient(90deg,#00d4ff,#f5c518);border-radius:999px;margin-bottom:20px}

/* ── HERO ── */
.hero{min-height:100vh;display:flex;align-items:center;padding:80px 32px 60px;position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 75% 30%,rgba(0,212,255,0.09),transparent 50%),radial-gradient(ellipse at 20% 70%,rgba(245,197,24,0.07),transparent 45%),linear-gradient(135deg,#0e0c18 0%,#130e24 55%,#0e0c18 100%)}
.hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(0,212,255,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(0,212,255,0.04) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.hero-inner{max-width:1140px;margin:0 auto;width:100%;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.hero-left{display:flex;flex-direction:column;align-items:flex-start}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.3}}
.hero-h1{font-size:clamp(38px,5vw,68px);font-weight:900;letter-spacing:-3.5px;line-height:1.02;margin-bottom:16px;text-align:left}
.hero-sub{font-size:17px;font-weight:500;color:rgba(255,255,255,0.5);margin-bottom:28px;letter-spacing:-0.2px;text-align:left}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap;justify-content:flex-start}
.btn-p{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#0891b2,#00d4ff);color:#0e0c18;font-size:14px;font-weight:700;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-p:hover{opacity:0.9;transform:translateY(-1px)}
.btn-o{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(245,197,24,0.4);color:#f5c518;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-o:hover{background:rgba(245,197,24,0.06);transform:translateY(-1px)}
.hero-right{display:flex;align-items:center;justify-content:center}
.hero-visual-img{width:100%;height:auto;display:block;filter:drop-shadow(0 20px 50px rgba(0,0,0,0.45));transition:transform 0.4s ease}
.hero-visual-img:hover{transform:scale(1.02)}
.hero-img{width:100%;border-radius:20px;display:block;border:1px solid rgba(0,212,255,0.15);box-shadow:0 32px 80px rgba(0,0,0,0.5);position:relative}
.hero-img-wrap{position:relative;width:100%}
.hero-img-fade{position:absolute;bottom:0;left:0;right:0;height:28%;background:linear-gradient(transparent,#0e0c18);border-radius:0 0 20px 20px;pointer-events:none}

/* ── STATS BAR ── */
.stats-bar{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:rgba(0,212,255,0.1);border:1px solid rgba(0,212,255,0.1);border-radius:20px;overflow:hidden;margin-top:64px}
.stat{padding:32px 24px;text-align:center;background:#0e0c18;transition:background 0.3s}
.stat:hover{background:#130e24}
.stat-num{font-size:40px;font-weight:900;letter-spacing:-2px;line-height:1;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.stat-label{font-size:12px;color:rgba(255,255,255,0.4);margin-top:6px;line-height:1.4}

/* ── TEAM ── */
.team-head-card{display:grid;grid-template-columns:auto 1fr;gap:32px;align-items:center;padding:32px 40px;background:rgba(0,212,255,0.04);border:1px solid rgba(0,212,255,0.18);border-radius:20px;margin-bottom:24px}
.avatar{width:88px;height:88px;border-radius:50%;overflow:hidden;flex-shrink:0;border:2px solid rgba(0,212,255,0.35);box-shadow:0 0 24px rgba(0,212,255,0.15)}
.head-badge{font-size:10px;font-weight:700;letter-spacing:2px;color:#00d4ff;text-transform:uppercase;margin-bottom:6px}
.head-name{font-size:22px;font-weight:800;letter-spacing:-0.5px;margin-bottom:4px}
.head-title{font-size:13px;color:rgba(0,212,255,0.7);margin-bottom:8px}
.head-bio{font-size:13px;color:rgba(255,255,255,0.45);line-height:1.65}
.ai-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.ai-card{padding:24px 20px;background:rgba(255,255,255,0.02);border:1px solid rgba(245,197,24,0.12);border-radius:18px;transition:border-color 0.3s,transform 0.3s}
.ai-card:hover{border-color:rgba(245,197,24,0.3);transform:translateY(-3px)}
.ai-emoji{font-size:22px;margin-bottom:12px}
.ai-name{font-size:17px;font-weight:800;letter-spacing:-0.5px;color:#f5c518;margin-bottom:2px}
.ai-role{font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:1px;color:rgba(255,255,255,0.35);margin-bottom:8px}
.ai-desc{font-size:12px;color:rgba(255,255,255,0.38);line-height:1.6}
.plus-bar{text-align:center;padding:16px;font-size:12px;color:rgba(255,255,255,0.25);letter-spacing:1px;margin:8px 0}
.plus-bar em{color:#f5c518;font-style:normal}

/* ── COMPARISON ── */
.compare-wrap{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:40px}
.ccard{border-radius:20px;padding:32px}
.ccard-old{background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.06)}
.ccard-new{background:rgba(0,212,255,0.03);border:1px solid rgba(0,212,255,0.18);position:relative;overflow:hidden}
.ccard-new::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(0,212,255,0.07),transparent 60%);pointer-events:none}
.ctitle{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:20px}
.ccard-old .ctitle{color:rgba(255,255,255,0.3)}
.ccard-new .ctitle{color:#00d4ff}
.citem{display:flex;gap:10px;margin-bottom:12px;font-size:13px;color:rgba(255,255,255,0.55);line-height:1.5;align-items:flex-start}
.citem-x::before{content:"—";color:rgba(255,255,255,0.18);flex-shrink:0}
.citem-ok::before{content:"✓";color:#00d4ff;font-weight:700;flex-shrink:0}
.csave{margin-top:24px;padding:20px;background:rgba(245,197,24,0.08);border:1px solid rgba(245,197,24,0.2);border-radius:14px;text-align:center;position:relative;z-index:1}
.csave-n{font-size:36px;font-weight:900;letter-spacing:-2px;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.csave-l{font-size:12px;color:rgba(255,255,255,0.4);margin-top:4px}
.cfootnote{font-size:11px;color:rgba(255,255,255,0.2);font-style:italic;margin-top:12px;text-align:center}

/* ── WORKFLOW ── */
.wf-title{font-size:clamp(28px,3vw,40px);font-weight:800;letter-spacing:-1.5px;margin-bottom:48px;text-align:center}
.wf-steps{display:grid;grid-template-columns:repeat(6,1fr);position:relative}
.wf-steps::before{content:"";position:absolute;top:35px;left:8%;right:8%;height:1px;background:linear-gradient(90deg,transparent,rgba(0,212,255,0.25) 20%,rgba(245,197,24,0.25) 80%,transparent);pointer-events:none}
.wf-step{text-align:center;padding:0 6px;position:relative;z-index:1}
.wf-icon{width:70px;height:70px;border-radius:50%;background:#0e0c18;border:1.5px solid rgba(0,212,255,0.25);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;transition:border-color 0.3s,box-shadow 0.3s}
.wf-step:hover .wf-icon{border-color:#00d4ff;box-shadow:0 0 20px rgba(0,212,255,0.2)}
.wf-step.gold-step .wf-icon{border-color:rgba(245,197,24,0.25)}
.wf-step.gold-step:hover .wf-icon{border-color:#f5c518;box-shadow:0 0 20px rgba(245,197,24,0.2)}
.wf-icon svg{width:22px;height:22px;fill:none;stroke:#00d4ff;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.wf-step.gold-step .wf-icon svg{stroke:#f5c518}
.wf-label{font-size:13px;font-weight:700;color:#fff;margin-bottom:4px}
.wf-desc{font-size:11px;color:rgba(255,255,255,0.33);line-height:1.5}

/* ── ECONOMICS ── */
.econ-inner{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.econ-left h2{font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:12px}
.econ-left p{font-size:14px;color:rgba(255,255,255,0.45);line-height:1.8;margin-bottom:0}
.econ-points{margin-top:32px;display:flex;flex-direction:column;gap:16px}
.ep{display:flex;gap:14px;align-items:flex-start}
.ep-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0;margin-top:5px}
.ep-title{font-size:14px;font-weight:700;color:#fff;margin-bottom:2px}
.ep-desc{font-size:12.5px;color:rgba(255,255,255,0.38);line-height:1.6}
.econ-stat{text-align:center;padding:48px 36px;background:rgba(245,197,24,0.04);border:1px solid rgba(245,197,24,0.18);border-radius:24px}
.econ-n{font-size:80px;font-weight:900;letter-spacing:-5px;line-height:1;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.econ-unit{font-size:36px;font-weight:900;letter-spacing:-2px;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.econ-label{font-size:13px;color:rgba(255,255,255,0.4);margin-top:10px;line-height:1.5}
.econ-note{font-size:11px;color:rgba(255,255,255,0.2);margin-top:10px;font-style:italic}

/* ── CTA ── */
.cta-inner{text-align:center;max-width:600px;margin:0 auto}
.cta-h{font-size:clamp(32px,4.5vw,56px);font-weight:900;letter-spacing:-3px;line-height:1.05;margin-bottom:16px}
.cta-p{font-size:15px;color:rgba(255,255,255,0.45);margin-bottom:32px;line-height:1.7}
.cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
.cta-alt{font-size:12px;color:rgba(255,255,255,0.2);margin-top:18px;font-style:italic}

@media(max-width:1024px){
  .ai-grid{grid-template-columns:1fr 1fr}
  .wf-steps{grid-template-columns:repeat(3,1fr);gap:24px}
  .wf-steps::before{display:none}
  .econ-inner{grid-template-columns:1fr}
  .stats-bar{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .section{padding:64px 20px}
  .hero{padding:52px 20px 48px;min-height:auto}
  .hero-inner{grid-template-columns:1fr}
  .hero-left{align-items:center;text-align:center}
  .hero-h1{text-align:center}
  .hero-sub{text-align:center}
  .hero-ctas{justify-content:center}
  .hero-right{margin-top:8px}
  .team-head-card{grid-template-columns:1fr;text-align:center}
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
    <div class="hero-left">
      <h1 class="hero-h1">Build More.<br><span class="gold">Spend Less.</span></h1>
      <p class="hero-sub">Human-led. AI-powered. Enterprise-ready.</p>
      <div class="hero-ctas">
        <a href="/contact" class="btn-p">Talk to Our Delivery Team <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/case-studies" class="btn-o">See What We've Built <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="hero-right">
      <img src="/assets/images/about-hero-visual.png" alt="iDataOne — Digital Experiences, Business Applications, Modernisation and Cloud platform delivery" class="hero-visual-img" loading="eager"/>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="section alt" style="padding:0">
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
<section class="section">
  <div class="inner">
    <div class="eyebrow">The Team</div>
    <div class="bar"></div>
    <h2 style="font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:8px">One Delivery Head.<br>Four AI Specialists.</h2>
    <p style="font-size:14px;color:rgba(255,255,255,0.4);margin-bottom:40px">Senior human leadership + specialised AI capability. End to end.</p>
    <div class="team-head-card">
      <img src="/assets/images/bala-kandaswamy.jpg" alt="Bala Kandaswamy — Delivery Head, iDataOne" class="avatar" style="width:88px;height:88px;object-fit:cover;object-position:center top">
      <div>
        <div class="head-badge">Delivery Head</div>
        <div class="head-name">Bala Kandaswamy</div>
        <div class="head-title">Software Delivery Leader · 20+ Years</div>
        <div class="head-bio">Architecture, customer alignment, quality and accountability — human-led on every project. Not outsourced. Not automated away.</div>
      </div>
    </div>
    <div class="plus-bar">Supported by four specialised AI team members — each owning a distinct delivery domain. <em>Together, they cover the full stack.</em></div>
    <div class="ai-grid">
      <?php foreach([
        ['⚡','Pixel','Digital Experience','UI/UX, design systems, user journeys and prototypes.'],
        ['🔧','Forge','Software Engineering','Full-stack, APIs, cloud-native and AI-powered development.'],
        ['🔍','Insight','Business Transformation','Requirements, product thinking and business-to-tech translation.'],
        ['🛡️','Sentinel','Cloud Platform','DevOps, Kubernetes, CI/CD, security and scalability.'],
      ] as $m): ?>
      <div class="ai-card">
        <div class="ai-emoji"><?= $m[0] ?></div>
        <div class="ai-name"><?= $m[1] ?></div>
        <div class="ai-role"><?= $m[2] ?></div>
        <div class="ai-desc"><?= $m[3] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- COMPARISON -->
<section class="section alt">
  <div class="inner">
    <div class="eyebrow">The Difference</div>
    <div class="bar"></div>
    <h2 style="font-size:clamp(28px,3.5vw,44px);font-weight:800;letter-spacing:-2px;margin-bottom:0">Enterprise Capability.<br>Without Enterprise Overhead.</h2>
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
<section class="section">
  <div class="inner">
    <div class="eyebrow" style="text-align:center">How We Deliver</div>
    <div class="bar" style="margin:12px auto 0"></div>
    <div class="wf-title" style="margin-top:20px">AI-Assisted. Every Step.</div>
    <div class="wf-steps">
      <?php
      $steps = [
        [false,'M9 9h.01M15 9h.01M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z','Understand','Goals & constraints'],
        [false,'M12 19l7-7 3 3-7 7-3-3z','Design','UX & architecture'],
        [false,'M16 18l6-6-6-6M8 6L2 12l6 6','Build','AI-assisted engineering'],
        [true,'M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0','Validate','Quality & testing'],
        [true,'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5','Deploy','Cloud & DevOps'],
        [true,'M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4','Evolve','Iterate & improve'],
      ];
      foreach($steps as $s): ?>
      <div class="wf-step<?= $s[0]?' gold-step':'' ?>">
        <div class="wf-icon"><svg viewBox="0 0 24 24"><path d="<?= $s[1] ?>"/></svg></div>
        <div class="wf-label"><?= $s[2] ?></div>
        <div class="wf-desc"><?= $s[3] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ECONOMICS -->
<section class="section alt">
  <div class="inner">
    <div class="econ-inner">
      <div class="econ-left">
        <div class="eyebrow">Delivery Economics</div>
        <div class="bar"></div>
        <h2>More Engineering.<br>Less Overhead.</h2>
        <p>AI accelerates research, design, development, testing and documentation across the full lifecycle — compressing timelines without compressing quality.</p>
        <div class="econ-points">
          <?php foreach([
            ['#00d4ff','Lean Teams','Only the capability your project needs. No bench, no bloat.'],
            ['#00d4ff','AI-Accelerated','AI handles and speeds up repetitive engineering work — humans own the decisions.'],
            ['#f5c518','Senior Oversight','Experienced leadership on every project, every day.'],
          ] as $ep): ?>
          <div class="ep">
            <div class="ep-dot" style="background:<?= $ep[0] ?>"></div>
            <div><div class="ep-title"><?= $ep[1] ?></div><div class="ep-desc"><?= $ep[2] ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="econ-stat">
        <div class="econ-n">70<span class="econ-unit">%</span></div>
        <div class="econ-label">Up to 70% lower development cost<br>vs. traditional delivery models</div>
        <div class="econ-note">*Varies by project scope, technology and delivery model.</div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="section" style="padding-bottom:120px">
  <div class="inner">
    <div class="cta-inner">
      <div class="eyebrow">Start Building</div>
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
