// Nav toggle
(function(){
  var toggle = document.querySelector('[data-nav-toggle]');
  var navs = document.querySelectorAll('[data-nav]');
  if(toggle && navs.length){
    toggle.addEventListener('click', function(){
      navs.forEach(function(nav){ nav.classList.toggle('hidden'); });
    });
  }
})();

// Simple slider
(function(){
  var slider = document.querySelector('[data-slider]');
  if(!slider) return;
  var slides = Array.from(slider.children).filter(function(el){ return el.tagName !== 'BUTTON' && el.getAttribute('data-dots')===null; });
  var nextBtn = slider.querySelector('[data-next]');
  var prevBtn = slider.querySelector('[data-prev]');
  var dotsWrap = slider.querySelector('[data-dots]');
  var index = 0;

  function go(i){
    slides[index].classList.remove('is-active');
    slides[index].classList.add('opacity-0');
    index = (i + slides.length) % slides.length;
    slides[index].classList.add('is-active');
    slides[index].classList.remove('opacity-0');
    if(dotsWrap){
      var dots = dotsWrap.querySelectorAll('button');
      dots.forEach(function(d){ d.classList.remove('is-active'); });
      dots[index].classList.add('is-active');
    }
  }

  // dots
  if(dotsWrap){
    slides.forEach(function(_, i){
      var b = document.createElement('button');
      if(i===0) b.classList.add('is-active');
      b.addEventListener('click', function(){ go(i); });
      dotsWrap.appendChild(b);
    });
  }

  nextBtn && nextBtn.addEventListener('click', function(){ go(index+1); });
  prevBtn && prevBtn.addEventListener('click', function(){ go(index-1); });

  // auto play
  setInterval(function(){ go(index+1); }, 6000);
})();

// Partners carousel animations
(function(){
  // Add CSS animations for partner carousels
  var style = document.createElement('style');
  style.textContent = `
    .animate-scroll-right-to-left {
      animation: scroll-right-to-left 20s linear infinite;
    }
    .animate-scroll-left-to-right {
      animation: scroll-left-to-right 20s linear infinite;
    }
    
    @keyframes scroll-right-to-left {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-50%);
      }
    }
    
    @keyframes scroll-left-to-right {
      0% {
        transform: translateX(-50%);
      }
      100% {
        transform: translateX(0);
      }
    }
    
    /* Pause animation on hover */
    .animate-scroll-right-to-left:hover,
    .animate-scroll-left-to-right:hover {
      animation-play-state: paused;
    }
  `;
  document.head.appendChild(style);
})();


