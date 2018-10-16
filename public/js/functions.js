// Cambiar tamaño del header al hacer Scroll.
$(window).on("scroll", function() {
  if($(window).scrollTop() > 150) {
    $("#header").addClass("sticky");
  } else {
    $("#header").removeClass("sticky");
  }
});