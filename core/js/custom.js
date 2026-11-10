// JavaScript Document
(function ($) {
  $(document).ready(function (e) {
    reloadRelativePost();
    changeHeaderImg();

    function reloadRelativePost() {
      var opLi = [];
      $("ul.related_post li").each(function (index, element) {
        opLi[$(this).attr("data-poid").substr(3)] = $(this);
      });
      $("ul.related_post").html(opLi.reverse());
    }
    function changeHeaderImg() {
      const header = $(".no-mobile img");
      if (header.length) {
        const randImg = Math.floor(Math.random() * 6) + 1;
        const newSrc = `https://www.digitalavmagazine.com/wp-content/themes/underwood/core/img/header/${randImg}.jpg`;

        header[0].attributes["data-src"].value = newSrc;
        header[0].attributes["src"].value = newSrc;
        header[0].onerror = function () {
          this.src = `https://www.digitalavmagazine.com/wp-content/themes/underwood/core/img/header/${randImg}.jpg`;
        };
      }
    }
  });

  /*
   *  Publicidad
   *
   */

  $(".contentmain").prepend(`
    <div class='publizPushDown publicidad'>
        <a href='https://ads3.panoramaaudiovisual.com/www/delivery/ck.php?zoneid=64' target='_blank'><img src='https://ads3.panoramaaudiovisual.com/www/delivery/avw.php?zoneid=64&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>
        <div class='publizPush2Up'>
            <a href='https://ads3.panoramaaudiovisual.com/www/delivery/ck.php?zoneid=63' target='_blank'><img src='https://ads3.panoramaaudiovisual.com/www/delivery/avw.php?zoneid=63&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>
        </div>
    </div>`);
  /*  Laterales*/
  $("header .ancho").append(
    '<div class="publizLeftUp">' + PubliLateralIzda() + "</div>",
  );
  $("header .ancho").append(
    '<div class="publizRightUp">' + PubliLateralDcha() + "</div>",
  );

  /* Lateral id 223 y 224 */
  function PubliLateralIzda() {
    return "<a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?zoneid=223' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=223&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>";
  }

  function PubliLateralDcha() {
    return "<a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?zoneid=224' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=224&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>";
  }

  function checkimg() {
    if (this.width === 1) {
      this.parentNode.parentNode.remove();
    }
  }
  if ($(".contentmain .publizPushDown").length) {
    $(".contentmain .publizPushDown").find("a>img")[0].onload = checkimg;
  }

  /*
   *  Publicidad
   *
   */
  var modo = 2;
  $(document).ready(function (e) {
    var publisToMove;
    if ($("section.destacado").length) {
      publisToMove = $("aside>.widget_block");

      checkPubli();
      window.onresize = checkPubli;
    }

    function checkPubli() {
      var width = document.body.clientWidth;
      var newModo = -1;

      if (width < 670) {
        newModo = 0;
      } else if (width < 990) {
        newModo = 1;
      } else {
        newModo = 2;
      }

      if (newModo !== modo) {
        modo = newModo;
        changePublis(modo);
      }
    }

    function changePublis(mod) {
      $(".main>.publicidad").remove();
      moveCountDown(mod);
      switch (mod) {
        case 0:
          publisToMove.hide();
          putMobileMode(publisToMove.clone());
          break;
        case 1:
          publisToMove.hide();
          publisToMove.each(function () {
            if ($(this).find(".publicidad").length) {
              $(this).show();
            }
          });
          var clon = publisToMove.clone(),
            aux;
          clon = $.grep(clon, function (value) {
            return !$(value).find("table").length;
          });

          putTabletMode(clon);
          break;
        default:
          publisToMove.show();
      }
    }

    function moveCountDown(mod) {
      const elem = $(".i-countdown-widget");
      const h1 = $("h1");
      if (elem.length === 0) return;
      if (mod === 0) {
        h1.after(elem[0]);
      } else {
        $(
          $('section[id^="i-countdown"]')[0].getElementsByTagName("div"),
        ).append(elem[0]);
      }
    }

    function putMobileMode(publi) {
      var art = $("article");
      var pu = publi.length,
        i = 0;

      for (i; i < pu; i++) {
        publi[i].style.margin = "10px 0";
        $(art[i * 2]).after(publi[i]);
      }
      publi.show();
    }

    function putTabletMode(publi) {
      var art = $("article");
      var pu = publi.length,
        i = 0;

      for (i; i < pu; i++) {
        publi[i].style.margin = "10px 0";
        publi[i].style.float = "left";
        publi[i].style.width = "50%";
      }

      if (publi.length > 8) $(art[17]).after($(publi[8])).after($(publi[9]));
      if (publi.length > 6) $(art[15]).after($(publi[6])).after($(publi[7]));
      if (publi.length > 4) {
        $(art[11]).after($(publi[4])).after($(publi[5]));
      }

      $(art[1]).after($(publi[0])).after($(publi[1]));
      $(art[5]).after($(publi[2])).after($(publi[3]));

      publi.forEach(function (el) {
        $(el).show();
      });
    }
  });

  /*
   * Creacion de los lightbox
   */
  $(document).ready(function (e) {
    var imgs = $("img");
    for (var b = 0; b < imgs.length; b++) {
      imgs[b].title = imgs[b].title || imgs[b].alt;
    }
    var imgGalery = $(
      `
      .entry a[href$=".jpg"]>img,
      .entry a[href$=".jpg"]>img[data-src],
      .entry a[href$=".avif"]>img,
      .entry a[href$=".avif"]>img[data-src],
      .entry a[href$=".webp"]>img,
      .entry a[href$=".webp"]>img[data-src],
      .gallery-icon a>img`,
    );
    var i = 0,
      len = imgGalery.length;
    if (len) {
      var link = document.createElement("link");
      link.href =
        "https://www.digitalavmagazine.com/wp-content/themes/underwood/core/lightbox/css/lightbox.min.css";
      link.type = "text/css";
      link.rel = "stylesheet";
      link.media = "screen";

      for (i; i < len; i++) {
        imgGalery[i].parentElement.dataset.lightbox = "gallery";
        imgGalery[i].parentElement.dataset.title = imgGalery[i].title;
      }

      document.getElementsByTagName("head")[0].appendChild(link);

      $.getScript(
        "https://www.digitalavmagazine.com/wp-content/themes/underwood/core/lightbox/js/lightbox.min.js",
        function () {
          lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
          });
        },
      );
    }
  });
  /*
   * Creacion de sociable
   */

  $(document).ready(function (e) {
    var position = $("div.nota");
    if (position.length) {
      var articulo = $(".full-article"),
        title = articulo.find("header").text().trim().replace(/ /g, "%20"),
        sumary = articulo.find("header+h3").text().trim().replace(/ /g, "%20"),
        html = `<div class="sociable"><ul class="clearfix"><div class="sociable_tagline">Be Sociable, Share!</div>`,
        url = document.location.href,
        twiter =
          `<li><a title="X" style="background:url('/wp-content/themes/underwood/assets/images/x.jpg') no-repeat;height: 48px;width: 48px;" rel="nofollow" target="_blank" href="https://twitter.com/intent/tweet?text=` +
          `${title}&via=DigitalAVMag&url=${url}&related=DigitalAVMag"></a></li>`,
        linkedin =
          `<li><a title="LinkedIn" style="background:url('/wp-content/themes/underwood/assets/images/linkedin.jpg') no-repeat;height: 48px;width: 48px;" rel="nofollow" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=` +
          `${url}&title=${title}` +
          `&source=Digital+AV+Magazine+Tecnologia+y+tendencias+en+broadcast%2C+cine+y+new+media&summary=${sumary}"></a></li>`,
        face =
          `<li><a title="Facebook" style="background:url('/wp-content/themes/underwood/assets/images/facebook.jpg') no-repeat;height: 48px;width: 48px;" rel="nofollow" target="_blank" href="https://www.facebook.com/share.php?u=` +
          `${url}&t=${title}"></a></li>`,
        mail =
          `<li><a title="email" style="background:url('/wp-content/themes/underwood/assets/images/mail.jpg') no-repeat;height: 48px;width: 48px;" rel="nofollow" target="_blank" href="mailto:?subject=RE: ${title}` +
          ` &amp;body=${url}&amp;ui=2&amp;tf=1&amp;shva=1"></a></li>`;

      position.prepend(html + twiter + face + linkedin + mail + "</ul></div>");
    }
  });

  /**
   * Soporte menu mobile
   */
  var mnuButton = $(".navbar-toggle");
  var mnu = $("#under-menu");
  var mnuCont = mnu.parent().parent();
  mnuButton.on("click", mnuButtonClick.bind(this));

  function mnuButtonClick(params) {
    if (!mnu) {
      mnu = $("#under-menu");
    }
    mnuButton.toggleClass("collapsed");
    mnu.toggle();
    mnuCont.toggleClass("no-mobile");
  }

  /**
   *  Ponemos la fecha de hoy
   */
  $(document).ready(function (e) {
    var el = $(".date-widget code");
    if (el.length) {
      el[0].innerText = new Date(Date.now()).toLocaleDateString();
    }

    function processTranslations(params, base, url) {
      var path = url.length > 1 && url[3] === "/" ? url.substr(3) : url;
      const langMap = { es: "", us: "/en", sa: "/ar", cn: "/zh", jp: "/ja" };
      params.each(function () {
        var a = $(this)[0];
        var lang = a.children[0].classList[1].substr(4);
        a.href =
          base +
          (langMap.hasOwnProperty(lang) ? langMap[lang] : "/" + lang) +
          path;
      });
    }
    processTranslations(
      $(".transposh_flags a"),
      location.origin,
      location.pathname,
    );
  });
})(jQuery);
