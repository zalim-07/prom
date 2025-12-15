console.log("main.js");

// Header scroll effect
const header = document.querySelector('.header');

if (header) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
}

// Mobile Menu
document.addEventListener('DOMContentLoaded', () => {
  const burgerMenu = document.querySelector('.burger-menu');
  const mobileMenu = document.querySelector('.mobile-menu');
  const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
  const mobileMenuClose = document.querySelector('.mobile-menu__close');
  const catalogMobileMenu = document.querySelector('.header-catalog__mobile-menu');
  const body = document.body;

  // Open mobile menu
  const openMenu = () => {
    if (mobileMenu) {
      mobileMenu.classList.add('active');
      mobileMenuOverlay.classList.add('active');
      body.classList.add('menu-open');
    }
  };

  // Close mobile menu
  const closeMenu = () => {
    if (mobileMenu) {
      mobileMenu.classList.remove('active');
      mobileMenuOverlay.classList.remove('active');
      body.classList.remove('menu-open');
    }
  };

  // Event listeners for home page
  if (burgerMenu) {
    burgerMenu.addEventListener('click', openMenu);
  }

  // Event listeners for catalog page
  if (catalogMobileMenu) {
    catalogMobileMenu.addEventListener('click', openMenu);
  }

  if (mobileMenuClose) {
    mobileMenuClose.addEventListener('click', closeMenu);
  }

  if (mobileMenuOverlay) {
    mobileMenuOverlay.addEventListener('click', closeMenu);
  }

  // Close menu on link click
  const mobileMenuLinks = document.querySelectorAll('.mobile-menu__nav a');
  mobileMenuLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Close menu on ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) {
      closeMenu();
    }
  });

  // Mobile Search Panel (for catalog page)
  const catalogSearchBtn = document.querySelector('.header-catalog__search-btn');
  const mobileSearchPanel = document.querySelector('.mobile-search-panel');

  if (catalogSearchBtn && mobileSearchPanel) {
    catalogSearchBtn.addEventListener('click', () => {
      mobileSearchPanel.classList.toggle('active');
    });
  }

  // Close search panel on ESC
  if (mobileSearchPanel) {
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileSearchPanel.classList.contains('active')) {
        mobileSearchPanel.classList.remove('active');
      }
    });
  }

  // Catalog Sort Filters
  const sortButtons = document.querySelectorAll('.catalog-sort__item');
  
  sortButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons except price button
      if (!button.classList.contains('catalog-sort__item--price')) {
        sortButtons.forEach(btn => {
          if (!btn.classList.contains('catalog-sort__item--price')) {
            btn.classList.remove('catalog-sort__item--active');
          }
        });
        button.classList.add('catalog-sort__item--active');
      } else {
        // Toggle ascending/descending for price
        button.classList.toggle('ascending');
      }
    });
  });

  // Price Range Slider
  const priceRangeMin = document.getElementById('price-range-min');
  const priceRangeMax = document.getElementById('price-range-max');
  const priceFrom = document.getElementById('price-from');
  const priceTo = document.getElementById('price-to');
  const priceRangeFill = document.querySelector('.filter-price__range-fill');

  if (priceRangeMin && priceRangeMax && priceFrom && priceTo && priceRangeFill) {
    const minValue = parseInt(priceRangeMin.min);
    const maxValue = parseInt(priceRangeMax.max);

    const updatePriceRange = () => {
      const min = parseInt(priceRangeMin.value);
      const max = parseInt(priceRangeMax.value);

      // Ensure min doesn't exceed max
      if (min >= max) {
        priceRangeMin.value = max - 1;
        priceFrom.value = max - 1;
      }

      // Update input fields
      priceFrom.value = priceRangeMin.value;
      priceTo.value = priceRangeMax.value;

      // Update fill position
      const minPercent = ((parseInt(priceRangeMin.value) - minValue) / (maxValue - minValue)) * 100;
      const maxPercent = ((parseInt(priceRangeMax.value) - minValue) / (maxValue - minValue)) * 100;
      
      priceRangeFill.style.left = minPercent + '%';
      priceRangeFill.style.right = (100 - maxPercent) + '%';
    };

    priceRangeMin.addEventListener('input', updatePriceRange);
    priceRangeMax.addEventListener('input', updatePriceRange);

    priceFrom.addEventListener('input', (e) => {
      let value = parseInt(e.target.value) || minValue;
      if (value < minValue) value = minValue;
      if (value >= parseInt(priceRangeMax.value)) value = parseInt(priceRangeMax.value) - 1;
      priceRangeMin.value = value;
      updatePriceRange();
    });

    priceTo.addEventListener('input', (e) => {
      let value = parseInt(e.target.value) || maxValue;
      if (value > maxValue) value = maxValue;
      if (value <= parseInt(priceRangeMin.value)) value = parseInt(priceRangeMin.value) + 1;
      priceRangeMax.value = value;
      updatePriceRange();
    });

    // Initialize
    updatePriceRange();
  }

  // Filter Groups Toggle
  const filterGroupHeaders = document.querySelectorAll('.filter-group__header');
  
  filterGroupHeaders.forEach(header => {
    header.addEventListener('click', () => {
      const filterGroup = header.closest('.filter-group');
      const content = filterGroup.querySelector('.filter-group__content');
      
      if (content) {
        const isActive = header.classList.contains('filter-group__header--active');
        
        // Close all other filters (optional - if you want accordion behavior)
        // filterGroupHeaders.forEach(otherHeader => {
        //   if (otherHeader !== header) {
        //     otherHeader.classList.remove('filter-group__header--active');
        //     const otherContent = otherHeader.closest('.filter-group').querySelector('.filter-group__content');
        //     if (otherContent) otherContent.style.display = 'none';
        //   }
        // });
        
        // Toggle current filter
        if (isActive) {
          header.classList.remove('filter-group__header--active');
          content.style.display = 'none';
        } else {
          header.classList.add('filter-group__header--active');
          content.style.display = 'block';
        }
      }
    });
  });
});