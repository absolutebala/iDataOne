<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $api_key = getenv('RESEND_API_KEY');
    $body = "<h2>New Discovery Call Request</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Service:</strong> {$service}</p>
        <p><strong>Message:</strong><br>{$message}</p>";
    $payload = json_encode([
        'from'     => 'iDataOne <noreply@idataone.com>',
        'to'       => ['info@idataone.com'],
        'subject'  => "Discovery Call Request from {$name}",
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
        error_log("Resend API failed - Status: {$status}, cURL Error: {$curl_err}, Response: {$response}");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact iDataOne — Book a Free Discovery Call</title>
<meta name="description" content="Book a free 30-minute discovery call with iDataOne. Tell us about your project and we will get back to you within 24 hours. No commitment, just a conversation.">
<meta name="keywords" content="contact iDataOne, book discovery call, AI consultation, digital product consultation, free consultation, iDataOne contact">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="Contact iDataOne — Book a Free Discovery Call">
<meta property="og:description" content="Book a free 30-minute discovery call with iDataOne. Tell us about your project and we will get back to you within 24 hours. No commitment, just a conversation.">
<meta property="og:url" content="https://idataone.com/contact">
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact iDataOne — Book a Free Discovery Call">
<meta name="twitter:description" content="Book a free 30-minute discovery call with iDataOne. Tell us about your project and we will get back to you within 24 hours. No commitment, just a conversation.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact iDataOne",
  "url": "https://idataone.com/contact",
  "description": "Book a free discovery call with iDataOne. We review every enquiry personally and respond within 24 hours.",
  "provider": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "email": "info@idataone.com"}
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/contact">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html,body{min-height:100%;font-family:'Inter',sans-serif;color:#ffffff}
body{
  padding-top:68px;
  background:
    radial-gradient(ellipse at 80% 10%, rgba(0,212,255,0.12), transparent 40%),
    radial-gradient(ellipse at 20% 80%, rgba(0,180,220,0.08), transparent 40%),
    radial-gradient(ellipse at 60% 50%, rgba(245,197,24,0.06), transparent 45%),
    linear-gradient(135deg,#0a0f1e 0%,#0d1535 50%,#0a0f1e 100%);
  display:flex;flex-direction:column;min-height:100vh;
}

/* Contact layout */
.contact-wrap{
  flex:1;
  display:flex;
  align-items:center;
  justify-content:center;
  min-height:calc(100vh - 68px);
  padding:48px 24px;
}
.contact-inner{position:relative;z-index:2;width:100%;max-width:1140px;display:grid;grid-template-columns:1fr 1.2fr;gap:72px;align-items:center}
/* Left side */
.cl-label{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#00d4ff;margin-bottom:20px}
.cl-heading{font-size:clamp(36px,4vw,52px);font-weight:800;letter-spacing:-2px;line-height:1.08;color:#fff;margin-bottom:16px}
.cl-heading em{font-style:normal;background:linear-gradient(90deg,#f5c518,#00d4ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cl-sub{font-size:16px;color:rgba(255,255,255,0.72);line-height:1.75;margin-bottom:40px}
.cl-trust{display:flex;flex-direction:column;gap:4px}
.cl-trust-item{display:flex;align-items:flex-start;gap:16px;padding:14px 0;border-bottom:none}
.cl-trust-item:first-child{border-top:none}
.cl-trust-icon{width:40px;height:40px;border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cl-trust-icon svg{width:18px;height:18px;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.ti-indigo{background:rgba(0,212,255,0.1);border:1px solid rgba(0,212,255,0.2)}
.ti-indigo svg{stroke:#00d4ff}
.ti-teal{background:rgba(0,212,255,0.1);border:1px solid rgba(0,212,255,0.2)}
.ti-teal svg{stroke:#00d4ff}
.ti-amber{background:rgba(245,197,24,0.1);border:1px solid rgba(245,197,24,0.2)}
.ti-amber svg{stroke:#f5c518}
.cl-trust-title{font-size:14px;font-weight:600;color:rgba(255,255,255,0.9);margin-bottom:3px}
.cl-trust-desc{font-size:12.5px;color:rgba(0,212,255,0.55);line-height:1.5}
/* Form card — glass dark */
.contact-right{
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(0,212,255,0.18);
  border-radius:24px;
  padding:40px 36px;
  backdrop-filter:blur(24px);
  -webkit-backdrop-filter:blur(24px);
  box-shadow:0 32px 80px rgba(0,0,0,0.4),inset 0 1px 0 rgba(0,212,255,0.08);
}
.form-top{margin-bottom:28px;padding-bottom:20px;border-bottom:1px solid rgba(0,212,255,0.1)}
.form-top-title{font-size:20px;font-weight:700;color:#fff;letter-spacing:-0.4px;margin-bottom:4px}
.form-top-sub{font-size:13px;color:rgba(0,212,255,0.55)}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.cfield{display:flex;flex-direction:column;gap:6px}
.cfield label{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:rgba(0,212,255,0.5)}
.cfield input,.cfield textarea{
  width:100%;padding:10px 0;border:none;
  border-bottom:1px solid rgba(0,212,255,0.2);
  background:transparent;
  font-family:'Inter',sans-serif;font-size:14px;
  color:#fff;outline:none;
  transition:border-color 0.25s;
  -webkit-appearance:none;
}
.cfield input::placeholder,.cfield textarea::placeholder{color:rgba(255,255,255,0.3);font-size:13px}
.cfield input:focus,.cfield textarea:focus{border-bottom-color:#00d4ff}
.cfield textarea{resize:none}
.cfield select{
  border:none;border-bottom:1px solid rgba(0,212,255,0.2);
  background:transparent;
  font-family:'Inter',sans-serif;font-size:13px;
  color:rgba(255,255,255,0.7);outline:none;
  padding:10px 4px 10px 0;cursor:pointer;
  min-width:76px;appearance:none;-webkit-appearance:none;
}
.cfield select option{background:#0d1535;color:#fff}
.service-section{margin-bottom:20px}
.service-section label{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:rgba(0,212,255,0.5);display:block;margin-bottom:12px}
.svc-type-tab{padding:6px 16px;border-radius:999px;font-size:12px;font-weight:600;cursor:pointer;border:1px solid rgba(0,212,255,0.3);background:transparent;color:rgba(0,212,255,0.7);transition:all 0.2s}
.svc-type-tab.active{background:#00d4ff;color:#0a0f1e;border-color:#00d4ff}
.service-pills{display:flex;gap:8px;flex-wrap:wrap;margin-top:10px}
.service-pill{padding:7px 14px;border-radius:8px;border:1px solid rgba(0,212,255,0.2);background:transparent;font-family:'Inter',sans-serif;font-size:12px;font-weight:500;color:rgba(0,212,255,0.65);cursor:pointer;transition:all 0.2s;user-select:none}
.service-pill:hover{border-color:#00d4ff;color:#00d4ff;background:rgba(0,212,255,0.08)}
.service-pill.active{border-color:#00d4ff;background:rgba(0,212,255,0.15);color:#00d4ff}
.submit-btn{width:100%;padding:16px 24px;border-radius:12px;border:none;background:linear-gradient(90deg,#0891b2,#00d4ff);color:#0a0f1e;font-family:'Inter',sans-serif;font-size:13px;font-weight:800;letter-spacing:2px;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:opacity 0.2s,transform 0.2s;margin-top:8px}
.submit-btn:hover{opacity:0.9;transform:translateY(-1px)}
.submit-btn svg{width:14px;height:14px;stroke:#0a0f1e;fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.form-note{text-align:center;font-size:11.5px;color:rgba(255,255,255,0.3);margin-top:10px}
.form-msg{margin-top:12px;text-align:center;font-size:13px;font-weight:500;padding:10px 16px;border-radius:10px}
.form-msg.success{background:rgba(0,212,255,0.1);color:#7eefff;border:1px solid rgba(0,212,255,0.2)}
.form-msg.error{background:rgba(244,63,94,0.1);color:#fca5a5;border:1px solid rgba(244,63,94,0.2)}
@media(max-width:900px){
  .contact-inner{grid-template-columns:1fr;gap:36px}
}
@media(max-width:768px){
  .contact-right{padding:28px 20px}
  .form-row-2{grid-template-columns:1fr;gap:14px}
  .contact-wrap{padding:28px 16px}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'contact'; include __DIR__ . '/_nav.php'; ?>

<!-- Process flow background -->
<svg style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0" viewBox="0 0 1400 900" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
  <defs>
    <radialGradient id="cg1" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="rgba(0,212,255,0.14)"/><stop offset="100%" stop-color="rgba(0,212,255,0)"/></radialGradient>
    <radialGradient id="cg2" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="rgba(245,197,24,0.12)"/><stop offset="100%" stop-color="rgba(245,197,24,0)"/></radialGradient>
  </defs>
  <!-- Grid -->
  <g stroke="rgba(0,212,255,0.045)" stroke-width="1">
    <line x1="0" y1="90" x2="1400" y2="90"/><line x1="0" y1="180" x2="1400" y2="180"/><line x1="0" y1="270" x2="1400" y2="270"/><line x1="0" y1="360" x2="1400" y2="360"/><line x1="0" y1="450" x2="1400" y2="450"/><line x1="0" y1="540" x2="1400" y2="540"/><line x1="0" y1="630" x2="1400" y2="630"/><line x1="0" y1="720" x2="1400" y2="720"/><line x1="0" y1="810" x2="1400" y2="810"/>
    <line x1="100" y1="0" x2="100" y2="900"/><line x1="220" y1="0" x2="220" y2="900"/><line x1="340" y1="0" x2="340" y2="900"/><line x1="460" y1="0" x2="460" y2="900"/><line x1="580" y1="0" x2="580" y2="900"/><line x1="700" y1="0" x2="700" y2="900"/><line x1="820" y1="0" x2="820" y2="900"/><line x1="940" y1="0" x2="940" y2="900"/><line x1="1060" y1="0" x2="1060" y2="900"/><line x1="1180" y1="0" x2="1180" y2="900"/><line x1="1300" y1="0" x2="1300" y2="900"/>
  </g>
  <!-- Glow halos -->
  <ellipse cx="160" cy="340" rx="100" ry="80" fill="url(#cg1)" opacity="0.8"/>
  <ellipse cx="500" cy="260" rx="90" ry="70" fill="url(#cg1)" opacity="0.7"/>
  <ellipse cx="820" cy="340" rx="90" ry="70" fill="url(#cg1)" opacity="0.7"/>
  <ellipse cx="1140" cy="260" rx="90" ry="70" fill="url(#cg2)" opacity="0.7"/>
  <ellipse cx="1300" cy="600" rx="80" ry="70" fill="url(#cg2)" opacity="0.6"/>
  <!-- Process step labels -->
  <text x="160" y="190" text-anchor="middle" font-family="Inter,sans-serif" font-size="9" font-weight="700" letter-spacing="2" fill="rgba(0,212,255,0.4)">DISCOVERY</text>
  <text x="500" y="122" text-anchor="middle" font-family="Inter,sans-serif" font-size="9" font-weight="700" letter-spacing="2" fill="rgba(0,212,255,0.4)">STRATEGY</text>
  <text x="820" y="190" text-anchor="middle" font-family="Inter,sans-serif" font-size="9" font-weight="700" letter-spacing="2" fill="rgba(0,212,255,0.4)">BUILD</text>
  <text x="1140" y="122" text-anchor="middle" font-family="Inter,sans-serif" font-size="9" font-weight="700" letter-spacing="2" fill="rgba(245,197,24,0.5)">LAUNCH</text>
  <text x="1300" y="542" text-anchor="middle" font-family="Inter,sans-serif" font-size="9" font-weight="700" letter-spacing="2" fill="rgba(245,197,24,0.4)">SCALE</text>
  <!-- Connector lines -->
  <line x1="210" y1="322" x2="450" y2="250" stroke="rgba(0,212,255,0.2)" stroke-width="1.5"/>
  <polygon points="450,245 462,250 450,255" fill="rgba(0,212,255,0.3)"/>
  <line x1="550" y1="262" x2="765" y2="327" stroke="rgba(0,212,255,0.2)" stroke-width="1.5"/>
  <polygon points="765,322 778,327 765,332" fill="rgba(0,212,255,0.3)"/>
  <line x1="870" y1="318" x2="1085" y2="250" stroke="rgba(0,212,255,0.2)" stroke-width="1.5"/>
  <polygon points="1085,245 1097,250 1085,255" fill="rgba(245,197,24,0.35)"/>
  <line x1="1170" y1="292" x2="1290" y2="554" stroke="rgba(245,197,24,0.16)" stroke-width="1.5" stroke-dasharray="6,4"/>
  <polygon points="1288,552 1295,565 1282,560" fill="rgba(245,197,24,0.28)"/>
  <path d="M1250 632 Q700 820 200 662" fill="none" stroke="rgba(0,212,255,0.08)" stroke-width="1" stroke-dasharray="8,5"/>
  <!-- Node 1: Discovery -->
  <g opacity="0.72">
    <circle cx="160" cy="340" r="40" fill="none" stroke="rgba(0,212,255,0.28)" stroke-width="1.5"/>
    <circle cx="152" cy="328" r="14" fill="none" stroke="rgba(0,212,255,0.5)" stroke-width="1.5"/>
    <line x1="162" y1="338" x2="172" y2="350" stroke="rgba(0,212,255,0.5)" stroke-width="2" stroke-linecap="round"/>
    <rect x="148" y="346" width="24" height="16" rx="5" fill="none" stroke="rgba(0,212,255,0.32)" stroke-width="1.2"/>
    <line x1="154" y1="352" x2="166" y2="352" stroke="rgba(0,212,255,0.28)" stroke-width="1"/>
    <circle cx="160" cy="300" r="3" fill="rgba(0,212,255,0.4)"/>
    <circle cx="200" cy="340" r="2.5" fill="rgba(0,212,255,0.3)"/>
    <circle cx="120" cy="340" r="2.5" fill="rgba(0,212,255,0.3)"/>
    <text x="160" y="400" text-anchor="middle" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="rgba(0,212,255,0.32)">01</text>
  </g>
  <!-- Node 2: Strategy (brain) -->
  <g opacity="0.7">
    <circle cx="500" cy="262" r="38" fill="none" stroke="rgba(0,212,255,0.28)" stroke-width="1.5"/>
    <ellipse cx="500" cy="258" rx="22" ry="17" fill="none" stroke="rgba(0,212,255,0.48)" stroke-width="1.4"/>
    <ellipse cx="492" cy="255" rx="8" ry="12" fill="none" stroke="rgba(0,212,255,0.32)" stroke-width="1.1"/>
    <ellipse cx="508" cy="255" rx="8" ry="12" fill="none" stroke="rgba(0,212,255,0.32)" stroke-width="1.1"/>
    <line x1="500" y1="241" x2="500" y2="275" stroke="rgba(0,212,255,0.18)" stroke-width="0.8"/>
    <circle cx="500" cy="224" r="3" fill="rgba(0,212,255,0.4)"/>
    <circle cx="538" cy="262" r="2.5" fill="rgba(0,212,255,0.3)"/>
    <circle cx="462" cy="262" r="2.5" fill="rgba(0,212,255,0.3)"/>
    <text x="500" y="320" text-anchor="middle" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="rgba(0,212,255,0.32)">02</text>
  </g>
  <!-- Node 3: Build (code) -->
  <g opacity="0.7">
    <circle cx="820" cy="340" r="40" fill="none" stroke="rgba(0,212,255,0.28)" stroke-width="1.5"/>
    <text x="800" y="350" font-family="monospace" font-size="20" fill="rgba(0,212,255,0.48)" font-weight="700">&lt;/&gt;</text>
    <circle cx="852" cy="318" r="11" fill="none" stroke="rgba(0,212,255,0.25)" stroke-width="1.2"/>
    <circle cx="852" cy="318" r="4" fill="rgba(0,212,255,0.15)"/>
    <circle cx="852" cy="307" r="2" fill="rgba(0,212,255,0.25)"/>
    <circle cx="852" cy="329" r="2" fill="rgba(0,212,255,0.25)"/>
    <circle cx="841" cy="318" r="2" fill="rgba(0,212,255,0.25)"/>
    <circle cx="820" cy="300" r="3" fill="rgba(0,212,255,0.35)"/>
    <circle cx="780" cy="340" r="2.5" fill="rgba(0,212,255,0.3)"/>
    <text x="820" y="400" text-anchor="middle" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="rgba(0,212,255,0.32)">03</text>
  </g>
  <!-- Node 4: Launch (rocket) -->
  <g opacity="0.68">
    <circle cx="1140" cy="262" r="38" fill="none" stroke="rgba(245,197,24,0.32)" stroke-width="1.5"/>
    <ellipse cx="1140" cy="252" rx="10" ry="18" fill="none" stroke="rgba(245,197,24,0.58)" stroke-width="1.4"/>
    <line x1="1130" y1="266" x2="1124" y2="278" stroke="rgba(245,197,24,0.38)" stroke-width="1.3"/>
    <line x1="1150" y1="266" x2="1156" y2="278" stroke="rgba(245,197,24,0.38)" stroke-width="1.3"/>
    <ellipse cx="1140" cy="278" rx="5" ry="7" fill="rgba(245,197,24,0.2)" stroke="rgba(245,197,24,0.38)" stroke-width="1"/>
    <circle cx="1140" cy="224" r="3" fill="rgba(245,197,24,0.45)"/>
    <circle cx="1178" cy="262" r="2.5" fill="rgba(245,197,24,0.32)"/>
    <circle cx="1102" cy="262" r="2.5" fill="rgba(245,197,24,0.32)"/>
    <polygon points="1108,234 1111,242 1108,250 1105,242" fill="rgba(245,197,24,0.2)"/>
    <text x="1140" y="320" text-anchor="middle" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="rgba(245,197,24,0.38)">04</text>
  </g>
  <!-- Node 5: Scale (bar chart) -->
  <g opacity="0.62">
    <circle cx="1300" cy="602" r="36" fill="none" stroke="rgba(245,197,24,0.28)" stroke-width="1.5"/>
    <rect x="1282" y="606" width="8" height="16" rx="2" fill="rgba(245,197,24,0.22)" stroke="rgba(245,197,24,0.38)" stroke-width="1"/>
    <rect x="1295" y="598" width="8" height="24" rx="2" fill="rgba(245,197,24,0.32)" stroke="rgba(245,197,24,0.4)" stroke-width="1"/>
    <rect x="1308" y="590" width="8" height="32" rx="2" fill="rgba(245,197,24,0.42)" stroke="rgba(245,197,24,0.5)" stroke-width="1"/>
    <polyline points="1282,620 1295,611 1308,600" fill="none" stroke="rgba(0,212,255,0.48)" stroke-width="1.5" stroke-linecap="round"/>
    <circle cx="1308" cy="600" r="3" fill="rgba(0,212,255,0.5)"/>
    <circle cx="1300" cy="566" r="3" fill="rgba(245,197,24,0.4)"/>
    <circle cx="1264" cy="602" r="2.5" fill="rgba(245,197,24,0.28)"/>
    <text x="1300" y="658" text-anchor="middle" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="rgba(245,197,24,0.35)">05</text>
  </g>
  <!-- Scattered dots and sparkles -->
  <circle cx="350" cy="80" r="2" fill="rgba(0,212,255,0.2)"/>
  <circle cx="680" cy="60" r="2.5" fill="rgba(245,197,24,0.18)"/>
  <circle cx="990" cy="80" r="2" fill="rgba(0,212,255,0.18)"/>
  <circle cx="420" cy="820" r="2.5" fill="rgba(0,212,255,0.15)"/>
  <circle cx="900" cy="840" r="2" fill="rgba(245,197,24,0.15)"/>
  <polygon points="60,120 65,132 60,144 55,132" fill="rgba(0,212,255,0.18)"/>
  <polygon points="1360,80 1365,92 1360,104 1355,92" fill="rgba(245,197,24,0.18)"/>
  <polygon points="700,870 705,882 700,894 695,882" fill="rgba(0,212,255,0.15)"/>
</svg>

<div class="contact-wrap">
  <div class="contact-inner">
    <div class="contact-left">
      <div class="cl-label">Get in Touch</div>
      <div class="cl-heading">Let's Build<br>Something <em>Intelligent</em></div>
      <p class="cl-sub">Tell us about your project and we'll get back to you within 24 hours.</p>
      <div class="cl-trust">
        <div class="cl-trust-item">
          <div class="cl-trust-icon ti-indigo"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <div><div class="cl-trust-title">Response within 24 hours</div><div class="cl-trust-desc">We review every enquiry personally</div></div>
        </div>
        <div class="cl-trust-item">
          <div class="cl-trust-icon ti-teal"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <div><div class="cl-trust-title">Free 30-min discovery call</div><div class="cl-trust-desc">No commitment, just a conversation</div></div>
        </div>
        <div class="cl-trust-item">
          <div class="cl-trust-icon ti-amber"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div><div class="cl-trust-title">Your data stays private</div><div class="cl-trust-desc">We never share your information</div></div>
        </div>
      </div>
    </div>

    <div class="contact-right">
      <div class="form-top">
        <div class="form-top-title">Book a Discovery Call</div>
        <div class="form-top-sub">Takes less than 60 seconds to fill in</div>
      </div>
      <?php if (!empty($form_success)): ?>
      <div class="form-msg success">✓ Thanks! We'll be in touch within 24 hours.</div>
      <?php elseif (!empty($form_error)): ?>
      <div class="form-msg error">Something went wrong. Please email info@idataone.com directly.</div>
      <?php endif; ?>
      <form method="POST" action="/contact" id="contact-form">
        <input type="hidden" name="form_submit" value="1">
        <input type="hidden" name="service" id="service-val" value="">
        <div class="form-row-2">
          <div class="cfield"><label></label><input type="text" name="name" placeholder="Full Name" required></div>
          <div class="cfield"><label></label><input type="text" name="company" placeholder="Company Name"></div>
        </div>
        <div class="form-row-2">
          <div class="cfield"><label></label><input type="email" name="email" placeholder="Work Email" required></div>
          <div class="cfield"><label></label><div style="display:flex;gap:0;align-items:flex-end"><select name="country_code" style="border:none;border-bottom:1.5px solid rgba(0,212,255,0.25);background:transparent;font-family:'Inter',sans-serif;font-size:13px;color:rgba(255,255,255,0.6);outline:none;padding:10px 4px 10px 0;cursor:pointer;min-width:72px;appearance:none;-webkit-appearance:none"><option value="+91">🇮🇳 +91</option><option value="+1">🇺🇸 +1</option><option value="+44">🇬🇧 +44</option><option value="+61">🇦🇺 +61</option><option value="+971">🇦🇪 +971</option><option value="+65">🇸🇬 +65</option><option value="+60">🇲🇾 +60</option><option value="+49">🇩🇪 +49</option><option value="+33">🇫🇷 +33</option><option value="+81">🇯🇵 +81</option></select><input type="tel" name="phone" placeholder="Phone Number" style="flex:1"></div></div>
        </div>
        <div class="service-section">
          <div style="display:flex;gap:8px;margin-bottom:12px">
            <div class="svc-type-tab active" onclick="switchSvcType('service',this)">Service</div>
            <div class="svc-type-tab" onclick="switchSvcType('product',this)">Products</div>
          </div>
          <div class="service-pills" id="svc-services">
            <div class="service-pill" onclick="selectService(this,'Custom Software')">Custom Software</div>
            <div class="service-pill" onclick="selectService(this,'AI Solutions')">AI Solutions</div>
            <div class="service-pill" onclick="selectService(this,'Data Intelligence')">Data Intelligence</div>
            <div class="service-pill" onclick="selectService(this,'Others')">Others</div>
            
          </div>
          <div class="service-pills" id="svc-products" style="display:none">
            <div class="service-pill" onclick="selectService(this,'MealMate')">MealMate</div>
            <div class="service-pill" onclick="selectService(this,'aiChat')">aiChat</div>
            <div class="service-pill" onclick="selectService(this,'DatInsights')">DatInsights</div>
          </div>
        </div>
        <div class="form-row-2" style="margin-bottom:16px">
          <div class="cfield" style="grid-column:1/-1">
            <label></label>
            <textarea name="message" rows="2" placeholder="Project Details"></textarea>
          </div>
        </div>
        <button type="submit" class="submit-btn">
          Submit
          <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
        <p class="form-note">No spam. No sales pressure. Just a conversation.</p>
      </form>
    </div>
  </div>
</div>

<?php include __DIR__ . '/_footer.php'; ?>

<script>
function switchSvcType(type, el) {
  document.querySelectorAll('.svc-type-tab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('svc-services').style.display = type === 'service' ? 'flex' : 'none';
  document.getElementById('svc-products').style.display = type === 'product' ? 'flex' : 'none';
  document.getElementById('service-val').value = '';
  document.querySelectorAll('.service-pill').forEach(p => p.classList.remove('active'));
}
function selectService(el, val) {
  document.querySelectorAll('.service-pill').forEach(p => p.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('service-val').value = val;
}
</script>
</body>
</html>
