$(".btn").click(function () {
  $(this).toggleClass("clicked");
});

$("#hide").click(function () {
  $(this).css("color", "white");
});

$("p").click(function () {
  $("body").css("background-color", "#7ccee7");
});
