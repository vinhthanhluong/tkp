$(document).ready(function () {
  mvLoad();
});

function mvLoad() {
  const baseUrl = $("#mainVideo").data("baseurl");
  const videoElement = $("#mainVideo")[0];
  const $mainSection = $(".sec-mv");
  const $headSection = $("#header");

  const videoList = [
    baseUrl + "mv_morning.mp4",
    baseUrl + "mv_afternoon.mp4",
    baseUrl + "mv_evening.mp4",
  ];

  const classList = ["is-morning", "is-afternoon", "is-evening"];

  const classList02 = ["", "", "is-white"];

  let currentIndex = getCurrentIndexByHour();
  // let currentIndex = 0;

  function getCurrentIndexByHour() {
    const hour = new Date().getHours();
    if (hour >= 5 && hour <= 14) return 0; // Sáng
    if (hour >= 15 && hour <= 18) return 1; // Chiều
    return 2; // Tối
  }

  function changeVideo(index) {
    $mainSection.removeClass(classList.join(" "));
    $mainSection.addClass(classList[index]);
    $headSection.removeClass(classList02.join(" "));
    $headSection.addClass(classList02[index]);

    $("#mainVideo").fadeOut(150, function () {
      videoElement.pause();
      videoElement.src = videoList[index];
      videoElement.load();
      videoElement.play();
      $("#mainVideo").fadeIn(150);
    });
  }

  changeVideo(currentIndex);

  // setInterval(function () {
  //   currentIndex = (currentIndex + 1) % videoList.length;
  //   changeVideo(currentIndex);
  // }, 60000);
}
