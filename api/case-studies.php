<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Studies — Real Results. Real Impact. | iDataOne</title>
<meta name="description" content="Explore how iDataOne has helped businesses build digital products, integrate AI and transform data into decisions. Real results across industries.">
<meta name="keywords" content="iDataOne case studies, AI case study, digital product case study, data intelligence case study, enterprise software results, risk compliance platform">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="Case Studies — Real Results. Real Impact. | iDataOne">
<meta property="og:description" content="Explore how iDataOne has helped businesses build digital products, integrate AI and transform data into decisions. Real results across industries.">
<meta property="og:url" content="https://idataone.com/case-studies">
<meta property="og:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Studies — Real Results. Real Impact. | iDataOne">
<meta name="twitter:description" content="Explore how iDataOne has helped businesses build digital products, integrate AI and transform data into decisions. Real results across industries.">
<meta name="twitter:image" content="https://idataone.com/assets/images/iDataOneLogoFinal.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Case Studies — iDataOne",
  "url": "https://idataone.com/case-studies",
  "description": "Real results from businesses that built with iDataOne. Digital products, AI integration and data intelligence case studies.",
  "provider": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"}
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-studies">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* ── Hero ── */
.hero{
  min-height:100vh;
  display:flex;
  align-items:center;
  padding:100px 0 60px;
  position:relative;
  overflow:hidden;
  background:
    radial-gradient(ellipse at 10% 30%,rgba(99,102,241,0.09),transparent 45%),
    radial-gradient(ellipse at 90% 10%,rgba(124,58,237,0.07),transparent 40%),
    radial-gradient(ellipse at 60% 90%,rgba(20,184,166,0.05),transparent 40%),
    linear-gradient(135deg,#f8fafc 0%,#eef2ff 45%,#ede9fe 100%);
}
.hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(15,23,42,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(15,23,42,0.025) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.hero-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#4f46e5;margin-bottom:20px}
.hero-h1{font-size:clamp(36px,4.5vw,56px);font-weight:800;letter-spacing:-2px;line-height:1.05;color:#0f172a;margin-bottom:20px}
.hero-h1 em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.hero-sub{font-size:16px;color:#64748b;line-height:1.75;max-width:480px}
/* Stats grid */
.hero-stats{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.stat-item{background:#fff;border:1px solid rgba(226,232,240,0.9);border-radius:16px;padding:24px 20px}
.stat-num{font-size:32px;font-weight:800;letter-spacing:-1.5px;line-height:1;margin-bottom:6px}
.stat-num span{background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.stat-label{font-size:12px;color:#94a3b8;letter-spacing:0.3px;line-height:1.4}

/* ── Filter tabs ── */
.filter-wrap{background:#fff;position:sticky;top:68px;z-index:50;border-bottom:1px solid rgba(226,232,240,0.8);padding:0 32px}
.filter-inner{max-width:1140px;margin:0 auto;display:flex;gap:0;overflow-x:auto}
.filter-btn{padding:18px 24px;font-size:13px;font-weight:600;color:#94a3b8;border:none;background:transparent;cursor:pointer;border-bottom:2px solid transparent;transition:all 0.2s;white-space:nowrap;font-family:'Inter',sans-serif}
.filter-btn:hover{color:#0f172a}
.filter-btn.active{color:#4f46e5;border-bottom-color:#4f46e5}
.filter-count{display:inline-block;padding:1px 7px;border-radius:999px;background:#f1f5f9;font-size:10px;font-weight:700;color:#94a3b8;margin-left:6px;vertical-align:middle}
.filter-btn.active .filter-count{background:#eef2ff;color:#4f46e5}

/* ── Case studies grid ── */
.cases-wrap{padding:64px 32px;background:#f8fafc;min-height:60vh}
.cases-inner{max-width:1140px;margin:0 auto}

/* Featured — large card */
.featured-card{display:grid;grid-template-columns:1fr 1fr;border-radius:24px;overflow:hidden;margin-bottom:32px;box-shadow:0 4px 24px rgba(15,23,42,0.08);transition:transform 0.3s,box-shadow 0.3s;cursor:pointer}
.featured-card:hover{transform:translateY(-4px);box-shadow:0 20px 60px rgba(15,23,42,0.14)}
.featured-visual{min-height:400px;display:flex;align-items:center;justify-content:center;position:relative;padding:48px}
.featured-body{background:#fff;padding:52px 48px;display:flex;flex-direction:column;justify-content:center}
.case-category{display:inline-flex;align-items:center;gap:6px;padding:4px 12px;border-radius:999px;font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:20px;width:fit-content}
.cat-digital{background:#eef2ff;color:#4f46e5}
.cat-ai{background:#f5f3ff;color:#7c3aed}
.cat-data{background:#fffbeb;color:#d97706}
.case-metric{font-size:56px;font-weight:800;letter-spacing:-3px;line-height:1;margin-bottom:8px}
.metric-digital{background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.metric-ai{background:linear-gradient(90deg,#7c3aed,#a855f7);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.metric-data{background:linear-gradient(90deg,#d97706,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.case-metric-label{font-size:13px;font-weight:500;color:#94a3b8;margin-bottom:24px}
.case-title{font-size:24px;font-weight:700;color:#0f172a;letter-spacing:-0.5px;line-height:1.3;margin-bottom:12px}
.case-desc{font-size:14px;color:#64748b;line-height:1.75;margin-bottom:28px}
.case-tags{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:28px}
.case-tag{padding:4px 12px;border-radius:999px;background:#f1f5f9;font-size:11px;font-weight:500;color:#64748b}
.case-cta{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:600;color:#4f46e5;text-decoration:none;transition:gap 0.2s}
.case-cta:hover{gap:12px}
.case-cta svg{width:16px;height:16px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.case-cta.violet{color:#7c3aed}
.case-cta.amber{color:#d97706}

/* Standard grid */
.cases-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.case-card{background:#fff;border-radius:20px;overflow:hidden;box-shadow:0 2px 12px rgba(15,23,42,0.05);transition:transform 0.3s,box-shadow 0.3s;cursor:pointer}
.case-card:hover{transform:translateY(-4px);box-shadow:0 16px 48px rgba(15,23,42,0.12)}
.case-card-visual{height:200px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.case-card-body{padding:28px}
.case-card .case-title{font-size:17px;margin-bottom:10px}
.case-card .case-desc{font-size:13px;margin-bottom:16px}
.case-card .case-metric{font-size:36px;margin-bottom:4px}
.case-card .case-metric-label{margin-bottom:16px}

/* ── Mid CTA ── */
.mid-cta{padding:80px 32px;background:#fff}
.mid-cta-inner{max-width:900px;margin:0 auto;text-align:center}
.mid-cta-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#6366f1;margin-bottom:16px}
.mid-cta-h2{font-size:clamp(28px,4vw,48px);font-weight:800;letter-spacing:-2px;color:#0f172a;line-height:1.1;margin-bottom:16px}
.mid-cta-h2 em{font-style:normal;background:linear-gradient(90deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.mid-cta-sub{font-size:16px;color:#64748b;line-height:1.7;margin-bottom:36px}
.mid-cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:14px 28px;border-radius:12px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;font-size:14px;font-weight:600;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:14px 28px;border-radius:12px;border:1px solid rgba(99,102,241,0.25);color:#4f46e5;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s}
.btn-secondary:hover{background:rgba(99,102,241,0.06);transform:translateY(-1px)}

/* ── Bottom CTA ── */
.bottom-cta{padding:40px 32px 80px;background:#f8fafc}
.bottom-cta-card{max-width:1100px;margin:0 auto;background:#0f172a;border-radius:28px;padding:64px;position:relative;overflow:hidden;display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.bottom-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(99,102,241,0.2),transparent 55%),radial-gradient(ellipse at 80% 50%,rgba(124,58,237,0.15),transparent 55%);pointer-events:none}
.bcta-left{position:relative;z-index:1}
.bcta-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:rgba(255,255,255,0.35);margin-bottom:20px}
.bcta-h2{font-size:clamp(28px,3vw,42px);font-weight:800;letter-spacing:-1.5px;color:#fff;line-height:1.1;margin-bottom:16px}
.bcta-h2 em{font-style:normal;background:linear-gradient(90deg,#818cf8,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.bcta-sub{font-size:15px;color:rgba(255,255,255,0.4);line-height:1.75}
.bcta-right{position:relative;z-index:1;display:flex;flex-direction:column;gap:16px}
.bcta-btn-primary{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 24px;border-radius:14px;background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.bcta-btn-primary:hover{opacity:0.9;transform:translateY(-1px)}
.bcta-btn-label{font-size:15px;font-weight:700;color:#fff}
.bcta-btn-sub{font-size:12px;color:rgba(255,255,255,0.6);margin-top:2px}
.bcta-btn-icon{width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.bcta-btn-icon svg{width:18px;height:18px;fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.bcta-btn-secondary{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 24px;border-radius:14px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.04);color:#fff;text-decoration:none;transition:all 0.2s}
.bcta-btn-secondary:hover{background:rgba(255,255,255,0.08);transform:translateY(-1px)}
.trust-row{display:flex;gap:24px;margin-top:8px}
.trust-item{display:flex;align-items:center;gap:8px;font-size:12px;color:rgba(255,255,255,0.3)}
.trust-item svg{width:14px;height:14px;fill:none;stroke:rgba(255,255,255,0.3);stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* Hidden for filter */
.case-item{display:contents}
.case-item.hidden .featured-card,.case-item.hidden .case-card{display:none}
.no-results{display:none;text-align:center;padding:80px 24px;color:#94a3b8;font-size:16px}
.no-results.show{display:block}

@media(max-width:900px){
  .featured-card{grid-template-columns:1fr}
  .featured-visual{min-height:240px}
  .featured-body{padding:36px 28px}
  .cases-grid{grid-template-columns:1fr 1fr}
  .bottom-cta-card{grid-template-columns:1fr;padding:40px}
  .hero-inner{grid-template-columns:1fr}
  .hero-stats{grid-template-columns:1fr 1fr;gap:16px}
}
@media(max-width:600px){
  .cases-grid{grid-template-columns:1fr}
  /* hero-stats already responsive */
  .featured-card{border-radius:20px;box-shadow:0 2px 12px rgba(15,23,42,0.05)}
  .featured-visual{max-height:180px;min-height:auto;padding:16px;overflow:hidden}
  .featured-visual svg{max-width:260px;height:auto}
  .featured-body{padding:24px 20px}
  .case-metric{font-size:36px;letter-spacing:-2px}
  .case-title{font-size:17px}
  .case-desc{font-size:13px}
  .case-tags{gap:6px}
  .case-tag{font-size:10px;padding:3px 10px}
  .bottom-cta-card{padding:28px 20px;border-radius:20px;grid-template-columns:1fr}
  .bcta-h2{font-size:24px}
  .bcta-right{gap:10px}
}
</style>
</head>
<body>
<?php include __DIR__ . '/_gtm_body.php'; ?>

<?php $current_page = 'cases'; include __DIR__ . '/_nav.php'; ?>

<!-- ── Hero ── -->
<section class="hero">
  <div class="hero-inner">
    <div>
      <h1 class="hero-h1">Real Results.<br><em>Real Impact.</em></h1>
      <p class="hero-sub">Explore how we have helped businesses build smarter, move faster and grow with confidence.</p>
    </div>
    <div class="hero-stats">
      <div class="stat-item">
        <div class="stat-num"><span>10+</span></div>
        <div class="stat-label">Projects Delivered</div>
      </div>
      <div class="stat-item">
        <div class="stat-num"><span>6</span></div>
        <div class="stat-label">Digital Products</div>
      </div>
      <div class="stat-item">
        <div class="stat-num"><span>4</span></div>
        <div class="stat-label">AI &amp; Automation</div>
      </div>
      <div class="stat-item">
        <div class="stat-num"><span>2</span></div>
        <div class="stat-label">Data Intelligence</div>
      </div>
    </div>
  </div>
</section>

<!-- ── Filters ── -->
<div class="filter-wrap">
  <div class="filter-inner">
    <button class="filter-btn active" onclick="filterCases('all',this)">All <span class="filter-count">14</span></button>
    <button class="filter-btn" onclick="filterCases('digital',this)">Digital Products <span class="filter-count">7</span></button>
    <button class="filter-btn" onclick="filterCases('ai',this)">AI & Automation <span class="filter-count">5</span></button>
    <button class="filter-btn" onclick="filterCases('data',this)">Data Intelligence <span class="filter-count">2</span></button>
  </div>
</div>

<!-- ── Case Studies ── -->
<div class="cases-wrap">
  <div class="cases-inner">

    <!-- Featured: AI Agents -->
    <div class="case-item" data-cat="ai">
      <div class="featured-card">
        <div class="featured-visual" style="background:linear-gradient(135deg,#1e1b4b,#312e81)">
          <svg viewBox="0 0 480 360" width="480" height="360" xmlns="http://www.w3.org/2000/svg">
            <rect x="140" y="120" width="200" height="120" rx="20" fill="rgba(124,58,237,0.2)" stroke="rgba(167,139,250,0.4)" stroke-width="1.5"/>
            <circle cx="240" cy="170" r="28" fill="rgba(124,58,237,0.25)" stroke="rgba(167,139,250,0.5)" stroke-width="1.5"/>
            <circle cx="240" cy="170" r="12" fill="rgba(167,139,250,0.5)"/>
            <rect x="180" y="207" width="120" height="6" rx="3" fill="rgba(167,139,250,0.25)"/>
            <rect x="200" y="218" width="80" height="4" rx="2" fill="rgba(167,139,250,0.15)"/>
            <rect x="20" y="80" width="100" height="54" rx="12" fill="rgba(255,255,255,0.06)" stroke="rgba(167,139,250,0.25)" stroke-width="1"/>
            <rect x="30" y="94" width="50" height="5" rx="2.5" fill="rgba(167,139,250,0.3)"/>
            <rect x="30" y="104" width="72" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
            <line x1="120" y1="107" x2="140" y2="155" stroke="rgba(167,139,250,0.3)" stroke-width="1.5" stroke-dasharray="5,3"/>
            <rect x="20" y="190" width="100" height="54" rx="12" fill="rgba(255,255,255,0.06)" stroke="rgba(167,139,250,0.25)" stroke-width="1"/>
            <rect x="30" y="204" width="50" height="5" rx="2.5" fill="rgba(167,139,250,0.3)"/>
            <rect x="30" y="214" width="72" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
            <line x1="120" y1="217" x2="140" y2="195" stroke="rgba(167,139,250,0.3)" stroke-width="1.5" stroke-dasharray="5,3"/>
            <rect x="360" y="80" width="100" height="54" rx="12" fill="rgba(52,211,153,0.08)" stroke="rgba(52,211,153,0.3)" stroke-width="1"/>
            <rect x="370" y="94" width="50" height="5" rx="2.5" fill="rgba(52,211,153,0.4)"/>
            <rect x="370" y="104" width="72" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
            <line x1="340" y1="155" x2="360" y2="107" stroke="rgba(52,211,153,0.3)" stroke-width="1.5" stroke-dasharray="5,3"/>
            <rect x="360" y="190" width="100" height="54" rx="12" fill="rgba(245,158,11,0.08)" stroke="rgba(245,158,11,0.3)" stroke-width="1"/>
            <rect x="370" y="204" width="50" height="5" rx="2.5" fill="rgba(245,158,11,0.4)"/>
            <rect x="370" y="214" width="72" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
            <line x1="340" y1="195" x2="360" y2="217" stroke="rgba(245,158,11,0.3)" stroke-width="1.5" stroke-dasharray="5,3"/>
            <!-- Floating badge -->
            <rect x="150" y="280" width="180" height="40" rx="20" fill="rgba(255,255,255,0.08)" stroke="rgba(167,139,250,0.2)" stroke-width="1"/>
            <circle cx="170" cy="300" r="8" fill="rgba(52,211,153,0.3)"/>
            <rect x="186" y="293" width="80" height="5" rx="2.5" fill="rgba(255,255,255,0.25)"/>
            <rect x="186" y="302" width="56" height="4" rx="2" fill="rgba(52,211,153,0.3)"/>
          </svg>
        </div>
        <div class="featured-body">
          <div class="case-category cat-ai">AI & Automation</div>
          <div class="case-metric metric-ai">80%</div>
          <div class="case-metric-label">of customer queries handled autonomously</div>
          <div class="case-title">Deploying AI Agents That Handle 80% of Customer Queries</div>
          <div class="case-desc">We built and deployed intelligent AI agents for a retail brand that autonomously handled 80% of support queries, reducing response time from hours to seconds and cutting support costs significantly.</div>
          <div class="case-tags">
            <span class="case-tag">AI Agents</span>
            <span class="case-tag">Retail</span>
            <span class="case-tag">Support Automation</span>
          </div>
          <a href="/contact" class="case-cta violet">Discuss a Similar Project <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>
    </div>

    <!-- Grid of remaining cases -->
    <div class="cases-grid" id="cases-grid">

<!-- Digital: Knight Ryders -->
      <div class="case-card" data-cat="digital" onclick="location.href='/case-study/knight-ryders'" style="cursor:pointer">
        <div class="case-card-visual" style="background:#0a0f1e;padding:0;overflow:hidden">
          <img src="/assets/images/knight-ryders-hero.png" alt="The Knight Ryders" style="width:100%;height:200px;object-fit:cover;object-position:center center;display:block"/>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">460+</div>
          <div class="case-metric-label">members on a living community platform</div>
          <div class="case-title">The Knight Ryders — Custom CMS That Cut Maintenance Time by 80%</div>
          <div class="case-desc">We rebuilt a Honda CB350 riding club with an inline CMS, live member profiles, gamification and zero separate admin pages.</div>
          <div class="case-tags"><span class="case-tag">Custom CMS</span><span class="case-tag">Community</span><span class="case-tag">Gamification</span></div>
          <a href="/case-study/knight-ryders" class="case-cta">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

<!-- Digital: Infra360 PMS -->
      <div class="case-card" data-cat="digital" onclick="location.href='/infra360PMS'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#eef2ff,#e0e7ff)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="16" y="16" width="248" height="148" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(99,102,241,0.15)" stroke-width="1"/>
            <rect x="16" y="16" width="248" height="28" rx="12" fill="rgba(99,102,241,0.07)"/>
            <rect x="28" y="58" width="96" height="42" rx="8" fill="rgba(255,255,255,0.9)" stroke="rgba(99,102,241,0.15)" stroke-width="1"/>
            <rect x="38" y="68" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="38" y="78" width="66" height="12" rx="4" fill="rgba(99,102,241,0.3)"/>
            <rect x="134" y="58" width="96" height="42" rx="8" fill="rgba(255,255,255,0.9)" stroke="rgba(20,184,166,0.15)" stroke-width="1"/>
            <rect x="144" y="68" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="144" y="78" width="66" height="12" rx="4" fill="rgba(20,184,166,0.3)"/>
            <rect x="28" y="112" width="224" height="42" rx="8" fill="rgba(248,250,252,0.9)" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
            <rect x="38" y="122" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.08)"/>
            <rect x="170" y="120" width="68" height="9" rx="4" fill="rgba(99,102,241,0.2)"/>
            <rect x="38" y="138" width="60" height="5" rx="2.5" fill="rgba(15,23,42,0.06)"/>
            <rect x="170" y="136" width="68" height="9" rx="4" fill="rgba(245,158,11,0.2)"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">6</div>
          <div class="case-metric-label">roles, one platform, every trade</div>
          <div class="case-title">Building a Project Management Platform for Infrastructure Contractors</div>
          <div class="case-desc">We built Infra360 PMS — tracking PO to close-out across telecom, solar and civil sites, with material tracking, GST/TDS automation and live dashboards.</div>
          <div class="case-tags"><span class="case-tag">Infrastructure</span><span class="case-tag">Multi-Trade</span><span class="case-tag">PMS</span></div>
          <a href="/infra360PMS" class="case-cta">Learn More <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

<!-- Digital: aiDesker SaaS Platform -->
      <div class="case-card" data-cat="digital" onclick="location.href='/case-study/aidesker'" style="cursor:pointer">
        <div class="case-card-visual" style="background:#0d0020;padding:0;overflow:hidden">
          <img src="/assets/images/aidesker-hero.png" alt="aiDesker" style="width:100%;height:180px;object-fit:cover;object-position:center top;display:block"/>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">1-Line</div>
          <div class="case-metric-label">embed to go live on any site</div>
          <div class="case-title">Building a Multi-Tenant AI Chat Platform Any Business Can Embed in One Line</div>
          <div class="case-desc">We designed and built aiDesker, a full-stack SaaS platform with per-tenant data isolation, Stripe billing, a super admin layer and a one-line embeddable widget.</div>
          <div class="case-tags"><span class="case-tag">SaaS</span><span class="case-tag">Multi-Tenant</span><span class="case-tag">Embeddable Widget</span></div>
          <a href="/case-study/aidesker" class="case-cta">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

<!-- AI: aiDesker Conversational AI -->
      <div class="case-card" data-cat="ai" onclick="location.href='/case-study/aidesker'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="60" y="50" width="160" height="60" rx="16" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.3)" stroke-width="1.5"/>
            <circle cx="140" cy="75" r="16" fill="rgba(124,58,237,0.15)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <circle cx="140" cy="75" r="6" fill="rgba(124,58,237,0.35)"/>
            <rect x="85" y="97" width="110" height="5" rx="2.5" fill="rgba(124,58,237,0.2)"/>
            <rect x="20" y="62" width="30" height="38" rx="8" fill="rgba(255,255,255,0.7)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="26" y="70" width="18" height="4" rx="2" fill="rgba(124,58,237,0.2)"/>
            <rect x="26" y="78" width="14" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="230" y="62" width="30" height="38" rx="8" fill="rgba(20,184,166,0.1)" stroke="rgba(20,184,166,0.25)" stroke-width="1"/>
            <rect x="236" y="70" width="18" height="4" rx="2" fill="rgba(20,184,166,0.3)"/>
            <rect x="236" y="78" width="14" height="4" rx="2" fill="rgba(20,184,166,0.2)"/>
            <rect x="60" y="126" width="68" height="24" rx="8" fill="rgba(52,211,153,0.08)" stroke="rgba(52,211,153,0.2)" stroke-width="1"/>
            <rect x="152" y="126" width="68" height="24" rx="8" fill="rgba(245,158,11,0.08)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-ai">AI &amp; Automation</div>
          <div class="case-metric metric-ai">2</div>
          <div class="case-metric-label">AI providers, one unified chat proxy</div>
          <div class="case-title">Building a Knowledge-Grounded AI Chat Assistant Businesses Can Embed in One Line</div>
          <div class="case-desc">We built aiDesker, a conversational AI platform that grounds every response in a business's own knowledge base and captures leads mid-conversation.</div>
          <div class="case-tags"><span class="case-tag">Conversational AI</span><span class="case-tag">Lead Capture</span><span class="case-tag">RAG</span></div>
          <a href="/case-study/aidesker" class="case-cta violet">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>


      <div class="case-card" data-cat="digital" onclick="location.href='/case-study/telecom-pm-platform'" style="cursor:pointer">
        <div class="case-card-visual" style="padding:0;overflow:hidden">
          <img src="/assets/images/telecom-pm-dashboard.png" alt="Telecom Infrastructure PMS Dashboard" style="width:100%;height:200px;object-fit:cover;object-position:center top;display:block"/>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">2,200+</div>
          <div class="case-metric-label">projects tracked across 50+ vendors</div>
          <div class="case-title">Building a Telecom Infrastructure Project Management Platform for Venus Energy</div>
          <div class="case-desc">We designed and built a full-stack project, vendor and financial management platform for a vendor of Indus Towers that unified telecom infrastructure operations across multiple regions and roles.</div>
          <div class="case-tags"><span class="case-tag">Telecom</span><span class="case-tag">Project Management</span><span class="case-tag">Vendor Management</span></div>
          <a href="/case-study/telecom-pm-platform" class="case-cta">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

<!-- Digital: Enterprise Risk Platform -->
      <div class="case-card" data-cat="digital" onclick="location.href='/case-study/risk-platform'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#eef2ff,#e0e7ff)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="16" y="16" width="248" height="148" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(99,102,241,0.15)" stroke-width="1"/>
            <rect x="16" y="16" width="248" height="28" rx="12" fill="rgba(99,102,241,0.06)"/>
            <rect x="28" y="56" width="56" height="40" rx="6" fill="rgba(99,102,241,0.1)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
            <rect x="34" y="64" width="30" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="34" y="72" width="40" height="10" rx="3" fill="rgba(99,102,241,0.25)"/>
            <rect x="90" y="56" width="56" height="40" rx="6" fill="rgba(20,184,166,0.08)" stroke="rgba(20,184,166,0.18)" stroke-width="1"/>
            <rect x="96" y="64" width="30" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="96" y="72" width="40" height="10" rx="3" fill="rgba(20,184,166,0.25)"/>
            <rect x="152" y="56" width="56" height="40" rx="6" fill="rgba(245,158,11,0.08)" stroke="rgba(245,158,11,0.18)" stroke-width="1"/>
            <rect x="158" y="64" width="30" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="158" y="72" width="40" height="10" rx="3" fill="rgba(245,158,11,0.25)"/>
            <rect x="214" y="56" width="40" height="40" rx="6" fill="rgba(244,63,94,0.08)" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
            <rect x="220" y="64" width="24" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="220" y="72" width="28" height="10" rx="3" fill="rgba(244,63,94,0.2)"/>
            <rect x="28" y="108" width="110" height="44" rx="6" fill="rgba(248,250,252,0.9)" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
            <polyline points="36,140 52,130 68,134 84,124 100,118 116,122 130,114" stroke="rgba(99,102,241,0.6)" stroke-width="2" fill="none" stroke-linecap="round"/>
            <rect x="148" y="108" width="110" height="44" rx="6" fill="rgba(248,250,252,0.9)" stroke="rgba(226,232,240,0.8)" stroke-width="1"/>
            <rect x="156" y="122" width="10" height="22" rx="3" fill="rgba(99,102,241,0.25)"/>
            <rect x="170" y="116" width="10" height="28" rx="3" fill="rgba(20,184,166,0.3)"/>
            <rect x="184" y="120" width="10" height="24" rx="3" fill="rgba(245,158,11,0.3)"/>
            <rect x="198" y="112" width="10" height="32" rx="3" fill="rgba(99,102,241,0.35)"/>
            <rect x="212" y="118" width="10" height="26" rx="3" fill="rgba(244,63,94,0.25)"/>
            <rect x="226" y="114" width="10" height="30" rx="3" fill="rgba(99,102,241,0.4)"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">8</div>
          <div class="case-metric-label">risk categories unified in one platform</div>
          <div class="case-title">Building an Enterprise Risk & Compliance Platform for an FMCG Leader</div>
          <div class="case-desc">We built a full-stack risk assessment platform with severity matrix, real-time dashboards, role-based workflows and threaded communication across departments.</div>
          <div class="case-tags"><span class="case-tag">Enterprise</span><span class="case-tag">Compliance</span><span class="case-tag">FMCG</span></div>
          <a href="/case-study/risk-platform" class="case-cta">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

<!-- Data: Risk Intelligence Dashboard -->
<!-- Digital: iSportOne -->
      <div class="case-card" data-cat="digital" onclick="location.href='/case-study/isportone'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#fff1f2,#ffe4e6)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="16" y="16" width="248" height="148" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(244,63,94,0.15)" stroke-width="1"/>
            <rect x="16" y="16" width="248" height="28" rx="12" fill="rgba(244,63,94,0.06)"/>
            <circle cx="70" cy="80" r="26" fill="rgba(244,63,94,0.1)" stroke="rgba(244,63,94,0.25)" stroke-width="1"/>
            <circle cx="70" cy="70" r="10" fill="rgba(244,63,94,0.2)"/>
            <rect x="46" y="116" width="48" height="8" rx="4" fill="rgba(15,23,42,0.08)"/>
            <rect x="120" y="56" width="124" height="36" rx="8" fill="rgba(99,102,241,0.08)" stroke="rgba(99,102,241,0.18)" stroke-width="1"/>
            <rect x="130" y="66" width="60" height="5" rx="2.5" fill="rgba(99,102,241,0.25)"/>
            <rect x="130" y="78" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
            <rect x="120" y="100" width="124" height="36" rx="8" fill="rgba(20,184,166,0.08)" stroke="rgba(20,184,166,0.18)" stroke-width="1"/>
            <rect x="130" y="110" width="60" height="5" rx="2.5" fill="rgba(20,184,166,0.25)"/>
            <rect x="130" y="122" width="80" height="5" rx="2.5" fill="rgba(15,23,42,0.07)"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">4</div>
          <div class="case-metric-label">user roles in one adaptive platform</div>
          <div class="case-title">Building iSportOne: A Lifelong Sports Passport for Every Athlete, Everywhere</div>
          <div class="case-desc">We're designing a sports professional network combining a lifelong sports passport, adaptive profiles, club management and safe-by-design parental controls — for athletes of every level.</div>
          <div class="case-tags"><span class="case-tag">Sports Tech</span><span class="case-tag">Product Design</span><span class="case-tag">Social Platform</span></div>
          <a href="/case-study/isportone" class="case-cta">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

      <div class="case-card" data-cat="data" onclick="location.href='/case-study/risk-dashboard'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#fffbeb,#fef3c7)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="16" y="16" width="248" height="148" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="16" y="16" width="248" height="28" rx="12" fill="rgba(217,119,6,0.06)"/>
            <rect x="28" y="56" width="220" height="50" rx="6" fill="rgba(255,251,235,0.6)"/>
            <rect x="36" y="64" width="6" height="6" rx="1.5" fill="rgba(20,184,166,0.4)"/>
            <rect x="46" y="64" width="6" height="6" rx="1.5" fill="rgba(20,184,166,0.3)"/>
            <rect x="56" y="64" width="6" height="6" rx="1.5" fill="rgba(245,158,11,0.4)"/>
            <rect x="66" y="64" width="6" height="6" rx="1.5" fill="rgba(245,158,11,0.5)"/>
            <rect x="76" y="64" width="6" height="6" rx="1.5" fill="rgba(244,63,94,0.5)"/>
            <rect x="36" y="76" width="6" height="6" rx="1.5" fill="rgba(20,184,166,0.3)"/>
            <rect x="46" y="76" width="6" height="6" rx="1.5" fill="rgba(245,158,11,0.3)"/>
            <rect x="56" y="76" width="6" height="6" rx="1.5" fill="rgba(245,158,11,0.5)"/>
            <rect x="66" y="76" width="6" height="6" rx="1.5" fill="rgba(244,63,94,0.4)"/>
            <rect x="76" y="76" width="6" height="6" rx="1.5" fill="rgba(244,63,94,0.6)"/>
            <rect x="36" y="88" width="6" height="6" rx="1.5" fill="rgba(20,184,166,0.2)"/>
            <rect x="46" y="88" width="6" height="6" rx="1.5" fill="rgba(20,184,166,0.3)"/>
            <rect x="56" y="88" width="6" height="6" rx="1.5" fill="rgba(245,158,11,0.3)"/>
            <rect x="66" y="88" width="6" height="6" rx="1.5" fill="rgba(245,158,11,0.4)"/>
            <rect x="76" y="88" width="6" height="6" rx="1.5" fill="rgba(244,63,94,0.3)"/>
            <rect x="110" y="62" width="30" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="110" y="72" width="100" height="12" rx="4" fill="rgba(217,119,6,0.2)"/>
            <rect x="110" y="90" width="60" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <rect x="28" y="116" width="100" height="38" rx="6" fill="rgba(248,250,252,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <polyline points="36,144 52,134 68,138 84,128 100,122 116,126" stroke="rgba(217,119,6,0.6)" stroke-width="2" fill="none" stroke-linecap="round"/>
            <rect x="138" y="116" width="110" height="38" rx="6" fill="rgba(248,250,252,0.9)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="146" y="128" width="12" height="18" rx="3" fill="rgba(217,119,6,0.3)"/>
            <rect x="162" y="122" width="12" height="24" rx="3" fill="rgba(217,119,6,0.45)"/>
            <rect x="178" y="126" width="12" height="20" rx="3" fill="rgba(217,119,6,0.35)"/>
            <rect x="194" y="120" width="12" height="26" rx="3" fill="rgba(217,119,6,0.55)"/>
            <rect x="210" y="124" width="12" height="22" rx="3" fill="rgba(244,63,94,0.3)"/>
            <rect x="226" y="118" width="12" height="28" rx="3" fill="rgba(217,119,6,0.5)"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-data">Data Intelligence</div>
          <div class="case-metric metric-data">124</div>
          <div class="case-metric-label">risks tracked in real-time across departments</div>
          <div class="case-title">Real-Time Risk Intelligence Dashboard for an Enterprise FMCG Company</div>
          <div class="case-desc">We built a risk analytics dashboard with severity matrix visualisation, 12-month trend tracking and automated compliance scoring across 8 risk categories.</div>
          <div class="case-tags"><span class="case-tag">Risk Analytics</span><span class="case-tag">Dashboards</span><span class="case-tag">FMCG</span></div>
          <a href="/case-study/risk-dashboard" class="case-cta amber">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

      <!-- Digital: MealMate -->
      <div class="case-card" data-cat="digital" onclick="location.href='/case-study/mealmate'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#fffbeb,#fef3c7)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="16" y="16" width="248" height="148" rx="12" fill="rgba(255,255,255,0.7)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="100" y="26" width="80" height="128" rx="14" fill="rgba(255,255,255,0.9)" stroke="rgba(217,119,6,0.2)" stroke-width="1"/>
            <rect x="112" y="42" width="56" height="14" rx="5" fill="rgba(245,158,11,0.15)" stroke="rgba(217,119,6,0.18)" stroke-width="1"/>
            <rect x="112" y="62" width="56" height="28" rx="5" fill="#fff" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="120" y="70" width="24" height="4" rx="2" fill="rgba(217,119,6,0.3)"/>
            <rect x="120" y="78" width="36" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <rect x="112" y="96" width="56" height="28" rx="5" fill="rgba(245,158,11,0.08)" stroke="rgba(217,119,6,0.15)" stroke-width="1"/>
            <rect x="120" y="104" width="24" height="4" rx="2" fill="rgba(217,119,6,0.25)"/>
            <rect x="112" y="130" width="56" height="14" rx="7" fill="rgba(217,119,6,0.7)"/>
            <circle cx="50" cy="55" r="18" fill="rgba(217,119,6,0.1)" stroke="rgba(217,119,6,0.22)" stroke-width="1"/>
            <circle cx="50" cy="90" r="14" fill="rgba(20,184,166,0.1)" stroke="rgba(20,184,166,0.2)" stroke-width="1"/>
            <circle cx="226" cy="65" r="16" fill="rgba(245,158,11,0.1)" stroke="rgba(245,158,11,0.22)" stroke-width="1"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-digital">Digital Products</div>
          <div class="case-metric metric-digital">AI</div>
          <div class="case-metric-label">powered by GPT-4o-mini</div>
          <div class="case-title">Building an AI-Powered Family Meal Planning App</div>
          <div class="case-desc">We designed and built MealMate, a React Native app that delivers personalised, health-aware meal suggestions for every member of a family.</div>
          <div class="case-tags"><span class="case-tag">Mobile App</span><span class="case-tag">AI</span><span class="case-tag">Consumer</span></div>
          <a href="/case-study/mealmate" class="case-cta">View Full Case Study <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

      <!-- Digital: Legacy -->
            <!-- AI: LLM -->
      <div class="case-card" data-cat="ai">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="60" y="60" width="160" height="60" rx="16" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.3)" stroke-width="1.5"/>
            <circle cx="140" cy="85" r="16" fill="rgba(124,58,237,0.15)" stroke="rgba(124,58,237,0.25)" stroke-width="1"/>
            <circle cx="140" cy="85" r="6" fill="rgba(124,58,237,0.35)"/>
            <rect x="85" y="107" width="110" height="5" rx="2.5" fill="rgba(124,58,237,0.2)"/>
            <rect x="20" y="72" width="30" height="38" rx="8" fill="rgba(255,255,255,0.7)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="26" y="80" width="18" height="4" rx="2" fill="rgba(124,58,237,0.2)"/>
            <rect x="26" y="88" width="14" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="26" y="96" width="18" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <line x1="50" y1="91" x2="60" y2="91" stroke="rgba(124,58,237,0.3)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <rect x="230" y="72" width="30" height="38" rx="8" fill="rgba(52,211,153,0.1)" stroke="rgba(52,211,153,0.25)" stroke-width="1"/>
            <rect x="236" y="80" width="18" height="4" rx="2" fill="rgba(52,211,153,0.3)"/>
            <rect x="236" y="88" width="14" height="4" rx="2" fill="rgba(52,211,153,0.2)"/>
            <rect x="236" y="96" width="18" height="4" rx="2" fill="rgba(52,211,153,0.15)"/>
            <line x1="220" y1="91" x2="230" y2="91" stroke="rgba(52,211,153,0.3)" stroke-width="1.5" stroke-dasharray="3,2"/>
            <rect x="60" y="136" width="68" height="24" rx="8" fill="rgba(52,211,153,0.08)" stroke="rgba(52,211,153,0.2)" stroke-width="1"/>
            <rect x="152" y="136" width="68" height="24" rx="8" fill="rgba(245,158,11,0.08)" stroke="rgba(245,158,11,0.2)" stroke-width="1"/>
            <line x1="100" y1="120" x2="90" y2="136" stroke="rgba(124,58,237,0.2)" stroke-width="1" stroke-dasharray="2,2"/>
            <line x1="140" y1="120" x2="186" y2="136" stroke="rgba(124,58,237,0.2)" stroke-width="1" stroke-dasharray="2,2"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-ai">AI & Automation</div>
          <div class="case-metric metric-ai">75%</div>
          <div class="case-metric-label">reduction in document processing time</div>
          <div class="case-title">Integrating LLMs Into a Legal Document Processing Platform</div>
          <div class="case-desc">We integrated large language models into a legal SaaS platform, automating document review and contract analysis.</div>
          <div class="case-tags"><span class="case-tag">LLM</span><span class="case-tag">Legal Tech</span></div>
          <a href="/contact" class="case-cta violet">Discuss a Similar Project <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

      <!-- AI: Automation -->
      <div class="case-card" data-cat="ai">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#fdf4ff,#fae8ff)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="24" y="30" width="68" height="60" rx="10" fill="rgba(255,255,255,0.7)" stroke="rgba(124,58,237,0.2)" stroke-width="1"/>
            <rect x="34" y="44" width="48" height="5" rx="2.5" fill="rgba(124,58,237,0.25)"/>
            <rect x="34" y="54" width="40" height="4" rx="2" fill="rgba(15,23,42,0.08)"/>
            <rect x="34" y="63" width="48" height="4" rx="2" fill="rgba(15,23,42,0.06)"/>
            <line x1="92" y1="60" x2="120" y2="60" stroke="rgba(124,58,237,0.3)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <polygon points="118,56 126,60 118,64" fill="rgba(124,58,237,0.3)"/>
            <rect x="106" y="30" width="68" height="60" rx="10" fill="rgba(124,58,237,0.1)" stroke="rgba(124,58,237,0.28)" stroke-width="1.5"/>
            <circle cx="140" cy="58" r="14" fill="rgba(124,58,237,0.15)"/>
            <circle cx="140" cy="58" r="6" fill="rgba(124,58,237,0.3)"/>
            <rect x="116" y="78" width="48" height="4" rx="2" fill="rgba(124,58,237,0.15)"/>
            <line x1="174" y1="60" x2="200" y2="60" stroke="rgba(124,58,237,0.3)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <polygon points="198,56 206,60 198,64" fill="rgba(124,58,237,0.3)"/>
            <rect x="188" y="30" width="68" height="60" rx="10" fill="rgba(52,211,153,0.08)" stroke="rgba(52,211,153,0.25)" stroke-width="1"/>
            <rect x="198" y="44" width="48" height="5" rx="2.5" fill="rgba(52,211,153,0.35)"/>
            <rect x="198" y="54" width="40" height="4" rx="2" fill="rgba(52,211,153,0.2)"/>
            <rect x="198" y="63" width="48" height="4" rx="2" fill="rgba(52,211,153,0.15)"/>
            <rect x="40" y="114" width="200" height="40" rx="10" fill="rgba(255,255,255,0.7)" stroke="rgba(124,58,237,0.12)" stroke-width="1"/>
            <rect x="52" y="124" width="80" height="5" rx="2.5" fill="rgba(124,58,237,0.2)"/>
            <rect x="52" y="134" width="120" height="4" rx="2" fill="rgba(15,23,42,0.07)"/>
            <circle cx="224" cy="134" r="8" fill="rgba(52,211,153,0.2)"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-ai">AI & Automation</div>
          <div class="case-metric metric-ai">300+</div>
          <div class="case-metric-label">hours saved every month</div>
          <div class="case-title">Automating Finance Operations Saving 300+ Hours Monthly</div>
          <div class="case-desc">We automated invoice processing, reconciliation and reporting workflows for a finance team, eliminating manual errors entirely.</div>
          <div class="case-tags"><span class="case-tag">Finance</span><span class="case-tag">Automation</span></div>
          <a href="/contact" class="case-cta violet">Discuss a Similar Project <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>

            <!-- Data: Unified -->
            <!-- Data: Predictions -->
      <div class="case-card" data-cat="data" onclick="location.href='/case-study/risk-dashboard'" style="cursor:pointer">
        <div class="case-card-visual" style="background:linear-gradient(135deg,#fffbeb,#fef3c7)">
          <svg viewBox="0 0 280 180" width="280" height="180" xmlns="http://www.w3.org/2000/svg">
            <rect x="16" y="24" width="248" height="120" rx="10" fill="rgba(255,255,255,0.6)"/>
            <polyline points="28,128 56,110 84,116 112,96 140,82 168,88 196,70 220,58" stroke="rgba(217,119,6,0.7)" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            <polyline points="220,58 240,48 256,40 264,36" stroke="rgba(217,119,6,0.35)" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="5,3"/>
            <polygon points="28,128 56,110 84,116 112,96 140,82 168,88 196,70 220,58 220,140 28,140" fill="rgba(217,119,6,0.06)"/>
            <line x1="220" y1="24" x2="220" y2="144" stroke="rgba(217,119,6,0.2)" stroke-width="1" stroke-dasharray="3,3"/>
            <rect x="226" y="30" width="46" height="20" rx="6" fill="rgba(255,251,235,0.9)" stroke="rgba(217,119,6,0.2)" stroke-width="1"/>
            <rect x="232" y="36" width="34" height="4" rx="2" fill="rgba(217,119,6,0.3)"/>
            <circle cx="220" cy="58" r="5" fill="rgba(217,119,6,0.7)"/>
            <rect x="16" y="152" width="248" height="8" rx="2" fill="rgba(217,119,6,0.06)"/>
            <rect x="16" y="152" width="148" height="8" rx="2" fill="rgba(217,119,6,0.2)"/>
          </svg>
        </div>
        <div class="case-card-body">
          <div class="case-category cat-data">Data Intelligence</div>
          <div class="case-metric metric-data">45%</div>
          <div class="case-metric-label">reduction in inventory waste</div>
          <div class="case-title">Predictive Analytics That Reduced Inventory Waste by 45%</div>
          <div class="case-desc">We built a predictive analytics model that forecasted demand with 92% accuracy, reducing overstock and waste by 45% in the first quarter.</div>
          <div class="case-tags"><span class="case-tag">Predictions</span><span class="case-tag">Manufacturing</span></div>
          <a href="/contact" class="case-cta amber">Discuss a Similar Project <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </div>


      
      
    </div><!-- /cases-grid -->

    <div class="no-results" id="no-results">No case studies found for this category.</div>

  </div>
</div>

<!-- ── Bottom CTA ── -->
<section class="bottom-cta">
  <div class="bottom-cta-card">
    <div class="bcta-left">
      <div class="bcta-tag">Ready to get started?</div>
      <h2 class="bcta-h2">Let's Build Your<br><em>Success Story</em></h2>
      <p class="bcta-sub">Whether it's a digital product, AI integration or data intelligence — we have the expertise to deliver results that matter to your business.</p>
      <div class="trust-row">
        <div class="trust-item"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Free 30-min call</div>
        <div class="trust-item"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> Response in 24h</div>
        <div class="trust-item"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg> No commitment</div>
      </div>
    </div>
    <div class="bcta-right">
      <a href="/contact" class="bcta-btn-primary">
        <div>
          <div class="bcta-btn-label">Book a Discovery Call</div>
          <div class="bcta-btn-sub">Free 30-minute strategy session</div>
        </div>
        <div class="bcta-btn-icon"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
      </a>
      <a href="/contact" class="bcta-btn-secondary">
        <div>
          <div class="bcta-btn-label">Send us a message</div>
          <div class="bcta-btn-sub" style="color:rgba(255,255,255,0.35);margin-top:2px">info@idataone.com</div>
        </div>
        <div class="bcta-btn-icon" style="border:1px solid rgba(255,255,255,0.1);background:transparent"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/_footer.php'; ?>

<script>
function filterCases(cat, btn) {
  // Update active button
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  // Filter featured card
  const featured = document.querySelector('.case-item[data-cat]');
  if(featured) {
    featured.style.display = (cat === 'all' || featured.dataset.cat === cat) ? 'contents' : 'none';
  }

  // Filter grid cards
  let visible = 0;
  document.querySelectorAll('#cases-grid .case-card').forEach(card => {
    const show = cat === 'all' || card.dataset.cat === cat;
    card.style.display = show ? 'block' : 'none';
    if(show) visible++;
  });

  document.getElementById('no-results').classList.toggle('show', visible === 0 && cat !== 'all');
}
</script>
</body>
</html>
