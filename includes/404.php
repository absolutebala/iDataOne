<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Not Found | iDataOne</title>
<meta name="robots" content="noindex, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html,body{height:100%}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;padding-top:68px;display:flex;flex-direction:column;min-height:100vh}
.nf-wrap{flex:1;display:flex;align-items:center;justify-content:center;padding:60px 24px;text-align:center;background:linear-gradient(180deg,#f8fafc 0%,#fff 60%)}
.nf-code{font-size:clamp(72px,14vw,120px);font-weight:800;letter-spacing:-4px;line-height:1;background:linear-gradient(90deg,#0891b2,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-bottom:8px}
.nf-title{font-size:24px;font-weight:700;color:#0f172a;margin-bottom:12px}
.nf-sub{font-size:15px;color:#64748b;line-height:1.7;max-width:420px;margin:0 auto 32px}
.nf-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
.nf-btn{padding:13px 26px;border-radius:12px;font-size:14px;font-weight:700;text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:opacity 0.2s,transform 0.2s}
.nf-btn:hover{transform:translateY(-1px)}
.nf-btn-primary{background:#0891b2;color:#fff}
.nf-btn-primary svg{stroke:#fff}
.nf-btn-secondary{background:#fff;color:#0f172a;border:1px solid rgba(226,232,240,0.9)}
.nf-btn svg{width:14px;height:14px;fill:none;stroke:#0f172a;stroke-width:2.3;stroke-linecap:round;stroke-linejoin:round}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = ''; include __DIR__ . '/_nav.php'; ?>

<div class="nf-wrap">
  <div>
    <div class="nf-code">404</div>
    <div class="nf-title">This page doesn't exist</div>
    <p class="nf-sub">The page you're looking for may have been moved or removed. Let's get you back on track.</p>
    <div class="nf-btns">
      <a href="/" class="nf-btn nf-btn-primary">Go to Homepage <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/contact" class="nf-btn nf-btn-secondary">Contact Us</a>
    </div>
  </div>
</div>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
