<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    {{-- 🟢 Permite que la página se adapte correctamente a celulares,
         tablets y computadores --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- 🟢 Título que aparecerá en la pestaña del navegador --}}
    <title>SANT RAYN</title>

    {{-- 🟢 Conecta Laravel con Vite.
         Vite se encargará de cargar nuestro CSS y JavaScript --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    {{-- =====================================================
         🟢 HEADER PRINCIPAL DE SANT RAYN
         Contiene el logotipo, menú de navegación
         y acciones del usuario.
         ===================================================== --}}
    <header class="site-header">

        {{-- 🟢 LOGOTIPO DE LA MARCA --}}
        <a href="/" class="logo">
            SANT RAYN
        </a>

        {{-- 🟢 MENÚ PRINCIPAL DE NAVEGACIÓN --}}
        <nav class="main-nav" aria-label="Navegación principal">

            {{-- 🟢 Enlace hacia la página de inicio --}}
            <a href="/">Inicio</a>

            {{-- 🟢 Enlace hacia el catálogo --}}
            <a href="#">Catálogo</a>

            {{-- 🟢 Enlace hacia información de la marca --}}
            <a href="#">Nosotros</a>

        </nav>

        {{-- 🟢 ACCIONES DEL USUARIO --}}
        <div class="header-actions">

            {{-- 🟢 Botón de búsqueda --}}
            <button type="button" aria-label="Buscar">
                Buscar
            </button>

            {{-- 🟢 Botón del carrito --}}
            <button type="button" aria-label="Carrito de compras">
                Carrito
            </button>

            {{-- 🟢 Enlace de acceso del usuario --}}
            <a href="#" aria-label="Cuenta de usuario">
                Cuenta
            </a>

        </div>

    </header>

    {{-- =====================================================
         🟢 CONTENIDO PRINCIPAL
         Temporalmente dejamos este texto para comprobar
         que el contenido debajo del encabezado funciona.
         ===================================================== --}}
    {{-- =====================================================
     🟢 HERO PRINCIPAL DE SANT RAYN
     Es la primera sección visual que verá el cliente.
     ===================================================== --}}
<main>

    <section class="hero">

        {{-- 🟢 CONTENIDO TEXTUAL DEL HERO --}}
        <div class="hero-content">

            {{-- 🟢 PEQUEÑO TEXTO DE PRESENTACIÓN --}}
            <p class="hero-subtitle">
                NUEVA COLECCIÓN
            </p>

            {{-- 🟢 TÍTULO PRINCIPAL --}}
            <h1 class="hero-title">
                Viste tu estilo.
            </h1>

            {{-- 🟢 DESCRIPCIÓN --}}
            <p class="hero-description">
                Descubre prendas diseñadas para representar
                tu personalidad y tu manera de vestir.
            </p>

            {{-- 🟢 BOTÓN PARA IR AL CATÁLOGO --}}
            <a href="#" class="hero-button">
                Explorar colección
            </a>

        </div>

    </section>

    {{-- =====================================================
     🟢 SECCIÓN DE CATEGORÍAS
     Permite al cliente explorar los diferentes tipos
     de prendas disponibles en SANT RAYN.
     ===================================================== --}}
<section class="categories-section">

    {{-- 🟢 ENCABEZADO DE LA SECCIÓN --}}
    <div class="section-heading">

        {{-- 🟢 PEQUEÑA ETIQUETA DE LA SECCIÓN --}}
        <p class="section-label">
            DESCUBRE
        </p>

        {{-- 🟢 TÍTULO PRINCIPAL --}}
        <h2 class="section-title">
            Explora nuestras categorías
        </h2>

        {{-- 🟢 DESCRIPCIÓN --}}
        <p class="section-description">
            Encuentra prendas que se adapten a tu estilo.
        </p>

    </div>


    {{-- =================================================
         🟢 CONTENEDOR DE LAS CATEGORÍAS
         ================================================= --}}
    <div class="categories-grid">


        {{-- 🟢 CATEGORÍA 1: CAMISETAS --}}
        <a href="#" class="category-card">

            <div class="category-card-content">

                <p class="category-number">
                    01
                </p>

                <h3>
                    Camisetas
                </h3>

                <span>
                    Explorar →
                </span>

            </div>

        </a>


        {{-- 🟢 CATEGORÍA 2: HOODIES --}}
        <a href="#" class="category-card">

            <div class="category-card-content">

                <p class="category-number">
                    02
                </p>

                <h3>
                    Hoodies
                </h3>

                <span>
                    Explorar →
                </span>

            </div>

        </a>


        {{-- 🟢 CATEGORÍA 3: PANTALONES --}}
        <a href="#" class="category-card">

            <div class="category-card-content">

                <p class="category-number">
                    03
                </p>

                <h3>
                    Pantalones
                </h3>

                <span>
                    Explorar →
                </span>

            </div>

        </a>

    </div>

</section>
{{-- =====================================================
     🟢 SECCIÓN DE PRODUCTOS DESTACADOS
     Presenta algunos productos principales de la tienda.
     ===================================================== --}}
<section class="featured-products">

    {{-- 🟢 ENCABEZADO DE LA SECCIÓN --}}
    <div class="section-heading">

        {{-- 🟢 ETIQUETA --}}
        <p class="section-label">
            SELECCIÓN SANT RAYN
        </p>

        {{-- 🟢 TÍTULO --}}
        <h2 class="section-title">
            Productos destacados
        </h2>

        {{-- 🟢 DESCRIPCIÓN --}}
        <p class="section-description">
            Descubre algunas de nuestras prendas esenciales.
        </p>

    </div>


    {{-- =================================================
         🟢 CONTENEDOR DE PRODUCTOS
         ================================================= --}}
    <div class="products-grid">


        {{-- 🟢 PRODUCTO 1 --}}
        <article class="product-card">

            {{-- 🟢 ÁREA RESERVADA PARA LA IMAGEN --}}
            {{-- 🟢 IMAGEN DEL PRIMER PRODUCTO --}}
    <div class="product-image">

        <img
        src="{{ asset('images/products/polo-blanco.png') }}"
        alt="Polo blanco SANT RAYN"
        >

    </div>

            {{-- 🟢 INFORMACIÓN DEL PRODUCTO --}}
            <div class="product-info">

                {{-- 🟢 INFORMACIÓN DEL POLO BLANCO --}}
                <p class="product-category">
                    POLOS
                </p>

                <h3 class="product-name">
                   Polo While
                </h3>

                <p class="product-price">
                    $60.000
                </p>

            </div>

        </article>


        {{-- 🟢 PRODUCTO 2 --}}
        <article class="product-card">

            {{-- 🟢 IMAGEN DEL SEGUNDO PRODUCTO --}}
    <div class="product-image">

        <img
        src="{{ asset('images/products/chaqueta-negra.png') }}"
        alt="Chaqueta negra SANT RAYN"
        >

    </div>

            <div class="product-info">

                {{-- 🟢 INFORMACIÓN DE LA CHAQUETA NEGRA --}}
                <p class="product-category">
                    CHAQUETAS
                </p>

                <h3 class="product-name">
                    Chaqueta Black Rose
                </h3>

                <p class="product-price">
                    $120.000
                </p>

            </div>

        </article>


        {{-- 🟢 PRODUCTO 3 --}}
        <article class="product-card">

            {{-- 🟢 IMAGEN DEL TERCER PRODUCTO --}}
    <div class="product-image">

        <img
        src="{{ asset('images/products/hoodie-negro.png') }}"
        alt="Hoodie negro SANT RAYN"
        >

    </div>

            <div class="product-info">

                {{-- 🟢 INFORMACIÓN DEL HOODIE NEGRO --}}
                <p class="product-category">
                    HOODIES
                </p>

                <h3 class="product-name">
                     Hoodie Rose Thorn
                </h3>

                <p class="product-price">
                    $90.000
                </p>

            </div>

        </article>


        {{-- 🟢 PRODUCTO 4 --}}
        <article class="product-card">

            {{-- 🟢 IMAGEN DEL CUARTO PRODUCTO --}}
    <div class="product-image">

        <img
        src="{{ asset('images/products/chaqueta-blanca.png') }}"
        alt="Chaqueta blanca SANT RAYN"
        >

    </div>

            <div class="product-info">

                {{-- 🟢 INFORMACIÓN DE LA CHAQUETA BLANCA --}}
                <p class="product-category">
                    CHAQUETAS
                </p>

                <h3 class="product-name">
                    Chaqueta White Rose
                </h3>

                <p class="product-price">
                    $120.000
                </p>

            </div>

        </article>

    </div>
    {{-- =====================================================
     🟢 BOTÓN PARA VER EL CATÁLOGO COMPLETO
     Por ahora apunta a # porque todavía no hemos creado
     la ruta del catálogo en Laravel.
     ===================================================== --}}
    <div class="catalog-link-container">

        <a href="#" class="catalog-link">
            Ver catálogo completo →
        </a>

    </div>

</section>

</main>


</body>

</html>