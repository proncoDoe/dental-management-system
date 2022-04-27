
// Initialize and add the map
function initMap() {
    // Your location
    const loc = { lat: 6.342450, lng: 5.633840 };
    // Centered map on location
    const map = new google.maps.Map(document.querySelector('.map'), {
      zoom: 14,
      center: loc
    });
    // The marker, positioned at location
    const marker = new google.maps.Marker({ position: loc, map: map });
  }
  

  $(document).ready(function(){

    let boxLoder = "<div class='load-screen'> <div class='loading'> </div></di>";
    $("body").prepend(boxLoder);

    $('.load-screen').delay(700).fadeOut(600, function(){

    $(this).remove();


    });


});
