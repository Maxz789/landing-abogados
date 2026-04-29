<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FFN Abogados</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Inter:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">

        <!-- Logo -->


        <!-- Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="menu">
            <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="img/logo-white.jpg" height="60" alt="FFN Abogados">
        </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nuestro Estudio</a>
                </li>
                                <li class="nav-item">
                    <a class="nav-link" href="#">Áreas de Práctica</a>
                </li>
                                                <li class="nav-item">
                    <a class="nav-link" href="#">Abogados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- HERO -->
<header class="hero-navbar">

    <div class="bg-image"></div>
    <div class="overlay"></div>

    <div class="hero-content text-center text-white container">

         

        <h1 class="titulo">
            De La Fuente, Ferrada & Navarrete
        </h1>

        <p class="subtitulo mt-3">
            Abogados · Asesoría Legal · Confianza
        </p>

        <a href="#contacto" class="btn btn-outline-light mt-4 px-4">
            Contacto
        </a>

    </div>

</header>

<!-- CONTACTO -->
<section id="contacto" class="contacto text-center py-5">
    <div class="container">

        <img src="img/logo-blue.jpg" class="logo-small mb-3" alt="FFN">

        <h2 class="mb-3">Contacto</h2>

        <p class="mb-4">
            Escríbenos para recibir asesoría legal profesional.
        </p>

        <a href="mailto:contacto@ffnabogados.cl" class="btn btn-dark px-4">
            contacto@ffnabogados.cl
        </a>

    </div>
</section>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
/* Navbar cambia al hacer scroll */
window.addEventListener("scroll", function () {
    const nav = document.getElementById("navbar");

    if (window.scrollY > 50) {
        nav.classList.add("navbar-scrolled");
    } else {
        nav.classList.remove("navbar-scrolled");
    }
});
</script>

</body>
</html>