<?php
/* Template Name: Über Uns */
get_header();
include_once("page-header.php");
?>
<section id="about-us" class="container-fluid pe-0 ps-0 ms-0 me-0 block">
  <div class="text-center">
    <h1 class="title text-uppercase">Über uns</h1>
  </div>
  <div class="container px-4 pt-3">
    <div class="row gx-3 row1">
      <div class="col-12 col-md-6 align-content-center">
        <div class="polaroid-item first">
          <div class="polaroid"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-anke-andrea.jpg" class="img-fluid" alt="Anke und Andrea vor dem Fahrradcafe">
            <div class="caption">Andrea & Anke</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 align-content-center">
        <p>Wir sind Andrea und Anke und hatten einst eine Schnapsidee: die Eröffnung eines Fahrradcafés. 😊 Aus Gaukelei und Scherz wurde nun im Mai 2024 Ernst – und eine Leidenschaft mit Herz.<br /> <br />Unsere Vision ist ein kleines, gemütliches Café, das einen Zwischenstopp für alle ermöglicht – egal ob Fahrradfahrer, Wanderer, Spaziergänger oder einfach für die Menschen in der Umgebung. Wir lieben den Umgang mit Menschen und haben große Freude am Bedienen. Der Austausch und das Philosophieren mit unseren Gästen liegen uns sehr am Herzen.</p>
      </div>
    </div>
    <div class="row gx-3 row2">
      <div class="col-12 col-md-6 order-2 order-md-1 align-content-center">
        <p>Mit viel Liebe zum Detail, Disziplin, Hingabe und fleißigen Handwerkern haben wir unsere gesamte Schaffenskraft und Energie in die alte Scheune auf unserem Grundstück gesteckt, um einen gemütlichen Platz in der Natur zu schaffen, die so wundervoll für uns Menschen ist. <br />Ein absolut magischer Ort, der zur Entschleunigung einlädt, den Verstand ruhen lässt, die Sinne entfaltet und den Geist frei macht.
          Selbstverständlich gibt es bei uns hausgemachte, frische Waffeln und Kuchen, leckeren Kaffee sowie kleine Speisen, original DDR-Softeis und kühle Getränke, die in den Sommermonaten auf euch warten. 😊</p>
      </div>
      <div class="col-12 col-md-6 order-1 order-md-2 align-content-center">
        <div class="polaroid-item second">
          <div class="polaroid"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-1.jpg" class="img-fluid" alt="Das Fahrradcafe">
            <div class="caption">Est. 2024</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="riss-svg"></div>
</section>
<section id="spenden" class="container-fluid pe-0 ms-0 me-0 block white ">
  <div class="container px-4 pt-3">
    <div class="row">
      <div class="text-center">
        <h1 class="text-uppercase h-small">Ihr möchtet uns unterstützen?</h1>
      </div>
      <script defer src="<?php echo get_template_directory_uri(); ?>/assets/gofundme.js"></script>
      <div class="gfm-embed" data-url="https://www.gofundme.com/f/neueroffnung-fahrradcafe-zum-feldblick/widget/large?sharesheet=fundraiserstory&attribution_id=sl:66956685-2e1c-490c-8a8e-61ad8962480f"></div>
    </div>
  </div>
</section>
<section id="stellenangebot" class="container-fluid pe-0 ps-0 ms-0 me-0 block">
  <div class="riss-svg top"></div>
  <div class="container px-4 pt-3">
    <div class="row content">
      <div class="text-center">
        <h1 class="text-uppercase h-small">Du möchtest mit uns arbeiten?</h1>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="fs-3 text-center">Gerade haben wir keine offenen Stellen.</p>
          <p class="fs-4 text-center">Schick uns gern deine Initiativbewerbung – vielleicht passt du ja perfekt zu uns und wir wissen es nur noch nicht.<br>
            <a href=" mailto:jobs@fahrradcafe.de">jobs@fahrradcafe.de</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>
