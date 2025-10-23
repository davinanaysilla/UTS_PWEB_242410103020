document.addEventListener('DOMContentLoaded', function() {
    const animateCards = () => {
        const cards = document.querySelectorAll('.card-custom');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';

            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    };

    const initButtonEffects = () => {
        const buttons = document.querySelectorAll('.btn-strawberry');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });

            button.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    };

    const showNotification = (message, type = 'success') => {
        const notification = document.createElement('div');
        notification.className = `alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
        notification.style.position = 'fixed';
        notification.style.top = '20px';
        notification.style.right = '20px';
        notification.style.zIndex = '9999';
        notification.style.minWidth = '300px';
        notification.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 3000);
    };

    const initLoginValidation = () => {
        const loginForm = document.getElementById('loginForm');
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;

                if (!username || !password) {
                    e.preventDefault();
                    showNotification('Harap isi username dan password!', 'error');
                }
            });
        }
    };

    const animateCounters = () => {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 100;
            let current = 0;

            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.innerText = Math.ceil(current).toLocaleString();
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            updateCounter();
        });
    };

    const init = () => {
        animateCards();
        initButtonEffects();
        initLoginValidation();

        if (document.querySelector('.counter')) {
            animateCounters();
        }

        console.log('Strawberry Cafe System Loaded! 🍓');
    };

    init();
});
