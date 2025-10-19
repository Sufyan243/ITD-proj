document.addEventListener('DOMContentLoaded', () => {
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
    document.querySelector('.product-categories button[data-filter="all"]').click();
    
    // Navigation toggle button functionality for mobile view
   
});


    // Trigger the "All" button on page load
    document.querySelector('.product-categories button[data-filter="all"]').click();
    
    // Navigation toggle button functionality for mobile view
   

    // Scroll to "Request a Quote" section on Inquiry button click
    const inquiryButtons = document.querySelectorAll('.inquiry-button');
    inquiryButtons.forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('request-quote').scrollIntoView({ behavior: 'smooth' });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.machine-categories button');
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
    }); 