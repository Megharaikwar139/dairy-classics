// assets/js/design1.js - Artisanal Strawberry & Cream Interactive Engine

let currentFlavor = window.DAIRY_PRODUCTS ? window.DAIRY_PRODUCTS['french-vanilla'] : {};

const flavorData = {
  'french-vanilla': {
    name: 'French Vanilla Royale',
    headline: 'Every Scoop.',
    desc: 'Single-origin Jersey farm cream, slow-churned in small batches with honest, all-natural ingredients.',
    price: '₹380',
    size: '500ml Pint',
    image: 'assets/images/products/french-vanilla-splash-tub.png',
    particles: [
      'assets/images/particles/particle-vanilla-orchid.png',
      'assets/images/particles/particle-cocoa-bean.png',
      'assets/images/particles/particle-vanilla-orchid.png'
    ],
    bg: 'radial-gradient(circle at 60% 40%, #FFFDF5 0%, #F5ECCB 100%)',
    halo: 'rgba(212, 175, 55, 0.35)',
    color: '#8E1C3D',
    tags: ['🍦 Bourbon Vanilla', '🥛 16% Butterfat', '🌿 Zero Gums']
  },
  'belgian-chocolate': {
    name: 'Belgian Chocolate Truffle',
    headline: 'Pure Decadence.',
    desc: 'Intense 72% dark Belgian cocoa ribbons folded into velvet chocolate gelato with crisp chocolate curls.',
    price: '₹420',
    size: '500ml Pint',
    image: 'assets/images/products/belgian-chocolate-splash-tub.png',
    particles: [
      'assets/images/particles/particle-cocoa-bean.png',
      'assets/images/particles/particle-chocolate-chunk.png',
      'assets/images/particles/particle-mint-leaf.png'
    ],
    bg: 'radial-gradient(circle at 60% 40%, #FAF0EB 0%, #E2CEBF 100%)',
    halo: 'rgba(160, 82, 45, 0.4)',
    color: '#54311C',
    tags: ['🍫 72% Cocoa', '☕ Roasted Espresso', '✨ Truffle Core']
  },
  'mint-pistachio': {
    name: 'Mint Pistachio Crunch',
    headline: 'Fresh Botanic.',
    desc: 'Fresh garden spearmint leaves steeped in pure Jersey milk with roasted Persian pistachios and dark chocolate shards.',
    price: '₹440',
    size: '500ml Pint',
    image: 'assets/images/products/mint-pistachio-splash-tub.png',
    particles: [
      'assets/images/particles/particle-pistachio.png',
      'assets/images/particles/particle-mint-leaf.png',
      'assets/images/particles/particle-pistachio.png'
    ],
    bg: 'radial-gradient(circle at 60% 40%, #F5FBF6 0%, #D2EBD7 100%)',
    halo: 'rgba(61, 115, 86, 0.35)',
    color: '#3D7356',
    tags: ['🌿 Garden Mint', '🌰 Roasted Pistachio', '🍫 Dark Choco']
  },
  'almond-crunch': {
    name: 'Almond Crunch Praline Bar',
    headline: 'Crackling Snap.',
    desc: 'Thick roasted California almond praline shell crackles open over dense, slow-churned pure milk ice cream.',
    price: '₹180',
    size: '90ml Bar',
    image: 'assets/images/products/almond-crunch-bar.png',
    particles: [
      'assets/images/particles/particle-almond.png',
      'assets/images/particles/particle-chocolate-chunk.png',
      'assets/images/particles/particle-almond.png'
    ],
    bg: 'radial-gradient(circle at 60% 40%, #FCF6EE 0%, #F1DEC9 100%)',
    halo: 'rgba(197, 125, 60, 0.4)',
    color: '#8C5627',
    tags: ['🌰 California Almonds', '🍫 Double Dipped', '🍦 Jersey Cream']
  },
  'celebration-cake': {
    name: 'Triple-Layer Gateau Cake',
    headline: 'Showstopper.',
    desc: 'Belgian chocolate, Madagascar vanilla, and Swiss mousse glazed in dark ganache drip, fresh strawberries, and gold leaf.',
    price: '₹1,250',
    size: '1.0 kg Gateau',
    image: 'assets/images/products/chocolate-celebration-cake.png',
    particles: [
      'assets/images/particles/particle-strawberry.png',
      'assets/images/particles/particle-chocolate-chunk.png',
      'assets/images/particles/particle-strawberry.png'
    ],
    bg: 'radial-gradient(circle at 60% 40%, #FFF5F7 0%, #FBD4DD 100%)',
    halo: 'rgba(219, 68, 85, 0.4)',
    color: '#B83248',
    tags: ['🎂 Handcrafted', '🍓 Fresh Berries', '✨ 24K Gold']
  }
};

document.addEventListener('DOMContentLoaded', () => {
  initHeroFlavorSelector();
  initHeroParallax();
  initPintsSlider();
});

// ==========================================================
// 1. HERO FLAVOR SELECTOR WITH SMOOTH AUTO-CHANGE & ORBITING PARTICLES
// ==========================================================
function initHeroFlavorSelector() {
  const tabs = document.querySelectorAll('.art-tab-btn');
  const stageImg = document.getElementById('art-stage-img');
  const dynamicBg = document.getElementById('art-hero-bg');
  const headline = document.getElementById('art-title-highlight');
  const desc = document.getElementById('art-sub-desc');
  const pillName = document.getElementById('art-pill-name');
  const pillPrice = document.getElementById('art-pill-price');
  const halo = document.getElementById('art-glow-halo');
  const tagsContainer = document.getElementById('art-tags-row');
  const heroSection = document.getElementById('hero');

  const p1 = document.getElementById('orbit-particle-1');
  const p2 = document.getElementById('orbit-particle-2');
  const p3 = document.getElementById('orbit-particle-3');

  if (!tabs.length || !stageImg) return;

  const flavorKeys = Array.from(tabs).map(t => t.dataset.flavor).filter(Boolean);
  let currentIndex = 0;
  let autoTimer = null;

  function switchFlavor(index, isUserClick = false) {
    currentIndex = index % flavorKeys.length;
    const flavorKey = flavorKeys[currentIndex];
    const data = flavorData[flavorKey];
    if (!data) return;

    if (window.DAIRY_PRODUCTS && window.DAIRY_PRODUCTS[flavorKey]) {
      currentFlavor = window.DAIRY_PRODUCTS[flavorKey];
    } else {
      currentFlavor = data;
    }

    // Set globally and sync flight proxy and 3D showcase
    window.ACTIVE_HERO_FLAVOR = flavorKey;
    const flightProxy = document.getElementById('flight-proxy-img');
    if (flightProxy && data.image) flightProxy.src = data.image;
    if (window.syncShowcaseToFlavor) window.syncShowcaseToFlavor(flavorKey);

    // Update active tab button
    tabs.forEach(t => t.classList.remove('active'));
    if (tabs[currentIndex]) tabs[currentIndex].classList.add('active');

    // Smooth tub swap animation
    stageImg.style.transform = 'scale(0.88) translateY(12px)';
    stageImg.style.opacity = '0';

    // Fade orbiting particles smoothly during flavor change
    [p1, p2, p3].forEach(p => {
      if (p) p.style.opacity = '0.2';
    });

    setTimeout(() => {
      stageImg.src = data.image;
      stageImg.alt = data.name;
      stageImg.style.transform = 'scale(1) translateY(0)';
      stageImg.style.opacity = '1';

      // Swap particle images to match active flavor
      if (data.particles) {
        if (p1 && data.particles[0]) p1.src = data.particles[0];
        if (p2 && data.particles[1]) p2.src = data.particles[1];
        if (p3 && data.particles[2]) p3.src = data.particles[2];
      }

      [p1, p2, p3].forEach(p => {
        if (p) p.style.opacity = '1';
      });
    }, 180);

    if (dynamicBg) dynamicBg.style.background = data.bg;
    if (halo) halo.style.background = `radial-gradient(circle, ${data.halo} 0%, rgba(255, 255, 255, 0) 70%)`;
    if (headline) headline.textContent = data.headline;
    if (desc) desc.textContent = data.desc;
    if (pillName) pillName.textContent = data.name;
    if (pillPrice) pillPrice.textContent = data.price;
    if (tagsContainer && data.tags) {
      tagsContainer.innerHTML = data.tags.map(t => `<span class="art-tag">${t}</span>`).join('');
    }
  }

  function startAutoCycle() {
    stopAutoCycle();
    autoTimer = setInterval(() => {
      switchFlavor(currentIndex + 1);
    }, 3500);
  }

  function stopAutoCycle() {
    if (autoTimer) {
      clearInterval(autoTimer);
      autoTimer = null;
    }
  }

  // Click on tabs
  tabs.forEach((tab, idx) => {
    tab.addEventListener('click', () => {
      switchFlavor(idx, true);
      startAutoCycle();
    });
  });

  // Pause auto-cycle on mouse hover
  if (heroSection) {
    heroSection.addEventListener('mouseenter', stopAutoCycle);
    heroSection.addEventListener('mouseleave', startAutoCycle);
    heroSection.addEventListener('touchstart', stopAutoCycle, { passive: true });
    heroSection.addEventListener('touchend', startAutoCycle);
  }

  // Kickoff auto-cycle immediately!
  startAutoCycle();
}

// ==========================================================
// 2. HERO PARALLAX
// ==========================================================
function initHeroParallax() {
  const stage = document.getElementById('art-hero-stage');
  const tub = document.getElementById('art-stage-img');
  const particles = document.querySelectorAll('.art-particle');

  if (!stage || !tub) return;

  stage.addEventListener('mousemove', (e) => {
    const rect = stage.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;

    const rotX = -(y / rect.height) * 10;
    const rotY = (x / rect.width) * 10;

    tub.style.transform = `perspective(1000px) rotateX(${rotX}deg) rotateY(${rotY}deg) scale3d(1.02, 1.02, 1.02)`;

    particles.forEach(p => {
      const depth = parseFloat(p.dataset.depth) || 15;
      p.style.transform = `translate3d(${(x / rect.width) * depth}px, ${(y / rect.height) * depth}px, 0)`;
    });
  });

  stage.addEventListener('mouseleave', () => {
    tub.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    particles.forEach(p => p.style.transform = 'translate3d(0, 0, 0)');
  });
}

// ==========================================================
// 3. RESTORED PINTS CAROUSEL (Arrow Navigation + Auto-Slide)
// ==========================================================
let pintsAutoTimer = null;

function getPintsScrollStep() {
  const viewport = document.getElementById('pints-viewport');
  if (!viewport) return 310;
  const card = viewport.querySelector('.pints-pop-card');
  return card ? (card.offsetWidth + 28) : 310;
}

window.scrollPintsSlider = function(direction) {
  const viewport = document.getElementById('pints-viewport');
  if (!viewport) return;
  const step = getPintsScrollStep();

  if (direction > 0) {
    if (viewport.scrollLeft + viewport.clientWidth >= viewport.scrollWidth - 30) {
      viewport.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      viewport.scrollBy({ left: step, behavior: 'smooth' });
    }
  } else {
    if (viewport.scrollLeft <= 20) {
      viewport.scrollTo({ left: viewport.scrollWidth, behavior: 'smooth' });
    } else {
      viewport.scrollBy({ left: -step, behavior: 'smooth' });
    }
  }

  // Reset auto-timer on user interaction
  restartPintsAuto();
};

function startPintsAuto() {
  stopPintsAuto();
  pintsAutoTimer = setInterval(() => {
    window.scrollPintsSlider(1);
  }, 3200);
}

function stopPintsAuto() {
  if (pintsAutoTimer) {
    clearInterval(pintsAutoTimer);
    pintsAutoTimer = null;
  }
}

function restartPintsAuto() {
  stopPintsAuto();
  startPintsAuto();
}

function initPintsSlider() {
  const viewport = document.getElementById('pints-viewport');
  const prevBtn = document.getElementById('pints-arrow-prev');
  const nextBtn = document.getElementById('pints-arrow-next');

  if (!viewport) return;

  if (nextBtn) {
    nextBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollPintsSlider(1);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollPintsSlider(-1);
    });
  }

  viewport.addEventListener('mouseenter', stopPintsAuto);
  viewport.addEventListener('mouseleave', startPintsAuto);
  viewport.addEventListener('touchstart', stopPintsAuto, { passive: true });
  viewport.addEventListener('touchend', startPintsAuto);

  // Start auto-scroll on load
  startPintsAuto();
}
