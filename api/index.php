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
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $api_key,
        'Content-Type: application/json',
    ]);
    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_err = curl_error($ch);

    $form_success = ($status === 200);
    $form_error   = !$form_success;
    if ($form_error) {
        error_log("Resend API failed (homepage) - Status: {$status}, cURL Error: {$curl_err}, Response: {$response}");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iDataOne | Build. Transform. Scale. — AI-First Products, Automation & Data Intelligence</title>
<meta name="description" content="iDataOne builds AI-first digital products, integrates intelligent automation, and transforms fragmented data into actionable business intelligence. Build. Transform. Scale.">
<meta name="keywords" content="AI-first products, custom software development, AI automation, data intelligence, LLM integration, AI agents, business intelligence, digital transformation, web apps, mobile apps, SaaS platforms, Infra360 PMS, iSportOne, aiDesker">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/">
<meta property="og:title" content="iDataOne | Build. Transform. Scale. — AI-First Products & Data Intelligence">
<meta property="og:description" content="iDataOne builds AI-first digital products, integrates intelligent automation, and transforms fragmented data into actionable business intelligence. Build. Transform. Scale.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://idataone.com/">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="iDataOne | Build. Transform. Scale. — AI-First Products & Data Intelligence">
<meta name="twitter:description" content="Build scalable digital products, integrate AI automation, and turn fragmented data into business intelligence. iDataOne — Built for the AI era.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "iDataOne",
  "url": "https://idataone.com",
  "logo": "https://idataone.com/assets/images/iDataOneLogoNoBG.png",
  "description": "iDataOne builds AI-first digital products, integrates intelligent automation, and transforms fragmented data into actionable business intelligence.",
  "slogan": "Build. Transform. Scale.",
  "contactPoint": {
    "@type": "ContactPoint",
    "email": "info@idataone.com",
    "contactType": "customer service",
    "availableLanguage": "English"
  },
  "knowsAbout": [
    "Custom Software Development",
    "AI Integration",
    "LLM Integration",
    "AI Agents",
    "Data Intelligence",
    "Business Intelligence",
    "Web Application Development",
    "Mobile App Development",
    "SaaS Platforms",
    "Digital Transformation"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "iDataOne Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Build Digital Products",
          "description": "From idea to production, we build scalable software products tailored precisely to your business needs within your budget. Web apps, mobile apps, SaaS platforms and enterprise applications."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Enable AI & Automation",
          "description": "From AI agents to intelligent workflows, we integrate AI into products and operations to improve efficiency, enhance decision-making, and drive business growth."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Transform Data into Decisions",
          "description": "Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions."
        }
      }
    ]
  },
  "sameAs": []
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
@view-transition{navigation:auto}
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
.cap-card{background:rgba(255,255,255,0.72);border-radius:24px;padding:28px 32px 20px;position:relative;overflow:hidden;backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);display:grid;grid-template-columns:1fr 260px;gap:24px;align-items:start;transition:box-shadow 0.3s;width:100%;box-sizing:border-box}
/* Glossy sheen pseudo-element */
.cap-card::before{content:"";position:absolute;top:0;left:-75%;width:50%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.55),transparent);transform:skewX(-15deg);transition:left 0.55s ease;pointer-events:none}
.cap-card:hover::before{left:130%}
.cap-card.teal{border:1px solid rgba(20,184,166,0.25)}
.cap-card.rose{border:1px solid rgba(244,63,94,0.22)}
.cap-card.sky{border:1px solid rgba(14,165,233,0.2)}
.cap-card.emerald{border:1px solid rgba(16,185,129,0.22)}
.cap-card.indigo{border:1px solid rgba(99,102,241,0.22)}
.cap-card.rose:hover{box-shadow:0 28px 60px rgba(244,63,94,0.12)}
.cap-card.sky:hover{box-shadow:0 28px 60px rgba(14,165,233,0.12)}
.cap-card.emerald:hover{box-shadow:0 28px 60px rgba(16,185,129,0.12)}
.cap-card.indigo:hover{box-shadow:0 28px 60px rgba(99,102,241,0.12)}
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

.cap-slide{display:none}
.cap-slide.active{display:block;animation:capFadeIn 0.4s ease}
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
.cap-card-desc{font-size:14px;color:#475569;line-height:1.7;margin-bottom:14px}
.cap-checklist{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:6px 20px;margin-bottom:14px;padding:0}
.cap-checklist li{font-size:13px;color:#64748b;display:flex;align-items:center;gap:8px}
.cap-checklist li::before{content:"✓";font-weight:700;font-size:12px;flex-shrink:0}
.teal .cap-checklist li::before{color:#0d9488}
.violet .cap-checklist li::before{color:#7c3aed}
.amber .cap-checklist li::before{color:#d97706}
.rose .cap-checklist li::before{color:#f43f5e}
.sky .cap-checklist li::before{color:#0ea5e9}
.emerald .cap-checklist li::before{color:#10b981}
.cap-footer{display:flex;align-items:center;justify-content:space-between;padding-top:10px;border-top:1px solid rgba(226,232,240,0.8)}
.cap-pips{display:flex;gap:6px;align-items:center}
.cap-pip{height:3px;border-radius:999px;background:#e2e8f0;width:16px}
.cap-pip.active-teal{background:#0d9488;width:28px}
.cap-pip.active-violet{background:#7c3aed;width:28px}
.cap-pip.active-amber{background:#d97706;width:28px}
.cap-pip.active-rose{background:#f43f5e;width:28px}
.cap-pip.active-sky{background:#0ea5e9;width:28px}
.cap-pip.active-emerald{background:#10b981;width:28px}
.cap-nav{display:flex;align-items:center;gap:10px}
.cap-nav-btn{width:36px;height:36px;border-radius:50%;border:1.5px solid rgba(100,116,139,0.35);background:rgba(255,255,255,0.6);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.2s}
.cap-nav-btn:hover{background:#0f172a;border-color:#0f172a}
.cap-nav-btn:hover svg{stroke:#fff}
.cap-explore{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;text-decoration:none;margin-bottom:18px;transition:gap 0.2s}
.cap-explore:hover{gap:10px}
.cap-explore svg{width:14px;height:14px;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.cap-explore.teal{color:#0d9488}
.cap-explore.teal svg{stroke:#0d9488}
.cap-explore.violet{color:#7c3aed}
.cap-explore.violet svg{stroke:#7c3aed}
.cap-explore.amber{color:#d97706}
.cap-explore.amber svg{stroke:#d97706}
.cap-nav-btn svg{width:14px;height:14px;fill:none;stroke:#64748b;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;transition:stroke 0.2s}
.cap-nav-btn:hover{background:#0f172a;border-color:#0f172a}
.cap-nav-btn:hover svg{stroke:#fff}
.cap-nav-count{font-size:12px;font-weight:600;color:#94a3b8;letter-spacing:1px}
.cap-illus{display:flex;align-items:center;justify-content:center}
.cap-left{min-width:0}
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
.site-logo{position:fixed;top:22px;left:32px;z-index:100;transition:opacity 0.4s,transform 0.4s}
.site-logo img{height:40px;width:auto;opacity:0.92}
.site-logo.hidden{opacity:0;pointer-events:none;transform:translateY(-6px)}
/* Top nav */
.top-nav{position:fixed;top:0;left:0;right:0;height:68px;display:flex;align-items:center;padding:0 32px;gap:40px;z-index:99;transition:opacity 0.4s}
.top-nav .site-logo{position:static;transition:none;min-width:160px}
.top-nav.hidden{opacity:0;pointer-events:none}
.top-nav-links{display:flex;gap:28px;align-items:center}
.nav-progress{position:fixed;top:0;left:0;height:3px;width:0%;background:linear-gradient(90deg,#4f46e5,#7c3aed);z-index:300;transition:width 0.25s ease-out;box-shadow:0 0 8px rgba(99,102,241,0.6)}
.nav-progress.active{width:75%}
.top-nav-links a{font-size:13px;font-weight:500;color:#475569;text-decoration:none;letter-spacing:0.2px;transition:color 0.2s}
.top-nav-links a:not([href]){cursor:default}
.top-nav-links a:not([href]):hover{color:#475569}
.top-nav-links a[href]{cursor:pointer;color:#475569}
.top-nav-links a[href]:hover{color:#4f46e5}
.top-nav-links a[href]:active{transform:scale(0.95);opacity:0.7}
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

.dots{display:none}
.why-bottom,.cap-why-cta{display:none}

/* Mobile deck base */


/* Sticky section label */



/* Mobile slides */






/* Mobile hero */
.m-hero{text-align:center}
.m-logo{width:180px;margin-bottom:24px;filter:drop-shadow(0 10px 24px rgba(99,102,241,0.12))}
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


.m-card.teal 
.m-card.violet 
.m-card.amber 
.m-card.indigo 
.m-card.sky 
.m-card.emerald 
.m-card.rose 

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

.m-field{display:flex;flex-direction:column;gap:5px;margin-bottom:14px}
.m-field label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#94a3b8}
.m-field input,.m-field textarea{width:100%;padding:10px 0;border:none;border-bottom:1.5px solid #e2e8f0;background:transparent;font-family:'Inter',sans-serif;font-size:15px;color:#0f172a;outline:none;-webkit-appearance:none;transition:border-color 0.2s}
.m-field input:focus,.m-field textarea:focus{border-bottom-color:#4f46e5}
.m-field input::placeholder,.m-field textarea::placeholder{color:#cbd5e1;font-size:14px}
.m-field textarea{resize:none}
.m-svc-label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#94a3b8;margin-bottom:8px}






}

/* Hide mobile deck on desktop (outside media query) */



/* ── Mobile Responsive ── */
@media(max-width:768px){
  .hamburger{display:flex!important}
  /* Show presentation on mobile too */
  #presentation{display:block!important;height:auto;position:relative}
  .screen{position:relative;opacity:1!important;transform:none!important;pointer-events:auto!important;min-height:100vh;padding:80px 8px 60px}
  .container{padding:20px 16px!important}
  .hp-btm{display:none!important}
  html{scroll-snap-type:y mandatory}
  .screen{scroll-snap-align:start}  .dots{display:none}
  .site-logo{display:none}
  /* Top nav on mobile */
  .top-nav{height:56px;padding:0 20px;gap:16px}
  .top-nav .site-logo{position:static}
  .top-nav .site-logo img{height:32px}
  .top-nav-links{display:none}
  /* Hero screen */
  .logo{max-width:200px}
  h1{font-size:clamp(28px,8vw,48px);letter-spacing:-1.5px}
  .explore{bottom:24px;right:20px;font-size:10px}
  /* Capabilities & Products */
  h2{font-size:clamp(28px,7vw,44px);letter-spacing:-1.5px;text-align:center}
  .cap-carousel{max-width:100%}
  .cap-tabs{flex-wrap:wrap;justify-content:center}
  .cap-card{grid-template-columns:1fr!important;padding:24px 20px 20px}
  .cap-illus{display:none!important}
  .cap-card-title{font-size:20px}
  .cap-card-desc{font-size:13px}
  .cap-checklist{grid-template-columns:1fr}
  /* Contact screen */
  .contact-inner{grid-template-columns:1fr;gap:28px}
  .contact-right{padding:24px 18px}
  .cl-heading{font-size:32px;letter-spacing:-1px}
  .form-row-2{grid-template-columns:1fr;gap:12px}
  /* Screen CTAs */
  .screen-cta,.why-cta,.why-bottom{display:none}
  /* Scrolling — disable snap on mobile, allow natural scroll */
  body{overflow-y:auto!important}
}

/* ── Hamburger Menu ── */
.hamburger{position:fixed;top:16px;right:20px;z-index:200;width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,0.9);backdrop-filter:blur(12px);border:1px solid rgba(99,102,241,0.15);display:none;flex-direction:column;align-items:center;justify-content:center;gap:5px;cursor:pointer;box-shadow:0 2px 12px rgba(15,23,42,0.1);transition:all 0.2s}
.hamburger:hover{background:#fff;box-shadow:0 4px 20px rgba(15,23,42,0.15)}
.hamburger span{display:block;width:18px;height:2px;background:#475569;border-radius:2px;transition:all 0.3s}
.hamburger.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.hamburger.open span:nth-child(2){opacity:0}
.hamburger.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.mob-menu{position:fixed;top:0;right:-100%;width:280px;height:100vh;background:#fff;z-index:199;box-shadow:-4px 0 40px rgba(15,23,42,0.15);transition:right 0.35s cubic-bezier(0.4,0,0.2,1);padding:80px 32px 40px;display:flex;flex-direction:column;gap:8px}
.mob-menu.open{right:0}
.mob-menu a{font-size:16px;font-weight:500;color:#475569;text-decoration:none;padding:12px 0;border-bottom:1px solid rgba(226,232,240,0.6);display:block;transition:color 0.2s}
.mob-menu a:hover{color:#4f46e5}
.mob-menu a.active{color:#4f46e5;font-weight:600}
.mob-menu-overlay{position:fixed;inset:0;background:rgba(15,23,42,0.3);z-index:198;opacity:0;pointer-events:none;transition:opacity 0.3s;backdrop-filter:blur(2px)}
.mob-menu-overlay.open{opacity:1;pointer-events:auto}

.screen-hero::after{content:"";position:absolute;inset:0;background:url('/assets/images/home-hero-bg.png') right center / 50% auto no-repeat;z-index:0;pointer-events:none;opacity:0.9}
.screen-hero .container{z-index:2;position:relative}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<div class="nav-progress" id="navProgress"></div>

<!-- Hamburger Menu -->
<div class="hamburger" id="hamburger" onclick="toggleMenu()">
  <span></span><span></span><span></span>
</div>
<div class="mob-menu-overlay" id="mob-overlay" onclick="toggleMenu()"></div>
<div class="mob-menu" id="mob-menu">
  <a href="/digital">Digital</a>
  <a href="/ai">AI</a>
  <a href="/data">Data</a>
  <a href="/case-studies">Case Studies</a>
  <a href="/contact" class="active">Contact</a>
</div>

<!-- Top nav bar -->
<div class="top-nav hidden" id="top-nav">
  <div class="site-logo large" id="site-logo">
    <img src="/assets/images/iDataOneLogoNoBG.png" alt="iDataOne - AI-First Products & Intelligent Data Platforms">
  </div>
  <div class="top-nav-links" id="topNavLinks">
    <a href="/digital">Digital</a>
    <a href="/ai">AI</a>
    <a href="/data">Data</a>
    <a href="/case-studies">Case Studies</a>
    <a href="/contact">Contact</a>
  </div>
</div>

<!-- Hero logo (screen 1 only) -->
<div class="site-logo" id="hero-logo">
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

<!-- SEO content block — readable by search engines and AI crawlers -->
<div style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;left:-9999px">

  <h1>iDataOne — Build. Transform. Scale. AI-First Products and Data Intelligence</h1>
  <p>iDataOne is an AI-first product development and data intelligence company. We help businesses build scalable digital products, integrate AI automation, and transform fragmented data into actionable business intelligence.</p>

  <h2>Build Digital Products</h2>
  <p>Ship faster. Scale without limits. From idea to production, we build scalable software products tailored precisely to your business needs within your budget. We deliver web apps, mobile apps, SaaS platforms and enterprise applications.</p>
  <ul>
    <li>Web Application Development</li>
    <li>Mobile App Development</li>
    <li>SaaS Platform Development</li>
    <li>Enterprise Application Development</li>
  </ul>

  <h2>Enable AI and Automation</h2>
  <p>Automate decisions. Eliminate bottlenecks. From AI agents to intelligent workflows, we integrate AI into products and operations to improve efficiency, enhance decision-making, and drive business growth.</p>
  <ul>
    <li>AI Agents</li>
    <li>LLM Integration</li>
    <li>Intelligent Automation</li>
    <li>AI Feature Development</li>
  </ul>

  <h2>Transform Data into Decisions</h2>
  <p>One truth. Instant clarity. Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.</p>
  <ul>
    <li>Unified Data Layer</li>
    <li>Business Intelligence Dashboards</li>
    <li>BI and Analytics</li>
    <li>Predictive Analytics</li>
  </ul>

  <h2>Products from iDataOne</h2>

  <h3>iSportOne — Lifelong Sports Passport</h3>
  <p>Your sport. Your story. Forever. Record every match, build your career profile, and connect with your sports community for life. A professional network for athletes of every level. In Development.</p>

  <h3>aiDesker — AI Customer Service Agents</h3>
  <p>Always on. Always intelligent. AI-powered desk assistant for businesses. Automates workflows, handles queries and keeps your team productive around the clock. Coming Soon.</p>

  <h3>DatInsights — Business Intelligence Platform</h3>
  <p>One view of all your data. Unified business intelligence platform that brings all your data sources together. Real-time dashboards, predictive analytics and actionable insights. Coming Soon.</p>

  <h2>Contact iDataOne — Book a Free Discovery Call</h2>
  <p>Let's build something intelligent. Tell us about your project and we will get back to you within 24 hours. Free 30-minute discovery call. No commitment, just a conversation. Email: info@idataone.com. Services: Custom Software Development, AI Solutions, Data Intelligence, Infra360 PMS, iSportOne, aiDesker.</p>

</div>

<!-- Tamil signature -->
<a href="mailto:info@idataone.com" class="hp-btm" style="position:fixed;bottom:22px;right:80px;z-index:100;font-size:11px;font-weight:500;color:rgba(99,102,241,0.4);text-decoration:none;font-family:Inter,sans-serif;letter-spacing:0.3px;transition:color 0.3s">info@idataone.com</a>
<div class="tamil-sig">ஐ</div>
<div class="hp-btm" style="position:fixed;bottom:22px;left:28px;z-index:100;font-size:11px;font-weight:400;color:rgba(99,102,241,0.4);font-family:Inter,sans-serif;letter-spacing:0.3px">© 2026 iDataOne. All rights reserved.</div>

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
<section class="screen screen-hero">
<div class="container">
<h2>Build. <span class="highlight">Transform.</span> Scale.</h2>

<div class="cap-carousel">
  <div class="cap-tabs" id="cap-tabs">
    <div class="cap-tab t-teal" onclick="capTab(0,this)">01 Build</div>
    <div class="cap-tab" onclick="capTab(1,this)">02 AI</div>
    <div class="cap-tab" onclick="capTab(2,this)">03 Data</div>
  </div>
  <div class="cap-slides" id="cap-slides">

    <div class="cap-slide active">
      <div class="cap-card teal" onclick="window.location.href='/digital'" style="cursor:pointer">
        <div class="cap-left">
          <div class="cap-card-title">Build Digital Products</div>
          <div class="cap-card-outcome">Ship faster. Scale without limits.</div>
          <div class="cap-card-desc">From idea to production, we build scalable software products tailored precisely to your business needs within your budget.</div>
          <ul class="cap-checklist">
            <li>Web Apps</li><li>Mobile Apps</li>
            <li>SaaS Platforms</li><li>Enterprise Apps</li>
          </ul>
          <a href="/digital" class="cap-explore teal" onclick="event.stopPropagation()">Explore Digital <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip active-teal"></div><div class="cap-pip"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="event.stopPropagation();capPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">01 / 03</span>
              <button class="cap-nav-btn" onclick="event.stopPropagation();capNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
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
      <div class="cap-card violet" onclick="window.location.href='/ai'" style="cursor:pointer">
        <div class="cap-left">
          <div class="cap-card-title">Enable AI &amp; Automation</div>
          <div class="cap-card-outcome">Automate decisions. Eliminate bottlenecks.</div>
          <div class="cap-card-desc">From AI agents to intelligent workflows, we integrate AI into products and operations to improve efficiency, enhance decision-making, and drive business growth.</div>
          <ul class="cap-checklist">
            <li>AI Agents</li><li>LLM Integration</li>
            <li>Automation</li><li>AI Features</li>
          </ul>
          <a href="/ai" class="cap-explore violet" onclick="event.stopPropagation()">Explore AI <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip active-violet"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="event.stopPropagation();capPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">02 / 03</span>
              <button class="cap-nav-btn" onclick="event.stopPropagation();capNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
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
      <div class="cap-card amber" onclick="window.location.href='/data'" style="cursor:pointer">
        <div class="cap-left">
          <div class="cap-card-title">Transform Data into Decisions</div>
          <div class="cap-card-outcome">One truth. Instant clarity.</div>
          <div class="cap-card-desc">Unify fragmented data into a trusted intelligence layer that delivers actionable insights and enables faster, better business decisions.</div>
          <ul class="cap-checklist">
            <li>Unified Data</li><li>Dashboards</li>
            <li>BI &amp; Analytics</li><li>Predictions</li>
          </ul>
          <a href="/data" class="cap-explore amber" onclick="event.stopPropagation()">Explore Data <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip"></div><div class="cap-pip active-amber"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="event.stopPropagation();capPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">03 / 03</span>
              <button class="cap-nav-btn" onclick="event.stopPropagation();capNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
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
    <div class="cap-tab t-indigo active" onclick="prodTab(0,this)">01 Infra360</div>
    <div class="cap-tab" onclick="prodTab(1,this)">02 iSportOne</div>
    <div class="cap-tab" onclick="prodTab(2,this)">03 aiDesker</div>
  </div>
  <div class="cap-slides" id="prod-slides">

    <div class="cap-slide active">
      <div class="cap-card indigo" onclick="window.location.href='/infra360PMS'" style="cursor:pointer">
        <div class="cap-left">
          <div class="cap-card-title">Infra360 PMS</div>
          <div class="cap-card-outcome">Every site. Every rupee. Accounted for.</div>
          <div class="cap-card-desc">Track every purchase order, material movement and payment across telecom, solar and civil sites — from award to close-out.</div>
          <ul class="cap-checklist">
            <li>PO to Close-Out</li><li>STN/SRN Tracking</li>
            <li>GST/TDS Automation</li><li>Live Dashboards</li>
          </ul>
          <a href="/infra360PMS" class="cap-explore violet" onclick="event.stopPropagation()">Explore Infra360 <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip active-violet"></div><div class="cap-pip"></div><div class="cap-pip"></div></div>
            <div class="cap-nav">
              <button class="cap-nav-btn" onclick="event.stopPropagation();prodPrev()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
              <span class="cap-nav-count">01 / 03</span>
              <button class="cap-nav-btn" onclick="event.stopPropagation();prodNext()"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
            </div>
          </div>
        </div>
        <div class="cap-illus">
          <svg viewBox="0 0 260 240" width="260" height="240" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="20" width="240" height="170" rx="14" fill="rgba(238,242,255,0.7)" stroke="rgba(99,102,241,0.2)" stroke-width="1.5"/>
            <rect x="10" y="20" width="240" height="28" rx="14" fill="rgba(99,102,241,0.1)"/>
            <rect x="10" y="36" width="240" height="12" fill="rgba(99,102,241,0.1)"/>
            <rect x="22" y="27" width="70" height="6" rx="3" fill="rgba(79,70,229,0.3)"/>
            <rect x="22" y="58" width="52" height="30" rx="6" fill="rgba(255,255,255,0.8)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
            <rect x="30" y="65" width="28" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="30" y="74" width="36" height="8" rx="3" fill="rgba(79,70,229,0.3)"/>
            <rect x="82" y="58" width="52" height="30" rx="6" fill="rgba(255,255,255,0.8)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
            <rect x="90" y="65" width="28" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="90" y="74" width="36" height="8" rx="3" fill="rgba(20,184,166,0.3)"/>
            <rect x="142" y="58" width="52" height="30" rx="6" fill="rgba(255,255,255,0.8)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
            <rect x="150" y="65" width="28" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="150" y="74" width="36" height="8" rx="3" fill="rgba(245,158,11,0.3)"/>
            <rect x="202" y="58" width="38" height="30" rx="6" fill="rgba(255,255,255,0.8)" stroke="rgba(244,63,94,0.2)" stroke-width="1"/>
            <rect x="208" y="65" width="22" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="208" y="74" width="26" height="8" rx="3" fill="rgba(244,63,94,0.25)"/>
            <rect x="22" y="100" width="134" height="78" rx="8" fill="rgba(255,255,255,0.7)" stroke="rgba(99,102,241,0.12)" stroke-width="1"/>
            <rect x="32" y="110" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="32" y="122" width="114" height="1" fill="rgba(226,232,240,0.8)"/>
            <rect x="32" y="130" width="60" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="110" y="128" width="36" height="8" rx="3" fill="rgba(20,184,166,0.2)"/>
            <rect x="32" y="144" width="60" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="110" y="142" width="36" height="8" rx="3" fill="rgba(245,158,11,0.2)"/>
            <rect x="32" y="158" width="60" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="110" y="156" width="36" height="8" rx="3" fill="rgba(244,63,94,0.18)"/>
            <rect x="164" y="100" width="76" height="78" rx="8" fill="rgba(255,255,255,0.7)" stroke="rgba(99,102,241,0.12)" stroke-width="1"/>
            <rect x="172" y="110" width="44" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="172" y="130" width="16" height="36" rx="4" fill="rgba(99,102,241,0.3)"/>
            <rect x="192" y="122" width="16" height="44" rx="4" fill="rgba(99,102,241,0.45)"/>
            <rect x="212" y="128" width="16" height="38" rx="4" fill="rgba(99,102,241,0.35)"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="cap-slide">
      <div class="cap-card rose">
        <div class="cap-left">
          <div class="cap-card-title">iSportOne</div>
          <div class="cap-card-outcome">Your sport. Your story. Forever.</div>
          <div class="cap-card-desc">Record every match. Build your career profile. Connect with your sports community — for life.</div>
          <ul class="cap-checklist">
            <li>Match Records</li><li>Career Profile</li>
            <li>Community</li><li>Sports Network</li>
          </ul>
          <div style="margin-bottom:14px">
            <a href="/isportone" style="display:inline-block;padding:6px 14px;border-radius:999px;background:#fff1f2;color:#f43f5e;font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;text-decoration:none">Learn More →</a>
          </div>
                    <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip active-rose"></div><div class="cap-pip"></div></div>
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
          <div class="cap-card-title">aiDesker</div>
          <div class="cap-card-outcome">Always on. Always intelligent.</div>
          <div class="cap-card-desc">AI-powered desk assistant for businesses. Automates workflows, handles queries and keeps your team productive around the clock.</div>
          <ul class="cap-checklist">
            <li>24/7 AI Agents</li><li>Lead Qualification</li>
            <li>Auto Responses</li><li>CRM Integration</li>
          </ul>
          <div style="margin-bottom:16px"><span style="display:inline-block;padding:6px 14px;border-radius:999px;background:#f0f9ff;color:#0ea5e9;font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase">Coming Soon</span></div>
          <div class="cap-footer">
            <div class="cap-pips"><div class="cap-pip"></div><div class="cap-pip"></div><div class="cap-pip active-sky"></div></div>
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


  </div>
</div>

<div class="why-bottom" style="margin-top:20px">
  <div class="why-cta" onclick="showScreen(3)">
    Build Something Intelligent
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </div>
</div>
</div>
</section>

<!-- 3: Contact -->
<section class="screen">
<div class="container">
<div class="contact-inner">

  <div class="contact-left">
    <div class="cl-label">Get in Touch</div>
    <div class="cl-heading">Let's Build<br>Something <em>Intelligent</em></div>
    <p class="cl-sub">Tell us about your project and we'll get back to you within 24 hours.</p>
    <div class="cl-trust">
      <div class="cl-trust-item">
        <div class="cl-trust-icon ti-indigo">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <div>
          <div class="cl-trust-title">Response within 24 hours</div>
          <div class="cl-trust-desc">We review every enquiry personally</div>
        </div>
      </div>
      <div class="cl-trust-item">
        <div class="cl-trust-icon ti-teal">
          <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div>
          <div class="cl-trust-title">Free 30-min discovery call</div>
          <div class="cl-trust-desc">No commitment, just a conversation</div>
        </div>
      </div>
      <div class="cl-trust-item">
        <div class="cl-trust-icon ti-amber">
          <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div>
          <div class="cl-trust-title">Your data stays private</div>
          <div class="cl-trust-desc">We never share your information</div>
        </div>
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

    <form method="POST" action="/" id="contact-form">
    <input type="hidden" name="form_submit" value="1">
    <input type="hidden" name="service" id="service-val" value="">

    <div class="form-row-2">
      <div class="cfield"><label></label><input type="text" name="name" placeholder="Full Name" required></div>
      <div class="cfield"><label></label><input type="text" name="company" placeholder="Company Name"></div>
    </div>
    <div class="form-row-2">
      <div class="cfield"><label></label><input type="email" name="email" placeholder="Work Email" required></div>
      <div class="cfield"><label></label><input type="tel" name="phone" placeholder="Phone Number"></div>
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
      </div>
      <div class="service-pills" id="svc-products" style="display:none">
        <div class="service-pill" onclick="selectService(this,'Infra360 PMS')">Infra360 PMS</div>
        <div class="service-pill" onclick="selectService(this,'iSportOne')">iSportOne</div>
        <div class="service-pill" onclick="selectService(this,'aiDesker')">aiDesker</div>
      </div>
    </div>

    <div class="form-row-2" style="margin-bottom:16px">
      <div class="cfield" style="grid-column:1/-1">
        <label></label>
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
</section>


</div>


<div class="dots">
<div class="dot active"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
</div>

<footer class="footer"></footer>

<script>
// Capability carousel
let capCurrent = 0;
const capSlideEls = document.querySelectorAll('#cap-slides .cap-slide');
const capTabEls = document.querySelectorAll('#cap-tabs .cap-tab');
const capTabClasses = ['t-teal','t-violet','t-amber'];

function capTab(index, el) {
  capSlideEls.forEach(s => s.classList.remove('active'));
  capTabEls.forEach(t => t.className = 'cap-tab');
  capCurrent = index;
  capSlideEls[capCurrent].classList.add('active');
  const activeTab = el || capTabEls[index];
  if(activeTab) activeTab.className = 'cap-tab ' + capTabClasses[index];
}
function capNext() { capTab((capCurrent + 1) % capSlideEls.length, null); }
function capPrev() { capTab((capCurrent - 1 + capSlideEls.length) % capSlideEls.length, null); }

// Product carousel
let prodCurrent = 0;
const prodSlideEls = document.querySelectorAll('#prod-slides .cap-slide');
const prodTabEls = document.querySelectorAll('.cap-tabs')[1]?.querySelectorAll('.cap-tab') || [];
const prodTabClasses = ['t-indigo','t-rose','t-sky'];

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
let current   = <?php echo (!empty($form_success) || !empty($form_error)) ? '3' : '0'; ?>;
let locked    = false;

<?php if (!empty($form_success) || !empty($form_error)): ?>
screens.forEach(s => s.classList.remove('active'));
screens[3].classList.add('active');
dots.forEach(d => d.classList.remove('active'));
dots[3].classList.add('active');
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

// Mobile: show all screens stacked
if(window.innerWidth <= 768) {
  screens.forEach(s => {
    s.style.opacity = '1';
    s.style.transform = 'none';
    s.style.pointerEvents = 'auto';
  });
}

// Disable slide scroll on mobile
if(window.innerWidth > 768) {
window.addEventListener('wheel', (e) => {
  if (locked) return;
  locked = true;
  if (e.deltaY > 0) showScreen(Math.min(current + 1, screens.length - 1));
  else              showScreen(Math.max(current - 1, 0));
  setTimeout(() => locked = false, 900);
}, { passive: true });
} // end mobile check

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


function toggleMenu() {
  const h = document.getElementById('hamburger');
  const m = document.getElementById('mob-menu');
  const o = document.getElementById('mob-overlay');
  h.classList.toggle('open');
  m.classList.toggle('open');
  o.classList.toggle('open');
}

(function(){
  var navLinks = document.querySelectorAll('#topNavLinks a[href], .mob-menu a[href]');
  var prefetched = {};

  function prefetch(url){
    if(prefetched[url]) return;
    prefetched[url] = true;
    var link = document.createElement('link');
    link.rel = 'prefetch';
    link.href = url;
    document.head.appendChild(link);
  }

  navLinks.forEach(function(a){
    a.addEventListener('mouseenter', function(){
      prefetch(a.href);
    });
    a.addEventListener('click', function(){
      if(a.pathname === window.location.pathname) return;
      var bar = document.getElementById('navProgress');
      if(bar) bar.classList.add('active');
    });
  });
})();
</script>

</body>
</html>
