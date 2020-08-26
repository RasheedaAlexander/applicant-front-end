$(document).ready(function() {

  window.addEventListener("resize", function() {
    if (window.innerWidth < 768) {
      $('.custom-logo-link').addClass("mx-auto");
  } else {
    $('.custom-logo-link').removeClass('mx-auto');
  }
});
});
