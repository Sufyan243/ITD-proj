document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    const filterButtons = document.querySelectorAll('.product-categories button');
    const productItems = document.querySelectorAll('.product-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            
            productItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.add('show');
                    item.classList.remove('hide');
                } else {
                    item.classList.remove('show');
                    item.classList.add('hide');
                }
            });
        });
    });

    // Trigger the "All" button on page load
    if (document.querySelector('.product-categories button[data-filter="all"]')) {
        document.querySelector('.product-categories button[data-filter="all"]').click();
    }
    
    // Header scroll behavior with requestAnimationFrame
    let ticking = false;
    function updateHeader() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });
    
    // Set initial header state
    updateHeader();
    
    // Dynamic body padding for non-hero pages
    function updateBodyPadding() {
        if (document.body.classList.contains('has-hero')) return;
        const h = header.offsetHeight;
        document.body.style.paddingTop = h + 'px';
    }
    
    updateBodyPadding();
    window.addEventListener('resize', updateBodyPadding);
    
    // Dynamic hero padding based on header height
    const heroSection = document.querySelector('.hero-section');
    if (heroSection && header) {
        function updateHeroPadding() {
            const headerHeight = header.offsetHeight;
            heroSection.style.paddingTop = headerHeight + 'px';
        }
        updateHeroPadding();
        window.addEventListener('resize', updateHeroPadding);
    }
    
    // Smooth scroll for Hero CTA
    const heroCTA = document.querySelector('.btn-hero-cta');
    if (heroCTA) {
        heroCTA.addEventListener('click', function(e) {
            e.preventDefault();
            const targetElement = document.getElementById('request-quote');
            if (targetElement) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    }
    
    // Smooth scroll for Header Get Quote button
    const getQuoteBtn = document.querySelector('.btn-get-quote');
    if (getQuoteBtn) {
        getQuoteBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const targetElement = document.getElementById('request-quote');
            if (targetElement) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    }
    
    // Scroll to "Request a Quote" section on Inquiry button click
    const inquiryButtons = document.querySelectorAll('.inquiry-button');
    inquiryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetElement = document.getElementById('request-quote');
            if (targetElement) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Machine categories filter (if exists)
    const machineFilterButtons = document.querySelectorAll('.machine-categories button');
    const machineProductItems = document.querySelectorAll('.product-item');
    
    machineFilterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            
            machineProductItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.add('show');
                    item.classList.remove('hide');
                } else {
                    item.classList.remove('show');
                    item.classList.add('hide');
                }
            });
        });
    });
});  