<?php
$form_success = false;
$form_error   = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_submit'])) {
    $name       = htmlspecialchars(trim($_POST['name'] ?? ''));
    $company    = htmlspecialchars(trim($_POST['company'] ?? ''));
    $email      = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone      = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $build_type = htmlspecialchars(trim($_POST['build_type'] ?? ''));
    $message    = htmlspecialchars(trim($_POST['message'] ?? ''));
    $api_key    = getenv('RESEND_API_KEY');
    $body = "<h2>New AI Product Development Enquiry</h2>
        <p><strong>Source:</strong> /ai-product-development landing page</p>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>What they're looking to build:</strong> {$build_type}</p>
        <p><strong>Project description:</strong><br>{$message}</p>";
    $payload = json_encode([
        'from'     => 'iDataOne <noreply@idataone.com>',
        'to'       => ['info@idataone.com'],
        'subject'  => "AI Product Development Enquiry from {$name}",
        'html'     => $body,
        'reply_to' => $email,
    ]);
    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $api_key, 'Content-Type: application/json']);
    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_err = curl_error($ch);
    $form_success = ($status === 200);
    $form_error   = !$form_success;
    if ($form_error) {
        error_log("Resend API failed (ai-product-development) - Status: {$status}, cURL Error: {$curl_err}, Response: {$response}");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Product Development Company | iDataOne</title>
<meta name="description" content="iDataOne is an AI product development company that builds AI-powered products, SaaS platforms and enterprise applications from MVP to scale, backed by 20+ years of delivery leadership. Book a free discovery call.">
<meta name="keywords" content="AI product development, AI product development company, AI-powered product development, build AI product, AI MVP development, AI software development company, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/ai-product-development">
<meta property="og:type" content="website">
<meta property="og:title" content="AI Product Development Company | iDataOne">
<meta property="og:description" content="Turn your business idea into an AI-powered product. iDataOne builds AI products, SaaS platforms and enterprise applications from MVP to scale.">
<meta property="og:url" content="https://idataone.com/ai-product-development">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="AI Product Development Company | iDataOne">
<meta name="twitter:description" content="Turn your business idea into an AI-powered product. iDataOne builds AI products, SaaS platforms and enterprise applications from MVP to scale.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "AI Product Development",
  "serviceType": "AI Product Development",
  "provider": {"@id": "https://idataone.com/#organization"},
  "description": "iDataOne designs and builds AI-powered products, SaaS platforms, enterprise applications and AI automation — from product strategy and MVP development through AI integration and scale.",
  "areaServed": "Worldwide",
  "audience": {
    "@type": "BusinessAudience",
    "audienceType": "Businesses building AI-powered products"
  },
  "mentions": [
    {"@id": "https://idataone.com/#nivochat"},
    {"@id": "https://idataone.com/#infra360pms"}
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "AI Product Development Capabilities",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI-Powered Products", "description": "Intelligent assistants, agents and AI-powered workflows and decision systems."}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "SaaS Platforms", "description": "Scalable multi-tenant SaaS products with authentication, billing, administration, integrations and analytics."}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Enterprise Applications", "description": "Secure, scalable business applications that replace fragmented processes and legacy workflows."}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI Automation", "description": "Automating repetitive processes using AI, intelligent workflows and document processing."}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Data Platforms", "description": "Turning fragmented business data into unified, actionable intelligence."}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Mobile & Web Products", "description": "Modern web and mobile applications from concept through production."}}
    ]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://idataone.com/"},
    {"@type": "ListItem", "position": 2, "name": "AI Product Development", "item": "https://idataone.com/ai-product-development"}
  ]
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --ink:#ffffff;
  --muted:rgba(255,255,255,0.62);
  --paper:rgba(255,255,255,0.035);
  --paper-2:rgba(255,255,255,0.02);
  --line:rgba(255,255,255,0.12);
  --line-strong:rgba(255,255,255,0.18);
  --signal:#00d4ff;
  --signal-2:#f5c518;
}
html,body{height:auto}
body{
  font-family:'Inter',sans-serif;color:var(--ink);overflow-x:hidden;padding-top:68px;
  background:
    radial-gradient(ellipse at 80% 10%, rgba(0,212,255,0.12), transparent 40%),
    radial-gradient(ellipse at 20% 80%, rgba(0,180,220,0.08), transparent 40%),
    radial-gradient(ellipse at 60% 50%, rgba(245,197,24,0.06), transparent 45%),
    linear-gradient(135deg,#0a0f1e 0%,#0d1535 50%,#0a0f1e 100%);
  background-attachment:fixed;
  position:relative;
}
body::before{
  content:"";
  position:fixed;
  inset:0;
  background-image:
    linear-gradient(rgba(0,212,255,0.05) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0,212,255,0.05) 1px, transparent 1px);
  background-size:80px 80px;
  pointer-events:none;
  z-index:0;
}
body>*{position:relative;z-index:1}
.eyebrow-label{font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:var(--signal)}
.grad-text{background:linear-gradient(90deg,var(--signal-2),var(--signal));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
a{-webkit-tap-highlight-color:transparent}

/* ── Hero (centered, conversion-first) ── */
.hero{border-bottom:1px solid var(--line-strong);position:relative}
.hero-inner{max-width:820px;margin:0 auto;padding:76px 32px 64px;text-align:center;display:flex;flex-direction:column;align-items:center}
.hero-h1{font-size:clamp(32px,4.6vw,52px);font-weight:800;letter-spacing:-1.5px;line-height:1.1;color:var(--ink);margin:20px 0 20px}
.hero-sub{font-size:16.5px;color:var(--muted);line-height:1.75;max-width:600px;margin-bottom:36px}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap;justify-content:center}
.btn-solid,.btn-outline{display:inline-flex;align-items:center;gap:10px;padding:16px 26px;border-radius:12px;font-size:14.5px;font-weight:700;text-decoration:none;letter-spacing:0.1px;white-space:nowrap;border:none;cursor:pointer;transition:opacity 0.15s,transform 0.15s}
.btn-solid{background:linear-gradient(90deg,var(--signal),var(--signal-2));color:#fff}
.btn-solid:hover{opacity:0.92;transform:translateY(-1px)}
.btn-outline{color:var(--signal);background:transparent;border:1px solid var(--line-strong)}
.btn-outline:hover{background:var(--paper-2)}
.hero-trust{display:flex;gap:22px;flex-wrap:wrap;justify-content:center;margin-top:26px;font-size:12.5px;color:var(--muted)}
.hero-trust span{display:inline-flex;align-items:center;gap:6px}
.hero-trust svg{width:13px;height:13px;stroke:var(--signal);fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}

/* ── Ledger stats ── */
.ledger{border-bottom:1px solid var(--line-strong);background:var(--paper-2)}
.ledger-head{max-width:1180px;margin:0 auto;padding:40px 32px 8px;text-align:center}
.ledger-title{font-size:clamp(22px,2.4vw,30px);font-weight:800;letter-spacing:-1px;color:var(--ink);margin-bottom:8px}
.ledger-sub{font-size:14px;color:var(--muted);max-width:520px;margin:0 auto}
.ledger-inner{max-width:1180px;margin:0 auto;display:grid;grid-template-columns:repeat(4,1fr)}
.ledger-cell{padding:30px 32px;border-right:1px solid var(--line);text-align:center}
.ledger-cell:last-child{border-right:none}
.ledger-num{font-size:30px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,var(--signal),var(--signal-2));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.ledger-label{font-size:11.5px;color:var(--muted);margin-top:6px;letter-spacing:0.3px;font-weight:600;text-transform:uppercase}
.ledger-note{max-width:1180px;margin:0 auto;padding:14px 32px 36px;font-size:12px;color:var(--muted);text-align:center}

/* ── Section shell ── */
.sec{padding:72px 32px;border-bottom:1px solid var(--line-strong)}
.sec-inner{max-width:1180px;margin:0 auto}
.sec-head{margin-bottom:44px;text-align:center}
.sec-head.left{text-align:left;display:flex;justify-content:space-between;align-items:flex-end;gap:24px;flex-wrap:wrap}
.sec-num{margin-bottom:10px}
.sec-title{font-size:clamp(24px,2.6vw,36px);font-weight:800;letter-spacing:-1px;color:var(--ink)}
.sec-head .sec-title{max-width:680px;margin:0 auto}
.sec-head.left .sec-title{max-width:640px;margin:0}
.sec-sub{font-size:14.5px;color:var(--muted);max-width:540px;line-height:1.65;margin:12px auto 0}
.sec-head.left .sec-sub{max-width:340px;margin:0}

/* ── Cards grid (What We Build / AI capability) ── */
.cards-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line-strong);border:1px solid var(--line-strong);border-radius:20px;overflow:hidden}
.card{background:var(--paper);padding:30px 28px;display:flex;flex-direction:column;gap:10px}
.card-icon{width:38px;height:38px;border-radius:10px;background:rgba(0,212,255,0.08);border:1px solid rgba(0,212,255,0.2);display:flex;align-items:center;justify-content:center;margin-bottom:6px}
.card-icon svg{width:17px;height:17px;stroke:var(--signal);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.card-title{font-size:15.5px;font-weight:700;color:var(--ink)}
.card-desc{font-size:13px;color:var(--muted);line-height:1.65}
@media(max-width:900px){.cards-grid{grid-template-columns:1fr 1fr}}
@media(max-width:640px){.cards-grid{grid-template-columns:1fr}}

/* ── Industry list ── */
.industry-list{border-top:1px solid var(--line-strong)}
.industry-row{display:flex;justify-content:space-between;align-items:center;gap:20px;padding:22px 4px;border-bottom:1px solid var(--line);text-decoration:none;color:inherit;transition:background 0.15s}
.industry-row:hover{background:var(--paper-2)}
.industry-name{font-size:16.5px;font-weight:700;color:var(--ink);min-width:220px}
.industry-desc{font-size:13.5px;color:var(--muted);flex:1}
.industry-arrow{width:15px;height:15px;stroke:var(--signal);fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0}
@media(max-width:700px){.industry-row{flex-direction:column;align-items:flex-start;gap:6px}.industry-name{min-width:0}}

/* ── Proof grid (case studies) ── */
.proof-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1px;background:var(--line-strong);border:1px solid var(--line-strong);border-radius:20px;overflow:hidden}
.proof-mini{background:var(--paper);padding:30px 28px;display:flex;flex-direction:column;gap:10px}
.proof-mini-tag{font-size:10.5px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--signal)}
.proof-mini-title{font-size:16px;font-weight:700;color:var(--ink);line-height:1.4}
.proof-mini-desc{font-size:13px;color:var(--muted);line-height:1.6;flex:1}
.proof-mini-link{font-size:12.5px;font-weight:700;color:var(--signal-2);text-decoration:none}
.proof-mini-link:hover{text-decoration:underline}
@media(max-width:760px){.proof-grid{grid-template-columns:1fr}}

/* ── Spec rows (Why iDataOne / Process) ── */
.spec-rows{border-top:1px solid var(--line-strong)}
.spec-row{display:grid;grid-template-columns:56px 260px 1fr;gap:24px;padding:26px 0;border-bottom:1px solid var(--line);align-items:baseline;transition:background 0.15s}
.spec-row:hover{background:var(--paper-2)}
.spec-row-num{font-size:14px;font-weight:800;color:var(--signal)}
.spec-row-title{font-size:16.5px;font-weight:700;color:var(--ink)}
.spec-row-desc{font-size:13.5px;color:var(--muted);line-height:1.7}
@media(max-width:760px){.spec-row{grid-template-columns:36px 1fr;grid-template-areas:"n t" ". d"}.spec-row-num{grid-area:n}.spec-row-title{grid-area:t}.spec-row-desc{grid-area:d}}

/* ── CTA ── */
.cta{padding:80px 32px;background:linear-gradient(135deg,#050d1a,#0d1535);border-bottom:none;text-align:center}
.cta-inner{max-width:720px;margin:0 auto}
.cta-h{font-size:clamp(26px,3.4vw,40px);font-weight:800;letter-spacing:-1px;color:#fff}
.cta-p{font-size:14.5px;color:rgba(255,255,255,0.65);margin-top:14px;line-height:1.7}
.cta-btns{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:30px}
.cta-note{font-size:12px;color:rgba(255,255,255,0.45);margin-top:18px}

/* ── Lead form ── */
.form-sec{padding:0;background:linear-gradient(135deg,#0a0f1e 0%,#0d1535 60%,#0a0f1e 100%)}
.form-wrap{max-width:600px;margin:0 auto;padding:80px 32px}
.form-head{text-align:center;margin-bottom:36px}
.form-eyebrow{font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#5eead4;margin-bottom:12px}
.form-title{font-size:clamp(24px,3vw,32px);font-weight:800;letter-spacing:-1px;color:#fff}
.form-card{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.1);border-radius:20px;padding:36px 32px}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.ffield{display:flex;flex-direction:column;gap:6px;margin-bottom:20px}
.ffield label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(0,212,255,0.55)}
.ffield input,.ffield select,.ffield textarea{
  width:100%;padding:11px 0;border:none;
  border-bottom:1px solid rgba(0,212,255,0.22);
  background:transparent;
  font-family:'Inter',sans-serif;font-size:14.5px;
  color:#fff;outline:none;
  transition:border-color 0.25s;
  -webkit-appearance:none;
}
.ffield select{cursor:pointer;color:rgba(255,255,255,0.85)}
.ffield select option{background:#0d1535;color:#fff}
.ffield input::placeholder,.ffield textarea::placeholder{color:rgba(255,255,255,0.32);font-size:13.5px}
.ffield input:focus,.ffield select:focus,.ffield textarea:focus{border-bottom-color:#00d4ff}
.ffield textarea{resize:none}
.form-submit{width:100%;padding:17px 24px;border-radius:12px;border:none;background:linear-gradient(90deg,#0891b2,#00d4ff);color:#0a0f1e;font-family:'Inter',sans-serif;font-size:13.5px;font-weight:800;letter-spacing:1.8px;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:opacity 0.2s,transform 0.2s;margin-top:6px}
.form-submit:hover{opacity:0.92;transform:translateY(-1px)}
.form-submit svg{width:14px;height:14px;stroke:#0a0f1e;fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.form-privacy{text-align:center;font-size:12px;color:rgba(255,255,255,0.4);margin-top:16px}
.form-msg{margin-bottom:18px;text-align:center;font-size:13.5px;font-weight:500;padding:12px 16px;border-radius:10px}
.form-msg.success{background:rgba(0,212,255,0.1);color:#7eefff;border:1px solid rgba(0,212,255,0.2)}
.form-msg.error{background:rgba(244,63,94,0.1);color:#fca5a5;border:1px solid rgba(244,63,94,0.2)}
@media(max-width:640px){.form-row-2{grid-template-columns:1fr}.form-wrap{padding:56px 20px}.form-card{padding:28px 22px}}

@media(max-width:900px){
  .ledger-inner{grid-template-columns:1fr 1fr}
  .ledger-cell:nth-child(2){border-right:none}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>
<?php $current_page = 'ai-product-development'; include __DIR__ . '/_nav.php'; ?>

<!-- 1. Hero -->
<section class="hero">
  <div class="hero-inner">
    <div class="eyebrow-label">AI-First Product Development</div>
    <h1 class="hero-h1">Turn Your Business Idea Into an <span class="grad-text">AI-Powered Product</span></h1>
    <p class="hero-sub">From product strategy and MVP development to AI integration and scale, iDataOne builds intelligent software products for businesses that want to move faster.</p>
    <div class="hero-btns">
      <a href="#lead-form" class="btn-solid">Book a Free 30-Minute Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/case-studies" class="btn-outline">View Our Work</a>
    </div>
    <div class="hero-trust">
      <span><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>No commitment</span>
      <span><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>Response within 24 hours</span>
      <span><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>Talk directly with our team</span>
    </div>
  </div>
</section>

<!-- 2. Immediate credibility -->
<section class="ledger">
  <div class="ledger-head">
    <div class="ledger-title">Build More. Spend Less.</div>
    <div class="ledger-sub">Build enterprise-ready software without the overhead of a traditional large development team.</div>
  </div>
  <div class="ledger-inner">
    <div class="ledger-cell"><div class="ledger-num">Up to 70%</div><div class="ledger-label">Lower Development Cost*</div></div>
    <div class="ledger-cell"><div class="ledger-num">5×</div><div class="ledger-label">Faster AI-Assisted Delivery*</div></div>
    <div class="ledger-cell"><div class="ledger-num">20+ years</div><div class="ledger-label">Delivery Leadership</div></div>
    <div class="ledger-cell"><div class="ledger-num">Human + AI</div><div class="ledger-label">AI-Assisted Engineering</div></div>
  </div>
  <div class="ledger-note">*Results vary by scope, complexity, technology stack and delivery model.</div>
</section>

<!-- 3. What We Build -->
<section class="sec">
  <div class="sec-inner">
    <div class="sec-head">
      <div class="sec-num eyebrow-label">What We Build</div>
      <h2 class="sec-title">From Idea to Production</h2>
      <p class="sec-sub">We combine product engineering, AI and data capabilities to build software that solves real business problems.</p>
    </div>
    <div class="cards-grid">
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/></svg></div>
        <div class="card-title">AI-Powered Products</div>
        <div class="card-desc">Build products with AI at the core — from intelligent assistants and agents to AI-powered workflows and decision systems.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></div>
        <div class="card-title">SaaS Platforms</div>
        <div class="card-desc">Design and build scalable multi-tenant SaaS products with authentication, billing, administration, integrations and analytics.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="card-title">Enterprise Applications</div>
        <div class="card-desc">Replace fragmented processes and legacy workflows with secure, scalable business applications.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/></svg></div>
        <div class="card-title">AI Automation</div>
        <div class="card-desc">Automate repetitive processes using AI, intelligent workflows and document processing.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M18.4 8.6 13 14l-3-3-4.5 4.5"/></svg></div>
        <div class="card-title">Data Platforms</div>
        <div class="card-desc">Turn fragmented business data into unified, actionable intelligence.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 8h20"/><circle cx="6" cy="6" r="0.8" fill="var(--signal)"/></svg></div>
        <div class="card-title">Mobile &amp; Web Products</div>
        <div class="card-desc">Build modern web and mobile applications from concept through production.</div>
      </div>
    </div>
  </div>
</section>

<!-- 4. AI capability -->
<section class="sec" style="background:var(--paper-2)">
  <div class="sec-inner">
    <div class="sec-head">
      <div class="sec-num eyebrow-label">AI Capability</div>
      <h2 class="sec-title">AI That Does More Than Chat</h2>
      <p class="sec-sub">We build AI into products and business workflows where it creates measurable value.</p>
    </div>
    <div class="cards-grid" style="background:var(--line-strong)">
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4M8 16v0M16 16v0"/></svg></div>
        <div class="card-title">AI Agents</div>
        <div class="card-desc">Intelligent agents that interact with users, systems and business workflows.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M9 3H5a2 2 0 0 0-2 2v4M15 3h4a2 2 0 0 1 2 2v4M9 21H5a2 2 0 0 1-2-2v-4M15 21h4a2 2 0 0 0 2-2v-4"/></svg></div>
        <div class="card-title">LLM Integration</div>
        <div class="card-desc">Integrate leading language models into your products securely and effectively.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></div>
        <div class="card-title">Knowledge-Grounded AI</div>
        <div class="card-desc">Connect AI to your business knowledge, documents and data.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
        <div class="card-title">Intelligent Automation</div>
        <div class="card-desc">Reduce manual work through AI-powered workflows.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><path d="M9 1v3M15 1v3M9 20v3M15 20v3M1 9h3M1 15h3M20 9h3M20 15h3"/></svg></div>
        <div class="card-title">AI Features</div>
        <div class="card-desc">Add practical AI capabilities to existing software products.</div>
      </div>
      <div class="card">
        <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 14l3-3 3 3 5-6"/></svg></div>
        <div class="card-title">AI Data Intelligence</div>
        <div class="card-desc">Turn business data into insights, predictions and decisions.</div>
      </div>
    </div>
  </div>
</section>

<!-- 5. Industry section -->
<section class="sec">
  <div class="sec-inner">
    <div class="sec-head">
      <div class="sec-num eyebrow-label">Built Around Your Industry</div>
      <h2 class="sec-title">AI &amp; Software Built Around Your Industry</h2>
      <p class="sec-sub">Your business isn't generic. Your software shouldn't be either.</p>
    </div>
    <div class="industry-list">
      <a href="/industries/telecom" class="industry-row">
        <div class="industry-name">Telecom &amp; Infrastructure</div>
        <div class="industry-desc">Project management, field operations, financial workflows and live dashboards.</div>
        <svg class="industry-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="/case-study/finance-automation" class="industry-row">
        <div class="industry-name">Finance</div>
        <div class="industry-desc">Document processing, reconciliation, automation and intelligent reporting.</div>
        <svg class="industry-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="/industries/manufacturing" class="industry-row">
        <div class="industry-name">Manufacturing</div>
        <div class="industry-desc">Field service, ERP/SAP integration, operational workflows and data intelligence.</div>
        <svg class="industry-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="/industries/enterprise" class="industry-row">
        <div class="industry-name">Enterprise</div>
        <div class="industry-desc">Risk, compliance, workflow automation and business intelligence.</div>
        <svg class="industry-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="/industries/fmcg" class="industry-row">
        <div class="industry-name">FMCG</div>
        <div class="industry-desc">Risk intelligence, analytics, compliance and operational visibility.</div>
        <svg class="industry-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- 6. Proof / Case studies -->
<section class="sec" style="background:var(--paper-2)">
  <div class="sec-inner">
    <div class="sec-head">
      <div class="sec-num eyebrow-label">Proof, Not Promises</div>
      <h2 class="sec-title">Real Products. Real Business Problems.</h2>
    </div>
    <div class="proof-grid">
      <div class="proof-mini">
        <div class="proof-mini-tag">NivoChat</div>
        <div class="proof-mini-title">Knowledge-Grounded AI Customer Assistant</div>
        <div class="proof-mini-desc">A multi-tenant AI platform that lets businesses deploy intelligent, knowledge-grounded assistants with lead capture, CRM integration and AI provider flexibility.</div>
        <a href="/case-study/nivochat" class="proof-mini-link">View Case Study →</a>
      </div>
      <div class="proof-mini">
        <div class="proof-mini-tag">Infra360 PMS</div>
        <div class="proof-mini-title">Telecom Infrastructure Project Management</div>
        <div class="proof-mini-desc">A platform bringing project, vendor, purchase order, material and financial workflows together with live operational visibility.</div>
        <a href="/case-study/telecom-pm-platform" class="proof-mini-link">View Case Study →</a>
      </div>
      <div class="proof-mini">
        <div class="proof-mini-tag">Finance Automation</div>
        <div class="proof-mini-title">300+ Hours Saved Every Month</div>
        <div class="proof-mini-desc">AI-powered document extraction, invoice processing, reconciliation and reporting integrated into Infra360 PMS.</div>
        <a href="/case-study/finance-automation" class="proof-mini-link">View Case Study →</a>
      </div>
      <div class="proof-mini">
        <div class="proof-mini-tag">EMR Global</div>
        <div class="proof-mini-title">SAP-Integrated Field Service Platform</div>
        <div class="proof-mini-desc">Web and mobile software connecting field engineers with SAP-backed business operations in real time.</div>
        <a href="/case-study/emr-global-field-engineers" class="proof-mini-link">View Case Study →</a>
      </div>
    </div>
  </div>
</section>

<!-- 7. Why iDataOne -->
<section class="sec">
  <div class="sec-inner">
    <div class="sec-head">
      <div class="sec-num eyebrow-label">Why iDataOne</div>
      <h2 class="sec-title">Enterprise Capability. Without Enterprise Overhead.</h2>
    </div>
    <div class="spec-rows">
      <div class="spec-row">
        <div class="spec-row-num">01</div>
        <div class="spec-row-title">Senior Ownership</div>
        <div class="spec-row-desc">Your project stays under senior engineering and product oversight.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">02</div>
        <div class="spec-row-title">AI-Assisted Engineering</div>
        <div class="spec-row-desc">AI is integrated into the development process to accelerate research, coding, testing and delivery.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">03</div>
        <div class="spec-row-title">Product Mindset</div>
        <div class="spec-row-desc">We don't just deliver software. We build and operate our own products.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">04</div>
        <div class="spec-row-title">One Engineering Team</div>
        <div class="spec-row-desc">Product, frontend, backend, AI, data and infrastructure capabilities working together.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">05</div>
        <div class="spec-row-title">Fixed-Scope Delivery</div>
        <div class="spec-row-desc">Clear requirements, timeline and cost before development begins.</div>
      </div>
    </div>
  </div>
</section>

<!-- 8. Process -->
<section class="sec" style="background:var(--paper-2)">
  <div class="sec-inner">
    <div class="sec-head">
      <div class="sec-num eyebrow-label">Our Process</div>
      <h2 class="sec-title">From Idea to Scale</h2>
    </div>
    <div class="spec-rows">
      <div class="spec-row">
        <div class="spec-row-num">01</div>
        <div class="spec-row-title">Tell Us Your Idea</div>
        <div class="spec-row-desc">Explain the business problem, product idea or existing system.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">02</div>
        <div class="spec-row-title">Turn It Into a Plan</div>
        <div class="spec-row-desc">We define the product, architecture, technology and delivery approach.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">03</div>
        <div class="spec-row-title">Build the MVP</div>
        <div class="spec-row-desc">Build, test and iterate quickly with AI-assisted engineering.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">04</div>
        <div class="spec-row-title">Launch</div>
        <div class="spec-row-desc">Deploy, measure and improve with your team.</div>
      </div>
      <div class="spec-row">
        <div class="spec-row-num">05</div>
        <div class="spec-row-title">Evolve</div>
        <div class="spec-row-desc">Add capabilities, integrate systems and scale as your business grows.</div>
      </div>
    </div>
  </div>
</section>

<!-- 9. Final CTA -->
<section class="cta">
  <div class="cta-inner">
    <h2 class="cta-h">Have an AI Product in Mind?</h2>
    <p class="cta-p">Tell us what you're trying to build. We'll help you define the right product, technology and delivery approach.</p>
    <div class="cta-btns">
      <a href="#lead-form" class="btn-solid">Book a Free 30-Minute Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
    <div class="cta-note">No commitment. No sales pressure. Response within 24 hours.</div>
  </div>
</section>

<!-- 10. Lead form -->
<section class="form-sec" id="lead-form">
  <div class="form-wrap">
    <div class="form-head">
      <div class="form-eyebrow">Get Started</div>
      <div class="form-title">Let's Talk About Your Project</div>
    </div>
    <div class="form-card">
      <?php if ($form_success): ?>
      <div class="form-msg success">✓ Thanks! We'll be in touch within 24 hours.</div>
      <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
          'event': 'lead_form_submit',
          'form_name': 'ai_product_development_landing',
          'form_location': '/ai-product-development'
        });
        /* Google tag (gtag.js) event */
        if (typeof gtag === 'function') {
          gtag('event', 'conversion_event_submit_lead_form', {
            'form_name': 'ai_product_development_landing',
            'form_location': '/ai-product-development'
          });
        }
      </script>
      <?php elseif ($form_error): ?>
      <div class="form-msg error">Something went wrong. Please email info@idataone.com directly.</div>
      <?php endif; ?>
      <form method="POST" action="/ai-product-development#lead-form">
        <input type="hidden" name="form_submit" value="1">
        <div class="form-row-2">
          <div class="ffield"><label>Full Name</label><input type="text" name="name" placeholder="Your name" required></div>
          <div class="ffield"><label>Company Name</label><input type="text" name="company" placeholder="Your company"></div>
        </div>
        <div class="form-row-2">
          <div class="ffield"><label>Work Email</label><input type="email" name="email" placeholder="you@company.com" required></div>
          <div class="ffield"><label>Phone Number</label><input type="tel" name="phone" placeholder="Phone number"></div>
        </div>
        <div class="ffield">
          <label>What are you looking to build?</label>
          <select name="build_type">
            <option value="AI Product">AI Product</option>
            <option value="SaaS Platform">SaaS Platform</option>
            <option value="Custom Software">Custom Software</option>
            <option value="AI Automation">AI Automation</option>
            <option value="Data Platform">Data Platform</option>
            <option value="Mobile App">Mobile App</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="ffield">
          <label>Project Description</label>
          <textarea name="message" rows="3" placeholder="Tell us briefly about your idea or business problem."></textarea>
        </div>
        <button type="submit" class="form-submit">
          Book My Discovery Call
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
      </form>
      <div class="form-privacy">🔒 Your information stays private. No spam.</div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
