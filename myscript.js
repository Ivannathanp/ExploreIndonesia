(function() {
  setTimeout(function() {
    $('.first-text').removeClass('hidden');
    $('.second-text').removeClass('hidden');
    }, 500);
  })
();

window.addEventListener('scroll', this.handleScroll, true);
handleScroll = (e) => {
  if (e.target.classList.contains("on-scrollbar") === false) {
    e.target.classList.add("on-scrollbar");
  }
}
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
    $(window).scroll(function(e) {
        var s = $(window).scrollTop(),
            opacityVal = (s / 200);
        $(".welcomeblurimg").css('opacity', opacityVal);
    });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".indoblurimg").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".exploreblurimg").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg1").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg2").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg3").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg4").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg5").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg5").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg6").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".blurimg7").css('opacity', opacityVal);
  });
});
$(document).ready(function() {
  $(window).scroll(function(e) {
      var s = $(window).scrollTop(),
          opacityVal = (s / 200);
      $(".covidblurimg").css('opacity', opacityVal);
  });
});

$('.toggle').click(function(e) {
  e.preventDefault();

  var $this = $(this);

  if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .inner').removeClass('show');
      $this.parent().parent().find('li .inner').slideUp(350);
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const themeStylesheet = document.getElementById('theme');
const storedTheme = localStorage.getItem('theme');
if(storedTheme){
    themeStylesheet.href = storedTheme;
}
const themeToggle = document.getElementById('theme-toggle');
themeToggle.addEventListener('click', () => {
    // if it's light -> go dark
    if(themeStylesheet.href.includes('light')){
      themeStylesheet.href = '/css/dark-theme.css';
    } 
    
    else {
      // if it's dark -> go light
      themeStylesheet.href = '/css/light-theme.css';         
    }
    // save the preference to localStorage
    localStorage.setItem('theme',themeStylesheet.href)  
 })
})

const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");

menuBtn.onclick = ()=>{
  menu.classList.add("active");
  menuBtn.classList.add("hide");
  cancelBtn.classList.add("show");
  body.classList.add("disabledScroll");
}

cancelBtn.onclick = ()=>{
  menu.classList.remove("active");
  menuBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  body.classList.remove("disabledScroll");
}
menu.onclick = ()=>{
  menu.classList.remove("active");
  menuBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  body.classList.remove("disabledScroll");
}
window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}

