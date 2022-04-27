"use strict";

$(document).ready(function () {
  var boxLoder = "<div id='load-screen'> <div id='loading'> </div></di>";
  $("body").prepend(boxLoder);
  $('#load-screen').delay(700).fadeOut(600, function () {
    $(this).remove();
  });
});