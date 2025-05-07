$(function () {
  $("a")
    .filter('[href^="http"], [href^="//"]')
    .not('[href*="' + window.location.host + '"]')
    .attr("rel", "noopener nofollow")
    .not(".is-trusted")
    .attr("target", "_blank");
});

function handleClickToTop() {
  $('[rel~="js-to-top"]').on("click", function () {
    $("html, body").stop().animate({ scrollTop: 0 }, 800, "swing");
  });
}

function handleGoogleFontLoader() {
  (function (d) {
    WebFontConfig = {
      google: {
        display: "swap",
        families: [
          // DO NOT use ";" between font-weight number
          // Add "i" after font-weight number when you want to load ITALIC, ex: 500,500i (medium AND medium italic)
          // Always check <html> class to ensure the font-family and font-weight
          // https://github.com/theprojectsomething/webfontloader/tree/feature/google-fonts-v2#google
          "Noto Sans JP:400,700",
          // "Noto Serif JP:400,700",
          "Gantari:500,600",
        ],
      },
      active: function () {
        sessionStorage.fontsLoaded = true;
      },
    };

    var wf = d.createElement("script"),
      s = d.scripts[0];
    wf.src = JS_APP_ASSETS + "js/lib/webfont.min.js";
    wf.async = true;
    wf.defer = true;
    s.parentNode.insertBefore(wf, s);
  })(document);
}

function handleAntiSpamMailContact() {
  if ($("#mailContact").length) {
    var address = "xxx" + "@" + "xxxxxxx.com";
    $("#mailContact")
      .attr("href", "mailto:" + address)
      .text(address);
  }
}

function appIsMobile() {
  return window.matchMedia("(max-width: 767px)").matches;
}

function initAos() {
  if ($(".aos-init").length) {
    setTimeout(function () {
      AOS.init({
        once: true,
        duration: 1000,
        // delay: 200,
        // offset: 0,
      });
    }, 500);
  }
}