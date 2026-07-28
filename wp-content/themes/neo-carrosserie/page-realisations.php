<?php
get_header();
$updir  = wp_upload_dir();
$rbase  = $updir['basedir'] . '/realisations';
$rurl   = $updir['baseurl'] . '/realisations';
$photos = glob($rbase . '/r*.jpg'); if (is_array($photos)) sort($photos); else $photos = array();
$videos = glob($rbase . '/v*.mp4'); if (is_array($videos)) sort($videos); else $videos = array();
// N'afficher qu'une photo/vidéo sur deux (moitié), en gardant de la variété
$tmp = array(); foreach ($photos as $i => $v) { if ($i % 2 === 0) $tmp[] = $v; } $photos = $tmp;
$tmp = array(); foreach ($videos as $i => $v) { if ($i % 2 === 0) $tmp[] = $v; } $videos = $tmp;
$captions = array(
  'r01.jpg' => 'Citroën Traction Avant · restauration',
  'r02.jpg' => 'Citroën Traction Avant · finitions',
  'r03.jpg' => 'Alfa Romeo · carrosserie complète',
  'r04.jpg' => 'Alfa Romeo · préparation',
  'r05.jpg' => 'Bateau · peinture de coque',
  'r06.jpg' => 'Restauration · mise en apprêt',
  'r07.jpg' => 'Carrosserie · travail sur coque nue',
  'r08.jpg' => 'Bateau · rénovation en atelier',
  'r09.jpg' => 'Bateau · cabine de peinture',
  'r10.jpg' => 'Bateau · préparation atelier',
  'r11.jpg' => 'Berline · préparation avant peinture',
  'r12.jpg' => 'VW ID.3 · réparation & peinture',
  'r13.jpg' => 'Citadine électrique · carrosserie',
  'r14.jpg' => 'Élément peint · cabine de peinture',
  'r15.jpg' => 'Citroën Traction Avant · atelier',
  'r16.jpg' => 'VW ID.3 · cabine de peinture',
  'r17.jpg' => 'VW ID.3 · carrosserie sur banc',
  'r18.jpg' => 'VW ID.3 · dépose des éléments',
  'r19.jpg' => 'VW ID.3 · remise en forme',
  'r20.jpg' => 'VW ID.3 · habitacle',
  'r21.jpg' => 'BMW i3 · carrosserie',
  'r22.jpg' => 'VW ID.3 · finition',
);
?>
  <!-- HERO -->
  <section style="position:relative;overflow:hidden;max-width:1280px;margin:0 auto;padding:50px 44px 10px;text-align:center">
    <div style="font:700 13px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12">Nos réalisations</div>
    <h1 style="font:800 52px/1.0 Archivo;letter-spacing:-.025em;margin:14px 0 0">Le résultat parle de lui-même</h1>
    <p style="font:400 19px/1.6 Manrope;color:#5E5C57;max-width:700px;margin:18px auto 0">Réparations collision, peinture, restauration de véhicules d'exception et travaux sur bateau : nos chantiers à Aigle, en photos et en vidéo.</p>
  </section>

  <!-- GALERIE PHOTOS -->
  <section style="max-width:1280px;margin:0 auto;padding:34px 44px 10px">
    <div style="display:flex;align-items:center;gap:11px;margin-bottom:22px"><span style="font:700 13px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12">Galerie</span><span style="flex:1;height:1px;background:#ece7de"></span></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:16px">
<?php foreach ($photos as $p): $bn = basename($p); $u = $rurl . '/' . rawurlencode($bn); $cap = isset($captions[$bn]) ? $captions[$bn] : 'Réalisation · NEO Carrosserie Aigle'; ?>
      <a class="neo-gallery-item" href="<?php echo esc_url($u); ?>" data-caption="<?php echo esc_attr($cap); ?>" style="display:block;position:relative;border-radius:16px;overflow:hidden;border:1px solid #ece7de;background:#faf8f4;aspect-ratio:4/3;cursor:pointer">
        <img src="<?php echo esc_url($u); ?>" loading="lazy" alt="<?php echo esc_attr($cap); ?>" style="display:block;width:100%;height:100%;object-fit:cover;transition:transform .4s ease">
        <span style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(transparent,rgba(21,20,15,.85));color:#fff;font:700 13px Manrope;padding:26px 14px 12px"><?php echo esc_html($cap); ?></span>
      </a>
<?php endforeach; ?>
    </div>
  </section>

  <!-- VIDÉOS -->
<?php if ($videos): ?>
  <section style="max-width:1280px;margin:0 auto;padding:34px 44px 10px">
    <div style="display:flex;align-items:center;gap:11px;margin-bottom:22px"><span style="font:700 13px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12">En vidéo</span><span style="flex:1;height:1px;background:#ece7de"></span></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:16px">
<?php foreach ($videos as $v): $u = $rurl . '/' . rawurlencode(basename($v)); ?>
      <video controls preload="metadata" playsinline style="display:block;width:100%;height:300px;object-fit:contain;background:#0b0b0b;border-radius:16px;border:1px solid #ece7de"><source src="<?php echo esc_url($u); ?>#t=0.1" type="video/mp4"></video>
<?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>

  <!-- CTA -->
  <section style="max-width:1280px;margin:34px auto 60px;padding:0 44px">
    <div class="neo-band-dark" style="background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;border-radius:24px;padding:50px;display:flex;flex-wrap:wrap;align-items:center;gap:28px;justify-content:space-between">
      <div style="flex:1 1 420px;min-width:300px">
        <h2 style="font:800 32px/1.1 Archivo;letter-spacing:-.02em;margin:0;max-width:560px">Un projet similaire ? Demandez votre devis gratuit.</h2>
        <p style="font:400 17px Manrope;color:#c9c4bb;margin:12px 0 0">On vous conseille sans engagement.</p>
      </div>
      <a href="/contact/" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;font:800 17px Manrope;padding:16px 28px;border-radius:13px">Demander un devis
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
      </a>
    </div>
  </section>

  <!-- LIGHTBOX -->
  <div id="neo-lb" style="display:none;position:fixed;inset:0;z-index:99999;background:rgba(8,11,16,.94);align-items:center;justify-content:center;padding:30px">
    <button id="neo-lb-close" aria-label="Fermer" style="position:absolute;top:18px;right:22px;width:46px;height:46px;border:0;border-radius:50%;background:rgba(255,255,255,.12);color:#fff;font:400 26px/1 Manrope;cursor:pointer">&times;</button>
    <button id="neo-lb-prev" aria-label="Précédent" style="position:absolute;left:16px;top:50%;transform:translateY(-50%);width:52px;height:52px;border:0;border-radius:50%;background:rgba(255,255,255,.12);color:#fff;font:400 30px/1 Manrope;cursor:pointer">&#8249;</button>
    <button id="neo-lb-next" aria-label="Suivant" style="position:absolute;right:16px;top:50%;transform:translateY(-50%);width:52px;height:52px;border:0;border-radius:50%;background:rgba(255,255,255,.12);color:#fff;font:400 30px/1 Manrope;cursor:pointer">&#8250;</button>
    <figure style="margin:0;max-width:1100px;max-height:100%;display:flex;flex-direction:column;align-items:center;gap:14px">
      <img id="neo-lb-img" src="" alt="" style="max-width:100%;max-height:80vh;border-radius:12px;box-shadow:0 30px 80px rgba(0,0,0,.5)">
      <figcaption id="neo-lb-cap" style="color:#fff;font:700 15px Manrope;text-align:center"></figcaption>
    </figure>
  </div>
  <script>
  (function(){
    var items=[].slice.call(document.querySelectorAll('.neo-gallery-item'));
    if(!items.length) return;
    var lb=document.getElementById('neo-lb'), img=document.getElementById('neo-lb-img'), cap=document.getElementById('neo-lb-cap'), idx=0;
    function show(i){ idx=(i+items.length)%items.length; var a=items[idx]; img.src=a.getAttribute('href'); cap.textContent=a.getAttribute('data-caption')||''; }
    function open(i){ show(i); lb.style.display='flex'; document.body.style.overflow='hidden'; }
    function close(){ lb.style.display='none'; document.body.style.overflow=''; img.src=''; }
    items.forEach(function(a,i){ a.addEventListener('click',function(e){ e.preventDefault(); open(i); }); });
    document.getElementById('neo-lb-close').addEventListener('click',close);
    document.getElementById('neo-lb-prev').addEventListener('click',function(e){ e.stopPropagation(); show(idx-1); });
    document.getElementById('neo-lb-next').addEventListener('click',function(e){ e.stopPropagation(); show(idx+1); });
    lb.addEventListener('click',function(e){ if(e.target===lb) close(); });
    document.addEventListener('keydown',function(e){ if(lb.style.display==='none')return; if(e.key==='Escape')close(); else if(e.key==='ArrowLeft')show(idx-1); else if(e.key==='ArrowRight')show(idx+1); });
  })();
  </script>
<?php get_footer();
