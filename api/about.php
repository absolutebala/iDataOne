<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About iDataOne | Human-Led, AI-Powered Software Delivery</title>
<meta name="description" content="iDataOne combines experienced software delivery leadership with specialised AI digital teams to build everything from MVPs to complex enterprise platforms — leaner, faster, at significantly lower cost.">
<meta name="keywords" content="AI-powered software delivery, human-led AI team, software development company, enterprise software, MVP development, iDataOne about">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/about">
<meta property="og:type" content="website">
<meta property="og:title" content="About iDataOne | Human-Led, AI-Powered Software Delivery">
<meta property="og:description" content="iDataOne combines experienced software delivery leadership with specialised AI digital teams to build everything from MVPs to complex enterprise platforms — leaner, faster, at significantly lower cost.">
<meta property="og:url" content="https://idataone.com/about">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="About iDataOne | Human-Led, AI-Powered Software Delivery">
<meta name="twitter:description" content="iDataOne combines experienced software delivery leadership with specialised AI digital teams — leaner delivery, lower cost.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About iDataOne",
  "url": "https://idataone.com/about",
  "description": "iDataOne builds AI-first digital products and enterprise software using a human-led, AI-powered delivery model.",
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}}
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:#0a0f1e;color:#fff;overflow-x:hidden;padding-top:68px}

/* ── SHARED ── */
.section{padding:96px 32px;position:relative}
.section-inner{max-width:1140px;margin:0 auto}
.eyebrow{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#00d4ff;margin-bottom:16px}
.gold{background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.teal{color:#00d4ff}
.alt-bg{background:#060b15}
.divider{width:48px;height:2px;background:linear-gradient(90deg,#00d4ff,#f5c518);border-radius:999px;margin:24px 0}

/* ── HERO ── */
.hero{
  min-height:calc(100vh - 68px);
  display:flex;align-items:center;
  padding:80px 32px;
  position:relative;overflow:hidden;
  background:
    radial-gradient(ellipse at 75% 30%,rgba(0,212,255,0.1),transparent 50%),
    radial-gradient(ellipse at 20% 70%,rgba(245,197,24,0.07),transparent 45%),
    linear-gradient(135deg,#0a0f1e 0%,#0d1535 60%,#0a0f1e 100%);
}
.hero-grid{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(0,212,255,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(0,212,255,0.04) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.hero-inner{max-width:1140px;margin:0 auto;width:100%;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.hero-left{}
.hero-tag{display:inline-flex;align-items:center;gap:8px;padding:6px 16px;border-radius:999px;border:1px solid rgba(0,212,255,0.2);background:rgba(0,212,255,0.06);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#00d4ff;margin-bottom:28px}
.hero-tag-dot{width:6px;height:6px;border-radius:50%;background:#00d4ff;animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.3}}
.hero-h1{font-size:clamp(40px,5vw,68px);font-weight:900;letter-spacing:-3px;line-height:1.02;color:#fff;margin-bottom:16px}
.hero-sub{font-size:19px;font-weight:600;color:rgba(255,255,255,0.6);letter-spacing:-0.3px;margin-bottom:20px}
.hero-p{font-size:16px;color:rgba(255,255,255,0.55);line-height:1.8;margin-bottom:36px;max-width:480px}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#0891b2,#00d4ff);color:#0a0f1e;font-size:14px;font-weight:700;letter-spacing:0.5px;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-outline{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(245,197,24,0.4);color:#f5c518;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-outline:hover{background:rgba(245,197,24,0.06);transform:translateY(-1px)}

/* Hero right — team illustration placeholder -->
.hero-visual{position:relative}
.hero-team-card{
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(0,212,255,0.15);
  border-radius:24px;
  padding:40px;
  backdrop-filter:blur(20px);
  position:relative;overflow:hidden;
}
.hero-team-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 20%,rgba(0,212,255,0.08),transparent 60%);pointer-events:none}
.team-model-label{font-size:10px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:rgba(0,212,255,0.5);margin-bottom:24px}
.team-head{display:flex;align-items:center;gap:16px;padding:16px 20px;background:rgba(0,212,255,0.08);border:1px solid rgba(0,212,255,0.2);border-radius:14px;margin-bottom:16px}
.team-head-avatar{width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#0891b2,#00d4ff);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;color:#0a0f1e;flex-shrink:0}
.team-head-name{font-size:15px;font-weight:700;color:#fff}
.team-head-role{font-size:11px;color:#00d4ff;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin-top:2px}
.team-head-exp{font-size:11px;color:rgba(255,255,255,0.4);margin-top:2px}
.team-ai-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.ai-member{padding:14px 16px;background:rgba(245,197,24,0.04);border:1px solid rgba(245,197,24,0.12);border-radius:12px;transition:border-color 0.2s}
.ai-member:hover{border-color:rgba(245,197,24,0.3)}
.ai-name{font-size:13px;font-weight:700;color:#f5c518;margin-bottom:2px}
.ai-role{font-size:10px;color:rgba(255,255,255,0.4);line-height:1.4}
.ai-badge{display:inline-block;padding:2px 7px;border-radius:4px;background:rgba(245,197,24,0.12);font-size:9px;font-weight:700;color:rgba(245,197,24,0.7);letter-spacing:1px;margin-bottom:6px}
.team-equation{text-align:center;padding:16px;font-size:12px;color:rgba(0,212,255,0.5);font-weight:600;letter-spacing:1px;margin-top:12px}
.team-equation span{color:#f5c518}

/* ── WHY ── */
.why-grid{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start;margin-top:48px}
.why-text h2{font-size:clamp(32px,3.5vw,48px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#fff;margin-bottom:20px}
.why-text p{font-size:15px;color:rgba(255,255,255,0.55);line-height:1.85;margin-bottom:16px}
.why-callout{padding:24px 28px;border-left:3px solid #00d4ff;background:rgba(0,212,255,0.04);border-radius:0 12px 12px 0;font-size:15px;color:rgba(255,255,255,0.75);line-height:1.7;font-style:italic;margin-top:24px}

/* ── COMPARISON ── */
.compare-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:48px}
.compare-card{border-radius:20px;padding:36px 32px}
.compare-traditional{background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.08)}
.compare-idataone{background:rgba(0,212,255,0.04);border:1px solid rgba(0,212,255,0.2);position:relative}
.compare-idataone::before{content:"";position:absolute;inset:0;border-radius:20px;background:radial-gradient(ellipse at 50% 0%,rgba(0,212,255,0.08),transparent 60%);pointer-events:none}
.compare-title{font-size:14px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:24px}
.compare-traditional .compare-title{color:rgba(255,255,255,0.35)}
.compare-idataone .compare-title{color:#00d4ff}
.compare-item{display:flex;align-items:flex-start;gap:12px;margin-bottom:16px;font-size:14px;color:rgba(255,255,255,0.65);line-height:1.5}
.compare-item-bad::before{content:"—";color:rgba(255,255,255,0.2);font-weight:700;flex-shrink:0}
.compare-item-good::before{content:"✓";color:#00d4ff;font-weight:700;flex-shrink:0}
.compare-highlight{margin-top:24px;padding:16px 20px;background:rgba(245,197,24,0.1);border:1px solid rgba(245,197,24,0.25);border-radius:12px;text-align:center}
.compare-highlight-num{font-size:28px;font-weight:900;letter-spacing:-1px;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.compare-highlight-label{font-size:12px;color:rgba(255,255,255,0.45);margin-top:4px;line-height:1.5}
.compare-footnote{font-size:11px;color:rgba(255,255,255,0.25);margin-top:16px;font-style:italic;text-align:center}

/* ── TEAM SECTION ── */
.team-section-header{text-align:center;margin-bottom:64px}
.team-section-header h2{font-size:clamp(32px,3.5vw,48px);font-weight:800;letter-spacing:-2px;color:#fff;margin-bottom:12px}
.team-section-header p{font-size:16px;color:rgba(255,255,255,0.5);max-width:480px;margin:0 auto}
.team-delivery-head{display:grid;grid-template-columns:auto 1fr;gap:40px;align-items:center;padding:40px 48px;background:rgba(0,212,255,0.04);border:1px solid rgba(0,212,255,0.2);border-radius:24px;margin-bottom:32px;position:relative;overflow:hidden}
.team-delivery-head::before{content:"";position:absolute;right:-40px;top:-40px;width:200px;height:200px;border-radius:50%;background:radial-gradient(circle,rgba(0,212,255,0.08),transparent 70%);pointer-events:none}
.delivery-head-avatar{width:90px;height:90px;border-radius:50%;background:linear-gradient(135deg,#0891b2,#00d4ff);display:flex;align-items:center;justify-content:center;font-size:32px;font-weight:900;color:#0a0f1e;flex-shrink:0;border:3px solid rgba(0,212,255,0.3)}
.delivery-head-tag{display:inline-block;padding:4px 12px;border-radius:999px;background:rgba(0,212,255,0.12);border:1px solid rgba(0,212,255,0.25);font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#00d4ff;margin-bottom:10px}
.delivery-head-name{font-size:26px;font-weight:800;letter-spacing:-1px;color:#fff;margin-bottom:4px}
.delivery-head-title{font-size:14px;color:rgba(0,212,255,0.8);font-weight:600;margin-bottom:12px}
.delivery-head-bio{font-size:14px;color:rgba(255,255,255,0.5);line-height:1.7}
.ai-team-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.ai-team-card{padding:28px 24px;background:rgba(255,255,255,0.02);border:1px solid rgba(245,197,24,0.12);border-radius:20px;transition:border-color 0.3s,transform 0.3s,background 0.3s;position:relative;overflow:hidden}
.ai-team-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(245,197,24,0.05),transparent 60%);pointer-events:none;opacity:0;transition:opacity 0.3s}
.ai-team-card:hover{border-color:rgba(245,197,24,0.3);transform:translateY(-4px);background:rgba(245,197,24,0.03)}
.ai-team-card:hover::before{opacity:1}
.ai-card-badge{font-size:9px;font-weight:700;letter-spacing:2px;color:rgba(245,197,24,0.6);text-transform:uppercase;margin-bottom:16px}
.ai-card-avatar{width:52px;height:52px;border-radius:14px;background:rgba(245,197,24,0.1);border:1px solid rgba(245,197,24,0.2);display:flex;align-items:center;justify-content:center;font-size:20px;margin-bottom:16px}
.ai-card-name{font-size:18px;font-weight:800;letter-spacing:-0.5px;color:#f5c518;margin-bottom:4px}
.ai-card-title{font-size:11px;font-weight:600;color:rgba(255,255,255,0.4);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px}
.ai-card-desc{font-size:12.5px;color:rgba(255,255,255,0.45);line-height:1.65}
.team-connector{text-align:center;padding:20px;font-size:13px;font-weight:600;color:rgba(255,255,255,0.3);letter-spacing:1px}
.team-connector span{color:#f5c518}

/* ── WORKFLOW ── */
.workflow-header{text-align:center;margin-bottom:64px}
.workflow-header h2{font-size:clamp(30px,3.5vw,44px);font-weight:800;letter-spacing:-2px;color:#fff;margin-bottom:12px}
.workflow-steps{display:grid;grid-template-columns:repeat(6,1fr);gap:0;position:relative}
.workflow-steps::before{content:"";position:absolute;top:36px;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(0,212,255,0.3) 20%,rgba(0,212,255,0.3) 80%,transparent);pointer-events:none}
.workflow-step{text-align:center;padding:0 8px;position:relative;z-index:1}
.workflow-icon{width:72px;height:72px;border-radius:50%;background:#0a0f1e;border:1.5px solid rgba(0,212,255,0.3);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;transition:border-color 0.3s,box-shadow 0.3s}
.workflow-step:hover .workflow-icon{border-color:#00d4ff;box-shadow:0 0 24px rgba(0,212,255,0.2)}
.workflow-icon svg{width:24px;height:24px;fill:none;stroke:#00d4ff;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.workflow-step:nth-child(4) .workflow-icon,.workflow-step:nth-child(5) .workflow-icon,.workflow-step:nth-child(6) .workflow-icon{border-color:rgba(245,197,24,0.3)}
.workflow-step:nth-child(4) .workflow-icon svg,.workflow-step:nth-child(5) .workflow-icon svg,.workflow-step:nth-child(6) .workflow-icon svg{stroke:#f5c518}
.workflow-step:nth-child(4):hover .workflow-icon,.workflow-step:nth-child(5):hover .workflow-icon,.workflow-step:nth-child(6):hover .workflow-icon{border-color:#f5c518;box-shadow:0 0 24px rgba(245,197,24,0.2)}
.workflow-label{font-size:14px;font-weight:700;color:#fff;margin-bottom:6px}
.workflow-desc{font-size:11.5px;color:rgba(255,255,255,0.38);line-height:1.55}

/* ── WHAT WE BUILD ── */
.build-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:48px}
.build-card{padding:28px;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.06);border-radius:18px;transition:border-color 0.3s,background 0.3s;cursor:default}
.build-card:hover{border-color:rgba(0,212,255,0.2);background:rgba(0,212,255,0.03)}
.build-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.build-icon svg{width:20px;height:20px;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.build-title{font-size:16px;font-weight:700;color:#fff;margin-bottom:8px}
.build-desc{font-size:13px;color:rgba(255,255,255,0.42);line-height:1.65}

/* ── SPECTRUM ── */
.spectrum{margin-top:48px}
.spectrum-track{display:grid;grid-template-columns:1fr 1fr 1fr;gap:2px;border-radius:16px;overflow:hidden;margin-bottom:32px}
.spectrum-band{padding:28px 24px}
.spectrum-band:nth-child(1){background:rgba(0,212,255,0.06);border:1px solid rgba(0,212,255,0.15)}
.spectrum-band:nth-child(2){background:rgba(100,160,255,0.06);border:1px solid rgba(100,160,255,0.12)}
.spectrum-band:nth-child(3){background:rgba(245,197,24,0.05);border:1px solid rgba(245,197,24,0.15)}
.spectrum-band-label{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:12px}
.spectrum-band:nth-child(1) .spectrum-band-label{color:#00d4ff}
.spectrum-band:nth-child(2) .spectrum-band-label{color:rgba(130,180,255,0.8)}
.spectrum-band:nth-child(3) .spectrum-band-label{color:#f5c518}
.spectrum-items{display:flex;flex-direction:column;gap:6px}
.spectrum-item{font-size:13px;color:rgba(255,255,255,0.5);display:flex;align-items:center;gap:8px}
.spectrum-item::before{content:"";width:4px;height:4px;border-radius:50%;background:currentColor;opacity:0.5;flex-shrink:0}
.spectrum-cta{text-align:center;padding:32px;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.06);border-radius:16px;font-size:15px;color:rgba(255,255,255,0.5);line-height:1.7}

/* ── PHILOSOPHY ── */
.philosophy{text-align:center;max-width:800px;margin:0 auto}
.philosophy h2{font-size:clamp(30px,4vw,52px);font-weight:800;letter-spacing:-2px;color:#fff;margin-bottom:24px}
.philosophy-sub{font-size:17px;color:rgba(255,255,255,0.55);line-height:1.85;margin-bottom:40px}
.philosophy-pillars{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;text-align:left;margin-top:48px}
.pillar{padding:28px;border-radius:18px;border:1px solid rgba(255,255,255,0.06)}
.pillar-icon{font-size:24px;margin-bottom:14px}
.pillar-title{font-size:15px;font-weight:700;color:#fff;margin-bottom:8px}
.pillar-desc{font-size:13px;color:rgba(255,255,255,0.42);line-height:1.65}

/* ── ECONOMICS ── */
.economics-inner{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.economics-left h2{font-size:clamp(30px,3.5vw,44px);font-weight:800;letter-spacing:-2px;color:#fff;margin-bottom:16px}
.economics-left p{font-size:15px;color:rgba(255,255,255,0.5);line-height:1.8;margin-bottom:28px}
.economics-stat{text-align:center;padding:36px;background:rgba(245,197,24,0.05);border:1px solid rgba(245,197,24,0.2);border-radius:20px}
.economics-num{font-size:64px;font-weight:900;letter-spacing:-4px;line-height:1;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.economics-label{font-size:14px;color:rgba(255,255,255,0.5);margin-top:8px;line-height:1.5}
.economics-note{font-size:11px;color:rgba(255,255,255,0.25);margin-top:12px;font-style:italic}
.economics-points{display:flex;flex-direction:column;gap:20px;margin-top:32px}
.econ-point{display:flex;gap:16px;align-items:flex-start}
.econ-point-icon{width:40px;height:40px;border-radius:10px;background:rgba(0,212,255,0.08);border:1px solid rgba(0,212,255,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.econ-point-icon svg{width:17px;height:17px;fill:none;stroke:#00d4ff;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.econ-point-title{font-size:14px;font-weight:700;color:#fff;margin-bottom:3px}
.econ-point-desc{font-size:13px;color:rgba(255,255,255,0.42);line-height:1.6}

/* ── FINAL CTA ── */
.final-cta{text-align:center;max-width:640px;margin:0 auto}
.final-cta h2{font-size:clamp(30px,4vw,52px);font-weight:900;letter-spacing:-2.5px;color:#fff;margin-bottom:20px;line-height:1.05}
.final-cta p{font-size:16px;color:rgba(255,255,255,0.5);line-height:1.8;margin-bottom:36px}
.final-cta-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}
.final-alt{font-size:13px;color:rgba(255,255,255,0.25);margin-top:20px;font-style:italic}

/* Responsive */
@media(max-width:1024px){
  .ai-team-grid{grid-template-columns:1fr 1fr}
  .workflow-steps{grid-template-columns:repeat(3,1fr);gap:24px}
  .workflow-steps::before{display:none}
  .economics-inner{grid-template-columns:1fr}
}
@media(max-width:768px){
  .section{padding:64px 20px}
  .hero{padding:60px 20px}
  .hero-inner{grid-template-columns:1fr}
  .why-grid{grid-template-columns:1fr}
  .compare-grid{grid-template-columns:1fr}
  .team-delivery-head{grid-template-columns:1fr;text-align:center}
  .delivery-head-avatar{margin:0 auto}
  .ai-team-grid{grid-template-columns:1fr 1fr}
  .build-grid{grid-template-columns:1fr}
  .philosophy-pillars{grid-template-columns:1fr}
  .spectrum-track{grid-template-columns:1fr}
  .workflow-steps{grid-template-columns:1fr 1fr}
}
@media(max-width:480px){
  .ai-team-grid{grid-template-columns:1fr}
  .hero-h1{font-size:36px;letter-spacing:-2px}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>
<?php $current_page = 'about'; include __DIR__ . '/_nav.php'; ?>

<!-- ── HERO ── -->
<section class="hero">
  <div class="hero-grid"></div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-tag"><span class="hero-tag-dot"></span> AI-First Delivery</div>
      <h1 class="hero-h1">Build More.<br><span class="gold">Spend Less.</span></h1>
      <div class="hero-sub">Human-led. AI-powered. Enterprise-ready.</div>
      <p class="hero-p">From simple applications to complex enterprise platforms, iDataOne combines experienced software delivery leadership with specialised AI digital specialists to deliver high-quality software with a leaner delivery model.</p>
      <div class="hero-ctas">
        <a href="/contact" class="btn-primary">Talk to Our Delivery Team <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/digital" class="btn-outline">Explore What We Build <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-team-card">
        <div class="team-model-label">The iDataOne Delivery Team</div>
        <div class="team-head">
          <div class="team-head-avatar">B</div>
          <div>
            <div class="team-head-name">Bala Kandaswamy</div>
            <div class="team-head-role">Delivery Head</div>
            <div class="team-head-exp">20+ years software delivery leadership</div>
          </div>
        </div>
        <div class="ai-team-grid">
          <div class="ai-member">
            <div class="ai-badge">AI</div>
            <div class="ai-name">Pixel</div>
            <div class="ai-role">Digital Experience Specialist — UI/UX, design systems, user journeys</div>
          </div>
          <div class="ai-member">
            <div class="ai-badge">AI</div>
            <div class="ai-name">Forge</div>
            <div class="ai-role">Software Engineering — full-stack, APIs, cloud-native architecture</div>
          </div>
          <div class="ai-member">
            <div class="ai-badge">AI</div>
            <div class="ai-name">Insight</div>
            <div class="ai-role">Business Transformation — analysis, product thinking, requirements</div>
          </div>
          <div class="ai-member">
            <div class="ai-badge">AI</div>
            <div class="ai-name">Sentinel</div>
            <div class="ai-role">Cloud Platform — DevOps, Kubernetes, CI/CD, security, scalability</div>
          </div>
        </div>
        <div class="team-equation">Human leadership + AI capability = <span>lean, capable delivery</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ── WHY WE BUILT IT THIS WAY ── -->
<section class="section alt-bg">
  <div class="section-inner">
    <div class="why-grid">
      <div class="why-text">
        <div class="eyebrow">Our Philosophy</div>
        <div class="divider"></div>
        <h2>Why We Built<br>iDataOne This Way</h2>
        <p>Traditional software projects often require large teams of specialists, layers of management and significant overhead — most of which is coordination cost, not engineering value.</p>
        <p>iDataOne takes a different approach. We pair experienced human delivery leadership with specialised AI-powered capabilities. AI accelerates the time-consuming engineering work. Experienced people remain responsible for architecture, decisions, quality, communication and accountability.</p>
        <p>The result is a smaller, highly capable team — without sacrificing depth.</p>
        <div class="why-callout">AI amplifies experienced people. It doesn't replace them.</div>
      </div>
      <div>
        <div style="background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.06);border-radius:20px;padding:36px">
          <div style="font-size:13px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,0.3);margin-bottom:24px">What this means for you</div>
          <?php
          $points = [
            ['#00d4ff','Senior delivery leadership on every project — not junior execution.'],
            ['#00d4ff','Specialised AI capability across design, engineering, analysis and cloud.'],
            ['#f5c518','Faster iteration cycles with AI-assisted development.'],
            ['#f5c518','Lean team structure — only the capability your project needs.'],
            ['#f5c518','Up to 70% lower development cost compared with traditional team models.'],
          ];
          foreach($points as $p): ?>
          <div style="display:flex;gap:14px;align-items:flex-start;margin-bottom:16px">
            <div style="width:8px;height:8px;border-radius:50%;background:<?= $p[0] ?>;margin-top:5px;flex-shrink:0"></div>
            <div style="font-size:14px;color:rgba(255,255,255,0.6);line-height:1.6"><?= $p[1] ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── COMPARISON ── -->
<section class="section">
  <div class="section-inner">
    <div class="eyebrow">The Difference</div>
    <div class="divider"></div>
    <h2 style="font-size:clamp(30px,3.5vw,48px);font-weight:800;letter-spacing:-2px;color:#fff;margin-bottom:8px">Enterprise Capability.<br>Without Enterprise Overhead.</h2>
    <div class="compare-grid">
      <div class="compare-card compare-traditional">
        <div class="compare-title">Traditional Delivery Model</div>
        <div class="compare-item compare-item-bad">Large engineering teams across multiple specialist roles</div>
        <div class="compare-item compare-item-bad">Multiple layers of management and coordination</div>
        <div class="compare-item compare-item-bad">Longer onboarding and ramp-up cycles</div>
        <div class="compare-item compare-item-bad">Higher overhead and resource cost</div>
        <div class="compare-item compare-item-bad">Slower iteration due to team coordination complexity</div>
      </div>
      <div class="compare-card compare-idataone">
        <div class="compare-title">iDataOne AI Delivery Model</div>
        <div class="compare-item compare-item-good">Experienced Delivery Head with 20+ years of leadership</div>
        <div class="compare-item compare-item-good">Four specialised AI digital team members</div>
        <div class="compare-item compare-item-good">Lean team — only what the project actually needs</div>
        <div class="compare-item compare-item-good">AI-assisted engineering across the full delivery lifecycle</div>
        <div class="compare-item compare-item-good">Faster iteration. Lower delivery overhead.</div>
        <div class="compare-highlight">
          <div class="compare-highlight-num">Up to 70%</div>
          <div class="compare-highlight-label">lower development cost</div>
        </div>
        <div class="compare-footnote">*Potential savings vary by project scope, complexity, technology stack and delivery model.</div>
      </div>
    </div>
  </div>
</section>

<!-- ── MEET THE TEAM ── -->
<section class="section alt-bg">
  <div class="section-inner">
    <div class="team-section-header">
      <div class="eyebrow">The Team</div>
      <div class="divider" style="margin:12px auto 20px"></div>
      <h2>Meet Your AI Delivery Team</h2>
      <p>One Delivery Head. Four AI Specialists. Infinite Possibilities.</p>
    </div>
    <div class="team-delivery-head">
      <div class="delivery-head-avatar">B</div>
      <div>
        <div class="delivery-head-tag">Delivery Head</div>
        <div class="delivery-head-name">Bala Kandaswamy</div>
        <div class="delivery-head-title">Software Delivery Leader · 20+ Years Experience</div>
        <div class="delivery-head-bio">Responsible for delivery leadership, architecture decisions, customer alignment, quality and execution. Every project at iDataOne is led by a senior human professional with real, hands-on delivery experience — not delegated down to junior resources.</div>
      </div>
    </div>
    <div class="team-connector">The delivery team is supported by four specialised AI members — each focused on a distinct capability domain. Together, they cover the full breadth of modern software delivery. <span>One team. End to end.</span></div>
    <div class="ai-team-grid">
      <?php
      $ai_team = [
        ['⚡','Pixel','Digital Experience Specialist','UI/UX design, design systems, user journeys, prototypes and intuitive digital experiences. Pixel ensures every product is as thoughtful to use as it is technically sound.'],
        ['🔧','Forge','Software Engineering Specialist','Full-stack engineering, application architecture, APIs, cloud-native development and AI-powered software delivery. Forge builds the product.'],
        ['🔍','Insight','Business Transformation Specialist','Business analysis, requirements definition, process optimisation, product thinking and translating business goals into technology solutions that actually work.'],
        ['🛡️','Sentinel','Cloud Platform Specialist','Cloud infrastructure, DevOps, Kubernetes, CI/CD pipelines, automation, security, scalability and platform engineering. Sentinel keeps everything running.'],
      ];
      foreach($ai_team as $m): ?>
      <div class="ai-team-card">
        <div class="ai-card-badge">AI Specialist</div>
        <div class="ai-card-avatar"><?= $m[0] ?></div>
        <div class="ai-card-name"><?= $m[1] ?></div>
        <div class="ai-card-title"><?= $m[2] ?></div>
        <div class="ai-card-desc"><?= $m[3] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── HOW WE DELIVER ── -->
<section class="section">
  <div class="section-inner">
    <div class="workflow-header">
      <div class="eyebrow">How We Deliver</div>
      <div class="divider" style="margin:12px auto 20px"></div>
      <h2>The Full Delivery Lifecycle</h2>
    </div>
    <div class="workflow-steps">
      <?php
      $steps = [
        ['M9 9h.01M15 9h.01M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM8 14s1.5 2 4 2 4-2 4-2','Understand','Business goals, requirements and constraints'],
        ['M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z','Design','UX, architecture and solution design'],
        ['M16 18l6-6-6-6M8 6L2 12l6 6','Build','AI-assisted software engineering'],
        ['M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0','Validate','Testing, quality and business validation'],
        ['M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5','Deploy','Cloud, DevOps and production deployment'],
        ['M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83','Evolve','Continuous improvement and optimisation'],
      ];
      foreach($steps as $s): ?>
      <div class="workflow-step">
        <div class="workflow-icon">
          <svg viewBox="0 0 24 24"><path d="<?= $s[0] ?>"/></svg>
        </div>
        <div class="workflow-label"><?= $s[1] ?></div>
        <div class="workflow-desc"><?= $s[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── WHAT WE BUILD ── -->
<section class="section alt-bg">
  <div class="section-inner">
    <div class="eyebrow">What We Build</div>
    <div class="divider"></div>
    <h2 style="font-size:clamp(30px,3.5vw,44px);font-weight:800;letter-spacing:-2px;color:#fff;margin-bottom:8px">From an Idea to an Enterprise Platform</h2>
    <p style="font-size:15px;color:rgba(255,255,255,0.45);margin-bottom:0">Whether you need to validate an idea quickly or engineer a complex enterprise platform, we assemble the right delivery capability around the problem.</p>
    <div class="build-grid">
      <?php
      $cards = [
        ['#00d4ff','M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z','Product Development','MVPs, SaaS products and digital products built lean and fast, with AI-assisted engineering from day one.'],
        ['#00d4ff','M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2zM17 21v-8H7v8M7 3v5h8','Enterprise Applications','Complex business applications and enterprise platforms designed to scale with your organisation.'],
        ['#f5c518','M12 2a2 2 0 0 1 2 2c0 .74-.4 1.38-1 1.72V7h1a7 7 0 0 1 7 7h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v1a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-1H1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1a7 7 0 0 1 7-7h1V5.72c-.6-.34-1-.98-1-1.72a2 2 0 0 1 2-2z','AI Solutions','AI-powered applications, intelligent assistants, automation workflows and AI-augmented software products.'],
        ['#f5c518','M3 3v18h18M18.7 8l-5.1 5.2-2.8-2.7L7 14.3','Data & Analytics','Data platforms, business intelligence tools and analytics systems that turn fragmented data into actionable insight.'],
        ['#00d4ff','M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z','Cloud & Platform Engineering','Cloud-native applications, DevOps pipelines, Kubernetes infrastructure and scalable platform engineering.'],
        ['#f5c518','M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zM4 8h16','Legacy Modernisation','Modernising legacy applications and driving digital transformation for established organisations.'],
      ];
      foreach($cards as $card): ?>
      <div class="build-card">
        <div class="build-icon" style="background:rgba(<?= $card[0]==='#00d4ff'?'0,212,255':'245,197,24' ?>,0.08);border:1px solid rgba(<?= $card[0]==='#00d4ff'?'0,212,255':'245,197,24' ?>,0.15)">
          <svg viewBox="0 0 24 24" stroke="<?= $card[0] ?>"><path d="<?= $card[1] ?>"/></svg>
        </div>
        <div class="build-title"><?= $card[2] ?></div>
        <div class="build-desc"><?= $card[3] ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Spectrum -->
    <div class="spectrum" style="margin-top:64px">
      <div class="eyebrow" style="text-align:center;margin-bottom:24px">From simple to complex</div>
      <div class="spectrum-track">
        <div class="spectrum-band">
          <div class="spectrum-band-label">Simple</div>
          <div class="spectrum-items">
            <div class="spectrum-item" style="color:#00d4ff">Landing pages</div>
            <div class="spectrum-item" style="color:#00d4ff">Internal tools</div>
            <div class="spectrum-item" style="color:#00d4ff">MVPs</div>
            <div class="spectrum-item" style="color:#00d4ff">Automation</div>
          </div>
        </div>
        <div class="spectrum-band">
          <div class="spectrum-band-label">Growing</div>
          <div class="spectrum-items">
            <div class="spectrum-item" style="color:rgba(130,180,255,0.8)">SaaS applications</div>
            <div class="spectrum-item" style="color:rgba(130,180,255,0.8)">Customer portals</div>
            <div class="spectrum-item" style="color:rgba(130,180,255,0.8)">Business platforms</div>
            <div class="spectrum-item" style="color:rgba(130,180,255,0.8)">AI applications</div>
          </div>
        </div>
        <div class="spectrum-band">
          <div class="spectrum-band-label">Complex</div>
          <div class="spectrum-items">
            <div class="spectrum-item" style="color:#f5c518">Enterprise platforms</div>
            <div class="spectrum-item" style="color:#f5c518">Data systems</div>
            <div class="spectrum-item" style="color:#f5c518">Cloud platforms</div>
            <div class="spectrum-item" style="color:#f5c518">Legacy modernisation</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── PHILOSOPHY ── -->
<section class="section" style="text-align:center">
  <div class="section-inner">
    <div class="philosophy">
      <div class="eyebrow">The Philosophy</div>
      <div class="divider" style="margin:12px auto 24px"></div>
      <h2>AI Doesn't Replace Experience.<br><span class="gold">It Multiplies It.</span></h2>
      <p class="philosophy-sub">Our AI specialists accelerate the work. Experienced people make the decisions. Architecture, product thinking, customer communication, quality and accountability remain human-led. The result is a delivery model designed to give clients more engineering capability — without carrying the cost and complexity of a traditional large team.</p>
    </div>
    <div class="philosophy-pillars">
      <div class="pillar" style="background:rgba(0,212,255,0.03);border-color:rgba(0,212,255,0.12)">
        <div class="pillar-icon">🧠</div>
        <div class="pillar-title" style="color:#00d4ff">Human Decisions</div>
        <div class="pillar-desc">Architecture, quality, customer alignment and delivery accountability are always human-led. AI supports — it does not own.</div>
      </div>
      <div class="pillar" style="background:rgba(245,197,24,0.03);border-color:rgba(245,197,24,0.12)">
        <div class="pillar-icon">⚡</div>
        <div class="pillar-title" style="color:#f5c518">AI Acceleration</div>
        <div class="pillar-desc">AI dramatically accelerates research, design, engineering, testing and documentation — compressing timelines without compressing quality.</div>
      </div>
      <div class="pillar" style="background:rgba(0,212,255,0.03);border-color:rgba(0,212,255,0.12)">
        <div class="pillar-icon">🎯</div>
        <div class="pillar-title" style="color:#00d4ff">Better Outcomes</div>
        <div class="pillar-desc">Clients get more capability, faster delivery and lower cost — without managing a large team or carrying unnecessary overhead.</div>
      </div>
    </div>
  </div>
</section>

<!-- ── DELIVERY ECONOMICS ── -->
<section class="section alt-bg">
  <div class="section-inner">
    <div class="economics-inner">
      <div class="economics-left">
        <div class="eyebrow">Delivery Economics</div>
        <div class="divider"></div>
        <h2>More Engineering.<br>Less Overhead.</h2>
        <p>Our lean AI-assisted delivery model can significantly reduce the cost of building and maintaining software compared with traditional team structures, depending on the project.</p>
        <div class="economics-points">
          <div class="econ-point">
            <div class="econ-point-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
            <div><div class="econ-point-title">Lean Teams</div><div class="econ-point-desc">Only the capabilities your project actually needs — no bloat, no bench, no coordination overhead.</div></div>
          </div>
          <div class="econ-point">
            <div class="econ-point-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
            <div><div class="econ-point-title">AI-Assisted Execution</div><div class="econ-point-desc">AI accelerates research, design, development, testing and documentation across the full lifecycle.</div></div>
          </div>
          <div class="econ-point">
            <div class="econ-point-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <div><div class="econ-point-title">Experienced Leadership</div><div class="econ-point-desc">Senior human oversight throughout delivery — not outsourced to junior resources or automated away.</div></div>
          </div>
        </div>
      </div>
      <div>
        <div class="economics-stat">
          <div class="economics-num">70%</div>
          <div class="economics-label">Up to 70% lower development cost compared with traditional delivery models</div>
          <div class="economics-note">*Varies by project scope, complexity, technology stack and delivery model.</div>
        </div>
        <div style="margin-top:24px;padding:24px;background:rgba(0,212,255,0.03);border:1px solid rgba(0,212,255,0.12);border-radius:16px">
          <div style="font-size:13px;color:rgba(255,255,255,0.4);line-height:1.7">iDataOne's delivery model is not simply a cost-cutting exercise. It is a deliberate architectural decision — combining experienced human leadership with AI-powered execution — to build better software, faster and at a cost structure that makes serious software delivery accessible to more organisations.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── FINAL CTA ── -->
<section class="section" style="padding-bottom:120px">
  <div class="section-inner">
    <div class="final-cta">
      <div class="eyebrow" style="text-align:center;margin-bottom:16px">Ready to build?</div>
      <h2>Have a Software<br><span class="gold">Idea?</span></h2>
      <p>Tell us what you're trying to build. We'll help you determine the right technology, delivery approach and AI team to bring it to life.</p>
      <div class="final-cta-btns">
        <a href="/contact" class="btn-primary">Talk to Our Delivery Team <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/contact" class="btn-outline">Start a Conversation</a>
      </div>
      <div class="final-alt">The Team You Need. Not the Team You Have to Pay For.</div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
