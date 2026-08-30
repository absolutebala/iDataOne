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
<meta property="og:image" content="https://idataone.com/assets/images/og-risk-dashboard.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: Real-Time Risk Intelligence Dashboard for FMCG | iDataOne">
<meta name="twitter:description" content="How iDataOne built a real-time risk intelligence dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring for an enterprise FMCG company.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-risk-dashboard.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company",
  "description": "How iDataOne built a real-time risk analytics dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
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
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(217,119,6,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(245,158,11,0.08),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#fffbeb 45%,#fef3c7 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(217,119,6,0.12),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(245,158,11,0.1),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.cs-hero-img{display:flex;align-items:center;justify-content:center}
.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(217,119,6,0.18),0 8px 24px rgba(15,23,42,0.12);transition:transform 0.4s ease;cursor:zoom-in}
.cs-hero-img img:hover{transform:translateY(-4px)}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#d97706;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#d97706,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#d97706;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#fffbeb,#fef3c7)}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#fffbeb;border:1px solid rgba(217,119,6,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#d97706;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 16px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:28px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#d97706,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:12px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #d97706;background:#fffbeb;border-radius:0 16px 16px 0}
.cs-quote-text{font-size:16px;color:#334155;line-height:1.75;font-style:italic;margin-bottom:12px}
.cs-quote-author{font-size:13px;font-weight:600;color:#94a3b8}
.cs-grid{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-top:32px}
.cs-grid-card{background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px;padding:28px}
.cs-grid-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.cs-grid-icon svg{width:20px;height:20px;fill:none;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-grid-title{font-size:16px;font-weight:700;color:#0f172a;margin-bottom:8px}
.cs-grid-desc{font-size:13px;color:#64748b;line-height:1.7}
.cs-cta{padding:48px 32px 80px;background:#fff}
.cs-cta-card{max-width:800px;margin:0 auto;background:#0f172a;border-radius:24px;padding:40px 48px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:space-between;gap:32px}
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(217,119,6,0.18),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#fbbf24,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#d97706,#f59e0b);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}
.cs-back{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:500;color:rgba(255,255,255,0.4);text-decoration:none;margin-bottom:24px;transition:color 0.2s}
.cs-back:hover{color:rgba(255,255,255,0.8)}
.cs-back svg{width:14px;height:14px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
@media(max-width:768px){.cs-hero-inner{grid-template-columns:1fr}.cs-hero-img{display:none}.cs-hero-stats{flex-wrap:wrap;gap:24px}.cs-grid{grid-template-columns:1fr}.cs-features{grid-template-columns:1fr}.cs-results{grid-template-columns:1fr 1fr}.cs-cta-card{flex-direction:column;padding:32px 24px;text-align:center}}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- Hero -->
<section class="cs-hero">
  <div class="cs-hero-inner">
    <div>
      <h1 class="cs-hero-title">Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company</h1>
      <p class="cs-hero-sub">How we turned fragmented risk data into a unified intelligence layer with real-time visualisation, trend analytics and automated compliance scoring.</p>
      <div class="cs-hero-stats">
        <div class="cs-stat"><div class="cs-stat-num"><span>124</span></div><div class="cs-stat-label">Risks Monitored</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>8</span></div><div class="cs-stat-label">Categories Tracked</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>7.5</span></div><div class="cs-stat-label">Compliance Score</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>12</span></div><div class="cs-stat-label">Month Trend Data</div></div>
      </div>
    </div>
    <div class="cs-hero-img">
      <span class="hz-wrap"><img src="/assets/images/risk-platform-hero.png" alt="Real-time risk intelligence dashboard — risk assessment, review and monitoring for an enterprise FMCG company" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
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

    <div class="cs-visual" style="padding:0;background:none;border:none">
      <span class="hz-wrap"><img src="/assets/images/risk-platform-architecture.png" alt="Risk intelligence dashboard architecture — role-based access, 5x5 risk severity matrix, complete risk register, team communication log, real-time dashboard, review and approval workflow" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(99,102,241,0.18),0 8px 24px rgba(15,23,42,0.12);cursor:zoom-in" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
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

<!-- Hover zoom lightbox -->
<div id="hz-overlay" onclick="hzClose()" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0);align-items:center;justify-content:center;transition:background 0.3s ease;cursor:zoom-out">
  <img id="hz-img" src="" alt="" onclick="event.stopPropagation()" style="max-width:92vw;max-height:90vh;border-radius:16px;box-shadow:0 32px 120px rgba(0,0,0,0.7);transform:scale(0.85);opacity:0;transition:transform 0.35s cubic-bezier(0.34,1.56,0.64,1),opacity 0.3s ease;object-fit:contain;cursor:default"/>
</div>
<script>
(function(){
  var ov=document.getElementById('hz-overlay');
  var im=document.getElementById('hz-img');
  var closeTimer=null;
  window.hzOpen=function(src,alt){ clearTimeout(closeTimer); im.src=src; im.alt=alt||''; ov.style.display='flex'; requestAnimationFrame(function(){ requestAnimationFrame(function(){ ov.style.background='rgba(0,0,0,0.85)'; im.style.transform='scale(1)'; im.style.opacity='1'; }); }); };
  window.hzHover=function(el){ if(el.dataset.hzSeen) return; el.dataset.hzSeen='1'; window.hzOpen(el.src,el.alt); };
  window.hzClose=function(){ ov.style.background='rgba(0,0,0,0)'; im.style.transform='scale(0.85)'; im.style.opacity='0'; clearTimeout(closeTimer); closeTimer=setTimeout(function(){ ov.style.display='none'; },320); };
  document.addEventListener('keydown',function(e){ if(e.key==='Escape') window.hzClose(); });
})();
</script>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
