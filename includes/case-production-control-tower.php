<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Production Control Tower for Manufacturing | iDataOne</title>
<meta name="description" content="How iDataOne designed a production control tower that unites SAP, IoT and department-head updates into one live view of every order across every department.">
<meta name="keywords" content="production tracking case study, manufacturing control tower, SAP production dashboard, IoT shop floor monitoring, order tracking across departments, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="article">
<meta property="og:title" content="Production Control Tower for Manufacturing | iDataOne">
<meta property="og:description" content="How iDataOne designed a production control tower that unites SAP, IoT and department-head updates into one live view of every order across every department.">
<meta property="og:url" content="https://idataone.com/case-study/production-control-tower">
<meta property="og:image" content="https://idataone.com/assets/images/og-production-tower.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Production Control Tower for Manufacturing | iDataOne">
<meta name="twitter:description" content="How iDataOne designed a production control tower that unites SAP, IoT and department-head updates into one live view of every order across every department.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-production-tower.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Production Control Tower for a Manufacturing Engineering Company",
  "image": "https://idataone.com/assets/images/og-production-tower.png",
  "description": "How iDataOne designed a production control tower that unites SAP, IoT and department-head updates into one live view of every order across every department.",
  "author": {"@id": "https://idataone.com/#organization"},
  "publisher": {"@id": "https://idataone.com/#organization"},
  "url": "https://idataone.com/case-study/production-control-tower",
  "mainEntityOfPage": "https://idataone.com/case-study/production-control-tower",
  "about": [
    {"@type": "Thing", "name": "Production Tracking"},
    {"@type": "Thing", "name": "Data Analytics"},
    {"@type": "Thing", "name": "Manufacturing Industry"}
  ],
  "keywords": "production control tower, manufacturing analytics, SAP integration, IoT, real-time dashboard"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://idataone.com/"},
    {"@type": "ListItem", "position": 2, "name": "Case Studies", "item": "https://idataone.com/case-studies"},
    {"@type": "ListItem", "position": 3, "name": "Production Control Tower for a Manufacturing Engineering Company", "item": "https://idataone.com/case-study/production-control-tower"}
  ]
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/production-control-tower">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(13,148,136,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(20,184,166,0.08),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#f0fdfa 45%,#ccfbf1 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(13,148,136,0.12),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(20,184,166,0.1),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.cs-hero-img{display:flex;align-items:center;justify-content:center}
.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.18),0 8px 24px rgba(15,23,42,0.12);transition:transform 0.4s ease;cursor:zoom-in}
.cs-hero-img img:hover{transform:translateY(-4px)}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#0d9488;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#0d9488,#14b8a6);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0d9488;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#f0fdfa,#ccfbf1)}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#0d9488;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 16px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:28px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#0d9488,#14b8a6);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:12px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #0d9488;background:#f0fdfa;border-radius:0 16px 16px 0}
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
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(13,148,136,0.18),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#5eead4,#14b8a6);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#0d9488,#14b8a6);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
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
      <a href="/industries/manufacturing" class="cs-badge" style="text-decoration:none">Manufacturing Industry Solutions</a>
      <h1 class="cs-hero-title">Production Control Tower for a Manufacturing Engineering Company</h1>
      <p class="cs-hero-sub">How we designed a live production control tower that unites SAP, IoT and department-head inputs, so leadership sees where every order stands in every department and acts before deliveries slip.</p>
      <div class="cs-hero-stats">
        <div class="cs-stat"><div class="cs-stat-num"><span>7</span></div><div class="cs-stat-label">Departments</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>3</span></div><div class="cs-stat-label">Data Sources</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>6</span></div><div class="cs-stat-label">Modules</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>Live</span></div><div class="cs-stat-label">Order Tracking</div></div>
      </div>
    </div>
    <div class="cs-hero-img">
      <span class="hz-wrap"><img src="/assets/images/production-tower-hero.png" alt="Production control tower — process board showing every order across every department, with plant overview" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Every Department Knew Its Part — No One Saw the Whole Order</h2>
    <p class="cs-p">The company manufactures engineered products for several clients, and every order moves through cutting, machining, welding, fabrication, painting, quality check and dispatch. Transactions lived in SAP, machine data stayed on the shop floor, and the real story — why an order was stuck and what a department needed — travelled by phone, WhatsApp and the morning meeting.</p>
    <p class="cs-p">Leadership could not answer simple questions in real time: which orders are behind, where exactly each one is, what wastage is costing, and how many extra hours it will take to catch up. Delays surfaced only when a delivery date was already at risk.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">One Live Control Tower for Every Order</h2>
    <p class="cs-p">We designed a production control tower that combines SAP transactions, live machine data and structured shift updates from every department head — turning them into one view of every order across every department, with the forecasts and actions needed to keep deliveries on time.</p>

    <div class="cs-visual" style="padding:0;background:none;border:none">
      <span class="hz-wrap"><img src="/assets/images/production-tower-architecture.png" alt="Production control tower architecture — SAP, IoT and department head app feeding a unified order model, six modules and actions such as alerts, approvals and recovery plans" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.18),0 8px 24px rgba(15,23,42,0.12);cursor:zoom-in" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M3 15h18M9 4v16M15 4v16"/></svg></div>
        <div><div class="cs-feature-title">Process Board</div><div class="cs-feature-desc">Every open order against every department — not started, in progress, on hold or done — with challenges flagged exactly where they happen.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M7 7h11l-3-3M17 17H6l3 3"/></svg></div>
        <div><div class="cs-feature-title">Department Handoffs</div><div class="cs-feature-desc">Each department records what it sends and receives. Quantity gaps between departments are flagged automatically.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg></div>
        <div><div class="cs-feature-title">Department Head Shift Updates</div><div class="cs-feature-desc">A two-minute tablet check-in per shift: status, challenges tagged to orders, requests and next-shift commitments.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div><div class="cs-feature-title">Behind, ETA &amp; Extra Hours</div><div class="cs-feature-desc">Forecasts each order&#39;s finish date from run rate and department commitments, and the extra hours needed to recover.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <div><div class="cs-feature-title">Quality &amp; Wastage Analytics</div><div class="cs-feature-desc">Defect Pareto, scrap by department and cost of wastage — from SAP QM and reports from the floor.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div><div class="cs-feature-title">Capacity What-If Planner</div><div class="cs-feature-desc">Model overtime, extra shifts, contract labour or outsourcing and see the effect on order ETAs before approving.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Impact</div>
    <h2 class="cs-h2">From End-of-Day Reports to a Live Control Tower</h2>
    <p class="cs-p">The control tower is designed to replace end-of-day spreadsheets and status calls with one live view. Instead of discovering delays at dispatch, leadership sees them in the department where they start — with the reason, the owner and the recovery options in one place.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">Live</div><div class="cs-result-label">Order status across<br>every department</div></div>
      <div class="cs-result"><div class="cs-result-num">Every Shift</div><div class="cs-result-label">Challenges captured from<br>each department head</div></div>
      <div class="cs-result"><div class="cs-result-num">Auto</div><div class="cs-result-label">Handoff gaps flagged<br>between departments</div></div>
      <div class="cs-result"><div class="cs-result-num">Early</div><div class="cs-result-label">ETA &amp; extra-hours warnings<br>before deliveries slip</div></div>
    </div>
  </div>
</section>

<!-- Data Architecture -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">Under the Hood</div>
    <h2 class="cs-h2">Data Architecture &amp; Approach</h2>
    <div class="cs-grid">
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdfa;border:1px solid rgba(13,148,136,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg></div>
        <div class="cs-grid-title">Unified Order Model</div>
        <div class="cs-grid-desc">Links the client PO, SAP sales order, production orders and routing steps, so every quantity rolls up to the order and to the department working on it.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <div class="cs-grid-title">SAP &amp; IoT Integration</div>
        <div class="cs-grid-desc">Read-only extracts from SAP every few minutes and live machine signals over OPC UA / MQTT — with operator entry for lines that are not yet connected.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="cs-grid-title">Human-in-the-Loop Inputs</div>
        <div class="cs-grid-desc">Structured department head check-ins and handoffs capture what systems cannot see: reasons, blockers, requests and commitments.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><path d="M12 3l1.9 5.8H20l-4.9 3.6 1.9 5.8L12 14.6 7 18.2l1.9-5.8L4 8.8h6.1z"/></svg></div>
        <div class="cs-grid-title">AI Shift Summary</div>
        <div class="cs-grid-desc">Combines every source into a short brief for leadership: what is constrained, which orders are at risk and which decisions are waiting.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Similar <em>Control Tower?</em></h3>
      <p class="cs-cta-sub">Let's map your production flow and build it on your data.</p>
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
