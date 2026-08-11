<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Integration & Automation Services | iDataOne — Build. Transform. Scale.</title>
<meta name="description" content="From AI agents to intelligent workflows, iDataOne integrates AI into your products and operations to improve efficiency, enhance decision-making, and drive business growth.">
<meta name="keywords" content="AI integration, AI agents, LLM integration, intelligent automation, AI features, machine learning, ChatGPT integration, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="AI Integration & Automation Services | iDataOne — Build. Transform. Scale.">
<meta property="og:description" content="From AI agents to intelligent workflows, iDataOne integrates AI into your products and operations to improve efficiency, enhance decision-making, and drive business growth.">
<meta property="og:url" content="https://idataone.com/ai">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="AI Integration & Automation Services | iDataOne — Build. Transform. Scale.">
<meta name="twitter:description" content="From AI agents to intelligent workflows, iDataOne integrates AI into your products and operations to improve efficiency, enhance decision-making, and drive business growth.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "AI Integration & Automation",
  "provider": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "description": "From AI agents to intelligent workflows, iDataOne integrates AI into products and operations to improve efficiency, enhance decision-making, and drive business growth.",
  "serviceType": "AI Integration",
  "areaServed": "Worldwide",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "AI Services",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI Agents"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "LLM Integration"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Intelligent Automation"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI Feature Development"}}
    ]
  }
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/ai">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden}
/* Nav via _nav.php */
.banner{min-height:100vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:url('/assets/images/ai-hero-bg.png') center center / cover no-repeat}
.banner::before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,rgba(30,5,60,0.55) 0%,rgba(50,10,80,0.38) 55%,rgba(20,5,50,0.28) 100%);pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#e9d5ff;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#fff;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#e9d5ff,#c4b5fd);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:rgba(255,255,255,0.65);line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#7c3aed,#a855f7);color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(255,255,255,0.25);color:rgba(255,255,255,0.85);font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-secondary:hover{background:rgba(255,255,255,0.1);transform:translateY(-1px)}
.banner-illus{display:none}
.section{padding:80px 32px}
.section-inner{max-width:1140px;margin:0 auto}
.section-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#7c3aed;margin-bottom:12px;text-align:center}
.section-title{font-size:clamp(28px,3vw,40px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;text-align:center;margin-bottom:12px}
.section-sub{font-size:16px;color:#64748b;text-align:center;line-height:1.7;max-width:560px;margin:0 auto 48px}
.stories{background:#fff}
.stories-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.story-card{border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px;display:grid;grid-template-columns:1fr 180px;gap:24px;align-items:start;transition:box-shadow 0.3s}
.story-card:hover{box-shadow:0 16px 48px rgba(124,58,237,0.08)}
.story-tag{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#7c3aed;margin-bottom:12px}
.story-title{font-size:20px;font-weight:700;color:#0f172a;letter-spacing:-0.4px;line-height:1.3;margin-bottom:12px}
.story-desc{font-size:13px;color:#64748b;line-height:1.7;margin-bottom:20px}
.story-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#7c3aed;text-decoration:none}
.story-link svg{width:13px;height:13px;fill:none;stroke:#7c3aed;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.story-visual{background:linear-gradient(135deg,#f5f3ff,#ede9fe);border-radius:12px;display:flex;align-items:center;justify-content:center;min-height:140px}
.process{background:#0f172a;position:relative;overflow:hidden}
.process::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(124,58,237,0.18),transparent 55%),radial-gradient(ellipse at 75% 30%,rgba(99,102,241,0.12),transparent 50%);pointer-events:none}
.process .section-tag{color:#a78bfa}
.process .section-title{color:#f1f5f9}
.process-steps{display:flex;align-items:flex-start;position:relative;margin-top:56px}
.process-steps::before{content:"";position:absolute;top:28px;left:calc(10%);right:calc(10%);height:1px;background:linear-gradient(90deg,rgba(124,58,237,0.4),rgba(99,102,241,0.4));z-index:0}
.process-step{flex:1;text-align:center;position:relative;z-index:1;padding:0 12px}
.step-icon{width:56px;height:56px;border-radius:50%;background:rgba(124,58,237,0.12);border:1px solid rgba(124,58,237,0.3);display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.step-icon svg{width:22px;height:22px;fill:none;stroke:#a78bfa;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.step-title{font-size:15px;font-weight:700;color:#f1f5f9;margin-bottom:8px}
.step-desc{font-size:12.5px;color:rgba(255,255,255,0.45);line-height:1.65}
.products{background:#f8fafc}
.products-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.product-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;overflow:hidden;transition:box-shadow 0.3s,transform 0.3s}
.product-card:hover{box-shadow:0 20px 48px rgba(124,58,237,0.1);transform:translateY(-4px)}
.product-card-img{height:160px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.product-card-img.violet{background:linear-gradient(135deg,#f5f3ff,#ede9fe)}
.product-card-img.indigo{background:linear-gradient(135deg,#eef2ff,#e0e7ff)}
.product-card-img.sky{background:linear-gradient(135deg,#f0f9ff,#e0f2fe)}
.product-card-body{padding:24px}
.product-card-title{font-size:17px;font-weight:700;color:#0f172a;margin-bottom:6px}
.product-card-desc{font-size:13px;color:#64748b;line-height:1.65;margin-bottom:16px}
.product-card-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:600;color:#7c3aed;text-decoration:none}
.product-card-link svg{width:13px;height:13px;fill:none;stroke:#7c3aed;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.cta-section{background:#f8fafc;padding:40px 32px 80px}
.cta-card{max-width:900px;margin:0 auto;background:#0f172a;border-radius:28px;padding:34px 48px;position:relative;overflow:hidden;display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(124,58,237,0.2),transparent 60%);pointer-events:none}
.cta-card-left{position:relative;z-index:1}
.cta-icon{width:48px;height:48px;border-radius:50%;border:1px solid rgba(255,255,255,0.12);display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.cta-icon svg{width:20px;height:20px;fill:none;stroke:rgba(255,255,255,0.6);stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.cta-heading{font-size:clamp(20px,2.5vw,30px);font-weight:800;letter-spacing:-1px;color:#f1f5f9;margin-bottom:8px;line-height:1.2}
.cta-heading em{font-style:normal;background:linear-gradient(90deg,#a78bfa,#c084fc);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cta-sub{font-size:14px;color:rgba(255,255,255,0.4);line-height:1.7}
.cta-btns{display:flex;flex-direction:column;gap:12px;align-items:flex-end;position:relative;z-index:1}
.btn-cta-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#7c3aed,#a855f7);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s}
.btn-cta-primary:hover{opacity:0.9}
.btn-cta-secondary{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:rgba(255,255,255,0.45);text-decoration:none;transition:color 0.2s}
.btn-cta-secondary:hover{color:rgba(255,255,255,0.8)}
.btn-cta-secondary svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
@media(max-width:768px){.site-nav .nav-links{display:none}.banner-inner{grid-template-columns:1fr}.banner-illus{display:none}.stories-grid{grid-template-columns:1fr}.story-card{grid-template-columns:1fr}.story-visual{display:none}.process-steps{flex-direction:column;gap:0;align-items:stretch}.process-steps::before{display:none}.process-step{display:flex;align-items:flex-start;text-align:left;gap:16px;padding:0 0 28px 0;position:relative}.process-step::before{content:"";position:absolute;left:23px;top:48px;bottom:0;width:1px;background:linear-gradient(180deg,rgba(99,102,241,0.3),rgba(124,58,237,0.1))}.process-step:last-child::before{display:none}.process-step:last-child{padding-bottom:0}.step-icon{margin:0;flex-shrink:0}.step-title{margin-bottom:6px}.products-grid{grid-template-columns:1fr}.cta-card{grid-template-columns:1fr}.cta-btns{align-items:flex-start}}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'ai'; include __DIR__ . '/_nav.php'; ?>

<!-- Banner -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <div class="banner-tag">AI & Automation</div>
      <h1 class="banner-h1">Grow Your<br>Business <em>with AI</em></h1>
      <p class="banner-sub">Automate operations, improve customer experiences, and unlock new opportunities with AI solutions tailored to your business.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Start Your AI Journey <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#stories" class="btn-secondary">View Case Studies <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <svg viewBox="0 0 500 400" width="500" height="400" xmlns="http://www.w3.org/2000/svg">
        <!-- Central LLM node -->
        <rect x="175" y="150" width="150" height="100" rx="20" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.35)" stroke-width="1.5"/>
        <circle cx="250" cy="190" r="24" fill="rgba(124,58,237,0.15)" stroke="rgba(124,58,237,0.3)" stroke-width="1.5"/>
        <circle cx="250" cy="190" r="10" fill="rgba(124,58,237,0.3)"/>
        <rect x="210" y="222" width="80" height="6" rx="3" fill="rgba(124,58,237,0.2)"/>
        <rect x="220" y="232" width="60" height="4" rx="2" fill="rgba(124,58,237,0.12)"/>
        <!-- Input nodes left -->
        <rect x="20" y="60" width="100" height="50" rx="12" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.25)" stroke-width="1.5"/>
        <rect x="30" y="74" width="50" height="5" rx="2.5" fill="rgba(124,58,237,0.2)"/>
        <rect x="30" y="84" width="70" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <line x1="120" y1="85" x2="175" y2="175" stroke="rgba(124,58,237,0.25)" stroke-width="1.5" stroke-dasharray="5,3"/>
        <rect x="20" y="175" width="100" height="50" rx="12" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.25)" stroke-width="1.5"/>
        <rect x="30" y="189" width="50" height="5" rx="2.5" fill="rgba(124,58,237,0.2)"/>
        <rect x="30" y="199" width="70" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <line x1="120" y1="200" x2="175" y2="200" stroke="rgba(124,58,237,0.25)" stroke-width="1.5" stroke-dasharray="5,3"/>
        <rect x="20" y="290" width="100" height="50" rx="12" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.25)" stroke-width="1.5"/>
        <rect x="30" y="304" width="50" height="5" rx="2.5" fill="rgba(124,58,237,0.2)"/>
        <rect x="30" y="314" width="70" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <line x1="120" y1="315" x2="175" y2="225" stroke="rgba(124,58,237,0.25)" stroke-width="1.5" stroke-dasharray="5,3"/>
        <!-- Arrows -->
        <polygon points="172,172 180,178 174,182" fill="rgba(124,58,237,0.3)"/>
        <polygon points="172,198 180,200 172,202" fill="rgba(124,58,237,0.3)"/>
        <polygon points="172,222 180,220 176,226" fill="rgba(124,58,237,0.3)"/>
        <!-- Output nodes right -->
        <rect x="380" y="60" width="110" height="50" rx="12" fill="rgba(240,253,250,0.9)" stroke="rgba(20,184,166,0.25)" stroke-width="1.5"/>
        <rect x="390" y="72" width="40" height="5" rx="2.5" fill="rgba(20,184,166,0.3)"/>
        <rect x="390" y="82" width="80" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <line x1="325" y1="175" x2="380" y2="85" stroke="rgba(20,184,166,0.25)" stroke-width="1.5" stroke-dasharray="5,3"/>
        <rect x="380" y="175" width="110" height="50" rx="12" fill="rgba(255,251,235,0.9)" stroke="rgba(245,158,11,0.25)" stroke-width="1.5"/>
        <rect x="390" y="187" width="40" height="5" rx="2.5" fill="rgba(245,158,11,0.3)"/>
        <rect x="390" y="197" width="80" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <line x1="325" y1="200" x2="380" y2="200" stroke="rgba(245,158,11,0.25)" stroke-width="1.5" stroke-dasharray="5,3"/>
        <rect x="380" y="290" width="110" height="50" rx="12" fill="rgba(239,246,255,0.9)" stroke="rgba(99,102,241,0.25)" stroke-width="1.5"/>
        <rect x="390" y="302" width="40" height="5" rx="2.5" fill="rgba(99,102,241,0.3)"/>
        <rect x="390" y="312" width="80" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <line x1="325" y1="225" x2="380" y2="315" stroke="rgba(99,102,241,0.25)" stroke-width="1.5" stroke-dasharray="5,3"/>
        <!-- Arrow heads right -->
        <polygon points="378,83 386,85 380,91" fill="rgba(20,184,166,0.3)"/>
        <polygon points="378,198 386,200 378,202" fill="rgba(245,158,11,0.3)"/>
        <polygon points="378,312 386,314 380,320" fill="rgba(99,102,241,0.3)"/>
        <!-- Input labels -->
        <text x="70" y="73" text-anchor="middle" font-size="9" fill="#7c3aed" font-family="Inter" font-weight="600">AI Agents</text>
        <text x="70" y="188" text-anchor="middle" font-size="9" fill="#7c3aed" font-family="Inter" font-weight="600">LLM Input</text>
        <text x="70" y="303" text-anchor="middle" font-size="9" fill="#7c3aed" font-family="Inter" font-weight="600">Automation</text>
        <!-- Output labels -->
        <text x="435" y="71" text-anchor="middle" font-size="9" fill="#0d9488" font-family="Inter" font-weight="600">Decisions</text>
        <text x="435" y="186" text-anchor="middle" font-size="9" fill="#d97706" font-family="Inter" font-weight="600">Insights</text>
        <text x="435" y="301" text-anchor="middle" font-size="9" fill="#4f46e5" font-family="Inter" font-weight="600">Actions</text>
        <!-- Floating dots -->
        <circle cx="160" cy="120" r="4" fill="rgba(124,58,237,0.15)"/>
        <circle cx="340" cy="130" r="5" fill="rgba(124,58,237,0.12)"/>
        <circle cx="250" cy="50" r="5" fill="rgba(124,58,237,0.1)"/>
        <circle cx="250" cy="360" r="4" fill="rgba(124,58,237,0.1)"/>
      </svg>
    </div>
  </div>
</section>

<!-- Success Stories -->
<section class="section stories" id="stories">
  <div class="section-inner">
    <div class="section-tag">Success Stories</div>
    <h2 class="section-title">AI Solutions. Real Results.</h2>
    <p class="section-sub">Businesses that embedded AI into their operations and saw measurable impact.</p>
    <div class="stories-grid">

      <div class="story-card" onclick="location.href='/case-study/aidesker'" style="cursor:pointer">
        <div>
          <div class="story-tag">Conversational AI</div>
          <div class="story-title">Building a Knowledge-Grounded AI Chat Assistant Businesses Can Embed in One Line</div>
          <div class="story-desc">We built aiDesker, a conversational AI platform that grounds every response in a business's own knowledge base, captures leads mid-conversation, and runs on the business's own AI key.</div>
          <a href="/case-study/aidesker" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="18" width="120" height="32" rx="10" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.18)" stroke-width="1"/>
            <rect x="24" y="26" width="70" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="24" y="35" width="50" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <circle cx="126" cy="34" r="7" fill="rgba(124,58,237,0.15)"/>
            <rect x="24" y="60" width="120" height="32" rx="10" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <rect x="34" y="68" width="80" height="5" rx="2.5" fill="rgba(124,58,237,0.35)"/>
            <rect x="34" y="77" width="60" height="4" rx="2" fill="rgba(124,58,237,0.2)"/>
            <circle cx="28" cy="76" r="7" fill="rgba(124,58,237,0.2)"/>
            <circle cx="68" cy="52" r="3" fill="rgba(124,58,237,0.2)"/>
            <circle cx="80" cy="52" r="3" fill="rgba(124,58,237,0.15)"/>
            <circle cx="92" cy="52" r="3" fill="rgba(124,58,237,0.1)"/>
          </svg>
        </div>
      </div>

      <div class="story-card">
        <div>
          <div class="story-tag">LLM Integration</div>
          <div class="story-title">Integrating LLMs Into a Legal Document Processing Platform</div>
          <div class="story-desc">We integrated large language models into a legal SaaS platform, automating document review and contract analysis, cutting processing time by 75%.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="16" width="60" height="76" rx="6" fill="rgba(245,243,255,0.8)" stroke="rgba(124,58,237,0.15)" stroke-width="1"/>
            <rect x="22" y="24" width="48" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="22" y="32" width="48" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="40" width="40" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="48" width="48" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="56" width="36" height="4" rx="2" fill="rgba(124,58,237,0.2)"/>
            <rect x="22" y="64" width="48" height="4" rx="2" fill="rgba(124,58,237,0.15)"/>
            <rect x="22" y="72" width="44" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="22" y="80" width="48" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="86" y="40" width="66" height="52" rx="10" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.25)" stroke-width="1.5"/>
            <circle cx="119" cy="60" r="14" fill="rgba(124,58,237,0.12)"/>
            <circle cx="119" cy="60" r="6" fill="rgba(124,58,237,0.25)"/>
            <rect x="92" y="80" width="54" height="4" rx="2" fill="rgba(124,58,237,0.15)"/>
            <line x1="76" y1="65" x2="86" y2="65" stroke="rgba(124,58,237,0.3)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <polygon points="84,62 90,65 84,68" fill="rgba(124,58,237,0.3)"/>
          </svg>
        </div>
      </div>

      <div class="story-card">
        <div>
          <div class="story-tag">Automation</div>
          <div class="story-title">Automating Finance Operations Saving 300+ Hours Monthly</div>
          <div class="story-desc">We automated invoice processing, reconciliation and reporting workflows for a finance team, saving over 300 hours per month and eliminating manual errors.</div>
          <a href="/contact" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="16" y="20" width="36" height="36" rx="8" fill="rgba(245,243,255,0.9)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="22" y="28" width="24" height="4" rx="2" fill="rgba(124,58,237,0.25)"/>
            <rect x="22" y="36" width="20" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="22" y="44" width="24" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <line x1="52" y1="38" x2="64" y2="38" stroke="rgba(124,58,237,0.3)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <polygon points="62,35 68,38 62,41" fill="rgba(124,58,237,0.3)"/>
            <rect x="68" y="20" width="36" height="36" rx="8" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <circle cx="86" cy="38" r="10" fill="rgba(124,58,237,0.15)"/>
            <circle cx="86" cy="38" r="4" fill="rgba(124,58,237,0.3)"/>
            <line x1="104" y1="38" x2="116" y2="38" stroke="rgba(124,58,237,0.3)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <polygon points="114,35 120,38 114,41" fill="rgba(124,58,237,0.3)"/>
            <rect x="120" y="20" width="32" height="36" rx="8" fill="rgba(240,253,250,0.9)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
            <rect x="126" y="30" width="20" height="4" rx="2" fill="rgba(20,184,166,0.3)"/>
            <rect x="126" y="38" width="16" height="4" rx="2" fill="rgba(20,184,166,0.2)"/>
            <rect x="16" y="72" width="128" height="28" rx="8" fill="rgba(240,253,250,0.5)" stroke="rgba(20,184,166,0.15)" stroke-width="1"/>
            <rect x="24" y="80" width="60" height="5" rx="2.5" fill="rgba(20,184,166,0.25)"/>
            <rect x="24" y="89" width="80" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <circle cx="132" cy="86" r="6" fill="rgba(20,184,166,0.2)"/>
          </svg>
        </div>
      </div>

          
      <div class="story-card" onclick="location.href='/case-study/mealmate'" style="cursor:pointer">
        <div>
          <div class="story-tag">Consumer Mobile App</div>
          <div class="story-title">Building an AI-Powered Family Meal Planning App</div>
          <div class="story-desc">We integrated GPT-4o-mini into MealMate, a React Native app, to generate health-aware, personalised meal suggestions for every member of a family.</div>
          <a href="/case-study/mealmate" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual">
          <svg viewBox="0 0 160 120" width="160" height="120" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="8" width="144" height="104" rx="8" fill="rgba(255,255,255,0.8)"/>
            <rect x="58" y="14" width="44" height="92" rx="8" fill="rgba(255,255,255,0.9)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="64" y="24" width="32" height="8" rx="3" fill="rgba(124,58,237,0.12)" stroke="rgba(124,58,237,0.18)" stroke-width="1"/>
            <circle cx="71" cy="28" r="2.5" fill="rgba(124,58,237,0.3)"/>
            <rect x="64" y="36" width="32" height="16" rx="3" fill="#fff" stroke="rgba(124,58,237,0.15)" stroke-width="1"/>
            <rect x="68" y="40" width="14" height="3" rx="1.5" fill="rgba(124,58,237,0.3)"/>
            <rect x="68" y="46" width="20" height="3" rx="1.5" fill="rgba(15,23,42,0.07)"/>
            <rect x="64" y="56" width="32" height="16" rx="3" fill="rgba(124,58,237,0.06)" stroke="rgba(124,58,237,0.15)" stroke-width="1"/>
            <rect x="68" y="60" width="14" height="3" rx="1.5" fill="rgba(124,58,237,0.25)"/>
            <rect x="64" y="78" width="32" height="9" rx="4.5" fill="rgba(124,58,237,0.7)"/>
            <circle cx="24" cy="40" r="13" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <circle cx="24" cy="40" r="5" fill="rgba(124,58,237,0.25)"/>
            <circle cx="130" cy="55" r="9" fill="rgba(124,58,237,0.08)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
          </svg>
        </div>
      </div>
</div>
  </div>
</section>

<!-- Process -->
<section class="section process">
  <div class="section-inner">
    <div class="section-tag">Our AI Process</div>
    <h2 class="section-title" style="color:#f1f5f9">From Concept To Intelligence</h2>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
        <div class="step-title">Assess</div>
        <div class="step-desc">We identify where AI can create the most value in your business.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
        <div class="step-title">Model</div>
        <div class="step-desc">We select and fine-tune the right AI models for your use case.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="step-title">Integrate</div>
        <div class="step-desc">We embed AI seamlessly into your existing products and workflows.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/></svg></div>
        <div class="step-title">Deploy</div>
        <div class="step-desc">We launch and test AI in production with confidence and safety.</div>
      </div>
      <div class="process-step">
        <div class="step-icon"><svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div>
        <div class="step-title">Optimise</div>
        <div class="step-desc">We monitor performance and continuously improve your AI systems.</div>
      </div>
    </div>
  </div>
</section>

<!-- Products -->
<section class="section products">
  <div class="section-inner">
    <div class="section-tag">Explore Our Products</div>
    <h2 class="section-title">AI-Powered Products</h2>
    <p class="section-sub">Products we built using the same AI expertise we bring to every client project.</p>
    <div class="products-grid">
      <div class="product-card">
        <div class="product-card-img violet">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="20" width="160" height="100" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(124,58,237,0.15)" stroke-width="1"/>
            <rect x="20" y="20" width="160" height="28" rx="12" fill="rgba(124,58,237,0.08)"/>
            <rect x="20" y="36" width="160" height="12" fill="rgba(124,58,237,0.08)"/>
            <circle cx="60" cy="34" r="5" fill="rgba(124,58,237,0.25)"/>
            <circle cx="74" cy="34" r="5" fill="rgba(99,102,241,0.2)"/>
            <circle cx="88" cy="34" r="5" fill="rgba(139,92,246,0.2)"/>
            <rect x="32" y="58" width="136" height="5" rx="2.5" fill="rgba(124,58,237,0.15)"/>
            <rect x="32" y="70" width="136" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="32" y="80" width="100" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
            <rect x="32" y="94" width="56" height="18" rx="8" fill="rgba(124,58,237,0.15)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="96" y="94" width="56" height="18" rx="8" fill="rgba(20,184,166,0.1)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">iSportOne</div>
          <div class="product-card-desc">Your sport. Your story. Forever. Record every match, build your career profile and connect with your sports community — for life.</div>
          <a href="/isportone" class="product-card-link">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-card-img indigo">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="20" width="140" height="40" rx="14" fill="rgba(255,255,255,0.85)" stroke="rgba(99,102,241,0.2)" stroke-width="1"/>
            <rect x="32" y="30" width="90" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
            <rect x="32" y="40" width="70" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <circle cx="148" cy="40" r="7" fill="rgba(99,102,241,0.15)"/>
            <rect x="40" y="76" width="140" height="40" rx="14" fill="rgba(99,102,241,0.1)" stroke="rgba(99,102,241,0.25)" stroke-width="1"/>
            <rect x="52" y="86" width="100" height="5" rx="2.5" fill="rgba(99,102,241,0.4)"/>
            <rect x="52" y="96" width="80" height="4" rx="2" fill="rgba(99,102,241,0.25)"/>
            <circle cx="44" cy="96" r="7" fill="rgba(99,102,241,0.2)"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">aiDesker</div>
          <div class="product-card-desc">AI-powered desk assistant for businesses. Automates workflows, handles queries and keeps your team productive around the clock.</div>
          <a href="/contact" class="product-card-link">Get Early Access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-card-img sky">
          <svg viewBox="0 0 200 140" width="200" height="140" xmlns="http://www.w3.org/2000/svg">
            <rect x="12" y="10" width="176" height="120" rx="10" fill="rgba(255,255,255,0.7)" stroke="rgba(14,165,233,0.15)" stroke-width="1"/>
            <rect x="12" y="10" width="176" height="22" rx="10" fill="rgba(14,165,233,0.08)"/>
            <rect x="22" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(14,165,233,0.15)" stroke-width="1"/>
            <rect x="78" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(14,165,233,0.15)" stroke-width="1"/>
            <rect x="134" y="40" width="50" height="28" rx="6" fill="rgba(255,255,255,0.9)" stroke="rgba(14,165,233,0.15)" stroke-width="1"/>
            <rect x="22" y="78" width="162" height="42" rx="6" fill="rgba(255,255,255,0.7)"/>
            <polyline points="30,110 46,96 62,100 78,88 94,82 110,86 126,74 142,78 158,66 174,70" stroke="rgba(14,165,233,0.6)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">DatInsights</div>
          <div class="product-card-desc">Unified business intelligence with AI-powered analytics. One view of all your data, with predictions and actionable insights.</div>
          <a href="/contact" class="product-card-link">Get Early Access <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-card">
    <div class="cta-card-left">
      <div class="cta-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/></svg></div>
      <h2 class="cta-heading">Ready To Integrate <em>AI</em> Into Your Business?</h2>
      <p class="cta-sub">Whether you need AI agents, LLM integration, automation or custom AI features — we can help you get there.</p>
    </div>
    <div class="cta-btns">
      <a href="/contact" class="btn-cta-primary">Talk To Our Experts <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/contact" class="btn-cta-secondary">Schedule a Consultation <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
