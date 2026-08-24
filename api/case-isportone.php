<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: A Lifelong Sports Passport Platform for Athletes of Every Level | iDataOne</title>
<meta name="description" content="How iDataOne is designing iSportOne, a sports professional network combining a lifelong sports passport, community feed, and club management platform for athletes, parents, coaches, and clubs — globally.">
<meta name="keywords" content="sports platform development, sports passport app, athlete profile platform, club management software, sports social network, sports tech product design, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/isportone">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: A Lifelong Sports Passport Platform for Athletes of Every Level | iDataOne">
<meta property="og:description" content="How iDataOne is designing iSportOne, a sports professional network combining a lifelong sports passport, community feed, and club management platform for athletes, parents, coaches, and clubs — globally.">
<meta property="og:url" content="https://idataone.com/case-study/isportone">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: A Lifelong Sports Passport Platform for Athletes of Every Level | iDataOne">
<meta name="twitter:description" content="How iDataOne is designing iSportOne, a sports professional network combining a lifelong sports passport, community feed, and club management platform for athletes, parents, coaches, and clubs — globally.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Building iSportOne: A Lifelong Sports Passport for Every Athlete, Everywhere",
  "description": "How iDataOne is designing iSportOne, a sports professional network combining a lifelong sports passport, community feed, and club management platform for athletes, parents, coaches, and clubs.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
  "url": "https://idataone.com/case-study/isportone",
  "mainEntityOfPage": "https://idataone.com/case-study/isportone",
  "about": [
    {"@type": "Thing", "name": "Sports Technology Platform"},
    {"@type": "Thing", "name": "Athlete Profile Management"},
    {"@type": "Thing", "name": "Club Management Software"}
  ],
  "keywords": "sports passport platform, athlete career record, club management, sports social network, product design"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(244,63,94,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(251,113,133,0.08),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#fff1f2 45%,#ffe4e6 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(244,63,94,0.15),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(251,113,133,0.12),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.cs-hero-img{display:flex;align-items:center;justify-content:center}
.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(244,63,94,0.18),0 8px 24px rgba(15,23,42,0.12);transition:transform 0.4s ease;cursor:zoom-in}
.cs-hero-img img:hover{transform:translateY(-4px)}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#f43f5e;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:20px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:560px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#f43f5e,#fb7185);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#f43f5e;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#fff1f2;border:1px solid rgba(244,63,94,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#f43f5e;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#fff1f2,#ffe4e6)}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 12px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:22px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#f43f5e,#fb7185);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:11.5px;color:#94a3b8;margin-top:4px;line-height:1.4}
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #f43f5e;background:#fff1f2;border-radius:0 16px 16px 0}
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
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(244,63,94,0.18),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#fb7185,#fda4af);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#f43f5e,#fb7185);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
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
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- Hero -->
<section class="cs-hero">
  <div class="cs-hero-inner">
    <div>
      <h1 class="cs-hero-title">Building iSportOne: A Lifelong Sports Passport for Every Athlete, Everywhere</h1>
      <p class="cs-hero-sub">How we're designing a professional network for sport — where competitive and recreational athletes alike build a permanent career record, clubs manage their communities, and parents follow their children's sporting journey safely.</p>
      <div class="cs-hero-stats">
        <div class="cs-stat"><div class="cs-stat-num"><span>4</span></div><div class="cs-stat-label">User Roles — Athlete, Parent, Coach, Club Admin</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>3</span></div><div class="cs-stat-label">Revenue Streams</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>All Ages</span></div><div class="cs-stat-label">Junior to Veteran</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>Global</span></div><div class="cs-stat-label">All Sports, All Countries</div></div>
      </div>
    </div>
    <div class="cs-hero-img">
      <img src="/assets/images/isportone-hero.png" alt="iSportOne — a lifelong sports identity connecting an athlete's stats, achievements, teams, coaches and career history, forever" onmouseover="hzOpen(this.src,this.alt)">
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Sports Careers Live Nowhere — Especially Outside the Pros</h2>
    <p class="cs-p">Millions of athletes — from weekend cricketers playing with friends to promising school-level footballers — have no permanent digital home for their sporting journey. Performance records, match history, and achievements are scattered across WhatsApp groups, paper scorecards, and a coach's memory, and disappear the moment a player changes clubs or a club shuts down.</p>
    <p class="cs-p">Clubs and academies face the same fragmentation from the other side — managing rosters, attendance, fees, and communication with parents through disconnected spreadsheets and messaging apps, with no way to showcase their community or attract new members.</p>
    <p class="cs-p">Existing platforms force a choice that doesn't reflect how sport actually works: LinkedIn-style seriousness built for adult professionals, or generic social feeds with no structure for careers, clubs, or safety — particularly for junior athletes who need parental oversight built into the platform itself, not bolted on.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Platform That Adapts to Every Athlete, Not the Other Way Around</h2>
    <p class="cs-p">We're designing iSportOne as a single adaptive platform — one profile structure that serves a state-level competitive swimmer and a recreational badminton player with friends equally well, without forcing either into the wrong mold.</p>

    <div class="cs-visual" style="padding:0;background:none;border:none">
      <img src="/assets/images/isportone-solution.png" alt="iSportOne platform architecture — lifelong sports passport, adaptive profile system, activity linking and tagging, safe-by-design parental controls, three-zone community feed, club pages" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(244,63,94,0.15),0 8px 24px rgba(15,23,42,0.1);cursor:zoom-in" onmouseover="hzOpen(this.src,this.alt)">
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><div class="cs-feature-title">Lifelong Sports Passport</div><div class="cs-feature-desc">A permanent career record that follows an athlete from their first school match to retirement. Performance data belongs to the athlete permanently — never the club.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div><div class="cs-feature-title">Adaptive Profile System</div><div class="cs-feature-desc">The same profile structure surfaces stats and match history for competitive athletes, while recreational players see streaks and sessions — irrelevant sections hidden gracefully.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Activity Linking & Tagging</div><div class="cs-feature-desc">A viral growth mechanic that lets athletes tag teammates who haven't joined yet — building a temporary record that merges once that person registers.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div><div class="cs-feature-title">Safe-by-Design Parental Controls</div><div class="cs-feature-desc">Under-16 athletes cannot self-register. Parents create and manage the profile, approve followers, and scouts are permanently blocked — no exceptions.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div><div class="cs-feature-title">Three-Zone Community Feed</div><div class="cs-feature-desc">A broadcast-style activity feed blending your network, sport community, and local activity — weighted differently for competitive vs recreational athletes.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Club Pages, Free to Start</div><div class="cs-feature-desc">Any group can spin up a free club page with zero member minimums — building community and activity history, with paid club tools as they grow.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From Concept to a Fully Specified, Investor-Ready Product</h2>
    <p class="cs-p">In a structured series of product strategy sessions, we took iSportOne from an initial idea to a complete Phase 1 product requirements document, locked design system, and working welcome-screen prototype — ready to move into development.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">13-Section</div><div class="cs-result-label">PRD — every decision documented and locked</div></div>
      <div class="cs-result"><div class="cs-result-num">4</div><div class="cs-result-label">Onboarding flows mapped screen-by-screen</div></div>
      <div class="cs-result"><div class="cs-result-num">Sport-<br>Adaptive</div><div class="cs-result-label">Design system per sport, dark/light theme</div></div>
      <div class="cs-result"><div class="cs-result-num">Phase 1</div><div class="cs-result-label">Scope locked, club tools sequenced to Phase 2</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"We wanted something that felt nothing like LinkedIn — exciting enough for a 12-year-old, credible enough for a state champion. Getting the product thinking right before writing a single line of code made all the difference."</div>
      <div class="cs-quote-author">— Bala, Founder, iSportOne</div>
    </div>
  </div>
</section>

<!-- Approach -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">How We're Building It</div>
    <h2 class="cs-h2">Technology & Approach</h2>
    <div class="cs-grid">
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fff1f2;border:1px solid rgba(244,63,94,0.15)"><svg viewBox="0 0 24 24" stroke="#f43f5e"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="cs-grid-title">Product Strategy First</div>
        <div class="cs-grid-desc">Every feature — tagging, under-16 safety, club tiers — was debated, stress-tested, and locked into a formal PRD before any design work began, keeping Phase 1 lean.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><circle cx="13.5" cy="6.5" r="2.5"/><circle cx="19" cy="17" r="2.5"/><circle cx="5" cy="17" r="2.5"/><path d="M13.5 9v3.5L19 14.5M13.5 9v3.5L5 14.5"/></svg></div>
        <div class="cs-grid-title">Sport-Adaptive Design System</div>
        <div class="cs-grid-desc">A documented design language — sport-specific colour theming, scoreboard-style typography, dark-theme-first — captured as a reusable skill file for consistency.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="cs-grid-title">Privacy-by-Architecture</div>
        <div class="cs-grid-desc">Parent-controlled account structures, hard platform rules blocking scout access to minors, and permanent athlete data ownership modeled at the product-decision level.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
        <div class="cs-grid-title">Web-First, Mobile-Equal</div>
        <div class="cs-grid-desc">Core screens designed web-first to establish the visual language with room to breathe, before translating deliberately to a mobile-equal experience.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Building a Platform With Complex Roles and <em>Safety Requirements?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can bring the same product rigor to your idea.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

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

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
