// Cambiar tamaño del header al hacer Scroll.
$(window).on("scroll", function() {
  if($(window).scrollTop() > 150) {
    $("#header").addClass("sticky");
    $("header").addClass("shadow-sm");
  } else {
    $("#header").removeClass("sticky");
    $("header").removeClass("shadow-sm");
  }
});