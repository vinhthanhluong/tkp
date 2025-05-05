$(function () {
  $('[rel~="js-back"]').on("click", function () {
    history.back();
  });
  $("#confirmform").on("click", "#btnSend", function (e) {
    e.preventDefault();
    $(this)
      .html("<span>送信中...</span>")
      .prop("disabled", true)
      .addClass("disabled");
    $("#confirmform").submit();
  });
});
