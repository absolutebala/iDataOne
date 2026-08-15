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
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact iDataOne — Book a Free Discovery Call">
<meta name="twitter:description" content="Book a free 30-minute discovery call with iDataOne. Tell us about your project and we will get back to you within 24 hours. No commitment, just a conversation.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
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
.ti-indigo{background:#f0f9ff;border:1px solid rgba(8,145,178,0.2)}
.ti-indigo svg{stroke:#0891b2}
.ti-teal{background:#f0f9ff;border:1px solid rgba(8,145,178,0.2)}
.ti-teal svg{stroke:#0891b2}
.ti-amber{background:#fffbeb;border:1px solid rgba(245,197,24,0.25)}
.ti-amber svg{stroke:#f5c518}
.cl-trust-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
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
.form-top-title{font-size:20px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;margin-bottom:4px}
.form-top-sub{font-size:13px;color:rgba(0,212,255,0.55)}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.cfield{display:flex;flex-direction:column;gap:6px}
.cfield label{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#94a3b8}
.cfield input,.cfield textarea{
  width:100%;padding:10px 0;border:none;
  border-bottom:1px solid rgba(0,212,255,0.2);
  background:transparent;
  font-family:'Inter',sans-serif;font-size:14px;
  color:#fff;outline:none;
  transition:border-color 0.25s;
  -webkit-appearance:none;
}
.cfield input::placeholder,.cfield textarea::placeholder{color:#94a3b8;font-size:13px}
.cfield input:focus,.cfield textarea:focus{border-bottom-color:#0891b2}
.cfield textarea{resize:none}
.cfield select{
  border:none;border-bottom:1px solid rgba(0,212,255,0.2);
  background:transparent;
  font-family:'Inter',sans-serif;font-size:13px;
  color:rgba(255,255,255,0.7);outline:none;
  padding:10px 4px 10px 0;cursor:pointer;
  min-width:76px;appearance:none;-webkit-appearance:none;
}
.cfield select option{background:#fff;color:#0f172a}
.service-section{margin-bottom:20px}
.service-section label{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:rgba(0,212,255,0.5);display:block;margin-bottom:12px}
.svc-type-tab{padding:6px 16px;border-radius:999px;font-size:12px;font-weight:600;cursor:pointer;border:1px solid rgba(226,232,240,0.9);background:transparent;color:#64748b;transition:all 0.2s}
.svc-type-tab.active{background:#0891b2;color:#fff;border-color:#0891b2}
.service-pills{display:flex;gap:8px;flex-wrap:wrap;margin-top:10px}
.service-pill{padding:7px 14px;border-radius:8px;border:1px solid rgba(226,232,240,0.9);background:transparent;font-family:'Inter',sans-serif;font-size:12px;font-weight:500;color:#64748b;cursor:pointer;transition:all 0.2s;user-select:none}
.service-pill:hover{border-color:#0891b2;color:#0891b2;background:rgba(8,145,178,0.05)}
.service-pill.active{border-color:#0891b2;background:#0891b2;color:#fff}
.submit-btn{width:100%;padding:16px 24px;border-radius:12px;border:none;background:linear-gradient(90deg,#0891b2,#00d4ff);color:#0a0f1e;font-family:'Inter',sans-serif;font-size:13px;font-weight:800;letter-spacing:2px;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:opacity 0.2s,transform 0.2s;margin-top:8px}
.submit-btn:hover{opacity:0.9;transform:translateY(-1px)}
.submit-btn svg{width:14px;height:14px;stroke:#0a0f1e;fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
.form-note{text-align:center;font-size:11.5px;color:#94a3b8;margin-top:10px}
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
          <div class="cfield"><label></label><div style="display:flex;gap:0;align-items:flex-end"><select name="country_code" style="border:none;border-bottom:1.5px solid rgba(0,212,255,0.25);background:transparent;font-family:'Inter',sans-serif;font-size:13px;color:#64748b;outline:none;padding:10px 4px 10px 0;cursor:pointer;min-width:72px;appearance:none;-webkit-appearance:none"><option value="+91">🇮🇳 +91</option><option value="+1">🇺🇸 +1</option><option value="+44">🇬🇧 +44</option><option value="+61">🇦🇺 +61</option><option value="+971">🇦🇪 +971</option><option value="+65">🇸🇬 +65</option><option value="+60">🇲🇾 +60</option><option value="+49">🇩🇪 +49</option><option value="+33">🇫🇷 +33</option><option value="+81">🇯🇵 +81</option></select><input type="tel" name="phone" placeholder="Phone Number" style="flex:1"></div></div>
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
