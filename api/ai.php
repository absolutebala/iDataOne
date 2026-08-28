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
<meta property="og:image" content="https://idataone.com/assets/images/og-image.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="AI Integration & Automation Services | iDataOne — Build. Transform. Scale.">
<meta name="twitter:description" content="From AI agents to intelligent workflows, iDataOne integrates AI into your products and operations to improve efficiency, enhance decision-making, and drive business growth.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-image.png">
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
.banner{min-height:100vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 15% 40%,rgba(139,92,246,0.12),transparent 50%),radial-gradient(ellipse at 85% 15%,rgba(167,139,250,0.09),transparent 45%),linear-gradient(145deg,#faf8ff 0%,#f3f0ff 35%,#ede9fe 60%,#f5f3ff 100%)}
.banner::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 15% 50%,rgba(124,58,237,0.15),transparent 55%),radial-gradient(ellipse at 85% 20%,rgba(0,220,255,0.08),transparent 50%);pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#7c3aed;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#1e1b4b;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#7c3aed,#a855f7);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:#4c1d95;line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:#7c3aed;color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1.5px solid rgba(124,58,237,0.35);color:#7c3aed;font-size:14px;font-weight:600;text-decoration:none;background:rgba(124,58,237,0.05);transition:all 0.2s}
.btn-secondary:hover{background:rgba(255,255,255,0.1);transform:translateY(-1px)}
.banner-illus{display:flex;align-items:center;justify-content:center}
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
@media(max-width:768px){.site-nav .nav-links{display:none}.banner-inner{grid-template-columns:1fr}.banner-illus{display:flex;align-items:center;justify-content:center}.stories-grid{grid-template-columns:1fr}.story-card{grid-template-columns:1fr}.story-visual{display:none}.process-steps{flex-direction:column;gap:0;align-items:stretch}.process-steps::before{display:none}.process-step{display:flex;align-items:flex-start;text-align:left;gap:16px;padding:0 0 28px 0;position:relative}.process-step::before{content:"";position:absolute;left:23px;top:48px;bottom:0;width:1px;background:linear-gradient(180deg,rgba(99,102,241,0.3),rgba(124,58,237,0.1))}.process-step:last-child::before{display:none}.process-step:last-child{padding-bottom:0}.step-icon{margin:0;flex-shrink:0}.step-title{margin-bottom:6px}.process-img-wrap{width:100%!important}.process-img-desktop{display:none!important}.process-img-mobile{display:block!important}.products-grid{grid-template-columns:1fr}.cta-card{grid-template-columns:1fr}.cta-btns{align-items:flex-start}}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'ai'; include __DIR__ . '/_nav.php'; ?>

<!-- Banner -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <h1 class="banner-h1">Grow Your<br>Business <em>with AI</em></h1>
      <p class="banner-sub">Automate operations, improve customer experiences, and unlock new opportunities with AI solutions tailored to your business.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Start Your AI Journey <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#stories" class="btn-secondary">View Case Studies <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <img
        src="/assets/images/ai-hero-visual.png"
        alt="iDataOne AI Solutions — AI Agents, LLM Integration, Intelligent Automation and Multi-System Synchronisation"
        style="width:100%;height:auto;display:block;border-radius:24px;box-shadow:0 24px 64px rgba(100,0,200,0.35),0 8px 24px rgba(0,0,0,0.3);transition:transform 0.4s ease,box-shadow 0.4s ease"
        loading="eager"
        onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 32px 80px rgba(120,0,255,0.4),0 12px 32px rgba(0,0,0,0.35)'"
        onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 24px 64px rgba(100,0,200,0.35),0 8px 24px rgba(0,0,0,0.3)'"
      />
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
          <div class="story-desc">We built NivoChat, a conversational AI platform that grounds every response in a business's own knowledge base, captures leads mid-conversation, and runs on the business's own AI key.</div>
          <a href="/case-study/aidesker" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="background:#0d0020;padding:0;overflow:hidden;border-radius:12px">
          <img src="/assets/images/aidesker-hero.png" alt="NivoChat — knowledge-grounded AI chat assistant" style="width:100%;height:100%;min-height:140px;object-fit:cover;object-position:center top;display:block">
        </div>
      </div>

      <div class="story-card" onclick="location.href='/case-study/finance-automation'" style="cursor:pointer">
        <div>
          <div class="story-tag">Automation</div>
          <div class="story-title">Automating Finance Operations Saving 300+ Hours Monthly</div>
          <div class="story-desc">We automated invoice processing, reconciliation and reporting workflows for a finance team, saving over 300 hours per month and eliminating manual errors.</div>
          <a href="/case-study/finance-automation" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e;border-radius:12px">
          <img src="/assets/images/finance-automation-hero.png" alt="Automating finance operations inside Infra360 PMS" style="width:100%;height:100%;min-height:140px;object-fit:cover;object-position:center center;display:block">
        </div>
      </div>

          
      <div class="story-card" onclick="location.href='/case-study/mealmate'" style="cursor:pointer">
        <div>
          <div class="story-tag">Consumer Mobile App</div>
          <div class="story-title">Building an AI-Powered Family Meal Planning App</div>
          <div class="story-desc">We integrated GPT-4o-mini into MealMate, a React Native app, to generate health-aware, personalised meal suggestions for every member of a family.</div>
          <a href="/case-study/mealmate" class="story-link">View Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="story-visual" style="padding:0;overflow:hidden;background:#0a0f1e;border-radius:12px">
          <img src="/assets/images/mealmate-hero.png" alt="MealMate — AI-powered family meal planning app" style="width:100%;height:100%;min-height:140px;object-fit:cover;object-position:center center;display:block">
        </div>
      </div>
</div>
  </div>
</section>

<!-- Process -->
<section class="section process">
  <div class="section-inner">
    <div class="section-tag">Our Process</div>
    <h2 class="section-title">From Idea To Scale</h2>
    <div class="process-img-wrap" style="margin-top:40px;width:80%;margin-left:auto;margin-right:auto;border-radius:20px;overflow:hidden;box-shadow:0 24px 64px rgba(0,0,0,0.35)">
      <img class="process-img-desktop" src="/assets/images/our-process.png" alt="iDataOne Process — Tell us your Idea, We turn it into a plan, Build MVP Fast, Approve &amp; Launch, Evolve" style="width:100%;height:auto;display:block" loading="lazy"/>
      <img class="process-img-mobile" src="/assets/images/our-process-mobile.png" alt="iDataOne Process — Tell us your Idea, We turn it into a plan, Build MVP Fast, Approve &amp; Launch, Evolve" style="width:100%;height:auto;display:none" loading="lazy"/>
    </div>
  </div>
</section>

<!-- Products -->
<section class="section products">
  <div class="section-inner">
    <h2 class="section-title">AI-Powered Products</h2>
    <p class="section-sub">Products we built using the same AI expertise we bring to every client project.</p>
    <div class="products-grid">
      <div class="product-card">
        <div class="product-card-img" style="background:#0a0f1e;padding:0;overflow:hidden">
          <img src="/assets/images/isportone-hero.png" alt="iSportOne — your lifelong sports identity" style="width:100%;height:160px;object-fit:cover;display:block"/>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">iSportOne</div>
          <div class="product-card-desc">Your sport. Your story. Forever. Record every match, build your career profile and connect with your sports community — for life.</div>
          <a href="/isportone" class="product-card-link">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-card-img" style="background:#0d0020;padding:0;overflow:hidden">
          <img src="/assets/images/aidesker-hero.png" alt="NivoChat" style="width:100%;height:160px;object-fit:cover;object-position:center top;display:block"/>
        </div>
        <div class="product-card-body">
          <div class="product-card-title">NivoChat</div>
          <div class="product-card-desc">AI-powered desk assistant for businesses. Automates workflows, handles queries and keeps your team productive around the clock.</div>
          <a href="/case-study/aidesker" class="product-card-link">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-card-img" style="background:#0a0f1e;padding:0;overflow:hidden">
          <img src="/assets/images/mealmate-hero.png" alt="MealMate — AI-powered family meal planning app" style="width:100%;height:160px;object-fit:cover;display:block">
        </div>
        <div class="product-card-body">
          <div class="product-card-title">MealMate</div>
          <div class="product-card-desc">AI-powered family meal planning. Personalised, health-aware meal suggestions for every member of the family — built for everyday use.</div>
          <a href="/case-study/mealmate" class="product-card-link">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
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
