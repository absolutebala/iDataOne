<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: Telecom Infrastructure Project Management Platform | iDataOne</title>
<meta name="description" content="How iDataOne built a full-stack project, vendor and financial management platform that unified telecom infrastructure operations for Venus Energy, a vendor for Indus Towers, across multiple regions and roles.">
<meta name="keywords" content="telecom project management software, vendor management platform, infrastructure project tracking, telecom PMS, PO tracking software, Indus Towers vendor, Next.js Supabase platform, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/telecom-pm-platform">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: Telecom Infrastructure Project Management Platform | iDataOne">
<meta property="og:description" content="How iDataOne built a full-stack project, vendor and financial management platform that unified telecom infrastructure operations for Venus Energy.">
<meta property="og:url" content="https://idataone.com/case-study/telecom-pm-platform">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: Telecom Infrastructure Project Management Platform | iDataOne">
<meta name="twitter:description" content="How iDataOne built a full-stack project, vendor and financial management platform that unified telecom infrastructure operations for Venus Energy.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Building a Telecom Infrastructure Project Management Platform for Venus Energy",
  "description": "How iDataOne designed and built a full-stack project, vendor and financial management platform that unified telecom infrastructure operations across multiple regions and roles.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoNoBG.png"}},
  "url": "https://idataone.com/case-study/telecom-pm-platform",
  "mainEntityOfPage": "https://idataone.com/case-study/telecom-pm-platform",
  "about": [
    {"@type": "Thing", "name": "Telecom Infrastructure Management"},
    {"@type": "Thing", "name": "Project Management Software"},
    {"@type": "Thing", "name": "Vendor Management Platform"},
    {"@type": "Organization", "name": "Indus Towers"}
  ],
  "keywords": "telecom project management, vendor management, PO tracking, infrastructure operations, Next.js, Supabase"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}
.cs-hero{background:linear-gradient(135deg,#0f172a 0%,#1e1b4b 50%,#0f172a 100%);padding:80px 32px 60px;position:relative;overflow:hidden}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(99,102,241,0.15),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(124,58,237,0.12),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:800px;margin:0 auto;position:relative;z-index:1}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(99,102,241,0.15);border:1px solid rgba(99,102,241,0.25);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#818cf8;margin-bottom:24px}
.cs-hero-title{font-size:clamp(30px,5vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#fff;margin-bottom:20px}
.cs-hero-sub{font-size:17px;color:rgba(255,255,255,0.45);line-height:1.75;margin-bottom:40px;max-width:620px}
.cs-hero-stats{display:flex;gap:48px;padding-top:32px;border-top:1px solid rgba(255,255,255,0.08);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:30px;font-weight:800;letter-spacing:-1.5px;color:#fff}
.cs-stat-num span{background:linear-gradient(90deg,#818cf8,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:rgba(255,255,255,0.35);margin-top:4px}
.cs-section{padding:72px 32px}
.cs-inner{max-width:800px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#6366f1;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#eef2ff;border:1px solid rgba(99,102,241,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#4f46e5;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#f8fafc,#eef2ff)}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 16px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:26px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:12px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #4f46e5;background:#f8fafc;border-radius:0 16px 16px 0}
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
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(99,102,241,0.2),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#818cf8,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}
@media(max-width:768px){
  .cs-hero-stats{gap:24px}
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
    <div class="cs-badge">Digital Products · Telecom Infrastructure</div>
    <h1 class="cs-hero-title">Building a Telecom Infrastructure Project Management Platform for Venus Energy</h1>
    <p class="cs-hero-sub">How we designed and built a full-stack project, vendor and financial management platform that unified telecom infrastructure operations for Indus Towers across multiple regions and roles.</p>
    <div class="cs-hero-stats">
      <div class="cs-stat"><div class="cs-stat-num"><span>2,200+</span></div><div class="cs-stat-label">Projects Tracked</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>4</span></div><div class="cs-stat-label">User Roles</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>50+</span></div><div class="cs-stat-label">Vendors Managed</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>₹7+ Cr</span></div><div class="cs-stat-label">Total PO Value Tracked</div></div>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Telecom Project Data Was Fragmented Across Spreadsheets and Manual Trackers</h2>
    <p class="cs-p">Venus Energy, a telecom infrastructure company executing projects for Indus Towers, was managing thousands of projects — tower erection, SMPS installation, civil works, and more — across multiple vendors, project managers and regions using disconnected spreadsheets. PO statuses, material movement (STN/SRN), expenses and invoices lived in separate files with no single source of truth, making it hard to track project health, vendor performance or financial exposure in real time.</p>
    <p class="cs-p">They needed a centralised platform that could manage the full project lifecycle — from PO creation through vendor assignment, material tracking, permits, expenses, billing and financial reconciliation — with role-based access for super admins, regional managers, project managers and vendors.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Purpose-Built Telecom Project Management Platform</h2>
    <p class="cs-p">We designed and built a comprehensive, role-based project management platform from the ground up — covering the complete operational and financial lifecycle of telecom infrastructure projects.</p>

    <div class="cs-visual">
      <svg viewBox="0 0 720 400" width="720" height="400" xmlns="http://www.w3.org/2000/svg">
        <rect x="20" y="10" width="680" height="380" rx="16" fill="rgba(255,255,255,0.95)" stroke="rgba(99,102,241,0.15)" stroke-width="1.5"/>
        <rect x="20" y="10" width="680" height="40" rx="16" fill="rgba(99,102,241,0.06)"/>
        <rect x="20" y="34" width="680" height="16" fill="rgba(99,102,241,0.06)"/>
        <rect x="36" y="22" width="80" height="10" rx="4" fill="rgba(99,102,241,0.25)"/>
        <circle cx="672" cy="30" r="10" fill="rgba(99,102,241,0.1)"/>
        <rect x="20" y="50" width="120" height="340" fill="rgba(248,250,252,0.9)"/>
        <rect x="36" y="66" width="88" height="8" rx="4" fill="rgba(99,102,241,0.2)"/>
        <rect x="36" y="86" width="72" height="6" rx="3" fill="rgba(15,23,42,0.08)"/>
        <rect x="36" y="100" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="114" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="128" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="36" y="142" width="72" height="6" rx="3" fill="rgba(15,23,42,0.06)"/>
        <rect x="152" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="162" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="162" y="82" width="60" height="14" rx="4" fill="rgba(99,102,241,0.25)"/>
        <rect x="162" y="102" width="30" height="5" rx="2.5" fill="rgba(20,184,166,0.35)"/>
        <rect x="264" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
        <rect x="274" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="274" y="82" width="60" height="14" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="274" y="102" width="30" height="5" rx="2.5" fill="rgba(245,158,11,0.25)"/>
        <rect x="376" y="62" width="100" height="56" rx="10" fill="#fff" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
        <rect x="386" y="72" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="386" y="82" width="60" height="14" rx="4" fill="rgba(20,184,166,0.3)"/>
        <rect x="386" y="102" width="30" height="5" rx="2.5" fill="rgba(20,184,166,0.25)"/>
        <rect x="488" y="62" width="200" height="56" rx="10" fill="#fff" stroke="rgba(99,102,241,0.2)" stroke-width="1"/>
        <rect x="498" y="72" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="498" y="82" width="100" height="14" rx="4" fill="rgba(99,102,241,0.3)"/>
        <rect x="498" y="102" width="50" height="5" rx="2.5" fill="rgba(99,102,241,0.25)"/>
        <rect x="152" y="132" width="270" height="180" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="162" y="142" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="162" y="160" width="250" height="1" fill="rgba(226,232,240,0.8)"/>
        <rect x="162" y="170" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="168" width="40" height="8" rx="4" fill="rgba(99,102,241,0.15)"/>
        <rect x="320" y="170" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="186" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="184" width="40" height="8" rx="4" fill="rgba(20,184,166,0.2)"/>
        <rect x="320" y="186" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="202" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="200" width="40" height="8" rx="4" fill="rgba(245,158,11,0.2)"/>
        <rect x="320" y="202" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="218" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="216" width="40" height="8" rx="4" fill="rgba(244,63,94,0.18)"/>
        <rect x="320" y="218" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="234" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="232" width="40" height="8" rx="4" fill="rgba(99,102,241,0.15)"/>
        <rect x="320" y="234" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="250" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="248" width="40" height="8" rx="4" fill="rgba(20,184,166,0.2)"/>
        <rect x="320" y="250" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="162" y="266" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="260" y="264" width="40" height="8" rx="4" fill="rgba(99,102,241,0.15)"/>
        <rect x="320" y="266" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="434" y="132" width="254" height="86" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="444" y="142" width="60" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="444" y="158" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="600" y="156" width="70" height="8" rx="4" fill="rgba(20,184,166,0.25)"/>
        <rect x="444" y="172" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="600" y="170" width="70" height="8" rx="4" fill="rgba(244,63,94,0.2)"/>
        <rect x="444" y="186" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
        <rect x="600" y="184" width="70" height="8" rx="4" fill="rgba(99,102,241,0.2)"/>
        <rect x="434" y="228" width="254" height="84" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="444" y="238" width="60" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <polyline points="450,290 470,278 490,282 510,268 530,260 550,264 570,250 590,244 610,248 630,238" stroke="rgba(99,102,241,0.6)" stroke-width="2" fill="none" stroke-linecap="round"/>
        <polygon points="450,290 470,278 490,282 510,268 530,260 550,264 570,250 590,244 610,248 630,238 630,302 450,302" fill="rgba(99,102,241,0.05)"/>
      </svg>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Multi-Role Project Workspace</div><div class="cs-feature-desc">Four distinct roles — Super Admin, Region Manager, Project Manager, Vendor — each see a tailored dashboard and project list scoped to their responsibility.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
        <div><div class="cs-feature-title">STN/SRN Material Tracking</div><div class="cs-feature-desc">Full material issue and return lifecycle with PM approval workflows, vendor utilisation submission, and item-level Excel exports.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><div class="cs-feature-title">PTW (Permit to Work) Management</div><div class="cs-feature-desc">Raiser, permit type, validity dates and status tracking per project, with inline editable records.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div><div class="cs-feature-title">Financial Summary & P/L Tracking</div><div class="cs-feature-desc">PO value, expense paid, billed amount and live profit/loss projection per project, aggregated by PO number across linked projects.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polyline points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></div>
        <div><div class="cs-feature-title">Cascading Multi-Select Filters</div><div class="cs-feature-desc">Every list view supports multi-select filtering across status, vendor, PM, region and type — with each dropdown narrowing to relevant options only.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div><div class="cs-feature-title">Bulk Operations</div><div class="cs-feature-desc">Bulk PO status updates via Excel upload, processed in batched queries to handle thousands of records without timing out.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From Scattered Spreadsheets to a Single Operational System</h2>
    <p class="cs-p">Within weeks of rollout, the platform became the operational backbone for project tracking, vendor coordination and financial reconciliation across the business.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">2,200+</div><div class="cs-result-label">Projects centralised<br>and tracked</div></div>
      <div class="cs-result"><div class="cs-result-num">₹7+ Cr</div><div class="cs-result-label">Total PO value visible<br>in real time</div></div>
      <div class="cs-result"><div class="cs-result-num">4</div><div class="cs-result-label">User roles with<br>tailored views</div></div>
      <div class="cs-result"><div class="cs-result-num">Real-Time</div><div class="cs-result-label">PO, billing and<br>expense reconciliation</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"We finally have one place to see every project, every vendor, every rupee — instead of chasing updates across a dozen spreadsheets."</div>
      <div class="cs-quote-author">— Operations Lead, Venus Energy Pvt. Ltd.</div>
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
        <div class="cs-grid-desc">Next.js 14 + TypeScript front end, Supabase (PostgreSQL) backend with row-level security, deployed on Vercel.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="cs-grid-title">Role-Based Access Control</div>
        <div class="cs-grid-desc">Granular per-section permissions (read/create/edit/delete) configurable per role from an admin console, enforced both in UI and at the data layer.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></div>
        <div class="cs-grid-title">Real-Time Sync</div>
        <div class="cs-grid-desc">Supabase Realtime subscriptions keep dashboards, notifications and project lists live across all connected users.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div class="cs-grid-title">Resilient Bulk Processing</div>
        <div class="cs-grid-desc">Batched <code>.in()</code> queries and chunked uploads to reliably process thousands of records within serverless function time limits.</div>
      </div>
      <div class="cs-grid-card" style="grid-column:1/-1">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg></div>
        <div class="cs-grid-title">Reusable UI System</div>
        <div class="cs-grid-desc">Shared MultiSelect, DateInput and modal components ensure consistent filtering and editing patterns across every module.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Similar <em>Platform?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can build one for your operations.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
