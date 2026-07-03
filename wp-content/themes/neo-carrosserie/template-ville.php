<?php
/* Template Name: Ville */
get_header();
$ville = wp_strip_all_tags( get_the_title() );
$vowel = preg_match('/^[aeiouyàâéèêAEIOUY]/u', $ville);
$de = $vowel ? "d'".$ville : "de ".$ville;   // d'Aigle / de Bex
$a  = "à ".$ville;
$mapq = rawurlencode($ville.', Suisse');

// Paragraphe UNIQUE par commune (évite le contenu dupliqué entre pages villes)
$communes = array(
  'Aigle'         => "Aigle, c'est chez nous : notre atelier se trouve au Chemin de St-Triphon 22, au cœur du chef-lieu du district. Ville viticole dominée par son château, Aigle est notre base pour la carrosserie, la peinture et l'esthétique automobile — vous déposez votre véhicule à deux pas du centre et repartez avec une prise en charge complète.",
  'Bex'           => "À une dizaine de minutes au sud, Bex et le Chablais vaudois sont accessibles en quelques minutes par la route cantonale ou l'autoroute A9. Que vous veniez des hauts de Bex ou du secteur des Salines, nous récupérons et réparons votre véhicule — choc, rayure, dégâts de grêle ou pare-brise — avec un devis gratuit et sans engagement.",
  'Monthey'       => "De l'autre côté du Rhône, Monthey et le Chablais valaisan ne sont qu'à un quart d'heure de notre atelier d'Aigle. Pour les automobilistes montheysans, NEO Carrosserie est une alternative proche et réactive pour la carrosserie, la peinture et le débosselage sans peinture, sans les délais des grands centres.",
  'Villeneuve'    => "À l'extrémité est du Léman, entre lac et montagnes, Villeneuve est à une dizaine de minutes de notre atelier par l'A9. Nous y intervenons régulièrement pour des réparations après accident, du polissage ou un remplacement de pare-brise, avec un véhicule de courtoisie pour vous garder mobile.",
  'Saint-Maurice' => "Porte du Valais entre Bex et Monthey, Saint-Maurice et son abbaye millénaire sont à un quart d'heure de notre atelier d'Aigle. Nous prenons en charge les véhicules saint-mauriards de A à Z : carrosserie, peinture en teinte d'origine et esthétique, avec une gestion complète du dossier d'assurance.",
  'Montreux'      => "Sur la Riviera, célèbre pour son festival de jazz et ses quais fleuris, Montreux est à moins de vingt minutes de notre atelier par l'autoroute. Nous soignons les carrosseries montreusiennes avec la même exigence : finition impeccable et délais courts, du simple impact à la remise en état après sinistre.",
  'Vevey'         => "Ville de la Riviera au pied des vignes de Lavaux, Vevey est à une vingtaine de minutes de notre atelier d'Aigle par l'A9. Pour les Veveysans, nous assurons carrosserie, peinture et detailing avec le même niveau de finition, et un devis gratuit avant toute intervention.",
  'Lausanne'      => "Capitale vaudoise et ville olympique, Lausanne est à une trentaine de minutes par l'autoroute. Pour les Lausannois attachés à la qualité, le déplacement en vaut la peine : un travail de finition soigné, des délais maîtrisés et un accueil personnalisé, loin de l'anonymat des grands garages.",
  'Martigny'      => "Au coude du Rhône, aux portes du Valais central et de la Fondation Gianadda, Martigny est à environ vingt-cinq minutes de notre atelier par l'A9. Nous accueillons les véhicules martignerains pour tous travaux de carrosserie, peinture et esthétique, avec prise en charge de l'assurance et devis sans engagement.",
  'Sion'          => "Capitale du Valais, dominée par les collines de Valère et Tourbillon, Sion est reliée à notre atelier d'Aigle par l'autoroute en une quarantaine de minutes. Pour une carrosserie et une peinture vraiment soignées, les Sédunois peuvent nous confier leur véhicule — nous organisons volontiers la logistique.",
);
$uniq = isset($communes[$ville]) ? $communes[$ville] : '';
?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 24px">
    <img src="/wp-content/themes/neo-carrosserie/assets/mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:360px;opacity:.07;pointer-events:none;user-select:none">
    <div style="position:relative;max-width:760px">
      <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12">Carrosserie · <?php echo esc_html($ville); ?></div>
      <h1 style="font:800 58px/0.98 Archivo;letter-spacing:-.025em;margin:18px 0 0">Carrosserie <?php echo esc_html($a); ?></h1>
      <p style="font:400 19px/1.6 Manrope;color:#5E5C57;margin:20px 0 0">Réparation carrosserie, peinture et esthétique automobile <?php echo esc_html($a); ?> et dans la région. Basés tout près, au Chem. de St-Triphon 22 à Aigle : un travail soigné, des délais courts et un accueil qui change tout.</p>
      <div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:30px;align-items:stretch">
        <a href="tel:+41215335656" style="display:flex;align-items:center;gap:13px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:15px 24px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.32)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
          <span style="text-align:left"><span style="display:block;font:600 11px Manrope;opacity:.85">Appelez-nous</span><span style="display:block;font:800 19px Archivo">021 533 56 56</span></span>
        </a>
        <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;font:700 16px Manrope;padding:14px 24px;border-radius:12px;box-shadow:0 10px 26px rgba(5,25,43,.4)">Devis gratuit
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- TEXTE SEO + CARTE -->
  <section style="max-width:1280px;margin:0 auto;padding:12px 44px 24px">
    <div style="display:flex;flex-wrap:wrap;gap:46px">
      <div style="flex:1 1 440px;min-width:320px">
        <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 16px">Votre carrossier de confiance, proche <?php echo esc_html($de); ?></h2>
        <p style="font:400 17px/1.7 Manrope;color:#5E5C57;margin:0 0 14px"><?php echo $uniq ? esc_html($uniq) : 'Situés au Chemin de St-Triphon 22 à Aigle, à quelques minutes '.esc_html($de).', nous intervenons sur tous types de véhicules : réparation de chocs, débosselage, peinture, esthétique et entretien auto et bateau.'; ?></p>
        <p style="font:400 17px/1.7 Manrope;color:#5E5C57;margin:0">Carrosserie et débosselage, peinture automobile, remplacement de pare-brise, réparation après grêle, entretien et mécanique : nous prenons en charge votre véhicule de A à Z, avec un devis gratuit et sans engagement.</p>
        <div style="display:flex;flex-wrap:wrap;gap:9px;margin-top:24px">
          <a href="/services/" style="font:700 13px Manrope;background:#15140F;color:#fff;padding:9px 16px;border-radius:999px;text-decoration:none">Voir nos services</a>
          <a href="/contact/" style="font:700 13px Manrope;background:#fff;border:1px solid #e0dbd2;color:#3d3b36;padding:9px 16px;border-radius:999px;text-decoration:none">Nous contacter</a>
          <a href="/zone-intervention/" style="font:700 13px Manrope;background:#fff;border:1px solid #e0dbd2;color:#3d3b36;padding:9px 16px;border-radius:999px;text-decoration:none">Zone d'intervention</a>
        </div>
      </div>
      <div style="flex:1 1 360px;min-width:300px;height:300px;border-radius:18px;overflow:hidden;border:1px solid #ece7de">
        <iframe title="Carte <?php echo esc_attr($ville); ?>" src="https://www.google.com/maps?q=<?php echo $mapq; ?>&output=embed" style="border:0;width:100%;height:100%;display:block;filter:grayscale(0.15)" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section style="max-width:1280px;margin:30px auto 60px;padding:0 44px">
    <div style="background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;border-radius:24px;padding:50px;display:flex;flex-wrap:wrap;align-items:center;gap:28px;justify-content:space-between">
      <div style="flex:1 1 420px;min-width:300px">
        <h2 style="font:800 32px/1.1 Archivo;letter-spacing:-.02em;margin:0;max-width:560px">Un dégât <?php echo esc_html($a); ?> ? Appelez, on vous conseille.</h2>
        <p style="font:400 17px Manrope;color:#c9c4bb;margin:12px 0 0">Devis gratuit et sans engagement.</p>
      </div>
      <a href="tel:+41215335656" style="display:flex;align-items:center;gap:14px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:18px 30px;border-radius:14px">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
        <span><span style="display:block;font:600 12px Manrope;opacity:.85">Appeler maintenant</span><span style="display:block;font:800 22px Archivo">021 533 56 56</span></span>
      </a>
    </div>
  </section>
<?php get_footer(); ?>
