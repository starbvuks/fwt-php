$("#hide").click(function () {
  $("#hidden").hide();
});

$("#show").click(function () {
  $("#hidden").show();
});

$("#toggle").click(function () {
  $("#toggled").toggle();
});

let testBtn = document.getElementById("test");
if (testBtn) {
  testBtn.addEventListener("click", function () {
    console.log("working");
  });
}
