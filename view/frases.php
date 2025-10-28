<?php include '/templates/header.php'; ?>

<section id="frases" class="section">
    <h2>Frases Motivacionales</h2>
    <p>Reflexiona con estas frases sobre paz, empatía y convivencia.</p>
    
    <div class="quote-container">
        <p class="quote">"La paz no es la ausencia de conflictos, sino la capacidad de manejarlos de manera pacífica."</p>
        <p class="author">- Ronald Reagan</p>
        <button class="btn" style="margin-top: 1rem;" onclick="changeQuote()">Nueva frase</button>
    </div>
</section>

<script>
function changeQuote() {
    const quotes = [
        {text: "La paz no es la ausencia de conflictos, sino la capacidad de manejarlos de manera pacífica.", author: "Ronald Reagan"},
        {text: "No hay camino para la paz, la paz es el camino.", author: "Mahatma Gandhi"},
        {text: "Si quieres hacer la paz con tu enemigo, tienes que trabajar con él. Entonces se convierte en tu compañero.", author: "Nelson Mandela"},
        {text: "La paz comienza con una sonrisa.", author: "Madre Teresa"},
        {text: "La paz más desventajosa es mejor que la guerra más justa.", author: "Erasmo de Róterdam"}
    ];
    
    const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    const quoteElement = document.querySelector('.quote');
    const authorElement = document.querySelector('.author');
    
    if (quoteElement && authorElement) {
        quoteElement.textContent = `"${randomQuote.text}"`;
        authorElement.textContent = `- ${randomQuote.author}`;
    }
}
</script>

<?php include '/templates/footer.php'; ?>