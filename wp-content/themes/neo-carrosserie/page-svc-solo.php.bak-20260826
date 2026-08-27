<?php
/* Template Name: Service Solo */
get_header();
global $post;
$slug = $post->post_name;

$D = array(
  'reparation-jantes' => array(
    'eyebrow' => 'Prestation',
    'h1'      => 'Réparation et peinture de jantes à Aigle',
    'intro'   => "Jante rayée, voilée ou piquée par le sel et les trottoirs ? Nous réparons, redressons et repeignons vos jantes alu à Aigle — teinte et finition d'origine, pour retrouver des roues comme neuves, sans devoir les remplacer.",
    'h2'      => "Vos jantes comme neuves",
    'bullets' => array(
      array("Rayures et frottements de trottoir", "surface poncée, mastiquée et repeinte, sans trace."),
      array("Jantes voilées", "redressage pour retrouver l'équilibrage et éviter les vibrations."),
      array("Corrosion et peinture qui s'écaille", "traitement puis remise en peinture durable."),
      array("Teinte et finition d'origine", "vernis brillant, satiné, mat ou couleur au choix."),
      array("La plupart des jantes alu", "voitures, utilitaires — toutes marques."),
    ),
    'local'   => "Une jante abîmée ne se remplace pas forcément : dans bien des cas, la réparation coûte moins cher et rend un résultat impeccable. Apportez vos roues à notre atelier du Chem. de St-Triphon 22 à Aigle, ou envoyez-nous une photo pour une première estimation. Devis gratuit et sans engagement.",
    'cta'     => 'Jante abîmée ? Devis gratuit et sans engagement.',
    'offer'   => 'Réparation et peinture de jantes',
  ),
  'vitres-teintees' => array(
    'eyebrow' => 'Prestation',
    'h1'      => 'Pose de vitres teintées à Aigle',
    'intro'   => "Plus d'intimité, de confort et de protection solaire : nous posons des films teintés sur les vitres de votre véhicule à Aigle — pose soignée sans bulles, protection UV et anti-chaleur, dans le respect des normes suisses de visibilité.",
    'h2'      => "Confort, protection et style",
    'bullets' => array(
      array("Films de qualité, teintes au choix", "du léger au plus foncé, selon l'effet souhaité."),
      array("Protection UV et anti-chaleur", "habitacle plus frais, sièges et tableau de bord préservés."),
      array("Intimité et sécurité", "vitres moins visibles de l'extérieur, verre maintenu en cas de bris."),
      array("Pose soignée, sans bulles", "découpe ajustée à chaque vitre, finition nette."),
      array("Conforme aux normes suisses", "nous conseillons les surfaces autorisées (arrière, custodes)."),
    ),
    'local'   => "En Suisse, le pare-brise et les vitres avant sont soumis à des limites de teinte : nous vous conseillons ce qui est autorisé et posons les films là où c'est permis, pour rester en règle. Passez à l'atelier d'Aigle pour voir les échantillons et obtenir un devis gratuit.",
    'cta'     => 'Envie de vitres teintées ? Devis gratuit et sans engagement.',
    'offer'   => 'Pose de vitres teintées',
  ),
  'climatisation' => array(
    'eyebrow' => 'Prestation',
    'h1'      => 'Recharge et entretien de climatisation auto à Aigle',
    'intro'   => "Climatisation qui refroidit mal ou qui sent mauvais ? Nous rechargeons, contrôlons et désinfectons la clim de votre véhicule à Aigle — gaz R134a et R1234yf, recherche de fuite et entretien, pour un habitacle frais et sain.",
    'h2'      => "Une clim efficace et saine",
    'bullets' => array(
      array("Recharge de gaz réfrigérant", "R134a et R1234yf (véhicules récents), avec contrôle de pression."),
      array("Recherche de fuite", "localisation et réparation avant recharge, pour que ça dure."),
      array("Désinfection du circuit", "traitement anti-bactérien contre les mauvaises odeurs."),
      array("Contrôle complet", "compresseur, filtre d'habitacle, performance de froid."),
      array("Toutes marques", "voitures et utilitaires."),
    ),
    'local'   => "Une clim entretenue refroidit mieux, consomme moins et évite les odeurs et allergènes. Un contrôle par an suffit généralement. Prenez rendez-vous à notre atelier du Chem. de St-Triphon 22 à Aigle — devis gratuit et sans engagement.",
    'cta'     => 'Clim à recharger ? Devis gratuit et sans engagement.',
    'offer'   => 'Recharge et entretien de climatisation',
  ),
);

$d = isset($D[$slug]) ? $D[$slug] : null;
if ( ! $d ) { echo '<section style="max-width:900px;margin:60px auto;padding:0 44px"><p>Page en préparation.</p></section>'; get_footer(); return; }
$imgbase = get_template_directory_uri() . '/assets/';
?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 20px">
    <img src="<?php echo $imgbase; ?>mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:360px;opacity:.07;pointer-events:none;user-select:none">
    <div style="position:relative;max-width:780px">
      <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12"><?php echo esc_html($d['eyebrow']); ?></div>
      <h1 style="font:800 50px/1.04 Archivo;letter-spacing:-.025em;margin:16px 0 0"><?php echo esc_html($d['h1']); ?></h1>
      <p style="font:400 19px/1.6 Manrope;color:#5E5C57;margin:20px 0 0"><?php echo esc_html($d['intro']); ?></p>
      <div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:28px">
        <a href="tel:+41215335656" style="display:flex;align-items:center;gap:12px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:15px 24px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.32)"><span style="font:800 18px Archivo">021 533 56 56</span></a>
        <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;font:700 16px Manrope;padding:14px 24px;border-radius:12px">Devis gratuit</a>
      </div>
    </div>
  </section>

  <!-- CONTENU -->
  <section style="max-width:1280px;margin:0 auto;padding:20px 44px 20px">
    <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 20px;max-width:760px"><?php echo esc_html($d['h2']); ?></h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:16px 40px;max-width:1000px">
      <?php foreach ($d['bullets'] as $b): ?>
      <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b><?php echo esc_html($b[0]); ?></b> — <?php echo esc_html($b[1]); ?></div></div>
      <?php endforeach; ?>
    </div>
    <p style="font:400 16px/1.7 Manrope;color:#5E5C57;margin:26px 0 0;max-width:820px"><?php echo esc_html($d['local']); ?></p>
    <div style="display:flex;flex-wrap:wrap;gap:9px;margin-top:22px">
      <a href="/services/" style="font:700 13px Manrope;background:#15140F;color:#fff;padding:9px 16px;border-radius:999px;text-decoration:none">Tous nos services</a>
      <a href="/contact/" style="font:700 13px Manrope;background:#fff;border:1px solid #e0dbd2;color:#3d3b36;padding:9px 16px;border-radius:999px;text-decoration:none">Nous contacter</a>
    </div>
  </section>

<?php echo neo_tarifs_band(); ?>

  <!-- CTA -->
  <section style="max-width:1280px;margin:26px auto 60px;padding:0 44px">
    <div class="neo-band-dark" style="background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;border-radius:24px;padding:50px;display:flex;flex-wrap:wrap;align-items:center;gap:28px;justify-content:space-between">
      <div style="flex:1 1 420px;min-width:300px"><h2 style="font:800 32px/1.1 Archivo;letter-spacing:-.02em;margin:0;max-width:560px"><?php echo esc_html($d['cta']); ?></h2></div>
      <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;font:800 17px Manrope;padding:16px 28px;border-radius:13px">Demander un devis</a>
    </div>
  </section>
<?php get_footer(); ?>
