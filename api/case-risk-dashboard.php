<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: Real-Time Risk Intelligence Dashboard for FMCG | iDataOne</title>
<meta name="description" content="How iDataOne built a real-time risk intelligence dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring for an enterprise FMCG company.">
<meta name="keywords" content="risk dashboard case study, data intelligence dashboard, compliance analytics, FMCG risk analytics, real-time dashboard development, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: Real-Time Risk Intelligence Dashboard for FMCG | iDataOne">
<meta property="og:description" content="How iDataOne built a real-time risk intelligence dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring for an enterprise FMCG company.">
<meta property="og:url" content="https://idataone.com/case-study/risk-dashboard">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: Real-Time Risk Intelligence Dashboard for FMCG | iDataOne">
<meta name="twitter:description" content="How iDataOne built a real-time risk intelligence dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring for an enterprise FMCG company.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company",
  "description": "How iDataOne built a real-time risk analytics dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoNoBG.png"}},
  "url": "https://idataone.com/case-study/risk-dashboard",
  "mainEntityOfPage": "https://idataone.com/case-study/risk-dashboard",
  "about": [
    {"@type": "Thing", "name": "Risk Intelligence Dashboard"},
    {"@type": "Thing", "name": "Data Analytics"},
    {"@type": "Thing", "name": "FMCG Industry"}
  ],
  "keywords": "risk dashboard, data intelligence, FMCG compliance, real-time analytics, business intelligence"
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/risk-dashboard">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}
.cs-hero{
  min-height:auto;
  display:flex;
  align-items:center;
  padding:100px 0 60px;
  position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 10% 30%,rgba(217,119,6,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(245,158,11,0.08),transparent 40%),radial-gradient(ellipse at 60% 90%,rgba(99,102,241,0.05),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#fffbeb 45%,#fef3c7 100%);
}
.cs-hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;max-width:900px;margin:0 auto;padding:0 32px}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.08);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#d97706;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,48px);font-weight:800;letter-spacing:-2px;line-height:1.08;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:28px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#d97706,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
@media(max-width:768px){
  
  .cs-hero-stats{gap:20px}
  .cs-grid{grid-template-columns:1fr}
  .cs-features{grid-template-columns:1fr}
  .cs-results{grid-template-columns:1fr 1fr}
  .cs-cta-card{flex-direction:column;padding:32px 24px;text-align:center}
}</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- Hero -->
<section class="cs-hero">
  <div class="cs-hero-inner">
    <div class="cs-badge">Data Intelligence · Analytics</div>
    <h1 class="cs-hero-title">Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company</h1>
    <p class="cs-hero-sub">How we turned fragmented risk data into a unified intelligence layer with real-time visualisation, trend analytics and automated compliance scoring.</p>
    <div class="cs-hero-stats">
      <div class="cs-stat"><div class="cs-stat-num"><span>124</span></div><div class="cs-stat-label">Risks Monitored</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>8</span></div><div class="cs-stat-label">Categories Tracked</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>7.5</span></div><div class="cs-stat-label">Compliance Score</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>12</span></div><div class="cs-stat-label">Month Trend Data</div></div>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Risk Data Existed Everywhere — Except Where Decisions Were Made</h2>
    <p class="cs-p">The enterprise had risk data scattered across department spreadsheets, email threads and periodic PDF reports. Leadership received weekly compliance summaries that were already outdated by the time they arrived. There was no way to see the real-time risk landscape, spot emerging trends, or drill into department-level exposure.</p>
    <p class="cs-p">They needed a live, interactive dashboard that could aggregate risk data from every department into a single intelligence layer — with the ability to filter, trend and act on insights immediately.</p>
  </div>
</section>

<!-- Dashboard Visual -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Real-Time Risk Intelligence Layer</h2>
    <p class="cs-p">We built a comprehensive analytics dashboard that transforms raw risk data into visual intelligence — giving every stakeholder from department users to senior leadership exactly the view they need.</p>

    <div class="cs-visual">
      <svg viewBox="0 0 720 400" width="720" height="400" xmlns="http://www.w3.org/2000/svg">
        <!-- Frame -->
        <rect x="20" y="10" width="680" height="380" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(217,119,6,0.15)" stroke-width="1.5"/>
        <rect x="20" y="10" width="680" height="36" rx="14" fill="rgba(217,119,6,0.06)"/>
        <rect x="20" y="32" width="680" height="14" fill="rgba(217,119,6,0.06)"/>
        <rect x="36" y="22" width="80" height="8" rx="4" fill="rgba(217,119,6,0.25)"/>
        <!-- KPI cards row -->
        <rect x="36" y="58" width="105" height="52" rx="8" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <rect x="46" y="67" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="46" y="76" width="56" height="12" rx="4" fill="rgba(217,119,6,0.25)"/>
        <rect x="46" y="94" width="28" height="5" rx="2.5" fill="rgba(20,184,166,0.3)"/>
        <rect x="151" y="58" width="105" height="52" rx="8" fill="#fff" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
        <rect x="161" y="67" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="161" y="76" width="56" height="12" rx="4" fill="rgba(244,63,94,0.3)"/>
        <rect x="161" y="94" width="28" height="5" rx="2.5" fill="rgba(244,63,94,0.25)"/>
        <rect x="266" y="58" width="105" height="52" rx="8" fill="#fff" stroke="rgba(245,158,11,0.15)" stroke-width="1"/>
        <rect x="276" y="67" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="276" y="76" width="56" height="12" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="276" y="94" width="28" height="5" rx="2.5" fill="rgba(245,158,11,0.25)"/>
        <rect x="381" y="58" width="105" height="52" rx="8" fill="#fff" stroke="rgba(20,184,166,0.15)" stroke-width="1"/>
        <rect x="391" y="67" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="391" y="76" width="56" height="12" rx="4" fill="rgba(20,184,166,0.3)"/>
        <rect x="391" y="94" width="28" height="5" rx="2.5" fill="rgba(20,184,166,0.35)"/>
        <rect x="496" y="58" width="105" height="52" rx="8" fill="#fff" stroke="rgba(99,102,241,0.15)" stroke-width="1"/>
        <rect x="506" y="67" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="506" y="76" width="56" height="12" rx="4" fill="rgba(99,102,241,0.25)"/>
        <rect x="611" y="58" width="78" height="52" rx="8" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="621" y="67" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="621" y="76" width="40" height="12" rx="4" fill="rgba(217,119,6,0.2)"/>
        <!-- Trend chart -->
        <rect x="36" y="124" width="340" height="130" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="48" y="134" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <polyline points="48,238 78,224 108,228 138,216 168,208 198,212 228,198 258,192 288,196 318,184 348,178 362,180" stroke="rgba(217,119,6,0.65)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        <polygon points="48,238 78,224 108,228 138,216 168,208 198,212 228,198 258,192 288,196 318,184 348,178 362,180 362,246 48,246" fill="rgba(217,119,6,0.04)"/>
        <polyline points="48,234 78,230 108,228 138,230 168,226 198,224 228,222 258,218 288,220 318,216 348,212 362,214" stroke="rgba(244,63,94,0.45)" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-dasharray="4,3"/>
        <circle cx="348" cy="178" r="4" fill="rgba(217,119,6,0.7)"/>
        <!-- Donut chart -->
        <rect x="390" y="124" width="150" height="130" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="402" y="134" width="60" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <circle cx="465" cy="196" r="36" fill="none" stroke="rgba(226,232,240,0.3)" stroke-width="14"/>
        <circle cx="465" cy="196" r="36" fill="none" stroke="rgba(244,63,94,0.7)" stroke-width="14" stroke-dasharray="28 198" stroke-dashoffset="56"/>
        <circle cx="465" cy="196" r="36" fill="none" stroke="rgba(245,158,11,0.6)" stroke-width="14" stroke-dasharray="54 172" stroke-dashoffset="28"/>
        <circle cx="465" cy="196" r="36" fill="none" stroke="rgba(20,184,166,0.5)" stroke-width="14" stroke-dasharray="82 144" stroke-dashoffset="-26"/>
        <circle cx="465" cy="196" r="36" fill="none" stroke="rgba(99,102,241,0.4)" stroke-width="14" stroke-dasharray="60 166" stroke-dashoffset="-108"/>
        <!-- Strategy breakdown -->
        <rect x="554" y="124" width="136" height="130" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="566" y="134" width="60" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="566" y="152" width="112" height="8" rx="3" fill="rgba(217,119,6,0.15)"/>
        <rect x="566" y="152" width="82" height="8" rx="3" fill="rgba(217,119,6,0.5)"/>
        <rect x="566" y="168" width="112" height="8" rx="3" fill="rgba(99,102,241,0.15)"/>
        <rect x="566" y="168" width="48" height="8" rx="3" fill="rgba(99,102,241,0.5)"/>
        <rect x="566" y="184" width="112" height="8" rx="3" fill="rgba(20,184,166,0.15)"/>
        <rect x="566" y="184" width="32" height="8" rx="3" fill="rgba(20,184,166,0.5)"/>
        <rect x="566" y="200" width="112" height="8" rx="3" fill="rgba(245,158,11,0.15)"/>
        <rect x="566" y="200" width="20" height="8" rx="3" fill="rgba(245,158,11,0.5)"/>
        <!-- Bar chart bottom left -->
        <rect x="36" y="268" width="220" height="110" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="48" y="278" width="60" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="52" y="340" width="18" height="24" rx="4" fill="rgba(217,119,6,0.3)"/>
        <rect x="76" y="324" width="18" height="40" rx="4" fill="rgba(217,119,6,0.45)"/>
        <rect x="100" y="332" width="18" height="32" rx="4" fill="rgba(217,119,6,0.35)"/>
        <rect x="124" y="316" width="18" height="48" rx="4" fill="rgba(217,119,6,0.55)"/>
        <rect x="148" y="308" width="18" height="56" rx="4" fill="rgba(217,119,6,0.65)"/>
        <rect x="172" y="320" width="18" height="44" rx="4" fill="rgba(217,119,6,0.5)"/>
        <rect x="196" y="312" width="18" height="52" rx="4" fill="rgba(217,119,6,0.6)"/>
        <rect x="220" y="304" width="18" height="60" rx="4" fill="rgba(217,119,6,0.7)"/>
        <!-- Department table bottom right -->
        <rect x="270" y="268" width="420" height="110" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="282" y="278" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="282" y="292" width="396" height="1" fill="rgba(226,232,240,0.8)"/>
        <rect x="282" y="300" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="300" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="470" y="298" width="50" height="8" rx="4" fill="rgba(244,63,94,0.15)"/>
        <rect x="560" y="298" width="80" height="8" rx="2" fill="rgba(226,232,240,0.3)"/>
        <rect x="560" y="298" width="52" height="8" rx="2" fill="rgba(244,63,94,0.3)"/>
        <rect x="282" y="316" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="316" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="470" y="314" width="50" height="8" rx="4" fill="rgba(245,158,11,0.2)"/>
        <rect x="560" y="314" width="80" height="8" rx="2" fill="rgba(226,232,240,0.3)"/>
        <rect x="560" y="314" width="36" height="8" rx="2" fill="rgba(245,158,11,0.35)"/>
        <rect x="282" y="332" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="332" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="470" y="330" width="50" height="8" rx="4" fill="rgba(20,184,166,0.2)"/>
        <rect x="560" y="330" width="80" height="8" rx="2" fill="rgba(226,232,240,0.3)"/>
        <rect x="560" y="330" width="24" height="8" rx="2" fill="rgba(20,184,166,0.35)"/>
        <rect x="282" y="348" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="348" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="470" y="346" width="50" height="8" rx="4" fill="rgba(20,184,166,0.15)"/>
        <rect x="560" y="346" width="80" height="8" rx="2" fill="rgba(226,232,240,0.3)"/>
        <rect x="560" y="346" width="16" height="8" rx="2" fill="rgba(20,184,166,0.3)"/>
      </svg>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div><div class="cs-feature-title">12-Month Risk Trends</div><div class="cs-feature-desc">Interactive trend lines showing total risks and high/critical risks over time, with the ability to spot emerging patterns.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div><div class="cs-feature-title">Real-Time KPI Cards</div><div class="cs-feature-desc">Live metrics for total risks, critical alerts, compliance scores and overdue actions — updated automatically as data changes.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div><div class="cs-feature-title">5×5 Severity Matrix</div><div class="cs-feature-desc">Visual heat map of likelihood vs impact with individual risks plotted as data points — instant clarity on where the biggest exposures lie.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Department Breakdowns</div><div class="cs-feature-desc">Risk exposure by department with progress bars, enabling targeted resource allocation and accountability.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div>
        <div><div class="cs-feature-title">Classification Distribution</div><div class="cs-feature-desc">Donut chart showing the split across Critical, High, Medium and Low risks — with drill-down capability.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div><div class="cs-feature-title">Export & Reporting</div><div class="cs-feature-desc">One-click PDF and CSV exports for board reports, audit submissions and regulatory filings.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Impact</div>
    <h2 class="cs-h2">From Weekly Reports to Real-Time Intelligence</h2>
    <p class="cs-p">The dashboard replaced a manual, spreadsheet-driven reporting process with live, always-on visibility into the organisation's risk landscape. Leadership now makes data-driven compliance decisions in minutes instead of days.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">90%</div><div class="cs-result-label">Less time on<br>manual reporting</div></div>
      <div class="cs-result"><div class="cs-result-num">Real-Time</div><div class="cs-result-label">Risk visibility<br>across all depts</div></div>
      <div class="cs-result"><div class="cs-result-num">8</div><div class="cs-result-label">Categories<br>standardised</div></div>
      <div class="cs-result"><div class="cs-result-num">7.5</div><div class="cs-result-label">Weighted compliance<br>score achieved</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"We used to spend two days compiling a weekly risk report. Now the board opens a live dashboard and sees everything — severity, trends, ownership, actions — in real time."</div>
      <div class="cs-quote-author">— Director of Risk & Compliance, FMCG Enterprise</div>
    </div>
  </div>
</section>

<!-- Data Architecture -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">Under the Hood</div>
    <h2 class="cs-h2">Data Architecture & Approach</h2>
    <div class="cs-grid">
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg></div>
        <div class="cs-grid-title">Unified Data Model</div>
        <div class="cs-grid-desc">Structured schema covering 8 risk categories, 4 management strategies and configurable classification thresholds — all in one normalised data layer.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <div class="cs-grid-title">Real-Time Aggregation</div>
        <div class="cs-grid-desc">Live computation of KPIs, compliance scores and trend data as risks are created, updated or resolved — no batch processing delays.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div class="cs-grid-title">Interactive Visualisation</div>
        <div class="cs-grid-desc">Charts, matrices and tables that respond to filters and clicks — enabling drill-down from organisation-level summaries to individual risk details.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="cs-grid-title">Automated Scoring</div>
        <div class="cs-grid-desc">Weighted compliance scores calculated automatically based on configurable thresholds — with historical tracking for audit and trend analysis.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Similar <em>Dashboard?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can build one for your data.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
