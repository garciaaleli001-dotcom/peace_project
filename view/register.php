<?php include '/templates/header.php'; ?>

<section id="register" class="section">
    <div class="auth-container">
        <h2>Crear Cuenta</h2>
        <p>Únete a nuestra comunidad de paz y convivencia</p>
        
        <form id="registerForm" class="auth-form">
            <div class="form-group">
                <label for="fullname">Nombre Completo:</label>
                <input type="text" id="fullname" name="fullname" required 
                       placeholder="Ingresa tu nombre completo">
            </div>
            
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required 
                       placeholder="Elige un nombre de usuario">
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required 
                       placeholder="tu@email.com">
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required 
                       placeholder="Mínimo 6 caracteres" minlength="6">
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">Confirmar Contraseña:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required 
                       placeholder="Repite tu contraseña">
            </div>
            
            <button type="submit" class="btn" style="width: 100%;">Registrarse</button>
        </form>
        
        <div class="auth-links">
            <p>¿Ya tienes cuenta? <a href="index.php?page=login">Inicia Sesión</a></p>
            <p><a href="index.php?page=home">← Volver al inicio</a></p>
        </div>
    </div>
</section>

<script src="auth.js"></script>

<?php include '/templates/footer.php'; ?>