"use strict";

var ul = document.querySelector('ul');
var li = document.querySelectorAll('li');
li.forEach(function (lis) {
  lis = addEventListener('click', function () {
    ul.querySelector('.active').classList.remove('active');
    lis.classList.add('active');
  });
});