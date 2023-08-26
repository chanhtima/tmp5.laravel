$(document).mouseup(function (e) {
    var container = new Array()
    container.push($(".co-menu-mobile-navigation"))
  
    $.each(container, function (key, value) {
      if (
        !$(value).is(e.target) && // if the target of the click isn't the container...
        $(value).has(e.target).length === 0
      ) {
        if ($('.co-menu-mobile-navigation').hasClass("dropdown-open")) {
          $('.co-menu-mobile-navigation').removeClass("dropdown-open")
        }
      }
    })
  })

  
  window.addEventListener('scroll', function() {
    if (window.scrollY > 180) {
      document.querySelector('.nav-bar-social-wrapper').classList.add('active');
      document.querySelector('.logo').classList.add('active');
    } else {
      document.querySelector('.nav-bar-social-wrapper').classList.remove('active');
      document.querySelector('.logo').classList.remove('active');
    }
  });

  const mobileMenu = document.querySelector('.menu-mobile-navigation-list');
  function adjustMenus() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const mobileTopValue = 75 - scrollTop;

    if (mobileTopValue > 0) {
        mobileMenu.style.top = mobileTopValue + 'px';
    } else {
        mobileMenu.style.top = '54px';
    }
}

window.addEventListener('scroll', adjustMenus);



