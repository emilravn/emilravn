$(document).ready(() => {
  $(".burger-nav").on("click", () => {
    $("nav ul").toggleClass("open");
  });
});

$("nav ul a").on("click", function () {
  $(".open").removeClass("open");
});
