<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iSportOne — Your Lifelong Sports Passport | iDataOne</title>
<meta name="description" content="iSportOne is the professional network for sport — a lifelong sports passport, community feed and club management platform for athletes, parents, coaches and clubs. In Development.">
<meta name="keywords" content="sports passport app, athlete career profile, sports social network, club management platform, sports tech, iSportOne, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/isportone">
<meta property="og:type" content="website">
<meta property="og:title" content="iSportOne — Your Lifelong Sports Passport">
<meta property="og:description" content="The professional network for sport — record every match, build your career profile, and connect with your sports community for life.">
<meta property="og:url" content="https://idataone.com/isportone">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="iSportOne — Your Lifelong Sports Passport">
<meta name="twitter:description" content="The professional network for sport — record every match, build your career profile, and connect with your sports community for life.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "iSportOne",
  "applicationCategory": "SportsApplication",
  "operatingSystem": "Web, iOS, Android",
  "description": "iSportOne is the professional network for sport — a lifelong sports passport, community feed and club management platform for athletes, parents, coaches and clubs.",
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "url": "https://idataone.com/isportone"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#fff;background:#0a0508;overflow-x:hidden;padding-top:68px}

/* Override nav for dark theme on this page */
.site-nav{background:rgba(10,5,8,0.85)!important;border-bottom:1px solid rgba(244,63,94,0.12)!important}
.site-nav .nav-links a{color:rgba(255,255,255,0.6)!important}
.site-nav .nav-links a.active{color:#fb7185!important}
.site-nav .nav-links a[href]:hover{color:#fb7185!important}
.nav-ham span{background:rgba(255,255,255,0.7)!important}
.nav-ham{background:rgba(20,10,14,0.9)!important;border-color:rgba(244,63,94,0.2)!important}

/* Hero */
.sp-hero{min-height:88vh;display:flex;align-items:center;position:relative;overflow:hidden;padding:60px 32px;background:radial-gradient(ellipse at 30% 20%,rgba(244,63,94,0.18),transparent 50%),radial-gradient(ellipse at 80% 70%,rgba(251,113,133,0.12),transparent 50%),linear-gradient(160deg,#0a0508 0%,#1a0a10 55%,#0a0508 100%)}
.sp-hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);background-size:60px 60px;pointer-events:none}
.sp-hero-inner{max-width:1140px;margin:0 auto;position:relative;z-index:1;width:100%}
.sp-badge{display:inline-flex;align-items:center;gap:8px;padding:6px 16px;border-radius:999px;background:rgba(244,63,94,0.12);border:1px solid rgba(244,63,94,0.3);font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#fb7185;margin-bottom:28px}
.sp-badge-dot{width:6px;height:6px;border-radius:50%;background:#fb7185;animation:sp-pulse 2s infinite}
@keyframes sp-pulse{0%,100%{opacity:1}50%{opacity:0.3}}
.sp-eyebrow{font-size:14px;font-weight:600;letter-spacing:1px;color:rgba(255,255,255,0.4);margin-bottom:18px}
.sp-h1{font-size:clamp(40px,7vw,76px);font-weight:800;letter-spacing:-3px;line-height:1.02;margin-bottom:24px}
.sp-h1 em{font-style:normal;background:linear-gradient(90deg,#f43f5e,#fb7185,#fda4af);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.sp-sub{font-size:18px;color:rgba(255,255,255,0.55);line-height:1.7;max-width:560px;margin-bottom:40px}
.sp-btns{display:flex;gap:14px;flex-wrap:wrap}
.sp-btn-primary{display:inline-flex;align-items:center;gap:10px;padding:16px 30px;border-radius:14px;background:linear-gradient(90deg,#f43f5e,#fb7185);color:#fff;font-size:15px;font-weight:700;text-decoration:none;transition:opacity 0.2s,transform 0.2s;box-shadow:0 8px 30px rgba(244,63,94,0.3)}
.sp-btn-primary:hover{opacity:0.9;transform:translateY(-2px)}
.sp-btn-secondary{display:inline-flex;align-items:center;gap:10px;padding:16px 30px;border-radius:14px;border:1px solid rgba(255,255,255,0.15);color:rgba(255,255,255,0.8);font-size:15px;font-weight:600;text-decoration:none;transition:all 0.2s}
.sp-btn-secondary:hover{background:rgba(255,255,255,0.06);transform:translateY(-2px)}
.sp-hero-visual{position:relative;margin-top:56px;display:flex;justify-content:center}

/* Problem */
.sp-section{padding:90px 32px;position:relative}
.sp-inner{max-width:1100px;margin:0 auto}
.sp-dark{background:#0a0508}
.sp-light{background:#120810}
.sp-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#fb7185;margin-bottom:16px;text-align:center}
.sp-h2{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-1.5px;text-align:center;line-height:1.15;margin-bottom:20px}
.sp-h2 em{font-style:normal;background:linear-gradient(90deg,#f43f5e,#fb7185);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.sp-sub-center{font-size:16px;color:rgba(255,255,255,0.45);text-align:center;max-width:620px;margin:0 auto 56px;line-height:1.7}

.sp-problems{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.sp-problem{background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.08);border-radius:20px;padding:32px 28px}
.sp-problem-icon{width:48px;height:48px;border-radius:12px;background:rgba(244,63,94,0.1);border:1px solid rgba(244,63,94,0.2);display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.sp-problem-icon svg{width:22px;height:22px;fill:none;stroke:#fb7185;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.sp-problem-title{font-size:17px;font-weight:700;color:#fff;margin-bottom:10px;letter-spacing:-0.2px}
.sp-problem-desc{font-size:13.5px;color:rgba(255,255,255,0.4);line-height:1.7}

/* Features */
.sp-features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.sp-feature-card{background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.08);border-radius:20px;padding:32px 28px;transition:border-color 0.3s,transform 0.3s}
.sp-feature-card:hover{border-color:rgba(244,63,94,0.3);transform:translateY(-4px)}
.sp-feature-num{font-size:12px;font-weight:700;color:rgba(251,113,133,0.5);letter-spacing:2px;margin-bottom:16px}
.sp-feature-icon{width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.sp-feature-icon svg{width:22px;height:22px;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.sp-feature-title{font-size:18px;font-weight:700;color:#fff;margin-bottom:10px;letter-spacing:-0.3px}
.sp-feature-desc{font-size:13.5px;color:rgba(255,255,255,0.42);line-height:1.75}

/* Who it's for */
.sp-roles{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.sp-role{text-align:center;padding:36px 20px;border-radius:20px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.08);transition:transform 0.3s,border-color 0.3s}
.sp-role:hover{transform:translateY(-4px);border-color:rgba(244,63,94,0.3)}
.sp-role-icon{width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,rgba(244,63,94,0.15),rgba(251,113,133,0.08));border:1px solid rgba(244,63,94,0.25);display:flex;align-items:center;justify-content:center;margin:0 auto 20px}
.sp-role-icon svg{width:26px;height:26px;fill:none;stroke:#fb7185;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.sp-role-title{font-size:16px;font-weight:700;color:#fff;margin-bottom:8px}
.sp-role-desc{font-size:12.5px;color:rgba(255,255,255,0.4);line-height:1.6}

/* Final CTA */
.sp-cta-section{padding:100px 32px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 50% 50%,rgba(244,63,94,0.15),transparent 60%),linear-gradient(160deg,#0a0508 0%,#1a0a10 100%)}
.sp-cta-inner{max-width:700px;margin:0 auto;text-align:center;position:relative;z-index:1}
.sp-cta-h2{font-size:clamp(28px,5vw,48px);font-weight:800;letter-spacing:-2px;line-height:1.1;margin-bottom:20px}
.sp-cta-h2 em{font-style:normal;background:linear-gradient(90deg,#f43f5e,#fb7185);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.sp-cta-sub{font-size:16px;color:rgba(255,255,255,0.45);margin-bottom:40px;line-height:1.7}

@media(max-width:900px){
  .sp-problems{grid-template-columns:1fr}
  .sp-features-grid{grid-template-columns:1fr}
  .sp-roles{grid-template-columns:1fr 1fr;gap:16px}
}
@media(max-width:600px){
  .sp-roles{grid-template-columns:1fr}
  .sp-btns{flex-direction:column;width:100%}
  .sp-btn-primary,.sp-btn-secondary{justify-content:center}
}
</style>
</head>
<body>

<?php $current_page = ''; include __DIR__ . '/_nav.php'; ?>

<!-- Hero -->
<section class="sp-hero">
  <div class="sp-hero-inner">
    <div class="sp-badge"><span class="sp-badge-dot"></span> In Development</div>
    <div class="sp-eyebrow">THE PROFESSIONAL NETWORK FOR SPORT</div>
    <h1 class="sp-h1">Your sport.<br>Your story. <em>Forever.</em></h1>
    <p class="sp-sub">Record every match. Build your career profile. Connect with your sports community — for life. For every athlete, from weekend warriors to state champions.</p>
    <div class="sp-btns">
      <a href="/contact" class="sp-btn-primary">Get Early Access <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="/case-study/isportone" class="sp-btn-secondary">See How We're Building It</a>
    </div>

    <div class="sp-hero-visual">
      <svg viewBox="0 0 900 380" width="100%" style="max-width:900px" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="ath1" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#f43f5e"/><stop offset="100%" stop-color="#fb923c"/></linearGradient>
          <linearGradient id="ath2" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#be185d"/><stop offset="100%" stop-color="#f43f5e"/></linearGradient>
          <linearGradient id="ath3" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#fb7185"/><stop offset="100%" stop-color="#fda4af"/></linearGradient>
        </defs>
        <!-- Runner -->
        <g opacity="0.92">
          <polygon points="80,180 110,140 135,150 120,190 140,210 110,260 90,310 60,300 75,250 50,220" fill="url(#ath1)"/>
          <polygon points="110,140 130,110 150,120 140,150 120,150" fill="url(#ath2)"/>
          <polygon points="135,150 175,130 190,145 160,170 140,180" fill="url(#ath3)"/>
        </g>
        <!-- Diver -->
        <g opacity="0.85" transform="translate(220,0)">
          <polygon points="60,120 110,100 140,130 100,160 70,170 40,150" fill="url(#ath2)"/>
          <polygon points="100,160 150,180 170,220 130,240 90,210" fill="url(#ath1)"/>
          <polygon points="40,150 20,190 50,230 80,210 60,180" fill="url(#ath3)"/>
          <polygon points="110,100 140,70 160,85 145,110" fill="url(#ath2)"/>
        </g>
        <!-- Footballer (center, prominent) -->
        <g>
          <polygon points="440,90 480,70 500,95 470,120 445,115" fill="url(#ath1)"/>
          <polygon points="470,120 510,135 520,175 480,200 450,180" fill="url(#ath2)"/>
          <polygon points="450,180 470,230 440,280 400,270 410,220" fill="url(#ath1)"/>
          <polygon points="510,135 555,120 575,140 545,165 515,160" fill="url(#ath3)"/>
          <polygon points="480,200 460,250 420,290 390,300 380,260" fill="url(#ath2)"/>
          <circle cx="395" cy="305" r="14" fill="url(#ath3)"/>
        </g>
        <!-- Javelin thrower -->
        <g opacity="0.88" transform="translate(610,0)">
          <polygon points="60,100 100,80 130,100 110,140 70,150" fill="url(#ath3)"/>
          <polygon points="110,140 160,155 200,140 195,155 150,175 105,170" fill="url(#ath1)"/>
          <polygon points="70,150 50,200 80,240 110,220 95,180" fill="url(#ath2)"/>
          <polygon points="105,170 130,220 110,270 75,260 80,210" fill="url(#ath3)"/>
          <line x1="200" y1="140" x2="260" y2="110" stroke="url(#ath1)" stroke-width="4" stroke-linecap="round"/>
        </g>
        <!-- Scattered triangle particles -->
        <polygon points="30,250 45,260 25,275" fill="rgba(244,63,94,0.3)"/>
        <polygon points="200,290 215,300 195,310" fill="rgba(251,113,133,0.25)"/>
        <polygon points="350,60 365,70 345,80" fill="rgba(251,146,60,0.3)"/>
        <polygon points="600,300 615,310 595,320" fill="rgba(244,63,94,0.2)"/>
        <polygon points="780,250 795,260 775,270" fill="rgba(251,113,133,0.25)"/>
        <polygon points="850,150 862,158 845,168" fill="rgba(244,63,94,0.2)"/>
      </svg>
    </div>
  </div>
</section>

<!-- Problem -->
<section class="sp-section sp-light">
  <div class="sp-inner">
    <div class="sp-tag">The Problem</div>
    <h2 class="sp-h2">Sports Careers Live <em>Nowhere</em></h2>
    <p class="sp-sub-center">Especially outside the pros. Millions of athletes have no permanent home for their sporting journey.</p>
    <div class="sp-problems">
      <div class="sp-problem">
        <div class="sp-problem-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div class="sp-problem-title">Records Scattered Everywhere</div>
        <div class="sp-problem-desc">Match history and achievements live across WhatsApp groups, paper scorecards and a coach's memory — disappearing the moment a player changes clubs.</div>
      </div>
      <div class="sp-problem">
        <div class="sp-problem-icon"><svg viewBox="0 0 24 24"><path d="M9 17H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4M9 17v4M15 17v4M9 21h6"/></svg></div>
        <div class="sp-problem-title">Clubs Run on Spreadsheets</div>
        <div class="sp-problem-desc">Rosters, attendance, fees and parent communication are managed through disconnected spreadsheets and messaging apps — no way to showcase community.</div>
      </div>
      <div class="sp-problem">
        <div class="sp-problem-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
        <div class="sp-problem-title">No Platform Built for All of Sport</div>
        <div class="sp-problem-desc">LinkedIn-style seriousness for adult professionals, or generic social feeds with no structure for careers, clubs, or junior athlete safety.</div>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="sp-section sp-dark">
  <div class="sp-inner">
    <div class="sp-tag">The Solution</div>
    <h2 class="sp-h2">A Platform That <em>Adapts</em> to Every Athlete</h2>
    <p class="sp-sub-center">One profile structure that serves a state-level competitive swimmer and a recreational badminton player equally well.</p>
    <div class="sp-features-grid">
      <div class="sp-feature-card">
        <div class="sp-feature-num">01</div>
        <div class="sp-feature-icon" style="background:rgba(244,63,94,0.1);border:1px solid rgba(244,63,94,0.2)"><svg viewBox="0 0 24 24" stroke="#fb7185"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="sp-feature-title">Lifelong Sports Passport</div>
        <div class="sp-feature-desc">A permanent career record that follows an athlete from their first school match to retirement. Your data belongs to you — never the club.</div>
      </div>
      <div class="sp-feature-card">
        <div class="sp-feature-num">02</div>
        <div class="sp-feature-icon" style="background:rgba(99,102,241,0.1);border:1px solid rgba(99,102,241,0.2)"><svg viewBox="0 0 24 24" stroke="#818cf8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div class="sp-feature-title">Adaptive Profile System</div>
        <div class="sp-feature-desc">Stats and achievements for competitive athletes, activity streaks and sessions for recreational players — irrelevant sections hidden gracefully.</div>
      </div>
      <div class="sp-feature-card">
        <div class="sp-feature-num">03</div>
        <div class="sp-feature-icon" style="background:rgba(20,184,166,0.1);border:1px solid rgba(20,184,166,0.2)"><svg viewBox="0 0 24 24" stroke="#2dd4bf"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="sp-feature-title">Activity Linking & Tagging</div>
        <div class="sp-feature-desc">Tag teammates who haven't joined yet — building a temporary record that merges seamlessly once they register. Stats stay complete from day one.</div>
      </div>
      <div class="sp-feature-card">
        <div class="sp-feature-num">04</div>
        <div class="sp-feature-icon" style="background:rgba(245,158,11,0.1);border:1px solid rgba(245,158,11,0.2)"><svg viewBox="0 0 24 24" stroke="#fbbf24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="sp-feature-title">Safe-by-Design Parental Controls</div>
        <div class="sp-feature-desc">Under-16 athletes can't self-register. Parents manage the profile and approve every follower. Scouts are permanently blocked from junior profiles.</div>
      </div>
      <div class="sp-feature-card">
        <div class="sp-feature-num">05</div>
        <div class="sp-feature-icon" style="background:rgba(244,63,94,0.1);border:1px solid rgba(244,63,94,0.2)"><svg viewBox="0 0 24 24" stroke="#fb7185"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div class="sp-feature-title">Three-Zone Community Feed</div>
        <div class="sp-feature-desc">A broadcast-style feed blending your network, your sport community, and local activity near you — weighted for competitive vs recreational athletes.</div>
      </div>
      <div class="sp-feature-card">
        <div class="sp-feature-num">06</div>
        <div class="sp-feature-icon" style="background:rgba(99,102,241,0.1);border:1px solid rgba(99,102,241,0.2)"><svg viewBox="0 0 24 24" stroke="#818cf8"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="sp-feature-title">Club Pages, Free to Start</div>
        <div class="sp-feature-desc">Any group can spin up a free club page with zero member minimums — building real community before paid management tools become useful.</div>
      </div>
    </div>
  </div>
</section>

<!-- Who it's for -->
<section class="sp-section sp-light">
  <div class="sp-inner">
    <div class="sp-tag">Built For Everyone in Sport</div>
    <h2 class="sp-h2">One Platform, <em>Four Roles</em></h2>
    <p class="sp-sub-center">Every person around an athlete gets exactly the view they need.</p>
    <div class="sp-roles">
      <div class="sp-role">
        <div class="sp-role-icon"><svg viewBox="0 0 24 24"><path d="M12 2l2 7h7l-5.5 4.5L17 21l-5-4-5 4 1.5-7.5L3 9h7z"/></svg></div>
        <div class="sp-role-title">Athlete</div>
        <div class="sp-role-desc">Build a permanent career record from your first match onward, at any level.</div>
      </div>
      <div class="sp-role">
        <div class="sp-role-icon"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
        <div class="sp-role-title">Parent</div>
        <div class="sp-role-desc">Manage your child's profile, approve followers, and follow their journey safely.</div>
      </div>
      <div class="sp-role">
        <div class="sp-role-icon"><svg viewBox="0 0 24 24"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg></div>
        <div class="sp-role-title">Coach</div>
        <div class="sp-role-desc">Track athlete progress, log sessions, and build a roster history that lasts.</div>
      </div>
      <div class="sp-role">
        <div class="sp-role-icon"><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/></svg></div>
        <div class="sp-role-title">Club Admin</div>
        <div class="sp-role-desc">Spin up a free club page, manage your roster, and showcase your community.</div>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="sp-cta-section">
  <div class="sp-cta-inner">
    <h2 class="sp-cta-h2">Your Sports Story Starts <em>Here</em></h2>
    <p class="sp-cta-sub">iSportOne is currently in development. Get early access and be among the first to build your lifelong sports passport.</p>
    <div class="sp-btns" style="justify-content:center">
      <a href="/contact" class="sp-btn-primary">Get Early Access <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
