// drop down menu logic
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
var input, filter, ul, li, a, i;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
div = document.getElementById("myDropdown");
a = div.getElementsByTagName("a");
for (i = 0; i < a.length; i++) {
  txtValue = a[i].textContent || a[i].innerText;
  if (txtValue.toUpperCase().indexOf(filter) > -1) {
    a[i].style.display = "";
  } else {
    a[i].style.display = "none";
  }
}
}


// Scrolling navbar animation logic
$(function(){
var lastScrollTop = 0;
var navHeight = $('.nav-bar').outerHeight();
var mobileNavHeight = $('.nav-bar-mobile').outerHeight();

$(window).scroll(function(){
  var scrolled = $(document).scrollTop();

  if(scrolled > navHeight || scrolled > mobileNavHeight){
    if (scrolled > lastScrollTop){        
      $('.nav-bar').removeClass('sticky').addClass('animate');
      $('.nav-bar-mobile').removeClass('sticky').addClass('animate');
    } else {        
      $('.nav-bar').removeClass('animate').addClass('sticky');
      $('.nav-bar-mobile').removeClass('animate').addClass('sticky');
    }
  }
  else{      
    $('.nav-bar').removeClass('animate sticky');
    $('.nav-bar-mobile').removeClass('animate sticky');
  }

  lastScrollTop = scrolled;
});
});


const search = document.getElementById('search');
const dropdownContent = document.getElementById('dropdownContent');

search.addEventListener('click', () =>{
    dropdownContent.style.display = dropdownContent.style.display == 'block' ? 'none' : 'block';
});