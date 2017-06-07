<!-- logo Develo'pont en position absolute dans le header -->
<p id="valid"><a href="http://simplon.co/" title="Aller sur le site Simplon" target="_blank"><img src="css/img/logo-simplon2.png" alt="logo Simplon"/></a></p>


<section class="menu_footer">
  <ul>
    <li <?php if ($nav_en_cours == 'apropo') {echo 'id="in_current"';} ?> ><a href="Apropo.php">A propos</a></li>
    <li <?php if ($nav_en_cours == 'mentions') {echo 'id="in_current"';} ?> ><a href="cgu.php">Mentions légales</a></li>
    <li <?php if ($nav_en_cours == 'credit') {echo 'id="in_current"';} ?> ><a href="Credit.php">Crédits</a></li>
  </ul>
</section>


<section class="clear">
</section>

<section>
<p class="right">© 2017</p>
</section>


<section> <!-- Bouton haut de page -->
    <div id="btn_up">
        <button id="bouton_fleche" type="button">
            <span class="fa-stack fa-lg"> <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </span>
        </button>
    </div>
</section>

<script type="text/javascript" src="javascript/jquery-ui.min.js"></script>
<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="javascript/lightbox.min.js"></script>

<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("sticky");
    } else {
        $('header').removeClass("sticky");
    };
});
</script>

 <script type="text/javascript">
   $(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: true,
    sync: "#carousel"
  });
});
</script>


<script type="text/javascript">
/*global $ */
$(document).ready(function () {
    "use strict";
    $('#menu-lateral .sub-menu').hide(); //Hide children by default
    $('#menu-lateral li a').click(function (event) {
        if ($(this).next('ul.sub-menu').children().length !== 0) {event.preventDefault();
            }
        $(this).siblings('.sub-menu').slideToggle('slow');
    });
});
</script>

<!-- Animation bouton haut de page -->
<script type="text/javascript">
/*global $ */
$(function () {
    "use strict";
    $('#btn_up').click(function () {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() < 500) {
            $('#btn_up').fadeOut(500);
        } else {
            $('#btn_up').fadeIn(1000);
        }
    });
});
 </script>
