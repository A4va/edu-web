// To Up
let toUp = document.querySelector('.up');

window.addEventListener('scroll',() =>{
  document.querySelector('.up').classList.toggle
  ('show', window.scrollY > 0)
})

toUp.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

// Stay
let navbarStay = document.querySelector('.navbar');
let CoursesStay = document.querySelector('.showCourses')
let pagesStay = document.querySelector('.showPages')

document.querySelector('#menu-btn').onclick = () =>{
    navbarStay.classList.toggle('active');
}

document.querySelector('#clickCourses').onclick = () =>{
    CoursesStay.classList.toggle('active');
    pagesStay.classList.remove('active');
}

document.querySelector('#clickPages').onclick = () =>{
    pagesStay.classList.toggle('active');
    CoursesStay.classList.remove('active');
}

// window.onscroll = () =>{
//    CoursesStay.classList.remove('active');
//    pagesStay.classList.remove('active');
//    navbarStay.classList.remove('active');
// } 

// Close if click any where
var specifiedElement = document.getElementById('headerId');

document.addEventListener('click', function(event) {
  var isClickInside = specifiedElement.contains(event.target);

  if (!isClickInside) {
    //the click was outside the specifiedElement, do something
    CoursesStay.classList.remove('active');
    pagesStay.classList.remove('active');
    navbarStay.classList.remove('active');
  }
});

// Tabs
let tabs = document.querySelectorAll(".tabs > li");
let tabsArray = Array.from(tabs);
let pages = document.querySelectorAll(".pages > div");
let pagesArray = Array.from(pages);

// console.log(tabsArray)
tabsArray.forEach((ele) => {
  ele.addEventListener("click", function (e) {
    // console.log(ele)
    tabsArray.forEach((ele) => {
      ele.classList.remove("is-active");
    });
    e.currentTarget.classList.add("is-active");
    pagesArray.forEach((Pg) => {
      Pg.style.display = "none";
    });
    console.log(e.currentTarget.dataset.cont);
    document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
  });
});
