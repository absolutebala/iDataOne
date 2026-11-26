<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../includes/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products — NivoChat, Infra360 PMS, iSportOne &amp; DatInsights | iDataOne</title>
<meta name="description" content="Explore iDataOne's own products: NivoChat, an AI conversation layer for websites; Infra360 PMS, infrastructure project management; iSportOne, a lifelong sports identity platform; and DatInsights, a real-time decision-intelligence dashboard.">
<meta name="keywords" content="NivoChat, Infra360 PMS, iSportOne, DatInsights, iDataOne products, AI chat platform, infrastructure project management software, sports profile app, decision intelligence dashboard">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="Products — NivoChat, Infra360 PMS, iSportOne &amp; DatInsights | iDataOne">
<meta property="og:description" content="Explore iDataOne's own products: NivoChat, Infra360 PMS, iSportOne and DatInsights.">
<meta property="og:url" content="https://idataone.com/products">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Products — NivoChat, Infra360 PMS, iSportOne &amp; DatInsights | iDataOne">
<meta name="twitter:description" content="Explore iDataOne's own products: NivoChat, Infra360 PMS, iSportOne and DatInsights.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Products — iDataOne",
  "url": "https://idataone.com/products",
  "description": "iDataOne's own products: NivoChat, Infra360 PMS, iSportOne and DatInsights.",
  "provider": {"@id": "https://idataone.com/#organization"}
}
</script>
<?php include __DIR__ . '/../includes/_product_schemas.php'; ?>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/products">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/../includes/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Hero */
.p-hero{padding:80px 32px 40px;text-align:center;background:linear-gradient(180deg,#f8fafc 0%,#fff 100%)}
.p-hero-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0891b2;margin-bottom:16px}
.p-hero-h1{font-size:clamp(32px,5vw,48px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;margin-bottom:14px}
.p-hero-sub{font-size:16px;color:#64748b;line-height:1.7;max-width:560px;margin:0 auto}

/* Grid */
.p-wrap{max-width:1140px;margin:0 auto;padding:48px 32px 100px}
.p-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:36px}
.p-card-img.p-card-img-icon{background:linear-gradient(135deg,#0f172a 0%,#0891b2 100%);display:flex;align-items:center;justify-content:center}
.p-card-img-icon svg{width:56px;height:56px;stroke:#fff;stroke-width:1.5;fill:none;opacity:0.9}
.cta-cyan{background:#0891b2;color:#fff}
.cta-cyan svg{stroke:#fff}
.p-card{border:1px solid rgba(226,232,240,0.9);border-radius:22px;overflow:hidden;background:#fff;transition:box-shadow 0.3s,transform 0.3s;display:flex;flex-direction:column}
.p-card:hover{box-shadow:0 24px 56px rgba(15,23,42,0.1);transform:translateY(-4px)}
.p-card-img{height:240px;position:relative;overflow:hidden}
.p-card-img img{width:100%;height:100%;object-fit:cover;display:block}
.p-card-badge{position:absolute;top:14px;left:14px;padding:4px 12px;border-radius:999px;font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;backdrop-filter:blur(6px)}
.badge-live{background:rgba(16,185,129,0.15);color:#059669;border:1px solid rgba(16,185,129,0.3)}
.badge-dev{background:rgba(255,255,255,0.85);color:#64748b;border:1px solid rgba(226,232,240,0.9)}
.p-card-body{padding:32px 30px 34px;display:flex;flex-direction:column;gap:10px;flex:1}
.p-card-title{font-size:19px;font-weight:700;color:#0f172a;letter-spacing:-0.3px}
.p-card-tag{font-size:12px;font-weight:600;color:#94a3b8;text-transform:uppercase;letter-spacing:1px}
.p-card-desc{font-size:13.5px;color:#64748b;line-height:1.65;flex:1}
.p-card-cta{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:700;text-decoration:none;margin-top:6px;padding:11px 18px;border-radius:10px;justify-content:center;transition:opacity 0.2s,transform 0.2s}
.p-card-cta:hover{transform:translateY(-1px)}
.p-card-cta svg{width:13px;height:13px;fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.cta-sky{background:#0ea5e9;color:#fff}
.cta-sky svg{stroke:#fff}
.cta-indigo{background:#6366f1;color:#fff}
.cta-indigo svg{stroke:#fff}
.cta-rose{background:#fff1f2;color:#e11d48;border:1px solid rgba(244,63,94,0.25)}
.cta-rose svg{stroke:#e11d48}

@media(max-width:640px){.p-grid{grid-template-columns:1fr}}
/* Product suite */
.ps{max-width:1140px;margin:0 auto;padding:72px 32px 100px}
.ps-head{text-align:center;max-width:640px;margin:0 auto 28px}
.ps-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#047857;margin-bottom:12px}
.ps-h2{font-size:clamp(28px,3.4vw,40px);font-weight:800;letter-spacing:-1.4px;color:#0f172a;line-height:1.15;margin-bottom:12px}
.ps-lead{font-size:15px;color:#64748b;line-height:1.7}
.ps-jump{display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin:0 auto 64px}
.ps-jump a{display:inline-flex;align-items:center;gap:8px;min-height:44px;padding:0 16px;border-radius:999px;border:1px solid rgba(15,23,42,0.1);background:#fff;font-size:13px;font-weight:600;color:#0f172a;text-decoration:none;transition:border-color 0.2s,box-shadow 0.2s}
.ps-jump a:hover{border-color:rgba(15,23,42,0.25);box-shadow:0 6px 16px rgba(15,23,42,0.06)}
.ps-jump i{width:8px;height:8px;border-radius:50%}
.ps-jump small{font-size:11px;font-weight:500;color:#64748b}
.ps-row{display:grid;grid-template-columns:1.08fr 1fr;gap:56px;align-items:center;padding:56px 0;border-top:1px solid rgba(15,23,42,0.07);scroll-margin-top:90px}
.ps-row:first-of-type{border-top:0}
.ps-row.rev .ps-visual{order:2}
.ps-visual{border-radius:24px;padding:22px;position:relative}
.ps-visual img{width:100%;aspect-ratio:16/10;display:block;border-radius:14px;box-shadow:0 20px 50px rgba(15,23,42,0.14);background:#fff}
.ps-meta{display:flex;align-items:center;gap:10px;margin-bottom:14px;flex-wrap:wrap}
.ps-status{font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:5px 10px;border-radius:999px;display:inline-flex;align-items:center;gap:6px}
.ps-status::before{content:"";width:6px;height:6px;border-radius:50%;background:currentColor}
.s-live{background:#ecfdf5;color:#047857}
.s-dev{background:#f1f5f9;color:#475569}
.s-soon{background:#ecfeff;color:#0e7490}
.ps-cat{font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:1.5px}
.ps-name{font-size:30px;font-weight:800;letter-spacing:-1px;color:#0f172a;margin-bottom:8px}
.ps-line{font-size:17px;font-weight:600;color:#334155;line-height:1.5;margin-bottom:14px}
.ps-for{font-size:13.5px;color:#64748b;line-height:1.6;margin-bottom:18px;padding:10px 14px;background:#f8fafc;border-radius:10px;border:1px solid rgba(15,23,42,0.05)}
.ps-for b{color:#0f172a;font-weight:600}
.ps-list{list-style:none;display:flex;flex-direction:column;gap:11px;margin-bottom:26px}
.ps-list li{display:flex;gap:10px;font-size:14px;color:#334155;line-height:1.55}
.ps-list svg{width:18px;height:18px;flex:none;margin-top:2px;fill:none;stroke-width:2.4;stroke-linecap:round;stroke-linejoin:round}
.ps-ctas{display:flex;gap:10px;flex-wrap:wrap}
.ps-btn{display:inline-flex;align-items:center;gap:8px;min-height:44px;padding:0 20px;border-radius:12px;font-size:14px;font-weight:700;text-decoration:none;transition:transform 0.2s,opacity 0.2s}
.ps-btn:hover{transform:translateY(-1px)}
.ps-btn svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.ps-btn-2{background:#fff;color:#0f172a;border:1px solid rgba(15,23,42,0.12)}
.ps-mock{aspect-ratio:16/10;border-radius:14px;background:#fff;box-shadow:0 20px 50px rgba(15,23,42,0.14);padding:18px;display:flex;flex-direction:column;gap:12px}
.ps-mock-top{display:flex;justify-content:space-between;align-items:center;font-size:12px;font-weight:700;color:#0f172a}
.ps-mock-top span{font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#0e7490;background:#ecfeff;border-radius:999px;padding:3px 8px}
.ps-kpis{display:grid;grid-template-columns:repeat(3,1fr);gap:10px}
.ps-kpi{border:1px solid rgba(15,23,42,0.07);border-radius:10px;padding:10px}
.ps-kpi small{display:block;font-size:10px;color:#64748b;margin-bottom:4px}
.ps-kpi b{font-size:16px;color:#0f172a}
.ps-kpi em{font-style:normal;font-size:10px;font-weight:600;margin-left:4px}
.ps-chart{flex:1;display:flex;align-items:flex-end;gap:7px;border:1px solid rgba(15,23,42,0.07);border-radius:10px;padding:12px 12px 10px}
.ps-chart i{flex:1;border-radius:4px 4px 0 0;background:#a5f3fc}
.ps-chart i.h{background:#0891b2}
.ps-why{font-size:11px;color:#334155;background:#f8fafc;border-radius:8px;padding:8px 10px}
.ps-why b{color:#0e7490}
@media(max-width:860px){.ps-row,.ps-row.rev{grid-template-columns:1fr;gap:28px}.ps-row.rev .ps-visual{order:0}}

/* Banner */
.pb{position:relative;overflow:hidden;padding:88px 32px 84px;background:radial-gradient(ellipse at 15% 40%,rgba(16,185,129,0.10),transparent 50%),radial-gradient(ellipse at 85% 20%,rgba(8,145,178,0.08),transparent 45%),linear-gradient(145deg,#f1fbf6 0%,#e2f5ec 35%,#d6f0e4 60%,#eef9f4 100%)}
.pb::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.03) 1px,transparent 1px);background-size:60px 60px;pointer-events:none}
.pb-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;display:grid;grid-template-columns:1.05fr 1fr;gap:64px;align-items:center}
.pb-tag{display:inline-flex;align-items:center;gap:8px;font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#047857;padding:6px 14px;border-radius:999px;background:rgba(16,185,129,0.1);border:1px solid rgba(16,185,129,0.22);margin-bottom:22px}
.pb-tag::before{content:"";width:6px;height:6px;border-radius:50%;background:#10b981}
.pb-h1{font-size:clamp(36px,4.6vw,58px);font-weight:800;letter-spacing:-2.2px;line-height:1.05;color:#0f172a;margin-bottom:18px}
.pb-h1 em{font-style:normal;background:linear-gradient(90deg,#059669,#0891b2);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.pb-sub{font-size:16px;color:#475569;line-height:1.75;max-width:480px;margin-bottom:30px}
.pb-ctas{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:36px}
.pb-btn{display:inline-flex;align-items:center;gap:8px;padding:14px 22px;border-radius:12px;font-size:14px;font-weight:700;text-decoration:none;transition:transform 0.2s,box-shadow 0.2s}
.pb-btn:hover{transform:translateY(-1px)}
.pb-btn svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.pb-btn-p{background:#0f172a;color:#fff;box-shadow:0 10px 24px rgba(15,23,42,0.18)}
.pb-btn-s{background:#fff;color:#0f172a;border:1px solid rgba(15,23,42,0.12)}
.pb-stats{display:flex;border:1px solid rgba(15,23,42,0.08);border-radius:18px;background:rgba(255,255,255,0.7);overflow:hidden;max-width:460px}
.pb-stat{flex:1;padding:18px 16px;text-align:center;border-right:1px solid rgba(15,23,42,0.07)}
.pb-stat:last-child{border-right:0}
.pb-stat b{display:block;font-size:28px;font-weight:800;letter-spacing:-1px;color:#0f172a;line-height:1}
.pb-stat span{font-size:11.5px;color:#64748b}
.pb-panel{position:relative;max-width:480px;justify-self:end;width:100%}
.pb-card{background:rgba(255,255,255,0.88);backdrop-filter:blur(14px);border:1px solid rgba(15,23,42,0.07);border-radius:24px;box-shadow:0 30px 70px rgba(4,120,87,0.12),0 8px 24px rgba(15,23,42,0.06);padding:22px}
.pb-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;padding:0 4px}
.pb-head b{font-size:13px;color:#0f172a}
.pb-head span{font-size:11px;font-weight:600;color:#047857;background:#ecfdf5;border-radius:999px;padding:4px 10px}
.pb-row{display:flex;align-items:center;gap:14px;padding:14px 6px;border-top:1px solid rgba(15,23,42,0.06);text-decoration:none;color:inherit;border-radius:12px;transition:background 0.2s}
.pb-row:hover{background:rgba(16,185,129,0.06)}
.pb-ic{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;flex:none}
.pb-ic svg{width:20px;height:20px;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.pb-nm{flex:1;min-width:0}
.pb-nm b{display:block;font-size:14px;font-weight:700;color:#0f172a}
.pb-nm span{font-size:12px;color:#64748b}
.pb-st{font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:4px 9px;border-radius:999px;white-space:nowrap}
.st-live{background:#ecfdf5;color:#047857}
.st-dev{background:#f1f5f9;color:#475569}
.st-soon{background:#ecfeff;color:#0e7490}
.pb-float{position:absolute;right:-36px;bottom:-30px;background:#fff;border:1px solid rgba(15,23,42,0.07);border-radius:16px;box-shadow:0 18px 40px rgba(15,23,42,0.1);padding:12px 16px;display:flex;align-items:center;gap:10px;font-size:12px;color:#334155}
.pb-float i{width:8px;height:8px;border-radius:50%;background:#10b981;box-shadow:0 0 0 4px rgba(16,185,129,0.15)}
.pb-float b{color:#0f172a}
@media(max-width:900px){.pb-inner{grid-template-columns:1fr;gap:40px}.pb-panel{justify-self:stretch;max-width:none}.pb-float{display:none}}

</style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://idataone.com/"},
    {"@type": "ListItem", "position": 2, "name": "Products", "item": "https://idataone.com/products"}
  ]
}
</script>
</head>
<body>
<?php include __DIR__ . '/../includes/_gtm_body.php'; ?>

<?php $current_page = 'products'; include __DIR__ . '/../includes/_nav.php'; ?>




<section class="pb">
  <div class="pb-inner">
    <div>
      <div class="pb-tag">Our Products</div>
      <h1 class="pb-h1">Products We Build.<br><em>And Run Ourselves.</em></h1>
      <p class="pb-sub">Beyond client work, we design, ship and operate our own platforms — AI chat, infrastructure project management, sports identity and decision intelligence.</p>
      <div class="pb-ctas">
        <a href="#products" class="pb-btn pb-btn-p">Explore Products <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/contact" class="pb-btn pb-btn-s">Build Yours With Us <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
      <div class="pb-stats">
        <div class="pb-stat"><b>4</b><span>Products</span></div>
        <div class="pb-stat"><b>2</b><span>Live today</span></div>
        <div class="pb-stat"><b>2</b><span>In the pipeline</span></div>
      </div>
    </div>
    <div class="pb-panel" aria-label="iDataOne products">
      <div class="pb-card">
        <div class="pb-head"><b>iDataOne product suite</b><span>2 live</span></div>
        <a class="pb-row" href="#nivochat">
          <span class="pb-ic" style="background:#e0f2fe"><svg viewBox="0 0 24 24" stroke="#0284c7"><path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12z"/><path d="M8.5 12h.01M12 12h.01M15.5 12h.01"/></svg></span>
          <span class="pb-nm"><b>NivoChat</b><span>Conversational AI</span></span>
          <span class="pb-st st-live">Live</span>
        </a>
        <a class="pb-row" href="#infra360">
          <span class="pb-ic" style="background:#eef2ff"><svg viewBox="0 0 24 24" stroke="#4f46e5"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M9 4v16"/></svg></span>
          <span class="pb-nm"><b>Infra360 PMS</b><span>Project Management</span></span>
          <span class="pb-st st-live">Live</span>
        </a>
        <a class="pb-row" href="#isportone">
          <span class="pb-ic" style="background:#fff1f2"><svg viewBox="0 0 24 24" stroke="#e11d48"><circle cx="12" cy="12" r="9"/><path d="M12 3a15 15 0 0 1 0 18M3 12h18M5.6 5.6c3.5 2.5 9.3 2.5 12.8 0M5.6 18.4c3.5-2.5 9.3-2.5 12.8 0"/></svg></span>
          <span class="pb-nm"><b>iSportOne</b><span>Sports Platform</span></span>
          <span class="pb-st st-dev">In Development</span>
        </a>
        <a class="pb-row" href="#datinsights">
          <span class="pb-ic" style="background:#ecfeff"><svg viewBox="0 0 24 24" stroke="#0891b2"><path d="M3 3v18h18"/><path d="M7 15l4-5 3 3 5-7"/></svg></span>
          <span class="pb-nm"><b>DatInsights</b><span>Decision Intelligence</span></span>
          <span class="pb-st st-soon">Coming Soon</span>
        </a>
      </div>
      <div class="pb-float"><i></i><span><b>NivoChat</b> &amp; <b>Infra360</b> in production</span></div>
    </div>
  </div>
</section>

<div class="ps" id="products">
  <div class="ps-head">
    <div class="ps-tag">The Product Suite</div>
    <h2 class="ps-h2">Four products, each solving one real problem</h2>
    <p class="ps-lead">Pick a product to see what it does, who it is for and how to get started.</p>
  </div>
  <nav class="ps-jump" aria-label="Jump to a product"><a href="#nivochat"><i style="background:#10b981"></i>NivoChat <small>Live</small></a><a href="#infra360"><i style="background:#10b981"></i>Infra360 PMS <small>Live</small></a><a href="#isportone"><i style="background:#94a3b8"></i>iSportOne <small>In development</small></a><a href="#datinsights"><i style="background:#22d3ee"></i>DatInsights <small>Coming soon</small></a></nav>
  <section class="ps-row" id="nivochat" aria-labelledby="nivochat-name">
    <div class="ps-visual" style="background:linear-gradient(135deg,#e0f2fe,#eef2ff)"><img src="/assets/images/product-nivochat.jpg" alt="NivoChat — AI conversation layer for websites" style="object-fit:cover;object-position:left center"></div>
    <div>
      <div class="ps-meta"><span class="ps-status s-live">Live</span><span class="ps-cat">Conversational AI</span></div>
      <h2 class="ps-name" id="nivochat-name">NivoChat</h2>
      <p class="ps-line">An AI assistant that knows your business — live on your website with one line of code.</p>
      <p class="ps-for"><b>Best for:</b> businesses that want to answer visitors and capture leads around the clock.</p>
      <ul class="ps-list"><li><svg viewBox="0 0 24 24" stroke="#0284c7"><path d="M20 6L9 17l-5-5"/></svg><span>Answers from your own content — services, PDFs and web pages</span></li><li><svg viewBox="0 0 24 24" stroke="#0284c7"><path d="M20 6L9 17l-5-5"/></svg><span>Captures leads mid-conversation and syncs them to HubSpot or Zapier</span></li><li><svg viewBox="0 0 24 24" stroke="#0284c7"><path d="M20 6L9 17l-5-5"/></svg><span>Runs on your own Claude or ChatGPT key, with no markup on AI usage</span></li></ul>
      <div class="ps-ctas">
        <a href="https://nivochat.idataone.com/" class="ps-btn" style="background:#0284c7;color:#fff" target="_blank" rel="noopener">Visit NivoChat <svg viewBox="0 0 24 24"><path d="M7 17L17 7M8 7h9v9"/></svg></a>
        <a href="/case-study/nivochat" class="ps-btn ps-btn-2">How we built it <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </section>
  <section class="ps-row rev" id="infra360" aria-labelledby="infra360-name">
    <div class="ps-visual" style="background:linear-gradient(135deg,#eef2ff,#e0e7ff)"><img src="/assets/images/product-infra360.jpg" alt="Infra360 PMS — infrastructure project management platform" style="object-fit:contain;background:#eaf1fc"></div>
    <div>
      <div class="ps-meta"><span class="ps-status s-live">Live</span><span class="ps-cat">Project Management</span></div>
      <h2 class="ps-name" id="infra360-name">Infra360 PMS</h2>
      <p class="ps-line">Every site. Every rupee. Accounted for.</p>
      <p class="ps-for"><b>Best for:</b> infrastructure contractors running telecom, solar and civil work at the same time.</p>
      <ul class="ps-list"><li><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M20 6L9 17l-5-5"/></svg><span>Purchase order to close-out — one record, one status, always current</span></li><li><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M20 6L9 17l-5-5"/></svg><span>STN/SRN material tracking for every line item</span></li><li><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M20 6L9 17l-5-5"/></svg><span>GST and TDS calculated automatically, with live dashboards for every role</span></li></ul>
      <div class="ps-ctas">
        <a href="https://infra360.idataone.com/" class="ps-btn" style="background:#4f46e5;color:#fff" target="_blank" rel="noopener">Visit Infra360 <svg viewBox="0 0 24 24"><path d="M7 17L17 7M8 7h9v9"/></svg></a>
        <a href="/infra360PMS" class="ps-btn ps-btn-2">Product overview <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </section>
  <section class="ps-row" id="isportone" aria-labelledby="isportone-name">
    <div class="ps-visual" style="background:linear-gradient(135deg,#fff1f2,#ffe4e6)"><img src="/assets/images/isportone-hero.png" alt="iSportOne — your lifelong sports identity" style="object-fit:cover;object-position:center top"></div>
    <div>
      <div class="ps-meta"><span class="ps-status s-dev">In Development</span><span class="ps-cat">Sports Platform</span></div>
      <h2 class="ps-name" id="isportone-name">iSportOne</h2>
      <p class="ps-line">Your sport. Your story. Forever.</p>
      <p class="ps-for"><b>Best for:</b> athletes, parents, coaches and clubs — from weekend players to state champions.</p>
      <ul class="ps-list"><li><svg viewBox="0 0 24 24" stroke="#e11d48"><path d="M20 6L9 17l-5-5"/></svg><span>A lifelong sports passport that follows you from club to club</span></li><li><svg viewBox="0 0 24 24" stroke="#e11d48"><path d="M20 6L9 17l-5-5"/></svg><span>Adaptive profiles for competitive and recreational athletes</span></li><li><svg viewBox="0 0 24 24" stroke="#e11d48"><path d="M20 6L9 17l-5-5"/></svg><span>Safe-by-design parental controls for under-16 athletes</span></li></ul>
      <div class="ps-ctas">
        <a href="/isportone" class="ps-btn" style="background:#e11d48;color:#fff">Get early access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/case-study/isportone" class="ps-btn ps-btn-2">How we’re building it <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </section>
  <section class="ps-row rev" id="datinsights" aria-labelledby="datinsights-name">
    <div class="ps-visual" style="background:linear-gradient(135deg,#ecfeff,#cffafe)"><div class="ps-mock" role="img" aria-label="DatInsights dashboard preview">
        <div class="ps-mock-top">Decision dashboard <span>Preview</span></div>
        <div class="ps-kpis">
          <div class="ps-kpi"><small>Profit margin</small><b>18.4%</b><em style="color:#047857">▲ 2.1</em></div>
          <div class="ps-kpi"><small>Team utilisation</small><b>76%</b><em style="color:#b45309">▼ 4</em></div>
          <div class="ps-kpi"><small>Change requests</small><b>12</b><em style="color:#64748b">this month</em></div>
        </div>
        <div class="ps-chart"><i style="height:40%"></i><i style="height:55%"></i><i style="height:48%"></i><i style="height:62%"></i><i style="height:58%"></i><i class="h" style="height:78%"></i><i style="height:70%"></i><i style="height:66%"></i></div>
        <div class="ps-why"><b>Why:</b> margin rose as change requests were billed on time</div>
      </div></div>
    <div>
      <div class="ps-meta"><span class="ps-status s-soon">Coming Soon</span><span class="ps-cat">Decision Intelligence</span></div>
      <h2 class="ps-name" id="datinsights-name">DatInsights</h2>
      <p class="ps-line">See why outcomes happen — not just what happened.</p>
      <p class="ps-for"><b>Best for:</b> leadership teams whose data is spread across many tools and platforms.</p>
      <ul class="ps-list"><li><svg viewBox="0 0 24 24" stroke="#0e7490"><path d="M20 6L9 17l-5-5"/></svg><span>Unifies employee, project and financial data in one place</span></li><li><svg viewBox="0 0 24 24" stroke="#0e7490"><path d="M20 6L9 17l-5-5"/></svg><span>Real-time decision dashboards for the whole leadership team</span></li><li><svg viewBox="0 0 24 24" stroke="#0e7490"><path d="M20 6L9 17l-5-5"/></svg><span>Explains the drivers behind profitability, resourcing and client change requests</span></li></ul>
      <div class="ps-ctas">
        <a href="/contact" class="ps-btn" style="background:#0e7490;color:#fff">Get notified <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/data" class="ps-btn ps-btn-2">Explore data services <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/../includes/_footer.php'; ?>
</body>
</html>
