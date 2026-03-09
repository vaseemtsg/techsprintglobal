// Main Slider Js
jQuery(document).ready(function(){
  var owl = jQuery('.owl-carousel');
    owl.owlCarousel({
    margin: 30,
    nav: true,
    navText: ["<span class='dashicons dashicons-arrow-left-alt2'></span>", "<span class='dashicons dashicons-arrow-right-alt2'></span>"],
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    items: 1
  });
});

// Progress Bar
document.addEventListener("DOMContentLoaded", function () {
  const startup_consultant_barBoxes = document.querySelectorAll(".bar-box");

  startup_consultant_barBoxes.forEach((startup_consultant_box) => {
    const startup_consultant_percentText = startup_consultant_box.querySelector(".percent")?.innerText || "0%";
    const startup_consultant_bar = startup_consultant_box.querySelector(".bar");

    const startup_consultant_value = parseInt(startup_consultant_percentText, 10);
    startup_consultant_bar.style.width = startup_consultant_value + "%";
  });
});