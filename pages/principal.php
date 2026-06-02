<?php

$pagina_actual = 'inicio';

?>

<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/header.css">
<link rel="stylesheet" href="./assets/css/footer.css">
<link rel="stylesheet" href="./assets/css/principal.css">

<?php include './components/header.php'; ?>

<section class="hero">

    <div class="hero-content">

        <h1>
            Los mejores smartphones
            al mejor precio
        </h1>

        <p>
            Encuentra celulares y accesorios
            con ofertas destacadas.
        </p>

        <div class="hero-buttons">

            <button>
                Ver catálogo
            </button>

            <button>
                Ver ofertas
            </button>

        </div>

    </div>

    <div class="hero-image">

        <div class="placeholder">
            IMAGEN
        </div>

    </div>

</section>

<section class="categorias">

    <h2>Categorías</h2>

    <div class="categorias-grid">

        <?php for ($i = 0; $i < 5; $i++): ?>

            <div class="categoria-card">

                <div class="placeholder-mini"></div>

                <h3>Categoría</h3>

            </div>

        <?php endfor; ?>

    </div>

</section>

<section class="productos">

    <h2>Productos destacados</h2>

    <div class="productos-grid">

        <?php for ($i = 0; $i < 4; $i++): ?>

            <div class="producto-card">

                <div class="placeholder-product"></div>

                <h3>Producto</h3>

                <span class="precio">
                    S/. 999
                </span>

                <button>
                    Agregar al carrito
                </button>

            </div>

        <?php endfor; ?>

    </div>

</section>

<?php include './components/footer.php'; ?>