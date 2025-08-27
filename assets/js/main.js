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

// Timeline Tabs
(function(){
  var timeline = document.querySelector('[data-timeline]');
  if(!timeline) return;

  var tabs = timeline.querySelectorAll('[data-tab]');
  var contents = timeline.querySelectorAll('[data-tab-content]');

  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      var tabId = this.getAttribute('data-tab');

      // Deactivate all tabs
      tabs.forEach(function(t) {
        t.classList.remove('is-active');
      });

      // Deactivate all contents
      contents.forEach(function(c) {
        c.classList.add('hidden');
        c.classList.remove('is-active');
      });

      // Activate clicked tab
      this.classList.add('is-active');

      // Activate corresponding content
      var content = timeline.querySelector('[data-tab-content="' + tabId + '"]');
      if (content) {
        content.classList.remove('hidden');
        content.classList.add('is-active');
      }
    });
  });
})();

// Calculator
(function(){
  var calculator = document.querySelector('[data-calculator]');
  if(!calculator) return;

  var amountInput = calculator.querySelector('[data-calc-input="amount"]');
  var termInput = calculator.querySelector('[data-calc-input="term"]');
  var profitOutput = calculator.querySelector('[data-calc-output="profit"]');

  function calculate() {
    var amount = parseFloat(amountInput.value) || 0;
    var term = parseFloat(termInput.value) || 0;
    // Simple profit calculation: Amount * (Term / 12) * 30% annual interest
    var profit = amount * (term / 12) * 0.3;
    
    profitOutput.textContent = 'IDR ' + new Intl.NumberFormat('id-ID').format(profit.toFixed(0));
  }

  amountInput.addEventListener('input', calculate);
  termInput.addEventListener('change', calculate);

  // Initial calculation
  calculate();
})();


