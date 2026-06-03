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
width:270px;
max-width:80%;
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
cursor:pointer;
user-select:none;
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

/* Fixed screen CTA — same position on all screens */
.screen-cta{position:fixed;bottom:48px;right:72px;z-index:100;display:none;align-items:center;gap:10px;font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#4f46e5;cursor:pointer;transition:gap 0.25s,opacity 0.25s;opacity:0.8}
.screen-cta:hover{gap:16px;opacity:1}
.screen-cta.visible{display:inline-flex}
.screen-cta svg{width:14px;height:14px;stroke:#4f46e5;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}

/* Why iDataOne screen */
.why-inner{max-width:780px;margin:0 auto;text-align:center}
.why-label{font-size:11px;font-weight:700;letter-spacing:5px;text-transform:uppercase;color:#6366f1;margin-bottom:16px}
.why-heading{font-size:58px;font-weight:700;letter-spacing:-3px;line-height:1.05;color:#0f172a;margin-bottom:44px}
.why-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;text-align:left;margin-bottom:0}
.why-item{padding:32px 28px;display:flex;align-items:flex-start;gap:16px;position:relative;border-radius:16px;background:rgba(255,255,255,0.55);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);overflow:hidden;transition:transform 0.35s ease,box-shadow 0.35s ease,border-color 0.35s ease}
.why-item::after{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.why-item:hover::after{left:130%}
.why-item:nth-child(1){border:1px solid rgba(79,70,229,0.22)}
.why-item:nth-child(2){border:1px solid rgba(13,148,136,0.22)}
.why-item:nth-child(3){border:1px solid rgba(217,119,6,0.22)}
.why-item:nth-child(4){border:1px solid rgba(124,58,237,0.22)}
.why-item:nth-child(1):hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(79,70,229,0.12);border-color:rgba(79,70,229,0.4)}
.why-item:nth-child(2):hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(13,148,136,0.12);border-color:rgba(13,148,136,0.4)}
.why-item:nth-child(3):hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(217,119,6,0.12);border-color:rgba(217,119,6,0.4)}
.why-item:nth-child(4):hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(124,58,237,0.12);border-color:rgba(124,58,237,0.4)}
.why-item::before{display:none}
.why-num{font-size:10px;font-weight:700;letter-spacing:2px;color:#a5b4fc;min-width:24px;padding-top:4px}
.why-title{font-size:16px;font-weight:700;color:#0f172a;letter-spacing:-0.3px;margin-bottom:6px}
.why-desc{font-size:13px;color:#64748b;line-height:1.6}
.why-bottom{display:flex;justify-content:flex-end;margin-top:28px}
.why-cta{display:inline-flex;align-items:center;gap:10px;font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#4f46e5;cursor:pointer;transition:gap 0.25s,opacity 0.25s;opacity:0.8}
.why-cta:hover{gap:16px;opacity:1}
.why-cta svg{width:14px;height:14px;stroke:#4f46e5;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}

/* Capability Cards — 3 rectangular columns */
.cap-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;text-align:left;margin-top:36px}
.cap-card{background:rgba(255,255,255,0.55);border:1px solid rgba(226,232,240,0.85);border-radius:20px;padding:28px 24px 24px;position:relative;overflow:hidden;backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);transition:transform 0.35s ease,box-shadow 0.35s ease,border-color 0.35s ease;cursor:default}
/* Glossy sheen pseudo-element */
.cap-card::before{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.cap-card:hover::before{left:130%}
.cap-card.teal{border:1px solid rgba(20,184,166,0.25)}
.cap-card.violet{border:1px solid rgba(124,58,237,0.2)}
.cap-card.amber{border:1px solid rgba(245,158,11,0.22)}
.cap-card.teal:hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(20,184,166,0.14),0 4px 16px rgba(20,184,166,0.06);border-color:rgba(20,184,166,0.4)}
.cap-card.violet:hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(124,58,237,0.14),0 4px 16px rgba(124,58,237,0.06);border-color:rgba(124,58,237,0.4)}
.cap-card.amber:hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(245,158,11,0.14),0 4px 16px rgba(245,158,11,0.06);border-color:rgba(245,158,11,0.4)}
.cap-card-top{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:20px}
.icon-teal{width:46px;height:46px;border-radius:13px;background:linear-gradient(135deg,#f0fdfa,#ccfbf1);border:1px solid rgba(20,184,166,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.icon-teal svg{stroke:#0d9488}
.icon-violet{width:46px;height:46px;border-radius:13px;background:linear-gradient(135deg,#f5f3ff,#ede9fe);border:1px solid rgba(124,58,237,0.18);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.icon-violet svg{stroke:#7c3aed}
.icon-amber{width:46px;height:46px;border-radius:13px;background:linear-gradient(135deg,#fffbeb,#fef3c7);border:1px solid rgba(245,158,11,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.icon-amber svg{stroke:#d97706}
.cap-icon-wrap svg{width:21px;height:21px;fill:none;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cap-number{font-size:11px;font-weight:700;letter-spacing:2px;color:#cbd5e1;padding-top:4px}
.cap-card-title{font-size:18px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;line-height:1.25;margin-bottom:5px}
.cap-card-outcome{font-size:12px;font-weight:600;letter-spacing:0.2px;margin-bottom:12px}
.teal .cap-card-outcome{color:#0d9488}
.violet .cap-card-outcome{color:#7c3aed}
.amber .cap-card-outcome{color:#d97706}
.cap-card-desc{font-size:13px;color:#64748b;line-height:1.7;margin-bottom:18px}
.cap-footer{display:flex;align-items:center;justify-content:space-between;padding-top:14px;border-top:1px solid rgba(226,232,240,0.8)}
.cap-tags{display:flex;flex-wrap:wrap;gap:5px}
.cap-tag{font-size:10px;font-weight:600;letter-spacing:0.3px;border-radius:999px;padding:3px 9px}
.teal .cap-tag{color:#0d9488;background:#f0fdfa}
.violet .cap-tag{color:#7c3aed;background:#f5f3ff}
.amber .cap-tag{color:#d97706;background:#fffbeb}
.cap-arrow{width:28px;height:28px;border-radius:50%;border:1px solid rgba(203,213,225,0.8);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-left:8px;transition:background 0.25s,border-color 0.25s}
.cap-arrow svg{width:12px;height:12px;fill:none;stroke:#94a3b8;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;transition:stroke 0.25s}
.cap-card.teal:hover .cap-arrow{background:#0d9488;border-color:#0d9488}
.cap-card.violet:hover .cap-arrow{background:#7c3aed;border-color:#7c3aed}
.cap-card.amber:hover .cap-arrow{background:#d97706;border-color:#d97706}
.cap-card:hover .cap-arrow svg{stroke:#fff}
@media(max-width:768px){.cap-grid{grid-template-columns:1fr}}

/* Products */
.products{
display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;
margin-top:40px;
}

.product{
background:rgba(255,255,255,0.55);
border-radius:20px;
padding:28px 28px 24px;
width:280px;
text-align:left;
position:relative;
overflow:hidden;
backdrop-filter:blur(20px);
-webkit-backdrop-filter:blur(20px);
transition:transform 0.35s ease,box-shadow 0.35s ease,border-color 0.35s ease;
}
.product.rose{border:1px solid rgba(244,63,94,0.2)}
.product.sky{border:1px solid rgba(14,165,233,0.2)}
.product.emerald{border:1px solid rgba(16,185,129,0.2)}
.product::before{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.product:hover::before{left:130%}
.product.rose:hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(244,63,94,0.10);border-color:rgba(244,63,94,0.4)}
.product.sky:hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(14,165,233,0.10);border-color:rgba(14,165,233,0.4)}
.product.emerald:hover{transform:translateY(-6px);box-shadow:0 28px 60px rgba(16,185,129,0.10);border-color:rgba(16,185,129,0.4)}

.product-top{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:18px}
.icon-rose{width:46px;height:46px;border-radius:13px;background:linear-gradient(135deg,#fff1f2,#ffe4e6);border:1px solid rgba(244,63,94,0.18);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.icon-rose svg{stroke:#f43f5e}
.icon-sky{width:46px;height:46px;border-radius:13px;background:linear-gradient(135deg,#f0f9ff,#e0f2fe);border:1px solid rgba(14,165,233,0.18);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.icon-sky svg{stroke:#0ea5e9}
.icon-emerald{width:46px;height:46px;border-radius:13px;background:linear-gradient(135deg,#ecfdf5,#d1fae5);border:1px solid rgba(16,185,129,0.18);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.icon-emerald svg{stroke:#10b981}
.product-icon-wrap svg{width:21px;height:21px;fill:none;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.product-num{font-size:10px;font-weight:700;letter-spacing:2px;color:#cbd5e1;padding-top:4px}

.product h3{
font-size:18px;
font-weight:700;
color:#0f172a;
letter-spacing:-0.4px;
margin-bottom:6px;
}

.product p{
font-size:13px;
color:#64748b;
line-height:1.65;
margin-bottom:18px;
}

.product-footer{display:flex;align-items:center;justify-content:space-between;padding-top:14px;border-top:1px solid rgba(226,232,240,0.8)}

.badge{
display:inline-block;
padding:4px 10px;
border-radius:999px;
font-size:10px;
font-weight:700;
letter-spacing:1px;
text-transform:uppercase;
}
.rose .badge{background:#fff1f2;color:#f43f5e}
.sky .badge{background:#f0f9ff;color:#0ea5e9}
.emerald .badge{background:#ecfdf5;color:#10b981}

.product-arrow{width:28px;height:28px;border-radius:50%;border:1px solid rgba(203,213,225,0.8);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:background 0.25s,border-color 0.25s}
.product-arrow svg{width:12px;height:12px;fill:none;stroke:#94a3b8;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;transition:stroke 0.25s}
.product.rose:hover .product-arrow{background:#f43f5e;border-color:#f43f5e}
.product.sky:hover .product-arrow{background:#0ea5e9;border-color:#0ea5e9}
.product.emerald:hover .product-arrow{background:#10b981;border-color:#10b981}
.product:hover .product-arrow svg{stroke:#fff}

/* Contact — elite split panel */
.contact-inner{position:relative;z-index:2;width:100%;max-width:900px;display:grid;grid-template-columns:1fr 1fr;background:rgba(255,255,255,0.6);border:1px solid rgba(226,232,240,0.9);border-radius:28px;overflow:hidden;backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px)}
.contact-left{background:#0f172a;padding:52px 44px;display:flex;flex-direction:column;justify-content:space-between;position:relative;overflow:hidden}
.contact-left::before{content:"";position:absolute;top:-60px;left:-60px;width:240px;height:240px;background:radial-gradient(circle,rgba(99,102,241,0.25),transparent 70%);pointer-events:none}
.contact-left::after{content:"";position:absolute;bottom:-40px;right:-40px;width:180px;height:180px;background:radial-gradient(circle,rgba(124,58,237,0.2),transparent 70%);pointer-events:none}
.cl-label{font-size:10px;font-weight:700;letter-spacing:5px;text-transform:uppercase;color:rgba(99,102,241,0.8);margin-bottom:20px}
.cl-heading{font-size:36px;font-weight:700;letter-spacing:-1.5px;line-height:1.15;color:#f1f5f9}
.cl-heading em{font-style:normal;background:linear-gradient(90deg,#818cf8,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cl-divider{width:36px;height:2px;background:linear-gradient(90deg,#4f46e5,#7c3aed);border-radius:2px;margin:28px 0}
.cl-info{display:flex;flex-direction:column;gap:18px}
.cl-info-item{display:flex;align-items:flex-start;gap:12px}
.cl-info-dot{width:6px;height:6px;border-radius:50%;background:#4f46e5;flex-shrink:0;margin-top:5px}
.cl-info-text{font-size:13px;color:rgba(255,255,255,0.45);line-height:1.5}
.cl-info-text strong{color:rgba(255,255,255,0.75);font-weight:500;display:block}
.cl-bottom{margin-top:40px;font-size:11px;color:rgba(255,255,255,0.2);letter-spacing:0.5px}
.contact-right{padding:44px;display:flex;flex-direction:column;justify-content:center}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:24px}
.cfield{display:flex;flex-direction:column;gap:7px}
.cfield label{font-size:9.5px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#94a3b8}
.cfield input,.cfield textarea{width:100%;padding:10px 0;border:none;border-bottom:1px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:14px;color:#0f172a;outline:none;border-radius:0;transition:border-color 0.25s;-webkit-appearance:none}
.cfield input::placeholder,.cfield textarea::placeholder{color:#cbd5e1;font-size:13px}
.cfield input:focus,.cfield textarea:focus{border-bottom-color:#4f46e5}
.cfield textarea{resize:none}
.service-section{margin-bottom:24px}
.service-section label{font-size:9.5px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#94a3b8;display:block;margin-bottom:12px}
.service-pills{display:flex;gap:8px;flex-wrap:wrap}
.service-pill{padding:7px 14px;border-radius:8px;border:1px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:12px;font-weight:500;color:#64748b;cursor:pointer;transition:all 0.2s;user-select:none;letter-spacing:0.2px}
.service-pill:hover{border-color:#c7d2fe;color:#4f46e5;background:#f5f3ff}
.service-pill.active{border-color:#4f46e5;background:#4f46e5;color:#fff}
.submit-btn{width:100%;padding:14px 24px;border-radius:10px;border:none;background:#0f172a;color:#fff;font-family:'Inter',sans-serif;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:background 0.25s,transform 0.2s;margin-top:4px}
.submit-btn:hover{background:#1e293b;transform:translateY(-1px)}
.submit-btn svg{width:13px;height:13px;stroke:#fff;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round;transition:transform 0.2s}
.submit-btn:hover svg{transform:translateX(3px)}
.form-msg{margin-top:12px;text-align:center;font-size:13px;font-weight:500;padding:10px 16px;border-radius:10px}
.form-msg.success{background:#f0fdf4;color:#16a34a}
.form-msg.error{background:#fef2f2;color:#dc2626}
@media(max-width:768px){.contact-inner{grid-template-columns:1fr}.contact-left{padding:36px 28px}.contact-right{padding:36px 28px}.form-row-2{grid-template-columns:1fr;gap:16px}}

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

/* Top-left logo */
.site-logo{position:fixed;top:22px;left:32px;z-index:100;transition:opacity 0.4s,transform 0.4s}
.site-logo img{height:36px;width:auto;opacity:0.92}
.site-logo.hidden{opacity:0;pointer-events:none;transform:translateY(-6px)}

/* Tamil signature */
.tamil-sig{position:fixed;bottom:18px;right:28px;z-index:100;font-size:42px;color:rgba(99,102,241,0.55);line-height:1;letter-spacing:0;transition:color 0.3s,transform 0.3s;cursor:default;user-select:none}
.tamil-sig:hover{color:rgba(99,102,241,0.9);transform:scale(1.15)}

/* Footer */
.footer{
position:fixed;
bottom:16px;left:32px;
font-size:11px;
color:#cbd5e1;
z-index:10;
letter-spacing:0.3px;
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

<!-- Top-left logo (all screens) -->
<div class="site-logo">
  <img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne">
</div>

<!-- Tamil signature -->
<div class="tamil-sig">ஐ</div>

<div id="presentation">

<!-- 0: Hero -->
<section class="screen active">
<div class="container">
<img src="/assets/images/iDataOneLogoNoBG.png" class="logo" alt="iDataOne Logo">
<h1>Engineering <span class="highlight">AI-First Products</span><br>and Intelligent Data Platforms</h1>
<p>We help businesses build digital products powered by unified data,<br>automation, and AI-driven insights.</p>
<div class="explore" onclick="showScreen(1)">EXPLORE ↓</div>
</div>
</section>

<!-- 1: Capabilities -->
<section class="screen">
<div class="container">
<div class="section-label">What We Build</div>
<h2>Our <span class="highlight">Capabilities</span></h2>
<div class="cap-grid">

<div class="cap-card teal">
<div class="cap-card-top">
<div class="cap-icon-wrap icon-teal"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/></svg></div>
<span class="cap-number">01</span>
</div>
<div class="cap-card-title">Custom Software</div>
<div class="cap-card-outcome">Ship faster. Scale without limits.</div>
<div class="cap-card-desc">Web, mobile, and enterprise applications built precisely for your workflows — not off-the-shelf compromises.</div>
<div class="cap-footer">
<div class="cap-tags"><span class="cap-tag">Web Apps</span><span class="cap-tag">Mobile</span><span class="cap-tag">Enterprise</span></div>
<div class="cap-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
</div>
</div>

<div class="cap-card violet">
<div class="cap-card-top">
<div class="cap-icon-wrap icon-violet"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/></svg></div>
<span class="cap-number">02</span>
</div>
<div class="cap-card-title">AI Solutions</div>
<div class="cap-card-outcome">Automate decisions. Eliminate bottlenecks.</div>
<div class="cap-card-desc">From LLM integrations to intelligent automation — we build AI that works in production, not just in demos.</div>
<div class="cap-footer">
<div class="cap-tags"><span class="cap-tag">LLM Integration</span><span class="cap-tag">AI Agents</span><span class="cap-tag">Automation</span></div>
<div class="cap-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
</div>
</div>

<div class="cap-card amber">
<div class="cap-card-top">
<div class="cap-icon-wrap icon-amber"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
<span class="cap-number">03</span>
</div>
<div class="cap-card-title">Data Intelligence</div>
<div class="cap-card-outcome">One truth. Instant clarity.</div>
<div class="cap-card-desc">Unify fragmented data sources into a single trusted layer — then turn it into insights that drive real action.</div>
<div class="cap-footer">
<div class="cap-tags"><span class="cap-tag">Data Pipelines</span><span class="cap-tag">Dashboards</span><span class="cap-tag">BI Platforms</span></div>
<div class="cap-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
</div>
</div>

</div>
<div class="why-bottom" style="margin-top:20px">
  <div class="why-cta" onclick="showScreen(2)">
    Why iDataOne
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </div>
</div>
</div>
</section>

<!-- 2: Why iDataOne -->
<section class="screen">
<div class="container">
<div class="why-inner">
<div class="why-label">Why iDataOne</div>
<div class="why-heading">Built for the <span class="highlight">AI Era</span></div>
<div class="why-grid">
  <div class="why-item">
    <span class="why-num">01</span>
    <div class="why-content">
      <div class="why-title">AI-First Architecture</div>
      <div class="why-desc">Intelligence built into the foundation, not bolted on after.</div>
    </div>
  </div>
  <div class="why-item">
    <span class="why-num">02</span>
    <div class="why-content">
      <div class="why-title">Unified Data Layer</div>
      <div class="why-desc">One source of truth across every system and team.</div>
    </div>
  </div>
  <div class="why-item">
    <span class="why-num">03</span>
    <div class="why-content">
      <div class="why-title">Enterprise Grade</div>
      <div class="why-desc">Security, scale, and reliability your business can depend on.</div>
    </div>
  </div>
  <div class="why-item">
    <span class="why-num">04</span>
    <div class="why-content">
      <div class="why-title">Cloud Native</div>
      <div class="why-desc">Built for modern infrastructure — flexible, resilient, future-proof.</div>
    </div>
  </div>
</div>
<div class="why-bottom">
  <div class="why-cta" id="screen-cta" onclick="showScreen(3)">
    <span id="screen-cta-label">In the Lab</span>
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </div>
</div>
</div>
</div>
</section>

<!-- 3: Products -->
<section class="screen">
<div class="container">
<div class="section-label">In the Lab</div>
<h2>Products from <span class="highlight">iDataOne</span></h2>
<div class="products">

<div class="product rose">
<div class="product-top">
<div class="product-icon-wrap icon-rose"><svg viewBox="0 0 24 24"><path d="M3 6h18M3 12h18M3 18h18"/><circle cx="7" cy="6" r="1" fill="#f43f5e" stroke="none"/><circle cx="7" cy="12" r="1" fill="#f43f5e" stroke="none"/><circle cx="7" cy="18" r="1" fill="#f43f5e" stroke="none"/></svg></div>
<span class="product-num">01</span>
</div>
<h3>MealMate</h3>
<p>AI-powered meal planning for families — personalised, smart, and effortless.</p>
<div class="product-footer">
<span class="badge">Coming Soon</span>
<div class="product-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
</div>
</div>

<div class="product sky">
<div class="product-top">
<div class="product-icon-wrap icon-sky"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
<span class="product-num">02</span>
</div>
<h3>aiChat</h3>
<p>AI agents for websites and business operations — always on, always intelligent.</p>
<div class="product-footer">
<span class="badge">Coming Soon</span>
<div class="product-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
</div>
</div>

<div class="product emerald">
<div class="product-top">
<div class="product-icon-wrap icon-emerald"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
<span class="product-num">03</span>
</div>
<h3>DatInsights</h3>
<p>Unified business intelligence — one view of all your data, all the time.</p>
<div class="product-footer">
<span class="badge">Coming Soon</span>
<div class="product-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
</div>
</div>

</div>
<div class="why-bottom" style="margin-top:20px">
  <div class="why-cta" onclick="showScreen(4)">
    Build Something Intelligent
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </div>
</div>
</div>
</section>

<!-- 4: Contact -->
<section class="screen">
<div class="container">
<div class="contact-inner">

  <div class="contact-left">
    <div>
      <div class="cl-label">Get in Touch</div>
      <div class="cl-heading">Let's Build<br>Something<br><em>Intelligent</em></div>
      <div class="cl-divider"></div>
      <div class="cl-info">
        <div class="cl-info-item">
          <div class="cl-info-dot"></div>
          <div class="cl-info-text"><strong>Response Time</strong>Within 24 hours</div>
        </div>
        <div class="cl-info-item">
          <div class="cl-info-dot"></div>
          <div class="cl-info-text"><strong>Discovery Call</strong>Free 30-minute session</div>
        </div>
        <div class="cl-info-item">
          <div class="cl-info-dot"></div>
          <div class="cl-info-text"><strong>Email</strong>info@idataone.com</div>
        </div>
      </div>
    </div>
    <div class="cl-bottom">© <?php echo date('Y'); ?> iDataOne</div>
  </div>

  <div class="contact-right">
    <?php if (!empty($form_success)): ?>
    <div class="form-msg success">✓ Thanks! We'll be in touch within 24 hours.</div>
    <?php elseif (!empty($form_error)): ?>
    <div class="form-msg error">Something went wrong. Please email info@idataone.com directly.</div>
    <?php endif; ?>

    <form method="POST" action="#" id="contact-form">
    <input type="hidden" name="form_submit" value="1">
    <input type="hidden" name="service" id="service-val" value="">

    <div class="form-row-2">
      <div class="cfield">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="John Smith" required>
      </div>
      <div class="cfield">
        <label>Company</label>
        <input type="text" name="company" placeholder="Acme Corp">
      </div>
    </div>
    <div class="form-row-2">
      <div class="cfield">
        <label>Work Email</label>
        <input type="email" name="email" placeholder="john@acme.com" required>
      </div>
      <div class="cfield">
        <label>Phone</label>
        <input type="tel" name="phone" placeholder="+1 000 000 0000">
      </div>
    </div>

    <div class="service-section">
      <label>Service</label>
      <div class="service-pills">
        <div class="service-pill" onclick="selectService(this,'Custom Software')">Custom Software</div>
        <div class="service-pill" onclick="selectService(this,'AI Solutions')">AI Solutions</div>
        <div class="service-pill" onclick="selectService(this,'Data Intelligence')">Data Intelligence</div>
        <div class="service-pill" onclick="selectService(this,'Other')">Other</div>
      </div>
    </div>

    <div class="form-row-2" style="margin-bottom:20px">
      <div class="cfield" style="grid-column:1/-1">
        <label>Project Details</label>
        <textarea name="message" rows="2" placeholder="Briefly describe your project..."></textarea>
      </div>
    </div>

    <button type="submit" class="submit-btn">
      Book a Discovery Call
      <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </button>
    </form>
  </div>

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

<footer class="footer"></footer>

<script>
function selectService(el, val) {
  document.querySelectorAll('.service-pill').forEach(p => p.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('service-val').value = val;
}
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

const siteLogo = document.querySelector('.site-logo');

function updateLogo(index) {
  if (index === 0) siteLogo.classList.add('hidden');
  else siteLogo.classList.remove('hidden');
}

function showScreen(index) {
  if (index < 0 || index >= screens.length) return;
  screens[current].classList.remove('active');
  dots[current].classList.remove('active');
  current = index;
  screens[current].classList.add('active');
  dots[current].classList.add('active');
  updateLogo(index);
}

updateLogo(current);

window.addEventListener('wheel', (e) => {
  if (locked) return;
  locked = true;
  if (e.deltaY > 0) showScreen(Math.min(current + 1, screens.length - 1));
  else              showScreen(Math.max(current - 1, 0));
  setTimeout(() => locked = false, 900);
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
