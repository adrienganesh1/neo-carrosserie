<?php
/* Template Name: Service Ville */
get_header();
global $post;
$slug = $post->post_name;

$D = array(
  'pare-brise-monthey' => array(
    'eyebrow' => 'Pare-brise · Monthey',
    'h1'      => 'Remplacement de pare-brise à Monthey',
    'intro'   => "Un impact ou une fissure sur votre pare-brise à Monthey ? Notre atelier, à un quart d'heure par le pont sur le Rhône, répare et remplace pare-brise et vitrages toutes marques — recalibrage des caméras d'aide à la conduite compris, et prise en charge de votre assurance.",
    'img'     => 'parebrise-avant-apres.jpg',
    'alt'     => "Remplacement de pare-brise à Monthey — NEO Carrosserie Aigle",
    'h2'      => "Impact, fissure ou casse : on s'en occupe",
    'bullets' => array(
      array("Réparation d'impact", "un petit impact réparé à temps évite le remplacement complet."),
      array("Remplacement toutes marques", "pare-brise et vitrages d'origine ou équivalents."),
      array("Vitres latérales et lunette arrière", "étanchéité et sécurité garanties."),
      array("Recalibrage des caméras & capteurs", "systèmes d'aide à la conduite réglés après la pose."),
      array("Prise en charge assurance", "nous gérons les démarches avec votre assureur."),
    ),
    'local'   => "Monthey et le Chablais valaisan sont à quelques minutes de notre atelier d'Aigle. Plutôt que de patienter dans un grand centre, les automobilistes montheysans nous confient leur pare-brise : intervention rapide, vitrage d'origine ou équivalent, et véhicule de courtoisie pour rester mobile pendant la pose.",
    'parent'  => array('/pare-brise/', 'Toutes nos prestations pare-brise'),
    'commune' => array('/zone-intervention/monthey/', 'Carrosserie à Monthey'),
    'cta'     => 'Pare-brise fissuré à Monthey ? Devis gratuit et sans engagement.',
  ),
  'pare-brise-bex' => array(
    'eyebrow' => 'Pare-brise · Bex',
    'h1'      => 'Remplacement de pare-brise à Bex',
    'intro'   => "Pare-brise fissuré à Bex ? À une dizaine de minutes par l'A9 ou la route cantonale, nous réparons les impacts et remplaçons pare-brise et vitrages, toutes marques, dans le respect des normes de sécurité — avec recalibrage des systèmes d'aide à la conduite et gestion de votre assurance.",
    'img'     => 'parebrise-avant-apres.jpg',
    'alt'     => "Remplacement de pare-brise à Bex — NEO Carrosserie Aigle",
    'h2'      => "Un impact ? Agissez avant la fissure",
    'bullets' => array(
      array("Réparation d'impact", "réparé à temps, un éclat de gravillon évite le remplacement complet."),
      array("Remplacement toutes marques", "pare-brise et vitrages d'origine ou équivalents."),
      array("Vitres latérales et lunette arrière", "étanchéité et sécurité garanties."),
      array("Recalibrage des caméras & capteurs", "aide à la conduite recalibrée après remplacement."),
      array("Prise en charge assurance", "nous nous occupons du dossier avec votre assureur."),
    ),
    'local'   => "Entre les hauts de Bex et la plaine du Rhône, gravillons et écarts de température fragilisent les pare-brise. Nous intervenons vite pour les automobilistes bellerins, à quelques minutes de notre atelier d'Aigle : un petit impact réparé à temps épargne souvent le remplacement complet. Devis gratuit et véhicule de courtoisie sur demande.",
    'parent'  => array('/pare-brise/', 'Toutes nos prestations pare-brise'),
    'commune' => array('/zone-intervention/bex/', 'Carrosserie à Bex'),
    'cta'     => 'Pare-brise fissuré à Bex ? Devis gratuit et sans engagement.',
  ),
  'debosselage-monthey' => array(
    'eyebrow' => 'Débosselage · Monthey',
    'h1'      => 'Débosselage sans peinture à Monthey',
    'intro'   => "Une bosse de parking, un dégât de grêle ou un petit choc à Monthey ? Le débosselage sans peinture (DSP) répare la tôle sans repeindre : plus rapide, plus économique, et il préserve la peinture d'origine de votre véhicule. Notre atelier est à un quart d'heure, de l'autre côté du Rhône.",
    'img'     => 'debosselage-avant-apres.jpg',
    'alt'     => "Débosselage sans peinture à Monthey — NEO Carrosserie Aigle",
    'h2'      => "La réparation maligne, sans repeindre",
    'bullets' => array(
      array("Bosses de stationnement", "les petits chocs du quotidien effacés sans trace."),
      array("Dégâts de grêle", "remise en état carrosserie après un orage."),
      array("Teinte d'origine préservée", "aucune retouche de peinture, aucune différence de teinte."),
      array("Plus rapide et économique", "moins de main-d'œuvre qu'une réparation classique."),
      array("Véhicules récents et de collection", "idéal pour préserver la valeur de revente."),
    ),
    'local'   => "Pour les Montheysans, pas besoin d'aller loin : nous débosselons sans peinture les véhicules du Chablais valaisan, de la petite bosse au débosselage après grêle. Envoyez-nous une photo de la bosse pour une première estimation, ou passez à l'atelier d'Aigle pour un devis gratuit sur place.",
    'parent'  => array('/debosselage/', 'Tout sur le débosselage sans peinture'),
    'commune' => array('/zone-intervention/monthey/', 'Carrosserie à Monthey'),
    'cta'     => 'Une bosse à Monthey ? Devis gratuit et sans engagement.',
  ),
  'pare-brise-vevey' => array(
    'eyebrow' => 'Pare-brise · Vevey',
    'h1'      => 'Remplacement de pare-brise à Vevey',
    'intro'   => "Un impact ou une fissure sur votre pare-brise à Vevey ? À une vingtaine de minutes de notre atelier par l'A9, nous réparons les impacts et remplaçons pare-brise et vitrages, toutes marques, avec recalibrage des caméras d'aide à la conduite et prise en charge de votre assurance.",
    'img'     => 'parebrise-avant-apres.jpg',
    'alt'     => 'Remplacement de pare-brise à Vevey — NEO Carrosserie Aigle',
    'h2'      => 'Impact ou fissure : intervenez vite',
    'bullets' => array(
      array("Réparation d'impact", "un petit éclat réparé à temps évite le remplacement complet."),
      array("Remplacement toutes marques", "pare-brise et vitrages d'origine ou équivalents."),
      array("Vitres latérales et lunette arrière", "étanchéité et sécurité garanties."),
      array("Recalibrage des caméras & capteurs", "aide à la conduite recalibrée après la pose."),
      array("Prise en charge assurance", "nous gérons les démarches avec votre assureur."),
    ),
    'local'   => "Vevey et la Riviera, au pied des vignes de Lavaux, sont à quelques minutes de notre atelier d'Aigle par l'autoroute. Pour les Veveysans, pas besoin de courir dans un grand centre : un petit impact réparé à temps évite le remplacement complet, et nous organisons la prise en charge de l'assurance. Devis gratuit et véhicule de courtoisie sur demande.",
    'parent'  => array('/pare-brise/', 'Toutes nos prestations pare-brise'),
    'commune' => array('/zone-intervention/vevey/', 'Carrosserie à Vevey'),
    'cta'     => 'Pare-brise fissuré à Vevey ? Devis gratuit et sans engagement.',
  ),
  'pare-brise-montreux' => array(
    'eyebrow' => 'Pare-brise · Montreux',
    'h1'      => 'Remplacement de pare-brise à Montreux',
    'intro'   => "Pare-brise impacté ou fissuré à Montreux ? À moins de vingt minutes de notre atelier par l'autoroute, nous réparons et remplaçons pare-brise et vitrages toutes marques, dans le respect des normes de sécurité — recalibrage des caméras d'aide à la conduite et gestion de l'assurance compris.",
    'img'     => 'parebrise-avant-apres.jpg',
    'alt'     => 'Remplacement de pare-brise à Montreux — NEO Carrosserie Aigle',
    'h2'      => 'Réparation ou remplacement, vitrage garanti',
    'bullets' => array(
      array("Réparation d'impact", "un petit éclat réparé à temps évite le remplacement complet."),
      array("Remplacement toutes marques", "pare-brise et vitrages d'origine ou équivalents."),
      array("Vitres latérales et lunette arrière", "étanchéité et sécurité garanties."),
      array("Recalibrage des caméras & capteurs", "aide à la conduite recalibrée après la pose."),
      array("Prise en charge assurance", "nous gérons les démarches avec votre assureur."),
    ),
    'local'   => "Sur la Riviera, entre lac et vignobles, Montreux est reliée à notre atelier d'Aigle par l'A9 en quelques minutes. Les automobilistes montreusiens nous confient leur pare-brise pour une intervention rapide et soignée : vitrage d'origine ou équivalent, finition impeccable, et prise en charge complète du dossier d'assurance. Devis gratuit.",
    'parent'  => array('/pare-brise/', 'Toutes nos prestations pare-brise'),
    'commune' => array('/zone-intervention/montreux/', 'Carrosserie à Montreux'),
    'cta'     => 'Pare-brise fissuré à Montreux ? Devis gratuit et sans engagement.',
  ),
  'pare-brise-villeneuve' => array(
    'eyebrow' => 'Pare-brise · Villeneuve',
    'h1'      => 'Remplacement de pare-brise à Villeneuve',
    'intro'   => "Un impact ou une fissure sur votre pare-brise à Villeneuve ? À une dizaine de minutes de notre atelier par l'A9, à l'extrémité est du Léman, nous réparons les impacts et remplaçons pare-brise et vitrages toutes marques — avec recalibrage des systèmes d'aide à la conduite et prise en charge de votre assurance.",
    'img'     => 'parebrise-avant-apres.jpg',
    'alt'     => 'Remplacement de pare-brise à Villeneuve — NEO Carrosserie Aigle',
    'h2'      => "Un éclat ? On s'en occupe vite",
    'bullets' => array(
      array("Réparation d'impact", "un éclat de gravillon réparé à temps épargne le remplacement complet."),
      array("Remplacement toutes marques", "pare-brise et vitrages d'origine ou équivalents."),
      array("Vitres latérales et lunette arrière", "étanchéité et sécurité garanties."),
      array("Recalibrage des caméras & capteurs", "aide à la conduite recalibrée après remplacement."),
      array("Prise en charge assurance", "nous gérons le dossier avec votre assureur."),
    ),
    'local'   => "Entre lac et montagnes, à la porte du Chablais, Villeneuve est à quelques minutes de notre atelier d'Aigle. Nous y intervenons régulièrement pour les pare-brise et vitrages : un éclat de gravillon réparé à temps épargne le remplacement complet. Vitrage d'origine ou équivalent, véhicule de courtoisie sur demande, devis gratuit et sans engagement.",
    'parent'  => array('/pare-brise/', 'Toutes nos prestations pare-brise'),
    'commune' => array('/zone-intervention/villeneuve/', 'Carrosserie à Villeneuve'),
    'cta'     => 'Pare-brise fissuré à Villeneuve ? Devis gratuit et sans engagement.',
  ),
);

$d = isset($D[$slug]) ? $D[$slug] : null;
if ( ! $d ) { echo '<section style="max-width:900px;margin:60px auto;padding:0 44px"><p>Page en préparation.</p></section>'; get_footer(); return; }
$imgbase = get_template_directory_uri() . '/assets/';
?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 20px">
    <img src="<?php echo $imgbase; ?>mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:360px;opacity:.07;pointer-events:none;user-select:none">
    <div style="position:relative;max-width:760px">
      <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12"><?php echo esc_html($d['eyebrow']); ?></div>
      <h1 style="font:800 52px/1.02 Archivo;letter-spacing:-.025em;margin:16px 0 0"><?php echo esc_html($d['h1']); ?></h1>
      <p style="font:400 19px/1.6 Manrope;color:#5E5C57;margin:20px 0 0"><?php echo esc_html($d['intro']); ?></p>
      <div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:28px">
        <a href="tel:+41215335656" style="display:flex;align-items:center;gap:12px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:15px 24px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.32)"><span style="font:800 18px Archivo">021 533 56 56</span></a>
        <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;font:700 16px Manrope;padding:14px 24px;border-radius:12px">Devis gratuit</a>
      </div>
    </div>
  </section>

  <!-- CONTENU -->
  <section style="max-width:1280px;margin:0 auto;padding:24px 44px 20px">
    <div style="display:flex;flex-wrap:wrap;gap:46px;align-items:center">
      <div style="flex:1 1 360px;min-width:300px;border-radius:18px;overflow:hidden;border:1px solid #ece7de"><img src="<?php echo $imgbase . rawurlencode($d['img']); ?>" alt="<?php echo esc_attr($d['alt']); ?>" style="display:block;width:100%;height:auto;aspect-ratio:3/2;object-fit:cover"></div>
      <div style="flex:1 1 440px;min-width:320px">
        <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 18px"><?php echo esc_html($d['h2']); ?></h2>
        <div style="display:flex;flex-direction:column;gap:14px">
          <?php foreach ($d['bullets'] as $b): ?>
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 16px/1.55 Manrope;color:#3d3b36"><b><?php echo esc_html($b[0]); ?></b> — <?php echo esc_html($b[1]); ?></div></div>
          <?php endforeach; ?>
        </div>
        <p style="font:400 16px/1.7 Manrope;color:#5E5C57;margin:20px 0 0"><?php echo esc_html($d['local']); ?></p>
        <div style="display:flex;flex-wrap:wrap;gap:9px;margin-top:22px">
          <a href="<?php echo esc_url($d['parent'][0]); ?>" style="font:700 13px Manrope;background:#15140F;color:#fff;padding:9px 16px;border-radius:999px;text-decoration:none"><?php echo esc_html($d['parent'][1]); ?></a>
          <a href="<?php echo esc_url($d['commune'][0]); ?>" style="font:700 13px Manrope;background:#fff;border:1px solid #e0dbd2;color:#3d3b36;padding:9px 16px;border-radius:999px;text-decoration:none"><?php echo esc_html($d['commune'][1]); ?></a>
          <a href="/contact/" style="font:700 13px Manrope;background:#fff;border:1px solid #e0dbd2;color:#3d3b36;padding:9px 16px;border-radius:999px;text-decoration:none">Nous contacter</a>
        </div>
      </div>
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
