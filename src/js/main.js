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

  // Popup: Получить протез
  const prosthesisPopup = document.querySelector('.popup-consultation');
  const prosthesisPopupDialog = prosthesisPopup?.querySelector('.popup__dialog');
  const prosthesisPopupOverlay = prosthesisPopup?.querySelector('.popup__overlay');
  const prosthesisPopupClose = prosthesisPopup?.querySelector('.popup__close');
  const prosthesisOpenButtons = document.querySelectorAll('.js-open-prosthesis-popup');

  const openProsthesisPopup = (event) => {
    if (!prosthesisPopup) return;
    if (event) event.preventDefault();
    prosthesisPopup.classList.add('popup--open');
    body.classList.add('menu-open');
  };

  const closeProsthesisPopup = () => {
    if (!prosthesisPopup) return;
    prosthesisPopup.classList.remove('popup--open');
    body.classList.remove('menu-open');
  };

  prosthesisOpenButtons.forEach((btn) => {
    btn.addEventListener('click', openProsthesisPopup);
  });

  if (prosthesisPopupOverlay) {
    prosthesisPopupOverlay.addEventListener('click', closeProsthesisPopup);
  }

  if (prosthesisPopupClose) {
    prosthesisPopupClose.addEventListener('click', closeProsthesisPopup);
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && prosthesisPopup && prosthesisPopup.classList.contains('popup--open')) {
      closeProsthesisPopup();
    }
  });

  // Catalog header mega menu (Каталог ТСР)
  const catalogMenuToggle = document.querySelector('.header-catalog__catalog-btn');
  const catalogMegaMenu = document.querySelector('.catalog-menu');

  if (catalogMenuToggle && catalogMegaMenu) {
    const toggleCatalogMenu = (event) => {
      event.preventDefault();
      const isOpen = catalogMegaMenu.classList.contains('catalog-menu--open');
      catalogMegaMenu.classList.toggle('catalog-menu--open', !isOpen);
    };

    catalogMenuToggle.addEventListener('click', toggleCatalogMenu);

    // Close on outside click
    document.addEventListener('click', (event) => {
      if (!catalogMegaMenu.contains(event.target) && !catalogMenuToggle.contains(event.target)) {
        catalogMegaMenu.classList.remove('catalog-menu--open');
      }
    });

    // Close on ESC
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        catalogMegaMenu.classList.remove('catalog-menu--open');
      }
    });

    // Category hover / click behavior
    const categoryButtons = catalogMegaMenu.querySelectorAll('.catalog-menu__category');
    const panels = catalogMegaMenu.querySelectorAll('.catalog-menu-panel');

    const setActiveCategory = (category) => {
      if (!category) return;

      categoryButtons.forEach((btn) => {
        const isActive = btn.dataset.category === category;
        btn.classList.toggle('catalog-menu__category--active', isActive);
      });

      panels.forEach((panel) => {
        const isActive = panel.dataset.category === category;
        panel.classList.toggle('catalog-menu-panel--active', isActive);
      });
    };

    categoryButtons.forEach((btn) => {
      const category = btn.dataset.category;
      if (!category) return;

      // Desktop: смена по наведению
      btn.addEventListener('mouseenter', () => {
        if (window.innerWidth >= 1280) {
          setActiveCategory(category);
        }
      });

      // Мобайл / планшет: смена по клику
      btn.addEventListener('click', (event) => {
        event.preventDefault();
        setActiveCategory(category);
      });
    });
  }

  // Mobile Search Panel (for catalog page)
  const searchBtn = document.querySelector('.header-catalog__search-btn');
  const mobileSearchPanel = document.querySelector('.mobile-search-panel');

  if (searchBtn && mobileSearchPanel) {
    searchBtn.addEventListener('click', () => {
      console.log('searchBtn clicked');
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

  const updatePriceRange = () => {
    if (!priceRangeMin || !priceRangeMax || !priceFrom || !priceTo || !priceRangeFill) return;

    const min = parseInt(priceRangeMin.min);
    const max = parseInt(priceRangeMin.max);
    const from = parseInt(priceRangeMin.value);
    const to = parseInt(priceRangeMax.value);

    priceFrom.value = from;
    priceTo.value = to;

    const left = ((from - min) / (max - min)) * 100;
    const right = ((to - min) / (max - min)) * 100;

    priceRangeFill.style.left = `${left}%`;
    priceRangeFill.style.right = `${100 - right}%`;
  };

  if (priceRangeMin && priceRangeMax) {
    priceRangeMin.addEventListener('input', () => {
      let value = parseInt(priceRangeMin.value);
      const maxValue = parseInt(priceRangeMax.value) - 1;
      if (value >= maxValue) value = maxValue;
      priceRangeMin.value = value;
      updatePriceRange();
    });

    priceRangeMax.addEventListener('input', () => {
      let value = parseInt(priceRangeMax.value);
      const minValue = parseInt(priceRangeMin.value) + 1;
      if (value <= minValue) value = minValue;
      priceRangeMax.value = value;
      updatePriceRange();
    });

    priceFrom.addEventListener('change', () => {
      let value = parseInt(priceFrom.value) || parseInt(priceRangeMin.min);
      const maxValue = parseInt(priceRangeMax.value) - 1;
      if (value < parseInt(priceRangeMin.min)) value = parseInt(priceRangeMin.min);
      if (value >= maxValue) value = maxValue;
      priceRangeMin.value = value;
      updatePriceRange();
    });

    priceTo.addEventListener('change', () => {
      let value = parseInt(priceTo.value) || parseInt(priceRangeMax.max);
      const maxValue = parseInt(priceRangeMax.max);
      if (value < parseInt(priceRangeMin.value) + 1) value = parseInt(priceRangeMin.value) + 1;
      if (value > maxValue) value = maxValue;
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

  // Mobile Filter Button
  const mobileFilterBtn = document.querySelector('.catalog-mobile-filter-btn');
  const catalogFilters = document.querySelector('.catalog-filters');
  const catalogFiltersClose = document.querySelector('.catalog-filters__close');

  // Create overlay if it doesn't exist
  let mobileFilterOverlay = document.querySelector('.mobile-filter-overlay');
  if (!mobileFilterOverlay) {
    mobileFilterOverlay = document.createElement('div');
    mobileFilterOverlay.className = 'mobile-filter-overlay';
    document.body.appendChild(mobileFilterOverlay);
  }

  const closeMobileFilters = () => {
    if (catalogFilters) {
      catalogFilters.classList.remove('mobile-open', 'active');
      if (mobileFilterOverlay) {
        mobileFilterOverlay.classList.remove('active');
      }
      body.classList.remove('menu-open');
    }
  };

  const openMobileFilters = () => {
    if (catalogFilters) {
      catalogFilters.classList.add('mobile-open');
      body.classList.add('menu-open');
      
      // Trigger animation by adding active class
      // Use requestAnimationFrame to ensure display:block is applied first
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          catalogFilters.classList.add('active');
          if (mobileFilterOverlay) {
            mobileFilterOverlay.classList.add('active');
          }
        });
      });
    }
  };

  if (mobileFilterOverlay) {
    mobileFilterOverlay.addEventListener('click', closeMobileFilters);
  }

  if (mobileFilterBtn) {
    mobileFilterBtn.addEventListener('click', openMobileFilters);
  }

  if (catalogFiltersClose) {
    catalogFiltersClose.addEventListener('click', closeMobileFilters);
  }

  // Close on ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && catalogFilters && catalogFilters.classList.contains('mobile-open')) {
      closeMobileFilters();
    }
  });

  // Product page functionality
  // Expand/collapse characteristics
  const specsExpandLink = document.querySelector('.product-info__specs-expand-link');
  const specsTable = document.querySelector('.product-info__specs-table');
  
  if (specsExpandLink && specsTable) {
    const hiddenRows = specsTable.querySelectorAll('.product-info__specs-row-hidden');
    
    specsExpandLink.addEventListener('click', (e) => {
      e.preventDefault();
      const isExpanded = hiddenRows[0] && hiddenRows[0].classList.contains('product-info__specs-row-visible');
      
      hiddenRows.forEach(row => {
        if (isExpanded) {
          row.classList.remove('product-info__specs-row-visible');
        } else {
          row.classList.add('product-info__specs-row-visible');
        }
      });
      
      specsExpandLink.textContent = isExpanded ? 'Показать все характеристики' : 'Скрыть характеристики';
    });
  }

  // Product gallery thumbs scroll (if needed later)
});
