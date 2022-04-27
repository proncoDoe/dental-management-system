$(document).ready(function () {
  let boxLoder = "<div class='load-screen'> <div class='loading'> </div></di>";
  $("body").prepend(boxLoder);

  $(".load-screen")
    .delay(700)
    .fadeOut(600, function () {
      $(this).remove();
    });
});
