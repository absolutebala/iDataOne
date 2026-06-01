<?php
// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    $api_key = getenv('RESEND_API_KEY');

    $body = "
        <h2>New Discovery Call Request</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Service:</strong> {$service}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    $payload = json_encode([
        'from'    => 'iDataOne <onboarding@resend.dev>',
        'to'      => ['info@idataone.com'],
        'subject' => "Discovery Call Request from {$name}",
        'html'    => $body,
        'reply_to' => $email,
    ]);

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $api_key,
        'Content-Type: application/json',
    ]);
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
  <title>iDataOne | AI-First Products & Intelligent Data Platforms</title>
  <meta name="description" content="iDataOne builds AI-first products, intelligent data platforms and digital transformation solutions.">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="canonical" href="https://idataone.com/">
  <meta property="og:title" content="iDataOne | AI-First Products & Intelligent Data Platforms">
  <meta property="og:description" content="We help businesses build intelligent digital systems powered by unified data, automation, and AI-driven insights.">
  <meta property="og:type" content="website">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --indigo:   #4f46e5;
      --violet:   #7c3aed;
      --navy:     #0f172a;
      --slate:    #475569;
      --light:    #f8fafc;
      --border:   rgba(99,102,241,0.15);
    }

    html, body {
      height: 100%;
      overflow: hidden;
      font-family: 'Inter', sans-serif;
      color: var(--navy);
    }

    /* ── Background ── */
    body {
      background:
        radial-gradient(circle at top left,  rgba(99,102,241,0.10), transparent 30%),
        radial-gradient(circle at bottom right, rgba(59,130,246,0.08), transparent 30%),
        linear-gradient(135deg, #f8fafc 0%, #eef2ff 45%, #f1f5f9 100%);
    }

    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(rgba(15,23,42,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(15,23,42,0.03) 1px, transparent 1px);
      background-size: 80px 80px;
      pointer-events: none;
      z-index: 0;
    }

    /* ── Nav ── */
    .nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 22px 48px;
      background: rgba(248,250,252,0.75);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      z-index: 100;
      border-bottom: 1px solid rgba(99,102,241,0.06);
    }

    .nav-brand {
      font-family: 'Syne', sans-serif;
      font-size: 22px;
      font-weight: 800;
      color: var(--navy);
      letter-spacing: -0.5px;
    }

    .nav-brand span {
      background: linear-gradient(90deg, var(--indigo), var(--violet));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .nav-links { display: flex; gap: 36px; }
    .nav-links a {
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      color: #64748b;
      letter-spacing: 0.2px;
      cursor: pointer;
      transition: color .2s;
    }
    .nav-links a:hover, .nav-links a.active { color: var(--indigo); }

    /* ── Presentation ── */
    #presentation { height: 100vh; position: relative; }

    .screen {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transform: translateY(40px) scale(.98);
      transition: opacity .7s ease, transform .7s ease;
      pointer-events: none;
      z-index: 1;
    }

    .screen.active {
      opacity: 1;
      transform: translateY(0) scale(1);
      pointer-events: auto;
    }

    .screen.exit-up {
      opacity: 0;
      transform: translateY(-40px) scale(.98);
    }

    /* ── Containers ── */
    .container {
      position: relative;
      z-index: 2;
      text-align: center;
      max-width: 1100px;
      padding: 40px;
      width: 100%;
    }

    /* ── Typography ── */
    .section-label {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--indigo);
      margin-bottom: 24px;
    }

    h1 {
      font-family: 'Syne', sans-serif;
      font-size: 60px;
      line-height: 1.1;
      letter-spacing: -2.5px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 24px;
    }

    h2 {
      font-family: 'Syne', sans-serif;
      font-size: 56px;
      line-height: 1.1;
      letter-spacing: -2px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 20px;
    }

    .highlight {
      background: linear-gradient(90deg, var(--indigo), var(--violet));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    p.lead {
      max-width: 680px;
      margin: 0 auto;
      font-size: 19px;
      line-height: 1.8;
      color: var(--slate);
    }

    /* ── Hero ── */
    .logo {
      width: 420px;
      max-width: 85%;
      margin-bottom: 40px;
      animation: float 5s ease-in-out infinite;
      filter:
        drop-shadow(0 15px 40px rgba(99,102,241,0.12))
        drop-shadow(0 8px 16px rgba(0,0,0,0.05));
    }

    .scroll-hint {
      margin-top: 48px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--indigo);
      opacity: 0.7;
      animation: bounce 2s ease-in-out infinite;
    }

    /* ── Pills ── */
    .pills {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 36px;
    }

    .pill {
      padding: 9px 18px;
      border-radius: 999px;
      background: #fff;
      border: 1px solid var(--border);
      color: var(--indigo);
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.2px;
    }

    /* ── Capabilities ── */
    .capabilities-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-top: 40px;
      text-align: left;
    }

    .cap-card {
      background: rgba(255,255,255,0.7);
      border: 1px solid var(--border);
      border-radius: 20px;
      padding: 28px 32px;
      backdrop-filter: blur(8px);
      transition: transform .3s ease, box-shadow .3s ease;
    }

    .cap-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(79,70,229,0.1);
    }

    .cap-icon {
      font-size: 28px;
      margin-bottom: 14px;
    }

    .cap-card h3 {
      font-family: 'Syne', sans-serif;
      font-size: 20px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 8px;
    }

    .cap-card p {
      font-size: 14px;
      color: var(--slate);
      line-height: 1.6;
    }

    /* ── Why us ── */
    .why-grid {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .why-pill {
      padding: 14px 28px;
      border-radius: 999px;
      background: rgba(255,255,255,0.8);
      border: 1px solid var(--border);
      font-size: 15px;
      font-weight: 600;
      color: var(--navy);
    }

    .why-pill span {
      color: var(--indigo);
      margin-right: 8px;
    }

    /* ── Products ── */
    .products-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 40px;
      text-align: left;
    }

    .product-card {
      background: rgba(255,255,255,0.75);
      border: 1px solid var(--border);
      border-radius: 20px;
      padding: 28px;
      backdrop-filter: blur(8px);
      transition: transform .3s ease, box-shadow .3s ease;
    }

    .product-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(79,70,229,0.1);
    }

    .product-icon { font-size: 32px; margin-bottom: 16px; }

    .product-card h3 {
      font-family: 'Syne', sans-serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 8px;
    }

    .product-card p {
      font-size: 14px;
      color: var(--slate);
      line-height: 1.6;
      margin-bottom: 18px;
    }

    .badge {
      display: inline-block;
      padding: 5px 12px;
      border-radius: 999px;
      background: #eef2ff;
      color: var(--indigo);
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    /* ── Contact ── */
    .contact-wrap {
      max-width: 580px;
      margin: 0 auto;
      text-align: left;
    }

    .contact-wrap h2, .contact-wrap p { text-align: center; }
    .contact-wrap p.lead { margin-bottom: 32px; }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-bottom: 12px;
    }

    .contact-wrap input,
    .contact-wrap select,
    .contact-wrap textarea {
      width: 100%;
      padding: 13px 16px;
      border-radius: 12px;
      border: 1px solid #e2e8f0;
      background: rgba(255,255,255,0.85);
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      color: var(--navy);
      outline: none;
      transition: border-color .2s, box-shadow .2s;
    }

    .contact-wrap input:focus,
    .contact-wrap select:focus,
    .contact-wrap textarea:focus {
      border-color: var(--indigo);
      box-shadow: 0 0 0 3px rgba(79,70,229,0.08);
    }

    .contact-wrap select { margin-bottom: 12px; color: #64748b; }
    .contact-wrap textarea { resize: none; margin-bottom: 16px; }

    .submit-btn {
      width: 100%;
      padding: 15px;
      border-radius: 12px;
      border: none;
      background: linear-gradient(90deg, var(--indigo), var(--violet));
      color: #fff;
      font-family: 'Inter', sans-serif;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      letter-spacing: 0.3px;
      transition: opacity .2s, transform .2s;
    }

    .submit-btn:hover { opacity: 0.9; transform: translateY(-1px); }
    .submit-btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }

    .form-msg {
      margin-top: 14px;
      text-align: center;
      font-size: 14px;
      font-weight: 500;
      padding: 10px;
      border-radius: 10px;
    }

    .form-msg.success { background: #f0fdf4; color: #16a34a; }
    .form-msg.error   { background: #fef2f2; color: #dc2626; }

    /* ── Nav dots ── */
    .dots {
      position: fixed;
      right: 28px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 100;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #cbd5e1;
      cursor: pointer;
      transition: background .3s, transform .3s;
    }

    .dot.active {
      background: var(--indigo);
      transform: scale(1.5);
    }

    /* ── Footer ── */
    .footer {
      position: fixed;
      bottom: 0; left: 0; right: 0;
      text-align: center;
      padding: 16px;
      font-size: 12px;
      color: #94a3b8;
      z-index: 100;
    }

    /* ── Animations ── */
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-10px); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); opacity: 0.7; }
      50%       { transform: translateY(8px); opacity: 1; }
    }

    /* ── Mobile ── */
    @media (max-width: 768px) {
      .nav { padding: 16px 20px; }
      .nav-links { gap: 16px; }
      .nav-links a { font-size: 13px; }
      .logo { width: 260px; }
      h1 { font-size: 36px; letter-spacing: -1px; }
      h2 { font-size: 32px; letter-spacing: -1px; }
      p.lead { font-size: 16px; }
      .capabilities-grid { grid-template-columns: 1fr; gap: 12px; }
      .products-grid { grid-template-columns: 1fr; gap: 12px; }
      .form-row { grid-template-columns: 1fr; }
      .dots { right: 14px; }
      .container { padding: 24px 20px; }
    }
  </style>
</head>
<body>

<!-- Nav -->
<nav class="nav">
  <div class="nav-brand">i<span>DataOne</span></div>
  <div class="nav-links">
    <a data-slide="0" class="active">Home</a>
    <a data-slide="1">Capabilities</a>
    <a data-slide="2">Why Us</a>
    <a data-slide="3">Products</a>
    <a data-slide="4">Contact</a>
  </div>
</nav>

<!-- Slides -->
<div id="presentation">

  <!-- 0: Hero -->
  <section class="screen active" data-index="0">
    <div class="container">
      <img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne Logo" class="logo">
      <h1>Engineering <span class="highlight">AI-First Products</span><br>and Intelligent Data Platforms</h1>
      <p class="lead">We help businesses build digital products powered by unified data, automation, and AI-driven insights.</p>
      <div class="pills">
        <span class="pill">Custom Software</span>
        <span class="pill">AI Solutions</span>
        <span class="pill">Data Intelligence</span>
        <span class="pill">Digital Transformation</span>
      </div>
      <div class="scroll-hint">Scroll to Explore ↓</div>
    </div>
  </section>

  <!-- 1: Capabilities -->
  <section class="screen" data-index="1">
    <div class="container">
      <div class="section-label">What We Build</div>
      <h2>Our <span class="highlight">Capabilities</span></h2>
      <div class="capabilities-grid">
        <div class="cap-card">
          <div class="cap-icon">⚙️</div>
          <h3>Custom Software</h3>
          <p>Scalable web, mobile and enterprise applications built precisely for your business needs.</p>
        </div>
        <div class="cap-card">
          <div class="cap-icon">🤖</div>
          <h3>AI Solutions</h3>
          <p>Production-ready AI — from LLM integrations to intelligent automation pipelines.</p>
        </div>
        <div class="cap-card">
          <div class="cap-icon">📊</div>
          <h3>Data Intelligence</h3>
          <p>Unified data platforms that turn fragmented business data into actionable insights.</p>
        </div>
        <div class="cap-card">
          <div class="cap-icon">🚀</div>
          <h3>Digital Transformation</h3>
          <p>End-to-end modernisation of legacy systems — faster, leaner, cloud-native.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 2: Why iDataOne -->
  <section class="screen" data-index="2">
    <div class="container">
      <div class="section-label">Why iDataOne</div>
      <h2>Built for the <span class="highlight">AI Era</span></h2>
      <p class="lead">We don't just build applications. We help businesses transform data into decisions, automation into efficiency, and ideas into scalable products.</p>
      <div class="why-grid">
        <div class="why-pill"><span>✦</span>AI-First Architecture</div>
        <div class="why-pill"><span>✦</span>Unified Data Layer</div>
        <div class="why-pill"><span>✦</span>Rapid Execution</div>
        <div class="why-pill"><span>✦</span>Cloud Native</div>
        <div class="why-pill"><span>✦</span>Enterprise Grade</div>
      </div>
    </div>
  </section>

  <!-- 3: Products -->
  <section class="screen" data-index="3">
    <div class="container">
      <div class="section-label">In the Lab</div>
      <h2>Products from <span class="highlight">iDataOne</span></h2>
      <div class="products-grid">
        <div class="product-card">
          <div class="product-icon">🍽️</div>
          <h3>MealMate</h3>
          <p>AI-powered meal planning for families — personalised, smart, and effortless.</p>
          <span class="badge">Coming Soon</span>
        </div>
        <div class="product-card">
          <div class="product-icon">💬</div>
          <h3>aiChat</h3>
          <p>AI agents for websites and business operations — always on, always intelligent.</p>
          <span class="badge">Coming Soon</span>
        </div>
        <div class="product-card">
          <div class="product-icon">📈</div>
          <h3>DatInsights</h3>
          <p>Unified business intelligence — one view of all your data, all the time.</p>
          <span class="badge">Coming Soon</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 4: Contact -->
  <section class="screen" data-index="4">
    <div class="container">
      <div class="contact-wrap">
        <div class="section-label">Get in Touch</div>
        <h2>Let's Build Something <span class="highlight">Intelligent</span></h2>
        <p class="lead">Tell us about your project and we'll set up a free discovery call.</p>

        <?php if (!empty($form_success)): ?>
          <div class="form-msg success">✓ Thanks! We'll be in touch within 24 hours.</div>
        <?php elseif (!empty($form_error)): ?>
          <div class="form-msg error">Something went wrong. Please try again or email us directly.</div>
        <?php endif; ?>

        <form method="POST" action="#contact" id="contact-form">
          <input type="hidden" name="form_submit" value="1">
          <div class="form-row">
            <input type="text"  name="name"    placeholder="Full Name"     required>
            <input type="text"  name="company" placeholder="Company Name">
          </div>
          <div class="form-row">
            <input type="email" name="email"   placeholder="Work Email"    required>
            <input type="tel"   name="phone"   placeholder="Phone Number">
          </div>
          <select name="service">
            <option value="" disabled selected>Service Interested In</option>
            <option>Custom Software Development</option>
            <option>AI Solutions</option>
            <option>Data Intelligence</option>
            <option>Digital Transformation</option>
            <option>Other</option>
          </select>
          <textarea name="message" placeholder="Tell us about your project..." rows="3"></textarea>
          <button type="submit" class="submit-btn">Book a Discovery Call →</button>
        </form>
      </div>
    </div>
  </section>

</div>

<!-- Nav dots -->
<div class="dots">
  <div class="dot active"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</div>

<footer class="footer">© <?php echo date('Y'); ?> iDataOne. All rights reserved.</footer>

<script>
const screens   = document.querySelectorAll('.screen');
const dots      = document.querySelectorAll('.dot');
const navLinks  = document.querySelectorAll('.nav-links a');
let current     = <?php echo (!empty($form_success) || !empty($form_error)) ? '4' : '0'; ?>;
let locked      = false;

// If page loaded due to form submit, jump to contact slide
<?php if (!empty($form_success) || !empty($form_error)): ?>
screens.forEach(s => s.classList.remove('active'));
screens[4].classList.add('active');
dots.forEach(d => d.classList.remove('active'));
dots[4].classList.add('active');
navLinks.forEach(l => l.classList.remove('active'));
navLinks[4].classList.add('active');
<?php endif; ?>

function showScreen(index) {
  if (index < 0 || index >= screens.length) return;
  screens[current].classList.remove('active');
  dots[current].classList.remove('active');
  navLinks[current].classList.remove('active');
  current = index;
  screens[current].classList.add('active');
  dots[current].classList.add('active');
  navLinks[current].classList.add('active');
}

// Mouse wheel
window.addEventListener('wheel', (e) => {
  if (locked) return;
  locked = true;
  if (e.deltaY > 0) showScreen(Math.min(current + 1, screens.length - 1));
  else              showScreen(Math.max(current - 1, 0));
  setTimeout(() => locked = false, 800);
}, { passive: true });

// Dot clicks
dots.forEach((dot, i) => dot.addEventListener('click', () => showScreen(i)));

// Nav link clicks
navLinks.forEach((link, i) => link.addEventListener('click', () => showScreen(i)));

// Keyboard
document.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowDown' || e.key === 'PageDown') showScreen(Math.min(current + 1, screens.length - 1));
  if (e.key === 'ArrowUp'   || e.key === 'PageUp')   showScreen(Math.max(current - 1, 0));
});

// Touch
let startY = 0;
document.addEventListener('touchstart', e => startY = e.touches[0].clientY, { passive: true });
document.addEventListener('touchend', e => {
  const diff = startY - e.changedTouches[0].clientY;
  if (Math.abs(diff) < 50) return;
  if (diff > 0) showScreen(Math.min(current + 1, screens.length - 1));
  else          showScreen(Math.max(current - 1, 0));
});
</script>

</body>
</html>
