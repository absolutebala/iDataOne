<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: Multi-Tenant AI Chat Platform — aiDesker | iDataOne</title>
<meta name="description" content="How iDataOne built aiDesker, a full-stack multi-tenant SaaS platform that lets businesses deploy a knowledge-grounded AI chat assistant on their website in one line of embed code.">
<meta name="keywords" content="multi-tenant SaaS platform, AI chat widget, embeddable chatbot, conversational AI platform, knowledge-grounded chatbot, Next.js Supabase SaaS, aiDesker, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/aidesker">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: Multi-Tenant AI Chat Platform — aiDesker | iDataOne">
<meta property="og:description" content="How iDataOne built aiDesker, a full-stack multi-tenant SaaS platform that lets businesses deploy a knowledge-grounded AI chat assistant on their website in one line of embed code.">
<meta property="og:url" content="https://idataone.com/case-study/aidesker">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: Multi-Tenant AI Chat Platform — aiDesker | iDataOne">
<meta name="twitter:description" content="How iDataOne built aiDesker, a full-stack multi-tenant SaaS platform that lets businesses deploy a knowledge-grounded AI chat assistant on their website in one line of embed code.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Building a Multi-Tenant AI Chat Platform Any Business Can Embed in One Line",
  "description": "How iDataOne designed and built aiDesker — a full-stack SaaS platform that lets businesses deploy an intelligent, knowledge-grounded chat assistant on their website, powered by their own AI key, with per-tenant data isolation, lead capture and a complete admin layer.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
  "url": "https://idataone.com/case-study/aidesker",
  "mainEntityOfPage": "https://idataone.com/case-study/aidesker",
  "about": [
    {"@type": "Thing", "name": "Multi-Tenant SaaS Platform"},
    {"@type": "Thing", "name": "Conversational AI"},
    {"@type": "Thing", "name": "Embeddable Chat Widget"}
  ],
  "keywords": "multi-tenant SaaS, AI chat platform, embeddable widget, knowledge-grounded AI, lead capture, Next.js, Supabase"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 15% 40%,rgba(139,92,246,0.12),transparent 50%),radial-gradient(ellipse at 85% 15%,rgba(167,139,250,0.1),transparent 45%),radial-gradient(ellipse at 60% 80%,rgba(99,102,241,0.08),transparent 40%),linear-gradient(135deg,#faf8ff 0%,#f3f0ff 40%,#ede9fe 70%,#f5f3ff 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(14,165,233,0.15),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(56,189,248,0.12),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.cs-hero-left{}.cs-hero-img{display:flex;align-items:center;justify-content:center}.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(109,40,217,0.18),0 8px 24px rgba(0,0,0,0.08);transition:transform 0.4s ease}.cs-hero-img img:hover{transform:translateY(-4px)}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#0ea5e9;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#0ea5e9,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#0ea5e9;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#f0f9ff;border:1px solid rgba(14,165,233,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#0ea5e9;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#f0f9ff,#e0f2fe)}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 12px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:22px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#0ea5e9,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:11.5px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #0ea5e9;background:#f0f9ff;border-radius:0 16px 16px 0}
.cs-quote-text{font-size:16px;color:#334155;line-height:1.75;font-style:italic;margin-bottom:12px}
.cs-quote-author{font-size:13px;font-weight:600;color:#94a3b8}
.cs-grid{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-top:32px}
.cs-grid-card{background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px;padding:28px}
.cs-grid-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.cs-grid-icon svg{width:20px;height:20px;fill:none;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-grid-title{font-size:16px;font-weight:700;color:#0f172a;margin-bottom:8px}
.cs-grid-desc{font-size:13px;color:#64748b;line-height:1.7}
.cs-cta{padding:48px 32px 80px;background:#fff}
.cs-cta-card{max-width:800px;margin:0 auto;background:#0f172a;border-radius:24px;padding:40px 48px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:space-between;gap:32px}
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(14,165,233,0.18),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#38bdf8,#0ea5e9);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#0ea5e9,#38bdf8);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}
@media(max-width:768px){
  .cs-hero-inner{grid-template-columns:1fr}
  .cs-hero-img{display:none}
  .cs-hero-stats{gap:24px}
  .cs-grid{grid-template-columns:1fr}
  .cs-features{grid-template-columns:1fr}
  .cs-results{grid-template-columns:1fr 1fr}
  .cs-cta-card{flex-direction:column;padding:32px 24px;text-align:center}
}
</style>
</head>
<body>

<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- Hero -->
<section class="cs-hero">
  <div class="cs-hero-inner">
    <div class="cs-hero-left">
      <h1 class="cs-hero-title">Building a Multi-Tenant AI Chat Platform Any Business Can Embed in One Line</h1>
      <p class="cs-hero-sub">How we designed and built aiDesker — a full-stack SaaS platform that lets businesses deploy an intelligent, knowledge-grounded chat assistant on their website, powered by their own AI key, with per-tenant data isolation, lead capture and a complete admin layer.</p>
      <div class="cs-hero-stats">
      <div class="cs-stat"><div class="cs-stat-num"><span>1-Line</span></div><div class="cs-stat-label">Embed to go live</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>2</span></div><div class="cs-stat-label">AI providers supported</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>10+</span></div><div class="cs-stat-label">API endpoints</div></div>
    </div>
    </div>
    <div class="cs-hero-img">
      <img
        src="/assets/images/aidesker-hero.png"
        alt="aiDesker — AI chat platform with CRM, Lead Capture, Instant Integration and AI providers"
        loading="eager"
        style="cursor:zoom-in"
        onmouseover="hzOpen(this.src,this.alt)"
      />
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Businesses Wanted an AI Assistant on Their Site — Without Building One</h2>
    <p class="cs-p">Companies wanting a website chat assistant faced a hard choice: pay for rigid off-the-shelf bots that knew nothing about their business, or commit engineering time to build, host and maintain a custom one. Neither gave them a bot grounded in their own knowledge base, control over their AI spend, or visibility into the leads a conversation produced.</p>
    <p class="cs-p">The need was a single platform where any business could register, feed in their own knowledge (company description, services, PDFs, scraped web pages), bring their own AI key, and drop a working assistant onto their site — while keeping every tenant's data, conversations and leads fully isolated from each other, all under one operator's oversight.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Purpose-Built, Multi-Tenant Conversational AI Platform</h2>
    <p class="cs-p">We built aiDesker from the ground up — a tenant-isolated SaaS platform covering the full lifecycle from knowledge ingestion to embedded widget, lead capture, CRM sync and platform-wide administration.</p>

    <div class="cs-visual" style="padding:0;background:transparent;border:none">
      <img
        src="/assets/images/aidesker-solution.png"
        alt="aiDesker architecture — AI Model Layer, Knowledge Base, Multi-Tenant, Embeddable Widget, Lead Capture, CRM Automation"
        style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(109,40,217,0.15),0 8px 24px rgba(0,0,0,0.1)"
        loading="lazy"
       style="cursor:zoom-in" onmouseover="hzOpen(this.src,this.alt)"/>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div><div class="cs-feature-title">Bring-Your-Own-Key AI Proxy</div><div class="cs-feature-desc">Chat is proxied server-side to Claude (Anthropic) or ChatGPT (OpenAI) using each tenant's own API key, encrypted at rest and never exposed to the browser. No markup on AI usage.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div><div class="cs-feature-title">Knowledge-Grounded Responses</div><div class="cs-feature-desc">Company description, service listings, uploaded PDFs and scraped URLs are injected into the system prompt. Scope control keeps the bot on-topic.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div><div class="cs-feature-title">One-Line Embeddable Widget</div><div class="cs-feature-desc">A self-contained script renders a floating bubble or centre-popup panel, fetches tenant config from a public endpoint, and works cross-origin on any site.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Intelligent Lead Capture</div><div class="cs-feature-desc">The AI naturally captures name, email, company and role mid-conversation when intent signals appear, storing each lead with visitor type and a full profile.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <div><div class="cs-feature-title">Visitor Intelligence</div><div class="cs-feature-desc">Each session captures country, city, device, OS, browser, referrer, UTM source and pages visited via IP geolocation, surfaced in a per-lead profile.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div><div class="cs-feature-title">CRM &amp; Automation Hooks</div><div class="cs-feature-desc">Per-tenant HubSpot token and Zapier Catch Hook fire on every lead capture, auto-creating contacts and pushing payloads to 5,000+ downstream apps.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div><div class="cs-feature-title">Tenant Dashboard</div><div class="cs-feature-desc">A multi-page workspace: overview stats, leads with status and CSV export, grouped conversation transcripts, knowledge base, API &amp; usage, embed code and settings.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div><div class="cs-feature-title">Stripe Billing</div><div class="cs-feature-desc">Checkout sessions, signature-verified webhooks for upgrade/downgrade/renewal, and a customer portal — across Starter, Growth and Business plans.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><div class="cs-feature-title">Super Admin Layer</div><div class="cs-feature-desc">Platform-wide oversight: tenant management, cross-tenant leads and conversations, impersonation for support, and team roles with scoped permissions.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From a Blank Page to a Live, Self-Serve AI Chat Product</h2>
    <p class="cs-p">aiDesker reached production as a complete self-serve platform — a business can register, configure its knowledge base, paste an AI key and have a grounded assistant live on its site, while the operator manages every tenant from a single admin console.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">Live</div><div class="cs-result-label">In production</div></div>
      <div class="cs-result"><div class="cs-result-num">3</div><div class="cs-result-label">Self-serve plan tiers</div></div>
      <div class="cs-result"><div class="cs-result-num">100%</div><div class="cs-result-label">Per-tenant data isolation</div></div>
      <div class="cs-result"><div class="cs-result-num">Real-Time</div><div class="cs-result-label">Lead &amp; usage tracking</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"Any business can now have an AI assistant that actually knows their company — live on their site in minutes, on their own AI key, with every lead and conversation captured automatically."</div>
      <div class="cs-quote-author">— iDataOne</div>
    </div>
  </div>
</section>

<!-- Tech Stack -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">How We Built It</div>
    <h2 class="cs-h2">Technology &amp; Approach</h2>
    <div class="cs-grid">
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0f9ff;border:1px solid rgba(14,165,233,0.15)"><svg viewBox="0 0 24 24" stroke="#0ea5e9"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="cs-grid-title">Full-Stack Development</div>
        <div class="cs-grid-desc">Next.js 14 (App Router, Server Components, API routes) front end, Supabase (PostgreSQL) backend, deployed on Vercel with staging and production environments.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="cs-grid-title">Multi-Tenant Isolation</div>
        <div class="cs-grid-desc">Every table is scoped by tenant_id, enforced at the application layer and by Supabase Row Level Security — cross-tenant data access is structurally prevented.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><rect x="3" y="11" width="18" height="11" rx="2"/><circle cx="12" cy="16" r="1"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="cs-grid-title">Secure Key Handling</div>
        <div class="cs-grid-desc">Tenant AI keys are encrypted before storage and decrypted in memory only during server-side calls. JWT auth with bcrypt; separate scoped tokens for tenants and super admins.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div class="cs-grid-title">Provider-Agnostic AI</div>
        <div class="cs-grid-desc">A unified chat proxy abstracts Anthropic and OpenAI behind one interface, with per-tenant model selection and knowledge injected into every system prompt.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></div>
        <div class="cs-grid-title">CI/CD &amp; Test Coverage</div>
        <div class="cs-grid-desc">GitHub Actions pipeline runs API tests against staging and end-to-end tests against production, covering tenant isolation, leads, documents, scrape and billing flows.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fff1f2;border:1px solid rgba(244,63,94,0.15)"><svg viewBox="0 0 24 24" stroke="#f43f5e"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
        <div class="cs-grid-title">Embeddable by Design</div>
        <div class="cs-grid-desc">A dependency-free IIFE widget with CORS handling and a public config endpoint means the assistant drops onto WordPress, Webflow, Shopify, Wix, Squarespace or custom HTML.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Similar <em>Platform?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can build one for your business.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>



<!-- Hover zoom lightbox -->
<div id="hz-overlay" onclick="hzClose()" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0);align-items:center;justify-content:center;transition:background 0.3s ease;cursor:zoom-out">
  <img id="hz-img" src="" alt="" onclick="event.stopPropagation()" style="max-width:92vw;max-height:90vh;border-radius:16px;box-shadow:0 32px 120px rgba(0,0,0,0.7);transform:scale(0.85);opacity:0;transition:transform 0.35s cubic-bezier(0.34,1.56,0.64,1),opacity 0.3s ease;object-fit:contain;cursor:default"/>
</div>
<script>
(function(){
  var ov=document.getElementById('hz-overlay');
  var im=document.getElementById('hz-img');
  var closeTimer=null;

  window.hzOpen=function(src,alt){
    clearTimeout(closeTimer);
    im.src=src; im.alt=alt||'';
    ov.style.display='flex';
    requestAnimationFrame(function(){
      requestAnimationFrame(function(){
        ov.style.background='rgba(0,0,0,0.85)';
        im.style.transform='scale(1)';
        im.style.opacity='1';
      });
    });
  };

  window.hzClose=function(){
    ov.style.background='rgba(0,0,0,0)';
    im.style.transform='scale(0.85)';
    im.style.opacity='0';
    clearTimeout(closeTimer);
    closeTimer=setTimeout(function(){ ov.style.display='none'; },320);
  };

  document.addEventListener('keydown',function(e){
    if(e.key==='Escape') window.hzClose();
  });
})();
</script>
</body>
</html>
