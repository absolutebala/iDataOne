<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: Enterprise Risk & Compliance Platform for FMCG | iDataOne</title>
<meta name="description" content="How iDataOne built a full-stack enterprise risk assessment and compliance platform with real-time dashboards, 5x5 severity matrix and role-based workflows for an FMCG leader.">
<meta name="keywords" content="enterprise risk platform case study, compliance platform development, risk assessment software, FMCG compliance, custom risk management platform, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: Enterprise Risk & Compliance Platform for FMCG | iDataOne">
<meta property="og:description" content="How iDataOne built a full-stack enterprise risk assessment and compliance platform with real-time dashboards, 5x5 severity matrix and role-based workflows for an FMCG leader.">
<meta property="og:url" content="https://idataone.com/case-study/risk-platform">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: Enterprise Risk & Compliance Platform for FMCG | iDataOne">
<meta name="twitter:description" content="How iDataOne built a full-stack enterprise risk assessment and compliance platform with real-time dashboards, 5x5 severity matrix and role-based workflows for an FMCG leader.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Building an Enterprise Risk & Compliance Platform for an FMCG Leader",
  "description": "How iDataOne built a full-stack enterprise risk assessment platform with real-time dashboards, 5x5 severity matrix, role-based workflows and threaded communication.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoNoBG.png"}},
  "url": "https://idataone.com/case-study/risk-platform",
  "mainEntityOfPage": "https://idataone.com/case-study/risk-platform",
  "about": [
    {"@type": "Thing", "name": "Risk Management Platform"},
    {"@type": "Thing", "name": "Enterprise Compliance Software"},
    {"@type": "Thing", "name": "FMCG Industry"}
  ],
  "keywords": "enterprise risk platform, compliance software, FMCG, risk assessment, real-time dashboard"
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/risk-platform">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Hero */
.cs-hero{
  min-height:auto;
  display:flex;
  align-items:center;
  padding:100px 0 60px;
  position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 10% 30%,rgba(99,102,241,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(124,58,237,0.08),transparent 40%),radial-gradient(ellipse at 60% 90%,rgba(20,184,166,0.05),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#eef2ff 45%,#ede9fe 100%);
}
.cs-hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;max-width:900px;margin:0 auto;padding:0 32px}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.08);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#4f46e5;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,48px);font-weight:800;letter-spacing:-2px;line-height:1.08;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:28px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
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
    <div class="cs-badge">Digital Products · Enterprise</div>
    <h1 class="cs-hero-title">Building an Enterprise Risk & Compliance Platform for an FMCG Leader</h1>
    <p class="cs-hero-sub">How we designed and built a full-stack risk assessment platform that unified compliance workflows, real-time monitoring and team collaboration across an entire enterprise.</p>
    <div class="cs-hero-stats">
      <div class="cs-stat"><div class="cs-stat-num"><span>8</span></div><div class="cs-stat-label">Risk Categories</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>124</span></div><div class="cs-stat-label">Risks Tracked</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>3</span></div><div class="cs-stat-label">User Roles</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>5×5</span></div><div class="cs-stat-label">Severity Matrix</div></div>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Compliance Was Scattered Across Spreadsheets, Emails and Siloed Teams</h2>
    <p class="cs-p">A leading FMCG enterprise was managing food safety and regulatory compliance across multiple departments using spreadsheets, email chains and disconnected tools. Risk assessments lacked standardisation, critical issues were missed or delayed, and leadership had no single view of the organisation's risk posture.</p>
    <p class="cs-p">They needed a centralised platform that could capture, assess, track and communicate risks in real time — with role-based access for department users, managers and administrators.</p>
  </div>
</section>

<!-- Platform Visual -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Purpose-Built Risk Assessment Platform</h2>
    <p class="cs-p">We designed and built a comprehensive, role-based risk management platform from the ground up — covering the full lifecycle from risk identification through assessment, mitigation, review and reporting.</p>

    <div class="cs-visual">
      <svg viewBox="0 0 720 420" width="720" height="420" xmlns="http://www.w3.org/2000/svg">
        <!-- Dashboard frame -->
        <rect x="20" y="10" width="680" height="400" rx="16" fill="rgba(255,255,255,0.95)" stroke="rgba(99,102,241,0.15)" stroke-width="1.5"/>
        <rect x="20" y="10" width="680" height="40" rx="16" fill="rgba(99,102,241,0.06)"/>
        <rect x="20" y="34" width="680" height="16" fill="rgba(99,102,241,0.06)"/>
        <!-- Top bar -->
        <rect x="36" y="22" width="80" height="10" rx="4" fill="rgba(99,102,241,0.25)"/>
        <circle cx="672" cy="30" r="10" fill="rgba(99,102,241,0.1)"/>
        <!-- Sidebar -->
        <rect x="20" y="50" width="120" height="360" fill="rgba(248,250,252,0.9)"/>
        <rect x="36" y="66" width="88" height="8" rx="4" fill="rgba(99,102,241,0.2)"/>
        <rect x="36" y="86" width="72" height="6" rx="3" fill="rgba(15,23,42,0.08)"/>
        <rect x="36" y="100" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="114" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="128" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="142" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="156" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <!-- Metric cards -->
        <rect x="152" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="162" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="162" y="82" width="60" height="14" rx="4" fill="rgba(99,102,241,0.25)"/>
        <rect x="162" y="102" width="30" height="5" rx="2.5" fill="rgba(20,184,166,0.35)"/>
        <rect x="264" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(244,63,94,0.2)" stroke-width="1"/>
        <rect x="274" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="274" y="82" width="60" height="14" rx="4" fill="rgba(244,63,94,0.3)"/>
        <rect x="274" y="102" width="30" height="5" rx="2.5" fill="rgba(244,63,94,0.25)"/>
        <rect x="376" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
        <rect x="386" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="386" y="82" width="60" height="14" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="386" y="102" width="30" height="5" rx="2.5" fill="rgba(245,158,11,0.25)"/>
        <rect x="488" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
        <rect x="498" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="498" y="82" width="60" height="14" rx="4" fill="rgba(20,184,166,0.3)"/>
        <rect x="498" y="102" width="30" height="5" rx="2.5" fill="rgba(20,184,166,0.25)"/>
        <rect x="600" y="62" width="88" height="56" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="610" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="610" y="82" width="50" height="14" rx="4" fill="rgba(99,102,241,0.2)"/>
        <!-- 5x5 Matrix -->
        <rect x="152" y="132" width="240" height="180" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="162" y="142" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="170" y="160" width="28" height="28" rx="4" fill="rgba(20,184,166,0.15)"/>
        <rect x="202" y="160" width="28" height="28" rx="4" fill="rgba(20,184,166,0.2)"/>
        <rect x="234" y="160" width="28" height="28" rx="4" fill="rgba(245,158,11,0.2)"/>
        <rect x="266" y="160" width="28" height="28" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="298" y="160" width="28" height="28" rx="4" fill="rgba(244,63,94,0.3)"/>
        <rect x="170" y="192" width="28" height="28" rx="4" fill="rgba(20,184,166,0.2)"/>
        <rect x="202" y="192" width="28" height="28" rx="4" fill="rgba(245,158,11,0.2)"/>
        <rect x="234" y="192" width="28" height="28" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="266" y="192" width="28" height="28" rx="4" fill="rgba(244,63,94,0.3)"/>
        <rect x="298" y="192" width="28" height="28" rx="4" fill="rgba(244,63,94,0.4)"/>
        <rect x="170" y="224" width="28" height="28" rx="4" fill="rgba(245,158,11,0.15)"/>
        <rect x="202" y="224" width="28" height="28" rx="4" fill="rgba(245,158,11,0.25)"/>
        <rect x="234" y="224" width="28" height="28" rx="4" fill="rgba(244,63,94,0.25)"/>
        <rect x="266" y="224" width="28" height="28" rx="4" fill="rgba(244,63,94,0.35)"/>
        <rect x="298" y="224" width="28" height="28" rx="4" fill="rgba(244,63,94,0.5)"/>
        <rect x="170" y="256" width="28" height="28" rx="4" fill="rgba(245,158,11,0.2)"/>
        <rect x="202" y="256" width="28" height="28" rx="4" fill="rgba(244,63,94,0.25)"/>
        <rect x="234" y="256" width="28" height="28" rx="4" fill="rgba(244,63,94,0.35)"/>
        <rect x="266" y="256" width="28" height="28" rx="4" fill="rgba(244,63,94,0.45)"/>
        <rect x="298" y="256" width="28" height="28" rx="4" fill="rgba(124,58,237,0.5)"/>
        <!-- Risk circles on matrix -->
        <circle cx="248" cy="206" r="6" fill="rgba(244,63,94,0.7)"/>
        <circle cx="312" cy="270" r="5" fill="rgba(124,58,237,0.7)"/>
        <circle cx="280" cy="238" r="5" fill="rgba(244,63,94,0.6)"/>
        <circle cx="216" cy="174" r="6" fill="rgba(245,158,11,0.6)"/>
        <!-- Chart area -->
        <rect x="404" y="132" width="284" height="180" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="414" y="142" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="420" y="270" width="16" height="28" rx="4" fill="rgba(99,102,241,0.25)"/>
        <rect x="442" y="252" width="16" height="46" rx="4" fill="rgba(99,102,241,0.35)"/>
        <rect x="464" y="240" width="16" height="58" rx="4" fill="rgba(99,102,241,0.3)"/>
        <rect x="486" y="228" width="16" height="70" rx="4" fill="rgba(99,102,241,0.4)"/>
        <rect x="508" y="216" width="16" height="82" rx="4" fill="rgba(99,102,241,0.5)"/>
        <rect x="530" y="224" width="16" height="74" rx="4" fill="rgba(99,102,241,0.45)"/>
        <rect x="552" y="232" width="16" height="66" rx="4" fill="rgba(99,102,241,0.35)"/>
        <rect x="574" y="220" width="16" height="78" rx="4" fill="rgba(99,102,241,0.5)"/>
        <rect x="596" y="208" width="16" height="90" rx="4" fill="rgba(99,102,241,0.55)"/>
        <rect x="618" y="200" width="16" height="98" rx="4" fill="rgba(99,102,241,0.6)"/>
        <!-- Table -->
        <rect x="152" y="326" width="536" height="74" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="162" y="336" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="162" y="346" width="516" height="1" fill="rgba(226,232,240,0.8)"/>
        <rect x="162" y="354" width="120" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="310" y="354" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="352" width="40" height="8" rx="4" fill="rgba(244,63,94,0.15)"/>
        <rect x="470" y="354" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="560" y="354" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="368" width="120" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="310" y="368" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="366" width="40" height="8" rx="4" fill="rgba(245,158,11,0.2)"/>
        <rect x="470" y="368" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="560" y="368" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="382" width="120" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="310" y="382" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="400" y="380" width="40" height="8" rx="4" fill="rgba(20,184,166,0.2)"/>
      </svg>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div><div class="cs-feature-title">5×5 Risk Severity Matrix</div><div class="cs-feature-desc">Interactive likelihood × impact grid with named risk plotting and colour-coded classification from Low to Critical.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Role-Based Access</div><div class="cs-feature-desc">Three distinct user roles — Department Users submit risks, Managers review and approve, Admins configure thresholds and categories.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div><div class="cs-feature-title">Complete Risk Register</div><div class="cs-feature-desc">Filterable register with category, classification, strategy and status columns. Full detail view with mitigation plans and action tracking.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div><div class="cs-feature-title">Team Communication Log</div><div class="cs-feature-desc">Threaded discussions linked to each risk for full audit trails and team collaboration without leaving the platform.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <div><div class="cs-feature-title">Real-Time Dashboard</div><div class="cs-feature-desc">Live metrics across total risks, critical alerts, compliance scores and overdue actions — updated automatically.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><div class="cs-feature-title">Review & Approval Workflow</div><div class="cs-feature-desc">Department users submit risks for manager review. Managers approve, escalate or request changes before risks go live.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From Scattered Spreadsheets to a Single Source of Truth</h2>
    <p class="cs-p">Within weeks of deployment, the platform became the central hub for all risk and compliance activity. Teams across departments adopted the system, and leadership gained real-time visibility into the organisation's risk posture for the first time.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">124</div><div class="cs-result-label">Risks captured<br>and tracked</div></div>
      <div class="cs-result"><div class="cs-result-num">8</div><div class="cs-result-label">Risk categories<br>standardised</div></div>
      <div class="cs-result"><div class="cs-result-num">90%</div><div class="cs-result-label">Reduction in<br>manual reporting</div></div>
      <div class="cs-result"><div class="cs-result-num">3×</div><div class="cs-result-label">Faster risk<br>response time</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"For the first time, we have a single view of risk across the entire organisation. What used to take days of spreadsheet consolidation now happens in real time."</div>
      <div class="cs-quote-author">— Head of Compliance, FMCG Enterprise</div>
    </div>
  </div>
</section>

<!-- Tech Stack -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">How We Built It</div>
    <h2 class="cs-h2">Technology & Approach</h2>
    <div class="cs-grid">
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="cs-grid-title">Full-Stack Development</div>
        <div class="cs-grid-desc">Custom-built front-end with responsive design, RESTful API backend, and real-time data synchronisation across all user roles.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="cs-grid-title">Enterprise Security</div>
        <div class="cs-grid-desc">Role-based access control, encrypted data storage, audit logging and session management built for enterprise compliance requirements.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div class="cs-grid-title">Interactive Analytics</div>
        <div class="cs-grid-desc">Dynamic charts, filterable data views, severity matrix visualisation and exportable reports — all real-time.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg></div>
        <div class="cs-grid-title">Workflow Engine</div>
        <div class="cs-grid-desc">Structured submission → review → approval pipeline with configurable thresholds, categories and management strategies.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Similar <em>Platform?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can build one for your organisation.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
