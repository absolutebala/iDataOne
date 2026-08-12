<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: AI-Powered Family Meal Planning App | iDataOne</title>
<meta name="description" content="How iDataOne built MealMate, an AI-powered React Native app that delivers health-aware, personalised meal suggestions for every member of a family.">
<meta name="keywords" content="family meal planning app, AI meal suggestions, React Native app, health-aware nutrition app, Supabase mobile app, GPT-4 meal planner, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/mealmate">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: AI-Powered Family Meal Planning App | iDataOne">
<meta property="og:description" content="How iDataOne built MealMate, an AI-powered React Native app that delivers health-aware, personalised meal suggestions for every member of a family.">
<meta property="og:url" content="https://idataone.com/case-study/mealmate">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: AI-Powered Family Meal Planning App | iDataOne">
<meta name="twitter:description" content="How iDataOne built MealMate, an AI-powered React Native app that delivers health-aware, personalised meal suggestions for every member of a family.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Building an AI-Powered Family Meal Planning App",
  "description": "How iDataOne designed and built MealMate, a React Native app that delivers personalised, health-aware meal suggestions for every member of a family — powered by AI and built for everyday use.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
  "url": "https://idataone.com/case-study/mealmate",
  "mainEntityOfPage": "https://idataone.com/case-study/mealmate",
  "about": [
    {"@type": "Thing", "name": "AI Meal Planning"},
    {"@type": "Thing", "name": "React Native Mobile App"},
    {"@type": "Thing", "name": "Family Health Technology"}
  ],
  "keywords": "AI meal planning app, React Native, GPT-4o-mini, family nutrition, Supabase mobile app"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(234,88,12,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(249,115,22,0.08),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#fff7ed 45%,#ffedd5 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(217,119,6,0.15),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(245,158,11,0.12),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#ea580c;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#ea580c,#f97316);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#d97706;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#fffbeb;border:1px solid rgba(217,119,6,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#d97706;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#fffbeb,#fef3c7)}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 12px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:20px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#d97706,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:11.5px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #d97706;background:#fffbeb;border-radius:0 16px 16px 0}
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
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(217,119,6,0.18),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#fbbf24,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#d97706,#f59e0b);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}
@media(max-width:768px){
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
    <div class="cs-badge">Digital Products · Consumer Mobile App</div>
    <h1 class="cs-hero-title">Building an AI-Powered Family Meal Planning App</h1>
    <p class="cs-hero-sub">How we designed and built MealMate, a React Native app that delivers personalised, health-aware meal suggestions for every member of a family — powered by AI and built for everyday use.</p>
    <div class="cs-hero-stats">
      <div class="cs-stat"><div class="cs-stat-num"><span>4</span></div><div class="cs-stat-label">Meal Types — Breakfast, Lunch, Dinner, Snack</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>2</span></div><div class="cs-stat-label">Sign-In Methods — Google, Apple</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>AI</span></div><div class="cs-stat-label">Powered by GPT-4o-mini</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>iOS &amp; Android</span></div><div class="cs-stat-label">Cross-Platform</div></div>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">One Family, Many Diets — One Daily Question Nobody Could Answer Easily</h2>
    <p class="cs-p">Every household with more than one person knows the friction — deciding what to cook when family members have different dietary needs, health conditions and tastes. A diabetic parent, a child who's a picky eater, someone watching their weight — generic recipe apps don't account for any of it.</p>
    <p class="cs-p">There was no app that treated the family, not the individual, as the unit of meal planning — one that could understand each member's health profile and suggest a single meal that worked for everyone at the table.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Family-Aware AI Meal Planner</h2>
    <p class="cs-p">We designed and built MealMate from the ground up — a mobile app where every suggestion is generated specifically for the signed-in user's actual family, using their real names, ages, health conditions and food preferences.</p>

    <div class="cs-visual">
      <svg viewBox="0 0 480 380" width="480" height="380" xmlns="http://www.w3.org/2000/svg">
        <rect x="140" y="10" width="200" height="360" rx="28" fill="rgba(255,255,255,0.95)" stroke="rgba(217,119,6,0.2)" stroke-width="2"/>
        <rect x="150" y="34" width="180" height="316" rx="14" fill="rgba(255,251,235,0.5)"/>
        <rect x="205" y="20" width="70" height="6" rx="3" fill="rgba(217,119,6,0.2)"/>
        <rect x="166" y="50" width="148" height="34" rx="10" fill="rgba(245,158,11,0.1)" stroke="rgba(217,119,6,0.18)" stroke-width="1"/>
        <circle cx="184" cy="67" r="10" fill="rgba(217,119,6,0.25)"/>
        <rect x="202" y="60" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="202" y="71" width="56" height="5" rx="2.5" fill="rgba(217,119,6,0.3)"/>
        <rect x="166" y="94" width="148" height="60" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <rect x="176" y="104" width="50" height="5" rx="2.5" fill="rgba(217,119,6,0.3)"/>
        <rect x="176" y="116" width="128" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="176" y="126" width="100" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
        <rect x="176" y="138" width="60" height="10" rx="5" fill="rgba(217,119,6,0.2)"/>
        <rect x="166" y="162" width="70" height="60" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <circle cx="201" cy="184" r="14" fill="rgba(245,158,11,0.15)"/>
        <rect x="176" y="204" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="244" y="162" width="70" height="60" rx="10" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
        <circle cx="279" cy="184" r="14" fill="rgba(20,184,166,0.15)"/>
        <rect x="254" y="204" width="50" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="166" y="232" width="148" height="48" rx="10" fill="rgba(245,158,11,0.08)" stroke="rgba(217,119,6,0.18)" stroke-width="1"/>
        <rect x="176" y="242" width="60" height="5" rx="2.5" fill="rgba(217,119,6,0.3)"/>
        <rect x="176" y="254" width="128" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
        <rect x="176" y="263" width="90" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
        <rect x="166" y="290" width="148" height="40" rx="20" fill="rgba(217,119,6,0.85)"/>
        <rect x="200" y="304" width="80" height="6" rx="3" fill="rgba(255,255,255,0.9)"/>
        <rect x="166" y="338" width="148" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
        <circle cx="50" cy="100" r="34" fill="rgba(217,119,6,0.1)" stroke="rgba(217,119,6,0.25)" stroke-width="1.5"/>
        <circle cx="50" cy="88" r="13" fill="rgba(217,119,6,0.2)"/>
        <rect x="20" y="146" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <circle cx="50" cy="220" r="30" fill="rgba(20,184,166,0.1)" stroke="rgba(20,184,166,0.25)" stroke-width="1.5"/>
        <circle cx="50" cy="210" r="11" fill="rgba(20,184,166,0.2)"/>
        <rect x="24" y="260" width="52" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <circle cx="424" cy="140" r="32" fill="rgba(245,158,11,0.1)" stroke="rgba(245,158,11,0.25)" stroke-width="1.5"/>
        <circle cx="424" cy="129" r="12" fill="rgba(245,158,11,0.2)"/>
        <rect x="396" y="182" width="56" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
      </svg>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div><div class="cs-feature-title">AI-Personalised Suggestions</div><div class="cs-feature-desc">GPT-4o-mini generates breakfast, lunch, dinner and snack ideas tailored to time of day, family health conditions and regional cuisine — with a "why for your family" explanation.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><div class="cs-feature-title">Health-Aware Meal Logic</div><div class="cs-feature-desc">Built-in dietary rules ensure diabetic-friendly, weight-loss-friendly and child-friendly suggestions — avoiding high-GI foods and overly spicy meals where appropriate.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Family Profile Management</div><div class="cs-feature-desc">Each family member is added with role, age, diet type and health conditions, stored securely with row-level security so only the account owner sees their data.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div><div class="cs-feature-title">Multi-Cuisine Personalisation</div><div class="cs-feature-desc">Users select cuisine preferences — South Indian, North Indian, Chinese and more — and suggestions rotate, while respecting explicit one-off requests.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div><div class="cs-feature-title">Conversational Meal Requests</div><div class="cs-feature-desc">A built-in chat lets users ask for specific requests in natural language, with the AI overriding default preferences when the user is explicit.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div><div class="cs-feature-title">Health & History Tracking</div><div class="cs-feature-desc">A "Score" tab tracks weekly nutrition trends, while a History tab logs previously cooked meals for a long-term view of what families actually eat.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From an Idea to a Published, Cross-Platform App</h2>
    <p class="cs-p">MealMate went from concept to a live, published mobile application — with a guided onboarding experience and secure, real-time data sync across devices.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">Live</div><div class="cs-result-label">on Google Play Store</div></div>
      <div class="cs-result"><div class="cs-result-num">5-Step</div><div class="cs-result-label">Guided family onboarding</div></div>
      <div class="cs-result"><div class="cs-result-num">Multi-<br>Provider</div><div class="cs-result-label">Google &amp; Apple Sign-In</div></div>
      <div class="cs-result"><div class="cs-result-num">Real-Time</div><div class="cs-result-label">Supabase-backed sync</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"MealMate solved a problem we didn't even realise was costing us 30 minutes every day deciding what to cook."</div>
      <div class="cs-quote-author">— MealMate User</div>
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
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg></div>
        <div class="cs-grid-title">Full-Stack Mobile Development</div>
        <div class="cs-grid-desc">React Native (Expo SDK 54) front end with Supabase (PostgreSQL) backend for authentication and data storage, distributed via EAS Build.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div class="cs-grid-title">AI Integration</div>
        <div class="cs-grid-desc">OpenAI GPT-4o-mini for meal generation, with carefully engineered prompts enforcing health rules and strict use of real family member names — never invented data.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="cs-grid-title">Secure, Row-Level Data Access</div>
        <div class="cs-grid-desc">Supabase Row Level Security ensures each user can only access their own family's profile, health data and meal history.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg></div>
        <div class="cs-grid-title">OAuth Identity</div>
        <div class="cs-grid-desc">Native Google and Apple Sign-In with custom redirect schemes configured for a branded, frictionless login experience.</div>
      </div>
      <div class="cs-grid-card" style="grid-column:1/-1">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></div>
        <div class="cs-grid-title">Resilient Onboarding Flow</div>
        <div class="cs-grid-desc">Instant local state updates on onboarding completion, with background database sync — eliminating loading delays for new users setting up their family profile.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Similar <em>App?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can build one for your product.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
