<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BioMote | Regenerando tu suelo desde los residuos')</title>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS (El estilo minimalista) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WRSMRBN9');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRSMRBN9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="navbar navbar-expand-lg {{ request()->routeIs('home') ? 'navbar-dark' : 'navbar-light navbar-scrolled' }} fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ request()->routeIs('home') ? asset('images/logo-biomote.png') : asset('images/logo-biomote-b.png') }}" alt="BioMote Logo" height="55" id="navbarLogo">
            </a>

            <button class="navbar-toggler" type="button" id="menuToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="desktopNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">Preguntas Frecuentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('videos.index') }}">Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mobile-menu-overlay" id="mobileMenu">
        <button class="close-btn" id="closeMenuBtn">&times;</button>
        <div class="overlay-content">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('about') }}">Nosotros</a>
            <a href="{{ route('products.index') }}">Productos</a>
            <a href="{{ route('faqs') }}">Preguntas frecuentes</a>
            <a href="{{ route('videos.index') }}">Videos</a>
            <a href="{{ route('blog.index') }}">Blog</a>
            <a class="btn btn-primary" style="color: #f9f9f9;" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contacto</a>
        </div>
    </div>

    @yield('content')

    <!-- Minichat whatsapp -->
    <div class="floating-widget-container">
        <!-- Contenedor específico para WhatsApp -->
        <div class="whatsapp-container">
            <div class="whatsapp-chat-box" id="whatsappChatBox">
                <div class="chat-header">
                    <img src="{{ asset('images/logo-biomote.png') }}" alt="Logo" class="chat-logo">
                    <div class="chat-info">
                        <span class="chat-title">BioMote</span>
                        <span class="chat-status">Normalmente responde en minutos</span>
                    </div>
                    <button class="chat-close-btn" id="closeChatBtn">&times;</button>
                </div>
                <div class="chat-body">
                    <a href="https://wa.me/595994354817?text=Hola!%20Quisiera%20más%20información%20sobre%20los%20sistemas%20HomeBiogas." target="_blank" class="chat-link">
     <div class="message received">
     ¡Hola! 👋 ¿Listo para convertir tus residuos en energía? Haz clic aquí para chatear con un asesor.
                        </div>
                    </a>
                </div>
            </div>
            <button class="whatsapp-trigger-btn" id="whatsappTriggerBtn" title="Chatea con nosotros">
                <i class="bi bi-whatsapp"></i>
            </button>
        </div>

        <button id="scrollToTopBtn" class="scroll-to-top-btn" title="Volver arriba">
            <i class="bi bi-chevron-up"></i>
        </button>

    </div>

    <!-- FOOTER -->
    <footer class="footer section-spacing">
        <div class="container">
            <div class="row justify-content-between g-4">
                <div class="col-lg-4 text-center text-md-start">
                    <img src="{{ asset('images/logo-biomote.png') }}" alt="BioMote Logo" height="40" class="mb-3">
                    <p class="list-unstyled">La revolución de la energía sostenible en Paraguay. Distribuidor Oficial de HomeBiogas.</p>
                     <div class="social-icons mt-4">
                        <a href="https://www.facebook.com/people/Biomotepy/61580514975236/" class="social-icon me-3"><i class="bi bi-facebook"></i></a>
<a href="https://www.instagram.com/biomote.py/" class="social-icon me-3"><i class="bi bi-instagram"></i></a>
<a href="https://py.linkedin.com/in/biomote-paraguay-825740384" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 text-center text-md-start">
                    <h5 class="footer-heading mb-3">Navegación</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('about') }}">Nosotros</a></li>
                        <li><a href="{{ route('products.index') }}">Productos</a></li>
                        <li><a href="{{ route('faqs') }}">Preguntas Frecuentes</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 text-center text-md-start">
                    <h5 class="footer-heading mb-3">Contacto</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="mailto:info@biomote.com.py">info@biomote.com.py</a></li>
                        <li><a href="tel:+595994354817">+595 994 354817</a></li>
                        <li><span>Asunción, Paraguay</span></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-12 text-md-start text-center"><p class="mb-md-0 mb-2 list-unstyled">&copy; 2025 BioMote. Todos los derechos reservados.</p></div>
                <div class="col-md-6 col-12 text-md-end text-center"><p class="mb-0 list-unstyled">Desarrollado por: Soluciones Inteligentes.</p></div>
            </div>
        </div>
    </footer>

    <!-- Modal Contacto -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="contactModalLabel">Ponte en Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4">
                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="contact-option">
                            <h3 class="h5 mt-3">Chatea con Nosotros</h3>
                            <a href="https://wa.me/595994354817?text=Hola!%20Quisiera%20más%20información%20sobre%20los%20sistemas%20HomeBiogas." target="_blank" class="btn btn-outline-dark mt-2 w-100 d-flex align-items-center justify-content-center">
                                <i class="bi bi-whatsapp me-2"></i>+595 994 354817
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-option text-center">
                            <h3 class="h5 mt-3">Envíanos un Correo</h3>
                            <a href="mailto:info@biomote.com.py" class="btn btn-outline-dark mt-2 w-100 d-flex align-items-center justify-content-center">
                                <i class="bi bi-envelope me-2"></i>info@biomote.com.py
                            </a>
                        </div>
                    </div>

                    <!-- NUEVA TARJETA: Ir al Formulario -->
                    <div class="col-md-12">
                        <div class="contact-option text-center">
                            <h3 class="h5 mt-3">Ir al Formulario</h3>
                            <a href="/formulario" class="btn btn-outline-dark mt-2 w-100 d-flex align-items-center justify-content-center">
                                <i class="bi bi-ui-checks-grid me-2"></i>Completar Formulario
                            </a>
                        </div>
                    </div>
                    <!-- FIN NUEVA TARJETA -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin modal -->


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
