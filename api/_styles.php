<style>
/* ── Shared Nav ── */
.site-nav{position:fixed;top:0;left:0;right:0;height:68px;display:flex;align-items:center;gap:40px;padding:0 32px;z-index:100;background:rgba(238,240,250,0.85);backdrop-filter:blur(12px);border-bottom:1px solid rgba(99,102,241,0.08)}
.site-nav .nav-logo{text-decoration:none;flex-shrink:0}
.site-nav .nav-logo img{height:40px;width:auto;opacity:0.92}
.site-nav .nav-links{display:flex;gap:28px;align-items:center}
.site-nav .nav-links a{font-size:13px;font-weight:500;color:#475569;text-decoration:none;transition:color 0.2s;cursor:default}
.site-nav .nav-links a[href]{cursor:pointer}
.site-nav .nav-links a[href]:hover{color:#4f46e5}
.site-nav .nav-links a.active{color:#4f46e5;font-weight:600;cursor:pointer}

/* ── Shared Footer ── */
.site-footer{background:#0a0d18;padding:56px 32px 32px}
.site-footer .footer-inner{max-width:1140px;margin:0 auto}
.site-footer .footer-top{display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:48px;margin-bottom:48px}
.site-footer .footer-logo{margin-bottom:12px}
.site-footer .footer-logo img{height:36px;opacity:0.85;filter:brightness(0) invert(1)}
.site-footer .footer-tagline{font-size:12.5px;color:rgba(255,255,255,0.3);line-height:1.65}
.site-footer .footer-col-title{font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:rgba(255,255,255,0.35);margin-bottom:16px}
.site-footer .footer-links{list-style:none;display:flex;flex-direction:column;gap:10px}
.site-footer .footer-links a{font-size:13px;color:rgba(255,255,255,0.45);text-decoration:none;transition:color 0.2s;cursor:default}
.site-footer .footer-links a[href]{cursor:pointer}
.site-footer .footer-links a[href]:hover{color:rgba(255,255,255,0.8)}
.site-footer .footer-bottom{border-top:1px solid rgba(255,255,255,0.06);padding-top:24px;display:flex;justify-content:space-between;align-items:center}
.site-footer .footer-copy{font-size:12px;color:rgba(255,255,255,0.2)}
.site-footer .footer-email{font-size:13px;color:rgba(255,255,255,0.35);text-decoration:none;transition:color 0.2s}
.site-footer .footer-email:hover{color:rgba(255,255,255,0.7)}

@media(max-width:768px){
  .site-nav .nav-links{display:none}
  .site-footer .footer-top{grid-template-columns:1fr 1fr}
}
</style>
