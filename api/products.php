<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../includes/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products — NivoChat, Infra360 PMS &amp; iSportOne | iDataOne</title>
<meta name="description" content="Explore iDataOne's own products: NivoChat, an AI conversation layer for websites; Infra360 PMS, infrastructure project management; and iSportOne, a lifelong sports identity platform.">
<meta name="keywords" content="NivoChat, Infra360 PMS, iSportOne, iDataOne products, AI chat platform, infrastructure project management software, sports profile app">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="Products — NivoChat, Infra360 PMS &amp; iSportOne | iDataOne">
<meta property="og:description" content="Explore iDataOne's own products: NivoChat, Infra360 PMS and iSportOne.">
<meta property="og:url" content="https://idataone.com/products">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Products — NivoChat, Infra360 PMS &amp; iSportOne | iDataOne">
<meta name="twitter:description" content="Explore iDataOne's own products: NivoChat, Infra360 PMS and iSportOne.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Products — iDataOne",
  "url": "https://idataone.com/products",
  "description": "iDataOne's own products: NivoChat, Infra360 PMS and iSportOne.",
  "provider": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"}
}
</script>
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
.p-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px}
.p-card{border:1px solid rgba(226,232,240,0.9);border-radius:22px;overflow:hidden;background:#fff;transition:box-shadow 0.3s,transform 0.3s;display:flex;flex-direction:column}
.p-card:hover{box-shadow:0 24px 56px rgba(15,23,42,0.1);transform:translateY(-4px)}
.p-card-img{height:190px;position:relative;overflow:hidden}
.p-card-img img{width:100%;height:100%;object-fit:cover;display:block}
.p-card-badge{position:absolute;top:14px;left:14px;padding:4px 12px;border-radius:999px;font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;backdrop-filter:blur(6px)}
.badge-live{background:rgba(16,185,129,0.15);color:#059669;border:1px solid rgba(16,185,129,0.3)}
.badge-dev{background:rgba(255,255,255,0.85);color:#64748b;border:1px solid rgba(226,232,240,0.9)}
.p-card-body{padding:26px 24px 28px;display:flex;flex-direction:column;gap:10px;flex:1}
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

@media(max-width:900px){.p-grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<?php include __DIR__ . '/../includes/_gtm_body.php'; ?>

<?php $current_page = 'products'; include __DIR__ . '/../includes/_nav.php'; ?>

<section class="p-hero">
  <div class="p-hero-tag">Built by iDataOne</div>
  <h1 class="p-hero-h1">Our Products</h1>
  <p class="p-hero-sub">Live software built and maintained by iDataOne — the same team behind every custom engagement.</p>
</section>

<div class="p-wrap">
  <div class="p-grid">

    <div class="p-card">
      <div class="p-card-img" style="background:#020617">
        <span class="p-card-badge badge-live">Live</span>
        <img src="/assets/images/product-nivochat.jpg" alt="NivoChat — AI conversation layer for websites" style="object-fit:contain">
      </div>
      <div class="p-card-body">
        <div class="p-card-tag">Conversational AI</div>
        <div class="p-card-title">NivoChat</div>
        <div class="p-card-desc">An AI assistant trained on your business that answers questions, captures leads, and hands conversations to your team when needed.</div>
        <a href="https://nivochat.idataone.com/" target="_blank" rel="noopener" class="p-card-cta cta-sky">Visit NivoChat <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <div class="p-card">
      <div class="p-card-img" style="background:#eaf1fc">
        <span class="p-card-badge badge-live">Live</span>
        <img src="/assets/images/product-infra360.jpg" alt="Infra360 PMS — infrastructure project management platform" style="object-fit:contain">
      </div>
      <div class="p-card-body">
        <div class="p-card-tag">Project Management</div>
        <div class="p-card-title">Infra360 PMS</div>
        <div class="p-card-desc">Track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out.</div>
        <a href="https://infra360.idataone.com/" target="_blank" rel="noopener" class="p-card-cta cta-indigo">Visit Infra360 <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <div class="p-card">
      <div class="p-card-img">
        <span class="p-card-badge badge-dev">In Development</span>
        <img src="/assets/images/isportone-hero.png" alt="iSportOne — your lifelong sports identity">
      </div>
      <div class="p-card-body">
        <div class="p-card-tag">Sports Platform</div>
        <div class="p-card-title">iSportOne</div>
        <div class="p-card-desc">Your sport. Your story. Forever. Record every match, build your career profile and connect with your sports community — for life.</div>
        <a href="/isportone" class="p-card-cta cta-rose">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

  </div>
</div>

<?php include __DIR__ . '/../includes/_footer.php'; ?>
</body>
</html>
