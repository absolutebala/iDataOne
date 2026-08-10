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
.cs-hero{
  min-height:auto;
  display:flex;
  align-items:center;
  padding:100px 0 60px;
  position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 10% 30%,rgba(13,148,136,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(20,184,166,0.08),transparent 40%),radial-gradient(ellipse at 60% 90%,rgba(99,102,241,0.06),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#f0fdfa 45%,#ccfbf1 100%);
}
.cs-hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.08);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#0d9488;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,48px);font-weight:800;letter-spacing:-2px;line-height:1.08;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:28px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#0d9488,#14b8a6);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
.cs-hero-left{}
.cs-hero-image img{width:100%;height:auto;border-radius:16px;box-shadow:0 24px 60px rgba(0,0,0,0.12);border:1px solid rgba(0,0,0,0.06)}
@media(max-width:768px){
  .cs-hero-inner{grid-template-columns:1fr}.cs-hero-image{display:none}
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
    <div class="cs-hero-left">
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
    <div class="cs-hero-image">
      <img src="/assets/images/telecom-pm-hero.png" alt="Infra360 PMS — Telecom Infrastructure Project Management Platform">
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

    <div class="cs-visual" style="padding:0;background:#f0f4f8">
      <img src="/assets/images/telecom-pm-dashboard.png" alt="Infra360 PMS — Telecom Infrastructure Project Management Dashboard" style="width:100%;height:auto;display:block;border-radius:20px"/>
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
