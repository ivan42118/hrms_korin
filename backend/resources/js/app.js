// Enhanced JavaScript for login page with smooth animations
console.log('HRMS Login Page Loaded');

document.addEventListener('DOMContentLoaded', function() {
    // Add loading animation to submit button
    const loginForm = document.querySelector('form');
    const submitButton = document.querySelector('.login-button');
    
    if (loginForm && submitButton) {
        loginForm.addEventListener('submit', function(e) {
            submitButton.classList.add('loading');
            submitButton.disabled = true;
            submitButton.textContent = 'Memproses...';
            
            // Simulate loading for demo purposes
            setTimeout(() => {
                submitButton.classList.remove('loading');
                submitButton.disabled = false;
                submitButton.textContent = 'Masuk';
            }, 2000);
        });
    }
    
    // Enhanced input interactions
    const inputs = document.querySelectorAll('.form-input');
    
    inputs.forEach(input => {
        // Focus effect
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 8px 25px rgba(255, 255, 255, 0.15)';
        });
        
        // Blur effect
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
        
        // Real-time validation
        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.classList.add('has-value');
            } else {
                this.classList.remove('has-value');
            }
        });
    });
    
    // Add floating label effect
    const labels = document.querySelectorAll('.form-label');
    labels.forEach(label => {
        label.style.transition = 'all 0.3s ease';
    });
    
    // Password visibility toggle (optional enhancement)
    const passwordInput = document.getElementById('password');
    if (passwordInput) {
        const passwordToggle = document.createElement('span');
        passwordToggle.innerHTML = '👁️';
        passwordToggle.style.position = 'absolute';
        passwordToggle.style.right = '15px';
        passwordToggle.style.top = '50%';
        passwordToggle.style.transform = 'translateY(-50%)';
        passwordToggle.style.cursor = 'pointer';
        passwordToggle.style.opacity = '0.6';
        passwordToggle.style.transition = 'opacity 0.3s ease';
        
        passwordToggle.addEventListener('mouseenter', () => {
            passwordToggle.style.opacity = '1';
        });
        
        passwordToggle.addEventListener('mouseleave', () => {
            passwordToggle.style.opacity = '0.6';
        });
        
        passwordToggle.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.innerHTML = '🔒';
            } else {
                passwordInput.type = 'password';
                passwordToggle.innerHTML = '👁️';
            }
        });
        
        const passwordGroup = passwordInput.parentElement;
        passwordGroup.style.position = 'relative';
        passwordGroup.appendChild(passwordToggle);
    }
    
    // Add subtle background animation
    function createFloatingParticles() {
        const container = document.querySelector('.login-container');
        if (!container) return;
        
        for (let i = 0; i < 15; i++) {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.width = Math.random() * 4 + 2 + 'px';
            particle.style.height = particle.style.width;
            particle.style.background = 'rgba(255, 255, 255, 0.1)';
            particle.style.borderRadius = '50%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '1';
            
            container.appendChild(particle);
            
            // Animate the particle
            animateParticle(particle);
        }
    }
    
    function animateParticle(particle) {
        const duration = Math.random() * 10 + 10;
        const xMovement = (Math.random() - 0.5) * 100;
        const yMovement = (Math.random() - 0.5) * 100;
        
        particle.animate(
            [
                { transform: 'translate(0, 0)', opacity: 0 },
                { transform: `translate(${xMovement}px, ${yMovement}px)`, opacity: 0.3 },
                { transform: `translate(${xMovement * 2}px, ${yMovement * 2}px)`, opacity: 0 }
            ],
            {
                duration: duration * 1000,
                iterations: Infinity
            }
        );
    }
    
    createFloatingParticles();
    
    console.log('Enhanced login interactions loaded');
});
