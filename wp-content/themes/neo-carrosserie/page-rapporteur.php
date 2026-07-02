<?php get_header(); ?>

  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 20px">
    <img src="/wp-content/themes/neo-carrosserie/assets/mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:380px;opacity:.07;pointer-events:none;user-select:none">
    <div class="neo-rapp-badge" style="position:absolute;right:34px;top:20px;z-index:2;width:236px;height:236px;border-radius:50%;background:linear-gradient(135deg,#FBB615,#F26A12 55%,#E5390B);box-shadow:0 20px 46px rgba(229,57,11,.44);transform:rotate(-9deg);display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;border:5px solid rgba(255,255,255,.35)">
      <span style="font:900 74px/0.9 Archivo;color:#fff">10%</span>
      <span style="font:800 13px/1.25 Manrope;letter-spacing:.06em;text-transform:uppercase;color:#fff;margin-top:8px;padding:0 22px" data-i18n="macaron.txt">de rémunération par contrat</span>
    </div>
    <div style="position:relative;max-width:560px">
      <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12" data-i18n="hero.kicker">Rapporteur d'affaires</div>
      <h1 style="font:800 58px/0.98 Archivo;letter-spacing:-.025em;margin:18px 0 0" data-i18n="hero.title">Vous nous envoyez un client, on vous récompense.</h1>
      <p style="font:400 19px/1.6 Manrope;color:#5E5C57;margin:22px 0 0" data-i18n="hero.sub">Un voisin, un collègue ou un client a besoin de carrosserie ? Recommandez NEO Carrosserie Aigle et touchez une prime dès que la réparation est réalisée.</p>
    </div>
  </section>

  <!-- ÉTAPES -->
  <section style="max-width:1180px;margin:0 auto;padding:70px 44px 30px">
    <div style="margin-bottom:34px">
      <div style="font:700 13px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12" data-i18n="steps.kicker">Comment ça marche</div>
      <h2 style="font:800 36px/1.05 Archivo;letter-spacing:-.02em;margin:10px 0 0" data-i18n="steps.title">Trois étapes, c'est tout</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:18px">
      <div style="position:relative;overflow:hidden;background:#fff;border:1px solid #e7e3db;border-radius:18px;padding:32px 28px">
        <span style="position:absolute;right:16px;top:-14px;font:900 96px Archivo;color:#F26A12;opacity:.09;line-height:1">1</span>
        <h3 style="font:800 21px Archivo;margin:0 0 8px;position:relative" data-i18n="step1.t">Vous recommandez</h3>
        <p style="font:400 15px/1.6 Manrope;color:#5E5C57;margin:0;position:relative" data-i18n="step1.d">Transmettez-nous le contact de la personne via le formulaire ci-dessous.</p>
      </div>
      <div style="position:relative;overflow:hidden;background:#fff;border:1px solid #e7e3db;border-radius:18px;padding:32px 28px">
        <span style="position:absolute;right:16px;top:-14px;font:900 96px Archivo;color:#F26A12;opacity:.09;line-height:1">2</span>
        <h3 style="font:800 21px Archivo;margin:0 0 8px;position:relative" data-i18n="step2.t">On s'occupe de tout</h3>
        <p style="font:400 15px/1.6 Manrope;color:#5E5C57;margin:0;position:relative" data-i18n="step2.d">Devis, prise en charge et réparation du véhicule, dans les règles de l'art.</p>
      </div>
      <div style="position:relative;overflow:hidden;background:#fff;border:1px solid #e7e3db;border-radius:18px;padding:32px 28px">
        <span style="position:absolute;right:16px;top:-14px;font:900 96px Archivo;color:#F26A12;opacity:.09;line-height:1">3</span>
        <h3 style="font:800 21px Archivo;margin:0 0 8px;position:relative" data-i18n="step3.t">Vous touchez votre prime</h3>
        <p style="font:400 15px/1.6 Manrope;color:#5E5C57;margin:0;position:relative" data-i18n="step3.d">Dès la réparation terminée et payée, votre rémunération de 10 % vous est versée.</p>
      </div>
    </div>
  </section>

  <!-- FORMULAIRE -->
  <section id="form" style="max-width:1180px;margin:0 auto;padding:30px 44px 80px">
    <div class="neo-rapp" style="display:flex;flex-wrap:wrap;gap:30px;align-items:flex-start">
      <!-- Récap prime -->
      <div style="flex:1 1 300px;min-width:280px">
        <div style="background:linear-gradient(135deg,#05192b,#0a3050 55%,#114061);color:#fff;border-radius:22px;padding:34px 30px">
          <div style="display:inline-flex;align-items:baseline;gap:7px"><span style="font:900 48px/1 Archivo;color:#FBB615">10%</span><span style="font:700 13px Manrope;color:#c9c4bb">par contrat</span></div>
          <h3 style="font:800 22px/1.15 Archivo;margin:16px 0 16px">Une prime à chaque client transmis</h3>
          <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:13px">
            <li style="display:flex;align-items:flex-start;gap:10px;font:500 15px/1.4 Manrope;color:#e8e4dd"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FBB615" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"/></svg>Recommandations illimitées</li>
            <li style="display:flex;align-items:flex-start;gap:10px;font:500 15px/1.4 Manrope;color:#e8e4dd"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FBB615" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"/></svg>Versée dès la réparation payée</li>
            <li style="display:flex;align-items:flex-start;gap:10px;font:500 15px/1.4 Manrope;color:#e8e4dd"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FBB615" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"/></svg>Valable pour tout nouveau client</li>
            <li style="display:flex;align-items:flex-start;gap:10px;font:500 15px/1.4 Manrope;color:#e8e4dd"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FBB615" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"/></svg>Auto &amp; bateau · toutes marques</li>
          </ul>
          <div class="neo-rapp-call" style="margin-top:22px;padding-top:20px;border-top:1px solid rgba(255,255,255,.12)">
            <div style="font:400 14px Manrope;color:#c9c4bb;margin-bottom:12px">Une question ?</div>
            <a href="tel:+41215335656" style="display:inline-flex;align-items:center;gap:12px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:13px 22px;border-radius:13px;box-shadow:0 12px 28px rgba(229,57,11,.4)">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
              <span style="font:800 18px Archivo;letter-spacing:.01em">021 533 56 56</span>
            </a>
          </div>
        </div>
      </div>
      <!-- Formulaire -->
      <div style="flex:2 1 440px;min-width:320px;background:#fff;border:1px solid #e7e3db;border-radius:22px;padding:40px 36px">
        <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 6px" data-i18n="form.title">Transmettre un client</h2>
        <p style="font:400 15px/1.6 Manrope;color:#5E5C57;margin:0 0 24px" data-i18n="form.sub">Remplissez le formulaire, on s'occupe du reste. Champs marqués * obligatoires.</p>
        <div style="font:800 12px Manrope;letter-spacing:.12em;text-transform:uppercase;color:#F26A12;margin-bottom:14px" data-i18n="form.you">Vos coordonnées (rapporteur)</div>
        <?php echo do_shortcode('[fluentform id="4"]'); ?>
        <p style="font:400 12px/1.5 Manrope;color:#9a948a;margin:20px 0 0" data-i18n="form.legal">Prime versée une fois la réparation réalisée et réglée. Offre valable pour tout nouveau client.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
<?php get_footer(); ?>
