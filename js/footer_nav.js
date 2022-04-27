
let  ul = document.querySelector('ul');

let  li = document.querySelectorAll('li');

li.forEach( lis => {
    
lis = addEventListener('click', function(){

ul.querySelector('.active').classList.remove('active');

lis.classList.add('active');


});

});