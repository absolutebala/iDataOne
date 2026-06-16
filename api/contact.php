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
        'from'     => 'iDataOne <onboarding@resend.dev>',
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
    curl_close($ch);
    $form_success = ($status === 200);
    $form_error   = !$form_success;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact iDataOne — Book a Discovery Call</title>
<meta name="description" content="Book a free discovery call with iDataOne. Tell us about your project and we'll get back to you within 24 hours.">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/contact">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html,body{min-height:100%;font-family:'Inter',sans-serif;color:#0f172a}
body{
  padding-top:68px;
  background:
    radial-gradient(ellipse at 10% 15%, rgba(99,102,241,0.22), transparent 40%),
    radial-gradient(ellipse at 88% 12%, rgba(124,58,237,0.18), transparent 38%),
    radial-gradient(ellipse at 75% 82%, rgba(245,158,11,0.12), transparent 40%),
    radial-gradient(ellipse at 15% 80%, rgba(20,184,166,0.12), transparent 35%),
    radial-gradient(ellipse at 50% 50%, rgba(139,92,246,0.08), transparent 50%),
    linear-gradient(135deg,#eef0fa 0%,#e8ecf8 30%,#e4eaf8 60%,#eaecf5 100%);
  display:flex;flex-direction:column;min-height:100vh;
}

/* Nav */
/* Nav via _nav.php */

/* Contact layout */
.contact-wrap{flex:1;display:flex;align-items:center;justify-content:center;padding:40px 24px}
.contact-inner{position:relative;z-index:2;width:100%;max-width:1100px;display:grid;grid-template-columns:1fr 1.15fr;gap:64px;align-items:center}
.contact-left{}
.cl-label{font-size:14px;font-weight:600;letter-spacing:4px;text-transform:uppercase;color:#6366f1;margin-bottom:20px}
.cl-heading{font-size:44px;font-weight:700;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:12px}
.cl-heading em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cl-sub{font-size:15px;color:#64748b;line-height:1.7;margin-bottom:36px}
.cl-trust{display:flex;flex-direction:column}
.cl-trust-item{display:flex;align-items:flex-start;gap:14px;padding:16px 0;border-bottom:1px solid rgba(226,232,240,0.7)}
.cl-trust-item:first-child{border-top:1px solid rgba(226,232,240,0.7)}
.cl-trust-icon{width:36px;height:36px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cl-trust-icon svg{width:16px;height:16px;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.ti-indigo{background:#eef2ff;border:1px solid rgba(99,102,241,0.15)}
.ti-indigo svg{stroke:#4f46e5}
.ti-teal{background:#f0fdfa;border:1px solid rgba(20,184,166,0.15)}
.ti-teal svg{stroke:#0d9488}
.ti-amber{background:#fffbeb;border:1px solid rgba(245,158,11,0.15)}
.ti-amber svg{stroke:#d97706}
.cl-trust-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:2px}
.cl-trust-desc{font-size:12.5px;color:#94a3b8;line-height:1.5}
.contact-right{background:rgba(255,255,255,0.65);border:1px solid rgba(226,232,240,0.9);border-radius:24px;padding:40px 36px;backdrop-filter:blur(20px)}
.form-top{margin-bottom:24px}
.form-top-title{font-size:18px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;margin-bottom:4px}
.form-top-sub{font-size:13px;color:#94a3b8}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px}
.cfield{display:flex;flex-direction:column;gap:6px}
.cfield label{font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#94a3b8}
.cfield input,.cfield textarea{width:100%;padding:10px 0;border:none;border-bottom:1.5px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:14px;color:#0f172a;outline:none;transition:border-color 0.25s}
.cfield input::placeholder,.cfield textarea::placeholder{color:#cbd5e1;font-size:13px}
.cfield input:focus,.cfield textarea:focus{border-bottom-color:#4f46e5}
.cfield textarea{resize:none}
.service-section{margin-bottom:16px}
.svc-type-tab{padding:6px 16px;border-radius:999px;font-size:12px;font-weight:600;cursor:pointer;border:1px solid rgba(226,232,240,0.9);background:transparent;color:#64748b;transition:all 0.2s}
.svc-type-tab.active{background:#0f172a;color:#fff;border-color:#0f172a}
.service-pills{display:flex;gap:7px;flex-wrap:wrap}
.service-pill{padding:7px 13px;border-radius:8px;border:1px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:12px;font-weight:500;color:#64748b;cursor:pointer;transition:all 0.2s;user-select:none}
.service-pill:hover{border-color:#c7d2fe;color:#4f46e5;background:#f5f3ff}
.service-pill.active{border-color:#4f46e5;background:#4f46e5;color:#fff}
.submit-btn{width:100%;padding:15px 24px;border-radius:12px;border:none;background:linear-gradient(90deg,#059669,#10b981);color:#fff;font-family:'Inter',sans-serif;font-size:13px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:opacity 0.2s;margin-top:6px}
.submit-btn:hover{opacity:0.9}
.submit-btn svg{width:13px;height:13px;stroke:#fff;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}
.form-note{text-align:center;font-size:11.5px;color:#cbd5e1;margin-top:10px}
.form-msg{margin-top:12px;text-align:center;font-size:13px;font-weight:500;padding:10px 16px;border-radius:10px}
.form-msg.success{background:#f0fdf4;color:#16a34a}
.form-msg.error{background:#fef2f2;color:#dc2626}
@media(max-width:768px){
  .page-nav-links{display:none}
  .contact-inner{grid-template-columns:1fr;gap:36px}
  .contact-right{padding:28px 20px}
  .form-row-2{grid-template-columns:1fr;gap:12px}
}
</style>
</head>
<body>

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
          <div class="cfield"><label>Full Name</label><input type="text" name="name" placeholder="Full Name" required></div>
          <div class="cfield"><label>Company</label><input type="text" name="company" placeholder="Company Name"></div>
        </div>
        <div class="form-row-2">
          <div class="cfield"><label>Work Email</label><input type="email" name="email" placeholder="Work Email" required></div>
          <div class="cfield"><label>Phone</label><input type="tel" name="phone" placeholder="Phone Number"></div>
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
            <div class="service-pill" onclick="selectService(this,'Other')">Other</div>
          </div>
          <div class="service-pills" id="svc-products" style="display:none">
            <div class="service-pill" onclick="selectService(this,'Sportfolio')">Sportfolio</div>
            <div class="service-pill" onclick="selectService(this,'aiDesker')">aiDesker</div>
            <div class="service-pill" onclick="selectService(this,'DatInsights')">DatInsights</div>
          </div>
        </div>
        <div class="form-row-2" style="margin-bottom:16px">
          <div class="cfield" style="grid-column:1/-1">
            <label>Project Details</label>
            <textarea name="message" rows="2" placeholder="Project Details"></textarea>
          </div>
        </div>
        <button type="submit" class="submit-btn">
          Book Discovery Call
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
