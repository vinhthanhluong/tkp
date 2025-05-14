$(function () {
  $("#contactform").validationEngine({
    promptPosition: "topLeft",
    scrollOffset: $("header").outerHeight() + 5,
    maxErrorsPerField: 1,
    showArrow: false,
  });
});

function check() {
  if (document.contactform.check1 && !document.contactform.check1.checked) {
    window.alert("「個人情報の取扱いに同意する」にチェックを入れて下さい");
    return false;
  }
}

$(window).on("load", function() {
  $('#btnConfirm').prop("disabled",true);
  if($("#check1").is(':checked')){
    $('#btnConfirm').prop("disabled",false);
  }
})
$('#check1').click(function(){
  if($("#check1").is(':checked')){
    $('#btnConfirm').prop("disabled",false);}
  else {
    $('#btnConfirm').prop("disabled",true); }
});


$(function () {
  $(".contactform #btnConfirm").on("click",function (e) {
    e.preventDefault();
    if($('.capcha').length > 0){
      var response = grecaptcha.getResponse();
      if (response.length == 0) {
        alert("私はロボットではありません");
      } else {
        $(".contactform").submit();
      }
    } else{
      $(".contactform").submit();
    }
  });
});

handleScrollBack();
window.onpageshow = function (event) {
  if (event.persisted) handleScrollBack(true);
};

function handleScrollBack(isForceScroll = false) {
  var scrollPos =
    $("#contactform").offset().top - $("header").outerHeight() - 5;
  var isHistoryBack =
    (window.performance.navigation &&
      window.performance.navigation.type === 2) ||
    window.performance
      .getEntriesByType("navigation")
      .map(function (nav) {
        return nav.type;
      })
      .includes("back_forward");

  if (isHistoryBack || isForceScroll) {
    $("html, body").stop().animate({ scrollTop: scrollPos }, 300);
  }
}
