"use strict";

$(function () {
  $('.delete').on('click', function (e) {
    e.preventDefault();
    var href = $(this).attr('href');
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete!'
    }).then(function (result) {
      if (result.value) {
        document.location.href = href;
        Swal.fire('Deleted!', 'Your booking has been Cancel.', 'success');
      }
    });
  });
});
$(function () {
  $('.edit').on('click', function (e) {
    e.preventDefault();
    var href = $(this).attr('href');
    Swal.fire({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success",
      button: "Aww yiss!",
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, edit!'
    }).then(function (result) {
      if (result.value) {
        document.location.href = href;
        Swal.fire('Processing!', 'booking Appointment.', 'success');
      }
    });
  });
});

function Show() {
  var flashdata = $('#flash-data').data(flashdata);

  if (flashData) {
    swal.fire({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success",
      button: "Aww yiss!"
    });
  }
}