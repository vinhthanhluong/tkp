$(document).ready(function () {
  mvLoad();
});

function mvLoad() {
  $(window).on("load", function () {
    if ($(".sec-mv").length) {
      setTimeout(function () {
        var mv_ttl = $(".sec-mv");
        mv_ttl.addClass("is-loaded");
      }, 2000);
    }
  });
}
