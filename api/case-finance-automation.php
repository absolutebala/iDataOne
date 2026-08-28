<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/_gtm_head.php'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study: Automating Finance Operations in Infra360 PMS, Saving 300+ Hours Monthly | iDataOne</title>
<meta name="description" content="How iDataOne built an AI-powered finance and document automation module inside Infra360 PMS — reading PDFs and images to auto-create projects and STN/SRN items, automating invoice reconciliation and reporting — saving 300+ hours a month.">
<meta name="keywords" content="Infra360 PMS finance automation, invoice processing automation, AI document extraction, PDF data extraction, STN SRN automation, reconciliation automation, iDataOne">
<meta name="robots" content="index, follow">
<meta property="og:type" content="article">
<meta property="og:title" content="Case Study: Automating Finance Operations in Infra360 PMS, Saving 300+ Hours Monthly | iDataOne">
<meta property="og:description" content="How iDataOne built an AI-powered finance and document automation module inside Infra360 PMS — reading PDFs and images to auto-create projects and STN/SRN items, automating invoice reconciliation and reporting — saving 300+ hours a month.">
<meta property="og:url" content="https://idataone.com/case-study/finance-automation">
<meta property="og:image" content="https://idataone.com/assets/images/og-finance-automation.png">
<meta property="og:site_name" content="iDataOne">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Study: Automating Finance Operations in Infra360 PMS, Saving 300+ Hours Monthly | iDataOne">
<meta name="twitter:description" content="How iDataOne built an AI-powered finance and document automation module inside Infra360 PMS — reading PDFs and images to auto-create projects and STN/SRN items, automating invoice reconciliation and reporting — saving 300+ hours a month.">
<meta name="twitter:image" content="https://idataone.com/assets/images/og-finance-automation.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Automating Finance Operations in Infra360 PMS, Saving 300+ Hours Monthly",
  "description": "How iDataOne extended Infra360 PMS with a finance automation module — invoice processing, reconciliation and reporting workflows, plus AI document extraction that reads PDFs and images to auto-create projects and STN/SRN items.",
  "author": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com"},
  "publisher": {"@type": "Organization", "name": "iDataOne", "url": "https://idataone.com", "logo": {"@type": "ImageObject", "url": "https://idataone.com/assets/images/iDataOneLogoFinal.png"}},
  "url": "https://idataone.com/case-study/finance-automation",
  "mainEntityOfPage": "https://idataone.com/case-study/finance-automation",
  "about": [
    {"@type": "Thing", "name": "Finance Process Automation"},
    {"@type": "Thing", "name": "AI Document Extraction"},
    {"@type": "Thing", "name": "Invoice Reconciliation"}
  ],
  "keywords": "finance automation, invoice processing, AI document extraction, STN SRN automation, reconciliation, reporting automation"
}
</script>
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="canonical" href="https://idataone.com/case-study/finance-automation">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<?php include __DIR__ . '/_footer_css.php'; ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;color:#0f172a;background:#fff;overflow-x:hidden;padding-top:68px}

/* Hero */
.cs-hero{min-height:100vh;display:flex;align-items:center;padding:80px 0 60px;position:relative;overflow:hidden;background:radial-gradient(ellipse at 10% 30%,rgba(5,150,105,0.1),transparent 45%),radial-gradient(ellipse at 90% 10%,rgba(16,185,129,0.08),transparent 40%),linear-gradient(135deg,#f8fafc 0%,#ecfdf5 45%,#d1fae5 100%)}
.cs-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(5,150,105,0.15),transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(16,185,129,0.12),transparent 50%);pointer-events:none}
.cs-hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:80px 80px;pointer-events:none}
.cs-hero-inner{max-width:1140px;margin:0 auto;padding:0 32px;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.cs-hero-img{display:flex;align-items:center;justify-content:center}
.cs-hero-img img{width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(5,150,105,0.18),0 8px 24px rgba(15,23,42,0.12);transition:transform 0.4s ease;cursor:zoom-in}
.cs-hero-img img:hover{transform:translateY(-4px)}
.cs-badge{display:inline-block;padding:5px 14px;border-radius:999px;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1);font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:#059669;margin-bottom:24px}
.cs-hero-title{font-size:clamp(28px,4vw,46px);font-weight:800;letter-spacing:-2px;line-height:1.1;color:#0f172a;margin-bottom:20px;max-width:800px}
.cs-hero-sub{font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;max-width:600px}
.cs-hero-stats{display:flex;gap:40px;padding-top:28px;border-top:1px solid rgba(0,0,0,0.07);flex-wrap:wrap}
.cs-stat{text-align:left}
.cs-stat-num{font-size:26px;font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.2}
.cs-stat-num span{background:linear-gradient(90deg,#059669,#10b981);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-stat-label{font-size:12px;color:#94a3b8;margin-top:4px}

/* Sections */
.cs-section{padding:80px 32px}
.cs-inner{max-width:1140px;margin:0 auto}
.cs-tag{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#059669;margin-bottom:14px}
.cs-h2{font-size:clamp(24px,3vw,36px);font-weight:800;letter-spacing:-1.5px;color:#0f172a;line-height:1.15;margin-bottom:16px}
.cs-p{font-size:15px;color:#64748b;line-height:1.8;margin-bottom:20px}
.cs-alt{background:#f8fafc}

/* Challenge/Solution grid */
.cs-grid{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-top:32px}
.cs-grid-card{background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px;padding:28px}
.cs-grid-card.dark{background:#0f172a;border-color:rgba(16,185,129,0.15)}
.cs-grid-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.cs-grid-icon svg{width:20px;height:20px;fill:none;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-grid-title{font-size:16px;font-weight:700;color:#0f172a;margin-bottom:8px}
.cs-grid-desc{font-size:13px;color:#64748b;line-height:1.7}
.cs-grid-card.dark .cs-grid-title{color:#f1f5f9}
.cs-grid-card.dark .cs-grid-desc{color:rgba(255,255,255,0.45)}

/* Visual */
.cs-visual{margin:48px 0;border-radius:20px;overflow:hidden;border:1px solid rgba(226,232,240,0.6);display:flex;align-items:center;justify-content:center;padding:40px;background:linear-gradient(135deg,#f8fafc,#ecfdf5)}

/* Flow diagram */
.cs-flow{display:flex;align-items:center;gap:0;flex-wrap:wrap;justify-content:center;width:100%}
.cs-flow-step{background:#fff;border:1px solid rgba(5,150,105,0.18);border-radius:14px;padding:20px 22px;text-align:center;width:150px;box-shadow:0 4px 14px rgba(0,0,0,0.05)}
.cs-flow-step-icon{width:36px;height:36px;border-radius:10px;background:#ecfdf5;border:1px solid rgba(5,150,105,0.15);display:flex;align-items:center;justify-content:center;margin:0 auto 10px}
.cs-flow-step-icon svg{width:18px;height:18px;fill:none;stroke:#059669;stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}
.cs-flow-step-label{font-size:12.5px;font-weight:700;color:#0f172a;line-height:1.4}
.cs-flow-arrow{width:32px;height:32px;flex-shrink:0;display:flex;align-items:center;justify-content:center;color:#a7f3d0}
.cs-flow-arrow svg{width:20px;height:20px;fill:none;stroke:currentColor;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}

/* Features list */
.cs-features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px}
.cs-feature{display:flex;gap:14px;align-items:flex-start}
.cs-feature-icon{width:36px;height:36px;border-radius:10px;background:#ecfdf5;border:1px solid rgba(5,150,105,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.cs-feature-icon svg{width:16px;height:16px;fill:none;stroke:#059669;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.cs-feature-title{font-size:14px;font-weight:600;color:#0f172a;margin-bottom:3px}
.cs-feature-desc{font-size:12.5px;color:#94a3b8;line-height:1.6}

/* Results */
.cs-results{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:36px}
.cs-result{text-align:center;padding:24px 16px;background:#fff;border:1px solid rgba(226,232,240,0.8);border-radius:16px}
.cs-result-num{font-size:28px;font-weight:800;letter-spacing:-1px;background:linear-gradient(90deg,#059669,#10b981);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-result-label{font-size:12px;color:#94a3b8;margin-top:4px;line-height:1.4}

/* Quote */
.cs-quote{margin:48px 0;padding:32px 36px;border-left:3px solid #059669;background:#f8fafc;border-radius:0 16px 16px 0}
.cs-quote-text{font-size:16px;color:#334155;line-height:1.75;font-style:italic;margin-bottom:12px}
.cs-quote-author{font-size:13px;font-weight:600;color:#94a3b8}

/* CTA */
.cs-cta{padding:48px 32px 80px;background:#fff}
.cs-cta-card{max-width:800px;margin:0 auto;background:#0f172a;border-radius:24px;padding:40px 48px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:space-between;gap:32px}
.cs-cta-card::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%,rgba(16,185,129,0.2),transparent 60%);pointer-events:none}
.cs-cta-left{position:relative;z-index:1}
.cs-cta-h3{font-size:22px;font-weight:800;color:#f1f5f9;letter-spacing:-0.5px;margin-bottom:8px}
.cs-cta-h3 em{font-style:normal;background:linear-gradient(90deg,#34d399,#6ee7b7);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.cs-cta-sub{font-size:14px;color:rgba(255,255,255,0.4)}
.cs-cta-btn{position:relative;z-index:1;display:inline-flex;align-items:center;gap:8px;padding:14px 24px;border-radius:12px;background:linear-gradient(90deg,#059669,#10b981);color:#fff;font-size:14px;font-weight:600;text-decoration:none;white-space:nowrap;transition:opacity 0.2s;flex-shrink:0}
.cs-cta-btn:hover{opacity:0.9}

/* Back link */
.cs-back{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:500;color:#94a3b8;text-decoration:none;margin-bottom:24px;transition:color 0.2s}
.cs-back:hover{color:#059669}
.cs-back svg{width:14px;height:14px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

@media(max-width:768px){
  .cs-hero-inner{grid-template-columns:1fr}
  .cs-hero-img{display:none}
  .cs-hero-stats{flex-wrap:wrap;gap:24px}
  .cs-grid{grid-template-columns:1fr}
  .cs-features{grid-template-columns:1fr}
  .cs-results{grid-template-columns:1fr 1fr}
  .cs-cta-card{flex-direction:column;padding:32px 24px;text-align:center}
  .cs-flow{flex-direction:column}
  .cs-flow-step{width:100%;max-width:280px}
  .cs-flow-arrow{transform:rotate(90deg)}
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
      <h1 class="cs-hero-title">Automating Finance Operations Saving 300+ Hours Monthly</h1>
      <p class="cs-hero-sub">How we extended <a href="/infra360PMS" style="color:#059669;font-weight:600;text-decoration:none;border-bottom:1px solid rgba(5,150,105,0.35)">Infra360 PMS</a>, our infrastructure project management platform, with a finance automation module — automating invoice processing, reconciliation and reporting, and adding AI document extraction that reads a PDF or image and creates the project and material entries by itself.</p>
      <div class="cs-hero-stats">
        <div class="cs-stat"><div class="cs-stat-num"><span>300+</span></div><div class="cs-stat-label">Hours Saved Every Month</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>Zero</span></div><div class="cs-stat-label">Manual Entry Errors</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>PDF &amp; Image</span></div><div class="cs-stat-label">AI Document Extraction</div></div>
        <div class="cs-stat"><div class="cs-stat-num"><span>Auto</span></div><div class="cs-stat-label">STN / SRN Item Creation</div></div>
      </div>
    </div>
    <div class="cs-hero-img">
      <span class="hz-wrap"><img src="/assets/images/finance-automation-hero.png" alt="AI document extraction inside Infra360 PMS — invoice processing, reconciliation and reporting automated, saving 300+ hours a month" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>
  </div>
</section>

<!-- Challenge -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Challenge</div>
    <h2 class="cs-h2">Inside Infra360 PMS, Finance Work Was Still Manual</h2>
    <p class="cs-p">Infra360 PMS already tracked infrastructure projects end to end — from PO award through material movement to close-out. But the finance side of that workflow was still manual: the finance team was keying in invoices, delivery challans and purchase orders line by line into the platform, re-typing vendor details, quantities and amounts before anything could be reconciled or reported on. Every project's STN (Stock Transfer Note) and SRN (Stock Receipt Note) items had to be entered by hand from paper or scanned documents, which was slow and left plenty of room for typos and mismatched figures.</p>
    <p class="cs-p">Reconciliation and monthly reporting compounded the problem — someone still had to cross-check invoices against POs already in the system and stitch together numbers from multiple projects before the books were closed. It was adding up to well over 300 hours of manual work every month, with errors that were expensive to trace back and fix.</p>
  </div>
</section>

<!-- Solution -->
<section class="cs-section cs-alt">
  <div class="cs-inner">
    <div class="cs-tag">The Solution</div>
    <h2 class="cs-h2">A Finance Automation Module, Built Into Infra360 PMS</h2>
    <p class="cs-p">Rather than a separate tool, we built the automation directly into Infra360 PMS — automating the finance team's invoice processing, reconciliation and reporting workflows on top of the existing project and material data. Then we went a step further and added an AI extraction layer that turns a single uploaded document into a fully created project or STN/SRN record inside the platform, no separate app or re-entry required.</p>

    <div class="cs-visual" style="padding:0;background:none;border:none">
      <span class="hz-wrap"><img src="/assets/images/finance-automation-architecture.png" alt="Finance automation architecture inside Infra360 PMS — document input, AI document extraction, project creation, STN/SRN entry, automated reconciliation and reporting" style="width:100%;height:auto;display:block;border-radius:20px;box-shadow:0 24px 64px rgba(5,150,105,0.18),0 8px 24px rgba(15,23,42,0.12);cursor:zoom-in" onclick="hzOpen(this.src,this.alt)" onmouseover="hzHover(this)"><span class="hz-icon"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></span></span>
    </div>

    <div class="cs-features">
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div><div class="cs-feature-title">AI Document Extraction</div><div class="cs-feature-desc">Inside Infra360 PMS, upload any invoice, delivery challan or PO as a PDF or photo — the AI reads and structures every field automatically.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div><div class="cs-feature-title">Automatic Project Creation</div><div class="cs-feature-desc">Extracted details are used to create the project record directly in the platform — no re-typing from the source document.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12a2 2 0 0 0 2 2h14v-4"/><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"/></svg></div>
        <div><div class="cs-feature-title">Auto STN / SRN Item Entry</div><div class="cs-feature-desc">Material line items are parsed straight into Infra360 PMS's Stock Transfer Notes and Stock Receipt Notes, matched to the right project.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div><div class="cs-feature-title">Automated Reconciliation</div><div class="cs-feature-desc">Invoices are matched against purchase orders already in the platform, flagging mismatches instead of relying on manual cross-checks.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <div><div class="cs-feature-title">Automated Reporting</div><div class="cs-feature-desc">Monthly finance reports are generated directly from Infra360 PMS's project and billing data — no manual consolidation across spreadsheets.</div></div>
      </div>
      <div class="cs-feature">
        <div class="cs-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <div><div class="cs-feature-title">Zero Manual Errors</div><div class="cs-feature-desc">Removing manual re-entry eliminated the typos and mismatched figures that used to require rework and tracing.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- Results -->
<section class="cs-section">
  <div class="cs-inner">
    <div class="cs-tag">The Results</div>
    <h2 class="cs-h2">From Manual Re-Keying to Upload-and-Done, Inside Infra360 PMS</h2>
    <p class="cs-p">Finance staff now upload a document straight into Infra360 PMS and the platform takes over — projects and material entries appear automatically, invoices reconcile against POs without manual checking, and monthly reports are ready without spreadsheet consolidation. What used to take days each month now happens continuously in the background, without ever leaving the platform they already work in.</p>
    <div class="cs-results">
      <div class="cs-result"><div class="cs-result-num">300+</div><div class="cs-result-label">Hours saved<br>every month</div></div>
      <div class="cs-result"><div class="cs-result-num">100%</div><div class="cs-result-label">Elimination of<br>manual entry errors</div></div>
      <div class="cs-result"><div class="cs-result-num">Seconds</div><div class="cs-result-label">To extract a full<br>document's data</div></div>
      <div class="cs-result"><div class="cs-result-num">Auto</div><div class="cs-result-label">Invoice-to-PO<br>reconciliation</div></div>
    </div>

    <div class="cs-quote">
      <div class="cs-quote-text">"We used to spend days every month keying invoices and material documents into Infra360 PMS. Now we just upload them — the project and STN/SRN items are already there, with zero errors to chase down."</div>
      <div class="cs-quote-author">— Finance Team Lead, Infra360 PMS User</div>
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
        <div class="cs-grid-icon" style="background:#ecfdf5;border:1px solid rgba(5,150,105,0.15)"><svg viewBox="0 0 24 24" stroke="#059669"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
        <div class="cs-grid-title">AI Document Extraction</div>
        <div class="cs-grid-desc">A vision-and-language model reads uploaded PDFs and images, structuring vendor, line-item, quantity and amount data automatically.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f0fdf4;border:1px solid rgba(20,184,166,0.15)"><svg viewBox="0 0 24 24" stroke="#0d9488"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12a2 2 0 0 0 2 2h14v-4"/><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"/></svg></div>
        <div class="cs-grid-title">Built as an Infra360 PMS Module</div>
        <div class="cs-grid-desc">Extracted data flows straight into Infra360 PMS's own project and STN/SRN records — no separate app, database or hand-off to manage.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#fffbeb;border:1px solid rgba(245,158,11,0.15)"><svg viewBox="0 0 24 24" stroke="#d97706"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
        <div class="cs-grid-title">Reconciliation Engine</div>
        <div class="cs-grid-desc">Automated matching between invoices and purchase orders, with discrepancies flagged for review instead of manual checking.</div>
      </div>
      <div class="cs-grid-card">
        <div class="cs-grid-icon" style="background:#f5f3ff;border:1px solid rgba(124,58,237,0.15)"><svg viewBox="0 0 24 24" stroke="#7c3aed"><path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-6"/></svg></div>
        <div class="cs-grid-title">Automated Reporting</div>
        <div class="cs-grid-desc">Scheduled and on-demand finance reports generated directly from live, reconciled data — no manual spreadsheet work.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cs-cta">
  <div class="cs-cta-card">
    <div class="cs-cta-left">
      <h3 class="cs-cta-h3">Want to Automate <em>Your Finance Ops?</em></h3>
      <p class="cs-cta-sub">Whether it's inside an existing platform like Infra360 PMS or a new one, let's discuss how we can build it for your team.</p>
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
  window.hzOpen=function(src,alt){ clearTimeout(closeTimer); im.src=src; im.alt=alt||''; ov.style.display='flex'; requestAnimationFrame(function(){ requestAnimationFrame(function(){ ov.style.background='rgba(0,0,0,0.85)'; im.style.transform='scale(1)'; im.style.opacity='1'; }); }); };
  window.hzHover=function(el){ if(el.dataset.hzSeen) return; el.dataset.hzSeen='1'; window.hzOpen(el.src,el.alt); };
  window.hzClose=function(){ ov.style.background='rgba(0,0,0,0)'; im.style.transform='scale(0.85)'; im.style.opacity='0'; clearTimeout(closeTimer); closeTimer=setTimeout(function(){ ov.style.display='none'; },320); };
  document.addEventListener('keydown',function(e){ if(e.key==='Escape') window.hzClose(); });
})();
</script>

<?php include __DIR__ . '/_footer.php'; ?>

</body>
</html>
