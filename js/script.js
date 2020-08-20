$(document).ready(function() {

  window.addEventListener("resize", function() {
    if (window.innerWidth < 768) {
      $('.navbar-brand').addClass("mx-auto");
  } else {
    $('.navbar-brand').removeClass('mx-auto');
  }
});
});
