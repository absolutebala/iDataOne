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
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
html,body{height:100%;overflow:hidden;font-family:'Inter',sans-serif}

body{
background:
radial-gradient(circle at top left, rgba(99,102,241,0.10), transparent 30%),
radial-gradient(circle at bottom right, rgba(59,130,246,0.08), transparent 30%),
linear-gradient(135deg,#f8fafc 0%,#eef2ff 45%,#f1f5f9 100%);
}

body:before{
content:"";
position:fixed;
inset:0;
background-image:
linear-gradient(rgba(15,23,42,0.03) 1px, transparent 1px),
linear-gradient(90deg, rgba(15,23,42,0.03) 1px, transparent 1px);
background-size:80px 80px;
pointer-events:none;
}

#presentation{height:100vh;position:relative}

.screen{
position:absolute;
inset:0;
display:flex;
align-items:center;
justify-content:center;
opacity:0;
transform:translateY(40px) scale(.98);
transition:all .8s ease;
pointer-events:none;
}

.screen.active{
opacity:1;
transform:translateY(0) scale(1);
pointer-events:auto;
}

.container{
position:relative;
z-index:2;
text-align:center;
max-width:1100px;
padding:40px;
width:100%;
}

.logo{
width:450px;
max-width:90%;
margin-bottom:45px;
animation:float 5s ease-in-out infinite;
filter:drop-shadow(0px 15px 40px rgba(99,102,241,0.12)) drop-shadow(0px 10px 20px rgba(0,0,0,0.06));
}

h1{
font-size:58px;
line-height:1.12;
letter-spacing:-2px;
color:#0f172a;
margin-bottom:24px;
font-weight:700;
}

h2{
font-size:72px;
line-height:1.1;
letter-spacing:-3px;
color:#0f172a;
margin-bottom:20px;
font-weight:700;
}

.highlight{
background:linear-gradient(90deg,#4f46e5,#7c3aed);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

p{
max-width:850px;
margin:auto;
font-size:20px;
line-height:1.8;
color:#475569;
}

.section-label{
font-size:14px;
font-weight:600;
letter-spacing:4px;
text-transform:uppercase;
color:#6366f1;
margin-bottom:30px;
}

.capability{
font-size:56px;
font-weight:700;
line-height:1.2;
color:#0f172a;
}

.capability span{
display:block;
}

.capability span.highlight{
background:linear-gradient(90deg,#4f46e5,#7c3aed);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

.explore{
margin-top:40px;
color:#6366f1;
font-weight:600;
letter-spacing:3px;
font-size:14px;
animation:bounce 2s infinite;
}

.pills{
display:flex;
justify-content:center;
gap:12px;
flex-wrap:wrap;
margin-top:40px;
}

.pill{
padding:10px 18px;
border-radius:999px;
background:#ffffff;
border:1px solid rgba(99,102,241,.15);
color:#4f46e5;
font-weight:600;
font-size:14px;
}

/* Products */
.products{
display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;
margin-top:40px;
}

.product{
background:rgba(255,255,255,0.75);
border:1px solid rgba(99,102,241,.12);
border-radius:20px;
padding:28px 32px;
width:260px;
text-align:left;
}

.product-icon{font-size:28px;margin-bottom:14px}

.product h3{
font-size:20px;
font-weight:700;
color:#0f172a;
margin-bottom:8px;
}

.product p{
font-size:14px;
color:#475569;
line-height:1.6;
margin-bottom:16px;
}

.badge{
display:inline-block;
padding:5px 12px;
border-radius:999px;
background:#eef2ff;
color:#4f46e5;
font-size:11px;
font-weight:700;
letter-spacing:1px;
text-transform:uppercase;
}

/* Contact form */
.form-wrap{
max-width:540px;
margin:0 auto;
text-align:left;
}

.form-wrap h2,.form-wrap p{text-align:center}
.form-wrap p{margin-bottom:28px}

.form-row{
display:grid;
grid-template-columns:1fr 1fr;
gap:10px;
margin-bottom:10px;
}

.form-wrap input,
.form-wrap select,
.form-wrap textarea{
width:100%;
padding:13px 16px;
border-radius:12px;
border:1px solid #e2e8f0;
background:rgba(255,255,255,0.9);
font-family:'Inter',sans-serif;
font-size:14px;
color:#0f172a;
outline:none;
transition:border-color .2s,box-shadow .2s;
}

.form-wrap input::placeholder,
.form-wrap textarea::placeholder{color:#94a3b8}
.form-wrap select{color:#64748b;margin-bottom:10px}

.form-wrap input:focus,
.form-wrap select:focus,
.form-wrap textarea:focus{
border-color:#4f46e5;
box-shadow:0 0 0 3px rgba(79,70,229,0.08);
}

.form-wrap textarea{resize:none;margin-bottom:14px}

.submit-btn{
width:100%;
padding:15px;
border-radius:12px;
border:none;
background:linear-gradient(90deg,#4f46e5,#7c3aed);
color:#fff;
font-family:'Inter',sans-serif;
font-size:15px;
font-weight:600;
cursor:pointer;
letter-spacing:0.3px;
transition:opacity .2s,transform .2s;
}

.submit-btn:hover{opacity:0.88;transform:translateY(-1px)}

.form-msg{
margin-top:12px;
text-align:center;
font-size:14px;
font-weight:500;
padding:10px 16px;
border-radius:10px;
}

.form-msg.success{background:#f0fdf4;color:#16a34a}
.form-msg.error{background:#fef2f2;color:#dc2626}

/* Dots */
.dots{
position:fixed;
right:30px;
top:50%;
transform:translateY(-50%);
z-index:10;
}

.dot{
width:12px;
height:12px;
border-radius:50%;
background:#cbd5e1;
margin:14px 0;
cursor:pointer;
transition:background .3s,transform .3s;
}

.dot.active{
background:#4f46e5;
transform:scale(1.4);
}

/* Footer */
.footer{
position:fixed;
bottom:0;left:0;right:0;
text-align:center;
padding:14px;
font-size:12px;
color:#94a3b8;
z-index:10;
}

@keyframes float{
0%,100%{transform:translateY(0)}
50%{transform:translateY(-8px)}
}

@keyframes bounce{
0%,100%{transform:translateY(0)}
50%{transform:translateY(8px)}
}

@media(max-width:768px){
.logo{width:280px;margin-bottom:30px}
h1{font-size:36px;letter-spacing:-1px}
h2{font-size:42px;letter-spacing:-1.5px}
.capability{font-size:32px}
p{font-size:17px}
.products{flex-direction:column;align-items:center}
.product{width:100%;max-width:320px}
.form-row{grid-template-columns:1fr}
.container{padding:24px 20px}
.dots{right:14px}
}
</style>
</head>
<body>

<div id="presentation">

<!-- 0: Hero -->
<section class="screen active">
<div class="container">
<img src="/assets/images/iDataOneLogoNoBG.png" class="logo" alt="iDataOne Logo">
<h1>Engineering <span class="highlight">AI-First Products</span><br>and Intelligent Data Platforms</h1>
<p>We help businesses build digital products powered by unified data,<br>automation, and AI-driven insights.</p>
<div class="explore">EXPLORE ↓</div>
</div>
</section>

<!-- 1: Capabilities -->
<section class="screen">
<div class="container">
<div class="section-label">What We Build</div>
<div class="capability">
<span>Custom Software</span>
<span>AI Solutions</span>
<span>Data Intelligence</span>
<span>Digital Transformation</span>
</div>
<p style="margin-top:40px;">Helping businesses modernize operations, unify data,<br>and build intelligent digital products.</p>
</div>
</section>

<!-- 2: Why iDataOne -->
<section class="screen">
<div class="container">
<div class="section-label">Why iDataOne</div>
<h2>Built for the <span class="highlight">AI Era</span></h2>
<p>We don't just build applications.<br><br>We help businesses transform data into decisions,<br>automation into efficiency, and ideas into scalable products.</p>
<div class="pills">
<div class="pill">AI-First</div>
<div class="pill">Unified Data</div>
<div class="pill">Rapid Execution</div>
<div class="pill">Cloud Native</div>
<div class="pill">Enterprise Grade</div>
</div>
</div>
</section>

<!-- 3: Products -->
<section class="screen">
<div class="container">
<div class="section-label">In the Lab</div>
<h2>Products from <span class="highlight">iDataOne</span></h2>
<div class="products">
<div class="product">
<div class="product-icon">🍽️</div>
<h3>MealMate</h3>
<p>AI-powered meal planning for families — personalised, smart, and effortless.</p>
<span class="badge">Coming Soon</span>
</div>
<div class="product">
<div class="product-icon">💬</div>
<h3>aiChat</h3>
<p>AI agents for websites and business operations — always on, always intelligent.</p>
<span class="badge">Coming Soon</span>
</div>
<div class="product">
<div class="product-icon">📈</div>
<h3>DatInsights</h3>
<p>Unified business intelligence — one view of all your data, all the time.</p>
<span class="badge">Coming Soon</span>
</div>
</div>
</div>
</section>

<!-- 4: Contact -->
<section class="screen">
<div class="container">
<div class="form-wrap">
<div class="section-label">Get in Touch</div>
<h2>Let's Build Something <span class="highlight">Intelligent</span></h2>
<p>Tell us about your project and we'll set up a free discovery call.</p>

<?php if (!empty($form_success)): ?>
<div class="form-msg success">✓ Thanks! We'll be in touch within 24 hours.</div>
<?php elseif (!empty($form_error)): ?>
<div class="form-msg error">Something went wrong. Please email us directly at info@idataone.com</div>
<?php endif; ?>

<form method="POST" action="#" id="contact-form">
<input type="hidden" name="form_submit" value="1">
<div class="form-row">
<input type="text"  name="name"    placeholder="Full Name"    required>
<input type="text"  name="company" placeholder="Company Name">
</div>
<div class="form-row">
<input type="email" name="email"   placeholder="Work Email"   required>
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
const screens = document.querySelectorAll('.screen');
const dots    = document.querySelectorAll('.dot');
let current   = <?php echo (!empty($form_success) || !empty($form_error)) ? '4' : '0'; ?>;
let locked    = false;

<?php if (!empty($form_success) || !empty($form_error)): ?>
screens.forEach(s => s.classList.remove('active'));
screens[4].classList.add('active');
dots.forEach(d => d.classList.remove('active'));
dots[4].classList.add('active');
<?php endif; ?>

function showScreen(index) {
  if (index < 0 || index >= screens.length) return;
  screens[current].classList.remove('active');
  dots[current].classList.remove('active');
  current = index;
  screens[current].classList.add('active');
  dots[current].classList.add('active');
}

window.addEventListener('wheel', (e) => {
  if (locked) return;
  locked = true;
  if (e.deltaY > 0) showScreen(Math.min(current + 1, screens.length - 1));
  else              showScreen(Math.max(current - 1, 0));
  setTimeout(() => locked = false, 800);
}, { passive: true });

dots.forEach((dot, i) => dot.addEventListener('click', () => showScreen(i)));

document.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowDown' || e.key === 'PageDown') showScreen(Math.min(current + 1, screens.length - 1));
  if (e.key === 'ArrowUp'   || e.key === 'PageUp')   showScreen(Math.max(current - 1, 0));
});

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
