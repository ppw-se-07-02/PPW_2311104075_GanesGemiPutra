document.addEventListener('DOMContentLoaded', () => {
  // Password visibility toggle (safe: only attach if elements exist)
  const passwordField = document.getElementById('password');
  const togglePassword = document.querySelector('.toggle-password');

  if (passwordField && togglePassword) {
    togglePassword.addEventListener('click', () => {
      const isPassword = passwordField.type === 'password';
      passwordField.type = isPassword ? 'text' : 'password';

      // Update icon
      const icon = togglePassword.querySelector('i');
      if (icon) {
        icon.className = isPassword ? 'fas fa-eye-slash' : 'fas fa-eye';
      }

      // toggle accessible label
      const expanded = togglePassword.getAttribute('aria-pressed') === 'true';
      togglePassword.setAttribute('aria-pressed', String(!expanded));
    });
  }

  // Login submit (simulated) - safe guarding missing elements
  const loginForm = document.getElementById('loginForm');
  if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = loginForm.querySelector('.btn-login');
      const btnText = document.querySelector('.btn-text');
      const loader = document.querySelector('.btn-loading');

      // prevent double submits
      if (submitBtn && submitBtn.disabled) return;
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.setAttribute('aria-busy', 'true');
      }

      if (btnText) btnText.style.display = 'none';
      if (loader) loader.style.display = 'inline-block';

      // Simulated async login — replace with real request
      setTimeout(() => {
        if (loader) loader.style.display = 'none';
        if (btnText) btnText.style.display = 'inline';
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.removeAttribute('aria-busy');
        }
        // Replace with real submission handling in production
        alert('Login berhasil! (simulasi)');
      }, 1200);
    });
  }

  // Modals (optional) - attach handlers only if elements exist
  const forgotBtn = document.getElementById('forgotBtn');
  const registerBtn = document.getElementById('registerBtn');
  const forgotModal = document.getElementById('forgotModal');
  const registerModal = document.getElementById('registerModal');
  const closeForgot = document.getElementById('closeForgot');
  const closeRegister = document.getElementById('closeRegister');

  if (forgotBtn && forgotModal && closeForgot) {
    forgotBtn.addEventListener('click', () => (forgotModal.style.display = 'flex'));
    closeForgot.addEventListener('click', () => (forgotModal.style.display = 'none'));
  }
  if (registerBtn && registerModal && closeRegister) {
    registerBtn.addEventListener('click', () => (registerModal.style.display = 'flex'));
    closeRegister.addEventListener('click', () => (registerModal.style.display = 'none'));
  }

  // Close modal when clicking outside
  window.addEventListener('click', (e) => {
    if (forgotModal && e.target === forgotModal) forgotModal.style.display = 'none';
    if (registerModal && e.target === registerModal) registerModal.style.display = 'none';
  });
});

