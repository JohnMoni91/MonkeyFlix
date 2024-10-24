<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehome.css">
    <title>MonkeyFlix</title>

</head>
<body>

<div class="navbar">MonkeyFlix</div>

<div class="container">
    <div class="category">
        <h2>Melhores Séries</h2>
        <div class="carousel">
            <div class="carousel-track">
                <div class="series-card">
                    <a href="Ds3.php">
                    <img src="https://img.youtube.com/vi/KRx4hJcogDk/maxresdefault.jpg" alt="Dark Souls 3" width="200" height="100">
                        <div class="series-title">Dark Souls 3</div>
                    </a>
                </div>
                <div class="series-card">
                    <a href="BATorigins.php">
                        <img src="https://via.placeholder.com/300x200?text=Thumb+Dark+Souls+3" alt="Batman Arkham Origins">
                        <div class="series-title">Batman Arkham Origins</div>
                    </a>
                </div>
            </div>
            <button class="carousel-button left" onclick="moveCarousel(-1, 'carousel')">&#10094;</button>
            <button class="carousel-button right" onclick="moveCarousel(1, 'carousel')">&#10095;</button>

        </div>
    </div>

    <div class="category">
        <h2>Séries de Terror</h2>
        <div class="carousel">
            <div class="carousel-track">
                <div class="series-card">
                    <a href="serie-outlast.html">
                        <img src="https://via.placeholder.com/300x200?text=Thumb+Outlast" alt="Outlast">
                        <div class="series-title">Outlast</div>
                    </a>
                </div>
                <div class="series-card">
                    <a href="serie-outlast.html">
                        <img src="https://via.placeholder.com/300x200?text=Thumb+Outlast+2" alt="Outlast 2">
                        <div class="series-title">Outlast 2</div>
                    </a>
                </div>
                <div class="series-card">
                    <a href="serie-resident-evil.html">
                        <img src="https://via.placeholder.com/300x200?text=Thumb+Resident+Evil" alt="Resident Evil 4 (2005)">
                        <div class="series-title">Resident Evil 4 (2005)</div>
                    </a>
                </div>
                <div class="series-card">
                    <a href="serie-resident-evil.html">
                        <img src="https://via.placeholder.com/300x200?text=Thumb+Resident+Evil" alt="Resident Evil 4 (2023)">
                        <div class="series-title">Resident Evil 4 (2023)</div>
                    </a>
                </div>
            </div>
            <button class="carousel-button left" onclick="moveCarousel(-1, 'carousel')">&#10094;</button>
            <button class="carousel-button right" onclick="moveCarousel(1, 'carousel')">&#10095;</button>

        </div>
    </div>

    <div class="category">
        <h2>Séries de Aventura</h2>
        <div class="carousel">
            <div class="carousel-track">
                <div class="series-card">
                    <a href="serie-god-of-war.html">
                        <img src="https://via.placeholder.com/300x200?text=Thumb+God+of+War" alt="God of War">
                        <div class="series-title">God of War</div>
                    </a>
                </div>
            </div>
            <button class="carousel-button left" onclick="moveCarousel(-1, 'carousel')">&#10094;</button>
            <button class="carousel-button right" onclick="moveCarousel(1, 'carousel')">&#10095;</button>

            <!-- Não é necessário um botão se houver apenas um card -->
        </div>
    </div>
</div>

<script src=”carrosel.js”></script>

</body>
</html>
