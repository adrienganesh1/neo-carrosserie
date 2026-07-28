<?php get_header(); ?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 20px">
    <img src="/wp-content/themes/neo-carrosserie/assets/mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:360px;opacity:.07;pointer-events:none;user-select:none">
    <div style="position:relative;max-width:780px">
      <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12">Service premium</div>
      <h1 style="font:800 56px/1.0 Archivo;letter-spacing:-.025em;margin:16px 0 0">Conciergerie automobile</h1>
      <p style="font:400 20px/1.6 Manrope;color:#5E5C57;margin:20px 0 0">On vient chercher votre véhicule chez vous ou au bureau, on s'occupe de tout — réparation, entretien, nettoyage — et on vous le ramène prêt. <b style="color:#15140F">Vous ne vous déplacez pas, on gère.</b></p>
      <div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:28px">
        <a href="tel:+41215335656" style="display:flex;align-items:center;gap:12px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:15px 24px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.32)"><span style="font:800 18px Archivo">021 533 56 56</span></a>
        <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;font:700 16px Manrope;padding:14px 24px;border-radius:12px">Organiser une prise en charge</a>
      </div>
    </div>
  </section>

  <!-- COMMENT ÇA MARCHE -->
  <section style="max-width:1280px;margin:0 auto;padding:34px 44px 10px">
    <h2 style="font:800 32px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 26px">Comment ça marche</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px">
      <?php
      $neo_steps = array(
        array('01','On vient chercher votre véhicule','À votre domicile ou sur votre lieu de travail, à l\'heure qui vous arrange. Aucun déplacement de votre côté.',
          '<path d="M3 13l2-5a2 2 0 0 1 1.9-1.3h8.2A2 2 0 0 1 17 8l2 5"/><path d="M3 13h18v4H3z"/><circle cx="7" cy="17" r="1.6"/><circle cx="17" cy="17" r="1.6"/>'),
        array('02','On s\'occupe de tout','Carrosserie, entretien, débosselage, remplacement de pare-brise, nettoyage complet — tout est réalisé dans notre atelier à Aigle.',
          '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>'),
        array('03','On vous le ramène prêt','Une fois le travail terminé et contrôlé, on vous restitue votre véhicule propre et prêt à rouler, là où vous le souhaitez.',
          '<path d="M20 8l-8-5-8 5"/><path d="M4 8v9a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V8"/><path d="M9 18v-5h6v5"/>'),
      );
      foreach ($neo_steps as $s): list($num,$t,$d,$ico) = $s; ?>
      <div style="background:#fff;border:1px solid #ece7de;border-radius:18px;padding:26px 24px;position:relative">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
          <span style="display:flex;align-items:center;justify-content:center;width:52px;height:52px;border-radius:14px;background:rgba(242,106,18,.1);color:#F26A12;flex:none"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $ico; ?></svg></span>
          <span style="font:900 34px Archivo;letter-spacing:.01em;color:#F26A12;opacity:.9;line-height:1"><?php echo $num; ?></span>
        </div>
        <h3 style="font:800 20px/1.15 Archivo;letter-spacing:-.01em;margin:0 0 8px;color:#15140F"><?php echo esc_html($t); ?></h3>
        <p style="font:400 15px/1.6 Manrope;color:#5E5C57;margin:0"><?php echo esc_html($d); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- POURQUOI -->
  <section style="max-width:1280px;margin:0 auto;padding:34px 44px 20px">
    <div style="display:flex;flex-wrap:wrap;gap:46px;align-items:flex-start">
      <div style="flex:1 1 440px;min-width:320px">
        <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 18px">Le confort d'un service clé en main</h2>
        <div style="display:flex;flex-direction:column;gap:14px">
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b>Zéro déplacement</b> — vous gardez votre temps pour ce qui compte.</div></div>
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b>Un seul interlocuteur</b> pour toute la prise en charge, du départ à la restitution.</div></div>
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b>Idéal pour les professionnels</b> et les flottes : on s'adapte à votre agenda.</div></div>
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b>Véhicule de courtoisie</b> possible pendant l'immobilisation, sur demande.</div></div>
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b>Suivi transparent</b> : vous êtes informé à chaque étape.</div></div>
        </div>
        <p style="font:400 16px/1.7 Manrope;color:#5E5C57;margin:20px 0 0">Disponible sur toute notre <a href="/zone-intervention/" style="color:#F26A12;font-weight:700;text-decoration:none">zone d'intervention</a> autour d'Aigle et du Chablais.</p>
      </div>
      <div style="flex:1 1 320px;min-width:300px;background:linear-gradient(150deg,#faf8f4,#f3efe7);border:1px solid #ece7de;border-radius:20px;padding:30px">
        <div style="font:700 13px Manrope;letter-spacing:.14em;text-transform:uppercase;color:#8a857c;margin-bottom:12px">Bon à savoir</div>
        <p style="font:400 15px/1.65 Manrope;color:#3d3b36;margin:0 0 14px">La <b>conciergerie automobile</b> (aussi appelée <i>service de prise en charge et restitution à domicile</i>) prend en charge votre véhicule <b>et</b> les travaux à réaliser.</p>
        <p style="font:400 15px/1.65 Manrope;color:#3d3b36;margin:0">À ne pas confondre avec le <b>véhicule de courtoisie</b> (prêté pendant la réparation) ou le <b>service voiturier</b> (simple parcage) — ici, on s'occupe vraiment de tout.</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section style="max-width:1280px;margin:30px auto 60px;padding:0 44px">
    <div class="neo-band-dark" style="background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;border-radius:24px;padding:50px;display:flex;flex-wrap:wrap;align-items:center;gap:28px;justify-content:space-between">
      <div style="flex:1 1 420px;min-width:300px"><h2 style="font:800 32px/1.1 Archivo;letter-spacing:-.02em;margin:0;max-width:600px">On vient chercher votre véhicule ? Organisez la prise en charge en 2 minutes.</h2></div>
      <div style="display:flex;flex-wrap:wrap;gap:14px">
        <a href="tel:+41215335656" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;font:800 17px Manrope;padding:16px 26px;border-radius:13px">021 533 56 56</a>
        <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:#fff;color:#05192b;font:800 16px Manrope;padding:16px 26px;border-radius:13px">Nous écrire</a>
      </div>
    </div>
  </section>
<?php echo neo_tarifs_band(); ?>
<?php get_footer(); ?>
