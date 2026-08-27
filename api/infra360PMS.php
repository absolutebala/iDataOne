<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Infra360 PMS — Every Site. Every Rupee. Accounted For. | iDataOne</title>
<meta name="description" content="Infra360 PMS helps infrastructure contractors track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out.">
<meta name="keywords" content="infrastructure project management software, telecom PMS, solar project tracking, civil contractor software, PO tracking, STN SRN material tracking, GST TDS automation, Infra360, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/infra360PMS">
<meta property="og:type" content="website">
<meta property="og:title" content="Infra360 PMS — Every Site. Every Rupee. Accounted For.">
<meta property="og:description" content="Track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out. Built for infrastructure contractors.">
<meta property="og:url" content="https://idataone.com/infra360PMS">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Infra360 PMS — Every Site. Every Rupee. Accounted For.">
<meta name="twitter:description" content="Track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Infra360 PMS",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "description": "Infra360 PMS helps infrastructure contractors track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out.",
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "url": "https://idataone.com/infra360PMS",
  "offers": {"@type": "Offer", "availability": "https://schema.org/InStock"}
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Banner */
.banner{min-height:92vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(99,102,241,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(79,70,229,0.08),transparent 40%),radial-gradient(ellipse at 60% 90%,rgba(124,58,237,0.06),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#eef2ff 45%,#e0e7ff 100%)}
.banner::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-eyebrow{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#4f46e5;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,58px);font-weight:800;letter-spacing:-2.5px;line-height:1.04;color:#0f172a;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(99,102,241,0.25);color:#4f46e5;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-secondary:hover{background:rgba(99,102,241,0.06);transform:translateY(-1px)}
.banner-illus{display:flex;align-items:center;justify-content:center}
.live-badge{display:inline-flex;align-items:center;gap:8px;padding:6px 16px;border-radius:999px;background:rgba(34,197,94,0.1);border:1px solid rgba(34,197,94,0.25);font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#16a34a;margin-bottom:20px}
.live-dot{width:6px;height:6px;border-radius:50%;background:#22c55e;animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.3}}

/* Sections */
.section{padding:80px 32px}
.section-inner{max-width:1140px;margin:0 auto}
.section-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#4f46e5;margin-bottom:12px;text-align:center}
.section-title{font-size:clamp(28px,3vw,42px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;text-align:center;margin-bottom:12px}
.section-sub{font-size:16px;color:#64748b;text-align:center;line-height:1.7;max-width:560px;margin:0 auto 48px}

/* Problem */
.problems{background:#f8fafc}
.problems-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.problem-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px 28px}
.problem-icon{width:48px;height:48px;border-radius:12px;background:#eef2ff;border:1px solid rgba(99,102,241,0.15);display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.problem-icon svg{width:22px;height:22px;fill:none;stroke:#4f46e5;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.problem-title{font-size:17px;font-weight:700;color:#0f172a;margin-bottom:10px}
.problem-desc{font-size:13.5px;color:#64748b;line-height:1.7}

/* Features */
.features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.feature-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px 28px;transition:box-shadow 0.3s,transform 0.3s}
.feature-card:hover{box-shadow:0 16px 48px rgba(99,102,241,0.08);transform:translateY(-4px)}
.feature-num{font-size:12px;font-weight:700;color:rgba(99,102,241,0.4);letter-spacing:2px;margin-bottom:16px}
.feature-icon{width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.feature-icon svg{width:22px;height:22px;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.feature-title{font-size:18px;font-weight:700;color:#0f172a;margin-bottom:10px}
.feature-desc{font-size:13.5px;color:#64748b;line-height:1.75}

/* Roles */
.roles{background:#f8fafc}
.roles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.role-card{text-align:center;padding:32px 20px;border-radius:20px;background:#fff;border:1px solid rgba(226,232,240,0.9);transition:transform 0.3s,box-shadow 0.3s}
.role-card:hover{transform:translateY(-4px);box-shadow:0 16px 48px rgba(99,102,241,0.08)}
.role-icon{width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#eef2ff,#e0e7ff);border:1px solid rgba(99,102,241,0.15);display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.role-icon svg{width:24px;height:24px;fill:none;stroke:#4f46e5;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.role-title{font-size:15px;font-weight:700;color:#0f172a;margin-bottom:6px}
.role-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}

/* CTA */
.cta-section{background:#fff;padding:40px 32px 80px}
.cta-card{max-width:900px;margin:0 auto;background:#0f172a;border-radius:28px;padding:40px 48px;position:relative;overflow:hidden;display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(99,102,241,0.22),transparent 60%);pointer-events:none}
.cta-left{position:relative;z-index:1}
.cta-heading{font-size:clamp(20px,2.5vw,30px);font-weight:800;letter-spacing:-1px;color:#f1f5f9;margin-bottom:8px;line-height:1.2}
.cta-heading em{font-style:normal;background:linear-gradient(90deg,#818cf8,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cta-sub{font-size:14px;color:rgba(255,255,255,0.4);line-height:1.7}
.cta-right{position:relative;z-index:1}
.btn-cta{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s}
.btn-cta:hover{opacity:0.9}

@media(max-width:768px){
  .banner-inner{grid-template-columns:1fr}
  .banner-illus{display:none}
  .problems-grid{grid-template-columns:1fr}
  .features-grid{grid-template-columns:1fr}
  .roles-grid{grid-template-columns:1fr 1fr;gap:16px}
  .cta-card{grid-template-columns:1fr;padding:28px 24px}
}
@media(max-width:500px){.roles-grid{grid-template-columns:1fr}}
</style>
</head>
<body>

<?php $current_page = ''; include __DIR__ . '/_nav.php'; ?>

<!-- Banner -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <h1 class="banner-h1">Every site.<br>Every rupee.<br><em>Accounted for.</em></h1>
      <p class="banner-sub">Track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out. Built for infrastructure contractors running multiple trades at once.</p>
      <div class="banner-btns">
        <a href="https://infra360.idataone.com/login" target="_blank" class="btn-primary">Demo <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/case-study/telecom-pm-platform" class="btn-secondary">See How It Works <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <img src="/assets/images/telecom-pm-hero.png" alt="Infra360 PMS — every site, every rupee, accounted for" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(99,102,241,0.18),0 8px 24px rgba(15,23,42,0.12);cursor:zoom-in" onmouseover="hzOpen(this.src,this.alt)">
    </div>
  </div>
</section>

<!-- Problem -->
<section class="section problems">
  <div class="section-inner">
    <div class="section-tag">The Problem</div>
    <h2 class="section-title">Infrastructure Projects Live in Silos</h2>
    <p class="section-sub">Contractors juggling telecom, solar and civil work have no single source of truth.</p>
    <div class="problems-grid">
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div class="problem-title">Data Scattered Everywhere</div>
        <div class="problem-desc">PO status, material lifting, invoices and payments live across Excel sheets, WhatsApp threads and a site engineer's notebook — disappearing the moment someone forgets to update it.</div>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="problem-title">Billing Runs Blind</div>
        <div class="problem-desc">GST, TDS and payment reconciliation are calculated by hand per invoice, with no live view of what's pending, approved or actually paid against each PO.</div>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
        <div class="problem-title">No Platform Built for Multi-Trade Contractors</div>
        <div class="problem-desc">Generic project tools assume one type of work. None track STN/SRN material lifecycles, PTW compliance or investor-split payments the way infrastructure contracting actually works.</div>
      </div>
    </div>
  </div>
</section>

<!-- Solution -->
<section class="section">
  <div class="section-inner">
    <div class="section-tag">The Solution</div>
    <h2 class="section-title">One System for Every Trade</h2>
    <p class="section-sub">The same rigour for a tower-erection crew and a solar installation team — without forcing either into the wrong workflow.</p>
    <div style="padding:0;background:#f0f4f8;border-radius:20px;overflow:hidden;margin-bottom:48px">
      <img src="/assets/images/telecom-pm-dashboard.png" alt="Infra360 PMS — architecture and dashboard for infrastructure project management" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.15),0 8px 24px rgba(0,0,0,0.12);cursor:zoom-in" onmouseover="hzOpen(this.src,this.alt)">
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-num">01</div>
        <div class="feature-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M9 12h6M9 16h6M9 8h6M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/></svg></div>
        <div class="feature-title">Purchase Order to Close-Out</div>
        <div class="feature-desc">Every project tracked from PO award through material lifting, billing and final payment — one record, one status, always current.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">02</div>
        <div class="feature-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/></svg></div>
        <div class="feature-title">STN/SRN Material Tracking</div>
        <div class="feature-desc">Per-item lifting, utilisation and return status for every material line — no more guessing what left the warehouse and what came back.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">03</div>
        <div class="feature-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="feature-title">Role-Based Access, Built In</div>
        <div class="feature-desc">Super admins, region managers, project managers, site engineers, accounting and vendors each see exactly what their role needs — nothing more.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">04</div>
        <div class="feature-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="feature-title">GST &amp; TDS Calculated Automatically</div>
        <div class="feature-desc">Invoice amounts, GST and TDS compute themselves, so billing teams review and approve instead of doing manual maths.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">05</div>
        <div class="feature-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div class="feature-title">Live Dashboards, Not Static Reports</div>
        <div class="feature-desc">Status distribution, aging, PM leaderboards and capital tracking update in real time — click into any number to see the underlying projects.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">06</div>
        <div class="feature-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div class="feature-title">Multi-Trade From Day One</div>
        <div class="feature-desc">Telecom, solar and civil work live in the same portal, with each trade's own job types, lookup lists and reporting — no separate tools per trade.</div>
      </div>
    </div>
  </div>
</section>

<!-- Roles -->
<section class="section roles">
  <div class="section-inner">
    <div class="section-tag">Built For Everyone on Site</div>
    <h2 class="section-title">One Platform, Six Roles</h2>
    <p class="section-sub">Every person on a project gets exactly the view they need.</p>
    <div class="roles-grid">
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="role-title">Super Admin</div>
        <div class="role-desc">Full control over projects, users, permissions and system settings — the single source of truth for the business.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <div class="role-title">Region Manager</div>
        <div class="role-desc">Own project status and vendor performance across every site in their region.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="role-title">Project Manager</div>
        <div class="role-desc">Approve materials, review billing and keep individual projects moving from PO to close-out.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="role-title">Site Engineer</div>
        <div class="role-desc">Log work progress, safety checks and material movement straight from the field.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="role-title">Accounting Team</div>
        <div class="role-desc">Review and approve invoices and expenses, with GST/TDS handled automatically.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <div class="role-title">Vendor</div>
        <div class="role-desc">Submit material utilisation and view assigned project status — without seeing anything beyond their own scope.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-card">
    <div class="cta-left">
      <h2 class="cta-heading">Your Next Project Starts <em>Organised.</em></h2>
      <p class="cta-sub">See Infra360 PMS running on real project data — telecom, solar and civil, side by side.</p>
    </div>
    <div class="cta-right">
      <a href="https://infra360.idataone.com/login" target="_blank" class="btn-cta">Demo <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
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
  window.hzClose=function(){ ov.style.background='rgba(0,0,0,0)'; im.style.transform='scale(0.85)'; im.style.opacity='0'; clearTimeout(closeTimer); closeTimer=setTimeout(function(){ ov.style.display='none'; },320); };
  document.addEventListener('keydown',function(e){ if(e.key==='Escape') window.hzClose(); });
})();
</script>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
