'use strict';

// Remove preload class once page is fully loaded

window.addEventListener('load', function() {
  Array.from(document.getElementsByTagName('body')).forEach(function(el) {
    el.classList.remove('preload');
  });
});

// Add class to navigation when scrolling down

document.addEventListener('scroll', function() {
  const header = document.querySelector('.header-main');
  if (window.scrollY >= 20) {
    header.classList.add('fade-in');
  } else {
    header.classList.remove('fade-in');
  }
});

// Add class when mobile navigation icon is clicked

Array.from(document.getElementsByClassName('nav-toggle')).forEach(function(el) {
  el.addEventListener('click', function() {
    Array.from(document.getElementsByTagName('body')).forEach(function(el) {
      el.classList.toggle('no-scroll');
    });
    Array.from(document.getElementsByClassName('header-main')).forEach(function(el) {
      el.classList.toggle('active');
    });
  });
});

// Close mobile menu when clicking nav links

document.querySelectorAll('.header-main ul.inline li a').forEach(function(link) {
  link.addEventListener('click', function() {
    Array.from(document.getElementsByTagName('body')).forEach(function(el) {
      el.classList.remove('no-scroll');
    });
    Array.from(document.getElementsByClassName('header-main')).forEach(function(el) {
      el.classList.remove('active');
    });
  });
});

// Prevent background from scrolling on mobile ONLY when navigation is open

document.addEventListener('touchmove', function(evt) {
  const body = document.querySelector('body');
  if (body.classList.contains('no-scroll')) {
    evt.preventDefault();
  }
}, { passive: false });

// Smooth scroll for "yukarı çıkın" button
document.querySelector('a[href="#baslangic"]').addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Game Banner
function showBanner() {
  // Hemen göster, localStorage kontrolünü kaldıralım (test için)
  document.getElementById('gameBanner').style.display = 'flex';
}

function closeBanner() {
  document.getElementById('gameBanner').style.display = 'none';
  localStorage.setItem('bannerLastShown', new Date().getTime());
}

// Show banner when page loads
document.addEventListener('DOMContentLoaded', function() {
  const lastShown = localStorage.getItem('bannerLastShown');
  const now = new Date().getTime();
  
  // 24 saat geçtiyse veya daha önce gösterilmediyse banner'ı göster
  if (!lastShown || (now - lastShown) > 24 * 60 * 60 * 1000) {
    document.getElementById('gameBanner').style.display = 'flex';
  }
});