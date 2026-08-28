<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: EMR Global — SAP-Integrated Field Service Platform | iDataOne</title>
<meta name="description" content="How iDataOne built a SAP-integrated field service platform for EMR Global — bridging SAP with field engineers in real time, eliminating WhatsApp coordination across a 50+ engineer global operation.">
<meta name="keywords" content="SAP integration, field service management, React Native mobile app, Next.js, real-time sync, transformer manufacturer, service ticket management, iDataOne case study">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/emr-global-field-engineers">
<meta property="og:type" content="article">
<meta property="og:title" content="EMR Global — SAP-Integrated Field Service Platform | iDataOne">
<meta property="og:description" content="How iDataOne built a real-time SAP-integrated field service platform bridging back-office data with field engineers — eliminating WhatsApp coordination for a global transformer manufacturer.">
<meta property="og:url" content="https://idataone.com/case-study/emr-global-field-engineers">
<meta property="og:image" content="https://idataone.com/assets/images/og-emr-global.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="EMR Global — SAP-Integrated Field Service Platform | iDataOne">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-emr-global.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "EMR Global — SAP-Integrated Field Service Platform",
  "description": "How iDataOne built a real-time SAP-integrated field service platform for EMR Global, bridging back-office data with field engineers and eliminating WhatsApp coordination.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
  "url": "https://idataone.com/case-study/emr-global-field-engineers"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* ── HERO ── */
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;
  background:radial-gradient(ellipse at 15% 40%,rgba(13,148,136,0.15),transparent 50%),
  radial-gradient(ellipse at 85% 15%,rgba(15,118,110,0.12),transparent 45%),
  linear-gradient(145deg,#0a0f1e 0%,#0c1a2e 40%,#0a1a1a 100%)}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.02) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.cs-hero-img{display:flex;align-items:center;justify-content:center}
.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.2),0 8px 24px rgba(0,0,0,0.4);transition:transform 0.4s ease;cursor:zoom-in}
.cs-hero-img img:hover{transform:translateY(-4px)}
.cs-hero-placeholder{width:100%;aspect-ratio:16/10;border-radius:20px;background:rgba(13,148,136,0.06);border:1px solid rgba(13,148,136,0.15);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px}
.cs-hero-placeholder svg{width:56px;height:56px;fill:none;stroke:rgba(13,148,136,0.35);stroke-width:1.2;stroke-linecap:round;stroke-linejoin:round}
.cs-hero-placeholder p{font-size:11px;color:rgba(255,255,255,0.2);letter-spacing:2px;text-transform:uppercase}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(13,148,136,0.1);border:1px solid rgba(13,148,136,0.25);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#2dd4bf;margin-bottom:24px}
.cs-hero-title{font-size:clamp(26px,3.8vw,44px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#fff;margin-bottom:20px}
.cs-hero-sub{font-size:15px;color:rgba(255,255,255,0.58);line-height:1.8;margin-bottom:36px;max-width:520px}
.cs-hero-stats{display:flex;gap:36px;padding-top:28px;border-top:1px solid rgba(255,255,255,0.07);flex-wrap:wrap}
.cs-stat-num{font-size:24px;font-weight:800;letter-spacing:-1px;line-height:1.2;background:linear-gradient(90deg,#0d9488,#2dd4bf);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:11px;color:rgba(255,255,255,0.4);margin-top:4px;line-height:1.4}

/* ── SAP FLOW BANNER ── */
.sap-banner{background:#050d1a;padding:40px 32px;border-top:1px solid rgba(13,148,136,0.15);border-bottom:1px solid rgba(13,148,136,0.15)}
.sap-banner-inner{max-width:960px;margin:0 auto}
.sap-banner-label{text-align:center;font-size:10px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:rgba(13,148,136,0.6);margin-bottom:24px}
.sap-flow{display:flex;align-items:center;justify-content:center;gap:0;flex-wrap:nowrap}
.sap-node{text-align:center;padding:16px 20px;border-radius:14px;border:1px solid;min-width:110px;flex-shrink:0}
.sap-node.sap{background:rgba(13,148,136,0.12);border-color:rgba(13,148,136,0.35)}
.sap-node.platform{background:rgba(0,212,255,0.08);border-color:rgba(0,212,255,0.25)}
.sap-node.manager{background:rgba(245,197,24,0.08);border-color:rgba(245,197,24,0.2)}
.sap-node.engineer{background:rgba(139,92,246,0.08);border-color:rgba(139,92,246,0.2)}
.sap-node-icon{font-size:22px;margin-bottom:6px;line-height:1}
.sap-node-name{font-size:12px;font-weight:700;color:#fff;margin-bottom:2px}
.sap-node.sap .sap-node-name{color:#2dd4bf}
.sap-node.platform .sap-node-name{color:#00d4ff}
.sap-node.manager .sap-node-name{color:#f5c518}
.sap-node.engineer .sap-node-name{color:#a78bfa}
.sap-node-sub{font-size:10px;color:rgba(255,255,255,0.3);line-height:1.4}
.sap-arrow{display:flex;flex-direction:column;align-items:center;padding:0 8px;flex-shrink:0}
.sap-arrow-line{display:flex;align-items:center;gap:2px}
.sap-arrow svg{width:18px;height:18px;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.sap-arrow.down svg{stroke:rgba(13,148,136,0.6)}
.sap-arrow.up svg{stroke:rgba(245,197,24,0.6)}
.sap-arrow-label{font-size:9px;color:rgba(255,255,255,0.2);letter-spacing:1px;margin-top:3px;white-space:nowrap}

/* ── SECTIONS ── */
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0d9488;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f0fdfa}
.cs-dark{background:#0a0f1e}
.callout{padding:20px 24px;border-left:3px solid #0d9488;background:rgba(13,148,136,0.04);border-radius:0 12px 12px 0;font-size:14px;color:#475569;line-height:1.7;margin-top:20px}
.callout strong{color:#0f172a;font-weight:700}

/* Features grid */
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#0d9488;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:700;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}

/* Integration diagram */
.int-grid{display:grid;grid-template-columns:1fr auto 1fr;gap:32px;align-items:center;margin-top:40px}
.int-col{display:flex;flex-direction:column;gap:12px}
.int-card{padding:16px 20px;border-radius:14px;border:1px solid rgba(226,232,240,0.8);background:#fff}
.int-card-sap{border-color:rgba(13,148,136,0.25);background:rgba(13,148,136,0.03)}
.int-card-eng{border-color:rgba(139,92,246,0.2);background:rgba(139,92,246,0.03)}
.int-card-title{font-size:12px;font-weight:700;color:#0f172a;margin-bottom:4px}
.int-card-desc{font-size:11.5px;color:#94a3b8;line-height:1.5}
.int-center{display:flex;flex-direction:column;align-items:center;gap:8px}
.int-platform{background:linear-gradient(135deg,#0c1a2e,#0a1a1a);border:1.5px solid rgba(0,212,255,0.3);border-radius:20px;padding:24px 20px;text-align:center;min-width:160px}
.int-platform-title{font-size:13px;font-weight:800;color:#00d4ff;margin-bottom:4px}
.int-platform-sub{font-size:11px;color:rgba(255,255,255,0.35);line-height:1.4}
.int-sync-badge{padding:4px 12px;border-radius:999px;background:rgba(13,148,136,0.15);border:1px solid rgba(13,148,136,0.3);font-size:10px;font-weight:700;color:#2dd4bf;letter-spacing:1px}

/* Workflow steps */
.wf-steps{display:flex;flex-direction:column;gap:0;margin-top:36px;position:relative}
.wf-steps::before{content:"";position:absolute;left:27px;top:28px;bottom:28px;width:1.5px;background:linear-gradient(to bottom,#0d9488,rgba(13,148,136,0.1));pointer-events:none}
.wf-step{display:flex;gap:24px;align-items:flex-start;padding:24px 0;position:relative}
.wf-step:not(:last-child){border-bottom:1px solid rgba(226,232,240,0.5)}
.wf-num{width:56px;height:56px;border-radius:50%;background:#0d9488;color:#fff;font-size:15px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative;z-index:1}
.wf-body{}
.wf-tag{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#0d9488;margin-bottom:4px}
.wf-title{font-size:16px;font-weight:700;color:#0f172a;margin-bottom:6px}
.wf-desc{font-size:13.5px;color:#64748b;line-height:1.7}
.wf-sap-badge{display:inline-block;padding:2px 10px;border-radius:6px;background:rgba(13,148,136,0.1);border:1px solid rgba(13,148,136,0.2);font-size:10px;font-weight:700;color:#0d9488;letter-spacing:1px;margin-top:8px}

/* Results */
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:36px}
.cs-result{text-align:center;padding:28px 16px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px;box-shadow:0 2px 8px rgba(0,0,0,0.04)}
.cs-result-num{font-size:24px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#0d9488,#0891b2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-bottom:6px}
.cs-result-label{font-size:12px;color:#94a3b8;line-height:1.4}

/* Tech */
.tech-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;margin-top:32px}
.tech-card{padding:24px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.tech-label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#0d9488;margin-bottom:6px}
.tech-name{font-size:15px;font-weight:700;color:#0f172a;margin-bottom:6px}
.tech-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.tech-pills{display:flex;flex-wrap:wrap;gap:10px;margin-top:28px}
.tech-pill{padding:7px 16px;border-radius:999px;background:rgba(13,148,136,0.06);border:1px solid rgba(13,148,136,0.18);font-size:13px;font-weight:600;color:#0d9488}

/* CTA */
.cs-cta-wrap{padding:48px 32px 80px}
.cs-cta-card{max-width:780px;margin:0 auto;background:#0a1e1c;border-radius:24px;padding:40px 48px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:space-between;gap:32px}
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(13,148,136,0.18),transparent 60%);pointer-events:none}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f0fdfa;letter-spacing:-0.5px;margin-bottom:8px;position:relative;z-index:1}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#2dd4bf,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4);position:relative;z-index:1}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#0d9488;color:#fff;font-size:14px;font-weight:700;text-decoration:none;white-space:nowrap;flex-shrink:0;transition:opacity 0.2s}
.cs-cta-btn:hover{opacity:0.9}

@media(max-width:900px){
  .cs-hero-inner{grid-template-columns:1fr}
  .cs-hero-img,.cs-hero-placeholder{display:none}
  .sap-flow{flex-wrap:wrap;gap:12px}
  .sap-arrow{display:none}
  .int-grid{grid-template-columns:1fr}
  .cs-features{grid-template-columns:1fr}
  .cs-results{grid-template-columns:1fr 1fr}
  .tech-grid{grid-template-columns:1fr 1fr}
  .cs-cta-card{flex-direction:column;padding:32px 24px}
  .wf-steps::before{display:none}
}
@media(max-width:600px){
  .cs-results{grid-template-columns:1fr}
  .tech-grid{grid-template-columns:1fr}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>
<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- ── HERO ── -->
<section class="cs-hero">
  <div class="cs-hero-inner">
    <div>
      <h1 class="cs-hero-title">Bridging SAP to the Field — A Real-Time Service Platform for EMR Global</h1>
      <p class="cs-hero-sub">How iDataOne built a SAP-integrated web and mobile field service platform for EMR Global — a 50-year-old transformer equipment manufacturer — connecting back-office data directly to field engineers in real time, while eliminating WhatsApp as the coordination layer.</p>
      <div class="cs-hero-stats">
        <div class="cs-stat"><div class="cs-stat-num">Real-time</div><div class="cs-stat-label">SAP sync — both ways</div></div>
        <div class="cs-stat"><div class="cs-stat-num">50+</div><div class="cs-stat-label">Field engineers on platform</div></div>
        <div class="cs-stat"><div class="cs-stat-num">0</div><div class="cs-stat-label">WhatsApp dependency remaining</div></div>
        <div class="cs-stat"><div class="cs-stat-num">Web + App</div><div class="cs-stat-label">Cross-platform delivery</div></div>
      </div>
    </div>
    <div class="cs-hero-img">
      <span class="hz-wrap"><img src="/assets/images/emr-hero.png" alt="EMR Global field engineer updating a SAP-integrated service ticket on site" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>
  </div>
</section>

<!-- ── SAP FLOW BANNER ── -->
<div class="sap-banner">
  <div class="sap-banner-inner">
    <div class="sap-banner-label">End-to-end data flow</div>
    <div class="sap-flow">
      <div class="sap-node sap">
        <div class="sap-node-icon">🗄</div>
        <div class="sap-node-name">SAP</div>
        <div class="sap-node-sub">Customer data<br>Product info</div>
      </div>
      <div class="sap-arrow down">
        <div class="sap-arrow-line">
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
        <div class="sap-arrow-label">pulls data</div>
      </div>
      <div class="sap-node platform">
        <div class="sap-node-icon">💻</div>
        <div class="sap-node-name">EMR Portal</div>
        <div class="sap-node-sub">Ticket created<br>by manager</div>
      </div>
      <div class="sap-arrow down">
        <div class="sap-arrow-line">
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
        <div class="sap-arrow-label">assigns ticket</div>
      </div>
      <div class="sap-node manager">
        <div class="sap-node-icon">👔</div>
        <div class="sap-node-name">Service Manager</div>
        <div class="sap-node-sub">Reviews &amp;<br>dispatches</div>
      </div>
      <div class="sap-arrow down">
        <div class="sap-arrow-line">
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
        <div class="sap-arrow-label">notifies</div>
      </div>
      <div class="sap-node engineer">
        <div class="sap-node-icon">🔧</div>
        <div class="sap-node-name">Field Engineer</div>
        <div class="sap-node-sub">Mobile app<br>updates in field</div>
      </div>
      <div class="sap-arrow up">
        <div class="sap-arrow-line">
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
        <div class="sap-arrow-label">syncs back</div>
      </div>
      <div class="sap-node platform">
        <div class="sap-node-icon">💻</div>
        <div class="sap-node-name">EMR Portal</div>
        <div class="sap-node-sub">Closure &amp;<br>field data</div>
      </div>
      <div class="sap-arrow up">
        <div class="sap-arrow-line">
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
        <div class="sap-arrow-label">updates SAP</div>
      </div>
      <div class="sap-node sap">
        <div class="sap-node-icon">🗄</div>
        <div class="sap-node-name">SAP</div>
        <div class="sap-node-sub">Real-time<br>record updated</div>
      </div>
    </div>
  </div>
</div>

<!-- ── CHALLENGE ── -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">A Growing Operation That Needed the Right Digital Backbone</h2>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:start">
      <div>
        <p class="cs-p">EMR Global has spent over five decades building precision transformer equipment — On-Load Tap Changers, Motor Drive Units, Smart Breathers and Protective Relays — trusted by power infrastructure projects across multiple countries. Their business runs on SAP: customer records, product information and service history all live there.</p>
        <p class="cs-p">As their field operation grew, a critical gap emerged. SAP managed the data. But the coordination between service managers and the 50+ field engineers who actually do the work was happening over WhatsApp — a practical starting point that had reached its limits as ticket volumes and geographic spread increased.</p>
        <p class="cs-p">The result was a disconnect between the back office and the field. Engineers had no structured way to receive assignments, update ticket status or close jobs formally. And every update that should have gone back to SAP had to be done manually — introducing delays, errors and gaps in the service record.</p>
        <div class="callout"><strong>The brief:</strong> Build a platform that puts SAP data in front of service managers and field engineers in a usable form — and writes every field update straight back to SAP in real time. No manual re-entry. No WhatsApp. No gaps.</div>
      </div>
      <div>
        <div style="font-size:13px;font-weight:700;color:#0f172a;margin-bottom:20px">Where the friction was</div>
        <div class="cs-features" style="grid-template-columns:1fr;gap:16px">
          <?php foreach([
            ['M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2','SAP data existed but field engineers had no access to it'],
            ['M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 0 1-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z','Service coordination was running over WhatsApp group chats'],
            ['M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1-15.357-2m15.357 2H15','Field updates were not flowing back to SAP automatically'],
            ['M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0','Manual re-entry created delays and gaps in service records'],
            ['M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z','Management had no real-time visibility into field status'],
            ['M3.055 11H5a2 2 0 0 1 2 2v1a2 2 0 0 0 2 2 2 2 0 0 1 2 2v2.945M8 3.935V5.5A2.5 2.5 0 0 0 10.5 8h.5a2 2 0 0 1 2 2 2 2 0 0 0 4 0 2 2 0 0 1 2-2h1.064','Engineers across multiple countries had no unified workflow'],
          ] as $p): ?>
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

<!-- ── SOLUTION ── -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A SAP-Integrated Field Service Platform — Built to Bridge the Gap</h2>
    <p class="cs-p">iDataOne designed and built a two-layer platform: a web-based portal for service managers, and a React Native mobile app for field engineers. The platform sits between SAP and the field — pulling live customer and product data from SAP when a ticket is created, and writing every field update straight back to SAP in real time when the engineer closes the job.</p>

    <!-- Integration diagram -->
    <div class="int-grid">
      <div class="int-col">
        <div style="font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#0d9488;margin-bottom:12px">From SAP into the platform</div>
        <?php foreach([
          ['Customer details','Company, contact, site address and service history — pulled from SAP automatically when a ticket is raised.'],
          ['Product information','Equipment model, serial number, installation date and service schedule — no manual lookup required.'],
          ['Service history','Previous tickets and outcomes from SAP give the service manager full context before assigning.'],
        ] as $c): ?>
        <div class="int-card int-card-sap">
          <div class="int-card-title"><?= $c[0] ?></div>
          <div class="int-card-desc"><?= $c[1] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="int-center">
        <div class="int-platform">
          <div class="int-platform-title">EMR Platform</div>
          <div class="int-platform-sub">Web portal + Mobile app</div>
        </div>
        <div class="int-sync-badge">⇅ REAL-TIME SYNC</div>
      </div>
      <div class="int-col">
        <div style="font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#7c3aed;margin-bottom:12px">From the field back to SAP</div>
        <?php foreach([
          ['Job updates','Status changes — en route, on site, job done — written to SAP instantly as the engineer updates the mobile app.'],
          ['Closure report','Work done, parts used, photos captured and resolution notes — all logged to SAP on job closure.'],
          ['Time and travel data','Time-on-site, travel time and departure timestamps captured automatically and synced to SAP.'],
        ] as $c): ?>
        <div class="int-card int-card-eng">
          <div class="int-card-title"><?= $c[0] ?></div>
          <div class="int-card-desc"><?= $c[1] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Platform features -->
    <h3 style="font-size:20px;font-weight:800;letter-spacing:-0.5px;color:#0f172a;margin:56px 0 8px">Platform Capabilities</h3>
    <p class="cs-p" style="margin-bottom:0">Beyond the SAP integration, the platform delivers a complete field service operation.</p>
    <div class="cs-features">
      <?php foreach([
        ['M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2','Ticket Creation with SAP Data','Service manager raises a ticket — customer and product data auto-populate from SAP. No manual entry.'],
        ['M12 18h.01M8 6h8M8 10h8M8 14h4','Mobile App for Field Engineers','Engineers receive tickets on their phone, update status in the field and close jobs with photos and notes — all offline-capable.'],
        ['M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM12 6v6l4 2','Real-Time Management Dashboard','Live view of every open ticket, engineer location and job status — updated the moment the engineer acts in the field.'],
        ['M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0','SLA Tracking & Escalation','Every ticket carries a deadline. Automated alerts escalate overdue jobs before customers need to follow up.'],
        ['M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8z','Role-Based Access','Admin, Service Manager and Field Engineer — each with their own interface and permissions. One platform, clear boundaries.'],
        ['M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1-15.357-2m15.357 2H15','Automatic SAP Write-Back','Every field update flows straight to SAP in real time. No manual re-entry. No batch jobs. No gaps in the service record.'],
      ] as $f): ?>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="<?= $f[0] ?>"/></svg></div>
        <div>
          <div class="cs-feature-title"><?= $f[1] ?></div>
          <div class="cs-feature-desc"><?= $f[2] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Solution architecture -->
    <div style="margin-top:48px">
      <div style="font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0d9488;margin-bottom:14px">Solution Architecture</div>
      <span class="hz-wrap"><img src="/assets/images/emr-solution.png" alt="EMR Global field service platform architecture — two-way SAP integration, web admin portal, React Native mobile app, SLA tracking and service history" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(13,148,136,0.15),0 8px 24px rgba(0,0,0,0.12);cursor:zoom-in" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"/><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>
  </div>
</section>

<!-- ── HOW IT WORKS ── -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">How It Works</div>
    <h2 class="cs-h2">One Workflow. SAP to Field and Back.</h2>
    <p class="cs-p">The complete journey — from the moment a service need is identified to the moment SAP reflects the outcome.</p>
    <div class="wf-steps">
      <?php foreach([
        ['Service Manager','01','Ticket raised in the web portal','The service manager creates a ticket. Customer details and product information auto-populate directly from SAP — no manual lookup, no copy-pasting.','SAP → Portal'],
        ['Service Manager','02','Ticket reviewed and assigned','The manager reviews the ticket with full SAP context — service history, product model, site location — and assigns it to the right field engineer.','Portal → Engineer'],
        ['Field Engineer','03','Push notification on mobile','The engineer receives an instant notification on the React Native app with everything they need: customer, product, site address and job description. No WhatsApp message needed.','Real-time'],
        ['Field Engineer','04','Field updates throughout the job','En route, on site, job in progress — each status update on the mobile app is written to the EMR platform instantly and reflected in the management dashboard.','SAP ← Portal ← App'],
        ['Field Engineer','05','Job closed with full record','On completion, the engineer logs work done, parts used and resolution notes, and captures photos. The job is formally closed on the mobile app.','Full audit trail'],
        ['Platform → SAP','06','SAP updated in real time','The moment the engineer closes the job, everything — status, notes, time-on-site, photos and closure data — is written straight back to SAP. No manual re-entry. No delays.','SAP updated'],
      ] as $s): ?>
      <div class="wf-step">
        <div class="wf-num"><?= $s[1] ?></div>
        <div class="wf-body">
          <div class="wf-tag"><?= $s[0] ?></div>
          <div class="wf-title"><?= $s[2] ?></div>
          <div class="wf-desc"><?= $s[3] ?></div>
          <div class="wf-sap-badge"><?= $s[4] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── RESULTS ── -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">SAP Is Now the Live Record. Not a Manual Destination.</h2>
    <p class="cs-p">The platform removed the gap between back-office data and field operations — SAP is now updated in real time from the field, and field engineers finally have the customer and product context they need to do their jobs well.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">Real-time</div><div class="cs-result-label">SAP sync — no manual re-entry</div></div>
      <div class="cs-result"><div class="cs-result-num">100%</div><div class="cs-result-label">Tickets tracked end-to-end digitally</div></div>
      <div class="cs-result"><div class="cs-result-num">0</div><div class="cs-result-label">WhatsApp coordination remaining</div></div>
      <div class="cs-result"><div class="cs-result-num">50+</div><div class="cs-result-label">Engineers on one unified platform</div></div>
    </div>

    <div style="margin-top:36px;display:grid;grid-template-columns:1fr 1fr;gap:24px">
      <div style="padding:28px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px">
        <div style="font-size:13px;font-weight:700;color:#0f172a;margin-bottom:16px">Before</div>
        <?php foreach([
          'SAP data existed — but engineers couldn\'t access it',
          'Service coordination ran through WhatsApp groups',
          'Field updates required manual re-entry into SAP',
          'Service records were delayed and often incomplete',
          'Management had no real-time view of field operations',
          'No formal closure process or audit trail',
        ] as $b): ?>
        <div style="display:flex;gap:10px;align-items:flex-start;margin-bottom:10px;font-size:13px;color:#94a3b8"><span style="color:rgba(239,68,68,0.5);flex-shrink:0;margin-top:1px">—</span><?= $b ?></div>
        <?php endforeach; ?>
      </div>
      <div style="padding:28px;background:#f0fdfa;border:1px solid rgba(13,148,136,0.2);border-radius:16px">
        <div style="font-size:13px;font-weight:700;color:#0f172a;margin-bottom:16px">After</div>
        <?php foreach([
          'SAP customer and product data flows into every ticket automatically',
          'Tickets raised, assigned and tracked in the EMR platform',
          'Every field update writes to SAP in real time — no re-entry',
          'SAP is the live, accurate service record — always up to date',
          'Management has a live dashboard of every open ticket and engineer',
          'Full audit trail from ticket creation to SAP closure record',
        ] as $a): ?>
        <div style="display:flex;gap:10px;align-items:flex-start;margin-bottom:10px;font-size:13px;color:#0f172a"><span style="color:#0d9488;flex-shrink:0;margin-top:1px">✓</span><?= $a ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ── TECH ── -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">Technology</div>
    <h2 class="cs-h2">Built to Integrate, Built to Scale</h2>
    <p class="cs-p">Every technology choice served the integration requirement — a platform that could read from SAP, present data cleanly to field teams, and write back without delay or manual intervention.</p>
    <div class="tech-grid">
      <?php foreach([
        ['Web Portal','Next.js','Server-rendered management dashboard — fast, reliable and deployable on AWS. Pulls SAP data on ticket creation and presents it to service managers in a clean interface.'],
        ['Mobile App','React Native','Cross-platform iOS and Android app for field engineers. Offline-capable — engineers can update tickets in the field even without connectivity, syncing when back online.'],
        ['Backend & SAP Integration','Node.js','REST API layer handling SAP integration, real-time data reads and writes, ticket management, role-based auth and push notification delivery.'],
        ['Database','AWS RDS (PostgreSQL)','Structured data store for tickets, users, audit logs and field records. SAP remains the system of record — the platform syncs to and from it in real time.'],
        ['Cloud Infrastructure','AWS','EC2, RDS, S3 and CloudWatch — scalable, monitored and environment-separated. Built to handle global field operations reliably.'],
        ['Real-Time Updates','WebSockets & Push','Field status updates pushed to the management dashboard via WebSockets. Engineer notifications delivered instantly via push — no polling, no delay.'],
      ] as $t): ?>
      <div class="tech-card">
        <div class="tech-label"><?= $t[0] ?></div>
        <div class="tech-name"><?= $t[1] ?></div>
        <div class="tech-desc"><?= $t[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="tech-pills">
      <?php foreach(['Next.js','React Native','Node.js','SAP Integration','AWS RDS','PostgreSQL','AWS EC2','AWS S3','WebSockets','Push Notifications','REST API','Real-Time Sync'] as $t): ?>
      <div class="tech-pill"><?= $t ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<div class="cs-cta-wrap">
  <div class="cs-cta-card">
    <div>
      <div class="cs-cta-h3">Running a field operation on <em>WhatsApp?</em></div>
      <div class="cs-cta-sub">We build structured, SAP-integrated field service platforms for manufacturers who are ready to close the gap between back office and field.</div>
    </div>
    <a href="/contact" class="cs-cta-btn">Talk to Our Team <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</div>

<!-- Hover zoom lightbox -->
<div id="hz-overlay" onclick="hzClose()" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0);align-items:center;justify-content:center;transition:background 0.3s ease;cursor:zoom-out">
  <img id="hz-img" src="" alt="" onclick="event.stopPropagation()" style="max-width:92vw;max-height:90vh;border-radius:16px;box-shadow:0 32px 120px rgba(0,0,0,0.7);transform:scale(0.85);opacity:0;transition:transform 0.35s cubic-bezier(0.34,1.56,0.64,1),opacity 0.3s ease;object-fit:contain;cursor:default"/>
</div>
<script>
(function(){
  var ov=document.getElementById('hz-overlay');
  var im=document.getElementById('hz-img');
  var closeTimer=null;

  window.hzOpen=function(src,alt){
    clearTimeout(closeTimer);
    im.src=src; im.alt=alt||'';
    ov.style.display='flex';
    requestAnimationFrame(function(){
      requestAnimationFrame(function(){
        ov.style.background='rgba(0,0,0,0.85)';
        im.style.transform='scale(1)';
        im.style.opacity='1';
      });
    });
  };

  window.hzHover=function(el){ if(el.dataset.hzSeen) return; el.dataset.hzSeen='1'; window.hzOpen(el.src,el.alt); };

  window.hzClose=function(){
    ov.style.background='rgba(0,0,0,0)';
    im.style.transform='scale(0.85)';
    im.style.opacity='0';
    clearTimeout(closeTimer);
    closeTimer=setTimeout(function(){ ov.style.display='none'; },320);
  };

  document.addEventListener('keydown',function(e){
    if(e.key==='Escape') window.hzClose();
  });
})();
</script>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
