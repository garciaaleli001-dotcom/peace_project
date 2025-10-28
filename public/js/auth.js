// auth.js - Sistema de autenticación simplificado
document.addEventListener('DOMContentLoaded', function() {
    // Formulario de registro
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const password = formData.get('password');
            const confirmPassword = formData.get('confirmPassword');
            
            if (password !== confirmPassword) {
                showMessage('Las contraseñas no coinciden', 'error');
                return;
            }
            
            // Simulación de registro exitoso
            showMessage('Registro exitoso. Redirigiendo...', 'success');
            setTimeout(() => {
                window.location.href = 'index.php?page=login';
            }, 2000);
        });
    }
    
    // Formulario de login
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulación de login exitoso
            showMessage('Inicio de sesión exitoso', 'success');
            setTimeout(() => {
                window.location.href = 'index.php?page=home';
            }, 1000);
        });
    }
    
    // Botón de logout
    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            showMessage('Sesión cerrada exitosamente', 'success');
            setTimeout(() => {
                window.location.href = 'index.php?page=home';
            }, 1000);
        });
    }
});

function showMessage(message, type = 'success') {
    let messageDiv = document.getElementById('authMessage');
    
    if (!messageDiv) {
        messageDiv = document.createElement('div');
        messageDiv.id = 'authMessage';
        document.body.appendChild(messageDiv);
    }
    
    messageDiv.style.backgroundColor = type === 'success' ? '#4CAF50' : '#f44336';
    messageDiv.textContent = message;
    messageDiv.style.display = 'block';
    
    setTimeout(() => {
        messageDiv.style.display = 'none';
    }, 5000);
}