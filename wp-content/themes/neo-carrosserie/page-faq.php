<?php
get_header();
$faq = array(
  array("Le devis est-il gratuit ?", "Oui. Tout devis est gratuit et sans engagement. Appelez-nous au 021 533 56 56 ou passez à l'atelier avec votre véhicule."),
  array("Travaillez-vous avec les assurances ?", "Oui, nous intervenons dans le cadre des sinistres et gérons les démarches avec votre assurance. Apportez votre dossier ou vos références de sinistre."),
  array("Réparez-vous toutes les marques ?", "Oui, nous travaillons sur tous types de véhicules, toutes marques confondues : voitures de tourisme, utilitaires et véhicules professionnels."),
  array("Réalisez-vous la peinture partielle ou complète ?", "Oui, nous réalisons la peinture automobile partielle, complète, ainsi que les raccords et retouches, avec une teinte parfaitement assortie à votre véhicule."),
  array("Remplacez-vous les pare-brise et vitrages ?", "Oui, nous remplaçons pare-brise et vitres latérales ou arrière, sur toutes marques, dans le respect des normes de sécurité et d'étanchéité."),
  array("Réparez-vous et repeignez-vous les jantes ?", "Oui. Nous réparons et repeignons les jantes abîmées, et proposons polish et lustrage complet pour redonner tout son éclat à votre véhicule."),
  array("Assurez-vous le gardiennage des pneus ?", "Oui. Nous effectuons le montage et la permutation de vos pneus, et assurons le gardiennage saisonnier de vos roues, stockées dans de bonnes conditions."),
  array("Préparez-vous les véhicules à l'expertise technique ?", "Oui. Nous effectuons un contrôle complet et les corrections nécessaires pour présenter un véhicule conforme et prêt pour l'expertise."),
  array("Êtes-vous spécialisés dans les véhicules anciens ?", "Oui. Nous redonnons vie aux carrosseries d'époque et véhicules de collection avec un soin particulier, dans le respect de l'authenticité."),
  array("Intervenez-vous sur les bateaux ?", "Oui, nous sommes également spécialistes de la carrosserie, de la peinture et du polissage de bateaux."),
  array("Dans quelles régions intervenez-vous ?", "Basés à Aigle, nous intervenons dans les cantons de Vaud, du Valais et de Fribourg : Chablais, Riviera lémanique et vallée du Rhône."),
  array("Quels sont vos délais ?", "Cela dépend des travaux et de la disponibilité des pièces. Nous vous communiquons un délai indicatif lors du devis."),
  array("Proposez-vous un véhicule de remplacement ?", "Selon disponibilité. N'hésitez pas à nous poser la question lors de la prise de rendez-vous."),
  array("Quels moyens de paiement acceptez-vous ?", "Les factures sont payables à réception. Contactez-nous pour les modalités détaillées."),
);
?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 8px">
    <img src="/wp-content/themes/neo-carrosserie/assets/mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:360px;opacity:.07;pointer-events:none;user-select:none">
    <div style="position:relative;max-width:820px">
      <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12">FAQ</div>
      <h1 style="font:800 50px/1.0 Archivo;letter-spacing:-.025em;margin:16px 0 0">Questions fréquentes</h1>
      <p style="font:400 19px/1.6 Manrope;color:#5E5C57;margin:18px 0 0">Les réponses aux questions que l'on nous pose le plus souvent, en carrosserie, peinture et entretien à Aigle.</p>
    </div>
  </section>

  <!-- CONTENU -->
  <section style="max-width:880px;margin:0 auto;padding:24px 44px 64px">
<?php foreach ($faq as $qa): ?>
      <div style="border:1px solid #e7e3db;background:#fff;border-radius:14px;padding:20px 22px;margin-bottom:12px">
        <h2 style="font:800 18px/1.3 Archivo;color:#15140F;margin:0 0 7px"><?php echo esc_html($qa[0]); ?></h2>
        <div style="font:400 16px/1.7 Manrope;color:#3d3b36"><?php echo esc_html($qa[1]); ?></div>
      </div>
<?php endforeach; ?>
      <p style="font:500 13px Manrope;color:#9a948a;margin:40px 0 0">Dernière mise à jour : juillet 2026.</p>
  </section>
<?php
// Schema FAQPage (rich snippets Google)
$entities = array();
foreach ($faq as $qa) {
  $entities[] = array(
    '@type' => 'Question',
    'name'  => $qa[0],
    'acceptedAnswer' => array('@type'=>'Answer','text'=>$qa[1]),
  );
}
$faqSchema = array('@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$entities);
echo "\n<script type=\"application/ld+json\">".wp_json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)."</script>\n";
get_footer();
