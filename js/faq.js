
const items = document.querySelectorAll(".inner-accordion a");
function toggleAccordion(){

    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');

}


items.forEach(item => item.addEventListener('click', toggleAccordion));

