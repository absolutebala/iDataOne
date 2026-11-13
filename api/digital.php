<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../includes/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Product Development | iDataOne — Build. Transform. Scale.</title>
<meta name="description" content="From web apps to enterprise platforms, iDataOne designs and builds scalable digital products tailored to your business needs within your budget.">
<meta name="keywords" content="digital product development, custom software, web app development, mobile app development, SaaS platform, enterprise software, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="Digital Product Development | iDataOne — Build. Transform. Scale.">
<meta property="og:description" content="From web apps to enterprise platforms, iDataOne designs and builds scalable digital products tailored to your business needs within your budget.">
<meta property="og:url" content="https://idataone.com/digital">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Digital Product Development | iDataOne — Build. Transform. Scale.">
<meta name="twitter:description" content="From web apps to enterprise platforms, iDataOne designs and builds scalable digital products tailored to your business needs within your budget.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Digital Product Development",
  "provider": {"@id": "https://idataone.com/#organization"},
  "description": "From web apps to enterprise platforms, iDataOne designs and builds scalable digital products tailored to your business needs within your budget.",
  "serviceType": "Custom Software Development",
  "areaServed": "Worldwide",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Digital Products Services",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Web Application Development"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Mobile App Development"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "SaaS Platform Development"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Enterprise Application Development"}}
    ]
  }
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/digital">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden}

/* Nav */
/* Nav via _nav.php */
.banner{min-height:100vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:linear-gradient(145deg,#cee8f0 0%,#ddf0f5 35%,#e8f4f8 60%,#d8eef5 100%)}
.banner::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 15% 50%,rgba(0,180,220,0.08),transparent 55%),radial-gradient(ellipse at 85% 20%,rgba(0,150,200,0.06),transparent 50%);pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0891b2;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#0c1a2e;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#0891b2,#06b6d4);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:#334e68;line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#0891b2;color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1.5px solid rgba(8,145,178,0.4);color:#0891b2;font-size:14px;font-weight:600;text-decoration:none;background:rgba(8,145,178,0.06);transition:all 0.2s}
.btn-secondary:hover{background:rgba(8,145,178,0.12);border-color:#0891b2;transform:translateY(-1px)}
.banner-illus{display:flex;align-items:center;justify-content:center;position:relative}

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
.process{background:linear-gradient(160deg,#0d1f35 0%,#0a2540 50%,#0d1f35 100%);position:relative;overflow:hidden}
.process::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 60%,rgba(6,182,212,0.1),transparent 50%),radial-gradient(ellipse at 80% 20%,rgba(16,185,129,0.07),transparent 45%);pointer-events:none}
.process .section-tag{color:#67e8f9}
.process .section-title{color:#f1f5f9}
/* Process track */
.proc-track{margin-top:60px;position:relative}
.proc-line{position:absolute;top:40px;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.1) 20%,rgba(255,255,255,0.1) 80%,transparent)}
.proc-steps{display:flex;align-items:flex-start;gap:0}
.proc-step{flex:1;display:flex;flex-direction:column;align-items:center;position:relative;padding:0 12px}
.proc-num{font-size:13px;font-weight:800;letter-spacing:2.5px;margin-bottom:16px;position:relative;z-index:1}
.proc-dot{width:14px;height:14px;border-radius:50%;border:2px solid;margin-bottom:24px;position:relative;z-index:1;flex-shrink:0}
.proc-body{display:flex;flex-direction:column;align-items:center;text-align:center;gap:14px;width:100%}
.proc-icon{width:72px;height:72px;border-radius:20px;display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative}
.proc-icon svg{width:30px;height:30px;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.proc-title{font-size:14px;font-weight:700;color:#f1f5f9;line-height:1.35}
.proc-desc{font-size:12px;color:rgba(255,255,255,0.45);line-height:1.65}
/* Per-step colors */
.proc-step:nth-child(1) .proc-num{color:#38bdf8}
.proc-step:nth-child(1) .proc-dot{background:#0369a1;border-color:#38bdf8}
.proc-step:nth-child(1) .proc-icon{background:rgba(56,189,248,0.12);border:1px solid rgba(56,189,248,0.25)}
.proc-step:nth-child(1) .proc-icon svg{stroke:#38bdf8}
.proc-step:nth-child(2) .proc-num{color:#a78bfa}
.proc-step:nth-child(2) .proc-dot{background:#4c1d95;border-color:#a78bfa}
.proc-step:nth-child(2) .proc-icon{background:rgba(167,139,250,0.12);border:1px solid rgba(167,139,250,0.25)}
.proc-step:nth-child(2) .proc-icon svg{stroke:#a78bfa}
.proc-step:nth-child(3) .proc-num{color:#34d399}
.proc-step:nth-child(3) .proc-dot{background:#065f46;border-color:#34d399;box-shadow:0 0 0 4px rgba(52,211,153,0.15)}
.proc-step:nth-child(3) .proc-icon{background:rgba(52,211,153,0.15);border:1px solid rgba(52,211,153,0.35)}
.proc-step:nth-child(3) .proc-icon svg{stroke:#34d399}
.proc-step:nth-child(4) .proc-num{color:#fb923c}
.proc-step:nth-child(4) .proc-dot{background:#7c2d12;border-color:#fb923c}
.proc-step:nth-child(4) .proc-icon{background:rgba(251,146,60,0.12);border:1px solid rgba(251,146,60,0.25)}
.proc-step:nth-child(4) .proc-icon svg{stroke:#fb923c}
.proc-step:nth-child(5) .proc-num{color:#f472b6}
.proc-step:nth-child(5) .proc-dot{background:#831843;border-color:#f472b6}
.proc-step:nth-child(5) .proc-icon{background:rgba(244,114,182,0.12);border:1px solid rgba(244,114,182,0.25)}
.proc-step:nth-child(5) .proc-icon svg{stroke:#f472b6}

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
.cta-section{background:linear-gradient(135deg,#b45309 0%,#d97706 40%,#f59e0b 70%,#fbbf24 100%);padding:80px 32px;position:relative;overflow:hidden;margin:0}
.cta-section::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 15% 50%,rgba(255,255,255,0.08),transparent 55%),radial-gradient(ellipse at 85% 30%,rgba(0,0,0,0.1),transparent 50%);pointer-events:none}
.cta-section::after{content:"";position:absolute;bottom:0;left:0;right:0;height:3px;background:rgba(0,0,0,0.12)}
.cta-card{max-width:860px;margin:0 auto;position:relative;z-index:1;display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.cta-card::before{display:none}
.cta-card-left{position:relative}
.cta-icon{width:52px;height:52px;border-radius:14px;background:rgba(0,0,0,0.15);border:1px solid rgba(255,255,255,0.2);display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.cta-icon svg{width:22px;height:22px;fill:none;stroke:rgba(255,255,255,0.9);stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.cta-heading{font-size:clamp(22px,2.8vw,34px);font-weight:800;letter-spacing:-1.2px;color:#fff;margin-bottom:10px;line-height:1.15}
.cta-heading em{font-style:normal;color:rgba(255,255,255,0.75)}
.cta-sub{font-size:15px;color:rgba(255,255,255,0.7);line-height:1.75}
.cta-btns{display:flex;flex-direction:column;gap:12px;align-items:flex-end;position:relative;z-index:1;flex-shrink:0}
.btn-cta-primary{display:inline-flex;align-items:center;gap:8px;padding:15px 28px;border-radius:12px;background:#fff;color:#b45309;font-size:14px;font-weight:700;text-decoration:none;white-space:nowrap;transition:opacity 0.2s,transform 0.2s;box-shadow:0 4px 20px rgba(0,0,0,0.15)}
.btn-cta-primary:hover{opacity:0.95;transform:translateY(-1px)}
.btn-cta-secondary{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:600;color:rgba(255,255,255,0.75);text-decoration:none;transition:color 0.2s}
.btn-cta-secondary:hover{color:#fff}
.btn-cta-secondary svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}


/* Responsive */
@media(max-width:768px){
  .banner-inner{grid-template-columns:1fr}
  .banner-illus{display:flex;align-items:center;justify-content:center;position:relative}
  .stories-grid{grid-template-columns:1fr}
  .story-card{grid-template-columns:1fr}
  .story-visual{display:none}
  .process-steps{flex-direction:column;gap:0;align-items:stretch}
  .process-steps::before{display:none}
  .process-step{display:flex;align-items:flex-start;text-align:left;gap:16px;padding:0 0 28px 0;position:relative}
  .process-step::before{content:"";position:absolute;left:23px;top:48px;bottom:0;width:1px;background:linear-gradient(180deg,rgba(99,102,241,0.3),rgba(124,58,237,0.1))}
  .process-step:last-child::before{display:none}
  .process-step:last-child{padding-bottom:0}
  .step-icon{margin:0;flex-shrink:0}
  .step-title{margin-bottom:6px}
  .proc-steps{flex-direction:column;gap:0}
  .proc-line{display:none}
  .proc-step{flex-direction:row;align-items:flex-start;gap:16px;padding:0 0 32px 0;position:relative}
  .proc-step::after{content:"";position:absolute;left:35px;top:80px;bottom:0;width:1px;background:rgba(255,255,255,0.08)}
  .proc-step:last-child::after{display:none}
  .proc-step:last-child{padding-bottom:0}
  .proc-num{writing-mode:horizontal-tb;transform:none;margin-bottom:0;width:auto;padding-top:0;flex-shrink:0;font-size:12px;min-width:28px}
  .proc-dot{display:none}
  .proc-body{flex-direction:row;gap:16px;text-align:left;align-items:flex-start}
  .proc-icon{flex-shrink:0;width:60px;height:60px;border-radius:14px}
  .proc-icon svg{width:24px;height:24px}
  .products-grid{grid-template-columns:1fr}
  .cta-card{grid-template-columns:1fr;padding:28px 24px}
  .cta-btns{align-items:flex-start}
}
</style>
<?php include __DIR__ . '/../includes/_footer_css.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://idataone.com/"},
    {"@type": "ListItem", "position": 2, "name": "Digital Products", "item": "https://idataone.com/digital"}
  ]
}
</script>
</head>
<body>
<?php include __DIR__ . '/../includes/_gtm_body.php'; ?>

<!-- ── Nav ── -->
<?php $current_page = 'digital'; include __DIR__ . '/../includes/_nav.php'; ?>

<!-- ── Banner ── -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <h1 class="banner-h1">Digitalise Your<br>Business <em>with AI</em></h1>
      <p class="banner-sub">AI-Assisted Engineering. Faster Delivery. Lower Development Costs. Better Outcomes.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Start Your Project <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#stories" class="btn-secondary">View Case Studies <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <img
        src="/assets/images/digital-hero-visual.png"
        alt="iDataOne Digital Products — Digital Experiences, Business Applications, Modernisation and Cloud delivery"
        style="width:100%;height:auto;display:block;border-radius:24px;box-shadow:0 24px 64px rgba(0,120,180,0.2),0 8px 24px rgba(0,0,0,0.12);transition:transform 0.4s ease,box-shadow 0.4s ease"
        loading="eager"
        onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 32px 80px rgba(0,120,180,0.28),0 12px 32px rgba(0,0,0,0.15)'"
        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 24px 64px rgba(0,120,180,0.2),0 8px 24px rgba(0,0,0,0.12)'"
      />
    </div>
  </div>
</section>

<!-- ── Success Stories ── -->
<section class="section stories" id="stories">
  <div class="section-inner">
    <h2 class="section-title">Digital Products. Real Impact.</h2>
    <p class="section-sub">Real results from businesses that chose to build smarter.</p>
    <div class="stories-grid">
      <div class="story-card" onclick="location.href='/case-study/knight-ryders'" style="cursor:pointer">
        <div>
          <div class="story-tag">Custom CMS · Community Platform</div>
          <div class="story-title">The Knight Ryders — Custom CMS That Cut Maintenance Time by 80%</div>
          <div class="story-desc">We rebuilt a 460-member Honda CB350 riding club with an inline CMS, live member profiles, gamification and zero separate admin pages — admins manage everything from the same pages members browse.</div>
          <a href="/case-study/knight-ryders" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e">
          <img src="/assets/images/knight-ryders-hero.png" alt="The Knight Ryders" style="width:100%;height:140px;object-fit:cover;object-position:center center;display:block"/>
        </div>
      </div>


      <div class="story-card" onclick="location.href='/case-study/emr-global-field-engineers'" style="cursor:pointer">
        <div>
          <div class="story-tag">SAP Integration · Field Service</div>
          <div class="story-title">EMR Global — Bridging SAP to the Field with a Real-Time Service Platform</div>
          <div class="story-desc">We built a SAP-integrated web portal and React Native mobile app for a 50-year-old transformer equipment manufacturer — pulling customer and product data from SAP into every ticket, and writing 50+ field engineers' updates straight back to SAP in real time.</div>
          <a href="/case-study/emr-global-field-engineers" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;border-radius:12px;background:#0a0f1e">
          <img src="/assets/images/emr-hero.png" alt="EMR Global — SAP-integrated field service platform" style="width:100%;height:140px;object-fit:cover;object-position:center center;display:block"/>
        </div>
      </div>


      <div class="story-card" onclick="location.href='/case-study/telecom-pm-platform'" style="cursor:pointer">
        <div>
          <div class="story-tag">Telecom Infrastructure</div>
          <div class="story-title">Building a Telecom Infrastructure Project Management Platform for Venus Energy</div>
          <div class="story-desc">We designed and built a full-stack project, vendor and financial management platform for a vendor of Indus Towers that unified telecom infrastructure operations across multiple regions and roles — tracking 2,200+ projects and ₹7+ Cr in PO value.</div>
          <a href="/case-study/telecom-pm-platform" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;border-radius:12px">
          <img src="/assets/images/telecom-pm-hero.png" alt="Telecom PMS" style="width:100%;height:140px;object-fit:cover;object-position:center top;display:block"/>
        </div>
      </div>

      <div class="story-card" onclick="location.href='/case-study/risk-platform'" style="cursor:pointer">
        <div>
          <div class="story-tag">Enterprise Platform</div>
          <div class="story-title">Building an Enterprise Risk & Compliance Platform for an FMCG Leader</div>
          <div class="story-desc">We designed and built a full-stack risk assessment platform with a 5x5 severity matrix, real-time dashboards, role-based workflows and threaded communication — deployed across multiple departments.</div>
          <a href="/case-study/risk-platform" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e">
          <img src="/assets/images/risk-platform-hero.png" alt="Enterprise Risk & Compliance Platform for an FMCG leader" style="width:100%;height:140px;object-fit:cover;object-position:center center;display:block"/>
        </div>
      </div>

      <div class="story-card" onclick="location.href='/case-study/isportone'" style="cursor:pointer">
        <div>
          <div class="story-tag">Sports Technology</div>
          <div class="story-title">Building iSportOne: A Lifelong Sports Passport for Every Athlete, Everywhere</div>
          <div class="story-desc">We're designing a sports professional network combining a lifelong sports passport, adaptive profiles, club management and safe-by-design parental controls — for athletes of every level, globally.</div>
          <a href="/case-study/isportone" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e">
          <img src="/assets/images/isportone-hero.png" alt="iSportOne — your lifelong sports identity" style="width:100%;height:140px;object-fit:cover;object-position:center center;display:block"/>
        </div>
      </div>

      <div class="story-card" onclick="location.href='/case-study/mealmate'" style="cursor:pointer">
        <div>
          <div class="story-tag">Consumer Mobile App</div>
          <div class="story-title">Building an AI-Powered Family Meal Planning App</div>
          <div class="story-desc">We designed and built MealMate, a React Native app that delivers personalised, health-aware meal suggestions for every member of a family — powered by GPT-4o-mini.</div>
          <a href="/case-study/mealmate" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e">
          <img src="/assets/images/mealmate-hero.png" alt="MealMate — AI-powered family meal planning app" style="width:100%;height:140px;object-fit:cover;object-position:center center;display:block"/>
        </div>
      </div>



    </div>
  </div>
</section>

<!-- ── Process ── -->
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

        <div class="proc-step proc-step--mid">
          <div class="proc-num">03</div>
          <div class="proc-dot proc-dot--accent"></div>
          <div class="proc-body">
            <div class="proc-icon proc-icon--accent"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="6" height="14" rx="1"/><rect x="9" y="3" width="6" height="18" rx="1"/><rect x="16" y="10" width="6" height="11" rx="1"/></svg></div>
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

<!-- ── CTA ── -->
<section class="cta-section">
  <div class="cta-card">
    <div class="cta-card-left">
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
<?php include __DIR__ . '/../includes/_footer.php'; ?>

</body>
</html>
