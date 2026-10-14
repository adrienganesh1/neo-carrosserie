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
  'pose-pneus' => array(
    'eyebrow' => 'Prestation',
    'h1'      => 'Pose de pneus à Aigle',
    'intro'   => "Pneus neufs, changement de saison ou permutation : nous montons, équilibrons et posons vos pneus à Aigle — dès CHF 80.– par roue selon la taille, rapide et sans rendez-vous compliqué.",
    'h2'      => "Montage et équilibrage soignés",
    'bullets' => array(
      array("Démontage et montage", "sur jante alu ou acier, toutes dimensions courantes."),
      array("Équilibrage électronique", "roulage stable, sans vibrations, inclus dans le prix."),
      array("Valve neuve en option", "CHF 5.– par pneu en supplément, pour éviter les fuites lentes."),
      array("Permutation et changement saisonnier", "été / hiver, avec conseils de pression et d'usure."),
      array("Tarif selon la taille de jante", "de CHF 80.– à CHF 120.– par roue — détail ci-dessous."),
    ),
    'pricing' => array(
      'rows' => array(
        array('14" à 18"', 'CHF 80.–'),
        array('18" à 21"', 'CHF 100.–'),
        array('21" à 23"', 'CHF 120.–'),
      ),
      'note' => "Prix par roue, montage et équilibrage inclus. Valve neuve : CHF 5.– par pneu en supplément.",
    ),
    'local'   => "Que vos pneus proviennent de chez nous ou d'ailleurs, nous les montons et les équilibrons à l'atelier du Chem. de St-Triphon 22 à Aigle. Le tarif dépend du diamètre de la jante (voir tableau ci-dessus) ; la valve neuve est disponible en option à CHF 5.– par pneu. Devis gratuit et sans engagement.",
    'cta'     => 'Pneus à monter ? Dès CHF 80.– par roue.',
    'offer'   => 'Pose de pneus',
    'from'    => 'CHF 80.–',
    'image'   => 'https://www.neo-carrosserie.ch/wp-content/uploads/2026/08/pose-pneus-hero.jpg',
    'gardiennage' => array(
      'h2'    => "Gardiennage de vos pneus l'hiver",
      'intro' => "Pas envie de stocker un train de pneus complet à la cave ou au garage ? Confiez-nous vos roues été ou hiver entre deux saisons : elles restent chez nous, montées et prêtes, jusqu'au prochain changement.",
      'bullets' => array(
        array("Roues montées et étiquetées", "identifiées à votre nom, aucune confusion au retour."),
        array("Stockage à l'abri à l'atelier", "local sec, à l'abri de la lumière et des variations de température."),
        array("Changement de saison sans y penser", "un appel suffit, rendez-vous rapide pour remonter le train stocké."),
        array("Contrôle à chaque dépose", "pression et usure vérifiées avant le remontage."),
      ),
      'image' => 'https://www.neo-carrosserie.ch/wp-content/uploads/2026/08/gardiennage-hero.jpg',
    ),
    'faq' => array(
      array("Mes pneus sont-ils équilibrés lorsque vous les montez ?", "Oui, systématiquement : chaque roue est équilibrée électroniquement après le montage, c'est inclus dans le prix (dès CHF 80.– par roue selon la taille)."),
      array("Combien de temps prend un changement de pneus ?", "Comptez environ 15 à 20 minutes par roue, soit moins d'une heure pour un train complet — sur rendez-vous, sans attente."),
    ),
    'guide' => array(
      'label' => "Vos pneus sont-ils encore bons ?",
      'text'  => "Profondeur légale, témoins d'usure, âge du pneu, période recommandée pour les pneus hiver : retrouvez tous nos conseils dans le guide.",
      'link'  => '/usure-pneus/',
      'cta'   => 'Consulter le guide',
    ),
  ),
  'usure-pneus' => array(
    'eyebrow' => 'Guide pratique',
    'h1'      => 'Quand remplacer ses pneus ?',
    'intro'   => "Un pneu usé freine moins bien et accroche moins sur route mouillée. Voici comment vérifier l'état des vôtres et savoir quand les changer — en cas de doute, passez à l'atelier d'Aigle, le contrôle est gratuit.",
    'h2'      => "Comment vérifier l'usure de vos pneus",
    'bullets' => array(
      array("Profondeur minimale légale : 1,6 mm", "sur les trois quarts centraux de la bande de roulement (loi suisse et européenne). En pratique, on recommande de changer dès 3 mm en été et 4 mm en hiver, pour garder une bonne évacuation de l'eau et de la neige."),
      array("Témoins d'usure (TWI)", "repérables par un petit triangle ou les lettres « TWI » sur le flanc du pneu. Quand la sculpture arrive au niveau de ces témoins, il est temps de changer."),
      array("L'âge compte autant que l'usure", "même avec une bonne sculpture, le caoutchouc durcit et se fissure avec le temps : on recommande de changer un pneu tous les 5 à 6 ans. L'année de fabrication se lit sur le code DOT à 4 chiffres gravé sur le flanc (les 2 derniers chiffres)."),
      array("Craquelures, hernies, corps étrangers", "à contrôler visuellement à chaque changement de saison — une hernie sur le flanc ou une entaille profonde imposent un remplacement immédiat, sans attendre."),
      array("Par paire, sur le même essieu", "on remplace toujours les pneus deux par deux au minimum, avec une usure et une marque comparables, pour ne pas déséquilibrer la tenue de route."),
    ),
    'local'   => "Un doute sur l'état de vos pneus ? Passez à notre atelier du Chem. de St-Triphon 22 à Aigle pour un contrôle gratuit et sans rendez-vous — profondeur, âge, pression, tout est vérifié en quelques minutes.",
    'cta'     => 'Pneus à changer ? Dès CHF 80.– par roue.',
    'offer'   => "Contrôle et remplacement de pneus",
    'from'    => 'CHF 80.–',
    'image'   => 'https://www.neo-carrosserie.ch/wp-content/uploads/2026/08/usure-pneus-hero.jpg',
    'callout' => array(
      'eyebrow'   => 'Bon à savoir',
      'h2'        => "Pneus hiver : d'octobre à Pâques",
      'text'      => "Ce n'est pas une obligation légale en Suisse, mais une recommandation forte de l'OFROU et du TCS : sous 7°C, la gomme des pneus été durcit et perd son adhérence. En cas d'accident avec des pneus inadaptés en conditions hivernales, l'assurance peut refuser de couvrir les dégâts.",
      'cta_label' => 'Prendre rendez-vous',
      'cta_link'  => '/contact/',
      'image'     => 'https://www.neo-carrosserie.ch/wp-content/uploads/2026/08/hiver-hero.jpg',
    ),
    'faq' => array(
      array("Quand dois-je monter mes pneus hiver ?", "Il n'y a pas d'obligation légale de date en Suisse, mais l'OFROU et le TCS recommandent de rouler en pneus hiver d'octobre à Pâques, dès que les températures passent régulièrement sous 7°C."),
      array("Quelle est la profondeur de sculpture minimale légale en Suisse ?", "1,6 mm sur les trois quarts centraux de la bande de roulement, pour les pneus été comme hiver. En dessous, le pneu n'est plus conforme et l'adhérence chute fortement sur route mouillée."),
      array("Comment connaître l'âge de mon pneu ?", "Grâce au code DOT à 4 chiffres gravé sur le flanc : les deux derniers chiffres indiquent l'année de fabrication, les deux premiers la semaine. Par exemple « 2624 » signifie la 26ᵉ semaine de 2024."),
      array("Faut-il remplacer les 4 pneus en même temps ?", "Pas obligatoirement, mais toujours par paire sur un même essieu, avec une usure et une marque comparables — un déséquilibre avant/arrière nuit à la tenue de route."),
    ),
  ),
  'reparation-carrosserie-aigle' => array(
    'eyebrow' => 'Carrosserie',
    'h1'      => "Carrosserie à Aigle : réparation après accident, toutes marques",
    'intro'   => "Un choc, une rayure, un sinistre ? NEO Carrosserie remet votre véhicule en état à Aigle, au cœur du Chablais. Nous réparons toutes les marques et nous nous occupons de votre dossier d'assurance, du devis jusqu'à la remise du véhicule.",
    'h2'      => "Ce que nous réparons",
    'bullets' => array(
      array("Chocs et accidents", "pare-chocs, ailes, portières et capots."),
      array("Rayures et éraflures", "remises en état proprement, toutes marques."),
      array("Débosselage", "avec ou sans peinture, selon l'état de la tôle."),
      array("Pièces de carrosserie", "remplacement de pièces et réparation de plastiques."),
      array("Peinture en cabine", "remise en peinture après réparation."),
      array("Dossier d'assurance", "nous vous aidons à le préparer et à échanger avec l'assurance."),
      array("Véhicule de courtoisie", "sur demande et selon disponibilité, pendant la réparation."),
    ),
    'local'   => "Devis gratuit et sans engagement : par téléphone, WhatsApp, formulaire ou directement à l'atelier du Chem. de St-Triphon 22 à Aigle. Quelques photos des dégâts suffisent pour une première estimation. Réparation de carrosserie dès CHF 50.– ; le prix final dépend du véhicule et de l'ampleur des dégâts. Délai habituel : environ 2 jours ouvrés, selon l'ampleur des dégâts. Atelier ouvert du lundi au vendredi, de 8h à 17h30. Note de 4,9 sur 5 sur Google.",
    'faq'     => array(
      array("Combien coûte une réparation de carrosserie ?", "Nos réparations commencent dès CHF 50.–. Le prix dépend du véhicule et de l'étendue des dégâts : demandez un devis gratuit."),
      array("Mon assurance prend-elle en charge la réparation ?", "Dans de nombreux cas, oui, selon votre contrat. Nous vous aidons à préparer le dossier et à échanger avec l'assurance."),
      array("Combien de temps dure une réparation ?", "Le délai habituel est d'environ 2 jours ouvrés, selon l'ampleur des dégâts. Le devis indique le délai prévu pour votre véhicule."),
      array("Avez-vous un véhicule de courtoisie ?", "Oui, sur demande et selon disponibilité, pendant la durée de la réparation."),
      array("Travaillez-vous sur toutes les marques ?", "Oui, nous réparons toutes les marques."),
      array("Comment prendre rendez-vous ?", "Appelez le 021 533 56 56 ou écrivez-nous sur WhatsApp au +41 78 954 50 03, du lundi au vendredi de 8h à 17h30. Vous pouvez aussi remplir le formulaire de devis."),
    ),
    'cta'     => 'Accident ou rayure ? Devis gratuit et sans engagement.',
    'offer'   => 'Réparation de carrosserie',
    'from'    => 'CHF 50.–',
  ),
  'peinture-automobile-aigle' => array(
    'eyebrow' => 'Peinture',
    'h1'      => "Peinture automobile à Aigle, en cabine",
    'intro'   => "Une rayure, un éclat, un panneau à refaire après un choc : NEO Carrosserie peint votre véhicule en cabine, à Aigle, avec une teinte fidèle à l'origine et une finition professionnelle.",
    'h2'      => "Nos prestations de peinture et d'esthétique",
    'bullets' => array(
      array("Mise en peinture et retouches", "d'un élément complet ou retouches localisées."),
      array("Teinte d'origine", "ajustée à votre véhicule pour un raccord discret."),
      array("Vernis de protection", "finition brillante et durable."),
      array("Polissage et lustrage", "traitement des rayures et remise en éclat."),
      array("Optiques de phares et jantes", "rénovation des optiques, réparation et polissage de jantes."),
      array("Traitement céramique", "protection durable de la peinture."),
      array("Véhicules anciens et bateaux", "restauration, peinture et polissage de coque."),
    ),
    'local'   => "Devis gratuit et sans engagement, sur photos ou directement à l'atelier du Chem. de St-Triphon 22 à Aigle. Le prix dépend de la surface à peindre et de la teinte. Délai habituel : environ 2 jours ouvrés, selon la surface à peindre. Atelier ouvert du lundi au vendredi, de 8h à 17h30.",
    'faq'     => array(
      array("La teinte sera-t-elle identique à celle de ma voiture ?", "Nous partons de la teinte d'origine et l'ajustons à votre véhicule pour que le raccord soit le plus discret possible."),
      array("Peut-on retoucher une petite zone sans repeindre tout le panneau ?", "Dans certains cas, oui. Nous regardons les dégâts à l'atelier et nous vous disons ce qui est possible avant de commencer."),
      array("Combien de temps dure une peinture ?", "Le délai habituel est d'environ 2 jours ouvrés, selon la surface à peindre. Le devis précise le délai pour votre véhicule."),
      array("Combien ça coûte ?", "Le prix dépend de la surface et de la teinte. Le devis est gratuit et sans engagement."),
      array("Peignez-vous des bateaux ?", "Nous proposons la peinture et le polissage de coque. Contactez-nous avec le type de bateau pour un devis."),
    ),
    'cta'     => 'Une peinture à refaire ? Devis gratuit et sans engagement.',
    'offer'   => 'Peinture automobile',
    'from'    => 'CHF 50.–',
  ),
  'garage-mecanique-aigle' => array(
    'eyebrow' => 'Mécanique',
    'h1'      => "Entretien et mécanique à Aigle : freins, vidange, climatisation",
    'intro'   => "NEO Carrosserie s'occupe aussi de l'entretien courant de votre véhicule à Aigle. Un seul atelier pour la carrosserie et la mécanique : vous gagnez du temps, et nous gardons un œil sur l'ensemble de votre voiture.",
    'h2'      => "Nos prestations d'entretien",
    'bullets' => array(
      array("Freins", "contrôle, plaquettes et disques, avec devis avant d'intervenir."),
      array("Vidange", "entretien courant selon le carnet d'entretien de votre véhicule."),
      array("Climatisation", "contrôle du circuit et recharge du système."),
      array("Préparation à l'expertise", "pour passer le contrôle dans de bonnes conditions."),
      array("Pneus", "pose, équilibrage et gardiennage, dès CHF 80.– par roue."),
      array("Véhicule de courtoisie", "sur demande et selon disponibilité."),
    ),
    'local'   => "Prestations d'entretien dès CHF 40.– ; le prix final dépend du véhicule et de l'intervention. Devis gratuit. Prenez rendez-vous à l'atelier du Chem. de St-Triphon 22 à Aigle, par téléphone ou WhatsApp, du lundi au vendredi de 8h à 17h30.",
    'faq'     => array(
      array("Quand faut-il changer les plaquettes de frein ?", "Quand elles sont usées : bruit de frottement, freinage moins efficace ou voyant d'usure. Un contrôle à l'atelier permet de le savoir avec certitude."),
      array("À quelle fréquence faire la vidange ?", "Selon le carnet d'entretien de votre véhicule. En cas de doute, apportez-le-nous : nous vous indiquons l'échéance."),
      array("Quand recharger la climatisation ?", "Quand l'air soufflé est moins froid ou que le système met longtemps à refroidir."),
      array("Puis-je profiter d'un véhicule de courtoisie ?", "Oui, sur demande et selon disponibilité."),
      array("Comment prendre rendez-vous ?", "Appelez le 021 533 56 56 ou écrivez sur WhatsApp au +41 78 954 50 03, du lundi au vendredi de 8h à 17h30."),
    ),
    'guide'   => array(
      'label' => "Climatisation : recharge et entretien",
      'text'  => "Gaz, recherche de fuite, désinfection du circuit : le détail de notre service climatisation.",
      'link'  => '/climatisation/',
      'cta'   => 'Voir la page',
    ),
    'cta'     => 'Entretien à prévoir ? Devis gratuit, dès CHF 40.–.',
    'offer'   => "Entretien et mécanique automobile",
    'from'    => 'CHF 40.–',
  ),
  'reparation-grele-aigle' => array(
    'eyebrow' => 'Grêle',
    'h1'      => "Réparation de grêle à Aigle, sans repeindre",
    'intro'   => "Après un orage, votre carrosserie est couverte de petites bosses ? Le débosselage sans peinture supprime les bosses sans repeindre : c'est plus rapide et plus économique qu'une remise en peinture.",
    'h2'      => "Le débosselage sans peinture, étape par étape",
    'bullets' => array(
      array("Sans repeindre", "la tôle est redressée de l'intérieur, bosse par bosse, en gardant la peinture d'origine."),
      array("Quand la peinture est intacte", "la technique convient lorsque la peinture n'est pas endommagée."),
      array("Si la peinture est abîmée", "fissurée, écaillée ou tôle trop déformée : une remise en peinture en cabine peut être nécessaire, nous vous le disons dès le devis."),
      array("Grêle et assurance", "les dégâts de grêle sont en général couverts par la casco partielle : vérifiez votre contrat, nous vous aidons pour le dossier."),
      array("Après un orage", "contactez-nous avec quelques photos : nous estimons les dégâts et vous proposons un rendez-vous."),
    ),
    'local'   => "Devis gratuit et sans engagement à l'atelier du Chem. de St-Triphon 22 à Aigle. Le prix dépend du nombre et de la taille des bosses. Délai habituel : environ 2 jours ouvrés, selon le nombre de bosses. Atelier ouvert du lundi au vendredi, de 8h à 17h30.",
    'faq'     => array(
      array("La réparation de grêle abîme-t-elle la peinture ?", "Non, le débosselage sans peinture conserve la peinture d'origine lorsqu'elle est intacte."),
      array("Combien coûte une réparation de grêle ?", "Le prix dépend du nombre et de la taille des bosses. Le devis est gratuit et sans engagement."),
      array("Combien de temps faut-il ?", "Le délai habituel est d'environ 2 jours ouvrés, selon le nombre de bosses. Le devis précise le délai pour votre véhicule."),
      array("Mon assurance prend-elle en charge la grêle ?", "En général, la casco partielle couvre la grêle. Consultez votre contrat ; nous vous aidons pour le dossier."),
    ),
    'cta'     => 'Dégâts de grêle ? Devis gratuit et sans engagement.',
    'offer'   => 'Réparation de grêle sans peinture',
    'from'    => 'CHF 50.–',
  ),

);

// Traductions DE/IT des pages ajoutees en octobre 2026
global $TRP_LANGUAGE;
$neo_lc = isset($TRP_LANGUAGE) ? substr($TRP_LANGUAGE, 0, 2) : "fr";
if ($neo_lc !== "fr") { $neo_tr = @include get_template_directory() . "/svc-i18n-new.php"; if (is_array($neo_tr) && isset($neo_tr[$neo_lc][$slug]) && isset($D[$slug])) { $D[$slug] = array_merge($D[$slug], $neo_tr[$neo_lc][$slug]); } }

$d = isset($D[$slug]) ? $D[$slug] : null;
if ( ! $d ) { echo '<section style="max-width:900px;margin:60px auto;padding:0 44px"><p>Page en préparation.</p></section>'; get_footer(); return; }
$imgbase = get_template_directory_uri() . '/assets/';
?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:46px 44px 20px">
    <img src="<?php echo $imgbase; ?>mark.svg" alt="" aria-hidden="true" style="position:absolute;right:-40px;top:-10px;width:360px;opacity:.07;pointer-events:none;user-select:none">
    <div style="position:relative;display:flex;flex-wrap:wrap;gap:44px;align-items:center">
      <div style="flex:1 1 420px;min-width:300px;max-width:780px">
        <div style="font:700 16px Manrope;letter-spacing:.18em;text-transform:uppercase;color:#F26A12"><?php echo esc_html($d['eyebrow']); ?></div>
        <h1 style="font:800 50px/1.04 Archivo;letter-spacing:-.025em;margin:16px 0 0"><?php echo esc_html($d['h1']); ?></h1>
        <p style="font:400 19px/1.6 Manrope;color:#5E5C57;margin:20px 0 0"><?php echo esc_html($d['intro']); ?></p>
        <div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:28px">
          <a href="tel:+41215335656" style="display:flex;align-items:center;gap:12px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:15px 24px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.32)"><span style="font:800 18px Archivo">021 533 56 56</span></a>
          <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;font:700 16px Manrope;padding:14px 24px;border-radius:12px">Devis gratuit</a>
        </div>
      </div>
<?php   if ( ! empty($d['image']) ): ?>
      <div style="flex:1 1 360px;min-width:280px;max-width:460px">
        <img src="<?php echo esc_url($d['image']); ?>" alt="<?php echo esc_attr($d['h1']); ?>" style="display:block;width:100%;height:360px;object-fit:cover;border-radius:20px;box-shadow:0 20px 50px rgba(5,25,43,.16)">
      </div>
<?php   endif; ?>
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
<?php if ( ! empty($d['pricing']) ): $pr = $d['pricing']; ?>
    <div style="margin-top:30px;max-width:560px;background:#fff;border:1px solid #e7e3db;border-radius:16px;overflow:hidden">
      <?php foreach ($pr['rows'] as $i => $row): ?>
      <div style="display:flex;justify-content:space-between;align-items:center;padding:14px 22px;<?php echo $i > 0 ? 'border-top:1px solid #ece7de;' : ''; ?>">
        <span style="font:600 15px Manrope;color:#3d3b36">Roue <?php echo esc_html($row[0]); ?></span>
        <span style="font:800 17px Archivo;color:#15140F"><?php echo esc_html($row[1]); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
<?php if ( ! empty($pr['note']) ): ?>
    <p style="font:400 13px/1.5 Manrope;color:#9a948a;margin:10px 0 0;max-width:560px"><?php echo esc_html($pr['note']); ?></p>
<?php endif; ?>
<?php endif; ?>
    <p style="font:400 16px/1.7 Manrope;color:#5E5C57;margin:26px 0 0;max-width:820px"><?php echo esc_html($d['local']); ?></p>
    <div style="display:flex;flex-wrap:wrap;gap:9px;margin-top:22px">
      <a href="/services/" style="font:700 13px Manrope;background:#15140F;color:#fff;padding:9px 16px;border-radius:999px;text-decoration:none">Tous nos services</a>
      <a href="/contact/" style="font:700 13px Manrope;background:#fff;border:1px solid #e0dbd2;color:#3d3b36;padding:9px 16px;border-radius:999px;text-decoration:none">Nous contacter</a>
    </div>
  </section>

<?php if ( ! empty($d['callout']) ): $c = $d['callout']; ?>
  <!-- CALLOUT -->
  <section style="max-width:1280px;margin:20px auto 0;padding:0 44px">
    <div style="background:#F4F6F8;border:1px solid #e3e7ec;border-radius:24px;padding:44px;display:flex;flex-wrap:wrap;gap:36px;align-items:center">
      <div style="flex:2 1 460px;min-width:300px">
<?php     if ( ! empty($c['eyebrow']) ): ?>
        <div style="font:700 14px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12"><?php echo esc_html($c['eyebrow']); ?></div>
<?php     endif; ?>
        <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:10px 0 0;max-width:640px"><?php echo esc_html($c['h2']); ?></h2>
        <p style="font:400 16px/1.7 Manrope;color:#5E5C57;margin:16px 0 0;max-width:760px"><?php echo esc_html($c['text']); ?></p>
<?php     if ( ! empty($c['cta_label']) ): ?>
        <div style="margin-top:24px">
          <a href="<?php echo esc_url($c['cta_link']); ?>" style="display:inline-flex;font:700 14px Manrope;background:#15140F;color:#fff;padding:11px 20px;border-radius:999px;text-decoration:none"><?php echo esc_html($c['cta_label']); ?></a>
        </div>
<?php     endif; ?>
      </div>
<?php     if ( ! empty($c['image']) ): ?>
      <div style="flex:1 1 260px;min-width:220px;max-width:340px;align-self:stretch">
        <img src="<?php echo esc_url($c['image']); ?>" alt="<?php echo esc_attr($c['h2']); ?>" style="display:block;width:100%;height:100%;min-height:280px;object-fit:cover;border-radius:16px;box-shadow:0 16px 40px rgba(5,25,43,.14)">
      </div>
<?php     endif; ?>
    </div>
  </section>
<?php endif; ?>

<?php if ( ! empty($d['gardiennage']) ): $g = $d['gardiennage']; ?>
  <!-- GARDIENNAGE -->
  <section style="max-width:1280px;margin:20px auto 0;padding:0 44px">
    <div style="background:#F4F6F8;border:1px solid #e3e7ec;border-radius:24px;padding:44px;display:flex;flex-wrap:wrap;gap:36px;align-items:center">
      <div style="flex:2 1 460px;min-width:300px">
        <div style="font:700 14px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12">Service complémentaire</div>
        <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:10px 0 0;max-width:640px"><?php echo esc_html($g['h2']); ?></h2>
        <p style="font:400 16px/1.7 Manrope;color:#5E5C57;margin:16px 0 0;max-width:760px"><?php echo esc_html($g['intro']); ?></p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px 32px;max-width:1000px;margin-top:26px">
          <?php foreach ($g['bullets'] as $b): ?>
          <div style="display:flex;gap:12px;align-items:flex-start"><span style="color:#F26A12;flex:none;margin-top:2px">✔</span><div style="font:400 15px/1.55 Manrope;color:#3d3b36"><b><?php echo esc_html($b[0]); ?></b> — <?php echo esc_html($b[1]); ?></div></div>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:24px">
          <a href="/contact/" style="display:inline-flex;font:700 14px Manrope;background:#15140F;color:#fff;padding:11px 20px;border-radius:999px;text-decoration:none">Demander le gardiennage</a>
        </div>
      </div>
<?php   if ( ! empty($g['image']) ): ?>
      <div style="flex:1 1 260px;min-width:220px;max-width:340px;align-self:stretch">
        <img src="<?php echo esc_url($g['image']); ?>" alt="<?php echo esc_attr($g['h2']); ?>" style="display:block;width:100%;height:100%;min-height:280px;object-fit:cover;border-radius:16px;box-shadow:0 16px 40px rgba(5,25,43,.14)">
      </div>
<?php   endif; ?>
    </div>
  </section>
<?php endif; ?>

<?php if ( ! empty($d['guide']) ): $gd = $d['guide']; ?>
  <!-- LIEN GUIDE -->
  <section style="max-width:1280px;margin:20px auto 0;padding:0 44px">
    <a href="<?php echo esc_url($gd['link']); ?>" style="display:flex;flex-wrap:wrap;gap:18px;align-items:center;justify-content:space-between;text-decoration:none;background:#fff;border:1px solid #e7e3db;border-radius:18px;padding:26px 30px">
      <div>
        <div style="font:800 18px/1.3 Archivo;color:#15140F"><?php echo esc_html($gd['label']); ?></div>
        <div style="font:400 15px/1.6 Manrope;color:#5E5C57;margin-top:4px;max-width:600px"><?php echo esc_html($gd['text']); ?></div>
      </div>
      <span style="flex:none;font:700 13px Manrope;background:#15140F;color:#fff;padding:10px 18px;border-radius:999px"><?php echo esc_html($gd['cta']); ?> →</span>
    </a>
  </section>
<?php endif; ?>

<?php if ( ! empty($d['faq']) ): ?>
  <!-- FAQ -->
  <section style="max-width:900px;margin:40px auto 0;padding:0 44px">
    <h2 style="font:800 30px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 20px">Questions fréquentes</h2>
<?php foreach ($d['faq'] as $qa): ?>
    <div style="border:1px solid #e7e3db;background:#fff;border-radius:14px;padding:20px 22px;margin-bottom:12px">
      <h3 style="font:800 17px/1.3 Archivo;color:#15140F;margin:0 0 7px"><?php echo esc_html($qa[0]); ?></h3>
      <div style="font:400 16px/1.7 Manrope;color:#3d3b36"><?php echo esc_html($qa[1]); ?></div>
    </div>
<?php endforeach; ?>
  </section>
<?php
  $neo_faq_entities = array();
  foreach ($d['faq'] as $qa) {
    $neo_faq_entities[] = array('@type'=>'Question','name'=>$qa[0],'acceptedAnswer'=>array('@type'=>'Answer','text'=>$qa[1]));
  }
  $neo_faq_schema = array('@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$neo_faq_entities);
  echo "\n<script type=\"application/ld+json\">".wp_json_encode($neo_faq_schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)."</script>\n";
?>
<?php endif; ?>

<?php echo neo_tarifs_band( isset($d['from']) ? $d['from'] : 'CHF 50.–' ); ?>

  <!-- CTA -->
  <section style="max-width:1280px;margin:26px auto 60px;padding:0 44px">
    <div class="neo-band-dark" style="background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;border-radius:24px;padding:50px;display:flex;flex-wrap:wrap;align-items:center;gap:28px;justify-content:space-between">
      <div style="flex:1 1 420px;min-width:300px"><h2 style="font:800 32px/1.1 Archivo;letter-spacing:-.02em;margin:0;max-width:560px"><?php echo esc_html($d['cta']); ?></h2></div>
      <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;font:800 17px Manrope;padding:16px 28px;border-radius:13px">Demander un devis</a>
    </div>
  </section>
<?php get_footer(); ?>
