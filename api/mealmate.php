<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MealMate What Should We Cook Tonight?</title>
<link rel="icon" type="image/png" href="/assets/images/mealmate-icon.png">
<meta name="description" content="MealMate answers the question every family asks daily what should we cook? AI-powered meal planning and smart food suggestions for effortless family mealtimes.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --purple:#8b21e8;
  --pink:#e8217a;
  --grad:linear-gradient(135deg,#8b21e8,#c4216e,#e8217a);
  --grad-soft:linear-gradient(135deg,rgba(139,33,232,0.08),rgba(232,33,122,0.06));
  --dark:#0d0a14;
  --text:#1a1025;
  --muted:#6b5f78;
  --light:#faf8fc;
}

html{scroll-behavior:smooth}
body{font-family:'DM Sans',sans-serif;color:var(--text);background:var(--light);overflow-x:hidden}

/* ── Hero ── */
/* Nav */
.top-nav-link{position:fixed;top:16px;left:24px;z-index:100;text-decoration:none;display:block}
.top-nav-link:hover img{opacity:1!important}

.hero{
  min-height:100vh;
  position:relative;
  display:flex;
  align-items:center;
  justify-content:center;
  overflow:hidden;
  background:var(--dark);
}

/* Animated mesh gradient */
.hero-bg{
  position:absolute;
  inset:0;
  background:
    radial-gradient(ellipse at 20% 50%, rgba(139,33,232,0.5) 0%, transparent 50%),
    radial-gradient(ellipse at 80% 20%, rgba(232,33,122,0.4) 0%, transparent 50%),
    radial-gradient(ellipse at 60% 80%, rgba(196,33,110,0.3) 0%, transparent 50%),
    #0d0a14;
  animation:meshShift 12s ease-in-out infinite alternate;
}
@keyframes meshShift{
  0%{filter:hue-rotate(0deg) brightness(1)}
  100%{filter:hue-rotate(15deg) brightness(1.1)}
}

/* Grain overlay */
.hero-grain{
  position:absolute;
  inset:0;
  opacity:0.04;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
  pointer-events:none;
}

.hero-inner{
  position:relative;
  z-index:2;
  text-align:center;
  padding:40px 24px;
  max-width:800px;
}

/* App icon */
.app-icon{
  width:96px;
  height:96px;
  border-radius:22px;
  margin:0 auto 32px;
  display:block;
  box-shadow:0 24px 60px rgba(139,33,232,0.5),0 8px 20px rgba(0,0,0,0.4);
  animation:iconFloat 4s ease-in-out infinite;
}
@keyframes iconFloat{
  0%,100%{transform:translateY(0) rotate(-1deg)}
  50%{transform:translateY(-10px) rotate(1deg)}
}

.hero-tag{
  display:inline-block;
  padding:6px 16px;
  border-radius:999px;
  border:1px solid rgba(255,255,255,0.15);
  background:rgba(255,255,255,0.06);
  font-size:12px;
  font-weight:500;
  letter-spacing:2px;
  text-transform:uppercase;
  color:rgba(255,255,255,0.6);
  margin-bottom:28px;
  backdrop-filter:blur(8px);
}

.hero-q{
  font-family:'Sora',sans-serif;
  font-size:clamp(36px,7vw,72px);
  font-weight:800;
  line-height:1.05;
  letter-spacing:-2px;
  color:#fff;
  margin-bottom:12px;
  animation:fadeUp 0.8s ease both;
}

.hero-q .grad-text{
  background:var(--grad);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  background-clip:text;
}

.hero-sub{
  font-size:18px;
  font-weight:300;
  color:rgba(255,255,255,0.55);
  line-height:1.7;
  margin-bottom:48px;
  max-width:520px;
  margin-left:auto;
  margin-right:auto;
  animation:fadeUp 0.8s ease 0.15s both;
}

/* CTA buttons */
.cta-row{
  display:flex;
  gap:12px;
  justify-content:center;
  flex-wrap:wrap;
  margin-bottom:64px;
  animation:fadeUp 0.8s ease 0.3s both;
}

.btn-primary{
  display:inline-flex;
  align-items:center;
  gap:10px;
  padding:16px 28px;
  border-radius:14px;
  background:var(--grad);
  color:#fff;
  font-family:'Sora',sans-serif;
  font-size:15px;
  font-weight:600;
  text-decoration:none;
  letter-spacing:0.2px;
  box-shadow:0 8px 32px rgba(139,33,232,0.4);
  transition:transform 0.2s,box-shadow 0.2s;
}
.btn-primary:hover{transform:translateY(-2px);box-shadow:0 14px 40px rgba(139,33,232,0.5)}
.btn-primary svg{width:18px;height:18px;fill:#fff}

.btn-secondary{
  display:inline-flex;
  align-items:center;
  gap:10px;
  padding:16px 28px;
  border-radius:14px;
  border:1px solid rgba(255,255,255,0.2);
  background:rgba(255,255,255,0.06);
  color:rgba(255,255,255,0.85);
  font-family:'Sora',sans-serif;
  font-size:15px;
  font-weight:500;
  text-decoration:none;
  backdrop-filter:blur(8px);
  transition:background 0.2s,transform 0.2s;
}
.btn-secondary:hover{background:rgba(255,255,255,0.1);transform:translateY(-2px)}
.btn-secondary svg{width:18px;height:18px;fill:rgba(255,255,255,0.85)}

/* Floating AI chat bubble */
.ai-bubble{
  display:inline-flex;
  align-items:center;
  gap:12px;
  background:rgba(255,255,255,0.07);
  border:1px solid rgba(255,255,255,0.12);
  border-radius:16px;
  padding:14px 20px;
  backdrop-filter:blur(12px);
  animation:fadeUp 0.8s ease 0.45s both;
}
.ai-dot{
  width:8px;height:8px;
  border-radius:50%;
  background:var(--grad);
  animation:pulse 2s ease-in-out infinite;
  flex-shrink:0;
}
@keyframes pulse{
  0%,100%{box-shadow:0 0 0 0 rgba(139,33,232,0.6)}
  50%{box-shadow:0 0 0 6px rgba(139,33,232,0)}
}
.ai-bubble-text{
  font-size:14px;
  color:rgba(255,255,255,0.7);
  font-style:italic;
}
.ai-bubble-text strong{
  color:#fff;
  font-style:normal;
  font-weight:600;
}

/* Scroll indicator */
.scroll-hint{
  position:absolute;
  bottom:32px;
  left:50%;
  transform:translateX(-50%);
  color:rgba(255,255,255,0.3);
  font-size:11px;
  letter-spacing:3px;
  text-transform:uppercase;
  animation:bounceDown 2s ease-in-out infinite;
}
@keyframes bounceDown{
  0%,100%{transform:translateX(-50%) translateY(0)}
  50%{transform:translateX(-50%) translateY(6px)}
}

/* ── The Problem Section ── */
.problem{
  padding:100px 24px;
  text-align:center;
  background:#fff;
  position:relative;
  overflow:hidden;
}
.problem::before{
  content:"";
  position:absolute;
  top:-200px;left:50%;
  transform:translateX(-50%);
  width:600px;height:400px;
  background:radial-gradient(ellipse,rgba(139,33,232,0.06),transparent 70%);
  pointer-events:none;
}
.section-tag{
  display:inline-block;
  padding:5px 14px;
  border-radius:999px;
  background:var(--grad-soft);
  border:1px solid rgba(139,33,232,0.15);
  font-size:11px;
  font-weight:600;
  letter-spacing:3px;
  text-transform:uppercase;
  color:var(--purple);
  margin-bottom:24px;
}
.section-title{
  font-family:'Sora',sans-serif;
  font-size:clamp(28px,4vw,48px);
  font-weight:800;
  letter-spacing:-1.5px;
  line-height:1.1;
  color:var(--text);
  margin-bottom:16px;
}
.section-title .grad-text{
  background:var(--grad);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  background-clip:text;
}
.section-sub{
  font-size:17px;
  color:var(--muted);
  line-height:1.75;
  max-width:560px;
  margin:0 auto 56px;
}

/* Daily dilemma cards */
.dilemma-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:20px;
  max-width:900px;
  margin:0 auto;
}
.dilemma-card{
  background:var(--light);
  border:1px solid rgba(139,33,232,0.08);
  border-radius:20px;
  padding:28px 24px;
  text-align:left;
  position:relative;
  overflow:hidden;
  transition:transform 0.3s,box-shadow 0.3s;
}
.dilemma-card:hover{transform:translateY(-4px);box-shadow:0 20px 48px rgba(139,33,232,0.1)}
.dilemma-emoji{font-size:32px;margin-bottom:14px;display:block}
.dilemma-q{
  font-family:'Sora',sans-serif;
  font-size:16px;
  font-weight:700;
  color:var(--text);
  margin-bottom:8px;
  line-height:1.3;
}
.dilemma-p{font-size:13px;color:var(--muted);line-height:1.6}

/* ── Features ── */
.features{
  padding:100px 24px;
  background:var(--dark);
  position:relative;
  overflow:hidden;
}
.features::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    radial-gradient(ellipse at 0% 50%, rgba(139,33,232,0.15) 0%, transparent 50%),
    radial-gradient(ellipse at 100% 50%, rgba(232,33,122,0.12) 0%, transparent 50%);
  pointer-events:none;
}
.features-inner{max-width:1000px;margin:0 auto;position:relative;z-index:1}
.features-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:20px;
  margin-top:56px;
}
.feat-card{
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(255,255,255,0.08);
  border-radius:20px;
  padding:32px 28px;
  transition:background 0.3s,border-color 0.3s;
}
.feat-card:hover{background:rgba(255,255,255,0.07);border-color:rgba(139,33,232,0.3)}
.feat-icon{
  width:48px;height:48px;
  border-radius:14px;
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:18px;
  font-size:22px;
}
.feat-icon.purple{background:rgba(139,33,232,0.2)}
.feat-icon.pink{background:rgba(232,33,122,0.2)}
.feat-icon.teal{background:rgba(20,184,166,0.2)}
.feat-icon.amber{background:rgba(245,158,11,0.2)}
.feat-title{
  font-family:'Sora',sans-serif;
  font-size:18px;
  font-weight:700;
  color:#fff;
  margin-bottom:8px;
  letter-spacing:-0.3px;
}
.feat-desc{font-size:14px;color:rgba(255,255,255,0.45);line-height:1.7}

/* ── How it works ── */
.how{
  padding:100px 24px;
  background:#fff;
  text-align:center;
}
.steps{
  display:flex;
  gap:0;
  max-width:800px;
  margin:56px auto 0;
  position:relative;
}
.steps::before{
  content:"";
  position:absolute;
  top:28px;left:80px;right:80px;
  height:1px;
  background:linear-gradient(90deg,rgba(139,33,232,0.2),rgba(232,33,122,0.2));
}
.step{
  flex:1;
  text-align:center;
  padding:0 16px;
}
.step-num{
  width:56px;height:56px;
  border-radius:50%;
  background:var(--grad);
  color:#fff;
  font-family:'Sora',sans-serif;
  font-size:18px;
  font-weight:700;
  display:flex;
  align-items:center;
  justify-content:center;
  margin:0 auto 20px;
  box-shadow:0 8px 24px rgba(139,33,232,0.3);
  position:relative;
  z-index:1;
}
.step-title{
  font-family:'Sora',sans-serif;
  font-size:15px;
  font-weight:700;
  color:var(--text);
  margin-bottom:6px;
}
.step-desc{font-size:13px;color:var(--muted);line-height:1.6}

/* ── Audience ── */
.audience{
  padding:100px 24px;
  background:var(--light);
  text-align:center;
}
.audience-grid{
  display:flex;
  gap:16px;
  justify-content:center;
  flex-wrap:wrap;
  max-width:700px;
  margin:48px auto 0;
}
.aud-pill{
  display:flex;
  align-items:center;
  gap:10px;
  padding:14px 20px;
  border-radius:999px;
  background:#fff;
  border:1px solid rgba(139,33,232,0.12);
  font-size:14px;
  font-weight:500;
  color:var(--text);
  box-shadow:0 2px 12px rgba(139,33,232,0.06);
  transition:transform 0.2s,box-shadow 0.2s;
}
.aud-pill:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(139,33,232,0.12)}
.aud-emoji{font-size:20px}

/* ── CTA Section ── */
.cta-section{
  padding:100px 24px;
  background:var(--dark);
  text-align:center;
  position:relative;
  overflow:hidden;
}
.cta-section::before{
  content:"";
  position:absolute;
  inset:0;
  background:radial-gradient(ellipse at 50% 50%,rgba(139,33,232,0.25),transparent 65%);
  pointer-events:none;
}
.cta-section .hero-tag{margin-bottom:24px}
.cta-section .hero-q{font-size:clamp(28px,5vw,52px);margin-bottom:16px}
.cta-section .hero-sub{font-size:16px;margin-bottom:40px}

/* ── Footer ── */
.footer{
  background:var(--dark);
  border-top:1px solid rgba(255,255,255,0.06);
  padding:32px 24px;
  text-align:center;
}
.footer-links{display:flex;gap:24px;justify-content:center;margin-bottom:16px}
.footer-links a{font-size:13px;color:rgba(255,255,255,0.35);text-decoration:none;transition:color 0.2s}
.footer-links a:hover{color:rgba(255,255,255,0.7)}
.footer-copy{font-size:12px;color:rgba(255,255,255,0.2)}

/* ── Animations ── */
@keyframes fadeUp{
  from{opacity:0;transform:translateY(24px)}
  to{opacity:1;transform:translateY(0)}
}

/* ── Responsive ── */
@media(max-width:768px){
  .dilemma-grid{grid-template-columns:1fr;max-width:400px}
  .features-grid{grid-template-columns:1fr}
  .steps{flex-direction:column;gap:32px}
  .steps::before{display:none}
  .hero-q{letter-spacing:-1px}
  .cta-row{flex-direction:column;align-items:center}
  .btn-primary,.btn-secondary{width:100%;max-width:300px;justify-content:center}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<!-- ── Hero ── -->
<a href="https://idataone.com" class="top-nav-link">
  <img src="/assets/images/iDataOneLogoFinal.png" alt="iDataOne" style="height:32px;width:auto;opacity:0.9;display:block">
</a>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grain"></div>
  <div class="hero-inner">
    <img src="/assets/images/mealmate-icon.png" alt="MealMate" class="app-icon">
    <div class="hero-tag">AI-Powered Meal Planning</div>
    <h1 class="hero-q">
      "What should we<br>cook <span class="grad-text">tonight?</span>"
    </h1>
    <p class="hero-sub">The question every family asks daily finally answered. MealMate plans your meals, suggests recipes and makes family mealtimes effortless.</p>
    <div class="cta-row">
      <a href="#" class="btn-primary">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
        Download on App Store
      </a>
      <a href="#" class="btn-secondary">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3.18 23.76c.3.17.64.22.97.15l13.1-7.56-2.9-2.9-11.17 10.31zm-1.7-20.3C1.18 3.9 1 4.4 1 5v14c0 .6.18 1.1.48 1.54l.08.08 7.84-7.84v-.18L1.48 3.46zm18.52 8.35l-2.66-1.53-3.16 3.16 3.16 3.16 2.68-1.55c.76-.44.76-1.8-.02-2.24zM4.15.24L17.25 7.8l-2.9 2.9L4.15.24C4.48-.09 4.99-.08 5.35.11z"/></svg>
        Get it on Google Play
      </a>
    </div>
    <div class="ai-bubble">
      <div class="ai-dot"></div>
      <div class="ai-bubble-text">MealMate suggests: <strong>"Try a quick Thai basil stir-fry 20 mins, uses what's in your fridge."</strong></div>
    </div>
  </div>
  <div class="scroll-hint">scroll ↓</div>
</section>

<!-- ── Problem ── -->
<section class="problem">
  <div class="section-tag">The Daily Struggle</div>
  <h2 class="section-title">Sound familiar?</h2>
  <p class="section-sub">Every day, millions of families face the same exhausting question and end up ordering takeout just to avoid answering it.</p>
  <div class="dilemma-grid">
    <div class="dilemma-card">
      <span class="dilemma-emoji">😩</span>
      <div class="dilemma-q">"What should I cook tonight?"</div>
      <div class="dilemma-p">You've been asking this every single day and you're tired of the same five answers.</div>
    </div>
    <div class="dilemma-card">
      <span class="dilemma-emoji">🛒</span>
      <div class="dilemma-q">"I have ingredients but no idea what to make."</div>
      <div class="dilemma-p">Half your fridge goes to waste because you cannot figure out what goes with what.</div>
    </div>
    <div class="dilemma-card">
      <span class="dilemma-emoji">👨‍👩‍👧</span>
      <div class="dilemma-q">"Everyone wants something different."</div>
      <div class="dilemma-p">Pleasing picky eaters while juggling dietary needs and preferences all at once feels impossible.</div>
    </div>
  </div>
</section>

<!-- ── Features ── -->
<section class="features">
  <div class="features-inner">
    <div style="text-align:center">
      <div class="section-tag" style="border-color:rgba(139,33,232,0.3);background:rgba(139,33,232,0.12);color:#c084fc">What MealMate Does</div>
      <h2 class="section-title" style="color:#fff">Your AI kitchen<br><span class="grad-text">companion</span></h2>
      <p class="section-sub" style="color:rgba(255,255,255,0.45)">Smart, personal, and always ready MealMate takes the stress out of every mealtime.</p>
    </div>
    <div class="features-grid">
      <div class="feat-card">
        <div class="feat-icon purple">🤖</div>
        <div class="feat-title">AI Meal Suggestions</div>
        <div class="feat-desc">Just tell MealMate what's in your fridge, your mood, or how much time you have and get instant personalised recipe ideas.</div>
      </div>
      <div class="feat-card">
        <div class="feat-icon pink">📅</div>
        <div class="feat-title">Weekly Meal Planning</div>
        <div class="feat-desc">Plan the whole week in minutes. MealMate balances nutrition, variety and your family preferences automatically.</div>
      </div>
      <div class="feat-card">
        <div class="feat-icon teal">🛒</div>
        <div class="feat-title">Smart Grocery Lists</div>
        <div class="feat-desc">Your meal plan automatically generates a smart shopping list organised by aisle, no duplicates, nothing forgotten.</div>
      </div>
      <div class="feat-card">
        <div class="feat-icon amber">👨‍👩‍👧‍👦</div>
        <div class="feat-title">Family Preferences</div>
        <div class="feat-desc">Add each family member dietary needs, allergies and favourite foods. MealMate finds meals everyone will love.</div>
      </div>
    </div>
  </div>
</section>

<!-- ── How it works ── -->
<section class="how">
  <div class="section-tag">Simple as 1-2-3</div>
  <h2 class="section-title">How MealMate works</h2>
  <p class="section-sub">From question to kitchen in under a minute.</p>
  <div class="steps">
    <div class="step">
      <div class="step-num">1</div>
      <div class="step-title">Tell MealMate</div>
      <div class="step-desc">What's in your fridge, your mood, time available, or just ask "what should I cook?"</div>
    </div>
    <div class="step">
      <div class="step-num">2</div>
      <div class="step-title">Get Suggestions</div>
      <div class="step-desc">AI instantly suggests personalised meals tailored to your family tastes and needs.</div>
    </div>
    <div class="step">
      <div class="step-num">3</div>
      <div class="step-title">Cook & Enjoy</div>
      <div class="step-desc">Follow the recipe, tick off your shopping list, and enjoy stress-free mealtimes.</div>
    </div>
  </div>
</section>

<!-- ── Audience ── -->
<section class="audience">
  <div class="section-tag">Made For</div>
  <h2 class="section-title">MealMate is for <span class="grad-text">everyone</span></h2>
  <p class="section-sub">Whether you're a busy parent, a health-conscious professional, or just tired of deciding MealMate has you covered.</p>
  <div class="audience-grid">
    <div class="aud-pill"><span class="aud-emoji">👩‍👧‍👦</span> Busy Parents</div>
    <div class="aud-pill"><span class="aud-emoji">💪</span> Health Enthusiasts</div>
    <div class="aud-pill"><span class="aud-emoji">👨‍💼</span> Working Professionals</div>
    <div class="aud-pill"><span class="aud-emoji">🥗</span> Dietary Planners</div>
    <div class="aud-pill"><span class="aud-emoji">👴👵</span> Empty Nesters</div>
    <div class="aud-pill"><span class="aud-emoji">🧑‍🍳</span> Home Cooks</div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="cta-section">
  <div style="position:relative;z-index:1;max-width:600px;margin:0 auto">
    <img src="/assets/images/mealmate-icon.png" alt="MealMate" style="width:72px;border-radius:16px;margin:0 auto 28px;display:block;box-shadow:0 16px 40px rgba(139,33,232,0.4)">
    <div class="hero-tag">Available Soon</div>
    <h2 class="hero-q">Never answer<br><span class="grad-text">"what to cook?"</span><br>alone again.</h2>
    <p class="hero-sub">Download MealMate and let AI handle the daily stress of meal planning for your family.</p>
    <div class="cta-row">
      <a href="#" class="btn-primary">
        <svg viewBox="0 0 24 24" fill="white"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
        App Store
      </a>
      <a href="#" class="btn-secondary">
        <svg viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M3.18 23.76c.3.17.64.22.97.15l13.1-7.56-2.9-2.9-11.17 10.31zm-1.7-20.3C1.18 3.9 1 4.4 1 5v14c0 .6.18 1.1.48 1.54l.08.08 7.84-7.84v-.18L1.48 3.46zm18.52 8.35l-2.66-1.53-3.16 3.16 3.16 3.16 2.68-1.55c.76-.44.76-1.8-.02-2.24zM4.15.24L17.25 7.8l-2.9 2.9L4.15.24C4.48-.09 4.99-.08 5.35.11z"/></svg>
        Google Play
      </a>
    </div>
  </div>
</section>

<!-- ── Footer ── -->
<footer class="footer">
  <div class="footer-links">
    <a href="/mealmate/privacy.html">Privacy Policy</a>
    <a href="https://idataone.com">iDataOne</a>
    <a href="mailto:info@idataone.com">Contact</a>
  </div>
  <div class="footer-copy">© <?php echo date('Y'); ?> iDataOne. All rights reserved. MealMate is coming soon.</div>
</footer>

<script src="https://nivochat.idataone.com/widget.js?id=837d7fc7-cd93-437c-957d-9a7dbbab4214" async></script>

</body>
</html>
