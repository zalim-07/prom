// Universal Accordion Component
document.addEventListener('DOMContentLoaded', () => {
  const accordionItems = document.querySelectorAll('.accordion__item');

  accordionItems.forEach((item) => {
    const header = item.querySelector('.accordion__header');
    
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('accordion__item--active');

        // Close all items (optional - remove if you want multiple items open)
        accordionItems.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem.classList.remove('accordion__item--active');
          }
        });

        // Toggle current item
        if (isActive) {
          item.classList.remove('accordion__item--active');
        } else {
          item.classList.add('accordion__item--active');
        }
      });
    }
  });
});
