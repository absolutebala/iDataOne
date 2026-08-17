<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: EMR Global — Field Service App That Replaced WhatsApp for 50+ Engineers | iDataOne</title>
<meta name="description" content="How iDataOne built a web and mobile field service platform for EMR Global — a 50-year-old transformer manufacturer — replacing WhatsApp with a structured digital workflow for field engineers across multiple countries.">
<meta name="keywords" content="field service management, mobile app development, Next.js React Native, electrical equipment manufacturer, service ticket management, iDataOne case study, EMR Global">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/emr-global-field-engineers">
<meta property="og:type" content="article">
<meta property="og:title" content="EMR Global — Field Service App That Replaced WhatsApp for 50+ Engineers | iDataOne">
<meta property="og:description" content="How iDataOne built a structured field service platform replacing informal WhatsApp workflows for a global transformer manufacturer.">
<meta property="og:url" content="https://idataone.com/case-study/emr-global-field-engineers">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="EMR Global — Field Service App That Replaced WhatsApp for 50+ Engineers | iDataOne">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "EMR Global — Field Service App That Replaced WhatsApp for 50+ Engineers",
  "description": "How iDataOne built a web and mobile field service platform for EMR Global, replacing informal WhatsApp workflows with structured digital ticket management.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
  "url": "https://idataone.com/case-study/emr-global-field-engineers",
  "about": [
    {"@type": "Thing", "name": "Field Service Management"},
    {"@type": "Thing", "name": "Mobile App Development"},
    {"@type": "Thing", "name": "Digital Transformation"}
  ],
  "keywords": "field service app, React Native, Next.js, transformer manufacturer, ticket management, digital transformation"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Hero — deep teal/slate for industrial feel */
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 15% 40%,rgba(13,148,136,0.15),transparent 50%),
  radial-gradient(ellipse at 85% 15%,rgba(15,118,110,0.12),transparent 45%),
  linear-gradient(145deg,#0a0f1e 0%,#0c1a2e 40%,#0a1a1a 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 80% 60%,rgba(20,184,166,0.08),transparent 55%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.02) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.cs-hero-img{display:flex;align-items:center;justify-content:center}
.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.2),0 8px 24px rgba(0,0,0,0.4);transition:transform 0.4s ease}
.cs-hero-img img:hover{transform:translateY(-4px)}
/* Placeholder visual when no image */
.cs-hero-placeholder{width:100%;aspect-ratio:16/10;border-radius:20px;background:rgba(13,148,136,0.08);border:1px solid rgba(13,148,136,0.2);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:16px}
.cs-hero-placeholder svg{width:64px;height:64px;fill:none;stroke:rgba(13,148,136,0.4);stroke-width:1.2;stroke-linecap:round;stroke-linejoin:round}
.cs-hero-placeholder p{font-size:12px;color:rgba(255,255,255,0.25);letter-spacing:2px;text-transform:uppercase}

.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(13,148,136,0.1);border:1px solid rgba(13,148,136,0.25);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#2dd4bf;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#fff;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:rgba(255,255,255,0.58);line-height:1.8;margin-bottom:36px;max-width:520px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(255,255,255,0.07);flex-wrap:wrap}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#0d9488,#2dd4bf);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:rgba(255,255,255,0.4);margin-top:4px}

/* Key differentiator banner */
.cs-key-banner{background:linear-gradient(135deg,#0f2a28,#0a1e1c);padding:48px 32px;border-top:1px solid rgba(13,148,136,0.15);border-bottom:1px solid rgba(13,148,136,0.15)}
.cs-key-inner{max-width:960px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr 1fr;gap:32px}
.cs-key-item{text-align:center}
.cs-key-icon{width:52px;height:52px;border-radius:14px;background:rgba(13,148,136,0.1);border:1px solid rgba(13,148,136,0.2);display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.cs-key-icon svg{width:22px;height:22px;fill:none;stroke:#2dd4bf;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-key-title{font-size:15px;font-weight:700;color:#f0fdfa;margin-bottom:8px}
.cs-key-desc{font-size:12.5px;color:rgba(255,255,255,0.38);line-height:1.65}

/* Sections */
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0d9488;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f0fdfa}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#0d9488;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#f0fdfa,#e6fffa)}
.cs-visual img{width:80%;margin:0 auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.15),0 8px 24px rgba(0,0,0,0.1);cursor:zoom-in}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 12px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:22px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#0d9488,#0891b2);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:11.5px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:32px}
.cs-grid-card{background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px;padding:28px}
.cs-grid-icon{width:44px;height:44px;border-radius:12px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.15);display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.cs-grid-icon svg{width:20px;height:20px;fill:none;stroke:#0d9488;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-grid-title{font-size:16px;font-weight:700;color:#0f172a;margin-bottom:8px}
.cs-grid-desc{font-size:13px;color:#64748b;line-height:1.7}
.cs-tech-grid{display:flex;flex-wrap:wrap;gap:12px;margin-top:24px}
.cs-tech-pill{padding:8px 18px;border-radius:999px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.2);font-size:13px;font-weight:600;color:#0d9488}
.cs-cta{padding:48px 32px 80px;background:#fff}
.cs-cta-card{max-width:800px;margin:0 auto;background:#0a1e1c;border-radius:24px;padding:40px 48px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:space-between;gap:32px}
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(13,148,136,0.2),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f0fdfa;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#2dd4bf,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#0d9488;color:#fff;font-size:14px;font-weight:700;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}
@media(max-width:768px){
  .cs-hero-inner{grid-template-columns:1fr}
  .cs-hero-img,.cs-hero-placeholder{display:none}
  .cs-hero-stats{gap:24px}
  .cs-key-inner{grid-template-columns:1fr}
  .cs-grid{grid-template-columns:1fr}
  .cs-features{grid-template-columns:1fr}
  .cs-results{grid-template-columns:1fr 1fr}
  .cs-cta-card{flex-direction:column;padding:32px 24px;text-align:center}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>
<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- Hero -->
<section class="cs-hero">
  <div class="cs-hero-inner">
    <div class="cs-hero-left">
      <div class="cs-badge">Digital · Data · Field Service</div>
      <h1 class="cs-hero-title">From WhatsApp to a Structured Field Service Platform — EMR Global</h1>
      <p class="cs-hero-sub">How iDataOne built a web and mobile field service application for EMR Global — a 50-year-old transformer equipment manufacturer — replacing informal WhatsApp coordination with a structured, real-time service management platform for field engineers across multiple countries.</p>
      <div class="cs-hero-stats">
        <div class="cs-stat"><div class="cs-stat-num"><span>50+</span></div><div class="cs-stat-label">Field engineers on platform</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>0</span></div><div class="cs-stat-label">WhatsApp dependency</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>Real‑time</span></div><div class="cs-stat-label">Ticket tracking & status</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>Web+App</span></div><div class="cs-stat-label">Cross-platform delivery</div></div>
      </div>
    </div>
    <div class="cs-hero-img">
      <!-- Hero image: add emr-global-hero.png when ready -->
      <div class="cs-hero-placeholder">
        <svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01M8 6h8M8 10h8M8 14h4"/></svg>
        <p>Hero image coming soon</p>
      </div>
    </div>
  </div>
</section>

<!-- Key differentiators -->
<div class="cs-key-banner">
  <div class="cs-key-inner">
    <div class="cs-key-item">
      <div class="cs-key-icon"><svg viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2M9 5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2"/><path d="M9 12l2 2 4-4"/></svg></div>
      <div class="cs-key-title">Structured Ticket Management</div>
      <div class="cs-key-desc">Tickets raised, assigned and tracked in one system — no more chasing engineers on WhatsApp groups.</div>
    </div>
    <div class="cs-key-item">
      <div class="cs-key-icon"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM12 6v6l4 2"/></svg></div>
      <div class="cs-key-title">Real-Time Status Visibility</div>
      <div class="cs-key-desc">Management gets live visibility into every open ticket — field status, engineer location and SLA tracking in real time.</div>
    </div>
    <div class="cs-key-item">
      <div class="cs-key-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
      <div class="cs-key-title">Multi-Role Platform</div>
      <div class="cs-key-desc">Separate experiences for admins, service managers and field engineers — each seeing only what they need.</div>
    </div>
  </div>
</div>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">A Growing Operation That Needed the Right Digital Backbone</h2>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start">
      <div>
        <p class="cs-p">EMR Global has spent over five decades building precision transformer equipment — On-Load Tap Changers, Motor Drive Units, Smart Breathers and Protective Relays — trusted by power infrastructure projects across multiple countries. As their field operation grew, so did the coordination demands that come with it: more engineers, more sites, more products requiring specialist commissioning and servicing.</p>
        <p class="cs-p">Like many manufacturers who scale quickly, their field service coordination had outgrown the tools they were using. Service requests, engineer assignments and status updates were being managed through WhatsApp — a practical starting point, but one that had reached its limits as the volume and complexity of field operations increased.</p>
        <p class="cs-p">Without a dedicated system, management had limited visibility into open tickets and field status. Engineers worked hard but without a structured platform to support them — no formal assignment process, no closure trail and no shared view of what was happening across the team at any given time.</p>
        <div style="margin-top:24px;padding:20px 24px;border-left:3px solid #0d9488;background:rgba(13,148,136,0.04);border-radius:0 12px 12px 0">
          <div style="font-size:13px;font-weight:700;color:#0d9488;margin-bottom:6px">The brief</div>
          <div style="font-size:14px;color:#475569;line-height:1.7">EMR Global approached iDataOne to build a purpose-built field service platform — replacing informal coordination with a structured, real-time digital operation that could scale with their growth.</div>
        </div>
      </div>
      <div>
        <?php
        $problems = [
          ['M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2','Service requests were tracked informally across group chats'],
          ['M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z','No structured assignment process for incoming tickets'],
          ['M9 19v-6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm0 0V9a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v10m-6 0a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2m0 0V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v14a2 2 0 0 0-2 2h-2a2 2 0 0 0-2-2z','Management visibility into field status was limited'],
          ['M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0','No service history or closure record per ticket'],
          ['M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM12 6v6l4 2','Response time tracking was not possible without a system'],
          ['M3.055 11H5a2 2 0 0 1 2 2v1a2 2 0 0 0 2 2 2 2 0 0 1 2 2v2.945M8 3.935V5.5A2.5 2.5 0 0 0 10.5 8h.5a2 2 0 0 1 2 2 2 2 0 0 0 4 0 2 2 0 0 1 2-2h1.064M15 20.488V18a2 2 0 0 1 2-2h3.064','Engineers across multiple countries had no unified workflow'],
        ];
        ?>
        <div class="cs-features">
          <?php foreach($problems as $p): ?>
          <div class="cs-feature">
            <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="<?= $p[0] ?>"/></svg></div>
            <div><div class="cs-feature-desc"><?= $p[1] ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Purpose-Built Field Service Platform — Web and Mobile</h2>
    <p class="cs-p">iDataOne designed and built a cross-platform field service management application — a web-based admin and management dashboard, and a React Native mobile app for field engineers. The platform replaced every WhatsApp workflow with a structured, trackable digital process.</p>

    <div class="cs-features">
      <?php
      $features = [
        ['M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2','Ticket Creation & Assignment','Service requests raised through the web portal, automatically routed to available engineers based on location, product expertise and workload.'],
        ['M12 18h.01M8 6h8M8 10h8M8 14h4','Mobile App for Field Engineers','Engineers receive ticket notifications on their mobile, update status in the field, log work done, capture photos and close tickets — all offline-capable.'],
        ['M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM12 6v6l4 2','Real-Time Status Dashboard','Management sees a live dashboard — every open ticket, engineer status, time-on-site and escalation flags, updated in real time from the field.'],
        ['M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0','SLA Tracking & Alerts','Every ticket carries a deadline. Automated alerts escalate overdue tickets to managers before customers need to follow up.'],
        ['M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75','Role-Based Access','Three distinct roles — Admin, Service Manager and Field Engineer — each with their own interface, permissions and workflow. One platform, multiple experiences.'],
        ['M19 11H5m14 0a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2m14 0V9a2 2 0 0 0-2-2M5 11V9a2 2 0 0 1 2-2m0 0V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2M7 7h10','Service History & Data','Every ticket closure builds a structured service history — product model, fault type, resolution, engineer and time-to-fix — turning service data into operational intelligence.'],
      ];
      foreach($features as $f): ?>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="<?= $f[0] ?>"/></svg></div>
        <div>
          <div class="cs-feature-title"><?= $f[1] ?></div>
          <div class="cs-feature-desc"><?= $f[2] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Solution diagram placeholder -->
    <div class="cs-visual">
      <div style="width:100%;text-align:center;padding:40px 0">
        <div style="font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0d9488;margin-bottom:12px">Solution Architecture</div>
        <div style="font-size:14px;color:#94a3b8">Image coming soon</div>
      </div>
    </div>
  </div>
</section>

<!-- How it works -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">How It Works</div>
    <h2 class="cs-h2">One Workflow. Every Engineer. Every Country.</h2>
    <p class="cs-p">The platform follows a clear, linear workflow that mirrors how field service actually operates — from the moment a customer reports an issue to the moment an engineer closes the job.</p>
    <div class="cs-grid">
      <?php
      $steps = [
        ['M3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z','1. Ticket Raised','Admin or service manager creates a ticket in the web portal — product, fault description, site location and priority level.'],
        ['M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z','2. Engineer Assigned','The system assigns the ticket to the most suitable available engineer based on location, product certification and current workload.'],
        ['M12 18h.01M8 6h8M8 10h8M8 14h4','3. Engineer Notified on Mobile','The field engineer receives a push notification on their React Native app with full ticket details — customer, product, site address and fault description.'],
        ['M9 12l2 2 4-4M7 12a5 5 0 0 1 5-5 5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5z','4. Field Update & Closure','On site, the engineer logs work done, captures photos and closes the ticket. Status updates in real time on the management dashboard.'],
        ['M9 19v-6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm0 0V9a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v10m-6 0a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2m0 0V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v14a2 2 0 0 0-2 2h-2a2 2 0 0 0-2-2z','5. Data Captured','Every closed ticket contributes to a growing service database — fault patterns, resolution times, product failure rates and engineer performance.'],
        ['M11 3.055A9.001 9.001 0 1 0 20.945 13H11V3.055z','6. Management Reports','Managers access dashboards showing open vs closed tickets, average resolution time, SLA compliance and product-level fault analysis.'],
      ];
      foreach($steps as $s): ?>
      <div class="cs-grid-card">
        <div class="cs-grid-icon"><svg viewBox="0 0 24 24"><path d="<?= $s[0] ?>"/></svg></div>
        <div class="cs-grid-title"><?= $s[1] ?></div>
        <div class="cs-grid-desc"><?= $s[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">Structured Operations. Real Accountability.</h2>
    <p class="cs-p">Moving from WhatsApp to a purpose-built platform transformed how EMR Global manages its field service operation — giving management visibility they never had, and giving engineers a professional, reliable tool to do their work.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">100%</div><div class="cs-result-label">Tickets now tracked digitally</div></div>
      <div class="cs-result"><div class="cs-result-num">0</div><div class="cs-result-label">WhatsApp coordination remaining</div></div>
      <div class="cs-result"><div class="cs-result-num">Real-time</div><div class="cs-result-label">Field visibility for management</div></div>
      <div class="cs-result"><div class="cs-result-num">Multi-country</div><div class="cs-result-label">Engineers on one platform</div></div>
    </div>

    <div style="margin-top:40px;display:grid;grid-template-columns:1fr 1fr;gap:24px">
      <div style="padding:28px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px">
        <div style="font-size:13px;font-weight:700;color:#0f172a;margin-bottom:12px">Before — WhatsApp</div>
        <?php foreach(['Service requests lost in group chats','No assignment accountability','Zero visibility for management','No service history or data','SLA tracking impossible','Engineers duplicating work'] as $b): ?>
        <div style="display:flex;gap:10px;align-items:flex-start;margin-bottom:8px;font-size:13px;color:#94a3b8"><span style="color:rgba(239,68,68,0.7);flex-shrink:0">—</span><?= $b ?></div>
        <?php endforeach; ?>
      </div>
      <div style="padding:28px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.2);border-radius:16px">
        <div style="font-size:13px;font-weight:700;color:#0f172a;margin-bottom:12px">After — iDataOne Platform</div>
        <?php foreach(['Structured tickets with priority and routing','Engineers assigned and accountable','Live dashboard for every open ticket','Full service history per product and site','Automated SLA alerts and escalation','Unified platform for all field engineers'] as $a): ?>
        <div style="display:flex;gap:10px;align-items:flex-start;margin-bottom:8px;font-size:13px;color:#0f172a"><span style="color:#0d9488;flex-shrink:0">✓</span><?= $a ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Tech Stack -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">Technology</div>
    <h2 class="cs-h2">Built for Field Conditions</h2>
    <p class="cs-p">The platform was built to work reliably in the field — offline-capable mobile app, real-time sync, robust cloud infrastructure and a clean web portal for management. Every technology choice prioritised reliability and speed of delivery.</p>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-top:32px">
      <?php
      $tech = [
        ['Web Platform','Next.js','Server-rendered web application for admin and management dashboards — fast, SEO-capable and easy to deploy on AWS.'],
        ['Mobile App','React Native','Cross-platform mobile application for iOS and Android field engineers — single codebase, native performance, offline-capable.'],
        ['Backend API','Node.js','RESTful API layer handling ticket management, user authentication, real-time notifications and data aggregation.'],
        ['Database','AWS RDS (PostgreSQL)','Managed relational database on AWS — structured ticket data, service history, user roles and audit logs with automated backups.'],
        ['Cloud Infrastructure','AWS','EC2, RDS, S3 and CloudWatch — scalable, monitored infrastructure with environment separation for staging and production.'],
        ['Real-Time Updates','WebSockets / Push Notifications','Live ticket status pushed to management dashboard and push notifications delivered to engineer mobile app instantly.'],
      ];
      foreach($tech as $t): ?>
      <div class="cs-grid-card">
        <div style="font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#0d9488;margin-bottom:6px"><?= $t[0] ?></div>
        <div class="cs-grid-title"><?= $t[1] ?></div>
        <div class="cs-grid-desc"><?= $t[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="cs-tech-grid" style="margin-top:32px">
      <?php foreach(['Next.js','React Native','Node.js','AWS RDS','PostgreSQL','AWS EC2','AWS S3','WebSockets','Push Notifications','REST API'] as $t): ?>
      <div class="cs-tech-pill"><?= $t ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <div class="cs-cta-h3">Running on <em>WhatsApp?</em></div>
      <div class="cs-cta-sub">We build structured digital operations for businesses that have outgrown informal tools.</div>
    </div>
    <a href="/contact" class="cs-cta-btn">Talk to Our Team <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
