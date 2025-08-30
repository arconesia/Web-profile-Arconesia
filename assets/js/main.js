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

// Number counter animation for sections
(function(){
  // Function to animate counters within a specific section
  function animateCountersInSection(section, animatedKey) {
    if (section.getAttribute(animatedKey)) return; // Already animated
    
    var counters = section.querySelectorAll('[data-counter]');
    
    counters.forEach(function(counter) {
      var target = parseInt(counter.getAttribute('data-counter'));
      var suffix = counter.getAttribute('data-suffix') || '';
      var prefix = counter.getAttribute('data-prefix') || '';
      var duration = 2000; // 2 seconds
      var start = 0;
      var increment = target / (duration / 16); // 60fps
      
      function updateCounter() {
        start += increment;
        if (start < target) {
          counter.textContent = prefix + Math.floor(start) + suffix;
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = prefix + target + suffix;
        }
      }
      
      updateCounter();
    });
    
    section.setAttribute(animatedKey, 'true'); // Mark as animated
  }
  
  // Find section by heading text
  function findSectionByHeading(headingText) {
    var sections = document.querySelectorAll('section');
    for (var i = 0; i < sections.length; i++) {
      var heading = sections[i].querySelector('h2');
      if (heading && heading.textContent.includes(headingText)) {
        return sections[i];
      }
    }
    return null;
  }
  
  // Intersection Observer for multiple sections
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var section = entry.target;
        var heading = section.querySelector('h2');
        
        if (heading && heading.textContent.includes('Impact')) {
          animateCountersInSection(section, 'data-impact-animated');
        } else if (heading && heading.textContent.includes('Since 2021')) {
          animateCountersInSection(section, 'data-since-animated');
        }
        
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  
  // Wait for DOM to be ready
  document.addEventListener('DOMContentLoaded', function() {
    var impactSection = findSectionByHeading('Impact');
    var sinceSection = findSectionByHeading('Since 2021');
    
    if (impactSection) {
      observer.observe(impactSection);
    }
    
    if (sinceSection) {
      observer.observe(sinceSection);
    }
  });
})();


