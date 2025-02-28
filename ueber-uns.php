<?php
/* Template Name: Über Uns */
get_header();
include_once("page-header.php");
?>
<section id="about-us" class="container-fluid pe-0 ps-0 ms-0 me-0 block">
  <div class="text-center">
    <h1 class="text-uppercase">Über uns</h1>
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
      <div class="col-12 col-md-6 align-content-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
      </div>
    </div>
    <div class="row gx-3 row2">
      <div class="col-12 col-md-6 order-2 order-md-1 align-content-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        Duodio dignissim qui blandit laoreet dolore magna aliquam erat volutpat.
      </div>
      <div class="col-12 col-md-6 order-1 order-md-2 align-content-center">
        <div class="polaroid-item second">
          <div class="polaroid"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-1.jpg" class="img-fluid" alt="Das Fahrradcafe">
            <div class="caption">Das fertige Fahrrad Café</div>
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
        <h1 class="text-uppercase h-small">Du möchtest uns unterstützen?</h1>
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
          <p class="fs-3 text-center">Wir haben folgende Stellenangebote:</p>
          <p class="fs-4 text-center">Bewirb dich direkt über: <a href=" mailto:jobs@fahrradcafe.de">jobs@fahrradcafe.de</a></p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>
