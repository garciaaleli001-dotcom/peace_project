<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Construyendo la Paz</title>
    <link rel="stylesheet" href="/proyecto_paz/public/css/style.css">
</head>
<body>

<header>
    CONSTRUYENDO LA PAZ
</header>

<div class="layout-container">
    <!-- Barra lateral -->
    <aside class="sidebar">
        <h2>Apartados</h2>
        <a href="#" class="nav-item">Chat moderado y Diario</a>
        <a href="#" class="nav-item">Biblioteca de imágenes y frases motivacionales</a>
        <a href="#" class="nav-item">Cuestionario de autoevaluación de la paz</a>
        <button class="btn-sidebar" id="openLoginModal">Acceder</button>
    </aside>

    <!-- Contenido principal -->
    <main class="main-content">
        <h1>¿Qué es la paz?</h1>
        <div class="section">
            <p>
                El concepto de paz va más allá de la simple ausencia de guerra (<b>paz negativa</b>); 
                implica un estado de armonía, equilibrio y justicia a nivel individual y colectivo, 
                que incluye el respeto mutuo, la cooperación y la resolución pacífica de conflictos.
            </p>
            <p>
                Para alcanzarla (<b>paz positiva</b>), se requiere la promoción del diálogo, 
                la solidaridad y la educación en derechos humanos, creando una cultura de no violencia 
                necesaria para el desarrollo y la convivencia humana.
            </p>
        </div>

        <div class="right-content">
            <img src="/proyecto_paz/public/assets/paloma_paz.png" alt="Paloma de la paz">
            <div class="podcast">
                <b>Podcast: "Construimos Paz"</b><br>
                <a href="https://share.google/Xdc78ZcNJpmvPmGQY">https://share.google/Xdc78ZcNJpmvPmGQY</a>
            </div>
        </div>

        <div class="links">
            <b>Link de Páginas de Información Relacionadas a la Construcción y Mantenimiento de la Paz</b><br>
            <a href="https://es.golapaz.com/">https://es.golapaz.com/</a>
            <a href="https://www.un.org/es/observances/living-in-peace-day">https://www.un.org/es/observances/living-in-peace-day</a>
            <a href="https://www.unesco.org/es">https://www.unesco.org/es</a>
            <a href="https://www.gob.mx/juntosporlapaz">https://www.gob.mx/juntosporlapaz</a>
        </div>

    </main>
</div>

<!-- Modal genérico para cargar el login -->
<div id="loginModal" class="modal">
    <div class="modal-content" id="loginContent">
        <span class="close">&times;</span>
        <p>Cargando formulario...</p>
    </div>
</div>

<script>
    const openModalBtn = document.getElementById("openLoginModal");
    const modal = document.getElementById("loginModal");
    const modalContent = document.getElementById("loginContent");
    const closeBtn = document.querySelector(".close");

    // Abrir modal y cargar login.php dinámicamente
    openModalBtn.addEventListener("click", () => {
        modal.style.display = "flex";
        fetch("/proyecto_paz/view/login.php")
            .then(res => res.text())
            .then(html => {
                // Insertamos el contenido de login.php dentro del modal
                modalContent.innerHTML = '<span class="close">&times;</span>' + html;
                // Volvemos a asignar el evento de cierre
                modalContent.querySelector(".close").onclick = () => modal.style.display = "none";
            })
            .catch(err => {
                modalContent.innerHTML = "<p>Error al cargar el formulario.</p>";
            });
    });

    // Cerrar modal si clic fuera
    window.addEventListener("click", e => {
        if (e.target === modal) modal.style.display = "none";
    });
</script>

</body>
</html>
