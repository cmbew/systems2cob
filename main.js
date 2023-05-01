const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeaders => {
    accordionItemHeaders.addEventListener("click", event => {
        accordionItemHeaders.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if(accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        }
        else {
            accordion.ItemBody.style.maxHeight = 0;
        }
    });
});





let urlParams = new URLSearchParams(window.location.search);
let major = urlParams.get('major');
document.getElementById('major').value = major;




window.addEventListener('load', function(){
document.getElementById('form1').addEventListener('submit', function(event) {
  event.preventDefault();
  var form1 = document.getElementById('form1');
  localStorage.setItem('form1', JSON.stringify({
    fName: form1.elements['fName'].value,
    lName: form1.elements['lName'].value,
    prefName: form1.elements['prefName'].value,
    eMail: form1.elements['eMail'].value,
    mailing: form1.elements['mailing'].value,
    hSchool: form1.elements['hSchool'].value,
    GPA: form1.elements['GPA'].value,
    gYear: form1.elements['gYear'].value,
    cStanding: form1.elements['cStanding'].value,
    major: form1.elements['major'].value
  }));
  window.location.href = 'https://www.go2atu.org/applynow/index.cfm?isndsl';
});
});




window.addEventListener('load', function() {
  var form2 = document.getElementById('form2');
  var form1 = JSON.parse(localStorage.getItem('form1'));
  if (form1) {
    form2.elements['fName'].value = form1.fName;
    form2.elements['lName'].value = form1.lName;
    form2.elements['prefName'].value = form1.prefName;
    form2.elements['eMail'].value = form1.eMail;
    form2.elements['mailing'].value = form1.mailing;
    form2.elements['hSchool'].value = form1.hSchool;
    form2.elements['GPA'].value = form1.GPA;
    form2.elements['gYear'].value = form1.gYear;
    form2.elements['cStanding'].value = form1.cStanding;
    form2.elements['major'].value = form1.major;
  }
});




let slideIndex = 0;
const slides = document.querySelectorAll('#slideshow img');
const prevButton = document.querySelector('#prev');
const nextButton = document.querySelector('#next');

function showPrevSlide() {
  slides[slideIndex].style.display = 'none';
  slideIndex = (slideIndex - 1 + slides.length) % slides.length;
  slides[slideIndex].style.display = 'block';
}

function showNextSlide() {
  slides[slideIndex].style.display = 'none';
  slideIndex = (slideIndex + 1) % slides.length;
  slides[slideIndex].style.display = 'block';
}

prevButton.addEventListener('click', showPrevSlide);
nextButton.addEventListener('click', showNextSlide);