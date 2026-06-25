<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iSportOne — Your Lifelong Sports Passport | iDataOne</title>
<meta name="description" content="iSportOne is the professional network for sport — a lifelong sports passport, community feed and club management platform for athletes, parents, coaches and clubs.">
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
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Banner */
.banner{min-height:100vh;display:flex;align-items:center;padding:100px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(244,63,94,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(251,113,133,0.08),transparent 40%),radial-gradient(ellipse at 60% 90%,rgba(99,102,241,0.06),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#fff1f2 45%,#ffe4e6 100%)}
.banner::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.banner-inner{position:relative;z-index:1;max-width:1140px;margin:0 auto;padding:0 32px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.banner-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#f43f5e;margin-bottom:20px}
.banner-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#0f172a;margin-bottom:20px}
.banner-h1 em{font-style:normal;background:linear-gradient(90deg,#f43f5e,#fb7185);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.banner-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:480px}
.banner-btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#f43f5e,#fb7185);color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;border:1px solid rgba(244,63,94,0.25);color:#f43f5e;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-secondary:hover{background:rgba(244,63,94,0.06);transform:translateY(-1px)}
.banner-illus{display:flex;align-items:center;justify-content:center}

/* Sections */
.section{padding:80px 32px}
.section-inner{max-width:1140px;margin:0 auto}
.section-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#f43f5e;margin-bottom:12px;text-align:center}
.section-title{font-size:clamp(28px,3vw,40px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;text-align:center;margin-bottom:12px}
.section-sub{font-size:16px;color:#64748b;text-align:center;line-height:1.7;max-width:560px;margin:0 auto 48px}

/* Problem cards */
.problems{background:#f8fafc}
.problems-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.problem-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px 28px}
.problem-icon{width:48px;height:48px;border-radius:12px;background:#fff1f2;border:1px solid rgba(244,63,94,0.15);display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.problem-icon svg{width:22px;height:22px;fill:none;stroke:#f43f5e;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.problem-title{font-size:17px;font-weight:700;color:#0f172a;margin-bottom:10px}
.problem-desc{font-size:13.5px;color:#64748b;line-height:1.7}

/* Features */
.features{background:#fff}
.features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.feature-card{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:20px;padding:32px 28px;transition:box-shadow 0.3s,transform 0.3s}
.feature-card:hover{box-shadow:0 16px 48px rgba(244,63,94,0.08);transform:translateY(-4px)}
.feature-num{font-size:12px;font-weight:700;color:rgba(244,63,94,0.4);letter-spacing:2px;margin-bottom:16px}
.feature-icon{width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.feature-icon svg{width:22px;height:22px;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.feature-title{font-size:18px;font-weight:700;color:#0f172a;margin-bottom:10px}
.feature-desc{font-size:13.5px;color:#64748b;line-height:1.75}

/* Roles */
.roles{background:#f8fafc}
.roles-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.role-card{text-align:center;padding:36px 20px;border-radius:20px;background:#fff;border:1px solid rgba(226,232,240,0.9);transition:transform 0.3s,box-shadow 0.3s}
.role-card:hover{transform:translateY(-4px);box-shadow:0 16px 48px rgba(244,63,94,0.08)}
.role-icon{width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,#fff1f2,#ffe4e6);border:1px solid rgba(244,63,94,0.15);display:flex;align-items:center;justify-content:center;margin:0 auto 20px}
.role-icon svg{width:26px;height:26px;fill:none;stroke:#f43f5e;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.role-title{font-size:16px;font-weight:700;color:#0f172a;margin-bottom:8px}
.role-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}

/* CTA */
.cta-section{background:#fff;padding:40px 32px 80px}
.cta-card{max-width:900px;margin:0 auto;background:#0f172a;border-radius:28px;padding:34px 48px;position:relative;overflow:hidden;display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(244,63,94,0.2),transparent 60%);pointer-events:none}
.cta-card-left{position:relative;z-index:1}
.cta-heading{font-size:clamp(20px,2.5vw,30px);font-weight:800;letter-spacing:-1px;color:#f1f5f9;margin-bottom:8px;line-height:1.2}
.cta-heading em{font-style:normal;background:linear-gradient(90deg,#fb7185,#fda4af);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cta-sub{font-size:14px;color:rgba(255,255,255,0.4);line-height:1.7}
.cta-btns{display:flex;flex-direction:column;gap:12px;align-items:flex-end;position:relative;z-index:1}
.btn-cta-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#f43f5e,#fb7185);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s}
.btn-cta-primary:hover{opacity:0.9}

@media(max-width:768px){
  .banner-inner{grid-template-columns:1fr}
  .banner-illus{display:none}
  .problems-grid{grid-template-columns:1fr}
  .features-grid{grid-template-columns:1fr}
  .roles-grid{grid-template-columns:1fr 1fr;gap:16px}
  .cta-card{grid-template-columns:1fr;padding:28px 24px}
  .cta-btns{align-items:flex-start}
}
@media(max-width:600px){
  .roles-grid{grid-template-columns:1fr}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = ''; include __DIR__ . '/_nav.php'; ?>

<!-- Banner -->
<section class="banner">
  <div class="banner-inner">
    <div>
      <div class="banner-tag">iSportOne · Sports Technology</div>
      <h1 class="banner-h1">Your sport.<br>Your story. <em>Forever.</em></h1>
      <p class="banner-sub">Record every match. Build your career profile. Connect with your sports community — for life. For every athlete, from weekend warriors to state champions.</p>
      <div class="banner-btns">
        <a href="/contact" class="btn-primary">Get Early Access <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="/case-study/isportone" class="btn-secondary">See How We're Building It <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#f43f5e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
    <div class="banner-illus">
      <svg viewBox="0 0 480 380" width="480" height="380" xmlns="http://www.w3.org/2000/svg">
        <!-- Profile card -->
        <rect x="20" y="20" width="220" height="280" rx="16" fill="rgba(255,255,255,0.95)" stroke="rgba(244,63,94,0.18)" stroke-width="1.5"/>
        <circle cx="130" cy="86" r="34" fill="rgba(244,63,94,0.1)" stroke="rgba(244,63,94,0.25)" stroke-width="1.5"/>
        <circle cx="130" cy="74" r="13" fill="rgba(244,63,94,0.2)"/>
        <path d="M104 102 Q130 84 156 102" fill="rgba(244,63,94,0.15)"/>
        <rect x="70" y="132" width="120" height="9" rx="4.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="90" y="148" width="80" height="6" rx="3" fill="rgba(244,63,94,0.2)"/>
        <rect x="36" y="172" width="80" height="46" rx="8" fill="rgba(255,241,242,0.8)" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
        <rect x="46" y="182" width="36" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="46" y="194" width="50" height="12" rx="3" fill="rgba(244,63,94,0.3)"/>
        <rect x="144" y="172" width="80" height="46" rx="8" fill="rgba(255,241,242,0.8)" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
        <rect x="154" y="182" width="36" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="154" y="194" width="50" height="12" rx="3" fill="rgba(244,63,94,0.3)"/>
        <rect x="36" y="232" width="188" height="40" rx="8" fill="rgba(248,250,252,0.9)" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="46" y="242" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="46" y="252" width="40" height="4" rx="2" fill="rgba(99,102,241,0.2)"/>
        <rect x="36" y="262" width="100" height="0" fill="none"/>
        <!-- Stats panel -->
        <rect x="256" y="20" width="204" height="120" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(99,102,241,0.18)" stroke-width="1.5"/>
        <rect x="272" y="36" width="80" height="8" rx="4" fill="rgba(99,102,241,0.25)"/>
        <rect x="272" y="56" width="56" height="36" rx="6" fill="rgba(99,102,241,0.08)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
        <rect x="280" y="64" width="24" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="280" y="74" width="36" height="9" rx="3" fill="rgba(99,102,241,0.3)"/>
        <rect x="336" y="56" width="56" height="36" rx="6" fill="rgba(20,184,166,0.08)" stroke="rgba(20,184,166,0.18)" stroke-width="1"/>
        <rect x="344" y="64" width="24" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="344" y="74" width="36" height="9" rx="3" fill="rgba(20,184,166,0.3)"/>
        <rect x="400" y="56" width="44" height="36" rx="6" fill="rgba(245,158,11,0.08)" stroke="rgba(245,158,11,0.18)" stroke-width="1"/>
        <rect x="408" y="64" width="20" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
        <rect x="408" y="74" width="28" height="9" rx="3" fill="rgba(245,158,11,0.3)"/>
        <rect x="272" y="104" width="172" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
        <rect x="272" y="114" width="140" height="4" rx="2" fill="rgba(15,23,42,0.05)"/>
        <!-- Activity feed -->
        <rect x="256" y="156" width="204" height="144" rx="14" fill="rgba(255,255,255,0.95)" stroke="rgba(244,63,94,0.18)" stroke-width="1.5"/>
        <rect x="272" y="172" width="70" height="8" rx="4" fill="rgba(244,63,94,0.25)"/>
        <circle cx="280" cy="202" r="11" fill="rgba(244,63,94,0.15)" stroke="rgba(244,63,94,0.25)" stroke-width="1"/>
        <rect x="300" y="196" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="300" y="206" width="70" height="4" rx="2" fill="rgba(244,63,94,0.2)"/>
        <circle cx="280" cy="234" r="11" fill="rgba(99,102,241,0.15)" stroke="rgba(99,102,241,0.25)" stroke-width="1"/>
        <rect x="300" y="228" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="300" y="238" width="70" height="4" rx="2" fill="rgba(99,102,241,0.2)"/>
        <circle cx="280" cy="266" r="11" fill="rgba(20,184,166,0.15)" stroke="rgba(20,184,166,0.25)" stroke-width="1"/>
        <rect x="300" y="260" width="100" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="300" y="270" width="70" height="4" rx="2" fill="rgba(20,184,166,0.2)"/>
        <!-- Floating badge -->
        <rect x="50" y="320" width="180" height="40" rx="20" fill="rgba(255,255,255,0.96)" stroke="rgba(244,63,94,0.2)" stroke-width="1"/>
        <circle cx="70" cy="340" r="8" fill="rgba(244,63,94,0.2)"/>
        <rect x="86" y="334" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.1)"/>
        <rect x="86" y="343" width="56" height="4" rx="2" fill="rgba(244,63,94,0.3)"/>
      </svg>
    </div>
  </div>
</section>

<!-- Problem -->
<section class="section problems">
  <div class="section-inner">
    <div class="section-tag">The Problem</div>
    <h2 class="section-title">Sports Careers Live Nowhere</h2>
    <p class="section-sub">Especially outside the pros. Millions of athletes have no permanent home for their sporting journey.</p>
    <div class="problems-grid">
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div class="problem-title">Records Scattered Everywhere</div>
        <div class="problem-desc">Match history and achievements live across WhatsApp groups, paper scorecards and a coach's memory — disappearing the moment a player changes clubs.</div>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24"><path d="M9 17H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4M9 17v4M15 17v4M9 21h6"/></svg></div>
        <div class="problem-title">Clubs Run on Spreadsheets</div>
        <div class="problem-desc">Rosters, attendance, fees and parent communication are managed through disconnected spreadsheets and messaging apps — no way to showcase community.</div>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
        <div class="problem-title">No Platform Built for All of Sport</div>
        <div class="problem-desc">LinkedIn-style seriousness for adult professionals, or generic social feeds with no structure for careers, clubs, or junior athlete safety.</div>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="section features">
  <div class="section-inner">
    <div class="section-tag">The Solution</div>
    <h2 class="section-title">A Platform That Adapts to Every Athlete</h2>
    <p class="section-sub">One profile structure that serves a state-level competitive swimmer and a recreational badminton player equally well.</p>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-num">01</div>
        <div class="feature-icon" style="background:#fff1f2;border:1px solid rgba(244,63,94,0.15)"><svg viewBox="0 0 24 24" stroke="#f43f5e"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="feature-title">Lifelong Sports Passport</div>
        <div class="feature-desc">A permanent career record that follows an athlete from their first school match to retirement. Your data belongs to you — never the club.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">02</div>
        <div class="feature-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <div class="feature-title">Adaptive Profile System</div>
        <div class="feature-desc">Stats and achievements for competitive athletes, activity streaks and sessions for recreational players — irrelevant sections hidden gracefully.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">03</div>
        <div class="feature-icon" style="background:#f0fdfa;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="feature-title">Activity Linking & Tagging</div>
        <div class="feature-desc">Tag teammates who haven't joined yet — building a temporary record that merges seamlessly once they register. Stats stay complete from day one.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">04</div>
        <div class="feature-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="feature-title">Safe-by-Design Parental Controls</div>
        <div class="feature-desc">Under-16 athletes can't self-register. Parents manage the profile and approve every follower. Scouts are permanently blocked from junior profiles.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">05</div>
        <div class="feature-icon" style="background:#fff1f2;border:1px solid rgba(244,63,94,0.15)"><svg viewBox="0 0 24 24" stroke="#f43f5e"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <div class="feature-title">Three-Zone Community Feed</div>
        <div class="feature-desc">A broadcast-style feed blending your network, your sport community, and local activity near you — weighted for competitive vs recreational athletes.</div>
      </div>
      <div class="feature-card">
        <div class="feature-num">06</div>
        <div class="feature-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="feature-title">Club Pages, Free to Start</div>
        <div class="feature-desc">Any group can spin up a free club page with zero member minimums — building real community before paid management tools become useful.</div>
      </div>
    </div>
  </div>
</section>

<!-- Who it's for -->
<section class="section roles">
  <div class="section-inner">
    <div class="section-tag">Built For Everyone in Sport</div>
    <h2 class="section-title">One Platform, Four Roles</h2>
    <p class="section-sub">Every person around an athlete gets exactly the view they need.</p>
    <div class="roles-grid">
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M12 2l2 7h7l-5.5 4.5L17 21l-5-4-5 4 1.5-7.5L3 9h7z"/></svg></div>
        <div class="role-title">Athlete</div>
        <div class="role-desc">Build a permanent career record from your first match onward, at any level.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
        <div class="role-title">Parent</div>
        <div class="role-desc">Manage your child's profile, approve followers, and follow their journey safely.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg></div>
        <div class="role-title">Coach</div>
        <div class="role-desc">Track athlete progress, log sessions, and build a roster history that lasts.</div>
      </div>
      <div class="role-card">
        <div class="role-icon"><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/></svg></div>
        <div class="role-title">Club Admin</div>
        <div class="role-desc">Spin up a free club page, manage your roster, and showcase your community.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-card">
    <div class="cta-card-left">
      <h2 class="cta-heading">Your Sports Story Starts <em>Here</em></h2>
      <p class="cta-sub">Get early access and be among the first to build your lifelong sports passport.</p>
    </div>
    <div class="cta-btns">
      <a href="/contact" class="btn-cta-primary">Get Early Access <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
