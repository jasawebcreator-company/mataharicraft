</div>




<?php include "footer_component.php" ?>
<?php include "footer_metadata.php" ?>



<!-- Vendor -->
<?= $func->script("vendor/popper/umd/popper.min.js") ?>
<script src="<?= base_url('assets') ?>/front/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<?= $func->script("vendor/magnific-popup/jquery.magnific-popup.min.js") ?>
<!-- <script src="<?= base_url('assets') ?>/front/vendor/owl.carousel/owl.carousel.min.js"></script> -->

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets') ?>/front/js/theme.min.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets') ?>/front/js/wow.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/common/common.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.init.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/ls.bgset.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/lazysizes.min.js"></script>
<!-- <script src="<?= base_url('assets') ?>/front/js/examples/examples.gallery.js"></script> -->

<script>
  new WOW().init();
</script>

<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WC9WTSF');</script> -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="fwhFN9Lu"></script>




<script>
  document.querySelectorAll('.child-toggle').forEach(function(toggle) {

    toggle.addEventListener('click', function(e) {

      e.preventDefault();
      e.stopPropagation();

      let submenu = this.parentElement.querySelector('.child-menus');

      if (submenu) {
        submenu.classList.toggle('show-child-menus');
      }

    });

  });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ========================================================
       COLLECTION SLIDERS
    ======================================================== */
    const collectionSliders =
        document.querySelectorAll('.collection-image');
    if (!collectionSliders.length) {
        return;
    }
    collectionSliders.forEach(function (slider) {

        const slides =
            slider.querySelectorAll('.collection-slide');
        /*
        ========================================================
        ONLY ONE IMAGE
        ========================================================
        */
        if (slides.length <= 1) {
            return;
        }
        let currentSlide = 0;
        /* ====================================================
           SHOW SLIDE
        ==================================================== */
        function showCollectionSlide(index) {

            if (index >= slides.length) {
                index = 0;
            }
            /*
            ----------------------------------------------
            REMOVE ACTIVE FROM ALL IMAGES
            ----------------------------------------------
            */
            slides.forEach(function (slide) {
                slide.classList.remove('active');
            });
            /*
            ----------------------------------------------
            ACTIVATE CURRENT IMAGE
            ----------------------------------------------
            */
            slides[index].classList.add('active');
            currentSlide = index;
        }
        /* ====================================================
           AUTOPLAY
        ==================================================== */
        setInterval(function () {
            showCollectionSlide(currentSlide + 1);
        }, 4500);
    });
});
</script>

<script>
  function googleTranslateElementInit2() {
    new google.translate.TranslateElement({
      pageLanguage: "en",
      autoDisplay: false
    }, "google_translate_element2");
  }
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

<script type="text/javascript">
  eval(function(e, t, n, r, a, c) {
    if (a = function(e) {
        return (e < 43 ? "" : a(parseInt(e / 43))) + ((e %= 43) > 35 ? String.fromCharCode(e + 29) : e.toString(36))
      }, !"".replace(/^/, String)) {
      for (; n--;) c[a(n)] = r[n] || a(n);
      r = [function(e) {
        return c[e]
      }], a = function() {
        return "\\w+"
      }, n = 1
    }
    for (; n--;) r[n] && (e = e.replace(new RegExp("\\b" + a(n) + "\\b", "g"), r[n]));
    return e
  }("6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}", 0, 43, "||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500".split("|"), 0, {}))
</script>
<!-- <div id="glt-translate-trigger">
  <div class="dropdown-translate ml-4">
    <div class="dropbtn">
      <img class="dropbtn-flag" 
           src="https://jwc.gotra-resources.my.id/web-upload/1740989614-03-03-2025-JxOpLAEqk8TfsIwerBymzPhMGvtDbj1i.webp" 
           alt="LANG" />
      <div class="dropbtn-text" translate="no">EN</div>
    </div>

    <div class="dropdown-translate-content">

      <ENGLISH (Default) 

      <button class="dropbtn"
        onclick="changeLanguage('EN','jwc.gotra-resources.my.id/web-upload/1740989614-03-03-2025-JxOpLAEqk8TfsIwerBymzPhMGvtDbj1i.webp'); doGTranslate('en|en'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1740989614-03-03-2025-JxOpLAEqk8TfsIwerBymzPhMGvtDbj1i.webp" alt="EN" />
        <div class="dropbtn-text" translate="no">English</div>
      </button>

   

      <button class="dropbtn"
        onclick="changeLanguage('ID','jwc.gotra-resources.my.id/web-upload/1776045614-13-04-2026-CVGxNKYlLUZSt9HEunafXB3MoWRyjcQT.webp'); doGTranslate('en|id'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1776045614-13-04-2026-CVGxNKYlLUZSt9HEunafXB3MoWRyjcQT.webp" alt="ID" />
        <div class="dropbtn-text" translate="no">Indonesia</div>
      </button>

      

      <button class="dropbtn"
        onclick="changeLanguage('RU','jwc.gotra-resources.my.id/web-upload/1774671851-28-03-2026-2a3et9UEZDWfMGTJHY6P8RpvFS0iBOsb.webp'); doGTranslate('en|ru'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1774671851-28-03-2026-2a3et9UEZDWfMGTJHY6P8RpvFS0iBOsb.webp" alt="RU" />
        <div class="dropbtn-text" translate="no">Russia</div>
      </button>

  

      <button class="dropbtn"
        onclick="changeLanguage('PL','jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-dt1gva7BkKTDMYJ6z2lZwxXAVQ8mWr9C.webp'); doGTranslate('en|pl'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-dt1gva7BkKTDMYJ6z2lZwxXAVQ8mWr9C.webp" alt="PL" />
        <div class="dropbtn-text" translate="no">Polandia</div>
      </button>


      <button class="dropbtn"
        onclick="changeLanguage('ES','jwc.gotra-resources.my.id/web-upload/1778047106-06-05-2026-ALY6nFCiIHQ4hasK1pbP75EW9dugM3mU.webp'); doGTranslate('en|es'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1778047106-06-05-2026-ALY6nFCiIHQ4hasK1pbP75EW9dugM3mU.webp" alt="ES" />
        <div class="dropbtn-text" translate="no">Spanyol</div>
      </button>

      

      <button class="dropbtn"
        onclick="changeLanguage('FR','jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-GNher9Y8UAOSIBx2K3QFkmM6JgvlXEZt.webp'); doGTranslate('en|fr'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-GNher9Y8UAOSIBx2K3QFkmM6JgvlXEZt.webp" alt="FR" />
        <div class="dropbtn-text" translate="no">Perancis</div>
      </button>

   

      <button class="dropbtn"
        onclick="changeLanguage('NL','jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-mHxkAiJ7tUlNIqvPGMw8r3fRoE6cW1nF.webp'); doGTranslate('en|nl'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-mHxkAiJ7tUlNIqvPGMw8r3fRoE6cW1nF.webp" alt="NL" />
        <div class="dropbtn-text" translate="no">Belanda</div>
      </button>

     

      <button class="dropbtn"
        onclick="changeLanguage('HI','jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-MqDyegxYfSZUzJRCKaB8XbpH5I4wihr6.webp'); doGTranslate('en|HI'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-MqDyegxYfSZUzJRCKaB8XbpH5I4wihr6.webp" alt="HI" />
        <div class="dropbtn-text" translate="no">India</div>
      </button>

      

      <button class="dropbtn"
        onclick="changeLanguage('IT','jwc.gotra-resources.my.id/web-upload/1778047105-06-05-2026-MqDyegxYfSZUzJRCKaB8XbpH5I4wihr6.webp'); doGTranslate('en|it'); return false;">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1778642100-13-05-2026-VWBfJiRbpZ5mFTCezolyDq2Mhvs3XUQS.webp" alt="IT" />
        <div class="dropbtn-text" translate="no">Italia</div>
      </button>
     
    </div>
  </div>
</div> -->


<script>
  function changeLanguage(language, img) {
    var dropbtn = document.querySelector(".dropbtn-text");
    var flag = document.querySelector(".dropbtn-flag");
    dropbtn.textContent = language;
    flag.src = "https://" + img;
  }
</script>



<?= $func->xview_footer() ?>

</body>

</html>