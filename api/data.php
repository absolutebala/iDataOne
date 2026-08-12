<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
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
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNew.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Data Intelligence & Analytics Services | iDataOne — Build. Transform. Scale.">
<meta name="twitter:description" content="Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoNew.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Data Intelligence & Analytics",
  "provider": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
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
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden}
/* Nav via _nav.php */
.banner{min-height:100vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:url('/assets/images/data-hero-bg.png') right center / 70% auto no-repeat,linear-gradient(135deg,#020f0a 0%,#051a10 100%)}
.banner::before{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(2,10,6,0.95) 0%,rgba(2,10,6,0.85) 35%,rgba(2,10,6,0.35) 60%,rgba(2,10,6,0.05) 100%);pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#6ee7b7;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#fff;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#6ee7b7,#34d399);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:rgba(255,255,255,0.65);line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#059669,#10b981);color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(255,255,255,0.25);color:rgba(255,255,255,0.85);font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-secondary:hover{background:rgba(255,255,255,0.1);transform:translateY(-1px)}
.banner-illus{display:none}
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
.process{background:#0f172a;position:relative;overflow:hidden}
.process::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(217,119,6,0.15),transparent 55%),radial-gradient(ellipse at 75% 30%,rgba(245,158,11,0.1),transparent 50%);pointer-events:none}
.process .section-tag{color:#fbbf24}
.process .section-title{color:#f1f5f9}
.process-steps{display:flex;align-items:flex-start;position:relative;margin-top:56px}
.process-steps::before{content:"";position:absolute;top:28px;left:calc(10%);right:calc(10%);height:1px;background:linear-gradient(90deg,rgba(217,119,6,0.4),rgba(245,158,11,0.4));z-index:0}
.process-step{flex:1;text-align:center;position:relative;z-index:1;padding:0 12px}
.step-icon{width:56px;height:56px;border-radius:50%;background:rgba(217,119,6,0.12);border:1px solid rgba(217,119,6,0.3);display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.step-icon svg{width:22px;height:22px;fill:none;stroke:#fbbf24;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.step-title{font-size:15px;font-weight:700;color:#f1f5f9;margin-bottom:8px}
.step-desc{font-size:12.5px;color:rgba(255,255,255,0.45);line-height:1.65}
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
.cta-section{background:#f8fafc;padding:40px 32px 80px}
.cta-card{max-width:900px;margin:0 auto;background:#0f172a;border-radius:28px;padding:34px 48px;position:relative;overflow:hidden;display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(217,119,6,0.18),transparent 60%);pointer-events:none}
.cta-card-left{position:relative;z-index:1}
.cta-icon{width:48px;height:48px;border-radius:50%;border:1px solid rgba(255,255,255,0.12);display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.cta-icon svg{width:20px;height:20px;fill:none;stroke:rgba(255,255,255,0.6);stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.cta-heading{font-size:clamp(20px,2.5vw,30px);font-weight:800;letter-spacing:-1px;color:#f1f5f9;margin-bottom:8px;line-height:1.2}
.cta-heading em{font-style:normal;background:linear-gradient(90deg,#fbbf24,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cta-sub{font-size:14px;color:rgba(255,255,255,0.4);line-height:1.7}
.cta-btns{display:flex;flex-direction:column;gap:12px;align-items:flex-end;position:relative;z-index:1}
.btn-cta-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#d97706,#f59e0b);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s}
.btn-cta-primary:hover{opacity:0.9}
.btn-cta-secondary{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:rgba(255,255,255,0.45);text-decoration:none;transition:color 0.2s}
.btn-cta-secondary:hover{color:rgba(255,255,255,0.8)}
.btn-cta-secondary svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
@media(max-width:768px){.site-nav .nav-links{display:none}.banner-inner{grid-template-columns:1fr}.banner-illus{display:none}.stories-grid{grid-template-columns:1fr}.story-card{grid-template-columns:1fr}.story-visual{display:none}.process-steps{flex-direction:column;gap:0;align-items:stretch}.process-steps::before{display:none}.process-step{display:flex;align-items:flex-start;text-align:left;gap:16px;padding:0 0 28px 0;position:relative}.process-step::before{content:"";position:absolute;left:23px;top:48px;bottom:0;width:1px;background:linear-gradient(180deg,rgba(99,102,241,0.3),rgba(124,58,237,0.1))}.process-step:last-child::before{display:none}.process-step:last-child{padding-bottom:0}.step-icon{margin:0;flex-shrink:0}.step-title{margin-bottom:6px}.products-grid{grid-template-columns:1fr}.cta-card{grid-template-columns:1fr}.cta-btns{align-items:flex-start}}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'data'; include __DIR__ . '/_nav.php'; ?>

<!-- Banner -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <div class="banner-tag">Data Intelligence</div>
      <h1 class="banner-h1">Smarter<br>Business Decisions <em>with AI</em></h1>
      <p class="banner-sub">Connect, analyse, and visualise your business data with AI to uncover insights that drive confident decisions and sustainable growth.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Start With Your Data <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#stories" class="btn-secondary">View Case Studies <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <svg viewBox="0 0 520 400" width="520" height="400" xmlns="http://www.w3.org/2000/svg">
        <!-- Dashboard frame -->
        <rect x="40" y="20" width="440" height="300" rx="16" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.2)" stroke-width="1.5"/>
        <rect x="40" y="20" width="440" height="40" rx="16" fill="rgba(245,158,11,0.08)"/>
        <rect x="40" y="44" width="440" height="16" fill="rgba(245,158,11,0.08)"/>
        <rect x="56" y="32" width="80" height="8" rx="4" fill="rgba(217,119,6,0.25)"/>
        <circle cx="452" cy="36" r="8" fill="rgba(217,119,6,0.15)"/>
        <circle cx="468" cy="36" r="8" fill="rgba(217,119,6,0.1)"/>
        <!-- Metric cards -->
        <rect x="56" y="76" width="88" height="54" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <rect x="64" y="85" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="64" y="96" width="64" height="14" rx="4" fill="rgba(217,119,6,0.25)"/>
        <rect x="64" y="114" width="36" height="5" rx="2.5" fill="rgba(20,184,166,0.3)"/>
        <rect x="154" y="76" width="88" height="54" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <rect x="162" y="85" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="162" y="96" width="64" height="14" rx="4" fill="rgba(99,102,241,0.2)"/>
        <rect x="162" y="114" width="36" height="5" rx="2.5" fill="rgba(244,63,94,0.3)"/>
        <rect x="252" y="76" width="88" height="54" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <rect x="260" y="85" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="260" y="96" width="64" height="14" rx="4" fill="rgba(20,184,166,0.2)"/>
        <rect x="260" y="114" width="36" height="5" rx="2.5" fill="rgba(20,184,166,0.35)"/>
        <rect x="350" y="76" width="112" height="54" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <rect x="358" y="85" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="358" y="96" width="64" height="14" rx="4" fill="rgba(245,158,11,0.25)"/>
        <rect x="358" y="114" width="36" height="5" rx="2.5" fill="rgba(217,119,6,0.3)"/>
        <!-- Bar chart -->
        <rect x="56" y="148" width="220" height="100" rx="10" fill="#fff" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
        <rect x="68" y="158" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="68" y="208" width="14" height="28" rx="3" fill="rgba(245,158,11,0.4)"/>
        <rect x="86" y="194" width="14" height="42" rx="3" fill="rgba(245,158,11,0.55)"/>
        <rect x="104" y="200" width="14" height="36" rx="3" fill="rgba(245,158,11,0.4)"/>
        <rect x="122" y="188" width="14" height="48" rx="3" fill="rgba(245,158,11,0.65)"/>
        <rect x="140" y="182" width="14" height="54" rx="3" fill="rgba(217,119,6,0.7)"/>
        <rect x="158" y="191" width="14" height="45" rx="3" fill="rgba(245,158,11,0.55)"/>
        <rect x="176" y="186" width="14" height="50" rx="3" fill="rgba(245,158,11,0.6)"/>
        <rect x="194" y="178" width="14" height="58" rx="3" fill="rgba(217,119,6,0.75)"/>
        <rect x="212" y="184" width="14" height="52" rx="3" fill="rgba(245,158,11,0.65)"/>
        <!-- Line chart -->
        <rect x="286" y="148" width="176" height="100" rx="10" fill="#fff" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
        <rect x="296" y="158" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <polyline points="296,228 314,214 332,218 350,204 368,196 386,200 404,186 422,180 440,184" stroke="rgba(217,119,6,0.65)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        <polygon points="296,228 314,214 332,218 350,204 368,196 386,200 404,186 422,180 440,184 440,240 296,240" fill="rgba(217,119,6,0.05)"/>
        <circle cx="404" cy="186" r="5" fill="rgba(217,119,6,0.7)"/>
        <!-- Pie/donut -->
        <rect x="56" y="260" width="100" height="48" rx="8" fill="rgba(255,251,235,0.6)" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
        <circle cx="80" cy="284" r="14" fill="none" stroke="rgba(217,119,6,0.15)" stroke-width="6"/>
        <circle cx="80" cy="284" r="14" fill="none" stroke="rgba(217,119,6,0.6)" stroke-width="6" stroke-dasharray="44 44" stroke-dashoffset="22"/>
        <circle cx="80" cy="284" r="14" fill="none" stroke="rgba(20,184,166,0.4)" stroke-width="6" stroke-dasharray="22 66" stroke-dashoffset="-22"/>
        <rect x="102" y="276" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="102" y="284" width="28" height="4" rx="2" fill="rgba(217,119,6,0.25)"/>
        <rect x="102" y="292" width="34" height="4" rx="2" fill="rgba(20,184,166,0.2)"/>
        <!-- Table -->
        <rect x="166" y="260" width="296" height="48" rx="8" fill="rgba(255,255,255,0.8)" stroke="rgba(217,119,6,0.1)" stroke-width="1"/>
        <rect x="174" y="268" width="60" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="174" y="276" width="270" height="1" fill="rgba(217,119,6,0.1)"/>
        <rect x="174" y="282" width="100" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="340" y="281" width="40" height="6" rx="3" fill="rgba(217,119,6,0.15)"/>
        <rect x="174" y="292" width="100" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="340" y="291" width="40" height="6" rx="3" fill="rgba(20,184,166,0.15)"/>
        <!-- Floating badge -->
        <rect x="140" y="330" width="200" height="36" rx="18" fill="rgba(255,255,255,0.96)" stroke="rgba(217,119,6,0.2)" stroke-width="1"/>
        <circle cx="158" cy="348" r="8" fill="rgba(217,119,6,0.15)"/>
        <rect x="172" y="342" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="172" y="351" width="70" height="4" rx="2" fill="rgba(217,119,6,0.25)"/>
      </svg>
    </div>
  </div>
</section>

<!-- Success Stories -->
<section class="section stories" id="stories">
  <div class="section-inner">
    <div class="section-tag">Success Stories</div>
    <h2 class="section-title">Data Intelligence. Real Clarity.</h2>
    <p class="section-sub">Businesses that unified their data and unlocked real competitive advantage.</p>
    <div class="stories-grid">
      <div class="story-card" onclick="location.href='/case-study/risk-dashboard'" style="cursor:pointer">
        <div>
          <div class="story-tag">Risk Analytics</div>
          <div class="story-title">Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company</div>
          <div class="story-desc">We built a real-time risk analytics dashboard with severity matrix visualisation, 12-month trend tracking, department-level breakdowns and automated compliance scoring across 8 risk categories.</div>
          <a href="/case-study/risk-dashboard" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="8" y="8" width="144" height="18" rx="8" fill="rgba(217,119,6,0.08)"/>
            <rect x="16" y="34" width="128" height="34" rx="5" fill="rgba(255,251,235,0.6)"/>
            <rect x="22" y="40" width="4" height="4" rx="1" fill="rgba(20,184,166,0.4)"/>
            <rect x="28" y="40" width="4" height="4" rx="1" fill="rgba(20,184,166,0.3)"/>
            <rect x="34" y="40" width="4" height="4" rx="1" fill="rgba(245,158,11,0.4)"/>
            <rect x="40" y="40" width="4" height="4" rx="1" fill="rgba(245,158,11,0.3)"/>
            <rect x="46" y="40" width="4" height="4" rx="1" fill="rgba(244,63,94,0.4)"/>
            <rect x="22" y="48" width="4" height="4" rx="1" fill="rgba(20,184,166,0.3)"/>
            <rect x="28" y="48" width="4" height="4" rx="1" fill="rgba(245,158,11,0.3)"/>
            <rect x="34" y="48" width="4" height="4" rx="1" fill="rgba(245,158,11,0.4)"/>
            <rect x="40" y="48" width="4" height="4" rx="1" fill="rgba(244,63,94,0.3)"/>
            <rect x="46" y="48" width="4" height="4" rx="1" fill="rgba(244,63,94,0.5)"/>
            <rect x="22" y="56" width="4" height="4" rx="1" fill="rgba(20,184,166,0.2)"/>
            <rect x="28" y="56" width="4" height="4" rx="1" fill="rgba(20,184,166,0.3)"/>
            <rect x="34" y="56" width="4" height="4" rx="1" fill="rgba(245,158,11,0.3)"/>
            <rect x="40" y="56" width="4" height="4" rx="1" fill="rgba(245,158,11,0.4)"/>
            <rect x="46" y="56" width="4" height="4" rx="1" fill="rgba(244,63,94,0.3)"/>
            <rect x="70" y="38" width="20" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="70" y="46" width="60" height="8" rx="3" fill="rgba(217,119,6,0.25)"/>
            <rect x="70" y="58" width="40" height="3" rx="1.5" fill="rgba(15,23,42,0.06)"/>
            <rect x="16" y="76" width="60" height="28" rx="5" fill="rgba(248,250,252,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <polyline points="22,96 32,88 42,91 52,82 62,78 68,80" stroke="rgba(217,119,6,0.6)" stroke-width="1.5" fill="none" stroke-linecap="round"/>
            <rect x="84" y="76" width="60" height="28" rx="5" fill="rgba(248,250,252,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="90" y="82" width="8" height="16" rx="2" fill="rgba(217,119,6,0.3)"/>
            <rect x="102" y="88" width="8" height="10" rx="2" fill="rgba(217,119,6,0.45)"/>
            <rect x="114" y="84" width="8" height="14" rx="2" fill="rgba(217,119,6,0.35)"/>
            <rect x="126" y="80" width="8" height="18" rx="2" fill="rgba(217,119,6,0.55)"/>
          </svg>
        </div>
      </div>


      <div class="story-card">
        <div>
          <div class="story-tag">Unified Data</div>
          <div class="story-title">Unifying Data Across 12 Systems for a Retail Chain</div>
          <div class="story-desc">We unified data from 12 disconnected systems into a single trusted data layer, giving leadership a real-time view of operations across all locations for the first time.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <circle cx="80" cy="60" r="18" fill="rgba(217,119,6,0.12)" stroke="rgba(217,119,6,0.3)" stroke-width="1.5"/>
            <circle cx="80" cy="60" r="6" fill="rgba(217,119,6,0.3)"/>
            <line x1="20" y1="25" x2="65" y2="52" stroke="rgba(217,119,6,0.25)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="80" y1="18" x2="80" y2="42" stroke="rgba(217,119,6,0.25)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="140" y1="25" x2="95" y2="52" stroke="rgba(217,119,6,0.25)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="20" y1="95" x2="65" y2="68" stroke="rgba(217,119,6,0.25)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="80" y1="102" x2="80" y2="78" stroke="rgba(217,119,6,0.25)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="140" y1="95" x2="95" y2="68" stroke="rgba(217,119,6,0.25)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <circle cx="20" cy="22" r="8" fill="rgba(245,158,11,0.2)" stroke="rgba(217,119,6,0.25)" stroke-width="1"/>
            <circle cx="80" cy="15" r="8" fill="rgba(245,158,11,0.2)" stroke="rgba(217,119,6,0.25)" stroke-width="1"/>
            <circle cx="140" cy="22" r="8" fill="rgba(245,158,11,0.2)" stroke="rgba(217,119,6,0.25)" stroke-width="1"/>
            <circle cx="20" cy="98" r="8" fill="rgba(245,158,11,0.2)" stroke="rgba(217,119,6,0.25)" stroke-width="1"/>
            <circle cx="80" cy="105" r="8" fill="rgba(245,158,11,0.2)" stroke="rgba(217,119,6,0.25)" stroke-width="1"/>
            <circle cx="140" cy="98" r="8" fill="rgba(245,158,11,0.2)" stroke="rgba(217,119,6,0.25)" stroke-width="1"/>
          </svg>
        </div>
      </div>


      <div class="story-card">
        <div>
          <div class="story-tag">BI & Analytics</div>
          <div class="story-title">Delivering BI Platform That Drives 40% Faster Decisions</div>
          <div class="story-desc">We built a full business intelligence platform for a logistics company, enabling data-driven decisions across procurement, operations and customer service — 40% faster.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="18" width="60" height="82" rx="6" fill="rgba(255,251,235,0.8)" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
            <rect x="22" y="26" width="48" height="4" rx="2" fill="rgba(217,119,6,0.2)"/>
            <rect x="22" y="34" width="40" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="44" width="48" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="52" width="36" height="4" rx="2" fill="rgba(217,119,6,0.15)"/>
            <rect x="22" y="62" width="48" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="70" width="40" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="80" width="48" height="4" rx="2" fill="rgba(217,119,6,0.15)"/>
            <rect x="84" y="18" width="68" height="40" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
            <polyline points="90,50 100,40 110,43 120,36 130,30 140,34 148,28" stroke="rgba(217,119,6,0.6)" stroke-width="1.5" fill="none" stroke-linecap="round"/>
            <polygon points="90,50 100,40 110,43 120,36 130,30 140,34 148,28 148,52 90,52" fill="rgba(217,119,6,0.05)"/>
            <rect x="84" y="66" width="32" height="32" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
            <circle cx="100" cy="82" r="10" fill="none" stroke="rgba(217,119,6,0.15)" stroke-width="5"/>
            <circle cx="100" cy="82" r="10" fill="none" stroke="rgba(217,119,6,0.55)" stroke-width="5" stroke-dasharray="32 31" stroke-dashoffset="15"/>
            <rect x="122" y="66" width="30" height="32" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.12)" stroke-width="1"/>
            <rect x="127" y="82" width="6" height="10" rx="2" fill="rgba(217,119,6,0.4)"/>
            <rect x="136" y="76" width="6" height="16" rx="2" fill="rgba(217,119,6,0.6)"/>
          </svg>
        </div>
      </div>

      <div class="story-card">
        <div>
          <div class="story-tag">Predictions</div>
          <div class="story-title">Predictive Analytics That Reduced Inventory Waste by 45%</div>
          <div class="story-desc">We built a predictive analytics model for a manufacturing client that forecasted demand with 92% accuracy, reducing overstock and waste by 45% in the first quarter.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="20" width="128" height="72" rx="6" fill="rgba(255,251,235,0.6)"/>
            <polyline points="20,80 36,68 52,72 68,58 84,50 100,54" stroke="rgba(217,119,6,0.7)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <polyline points="100,54 116,44 132,38 140,34" stroke="rgba(217,119,6,0.35)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5,3"/>
            <polygon points="20,80 36,68 52,72 68,58 84,50 100,54 100,84 20,84" fill="rgba(217,119,6,0.06)"/>
            <line x1="100" y1="20" x2="100" y2="92" stroke="rgba(217,119,6,0.2)" stroke-width="1" stroke-dasharray="3,3"/>
            <rect x="104" y="24" width="36" height="16" rx="5" fill="rgba(255,251,235,0.9)" stroke="rgba(217,119,6,0.2)" stroke-width="1"/>
            <rect x="108" y="29" width="28" height="4" rx="2" fill="rgba(217,119,6,0.3)"/>
            <circle cx="100" cy="54" r="4" fill="rgba(217,119,6,0.7)"/>
            <rect x="16" y="96" width="128" height="8" rx="2" fill="rgba(217,119,6,0.06)"/>
            <rect x="16" y="96" width="80" height="8" rx="2" fill="rgba(217,119,6,0.15)"/>
          </svg>
        </div>
      </div>



    </div>
  </div>
</section>

<!-- Process -->
<section class="section process">
  <div class="section-inner">
    <div class="section-tag">Our Data Process</div>
    <h2 class="section-title" style="color:#f1f5f9">From Raw Data To Real Decisions</h2>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
        <div class="step-title">Audit</div>
        <div class="step-desc">We map your data sources, quality and gaps across all systems.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg></div>
        <div class="step-title">Unify</div>
        <div class="step-desc">We build a single trusted data layer from all your sources.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div class="step-title">Model</div>
        <div class="step-desc">We structure data models optimised for your business questions.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div class="step-title">Visualise</div>
        <div class="step-desc">We build dashboards and reports that make data instantly clear.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div>
        <div class="step-title">Predict</div>
        <div class="step-desc">We add predictive models that help you stay ahead of the curve.</div>
      </div>
    </div>
  </div>
</section>

<!-- Products -->
<section class="section products">
  <div class="section-inner">
    <div class="section-tag">Explore Our Products</div>
    <h2 class="section-title">Data-Powered Products</h2>
    <p class="section-sub">Products we built using the same data intelligence expertise we bring to every client.</p>
    <div class="products-grid">
      <div class="product-card">
        <div class="product-card-img amber">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="12" y="10" width="176" height="120" rx="10" fill="rgba(255,255,255,0.7)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="12" y="10" width="176" height="22" rx="10" fill="rgba(217,119,6,0.08)"/>
            <rect x="22" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="78" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="134" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="28" y="48" width="26" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="28" y="56" width="36" height="8" rx="3" fill="rgba(217,119,6,0.3)"/>
            <rect x="22" y="78" width="162" height="42" rx="6" fill="rgba(255,255,255,0.7)"/>
            <rect x="30" y="106" width="10" height="8" rx="2" fill="rgba(217,119,6,0.4)"/>
            <rect x="44" y="99" width="10" height="15" rx="2" fill="rgba(217,119,6,0.55)"/>
            <rect x="58" y="102" width="10" height="12" rx="2" fill="rgba(217,119,6,0.4)"/>
            <rect x="72" y="95" width="10" height="19" rx="2" fill="rgba(217,119,6,0.65)"/>
            <rect x="86" y="90" width="10" height="24" rx="2" fill="rgba(217,119,6,0.7)"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">DatInsights</div>
          <div class="product-card-desc">Unified business intelligence platform. One view of all your data with real-time dashboards, predictive analytics and actionable insights.</div>
          <a href="/contact" class="product-card-link">Get Early Access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-card-img emerald">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="12" width="160" height="116" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
            <rect x="20" y="12" width="160" height="28" rx="12" fill="rgba(244,63,94,0.08)"/>
            <rect x="32" y="50" width="136" height="5" rx="2.5" fill="rgba(244,63,94,0.18)"/>
            <rect x="32" y="62" width="136" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="32" y="72" width="100" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
            <rect x="32" y="88" width="52" height="22" rx="8" fill="rgba(244,63,94,0.12)" stroke="rgba(244,63,94,0.2)" stroke-width="1"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">iSportOne</div>
          <div class="product-card-desc">Your sport. Your story. Forever. Record every match, build your career profile and connect with your sports community — for life.</div>
          <a href="/isportone" class="product-card-link">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-card-img violet">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="20" width="140" height="40" rx="14" fill="rgba(255,255,255,0.85)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="32" y="30" width="90" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="32" y="40" width="70" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <circle cx="148" cy="40" r="7" fill="rgba(124,58,237,0.15)"/>
            <rect x="40" y="76" width="140" height="40" rx="14" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <rect x="52" y="86" width="100" height="5" rx="2.5" fill="rgba(124,58,237,0.4)"/>
            <rect x="52" y="96" width="80" height="4" rx="2" fill="rgba(124,58,237,0.25)"/>
            <circle cx="44" cy="96" r="7" fill="rgba(124,58,237,0.2)"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">aiDesker</div>
          <div class="product-card-desc">AI-powered desk assistant for businesses. Automates workflows, handles queries and keeps your team productive around the clock.</div>
          <a href="/contact" class="product-card-link">Get Early Access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-card">
    <div class="cta-card-left">
      <div class="cta-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
      <h2 class="cta-heading">Ready To Turn Your Data Into <em>Intelligence?</em></h2>
      <p class="cta-sub">Whether you need unified data, dashboards, BI or predictive analytics — we can help you get there.</p>
    </div>
    <div class="cta-btns">
      <a href="/contact" class="btn-cta-primary">Talk To Our Experts <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/contact" class="btn-cta-secondary">Schedule a Consultation <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
