<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">


document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const profilePhoto = document.getElementById('profilePhoto');
    const photoModal = document.getElementById('photoModal');
    const modalClose = document.getElementById('modalClose');
    const modalBackdrop = document.querySelector('.modal-backdrop');
    const skillProgressBars = document.querySelectorAll('.skill-progress');
    const downloadCvBtn = document.getElementById('downloadCvBtn');
    
    // CV URL - Fixed dengan link yang benar
    const CV_URL = 'http://localhost/autobiografi/wp-content/uploads/2025/11/CV.GANES_.pdf';
    
    // Photo Modal Functions
    function openPhotoModal() {
        if (photoModal) {
            photoModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden';
            
            // Focus management
            modalClose.focus();
            
            // Add keyboard event listener for Escape key
            document.addEventListener('keydown', handleEscapeKey);
            
            // Prevent background scrolling
            document.body.classList.add('modal-open');
        }
    }
    
    function closePhotoModal() {
        if (photoModal) {
            photoModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            document.documentElement.style.overflow = '';
            
            // Return focus to the element that opened the modal
            if (document.activeElement === modalClose) {
                if (profilePhoto) profilePhoto.focus();
            }
            
            // Remove keyboard event listener
            document.removeEventListener('keydown', handleEscapeKey);
            
            // Re-enable background scrolling
            document.body.classList.remove('modal-open');
        }
    }
    
    function handleEscapeKey(event) {
        if (event.key === 'Escape') {
            closePhotoModal();
        }
    }
    
    // Download CV Function - FIXED dengan link yang benar
    function handleDownloadCv(event) {
        event.preventDefault();
        
        console.log('Download CV triggered:', CV_URL);
        
        // Test if PDF is accessible
        fetch(CV_URL, { method: 'HEAD' })
            .then(response => {
                if (response.ok) {
                    // PDF is accessible, proceed with download
                    const tempLink = document.createElement('a');
                    tempLink.href = CV_URL;
                    tempLink.target = '_blank';
                    tempLink.rel = 'noopener noreferrer';
                    tempLink.download = 'CV_Ganes_Gemi_Putra.pdf';
                    
                    document.body.appendChild(tempLink);
                    tempLink.click();
                    document.body.removeChild(tempLink);
                    
                    console.log('✅ PDF download initiated successfully');
                } else {
                    throw new Error('PDF tidak dapat diakses');
                }
            })
            .catch(error => {
                console.error('❌ Error accessing PDF:', error);
                alert('⚠️ File PDF tidak dapat diakses. Pastikan file CV.GANES_.pdf sudah terupload di Media Library WordPress.');
            });
    }
    
    // Skill Bars Animation with Intersection Observer
    function animateSkillBars() {
        skillProgressBars.forEach(bar => {
            const width = bar.getAttribute('data-width') + '%';
            bar.style.width = width;
            
            // Animate the percentage text
            const percentElement = bar.closest('.skill').querySelector('.skill-percent');
            if (percentElement) {
                let current = 0;
                const target = parseInt(bar.getAttribute('data-width'));
                const increment = target / 50;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    percentElement.textContent = Math.round(current) + '%';
                }, 20);
            }
        });
    }
    
    function handleSkillBarAnimation(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    animateSkillBars();
                }, 300);
                observer.unobserve(entry.target);
            }
        });
    }
    
    // Initialize Intersection Observer for skill bars
    function initSkillBarObserver() {
        const skillsSection = document.querySelector('.skills-section');
        
        if (skillsSection && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver(handleSkillBarAnimation, {
                threshold: 0.3,
                rootMargin: '0px 0px -50px 0px'
            });
            
            observer.observe(skillsSection);
        } else {
            // Fallback for browsers without IntersectionObserver
            setTimeout(() => {
                animateSkillBars();
            }, 1000);
        }
    }
    
    // Event Listeners for photo modal
    if (profilePhoto) {
        profilePhoto.addEventListener('click', openPhotoModal);
        profilePhoto.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openPhotoModal();
            }
        });
    }
    
    if (modalClose) {
        modalClose.addEventListener('click', closePhotoModal);
    }
    
    if (modalBackdrop) {
        modalBackdrop.addEventListener('click', closePhotoModal);
    }
    
    // Event Listener for Download CV - FIXED
    if (downloadCvBtn) {
        downloadCvBtn.addEventListener('click', handleDownloadCv);
        
        // Also set the href attribute directly as backup
        downloadCvBtn.href = CV_URL;
    }
    
    // Enhanced modal accessibility
    if (photoModal) {
        photoModal.addEventListener('keydown', function(event) {
            if (event.key === 'Tab') {
                const focusableElements = this.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];
                
                if (event.shiftKey) {
                    if (document.activeElement === firstElement) {
                        lastElement.focus();
                        event.preventDefault();
                    }
                } else {
                    if (document.activeElement === lastElement) {
                        firstElement.focus();
                        event.preventDefault();
                    }
                }
            }
        });
    }
    
    // Initialize all functionality
    function init() {
        initSkillBarObserver();
        
        // Log CV URL for verification
        console.log('✅ CV PDF URL:', CV_URL);
        console.log('✅ CV Telkom University JS loaded successfully');
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    // Error handling for images
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('error', function() {
            console.warn('❌ Gambar gagal dimuat:', this.src);
            this.alt = 'Gambar tidak dapat dimuat - ' + this.alt;
        });
        
        img.addEventListener('load', function() {
            console.log('✅ Gambar berhasil dimuat:', this.src);
        });
    });
});</script>
<!-- end Simple Custom CSS and JS -->
