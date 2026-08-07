<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: The Knight Ryders — From WordPress Blog to a Living Community Platform | iDataOne</title>
<meta name="description" content="How iDataOne rebuilt The Knight Ryders, a 460-member Honda CB350 riding club, from a WordPress blog into a fully custom community platform with inline CMS, gamification and live member profiles.">
<meta name="keywords" content="custom CMS development, community platform, WordPress migration, Next.js Supabase, inline editing, gamification platform, riding club website, iDataOne">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/knight-ryders">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: The Knight Ryders — From WordPress Blog to a Living Community Platform | iDataOne">
<meta property="og:description" content="How iDataOne rebuilt The Knight Ryders from a WordPress blog into a fully custom community platform with inline CMS, gamification and live member profiles.">
<meta property="og:url" content="https://idataone.com/case-study/knight-ryders">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: The Knight Ryders — From WordPress Blog to a Living Community Platform | iDataOne">
<meta name="twitter:description" content="How iDataOne rebuilt The Knight Ryders from a WordPress blog into a fully custom community platform with inline CMS, gamification and live member profiles.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoNoBG.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "The Knight Ryders — From WordPress Blog to a Living Community Platform",
  "description": "How iDataOne rebuilt a 460-member Honda CB350 riding club from a WordPress blog into a fully custom community platform with inline CMS, gamification and live member profiles.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoNoBG.png"}},
  "url": "https://idataone.com/case-study/knight-ryders",
  "mainEntityOfPage": "https://idataone.com/case-study/knight-ryders",
  "about": [
    {"@type": "Thing", "name": "Custom CMS Development"},
    {"@type": "Thing", "name": "Community Platform"},
    {"@type": "Thing", "name": "WordPress Migration"}
  ],
  "keywords": "custom CMS, community platform, WordPress migration, inline editing, gamification, Next.js, Supabase"
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Hero — dark with amber accent */
.cs-hero{background:linear-gradient(135deg,#0f172a 0%,#1e293b 50%,#0f172a 100%);padding:80px 32px 60px;position:relative;overflow:hidden}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(245,158,11,0.12),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(251,191,36,0.08),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:800px;margin:0 auto;position:relative;z-index:1}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(245,158,11,0.15);border:1px solid rgba(245,158,11,0.3);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#fbbf24;margin-bottom:24px}
.cs-hero-title{font-size:clamp(30px,5vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#fff;margin-bottom:20px}
.cs-hero-sub{font-size:17px;color:rgba(255,255,255,0.45);line-height:1.75;margin-bottom:40px;max-width:620px}
.cs-hero-stats{display:flex;gap:48px;padding-top:32px;border-top:1px solid rgba(255,255,255,0.08);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:28px;font-weight:800;letter-spacing:-1.5px;color:#fff;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#fbbf24,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:rgba(255,255,255,0.35);margin-top:4px}

/* CMS highlight banner */
.cs-cms-banner{background:linear-gradient(135deg,#1e293b,#0f172a);padding:48px 32px;border-top:1px solid rgba(245,158,11,0.15);border-bottom:1px solid rgba(245,158,11,0.15)}
.cs-cms-inner{max-width:800px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr 1fr;gap:32px}
.cs-cms-item{text-align:center}
.cs-cms-icon{width:52px;height:52px;border-radius:14px;background:rgba(245,158,11,0.1);border:1px solid rgba(245,158,11,0.2);display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.cs-cms-icon svg{width:22px;height:22px;fill:none;stroke:#fbbf24;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-cms-title{font-size:15px;font-weight:700;color:#f1f5f9;margin-bottom:8px}
.cs-cms-desc{font-size:12.5px;color:rgba(255,255,255,0.4);line-height:1.65}

/* Sections */
.cs-section{padding:72px 32px}
.cs-inner{max-width:800px;margin:0 auto}
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
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#f8fafc,#fefce8)}
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 12px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:22px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#d97706,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
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
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(245,158,11,0.15),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#fbbf24,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#d97706,#f59e0b);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}
@media(max-width:768px){
  .cs-hero-stats{gap:24px}
  .cs-cms-inner{grid-template-columns:1fr}
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
    <div class="cs-badge">Digital Products · Custom CMS · Community Platform</div>
    <h1 class="cs-hero-title">The Knight Ryders — From WordPress Blog to a Living Community Platform</h1>
    <p class="cs-hero-sub">How we rebuilt a 460-member Honda CB350 riding club from a static blog into a fully custom community platform — with an inline CMS, live member profiles, gamification and zero separate admin pages.</p>
    <div class="cs-hero-stats">
      <div class="cs-stat"><div class="cs-stat-num"><span>460+</span></div><div class="cs-stat-label">Members Migrated</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>88+</span></div><div class="cs-stat-label">Rides Logged</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>12</span></div><div class="cs-stat-label">Badge Tiers</div></div>
      <div class="cs-stat"><div class="cs-stat-num"><span>80%</span></div><div class="cs-stat-label">Less Maintenance</div></div>
    </div>
  </div>
</section>

<!-- CMS Banner — the key differentiator -->
<section class="cs-cms-banner">
  <div class="cs-cms-inner">
    <div class="cs-cms-item">
      <div class="cs-cms-icon"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
      <div class="cs-cms-title">Toggle to Edit, Anywhere</div>
      <div class="cs-cms-desc">One switch turns the live site into an editable surface. Every banner, description, image and stat becomes inline-editable — no context switching.</div>
    </div>
    <div class="cs-cms-item">
      <div class="cs-cms-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
      <div class="cs-cms-title">No Separate Admin Page</div>
      <div class="cs-cms-desc">Admins manage rides, rosters and member content from the same pages members browse — not a disconnected dashboard built for developers.</div>
    </div>
    <div class="cs-cms-item">
      <div class="cs-cms-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
      <div class="cs-cms-title">Easy Content, Every Day</div>
      <div class="cs-cms-desc">Adding a new ride, updating a hero banner or editing a member's profile takes seconds — no developer, no CMS login, no deployment required.</div>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">A Growing Club Trapped in a Blog</h2>
    <p class="cs-p">The Knight Ryders had outgrown their WordPress site. With 460+ members and a growing history of club rides, the existing setup could publish blog-style posts about each trip — but it had no real concept of a member. No persistent profiles, no way to track who rode where, no leaderboard, no sense of progression or achievement.</p>
    <p class="cs-p">Every ride was an isolated post. There was no connective tissue between a member and their riding history — and admins were spending hours manually maintaining content through a generic WordPress backend that was never designed for a community of this kind.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Purpose-Built Community Platform with an Inline CMS</h2>
    <p class="cs-p">We rebuilt the site from the ground up on a modern stack — Next.js, Supabase and Vercel — replacing the WordPress backend entirely while preserving the club's SEO equity and existing content through a careful, verified migration.</p>

    <div class="cs-visual">
      <svg viewBox="0 0 720 380" width="720" height="380" xmlns="http://www.w3.org/2000/svg">
        <!-- Main browser frame -->
        <rect x="20" y="10" width="680" height="360" rx="16" fill="rgba(255,255,255,0.95)" stroke="rgba(245,158,11,0.2)" stroke-width="1.5"/>
        <rect x="20" y="10" width="680" height="36" rx="16" fill="rgba(245,158,11,0.07)"/>
        <rect x="20" y="32" width="680" height="14" fill="rgba(245,158,11,0.07)"/>
        <circle cx="42" cy="28" r="5" fill="rgba(244,63,94,0.3)"/>
        <circle cx="58" cy="28" r="5" fill="rgba(245,158,11,0.3)"/>
        <circle cx="74" cy="28" r="5" fill="rgba(34,197,94,0.3)"/>
        <rect x="100" y="22" width="300" height="12" rx="6" fill="rgba(15,23,42,0.06)"/>
        <!-- Edit mode toggle -->
        <rect x="576" y="18" width="100" height="20" rx="10" fill="rgba(245,158,11,0.15)" stroke="rgba(245,158,11,0.3)" stroke-width="1"/>
        <circle cx="666" cy="28" r="8" fill="rgba(245,158,11,0.8)"/>
        <rect x="586" y="23" width="50" height="5" rx="2.5" fill="rgba(217,119,6,0.5)"/>
        <!-- Hero section with inline edit indicator -->
        <rect x="36" y="58" width="648" height="80" rx="10" fill="rgba(30,41,59,0.9)"/>
        <rect x="36" y="58" width="648" height="80" rx="10" fill="none" stroke="rgba(245,158,11,0.6)" stroke-width="2" stroke-dasharray="6,3"/>
        <rect x="52" y="74" width="120" height="10" rx="4" fill="rgba(255,255,255,0.25)"/>
        <rect x="52" y="90" width="200" height="18" rx="4" fill="rgba(255,255,255,0.15)"/>
        <rect x="52" y="114" width="80" height="12" rx="4" fill="rgba(245,158,11,0.5)"/>
        <rect x="642" y="62" width="36" height="20" rx="6" fill="rgba(245,158,11,0.9)"/>
        <rect x="648" y="69" width="16" height="4" rx="2" fill="#fff"/>
        <rect x="648" y="75" width="10" height="4" rx="2" fill="#fff"/>
        <!-- Member grid -->
        <rect x="36" y="152" width="200" height="110" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <circle cx="86" cy="186" r="22" fill="rgba(245,158,11,0.15)" stroke="rgba(245,158,11,0.25)" stroke-width="1"/>
        <rect x="116" y="175" width="80" height="7" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="116" y="188" width="56" height="5" rx="2.5" fill="rgba(245,158,11,0.3)"/>
        <rect x="116" y="200" width="40" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
        <!-- Crown badge -->
        <polygon points="46,226 52,212 60,222 68,208 76,218 82,208 88,218 94,212 100,226" fill="rgba(245,158,11,0.25)" stroke="rgba(217,119,6,0.4)" stroke-width="1"/>
        <rect x="46" y="228" width="54" height="18" rx="4" fill="rgba(245,158,11,0.15)"/>
        <rect x="52" y="234" width="42" height="5" rx="2.5" fill="rgba(217,119,6,0.3)"/>
        <rect x="118" y="224" width="100" height="8" rx="4" fill="rgba(30,41,59,0.08)"/>
        <rect x="118" y="224" width="65" height="8" rx="4" fill="rgba(245,158,11,0.4)"/>
        <rect x="118" y="238" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.06)"/>
        <!-- Leaderboard -->
        <rect x="248" y="152" width="200" height="110" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="262" y="164" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="262" y="180" width="16" height="16" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="284" y="183" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="390" y="183" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.06)"/>
        <rect x="262" y="202" width="16" height="16" rx="4" fill="rgba(226,232,240,0.5)"/>
        <rect x="284" y="205" width="70" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="390" y="205" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.06)"/>
        <rect x="262" y="224" width="16" height="16" rx="4" fill="rgba(180,120,60,0.25)"/>
        <rect x="284" y="227" width="76" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="390" y="227" width="40" height="5" rx="2.5" fill="rgba(15,23,42,0.06)"/>
        <rect x="262" y="244" width="172" height="8" rx="4" fill="rgba(245,158,11,0.1)"/>
        <rect x="262" y="244" width="110" height="8" rx="4" fill="rgba(245,158,11,0.35)"/>
        <!-- Ride stats -->
        <rect x="460" y="152" width="224" height="110" rx="10" fill="#fff" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
        <rect x="474" y="164" width="80" height="6" rx="3" fill="rgba(15,23,42,0.1)"/>
        <rect x="474" y="184" width="20" height="48" rx="4" fill="rgba(245,158,11,0.3)"/>
        <rect x="500" y="196" width="20" height="36" rx="4" fill="rgba(245,158,11,0.45)"/>
        <rect x="526" y="190" width="20" height="42" rx="4" fill="rgba(245,158,11,0.35)"/>
        <rect x="552" y="178" width="20" height="54" rx="4" fill="rgba(245,158,11,0.5)"/>
        <rect x="578" y="172" width="20" height="60" rx="4" fill="rgba(217,119,6,0.55)"/>
        <rect x="604" y="182" width="20" height="50" rx="4" fill="rgba(245,158,11,0.45)"/>
        <rect x="630" y="176" width="20" height="56" rx="4" fill="rgba(217,119,6,0.5)"/>
        <!-- Recently promoted -->
        <rect x="36" y="276" width="648" height="74" rx="10" fill="rgba(255,251,235,0.8)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
        <rect x="52" y="290" width="120" height="6" rx="3" fill="rgba(217,119,6,0.3)"/>
        <circle cx="70" cy="322" r="16" fill="rgba(245,158,11,0.15)" stroke="rgba(245,158,11,0.25)" stroke-width="1"/>
        <rect x="94" y="314" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="94" y="324" width="40" height="4" rx="2" fill="rgba(217,119,6,0.3)"/>
        <circle cx="186" cy="322" r="16" fill="rgba(245,158,11,0.15)" stroke="rgba(245,158,11,0.25)" stroke-width="1"/>
        <rect x="210" y="314" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="210" y="324" width="40" height="4" rx="2" fill="rgba(217,119,6,0.3)"/>
        <circle cx="302" cy="322" r="16" fill="rgba(245,158,11,0.15)" stroke="rgba(245,158,11,0.25)" stroke-width="1"/>
        <rect x="326" y="314" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
        <rect x="326" y="324" width="40" height="4" rx="2" fill="rgba(217,119,6,0.3)"/>
      </svg>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
        <div><div class="cs-feature-title">Inline CMS — Toggle to Edit</div><div class="cs-feature-desc">Toggling "Edit Mode" turns nearly every page into an inline-editable surface — hero banners, ride descriptions, gallery images. No separate admin dashboard to switch into.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div><div class="cs-feature-title">Dynamic Member Profiles</div><div class="cs-feature-desc">Every member has a real profile with photo, bio, ride history and live stats. A "Frequently Rides With" circle is computed automatically from shared ride history.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <div><div class="cs-feature-title">12-Tier Badge Gamification</div><div class="cs-feature-desc">From "Page" through "Grand Knight" — tier badges based on cumulative ride count, shown consistently across the directory, leaderboard, ride pages and profiles.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div><div class="cs-feature-title">Live Leaderboards & Stats</div><div class="cs-feature-desc">Total distance, ride counts and live rankings computed from real participation data — always accurate, no manual maintenance required.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></div>
        <div><div class="cs-feature-title">WordPress Migration</div><div class="cs-feature-desc">462 members, 88+ rides and all media migrated to cloud storage. Every old URL mapped to 301 redirects — search equity and shared links preserved.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div><div class="cs-feature-title">Recently Promoted Spotlight</div><div class="cs-feature-desc">Homepage automatically surfaces members who've just levelled up from their most recent ride — turning a ride log into a moment of recognition.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From a Static Blog to a Platform Members Come Back To</h2>
    <p class="cs-p">What was a static content site is now a platform members actively return to — to check their ride count, see where they rank, watch their badge tier climb and see who they've ridden alongside most.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">460+</div><div class="cs-result-label">Members with live profiles</div></div>
      <div class="cs-result"><div class="cs-result-num">80%</div><div class="cs-result-label">Less time on maintenance and updates</div></div>
      <div class="cs-result"><div class="cs-result-num">Zero</div><div class="cs-result-label">Developers needed for day-to-day changes</div></div>
      <div class="cs-result"><div class="cs-result-num">100%</div><div class="cs-result-label">SEO equity preserved via 301 redirects</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"We went from editing WordPress posts to running a live community — adding rides, updating content, managing members — all from the same pages our riders use. We haven't called a developer for a single content change since launch."</div>
      <div class="cs-quote-author">— Ramesh Kumar Ramachandran, Co-Founder &amp; Captain, The Knight Ryders</div>
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
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <div class="cs-grid-title">Full-Stack Development</div>
        <div class="cs-grid-desc">Next.js (App Router) front end, Supabase (PostgreSQL, Auth, Storage) backend, deployed on Vercel with full staging and production environments.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
        <div class="cs-grid-title">Purpose-Built Inline CMS</div>
        <div class="cs-grid-desc">Edit Mode toggle turns the live site into an inline-editable surface — no separate admin dashboard, no context switching, no developer required for content changes.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><polyline points="16 21 21 21 21 16"/><polyline points="3 3 8 3 8 8"/><path d="M21 3l-6 6M3 21l6-6"/></svg></div>
        <div class="cs-grid-title">WordPress Migration</div>
        <div class="cs-grid-desc">Full data migration of 462 members and 88+ rides from WordPress export, media migrated to cloud storage, and 301 redirects for every meaningful old URL.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#eef2ff;border:1px solid rgba(99,102,241,0.15)"><svg viewBox="0 0 24 24" stroke="#4f46e5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <div class="cs-grid-title">Gamification Data Model</div>
        <div class="cs-grid-desc">12-tier badge system computed from real ride participation data, with automatic exclusion rules for solo trips and a "recently promoted" spotlight built into the data layer.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fff1f2;border:1px solid rgba(244,63,94,0.15)"><svg viewBox="0 0 24 24" stroke="#f43f5e"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg></div>
        <div class="cs-grid-title">OAuth &amp; Self-Service Flows</div>
        <div class="cs-grid-desc">Google OAuth login, self-service password reset for migrated members, self-removal and reactivation flow with admin approval, and an "Assign Rides" admin tool.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(217,119,6,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
        <div class="cs-grid-title">Admin Intelligence</div>
        <div class="cs-grid-desc">"Riders Going Quiet" report flags members whose ride participation has dropped off — surfacing churn risk to admins before members become inactive.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Need a Platform Your Team Can <em>Actually Manage?</em></h3>
      <p class="cs-cta-sub">Let's discuss how we can build one with an inline CMS your people will actually use.</p>
    </div>
    <a href="/contact" class="cs-cta-btn">Book a Discovery Call <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
