<?php
/**
 * Job landing pattern.
 */

return array(
    'title'      => __( 'VeronaJobs Landing', 'veronajobs' ),
    'slug'       => 'veronajobs/job-landing',
    'categories' => array( 'veronajobs', 'pages' ),
    'content'    => '
<!-- wp:cover {"overlayColor":"black","minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","className":"hero"} -->
<div class="wp-block-cover hero"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"container hero-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group container hero-content"><!-- wp:heading {"className":"fade-in-up"} -->
<h2 class="fade-in-up">VERONAJOBS —<br><span class="gold-text">EXKLUZÍV<br>MUNKAERŐ-<br>KÖZVETÍTÉS</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fade-in-up delay-1"} -->
<p class="fade-in-up delay-1">Összekötjük a megbízható munkaadókat a gondosan válogatott szakemberekkel Magyarországon és Szlovákiában. Diszkréció, bizalom, minőség – ez a Veronajob.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"fade-in-up delay-2"} -->
<div class="wp-block-buttons fade-in-up delay-2"><!-- wp:button {"className":"btn btn-outline"} -->
<div class="wp-block-button btn btn-outline"><a class="wp-block-button__link wp-element-button" href="#contact">Partnereknek</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"btn btn-filled"} -->
<div class="wp-block-button btn btn-filled"><a class="wp-block-button__link wp-element-button" href="#candidates">Munkát keresek</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"section-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-dark"><!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
<div class="wp-block-group container"><!-- wp:heading {"level":2,"className":"section-title"} -->
<h2 class="section-title">RÓLUNK</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A Veronajob több mint egy fejvadász cég. Stratégiai partnerek vagyunk, akik hidat képeznek a tehetség és a lehetőség között.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Csapatunk szakértői több éves tapasztalattal rendelkeznek a prémium HR szolgáltatások terén, biztosítva, hogy ügyfeleink csak a legkiválóbb jelöltekkel találkozzanak.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"section-black","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-black"><!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
<div class="wp-block-group container"><!-- wp:heading {"className":"section-title"} -->
<h2 class="section-title">SZOLGÁLTATÁSAINK</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"services-grid"} -->
<div class="wp-block-columns services-grid"><!-- wp:column {"className":"service-card"} -->
<div class="wp-block-column service-card"><!-- wp:paragraph {"className":"icon-box"} -->
<p class="icon-box"><i class="fa-solid fa-handshake"></i></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Munkaerő-közvetítés prémium szinten</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Teljes körű toborzási folyamat menedzselése, a specifikációtól a kiválasztásig.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card"} -->
<div class="wp-block-column service-card"><!-- wp:paragraph {"className":"icon-box"} -->
<p class="icon-box"><i class="fa-solid fa-users-viewfinder"></i></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Rugalmas létszámmegoldások</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Időszakos és projektalapú munkaerő biztosítása gyorsan és hatékonyan.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card"} -->
<div class="wp-block-column service-card"><!-- wp:paragraph {"className":"icon-box"} -->
<p class="icon-box"><i class="fa-solid fa-file-signature"></i></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Teljes körű HR támogatás</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tanácsadás, bérszámfejtés és adminisztrációs terhek átvállalása.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card"} -->
<div class="wp-block-column service-card"><!-- wp:paragraph {"className":"icon-box"} -->
<p class="icon-box"><i class="fa-solid fa-earth-europe"></i></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Nemzetközi közvetítés</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Határon átnyúló lehetőségek Magyarország és Szlovákia között.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"section-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-dark"><!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
<div class="wp-block-group container"><!-- wp:heading {"level":2,"className":"section-title"} -->
<h2 class="section-title">Előnyök</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Diszkrét, prémium kiválasztási folyamat</li><li>Nemzetközi hálózat Magyarországon és Szlovákiában</li><li>Dedikált tanácsadó partnereknek és jelölteknek</li></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"section-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-dark"><!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
<div class="wp-block-group container"><!-- wp:heading {"level":2,"className":"section-title"} -->
<h2 class="section-title">Galéria</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Kép helye (tölts fel borítófotót az álláshoz vagy csapatról).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Kép helye (működési helyszín vagy iroda bemutatása).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Kép helye (benefitek, csapat vagy projekt illusztrációk).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
