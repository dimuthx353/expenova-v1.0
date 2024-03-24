$(document).ready(function () {
  $("#card").flip({
    axis: "x",
    trigger: "hover"
  });

  $("#card-two").flip({
    axis: "x",
    trigger: "hover"
  });
});

const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

const social_media_icons = document.getElementById("social_media_icons");
const social_media = document.getElementById("social_media");

$("#social_media").click(function (e) {
  social_media_icons.classList.toggle("d-flex");
  social_media.classList.toggle("bg-primary");
});
