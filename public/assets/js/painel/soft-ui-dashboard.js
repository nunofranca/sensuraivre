/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!********************************************************!*\
  !*** ./resources/views/assets/js/soft-ui-dashboard.js ***!
  \********************************************************/


(function () {
  var isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

  if (isWindows) {
    // if we are on windows OS we activate the perfectScrollbar function
    if (document.getElementsByClassName('main-content')[0]) {
      var mainpanel = document.querySelector('.main-content');
      var ps = new PerfectScrollbar(mainpanel);
    }

    ;

    if (document.getElementsByClassName('sidenav')[0]) {
      var sidebar = document.querySelector('.sidenav');
      var ps1 = new PerfectScrollbar(sidebar);
    }

    ;

    if (document.getElementsByClassName('navbar-collapse')[0]) {
      var fixedplugin = document.querySelector('.navbar-collapse');
      var ps2 = new PerfectScrollbar(fixedplugin);
    }

    ;

    if (document.getElementsByClassName('fixed-plugin')[0]) {
      var fixedplugin = document.querySelector('.fixed-plugin');
      var ps3 = new PerfectScrollbar(fixedplugin);
    }

    ;
  }

  ;
})(); // Verify navbar blur on scroll


navbarBlurOnScroll('navbarBlur'); // initialization of Tooltips

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
}); // Fixed Plugin

if (document.querySelector('.fixed-plugin')) {
  var fixedPlugin = document.querySelector('.fixed-plugin');
  var fixedPluginButton = document.querySelector('.fixed-plugin-button');
  var fixedPluginButtonNav = document.querySelector('.fixed-plugin-button-nav');
  var fixedPluginCard = document.querySelector('.fixed-plugin .card');
  var fixedPluginCloseButton = document.querySelectorAll('.fixed-plugin-close-button');
  var navbar = document.getElementById('navbarBlur');
  var buttonNavbarFixed = document.getElementById('navbarFixed');

  if (fixedPluginButton) {
    fixedPluginButton.onclick = function () {
      if (!fixedPlugin.classList.contains('show')) {
        fixedPlugin.classList.add('show');
      } else {
        fixedPlugin.classList.remove('show');
      }
    };
  }

  if (fixedPluginButtonNav) {
    fixedPluginButtonNav.onclick = function () {
      if (!fixedPlugin.classList.contains('show')) {
        fixedPlugin.classList.add('show');
      } else {
        fixedPlugin.classList.remove('show');
      }
    };
  }

  fixedPluginCloseButton.forEach(function (el) {
    el.onclick = function () {
      fixedPlugin.classList.remove('show');
    };
  });

  document.querySelector('body').onclick = function (e) {
    if (e.target != fixedPluginButton && e.target != fixedPluginButtonNav && e.target.closest('.fixed-plugin .card') != fixedPluginCard) {
      fixedPlugin.classList.remove('show');
    }
  };

  if (navbar) {
    if (navbar.getAttribute('navbar-scroll') == 'true') {
      buttonNavbarFixed.setAttribute("checked", "true");
    }
  }
} // Tabs navigation


var total = document.querySelectorAll('.nav-pills');
total.forEach(function (item, i) {
  var moving_div = document.createElement('div');
  var first_li = item.querySelector('li:first-child .nav-link');
  var tab = first_li.cloneNode();
  tab.innerHTML = "-";
  moving_div.classList.add('moving-tab', 'position-absolute', 'nav-link');
  moving_div.appendChild(tab);
  item.appendChild(moving_div);
  var list_length = item.getElementsByTagName("li").length;
  moving_div.style.padding = '0px';
  moving_div.style.width = item.querySelector('li:nth-child(1)').offsetWidth + 'px';
  moving_div.style.transform = 'translate3d(0px, 0px, 0px)';
  moving_div.style.transition = '.5s ease';

  item.onmouseover = function (event) {
    var target = getEventTarget(event);
    var li = target.closest('li'); // get reference

    if (li) {
      var nodes = Array.from(li.closest('ul').children); // get array

      var index = nodes.indexOf(li) + 1;

      item.querySelector('li:nth-child(' + index + ') .nav-link').onclick = function () {
        moving_div = item.querySelector('.moving-tab');
        var sum = 0;

        if (item.classList.contains('flex-column')) {
          for (var j = 1; j <= nodes.indexOf(li); j++) {
            sum += item.querySelector('li:nth-child(' + j + ')').offsetHeight;
          }

          moving_div.style.transform = 'translate3d(0px,' + sum + 'px, 0px)';
          moving_div.style.height = item.querySelector('li:nth-child(' + j + ')').offsetHeight;
        } else {
          for (var j = 1; j <= nodes.indexOf(li); j++) {
            sum += item.querySelector('li:nth-child(' + j + ')').offsetWidth;
          }

          moving_div.style.transform = 'translate3d(' + sum + 'px, 0px, 0px)';
          moving_div.style.width = item.querySelector('li:nth-child(' + index + ')').offsetWidth + 'px';
        }
      };
    }
  };
}); // Tabs navigation resize

window.addEventListener('resize', function (event) {
  total.forEach(function (item, i) {
    item.querySelector('.moving-tab').remove();
    var moving_div = document.createElement('div');
    var tab = item.querySelector(".nav-link.active").cloneNode();
    tab.innerHTML = "-";
    moving_div.classList.add('moving-tab', 'position-absolute', 'nav-link');
    moving_div.appendChild(tab);
    item.appendChild(moving_div);
    moving_div.style.padding = '0px';
    moving_div.style.transition = '.5s ease';
    var li = item.querySelector(".nav-link.active").parentElement;

    if (li) {
      var nodes = Array.from(li.closest('ul').children); // get array

      var index = nodes.indexOf(li) + 1;
      var sum = 0;

      if (item.classList.contains('flex-column')) {
        for (var j = 1; j <= nodes.indexOf(li); j++) {
          sum += item.querySelector('li:nth-child(' + j + ')').offsetHeight;
        }

        moving_div.style.transform = 'translate3d(0px,' + sum + 'px, 0px)';
        moving_div.style.width = item.querySelector('li:nth-child(' + index + ')').offsetWidth + 'px';
        moving_div.style.height = item.querySelector('li:nth-child(' + j + ')').offsetHeight;
      } else {
        for (var j = 1; j <= nodes.indexOf(li); j++) {
          sum += item.querySelector('li:nth-child(' + j + ')').offsetWidth;
        }

        moving_div.style.transform = 'translate3d(' + sum + 'px, 0px, 0px)';
        moving_div.style.width = item.querySelector('li:nth-child(' + index + ')').offsetWidth + 'px';
      }
    }
  });

  if (window.innerWidth < 991) {
    total.forEach(function (item, i) {
      if (!item.classList.contains('flex-column')) {
        item.classList.add('flex-column', 'on-resize');
      }
    });
  } else {
    total.forEach(function (item, i) {
      if (item.classList.contains('on-resize')) {
        item.classList.remove('flex-column', 'on-resize');
      }
    });
  }
});

function getEventTarget(e) {
  e = e || window.event;
  return e.target || e.srcElement;
} // End tabs navigation
//Set Sidebar Color


function sidebarColor(a) {
  var _sidenavCard$classLis, _sidenavCardIcon$clas;

  var parent = a.parentElement.children;
  var color = a.getAttribute("data-color");

  for (var i = 0; i < parent.length; i++) {
    parent[i].classList.remove('active');
  }

  if (!a.classList.contains('active')) {
    a.classList.add('active');
  } else {
    a.classList.remove('active');
  }

  var sidebar = document.querySelector('.sidenav');
  sidebar.setAttribute("data-color", color);
  var sidenavCard = document.querySelector('#sidenavCard');
  var sidenavCardClasses = ['card', 'card-background', 'shadow-none', 'card-background-mask-' + color];
  sidenavCard.className = '';

  (_sidenavCard$classLis = sidenavCard.classList).add.apply(_sidenavCard$classLis, sidenavCardClasses);

  var sidenavCardIcon = document.querySelector('#sidenavCardIcon');
  var sidenavCardIconClasses = ['ni', 'ni-diamond', 'text-gradient', 'text-lg', 'top-0', 'text-' + color];
  sidenavCardIcon.className = '';

  (_sidenavCardIcon$clas = sidenavCardIcon.classList).add.apply(_sidenavCardIcon$clas, sidenavCardIconClasses);
} // Set Navbar Fixed


function navbarFixed(el) {
  var classes = ['position-sticky', 'blur', 'shadow-blur', 'mt-4', 'left-auto', 'top-1', 'z-index-sticky'];
  var navbar = document.getElementById('navbarBlur');

  if (!el.getAttribute("checked")) {
    var _navbar$classList;

    (_navbar$classList = navbar.classList).add.apply(_navbar$classList, classes);

    navbar.setAttribute('navbar-scroll', 'true');
    navbarBlurOnScroll('navbarBlur');
    el.setAttribute("checked", "true");
  } else {
    var _navbar$classList2;

    (_navbar$classList2 = navbar.classList).remove.apply(_navbar$classList2, classes);

    navbar.setAttribute('navbar-scroll', 'false');
    navbarBlurOnScroll('navbarBlur');
    el.removeAttribute("checked");
  }
}

; // Navbar blur on scroll

function navbarBlurOnScroll(id) {
  var navbar = document.getElementById(id);
  var navbarScrollActive = navbar ? navbar.getAttribute("navbar-scroll") : false;
  var scrollDistance = 5;
  var classes = ['position-sticky', 'blur', 'shadow-blur', 'mt-4', 'left-auto', 'top-1', 'z-index-sticky'];
  var toggleClasses = ['shadow-none'];

  if (navbarScrollActive == 'true') {
    window.onscroll = debounce(function () {
      if (window.scrollY > scrollDistance) {
        blurNavbar();
      } else {
        transparentNavbar();
      }
    }, 10);
  } else {
    window.onscroll = debounce(function () {
      transparentNavbar();
    }, 10);
  }

  function blurNavbar() {
    var _navbar$classList3, _navbar$classList4;

    (_navbar$classList3 = navbar.classList).add.apply(_navbar$classList3, classes);

    (_navbar$classList4 = navbar.classList).remove.apply(_navbar$classList4, toggleClasses);

    toggleNavLinksColor('blur');
  }

  function transparentNavbar() {
    var _navbar$classList5, _navbar$classList6;

    (_navbar$classList5 = navbar.classList).remove.apply(_navbar$classList5, classes);

    (_navbar$classList6 = navbar.classList).add.apply(_navbar$classList6, toggleClasses);

    toggleNavLinksColor('transparent');
  }

  function toggleNavLinksColor(type) {
    var navLinks = document.querySelectorAll('.navbar-main .nav-link');
    var navLinksToggler = document.querySelectorAll('.navbar-main .sidenav-toggler-line');

    if (type === "blur") {
      navLinks.forEach(function (element) {
        element.classList.remove('text-body');
      });
      navLinksToggler.forEach(function (element) {
        element.classList.add('bg-dark');
      });
    } else if (type === "transparent") {
      navLinks.forEach(function (element) {
        element.classList.add('text-body');
      });
      navLinksToggler.forEach(function (element) {
        element.classList.remove('bg-dark');
      });
    }
  }
} // Debounce Function
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.


function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
        args = arguments;

    var later = function later() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };

    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

; //Set Sidebar Type

function sidebarType(a) {
  var parent = a.parentElement.children;
  var color = a.getAttribute("data-class");

  for (var i = 0; i < parent.length; i++) {
    parent[i].classList.remove('active');
  }

  if (!a.classList.contains('active')) {
    a.classList.add('active');
  } else {
    a.classList.remove('active');
  }

  var sidebar = document.querySelector('.sidenav');
  sidebar.classList.remove('bg-transparent');
  sidebar.classList.remove('bg-white');
  sidebar.classList.add(color);
} // Toggle Sidenav


var iconNavbarSidenav = document.getElementById('iconNavbarSidenav');
var iconSidenav = document.getElementById('iconSidenav');
var sidenav = document.getElementById('sidenav-main');
var body = document.getElementsByTagName('body')[0];
var className = 'g-sidenav-pinned';

if (iconNavbarSidenav) {
  iconNavbarSidenav.addEventListener("click", toggleSidenav);
}

if (iconSidenav) {
  iconSidenav.addEventListener("click", toggleSidenav);
}

function toggleSidenav() {
  if (body.classList.contains(className)) {
    body.classList.remove(className);
    setTimeout(function () {
      sidenav.classList.remove('bg-white');
    }, 100);
    sidenav.classList.remove('bg-transparent');
  } else {
    body.classList.add(className);
    sidenav.classList.add('bg-white');
    sidenav.classList.remove('bg-transparent');
    iconSidenav.classList.remove('d-none');
  }
} // Resize navbar color depends on configurator active type of sidenav


var referenceButtons = document.querySelector('[data-class]');
window.addEventListener("resize", navbarColorOnResize);

function navbarColorOnResize() {
  if (window.innerWidth > 1200) {
    if (referenceButtons.classList.contains('active') && referenceButtons.getAttribute('data-class') === 'bg-transparent') {
      sidenav.classList.remove('bg-white');
    } else {
      sidenav.classList.add('bg-white');
    }
  } else {
    sidenav.classList.add('bg-white');
    sidenav.classList.remove('bg-transparent');
  }
} // Deactivate sidenav type buttons on resize and small screens


window.addEventListener("resize", sidenavTypeOnResize);
window.addEventListener("load", sidenavTypeOnResize);

function sidenavTypeOnResize() {
  var elements = document.querySelectorAll('[onclick="sidebarType(this)"]');

  if (window.innerWidth < 1200) {
    elements.forEach(function (el) {
      el.classList.add('disabled');
    });
  } else {
    elements.forEach(function (el) {
      el.classList.remove('disabled');
    });
  }
}
/******/ })()
;