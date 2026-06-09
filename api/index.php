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
<title>iDataOne | AI-First Products, Data Intelligence & Custom Software</title>
<meta name="description" content="iDataOne builds AI-first products, custom software, intelligent data platforms and digital transformation solutions. Book a free discovery call today.">
<meta name="keywords" content="AI solutions, custom software development, data intelligence, digital transformation, AI-first products, intelligent data platforms">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/">
<meta property="og:title" content="iDataOne | AI-First Products & Intelligent Data Platforms">
<meta property="og:description" content="We help businesses build intelligent digital systems powered by unified data, automation, and AI-driven insights. Book a free discovery call.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://idataone.com/">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="iDataOne | AI-First Products & Intelligent Data Platforms">
<meta name="twitter:description" content="Custom software, AI solutions, data intelligence and digital transformation — under one roof.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "iDataOne",
  "url": "https://idataone.com",
  "logo": "https://idataone.com/assets/images/iDataOneLogoNoBG.png",
  "description": "iDataOne builds AI-first products, custom software, intelligent data platforms and digital transformation solutions.",
  "contactPoint": {
    "@type": "ContactPoint",
    "email": "info@idataone.com",
    "contactType": "customer service"
  },
  "sameAs": []
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
html,body{height:100%;overflow:hidden;font-family:'Inter',sans-serif}

body{
background:
radial-gradient(ellipse at 10% 15%, rgba(99,102,241,0.22), transparent 40%),
radial-gradient(ellipse at 88% 12%, rgba(124,58,237,0.18), transparent 38%),
radial-gradient(ellipse at 75% 82%, rgba(245,158,11,0.12), transparent 40%),
radial-gradient(ellipse at 15% 80%, rgba(20,184,166,0.12), transparent 35%),
radial-gradient(ellipse at 50% 50%, rgba(139,92,246,0.08), transparent 50%),
linear-gradient(135deg,#eef0fa 0%,#e8ecf8 30%,#e4eaf8 60%,#eaecf5 100%);
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
font-size:58px;
line-height:1.1;
letter-spacing:-2.5px;
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
margin-bottom:20px;
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
.why-label{font-size:14px;font-weight:600;letter-spacing:4px;text-transform:uppercase;color:#6366f1;margin-bottom:20px}
.why-heading{font-size:58px;font-weight:700;letter-spacing:-2.5px;line-height:1.1;color:#0f172a;margin-bottom:36px}
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
.cap-card{background:rgba(255,255,255,0.72);border-radius:24px;padding:36px 36px 28px;position:relative;overflow:hidden;backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);display:grid;grid-template-columns:1fr 280px;gap:32px;align-items:start;transition:box-shadow 0.3s}
/* Glossy sheen pseudo-element */
.cap-card::before{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.cap-card:hover::before{left:130%}
.cap-card.teal{border:1px solid rgba(20,184,166,0.25)}
.cap-card.rose{border:1px solid rgba(244,63,94,0.22)}
.cap-card.sky{border:1px solid rgba(14,165,233,0.2)}
.cap-card.emerald{border:1px solid rgba(16,185,129,0.22)}
.cap-card.rose:hover{box-shadow:0 28px 60px rgba(244,63,94,0.12)}
.cap-card.sky:hover{box-shadow:0 28px 60px rgba(14,165,233,0.12)}
.cap-card.emerald:hover{box-shadow:0 28px 60px rgba(16,185,129,0.12)}
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
.cap-number{font-size:11px;font-weight:700;letter-spacing:2px;color:#94a3b8;padding-top:4px}
.cap-card-title{font-size:18px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;line-height:1.25;margin-bottom:5px}
.cap-card-outcome{font-size:12px;font-weight:600;letter-spacing:0.2px;margin-bottom:12px}
.teal .cap-card-outcome{color:#0d9488}
.violet .cap-card-outcome{color:#7c3aed}
.amber .cap-card-outcome{color:#d97706}
.rose .cap-card-outcome{color:#f43f5e}
.sky .cap-card-outcome{color:#0ea5e9}
.emerald .cap-card-outcome{color:#10b981}
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

/* Capability Carousel */
.cap-carousel{position:relative;width:100%;max-width:780px;margin:0 auto}
.cap-tabs{display:flex;gap:6px;justify-content:center;margin-bottom:16px}
.cap-tab{padding:6px 14px;border-radius:999px;font-size:11px;font-weight:600;letter-spacing:0.3px;cursor:pointer;transition:all 0.2s;border:1px solid rgba(226,232,240,0.9);background:rgba(255,255,255,0.6);color:#64748b}
.cap-tab.t-teal{background:#f0fdfa;border-color:rgba(20,184,166,0.3);color:#0d9488}
.cap-tab.t-violet{background:#f5f3ff;border-color:rgba(124,58,237,0.3);color:#7c3aed}
.cap-tab.t-amber{background:#fffbeb;border-color:rgba(245,158,11,0.3);color:#d97706}
.cap-tab.t-rose{background:#fff1f2;border-color:rgba(244,63,94,0.3);color:#f43f5e}
.cap-tab.t-sky{background:#f0f9ff;border-color:rgba(14,165,233,0.3);color:#0ea5e9}
.cap-tab.t-emerald{background:#ecfdf5;border-color:rgba(16,185,129,0.3);color:#10b981}
.cap-slides{position:relative;width:100%}
.cap-slide{display:none;animation:capFadeIn 0.4s ease}
.cap-slide.active{display:block}
@keyframes capFadeIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.cap-card.teal{border:1px solid rgba(20,184,166,0.25)}
.cap-card.violet{border:1px solid rgba(124,58,237,0.2)}
.cap-card.amber{border:1px solid rgba(245,158,11,0.22)}
.cap-card.teal:hover{box-shadow:0 28px 60px rgba(20,184,166,0.12)}
.cap-card.violet:hover{box-shadow:0 28px 60px rgba(124,58,237,0.12)}
.cap-card.amber:hover{box-shadow:0 28px 60px rgba(245,158,11,0.12)}
.cap-card::before{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.cap-card:hover::before{left:130%}
.cap-card-title{font-size:26px;font-weight:700;color:#0f172a;letter-spacing:-0.6px;line-height:1.2;margin-bottom:6px}
.cap-card-outcome{font-size:13px;font-weight:600;letter-spacing:0.2px;margin-bottom:14px}
.teal .cap-card-outcome{color:#0d9488}
.violet .cap-card-outcome{color:#7c3aed}
.amber .cap-card-outcome{color:#d97706}
.cap-card-desc{font-size:14px;color:#475569;line-height:1.75;margin-bottom:22px}
.cap-checklist{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:8px 20px;margin-bottom:28px;padding:0}
.cap-checklist li{font-size:13px;color:#64748b;display:flex;align-items:center;gap:8px}
.cap-checklist li::before{content:"✓";font-weight:700;font-size:12px;flex-shrink:0}
.teal .cap-checklist li::before{color:#0d9488}
.violet .cap-checklist li::before{color:#7c3aed}
.amber .cap-checklist li::before{color:#d97706}
.rose .cap-checklist li::before{color:#f43f5e}
.sky .cap-checklist li::before{color:#0ea5e9}
.emerald .cap-checklist li::before{color:#10b981}
.cap-footer{display:flex;align-items:center;justify-content:space-between;padding-top:18px;border-top:1px solid rgba(226,232,240,0.8)}
.cap-pips{display:flex;gap:6px;align-items:center}
.cap-pip{height:3px;border-radius:999px;background:#e2e8f0;width:16px}
.cap-pip.active-teal{background:#0d9488;width:28px}
.cap-pip.active-violet{background:#7c3aed;width:28px}
.cap-pip.active-amber{background:#d97706;width:28px}
.cap-pip.active-rose{background:#f43f5e;width:28px}
.cap-pip.active-sky{background:#0ea5e9;width:28px}
.cap-pip.active-emerald{background:#10b981;width:28px}
.cap-nav{display:flex;align-items:center;gap:10px}
.cap-nav-btn{width:36px;height:36px;border-radius:50%;border:1px solid rgba(203,213,225,0.8);background:transparent;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.2s}
.cap-nav-btn svg{width:14px;height:14px;fill:none;stroke:#64748b;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;transition:stroke 0.2s}
.cap-nav-btn:hover{background:#0f172a;border-color:#0f172a}
.cap-nav-btn:hover svg{stroke:#fff}
.cap-nav-count{font-size:12px;font-weight:600;color:#94a3b8;letter-spacing:1px}
.cap-illus{display:flex;align-items:center;justify-content:center}
@media(max-width:768px){.cap-card{grid-template-columns:1fr!important}.cap-illus{display:none}}

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
.product-num{font-size:10px;font-weight:700;letter-spacing:2px;color:#94a3b8;padding-top:4px}

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

/* Contact — conversion focused */
.contact-inner{position:relative;z-index:2;width:100%;max-width:1100px;display:grid;grid-template-columns:1fr 1.15fr;gap:64px;align-items:center}
.contact-left{text-align:left}
.cl-label{font-size:14px;font-weight:600;letter-spacing:4px;text-transform:uppercase;color:#6366f1;margin-bottom:20px}
.cl-heading{font-size:44px;font-weight:700;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:12px}
.cl-heading em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cl-sub{font-size:15px;color:#64748b;line-height:1.7;margin-bottom:36px}
.cl-trust{display:flex;flex-direction:column;gap:0}
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
.contact-right{background:rgba(255,255,255,0.65);border:1px solid rgba(226,232,240,0.9);border-radius:24px;padding:40px 36px;backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px)}
.form-top{margin-bottom:24px}
.form-top-title{font-size:18px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;margin-bottom:4px}
.form-top-sub{font-size:13px;color:#94a3b8}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px}
.cfield{display:flex;flex-direction:column;gap:6px}
.cfield label{font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#94a3b8}
.cfield input,.cfield textarea{width:100%;padding:10px 0;border:none;border-bottom:1.5px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:14px;color:#0f172a;outline:none;border-radius:0;transition:border-color 0.25s;-webkit-appearance:none}
.cfield input::placeholder,.cfield textarea::placeholder{color:#cbd5e1;font-size:13px}
.cfield input:focus,.cfield textarea:focus{border-bottom-color:#4f46e5}
.cfield textarea{resize:none}
.service-section{margin-bottom:16px}
.service-section label{font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#94a3b8;display:block;margin-bottom:10px}
.service-pills{display:flex;gap:7px;flex-wrap:wrap}
.service-pill{padding:7px 13px;border-radius:8px;border:1px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:12px;font-weight:500;color:#64748b;cursor:pointer;transition:all 0.2s;user-select:none;letter-spacing:0.2px}
.service-pill:hover{border-color:#c7d2fe;color:#4f46e5;background:#f5f3ff}
.service-pill.active{border-color:#4f46e5;background:#4f46e5;color:#fff}
.svc-type-tab{padding:6px 16px;border-radius:999px;font-size:12px;font-weight:600;cursor:pointer;border:1px solid rgba(226,232,240,0.9);background:transparent;color:#64748b;transition:all 0.2s}
.svc-type-tab.active{background:#0f172a;color:#fff;border-color:#0f172a}
.submit-btn{width:100%;padding:15px 24px;border-radius:12px;border:none;background:linear-gradient(90deg,#059669,#10b981);color:#fff;font-family:'Inter',sans-serif;font-size:13px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:opacity 0.2s,transform 0.2s;margin-top:6px}
.submit-btn:hover{opacity:0.9;transform:translateY(-1px)}
.submit-btn svg{width:13px;height:13px;stroke:#fff;fill:none;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round;transition:transform 0.2s}
.submit-btn:hover svg{transform:translateX(3px)}
.form-note{text-align:center;font-size:11.5px;color:#cbd5e1;margin-top:10px;letter-spacing:0.2px}
.form-msg{margin-top:12px;text-align:center;font-size:13px;font-weight:500;padding:10px 16px;border-radius:10px}
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

/* Top-left logo */
.site-logo{position:fixed;top:18px;left:32px;z-index:100;transition:opacity 0.4s,transform 0.4s}
.site-logo img{height:36px;width:auto;opacity:0.92;transition:height 0.4s}
.site-logo.large img{height:47px}
.site-logo.hidden{opacity:0;pointer-events:none;transform:translateY(-6px)}
/* Top nav */
.top-nav{position:fixed;top:0;left:0;right:0;height:72px;display:flex;align-items:center;padding:0 32px;z-index:99;transition:opacity 0.4s}
.top-nav.hidden{opacity:0;pointer-events:none}
.top-nav-links{display:flex;gap:32px;margin-left:auto}
.top-nav-links a{font-size:13px;font-weight:500;color:#475569;text-decoration:none;letter-spacing:0.2px;transition:color 0.2s}
.top-nav-links a:not([href]){cursor:default}
.top-nav-links a:not([href]):hover{color:#475569}
.top-nav-links a[href]{cursor:pointer;color:#475569}
.top-nav-links a[href]:hover{color:#4f46e5}
.top-nav-links a.active{color:#4f46e5;font-weight:600}

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

/* ─── MOBILE ─────────────────────────────────────────── */
@media(max-width:768px){

/* Hide desktop presentation, show mobile */
#presentation{display:none}
#mobile-deck{display:block !important}
.dots{display:none}
.why-bottom,.cap-why-cta{display:none}

/* Mobile deck base */
#mobile-deck{
  position:fixed;
  inset:0;
  overflow:hidden;
}

/* Sticky section label */
.m-sticky{
  position:fixed;
  top:0;left:0;right:0;
  height:48px;
  background:rgba(248,250,252,0.92);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  border-bottom:1px solid rgba(226,232,240,0.7);
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:50;
  font-size:11px;
  font-weight:700;
  letter-spacing:4px;
  text-transform:uppercase;
  color:#6366f1;
  transition:opacity 0.3s;
}
.m-sticky.hidden{opacity:0;pointer-events:none}

/* Mobile slides */
.m-slides{
  position:absolute;
  inset:0;
}

.m-slide{
  position:absolute;
  inset:0;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  padding:64px 16px 32px;
  opacity:0;
  transform:translateY(40px) scale(.98);
  transition:all .7s ease;
  pointer-events:none;
  overflow:hidden;
}

.m-slide.active{
  opacity:1;
  transform:translateY(0) scale(1);
  pointer-events:auto;
}

/* Mobile hero */
.m-hero{text-align:center}
.m-logo{width:180px;margin-bottom:24px;animation:float 5s ease-in-out infinite;filter:drop-shadow(0 10px 24px rgba(99,102,241,0.12))}
.m-h1{font-size:30px;font-weight:700;letter-spacing:-1px;line-height:1.15;color:#0f172a;margin-bottom:14px}
.m-lead{font-size:15px;color:#475569;line-height:1.7;margin-bottom:20px}
.m-pills{display:flex;flex-wrap:wrap;justify-content:center;gap:7px;margin-bottom:24px}
.m-pill{padding:7px 13px;border-radius:999px;background:rgba(255,255,255,0.85);border:1px solid rgba(99,102,241,0.15);color:#4f46e5;font-size:12px;font-weight:600}
.m-explore{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#6366f1;opacity:0.7;animation:bounce 2s ease-in-out infinite;cursor:pointer}

/* Mobile cards container — 2 visible + peek */
.m-cards{
  width:100%;
  display:flex;
  flex-direction:column;
  gap:12px;
}

/* Individual mobile card */
.m-card{
  background:rgba(255,255,255,0.65);
  border-radius:16px;
  padding:18px 16px 14px;
  backdrop-filter:blur(16px);
  -webkit-backdrop-filter:blur(16px);
  position:relative;
  overflow:hidden;
}
.m-card::before{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.m-card:active::before{left:130%}

.m-card.teal{border:1px solid rgba(20,184,166,0.25)}
.m-card.violet{border:1px solid rgba(124,58,237,0.2)}
.m-card.amber{border:1px solid rgba(245,158,11,0.22)}
.m-card.indigo{border:1px solid rgba(79,70,229,0.22)}
.m-card.sky{border:1px solid rgba(14,165,233,0.2)}
.m-card.emerald{border:1px solid rgba(16,185,129,0.2)}
.m-card.rose{border:1px solid rgba(244,63,94,0.2)}

.m-card-top{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:12px}
.m-icon{width:38px;height:38px;border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.m-icon svg{width:18px;height:18px;fill:none;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.m-icon.teal{background:linear-gradient(135deg,#f0fdfa,#ccfbf1);border:1px solid rgba(20,184,166,0.2)}
.m-icon.teal svg{stroke:#0d9488}
.m-icon.violet{background:linear-gradient(135deg,#f5f3ff,#ede9fe);border:1px solid rgba(124,58,237,0.18)}
.m-icon.violet svg{stroke:#7c3aed}
.m-icon.amber{background:linear-gradient(135deg,#fffbeb,#fef3c7);border:1px solid rgba(245,158,11,0.2)}
.m-icon.amber svg{stroke:#d97706}
.m-icon.indigo{background:linear-gradient(135deg,#eef2ff,#e0e7ff);border:1px solid rgba(79,70,229,0.18)}
.m-icon.indigo svg{stroke:#4f46e5}
.m-icon.sky{background:linear-gradient(135deg,#f0f9ff,#e0f2fe);border:1px solid rgba(14,165,233,0.18)}
.m-icon.sky svg{stroke:#0ea5e9}
.m-icon.emerald{background:linear-gradient(135deg,#ecfdf5,#d1fae5);border:1px solid rgba(16,185,129,0.18)}
.m-icon.emerald svg{stroke:#10b981}
.m-icon.rose{background:linear-gradient(135deg,#fff1f2,#ffe4e6);border:1px solid rgba(244,63,94,0.18)}
.m-icon.rose svg{stroke:#f43f5e}

.m-num{font-size:10px;font-weight:700;letter-spacing:2px;color:#94a3b8}
.m-card-title{font-size:15px;font-weight:700;color:#0f172a;letter-spacing:-0.3px;margin-bottom:4px}
.m-card-outcome{font-size:11px;font-weight:600;margin-bottom:8px}
.teal .m-card-outcome,.m-card.teal .m-card-outcome{color:#0d9488}
.violet .m-card-outcome,.m-card.violet .m-card-outcome{color:#7c3aed}
.amber .m-card-outcome,.m-card.amber .m-card-outcome{color:#d97706}
.indigo .m-card-outcome,.m-card.indigo .m-card-outcome{color:#4f46e5}
.sky .m-card-outcome,.m-card.sky .m-card-outcome{color:#0ea5e9}
.emerald .m-card-outcome,.m-card.emerald .m-card-outcome{color:#10b981}
.rose .m-card-outcome,.m-card.rose .m-card-outcome{color:#f43f5e}
.m-card-desc{font-size:12px;color:#64748b;line-height:1.6;margin-bottom:10px}
.m-card-footer{display:flex;align-items:center;justify-content:space-between;padding-top:10px;border-top:1px solid rgba(226,232,240,0.8)}
.m-tags{display:flex;flex-wrap:wrap;gap:5px}
.m-tag{font-size:10px;font-weight:600;border-radius:999px;padding:3px 8px}
.m-card.teal .m-tag{color:#0d9488;background:#f0fdfa}
.m-card.violet .m-tag{color:#7c3aed;background:#f5f3ff}
.m-card.amber .m-tag{color:#d97706;background:#fffbeb}
.m-card.indigo .m-tag{color:#4f46e5;background:#eef2ff}
.m-card.sky .m-tag{color:#0ea5e9;background:#f0f9ff}
.m-card.emerald .m-tag{color:#10b981;background:#ecfdf5}
.m-card.rose .m-tag{color:#f43f5e;background:#fff1f2}

/* Peek indicator */
.m-peek{
  width:100%;
  text-align:center;
  font-size:10px;
  font-weight:600;
  letter-spacing:2px;
  text-transform:uppercase;
  color:#cbd5e1;
  margin-top:4px;
}

/* Mobile dots */
.m-dots{
  position:fixed;
  bottom:24px;
  left:50%;
  transform:translateX(-50%);
  display:flex;
  gap:8px;
  z-index:100;
}
.m-dot{
  width:6px;height:6px;
  border-radius:50%;
  background:#cbd5e1;
  transition:background 0.3s,transform 0.3s;
}
.m-dot.active{
  background:#4f46e5;
  transform:scale(1.4);
}

/* Mobile contact form */
.m-contact{width:100%;max-width:400px;text-align:left}
.m-contact-label{font-size:11px;font-weight:700;letter-spacing:4px;text-transform:uppercase;color:#6366f1;margin-bottom:12px}
.m-contact-title{font-size:28px;font-weight:700;letter-spacing:-1px;line-height:1.1;color:#0f172a;margin-bottom:6px}
.m-contact-title em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.m-contact-sub{font-size:13px;color:#94a3b8;margin-bottom:20px}
.m-form-panel{background:rgba(255,255,255,0.7);border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:20px 18px;backdrop-filter:blur(16px)}
.m-field{display:flex;flex-direction:column;gap:5px;margin-bottom:14px}
.m-field label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#94a3b8}
.m-field input,.m-field textarea{width:100%;padding:10px 0;border:none;border-bottom:1.5px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:15px;color:#0f172a;outline:none;-webkit-appearance:none;transition:border-color 0.2s}
.m-field input:focus,.m-field textarea:focus{border-bottom-color:#4f46e5}
.m-field input::placeholder,.m-field textarea::placeholder{color:#cbd5e1;font-size:14px}
.m-field textarea{resize:none}
.m-svc-label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#94a3b8;margin-bottom:8px}
.m-svc-pills{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:14px}
.m-svc-pill{padding:7px 12px;border-radius:8px;border:1px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:12px;font-weight:500;color:#64748b;cursor:pointer;transition:all 0.2s}
.m-svc-pill:active,.m-svc-pill.active{border-color:#4f46e5;background:#4f46e5;color:#fff}
.m-submit{width:100%;padding:15px;border-radius:12px;border:none;background:linear-gradient(90deg,#059669,#10b981);color:#fff;font-family:'Inter',sans-serif;font-size:13px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;cursor:pointer;margin-top:4px}
.m-form-note{text-align:center;font-size:11px;color:#cbd5e1;margin-top:8px}

}

/* Hide mobile deck on desktop (outside media query) */
#mobile-deck{display:none}

</style>
</head>
<body>

<!-- Top nav bar -->
<div class="top-nav hidden" id="top-nav">
  <div class="site-logo" id="site-logo">
    <img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne - AI-First Products & Intelligent Data Platforms">
  </div>
  <div class="top-nav-links">
    <a>Digital</a>
    <a>AI</a>
    <a>Data</a>
    <a>Case Studies</a>
    <a href="/contact">Contact</a>
  </div>
</div>

<!-- Hero logo (screen 1 only) -->
<div class="site-logo hidden" id="hero-logo">
  <img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne - AI-First Products & Intelligent Data Platforms">
</div>

<!-- Background illustration layer -->
<svg style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0" viewBox="0 0 1400 900" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
  <!-- BUILD: Browser + Phone (top left) -->
  <rect x="30" y="355.0" width="280" height="190" rx="14" fill="none" stroke="rgba(20,184,166,0.068)" stroke-width="1.5"/>
  <rect x="30" y="355.0" width="280" height="32" rx="14" fill="rgba(20,184,166,0.02)"/>
  <rect x="30" y="373.0" width="280" height="14" fill="rgba(20,184,166,0.02)"/>
  <circle cx="50" cy="371.0" r="5" fill="rgba(20,184,166,0.061)"/>
  <circle cx="66" cy="371.0" r="5" fill="rgba(20,184,166,0.048)"/>
  <circle cx="82" cy="371.0" r="5" fill="rgba(20,184,166,0.061)"/>
  <rect x="100" y="364.0" width="130" height="14" rx="7" fill="rgba(255,255,255,0.169)" stroke="rgba(20,184,166,0.05)" stroke-width="1"/>
  <rect x="48" y="401.0" width="100" height="10" rx="5" fill="rgba(20,184,166,0.061)"/>
  <rect x="48" y="419.0" width="220" height="6" rx="3" fill="rgba(15,23,42,0.027)"/>
  <rect x="48" y="431.0" width="190" height="6" rx="3" fill="rgba(15,23,42,0.02)"/>
  <rect x="48" y="443.0" width="160" height="6" rx="3" fill="rgba(15,23,42,0.018)"/>
  <rect x="48" y="463.0" width="68" height="48" rx="8" fill="rgba(20,184,166,0.04)" stroke="rgba(20,184,166,0.068)" stroke-width="1"/>
  <rect x="124" y="463.0" width="68" height="48" rx="8" fill="rgba(99,102,241,0.027)" stroke="rgba(99,102,241,0.05)" stroke-width="1"/>
  <rect x="200" y="463.0" width="68" height="48" rx="8" fill="rgba(245,158,11,0.027)" stroke="rgba(245,158,11,0.05)" stroke-width="1"/>
  <rect x="270" y="435.0" width="90" height="160" rx="16" fill="none" stroke="rgba(20,184,166,0.074)" stroke-width="1.5"/>
  <rect x="278" y="451.0" width="74" height="128" rx="8" fill="rgba(240,253,250,0.101)"/>
  <rect x="295" y="442.0" width="30" height="7" rx="3.5" fill="rgba(20,184,166,0.05)"/>
  <rect x="284" y="459.0" width="62" height="8" rx="4" fill="rgba(20,184,166,0.068)"/>
  <rect x="284" y="473.0" width="62" height="5" rx="2.5" fill="rgba(15,23,42,0.027)"/>
  <rect x="284" y="483.0" width="48" height="5" rx="2.5" fill="rgba(15,23,42,0.02)"/>
  <rect x="284" y="497.0" width="28" height="18" rx="6" fill="rgba(20,184,166,0.068)"/>
  <rect x="318" y="497.0" width="28" height="18" rx="6" fill="rgba(99,102,241,0.04)"/>
  <circle cx="295" cy="567.0" r="4" fill="rgba(20,184,166,0.085)"/>
  <circle cx="310" cy="567.0" r="4" fill="rgba(15,23,42,0.027)"/>
  <circle cx="325" cy="567.0" r="4" fill="rgba(15,23,42,0.027)"/>

  <!-- AI: LLM Flow (top right) -->
  <rect x="980" y="60" width="80" height="40" rx="12" fill="none" stroke="rgba(124,58,237,0.074)" stroke-width="1.5"/>
  <rect x="984" y="64" width="72" height="32" rx="10" fill="rgba(245,243,255,0.101)"/>
  <rect x="992" y="72" width="40" height="5" rx="2.5" fill="rgba(124,58,237,0.061)"/>
  <rect x="992" y="81" width="28" height="4" rx="2" fill="rgba(124,58,237,0.04)"/>
  <line x1="1060" y1="80" x2="1100" y2="80" stroke="rgba(124,58,237,0.074)" stroke-width="1.5" stroke-dasharray="4,3"/>
  <polygon points="1100,75 1110,80 1100,85" fill="rgba(124,58,237,0.074)"/>
  <rect x="1110" y="45" width="100" height="70" rx="16" fill="rgba(124,58,237,0.034)" stroke="rgba(124,58,237,0.095)" stroke-width="1.5"/>
  <circle cx="1160" cy="72" r="14" fill="rgba(124,58,237,0.04)" stroke="rgba(124,58,237,0.068)" stroke-width="1"/>
  <circle cx="1160" cy="72" r="6" fill="rgba(124,58,237,0.061)"/>
  <rect x="1120" y="92" width="60" height="5" rx="2.5" fill="rgba(124,58,237,0.05)"/>
  <rect x="1128" y="101" width="44" height="4" rx="2" fill="rgba(124,58,237,0.034)"/>
  <line x1="1210" y1="80" x2="1250" y2="80" stroke="rgba(124,58,237,0.074)" stroke-width="1.5" stroke-dasharray="4,3"/>
  <polygon points="1250,75 1260,80 1250,85" fill="rgba(124,58,237,0.074)"/>
  <rect x="1260" y="60" width="80" height="40" rx="12" fill="none" stroke="rgba(124,58,237,0.074)" stroke-width="1.5"/>
  <rect x="1264" y="64" width="72" height="32" rx="10" fill="rgba(245,243,255,0.101)"/>
  <rect x="1272" y="72" width="40" height="5" rx="2.5" fill="rgba(124,58,237,0.061)"/>
  <rect x="1272" y="81" width="28" height="4" rx="2" fill="rgba(124,58,237,0.04)"/>
  <line x1="1160" y1="115" x2="1120" y2="155" stroke="rgba(124,58,237,0.05)" stroke-width="1" stroke-dasharray="3,3"/>
  <line x1="1160" y1="115" x2="1200" y2="155" stroke="rgba(124,58,237,0.05)" stroke-width="1" stroke-dasharray="3,3"/>
  <rect x="1085" y="155" width="70" height="28" rx="8" fill="rgba(240,253,250,0.135)" stroke="rgba(20,184,166,0.068)" stroke-width="1"/>
  <rect x="1165" y="155" width="70" height="28" rx="8" fill="rgba(255,251,235,0.135)" stroke="rgba(245,158,11,0.068)" stroke-width="1"/>
  <rect x="1092" y="164" width="40" height="4" rx="2" fill="rgba(20,184,166,0.068)"/>
  <rect x="1172" y="164" width="40" height="4" rx="2" fill="rgba(245,158,11,0.068)"/>
  <circle cx="1050" cy="45" r="5" fill="rgba(124,58,237,0.048)"/>
  <circle cx="1290" cy="38" r="4" fill="rgba(124,58,237,0.04)"/>
  <circle cx="1350" cy="110" r="6" fill="rgba(124,58,237,0.034)"/>

  <!-- DATA: Dashboard (bottom right) -->
  <rect x="420.0" y="680" width="380" height="200" rx="-544.0" fill="none" stroke="rgba(245,158,11,0.068)" stroke-width="1.5"/>
  <rect x="420.0" y="680" width="380" height="30" rx="-544.0" fill="rgba(245,158,11,0.027)"/>
  <rect x="420.0" y="696" width="380" height="14" fill="rgba(245,158,11,0.027)"/>
  <rect x="434.0" y="689" width="80" height="7" rx="-556.5" fill="rgba(217,119,6,0.074)"/>
  <rect x="434.0" y="722" width="80" height="44" rx="-552.0" fill="rgba(255,255,255,0.135)" stroke="rgba(245,158,11,0.061)" stroke-width="1"/>
  <rect x="524.0" y="722" width="80" height="44" rx="-552.0" fill="rgba(255,255,255,0.135)" stroke="rgba(245,158,11,0.061)" stroke-width="1"/>
  <rect x="614.0" y="722" width="80" height="44" rx="-552.0" fill="rgba(255,255,255,0.135)" stroke="rgba(245,158,11,0.061)" stroke-width="1"/>
  <rect x="440.0" y="729" width="40" height="5" rx="-557.5" fill="rgba(15,23,42,0.034)"/>
  <rect x="440.0" y="739" width="56" height="10" rx="-556.0" fill="rgba(217,119,6,0.074)"/>
  <rect x="530.0" y="729" width="40" height="5" rx="-557.5" fill="rgba(15,23,42,0.034)"/>
  <rect x="530.0" y="739" width="56" height="10" rx="-556.0" fill="rgba(20,184,166,0.074)"/>
  <rect x="620.0" y="729" width="40" height="5" rx="-557.5" fill="rgba(15,23,42,0.034)"/>
  <rect x="620.0" y="739" width="56" height="10" rx="-556.0" fill="rgba(99,102,241,0.074)"/>
  <rect x="434.0" y="778" width="200" height="88" rx="-552.0" fill="rgba(255,255,255,0.117)" stroke="rgba(245,158,11,0.048)" stroke-width="1"/>
  <rect x="448.0" y="830" width="16" height="24" rx="-556.0" fill="rgba(245,158,11,0.117)"/>
  <rect x="470.0" y="816" width="16" height="38" rx="-556.0" fill="rgba(245,158,11,0.152)"/>
  <rect x="492.0" y="822" width="16" height="32" rx="-556.0" fill="rgba(245,158,11,0.107)"/>
  <rect x="514.0" y="808" width="16" height="46" rx="-556.0" fill="rgba(245,158,11,0.169)"/>
  <rect x="536.0" y="802" width="16" height="52" rx="-556.0" fill="rgba(217,119,6,0.169)"/>
  <rect x="558.0" y="812" width="16" height="42" rx="-556.0" fill="rgba(245,158,11,0.135)"/>
  <rect x="580.0" y="820" width="16" height="34" rx="-556.0" fill="rgba(245,158,11,0.117)"/>
  <rect x="602.0" y="810" width="16" height="44" rx="-556.0" fill="rgba(245,158,11,0.152)"/>
  <rect x="644.0" y="778" width="144" height="88" rx="-552.0" fill="rgba(255,255,255,0.117)" stroke="rgba(245,158,11,0.048)" stroke-width="1"/>
  <polyline points="1212,850 1228,836 1244,842 1260,826 1276,818 1292,824 1308,812 1324,820 1340,808" stroke="rgba(217,119,6,0.152)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
  <circle cx="780.0" cy="808" r="4" fill="rgba(217,119,6,0.169)"/>

  <!-- Connecting lines -->
  <path d="M320,230 Q500,300 700,300" fill="none" stroke="rgba(99,102,241,0.024)" stroke-width="1" stroke-dasharray="6,6"/>
  <path d="M1110,200 Q950,350 900,450" fill="none" stroke="rgba(124,58,237,0.02)" stroke-width="1" stroke-dasharray="6,6"/>
  <path d="M700,600 Q850,650 980,680" fill="none" stroke="rgba(245,158,11,0.024)" stroke-width="1" stroke-dasharray="6,6"/>

  <!-- Scattered dots -->
  <circle cx="420" cy="50" r="4" fill="rgba(99,102,241,0.048)"/>
  <circle cx="550" cy="30" r="3" fill="rgba(124,58,237,0.04)"/>
  <circle cx="680" cy="55" r="5" fill="rgba(99,102,241,0.034)"/>
  <circle cx="800" cy="35" r="3" fill="rgba(124,58,237,0.04)"/>
  <circle cx="400" cy="820" r="4" fill="rgba(245,158,11,0.04)"/>
  <circle cx="500" cy="850" r="3" fill="rgba(217,119,6,0.034)"/>
  <circle cx="600" cy="830" r="5" fill="rgba(245,158,11,0.034)"/>
</svg>

<!-- SEO content block — visible to crawlers, hidden from users -->
<div style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;left:-9999px" aria-hidden="true">

  <h1>iDataOne — Engineering AI-First Products and Intelligent Data Platforms</h1>
  <p>We help businesses build digital products powered by unified data, automation, and AI-driven insights. Custom Software. AI Solutions. Data Intelligence. Digital Transformation.</p>

  <h2>Our Capabilities</h2>
  <h3>Custom Software Development</h3>
  <p>Ship faster. Scale without limits. Web, mobile, and enterprise applications built precisely for your workflows — not off-the-shelf compromises. Web Apps, Mobile, Enterprise, API Integration.</p>
  <h3>AI Solutions</h3>
  <p>Automate decisions. Eliminate bottlenecks. From LLM integrations to intelligent automation — we build AI that works in production, not just in demos. LLM Integration, AI Agents, Automation, ML Pipelines.</p>
  <h3>Data Intelligence</h3>
  <p>One truth. Instant clarity. Unify fragmented data sources into a single trusted layer — then turn it into insights that drive real action. Data Pipelines, Dashboards, BI Platforms, Real-time Analytics.</p>

  <h2>Why iDataOne — Built for the AI Era</h2>
  <h3>AI-First Architecture</h3>
  <p>Intelligence built into the foundation, not bolted on after.</p>
  <h3>Unified Data Layer</h3>
  <p>One source of truth across every system and team.</p>
  <h3>Enterprise Grade</h3>
  <p>Security, scale, and reliability your business can depend on.</p>
  <h3>Cloud Native</h3>
  <p>Built for modern infrastructure — flexible, resilient, future-proof.</p>

  <h2>Products from iDataOne</h2>
  <h3>MealMate</h3>
  <p>AI-powered meal planning for families — personalised, smart, and effortless. Coming Soon.</p>
  <h3>aiChat</h3>
  <p>AI agents for websites and business operations — always on, always intelligent. Coming Soon.</p>
  <h3>DatInsights</h3>
  <p>Unified business intelligence — one view of all your data, all the time. Coming Soon.</p>

  <h2>Contact iDataOne — Book a Discovery Call</h2>
  <p>Let's build something intelligent. Tell us about your project and we'll get back to you within 24 hours. Free 30-minute discovery call. No commitment, just a conversation. Email: info@idataone.com. Response within 24 hours. Your data stays private — we never share your information.</p>
  <p>Services: Custom Software Development, AI Solutions, Data Intelligence, Other.</p>

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
<h2>Build. <span class="highlight">Transform.</span> Scale.</h2>

<div class="cap-carousel">
  <div class="cap-tabs">
    <div class="cap-tab t-teal" onclick="capTab(0,this)">01 Build</div>
    <div class="cap-tab" onclick="capTab(1,this)">02 AI</div>
    <div class="cap-tab" onclick="capTab(2,this)">03 Data</div>
  </div>
  <div class="cap-slides">

    <div class="cap-slide active">
      <div class="cap-card teal">
        <div class="cap-left">
          <div class="cap-card-title">Build Digital Products</div>
          <div class="cap-card-outcome">Ship faster. Scale without limits.</div>
          <div class="cap-card-desc">From idea to production, we build scalable software products tailored precisely to your workflows and business needs.</div>
          <ul class="cap-checklist">
            <li>Web Apps</li><li>Mobile Apps</li>
            <li>SaaS Platforms</li><li>Enterprise Apps</li>
          </ul>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip active-teal"></div><div class="cap-pip"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <span class="cap-nav-count">01 / 03</span>
              <button class="cap-nav-btn" onclick="capNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="10" width="200" height="140" rx="12" fill="rgba(240,253,250,0.9)" stroke="rgba(20,184,166,0.25)" stroke-width="1.5"/>
            <rect x="10" y="10" width="200" height="28" rx="12" fill="rgba(20,184,166,0.12)"/>
            <rect x="10" y="28" width="200" height="10" fill="rgba(20,184,166,0.12)"/>
            <circle cx="26" cy="24" r="4" fill="rgba(244,63,94,0.5)"/>
            <circle cx="40" cy="24" r="4" fill="rgba(245,158,11,0.5)"/>
            <circle cx="54" cy="24" r="4" fill="rgba(20,184,166,0.5)"/>
            <rect x="70" y="17" width="100" height="14" rx="7" fill="rgba(255,255,255,0.7)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
            <rect x="24" y="50" width="80" height="8" rx="4" fill="rgba(20,184,166,0.3)"/>
            <rect x="24" y="66" width="160" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="24" y="76" width="140" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
            <rect x="24" y="86" width="120" height="5" rx="2.5" fill="rgba(15,23,42,0.06)"/>
            <rect x="24" y="100" width="50" height="36" rx="8" fill="rgba(20,184,166,0.15)" stroke="rgba(20,184,166,0.3)" stroke-width="1"/>
            <rect x="82" y="100" width="50" height="36" rx="8" fill="rgba(99,102,241,0.1)" stroke="rgba(99,102,241,0.2)" stroke-width="1"/>
            <rect x="140" y="100" width="50" height="36" rx="8" fill="rgba(245,158,11,0.1)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
            <rect x="160" y="80" width="76" height="140" rx="14" fill="rgba(255,255,255,0.9)" stroke="rgba(20,184,166,0.3)" stroke-width="1.5"/>
            <rect x="166" y="95" width="64" height="110" rx="6" fill="rgba(240,253,250,0.8)"/>
            <rect x="185" y="85" width="26" height="6" rx="3" fill="rgba(20,184,166,0.2)"/>
            <rect x="172" y="102" width="52" height="7" rx="3" fill="rgba(20,184,166,0.35)"/>
            <rect x="172" y="114" width="52" height="4" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="172" y="122" width="40" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="172" y="134" width="24" height="16" rx="6" fill="rgba(20,184,166,0.3)"/>
            <rect x="200" y="134" width="24" height="16" rx="6" fill="rgba(99,102,241,0.2)"/>
            <rect x="172" y="158" width="52" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="172" y="166" width="44" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
            <circle cx="186" cy="194" r="3" fill="rgba(20,184,166,0.5)"/>
            <circle cx="198" cy="194" r="3" fill="rgba(15,23,42,0.1)"/>
            <circle cx="210" cy="194" r="3" fill="rgba(15,23,42,0.1)"/>
            <rect x="0" y="160" width="100" height="28" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(20,184,166,0.3)" stroke-width="1"/>
            <circle cx="14" cy="174" r="5" fill="rgba(20,184,166,0.4)"/>
            <rect x="24" y="169" width="50" height="4" rx="2" fill="rgba(15,23,42,0.15)"/>
            <rect x="24" y="177" width="36" height="3" rx="1.5" fill="rgba(20,184,166,0.3)"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="cap-slide">
      <div class="cap-card violet">
        <div class="cap-left">
          <div class="cap-card-title">Enable AI &amp; Automation</div>
          <div class="cap-card-outcome">Automate decisions. Eliminate bottlenecks.</div>
          <div class="cap-card-desc">From AI agents to intelligent workflows, we embed AI into products and operations that work in production, not just in demos.</div>
          <ul class="cap-checklist">
            <li>AI Agents</li><li>LLM Integration</li>
            <li>Automation</li><li>AI Features</li>
          </ul>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip active-violet"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="capPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">02 / 03</span>
              <button class="cap-nav-btn" onclick="capNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="100" width="56" height="32" rx="10" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.3)" stroke-width="1.5"/>
            <text x="38" y="120" text-anchor="middle" font-size="10" fill="#7c3aed" font-family="Inter" font-weight="600">Input</text>
            <line x1="66" y1="116" x2="90" y2="116" stroke="rgba(124,58,237,0.4)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <polygon points="90,112 98,116 90,120" fill="rgba(124,58,237,0.4)"/>
            <rect x="98" y="90" width="64" height="52" rx="14" fill="rgba(124,58,237,0.12)" stroke="rgba(124,58,237,0.4)" stroke-width="1.5"/>
            <text x="130" y="112" text-anchor="middle" font-size="10" fill="#7c3aed" font-family="Inter" font-weight="700">LLM</text>
            <text x="130" y="126" text-anchor="middle" font-size="9" fill="#7c3aed" font-family="Inter">Model</text>
            <circle cx="130" cy="138" r="3" fill="rgba(124,58,237,0.3)"/>
            <line x1="162" y1="116" x2="186" y2="116" stroke="rgba(124,58,237,0.4)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <polygon points="186,112 194,116 186,120" fill="rgba(124,58,237,0.4)"/>
            <rect x="194" y="100" width="56" height="32" rx="10" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.3)" stroke-width="1.5"/>
            <text x="222" y="120" text-anchor="middle" font-size="10" fill="#7c3aed" font-family="Inter" font-weight="600">Output</text>
            <rect x="98" y="160" width="60" height="24" rx="8" fill="rgba(240,253,250,0.9)" stroke="rgba(20,184,166,0.3)" stroke-width="1"/>
            <text x="128" y="176" text-anchor="middle" font-size="9" fill="#0d9488" font-family="Inter" font-weight="600">Automate</text>
            <rect x="166" y="160" width="60" height="24" rx="8" fill="rgba(255,251,235,0.9)" stroke="rgba(245,158,11,0.3)" stroke-width="1"/>
            <text x="196" y="176" text-anchor="middle" font-size="9" fill="#d97706" font-family="Inter" font-weight="600">Analyse</text>
            <line x1="130" y1="142" x2="128" y2="160" stroke="rgba(124,58,237,0.3)" stroke-width="1" stroke-dasharray="2,2"/>
            <line x1="130" y1="142" x2="196" y2="160" stroke="rgba(124,58,237,0.3)" stroke-width="1" stroke-dasharray="2,2"/>
            <circle cx="80" cy="60" r="4" fill="rgba(124,58,237,0.2)"/>
            <circle cx="180" cy="50" r="6" fill="rgba(124,58,237,0.12)"/>
            <circle cx="220" cy="70" r="3" fill="rgba(124,58,237,0.15)"/>
            <circle cx="40" cy="70" r="5" fill="rgba(124,58,237,0.1)"/>
            <rect x="20" y="190" width="110" height="28" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <circle cx="34" cy="204" r="5" fill="rgba(124,58,237,0.3)"/>
            <rect x="44" y="199" width="60" height="4" rx="2" fill="rgba(15,23,42,0.12)"/>
            <rect x="44" y="207" width="42" height="3" rx="1.5" fill="rgba(124,58,237,0.25)"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="cap-slide">
      <div class="cap-card amber">
        <div class="cap-left">
          <div class="cap-card-title">Transform Data into Decisions</div>
          <div class="cap-card-outcome">One truth. Instant clarity.</div>
          <div class="cap-card-desc">Unify fragmented systems into a trusted data layer and generate actionable insights that drive real business decisions.</div>
          <ul class="cap-checklist">
            <li>Unified Data</li><li>Dashboards</li>
            <li>BI &amp; Analytics</li><li>Predictions</li>
          </ul>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip"></div><div class="cap-pip active-amber"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="capPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">03 / 03</span>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="20" width="220" height="160" rx="14" fill="rgba(255,251,235,0.7)" stroke="rgba(245,158,11,0.25)" stroke-width="1.5"/>
            <rect x="10" y="20" width="220" height="26" rx="14" fill="rgba(245,158,11,0.12)"/>
            <rect x="10" y="34" width="220" height="12" fill="rgba(245,158,11,0.12)"/>
            <rect x="20" y="27" width="60" height="6" rx="3" fill="rgba(217,119,6,0.4)"/>
            <rect x="20" y="56" width="58" height="34" rx="8" fill="rgba(255,255,255,0.9)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
            <rect x="84" y="56" width="58" height="34" rx="8" fill="rgba(255,255,255,0.9)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
            <rect x="148" y="56" width="58" height="34" rx="8" fill="rgba(255,255,255,0.9)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
            <rect x="26" y="62" width="28" height="5" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="26" y="72" width="40" height="8" rx="3" fill="rgba(217,119,6,0.4)"/>
            <rect x="90" y="62" width="28" height="5" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="90" y="72" width="40" height="8" rx="3" fill="rgba(20,184,166,0.4)"/>
            <rect x="154" y="62" width="28" height="5" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="154" y="72" width="40" height="8" rx="3" fill="rgba(99,102,241,0.4)"/>
            <rect x="20" y="100" width="140" height="68" rx="8" fill="rgba(255,255,255,0.8)" stroke="rgba(245,158,11,0.15)" stroke-width="1"/>
            <rect x="30" y="130" width="12" height="28" rx="3" fill="rgba(245,158,11,0.5)"/>
            <rect x="48" y="118" width="12" height="40" rx="3" fill="rgba(245,158,11,0.65)"/>
            <rect x="66" y="122" width="12" height="36" rx="3" fill="rgba(245,158,11,0.45)"/>
            <rect x="84" y="112" width="12" height="46" rx="3" fill="rgba(245,158,11,0.75)"/>
            <rect x="102" y="108" width="12" height="50" rx="3" fill="rgba(217,119,6,0.8)"/>
            <rect x="120" y="116" width="12" height="42" rx="3" fill="rgba(245,158,11,0.6)"/>
            <rect x="168" y="100" width="52" height="68" rx="8" fill="rgba(255,255,255,0.8)" stroke="rgba(245,158,11,0.15)" stroke-width="1"/>
            <polyline points="174,155 182,145 190,148 198,136 206,130 214,134" stroke="rgba(217,119,6,0.7)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="206" cy="130" r="3" fill="rgba(217,119,6,0.9)"/>
            <rect x="40" y="185" width="130" height="28" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(245,158,11,0.3)" stroke-width="1"/>
            <circle cx="54" cy="199" r="5" fill="rgba(245,158,11,0.4)"/>
            <rect x="64" y="194" width="70" height="4" rx="2" fill="rgba(15,23,42,0.12)"/>
            <rect x="64" y="202" width="50" height="3" rx="1.5" fill="rgba(217,119,6,0.3)"/>
          </svg>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="why-bottom" style="margin-top:20px">
  <div class="why-cta" onclick="showScreen(2)">
    In the Lab
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </div>
</div>
</div>
</section>

<!-- 2: Products -->
<section class="screen">
<div class="container">
<h2>Products from <span class="highlight">iDataOne</span></h2>

<div class="cap-carousel">
  <div class="cap-tabs">
    <div class="cap-tab t-rose" onclick="prodTab(0,this)">01 MealMate</div>
    <div class="cap-tab" onclick="prodTab(1,this)">02 aiChat</div>
    <div class="cap-tab" onclick="prodTab(2,this)">03 DatInsights</div>
  </div>
  <div class="cap-slides" id="prod-slides">

    <div class="cap-slide active">
      <div class="cap-card rose">
        <div class="cap-left">
          <div class="cap-card-title">MealMate</div>
          <div class="cap-card-outcome">Smart meal planning for every family.</div>
          <div class="cap-card-desc">AI-powered meal planning that answers the question every family asks daily. Personalised suggestions, smart grocery lists and effortless weekly planning.</div>
          <ul class="cap-checklist">
            <li>AI Meal Suggestions</li><li>Weekly Planning</li>
            <li>Smart Grocery Lists</li><li>Family Preferences</li>
          </ul>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip active-rose"></div><div class="cap-pip"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <span class="cap-nav-count">01 / 03</span>
              <button class="cap-nav-btn" onclick="prodNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="20" width="220" height="200" rx="20" fill="rgba(255,241,242,0.7)" stroke="rgba(244,63,94,0.2)" stroke-width="1.5"/>
            <rect x="20" y="20" width="220" height="36" rx="20" fill="rgba(244,63,94,0.1)"/>
            <rect x="20" y="42" width="220" height="14" fill="rgba(244,63,94,0.1)"/>
            <circle cx="90" cy="37" r="8" fill="rgba(244,63,94,0.25)"/>
            <circle cx="110" cy="37" r="8" fill="rgba(20,184,166,0.25)"/>
            <circle cx="130" cy="37" r="8" fill="rgba(245,158,11,0.25)"/>
            <rect x="36" y="72" width="188" height="7" rx="3.5" fill="rgba(244,63,94,0.2)"/>
            <rect x="36" y="90" width="86" height="56" rx="10" fill="rgba(255,255,255,0.8)" stroke="rgba(244,63,94,0.18)" stroke-width="1"/>
            <rect x="43" y="98" width="40" height="4" rx="2" fill="rgba(244,63,94,0.2)"/>
            <rect x="43" y="107" width="70" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="43" y="116" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
            <rect x="43" y="128" width="32" height="10" rx="5" fill="rgba(244,63,94,0.2)"/>
            <rect x="130" y="90" width="94" height="56" rx="10" fill="rgba(255,255,255,0.8)" stroke="rgba(20,184,166,0.18)" stroke-width="1"/>
            <rect x="137" y="98" width="40" height="4" rx="2" fill="rgba(20,184,166,0.2)"/>
            <rect x="137" y="107" width="74" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="137" y="116" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
            <rect x="137" y="128" width="32" height="10" rx="5" fill="rgba(20,184,166,0.2)"/>
            <rect x="36" y="158" width="188" height="48" rx="10" fill="rgba(255,255,255,0.7)" stroke="rgba(244,63,94,0.12)" stroke-width="1"/>
            <rect x="44" y="166" width="60" height="4" rx="2" fill="rgba(244,63,94,0.18)"/>
            <rect x="44" y="175" width="160" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="44" y="184" width="130" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
            <rect x="44" y="193" width="100" height="4" rx="2" fill="rgba(15,23,42,0.04)"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="cap-slide">
      <div class="cap-card sky">
        <div class="cap-left">
          <div class="cap-card-title">aiChat</div>
          <div class="cap-card-outcome">Always on. Always intelligent.</div>
          <div class="cap-card-desc">AI agents for websites and business operations. Handles customer queries, qualifies leads and automates support workflows around the clock.</div>
          <ul class="cap-checklist">
            <li>24/7 AI Agents</li><li>Lead Qualification</li>
            <li>Auto Responses</li><li>CRM Integration</li>
          </ul>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip active-sky"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="prodPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">02 / 03</span>
              <button class="cap-nav-btn" onclick="prodNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="30" width="180" height="48" rx="16" fill="rgba(240,249,255,0.9)" stroke="rgba(14,165,233,0.2)" stroke-width="1.5"/>
            <rect x="32" y="42" width="120" height="6" rx="3" fill="rgba(15,23,42,0.12)"/>
            <rect x="32" y="54" width="90" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
            <circle cx="186" cy="54" r="10" fill="rgba(14,165,233,0.15)" stroke="rgba(14,165,233,0.2)" stroke-width="1"/>
            <rect x="60" y="100" width="180" height="48" rx="16" fill="rgba(14,165,233,0.12)" stroke="rgba(14,165,233,0.25)" stroke-width="1.5"/>
            <rect x="72" y="112" width="130" height="6" rx="3" fill="rgba(14,165,233,0.3)"/>
            <rect x="72" y="124" width="100" height="5" rx="2.5" fill="rgba(14,165,233,0.2)"/>
            <circle cx="56" cy="124" r="10" fill="rgba(14,165,233,0.2)" stroke="rgba(14,165,233,0.25)" stroke-width="1"/>
            <rect x="20" y="166" width="180" height="48" rx="16" fill="rgba(240,249,255,0.9)" stroke="rgba(14,165,233,0.2)" stroke-width="1.5"/>
            <rect x="32" y="178" width="100" height="6" rx="3" fill="rgba(15,23,42,0.12)"/>
            <rect x="32" y="190" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
            <circle cx="186" cy="190" r="10" fill="rgba(14,165,233,0.15)" stroke="rgba(14,165,233,0.2)" stroke-width="1"/>
            <circle cx="120" cy="86" r="5" fill="rgba(14,165,233,0.2)"/>
            <circle cx="132" cy="86" r="5" fill="rgba(14,165,233,0.15)"/>
            <circle cx="144" cy="86" r="5" fill="rgba(14,165,233,0.1)"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="cap-slide">
      <div class="cap-card emerald">
        <div class="cap-left">
          <div class="cap-card-title">DatInsights</div>
          <div class="cap-card-outcome">One view of all your data.</div>
          <div class="cap-card-desc">Unified business intelligence platform that brings all your data sources together. Real-time dashboards, predictive analytics and actionable insights.</div>
          <ul class="cap-checklist">
            <li>Unified Data</li><li>Real-time Dashboards</li>
            <li>BI & Analytics</li><li>Predictions</li>
          </ul>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip"></div><div class="cap-pip active-emerald"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="prodPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">03 / 03</span>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="20" width="240" height="170" rx="14" fill="rgba(236,253,245,0.7)" stroke="rgba(16,185,129,0.2)" stroke-width="1.5"/>
            <rect x="10" y="20" width="240" height="28" rx="14" fill="rgba(16,185,129,0.1)"/>
            <rect x="10" y="36" width="240" height="12" fill="rgba(16,185,129,0.1)"/>
            <rect x="22" y="27" width="70" height="6" rx="3" fill="rgba(5,150,105,0.25)"/>
            <rect x="22" y="58" width="66" height="38" rx="8" fill="rgba(255,255,255,0.8)" stroke="rgba(16,185,129,0.18)" stroke-width="1"/>
            <rect x="30" y="65" width="36" height="4" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="30" y="74" width="50" height="10" rx="4" fill="rgba(5,150,105,0.25)"/>
            <rect x="96" y="58" width="66" height="38" rx="8" fill="rgba(255,255,255,0.8)" stroke="rgba(16,185,129,0.18)" stroke-width="1"/>
            <rect x="104" y="65" width="36" height="4" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="104" y="74" width="50" height="10" rx="4" fill="rgba(99,102,241,0.2)"/>
            <rect x="170" y="58" width="66" height="38" rx="8" fill="rgba(255,255,255,0.8)" stroke="rgba(16,185,129,0.18)" stroke-width="1"/>
            <rect x="178" y="65" width="36" height="4" rx="2" fill="rgba(15,23,42,0.1)"/>
            <rect x="178" y="74" width="50" height="10" rx="4" fill="rgba(245,158,11,0.25)"/>
            <rect x="22" y="108" width="148" height="70" rx="8" fill="rgba(255,255,255,0.7)" stroke="rgba(16,185,129,0.12)" stroke-width="1"/>
            <rect x="32" y="148" width="14" height="20" rx="3" fill="rgba(16,185,129,0.4)"/>
            <rect x="52" y="134" width="14" height="34" rx="3" fill="rgba(16,185,129,0.55)"/>
            <rect x="72" y="140" width="14" height="28" rx="3" fill="rgba(16,185,129,0.38)"/>
            <rect x="92" y="128" width="14" height="40" rx="3" fill="rgba(16,185,129,0.6)"/>
            <rect x="112" y="122" width="14" height="46" rx="3" fill="rgba(5,150,105,0.65)"/>
            <rect x="132" y="132" width="14" height="36" rx="3" fill="rgba(16,185,129,0.5)"/>
            <rect x="178" y="108" width="58" height="70" rx="8" fill="rgba(255,255,255,0.7)" stroke="rgba(16,185,129,0.12)" stroke-width="1"/>
            <polyline points="186,162 198,148 210,153 222,140 234,134" stroke="rgba(5,150,105,0.55)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="234" cy="134" r="4" fill="rgba(5,150,105,0.6)"/>
          </svg>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="why-bottom" style="margin-top:20px">
  <div class="why-cta" onclick="window.location.href='/contact'">
    Build Something Intelligent
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </div>
</div>
</div>
</section>


</div>

<!-- ─── MOBILE DECK ─────────────────────────────────── -->
<div id="mobile-deck">

  <!-- Sticky section label -->
  <div class="m-sticky hidden" id="m-sticky"></div>

  <div class="m-slides" id="m-slides">

    <!-- M0: Hero -->
    <div class="m-slide active" data-section="">
      <div class="m-hero">
        <img src="/assets/images/iDataOneLogoNoBG.png" class="m-logo" alt="iDataOne">
        <div class="m-h1">Engineering <span class="highlight">AI-First Products</span> and Intelligent Data Platforms</div>
        <p class="m-lead">We help businesses build digital products powered by unified data, automation, and AI-driven insights.</p>
        <div class="m-pills">
          <span class="m-pill">Custom Software</span>
          <span class="m-pill">AI Solutions</span>
          <span class="m-pill">Data Intelligence</span>
        </div>
        <div class="m-explore" onclick="mShowSlide(1)">EXPLORE ↓</div>
      </div>
    </div>

    <!-- M1: Capabilities cards 1+2 -->
    <div class="m-slide" data-section="What We Build">
      <div class="m-cards">
        <div class="m-card teal">
          <div class="m-card-top">
            <div class="m-icon teal"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/></svg></div>
            <span class="m-num">01</span>
          </div>
          <div class="m-card-title">Custom Software</div>
          <div class="m-card-outcome">Ship faster. Scale without limits.</div>
          <div class="m-card-desc">Web, mobile, and enterprise applications built precisely for your workflows.</div>
          <div class="m-card-footer">
            <div class="m-tags"><span class="m-tag">Web Apps</span><span class="m-tag">Mobile</span><span class="m-tag">Enterprise</span></div>
          </div>
        </div>
        <div class="m-card violet">
          <div class="m-card-top">
            <div class="m-icon violet"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/></svg></div>
            <span class="m-num">02</span>
          </div>
          <div class="m-card-title">AI Solutions</div>
          <div class="m-card-outcome">Automate decisions. Eliminate bottlenecks.</div>
          <div class="m-card-desc">From LLM integrations to intelligent automation — built for production.</div>
          <div class="m-card-footer">
            <div class="m-tags"><span class="m-tag">LLM Integration</span><span class="m-tag">AI Agents</span><span class="m-tag">Automation</span></div>
          </div>
        </div>
        <div class="m-peek">swipe for more ↓</div>
      </div>
    </div>

    <!-- M2: Capabilities card 3 -->
    <div class="m-slide" data-section="What We Build">
      <div class="m-cards">
        <div class="m-card amber">
          <div class="m-card-top">
            <div class="m-icon amber"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
            <span class="m-num">03</span>
          </div>
          <div class="m-card-title">Data Intelligence</div>
          <div class="m-card-outcome">One truth. Instant clarity.</div>
          <div class="m-card-desc">Unify fragmented data sources into a single trusted layer — actionable insights that drive real decisions.</div>
          <div class="m-card-footer">
            <div class="m-tags"><span class="m-tag">Data Pipelines</span><span class="m-tag">Dashboards</span><span class="m-tag">BI Platforms</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- M3: Why cards 1+2 -->
    <div class="m-slide" data-section="Why iDataOne">
      <div class="m-cards">
        <div class="m-card indigo">
          <div class="m-card-top">
            <div class="m-icon indigo"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3"/></svg></div>
            <span class="m-num">01</span>
          </div>
          <div class="m-card-title">AI-First Architecture</div>
          <div class="m-card-outcome">Built in, not bolted on.</div>
          <div class="m-card-desc">Intelligence built into the foundation, not added after the fact.</div>
        </div>
        <div class="m-card teal">
          <div class="m-card-top">
            <div class="m-icon teal"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
            <span class="m-num">02</span>
          </div>
          <div class="m-card-title">Unified Data Layer</div>
          <div class="m-card-outcome">One source of truth.</div>
          <div class="m-card-desc">One source of truth across every system and team.</div>
        </div>
        <div class="m-peek">swipe for more ↓</div>
      </div>
    </div>

    <!-- M4: Why cards 3+4 -->
    <div class="m-slide" data-section="Why iDataOne">
      <div class="m-cards">
        <div class="m-card amber">
          <div class="m-card-top">
            <div class="m-icon amber"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <span class="m-num">03</span>
          </div>
          <div class="m-card-title">Enterprise Grade</div>
          <div class="m-card-outcome">Security you can depend on.</div>
          <div class="m-card-desc">Security, scale, and reliability your business can depend on.</div>
        </div>
        <div class="m-card violet">
          <div class="m-card-top">
            <div class="m-icon violet"><svg viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
            <span class="m-num">04</span>
          </div>
          <div class="m-card-title">Cloud Native</div>
          <div class="m-card-outcome">Flexible. Resilient. Future-proof.</div>
          <div class="m-card-desc">Built for modern infrastructure — flexible, resilient, future-proof.</div>
        </div>
      </div>
    </div>

    <!-- M5: Products cards 1+2 -->
    <div class="m-slide" data-section="In the Lab">
      <div class="m-cards">
        <div class="m-card rose">
          <div class="m-card-top">
            <div class="m-icon rose"><svg viewBox="0 0 24 24"><path d="M3 6h18M3 12h18M3 18h18"/></svg></div>
            <span class="m-num">01</span>
          </div>
          <div class="m-card-title">MealMate</div>
          <div class="m-card-outcome">Smart meal planning for families.</div>
          <div class="m-card-desc">AI-powered meal planning — personalised, smart, and effortless.</div>
          <div class="m-card-footer">
            <div class="m-tags"><span class="m-tag">Coming Soon</span></div>
          </div>
        </div>
        <div class="m-card sky">
          <div class="m-card-top">
            <div class="m-icon sky"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
            <span class="m-num">02</span>
          </div>
          <div class="m-card-title">aiChat</div>
          <div class="m-card-outcome">Always on. Always intelligent.</div>
          <div class="m-card-desc">AI agents for websites and business operations — 24/7.</div>
          <div class="m-card-footer">
            <div class="m-tags"><span class="m-tag">Coming Soon</span></div>
          </div>
        </div>
        <div class="m-peek">swipe for more ↓</div>
      </div>
    </div>

    <!-- M6: Products card 3 -->
    <div class="m-slide" data-section="In the Lab">
      <div class="m-cards">
        <div class="m-card emerald">
          <div class="m-card-top">
            <div class="m-icon emerald"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
            <span class="m-num">03</span>
          </div>
          <div class="m-card-title">DatInsights</div>
          <div class="m-card-outcome">One view of all your data.</div>
          <div class="m-card-desc">Unified business intelligence — one view of all your data, all the time.</div>
          <div class="m-card-footer">
            <div class="m-tags"><span class="m-tag">Coming Soon</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- M7: Contact -->
    <div class="m-slide" data-section="">
      <div class="m-contact">
        <div class="m-contact-label">Get in Touch</div>
        <div class="m-contact-title">Let's Build Something <em>Intelligent</em></div>
        <div class="m-contact-sub">Takes less than 60 seconds</div>
        <div class="m-form-panel">

          <?php if (!empty($form_success)): ?>
          <div class="form-msg success" style="margin-bottom:12px">✓ Thanks! We'll be in touch within 24 hours.</div>
          <?php elseif (!empty($form_error)): ?>
          <div class="form-msg error" style="margin-bottom:12px">Something went wrong. Email info@idataone.com</div>
          <?php endif; ?>

          <form method="POST" action="#" id="m-contact-form">
          <input type="hidden" name="form_submit" value="1">
          <input type="hidden" name="service" id="m-service-val" value="">

          <div class="m-field">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="John Smith" required>
          </div>
          <div class="m-field">
            <label>Work Email</label>
            <input type="email" name="email" placeholder="john@acme.com" required>
          </div>
          <div class="m-field">
            <label>Company</label>
            <input type="text" name="company" placeholder="Acme Corp">
          </div>

          <div class="m-svc-label">Service</div>
          <div class="m-svc-pills">
            <div class="m-svc-pill" onclick="mSelectSvc(this,'Custom Software')">Custom Software</div>
            <div class="m-svc-pill" onclick="mSelectSvc(this,'AI Solutions')">AI Solutions</div>
            <div class="m-svc-pill" onclick="mSelectSvc(this,'Data Intelligence')">Data Intelligence</div>
            <div class="m-svc-pill" onclick="mSelectSvc(this,'Other')">Other</div>
          </div>

          <div class="m-field">
            <label>Project Details</label>
            <textarea name="message" rows="2" placeholder="Briefly describe your project..."></textarea>
          </div>

          <button type="submit" class="m-submit">Book Discovery Call →</button>
          <p class="m-form-note">No spam. No sales pressure. Just a conversation.</p>
          </form>
        </div>
      </div>
    </div>

  </div><!-- /m-slides -->

  <!-- Mobile dots -->
  <div class="m-dots" id="m-dots"></div>

</div><!-- /mobile-deck -->
<div class="dots">
<div class="dot active"></div>
<div class="dot"></div>
<div class="dot"></div>
</div>

<footer class="footer"></footer>

<script>
// Capability carousel
let capCurrent = 0;
const capSlideEls = document.querySelectorAll('.cap-slide');
const capTabEls = document.querySelectorAll('.cap-tab');
const capTabClasses = ['t-teal','t-violet','t-amber'];

function capTab(index, el) {
  capSlideEls.forEach(s => s.classList.remove('active'));
  capTabEls.forEach(t => t.className = 'cap-tab');
  capCurrent = index;
  capSlideEls[capCurrent].classList.add('active');
  const activeTab = el || capTabEls[index];
  activeTab.className = 'cap-tab ' + capTabClasses[index];
}
function capNext() { capTab((capCurrent + 1) % capSlideEls.length, null); }
function capPrev() { capTab((capCurrent - 1 + capSlideEls.length) % capSlideEls.length, null); }

// Product carousel
let prodCurrent = 0;
const prodSlideEls = document.querySelectorAll('#prod-slides .cap-slide');
const prodTabEls = document.querySelectorAll('#prod-slides').length > 0 ? 
  document.querySelectorAll('.cap-tabs')[1]?.querySelectorAll('.cap-tab') : [];
const prodTabClasses = ['t-rose','t-sky','t-emerald'];

function prodTab(index, el) {
  prodSlideEls.forEach(s => s.classList.remove('active'));
  if(prodTabEls.length) prodTabEls.forEach(t => t.className = 'cap-tab');
  prodCurrent = index;
  prodSlideEls[prodCurrent].classList.add('active');
  if(el) el.className = 'cap-tab ' + prodTabClasses[index];
  else if(prodTabEls[index]) prodTabEls[index].className = 'cap-tab ' + prodTabClasses[index];
}
function prodNext() { prodTab((prodCurrent + 1) % prodSlideEls.length, null); }
function prodPrev() { prodTab((prodCurrent - 1 + prodSlideEls.length) % prodSlideEls.length, null); }

// Service/Product type switcher
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

const topNav   = document.getElementById('top-nav');
const heroLogo = document.getElementById('hero-logo');

function updateLogo(index) {
  if (index === 0) {
    topNav.classList.add('hidden');
    heroLogo.classList.remove('hidden');
  } else {
    topNav.classList.remove('hidden');
    heroLogo.classList.add('hidden');
  }
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
  if (current === 1) {
    if (e.key === 'ArrowRight') { capNext(); return; }
    if (e.key === 'ArrowLeft')  { capPrev(); return; }
  }
  if (current === 2) {
    if (e.key === 'ArrowRight') { prodNext(); return; }
    if (e.key === 'ArrowLeft')  { prodPrev(); return; }
  }
  if (e.key === 'ArrowDown' || e.key === 'PageDown') showScreen(Math.min(current + 1, screens.length - 1));
  if (e.key === 'ArrowUp'   || e.key === 'PageUp')   showScreen(Math.max(current - 1, 0));
});

// ── Mobile deck ──────────────────────────────────────
const isMobile = () => window.innerWidth <= 768;

if (isMobile()) {
  const mSlides  = document.querySelectorAll('.m-slide');
  const mDotsWrap = document.getElementById('m-dots');
  const mSticky  = document.getElementById('m-sticky');
  let mCurrent   = 0;
  let mLocked    = false;

  // Build dots
  mSlides.forEach((_, i) => {
    const d = document.createElement('div');
    d.className = 'm-dot' + (i === 0 ? ' active' : '');
    d.onclick = () => mShowSlide(i);
    mDotsWrap.appendChild(d);
  });

  function mShowSlide(index) {
    if (index < 0 || index >= mSlides.length) return;
    mSlides[mCurrent].classList.remove('active');
    document.querySelectorAll('.m-dot')[mCurrent].classList.remove('active');
    mCurrent = index;
    mSlides[mCurrent].classList.add('active');
    document.querySelectorAll('.m-dot')[mCurrent].classList.add('active');

    // Update sticky label
    const section = mSlides[mCurrent].dataset.section;
    if (section) {
      mSticky.textContent = section;
      mSticky.classList.remove('hidden');
    } else {
      mSticky.classList.add('hidden');
    }
  }

  window.mShowSlide = mShowSlide;

  // Touch swipe
  let mStartY = 0;
  document.addEventListener('touchstart', e => mStartY = e.touches[0].clientY, { passive: true });
  document.addEventListener('touchend', e => {
    if (mLocked) return;
    const diff = mStartY - e.changedTouches[0].clientY;
    if (Math.abs(diff) < 40) return;
    mLocked = true;
    if (diff > 0) mShowSlide(Math.min(mCurrent + 1, mSlides.length - 1));
    else          mShowSlide(Math.max(mCurrent - 1, 0));
    setTimeout(() => mLocked = false, 700);
  });

  // Mobile service selector
  window.mSelectSvc = function(el, val) {
    document.querySelectorAll('.m-svc-pill').forEach(p => p.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('m-service-val').value = val;
  };
}
</script>

</body>
</html>
