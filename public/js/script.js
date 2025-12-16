// --- FUNCIÓN PARA COMPENSAR EL SALTO DEL SCROLLBAR AL ABRIR MODAL ---
// Mide el ancho de la barra de scroll del navegador y lo guarda en una variable CSS
const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
document.documentElement.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`);

    $(document).ready(function() {
        // --- Lógica para el Modal de Video ---
    const videoModal = document.getElementById('videoModal');
    if (videoModal) {
        
        // Evento que se dispara JUSTO ANTES de que el modal se muestre
        videoModal.addEventListener('show.bs.modal', function (event) {
            // Botón o enlace que disparó el modal
            const button = event.relatedTarget;
            
            // Extraer el ID del video del atributo data-video-id
            const videoId = button.getAttribute('data-video-id');
            
            const videoIframe = document.getElementById('videoIframe');
            
            // Construir la URL de YouTube para autocompletar y asignarla al iframe
            if (videoId) {
                videoIframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0";
            }
        });

        // Evento que se dispara JUSTO CUANDO el modal se termina de ocultar
        videoModal.addEventListener('hide.bs.modal', function () {
            const videoIframe = document.getElementById('videoIframe');
            // Limpia el src del iframe para detener el video y que no siga sonando de fondo
            videoIframe.src = "";
        });
    }
    // --- LÓGICA PARA EL MENÚ MÓVIL OVERLAY ---
    const menuToggler = $('#menuToggler');
    const mobileMenu = $('#mobileMenu');
    const closeMenuBtn = $('#closeMenuBtn');
    const body = $('body');
    const menuLinks = $('#mobileMenu a');

    function openMenu() {
        mobileMenu.addClass('open');
        body.addClass('body-no-scroll');
    }

    function closeMenu() {
        mobileMenu.removeClass('open');
        body.removeClass('body-no-scroll');
    }

    menuToggler.on('click', openMenu);
    closeMenuBtn.on('click', closeMenu);
    menuLinks.on('click', closeMenu);
    // =================================================================
    // ============ LÓGICA PARA IGUALAR ALTURA DE TESTIMONIOS ==========
    // =================================================================
    function equalizeTestimonialHeights() {
        let maxHeight = 0;
        const carouselItems = $('#testimonialCarousel .carousel-item');

        // Primero, reseteamos cualquier altura previa para recalcular
        carouselItems.css('height', 'auto');

        // Buscamos la altura máxima entre todos los testimonios
        carouselItems.each(function() {
            if ($(this).outerHeight() > maxHeight) {
                maxHeight = $(this).outerHeight();
            }
        });

        // Aplicamos esa altura máxima a todos los testimonios
        if (maxHeight > 0) {
            carouselItems.css('height', maxHeight + 'px');
        }
    }

    // Esperamos a que toda la página (incluyendo imágenes) cargue para medir
    $(window).on('load', function() {
        equalizeTestimonialHeights();
    });

    // Opcional: Volvemos a calcular si la ventana cambia de tamaño
    $(window).on('resize', function() {
        equalizeTestimonialHeights();
    });


    // --- LÓGICA DE SCROLL DEL NAVBAR (CON CORRECCIÓN DE RECARGA) ---

    // 1. Creamos una función reutilizable que revisa el estado del scroll.
    function checkNavbarState() {
        // Comprueba si existe la sección del hero en la página actual para aplicar el efecto
        if ($('.hero-section').length) {
            const nav = $('#mainNav');
            const logo = $('#navbarLogo');

            if ($(window).scrollTop() > 50) {
                nav.addClass('navbar-scrolled navbar-light').removeClass('navbar-dark');
                if (logo.length) {
                    logo.attr('src', 'images/logo-biomote-b.png');
                }
            } else {
                nav.removeClass('navbar-scrolled navbar-light').addClass('navbar-dark');
                if (logo.length) {
                    logo.attr('src', 'images/logo-biomote.png');
                }
            }
        }
    }

    // 2. La ejecutamos CADA VEZ que el usuario hace scroll.
    $(window).on('scroll', checkNavbarState);

    // 3. La ejecutamos UNA VEZ al cargar la página para revisar el estado inicial.
    checkNavbarState();


    // --- LÓGICA PARA EL INDICADOR DE SCROLL (CON FORZADO DE ESTADO) ---
    const scrollIndicator = document.getElementById('scrollIndicator');
    const targetSection = document.getElementById('aliado-seccion');
    const mainNav = document.getElementById('mainNav');
    const navbarLogo = document.getElementById('navbarLogo');

    if (scrollIndicator && targetSection && mainNav && navbarLogo) {
        scrollIndicator.addEventListener('click', function(event) {
            event.preventDefault();
    
            // 1. Forzar el estado visual del navbar a "scrolled"
            mainNav.classList.add('navbar-scrolled', 'navbar-light');
            mainNav.classList.remove('navbar-dark');
            navbarLogo.src = 'images/logo-biomote-b.png';
    
            // 2. Esperar al próximo repintado para medir el alto real del navbar
            requestAnimationFrame(function() {
                const navHeight = mainNav.getBoundingClientRect().height;
                const targetSectionTop = targetSection.getBoundingClientRect().top + window.scrollY;
                const scrollToPosition = targetSectionTop - navHeight;
    
                // 3. Hacer el scroll ya con el alto correcto
                window.scrollTo({
                    top: scrollToPosition,
                    behavior: 'smooth'
                });
            });
        });
    }
    
    


    // --- LÓGICA PARA EL BOTÓN SCROLL TO TOP ---
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    function toggleScrollToTopButton() {
        if (scrollToTopBtn) { 
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    if (scrollToTopBtn) {
        window.addEventListener('scroll', toggleScrollToTopButton);
        scrollToTopBtn.addEventListener('click', scrollToTop);
    }
    
    
    // --- LÓGICA PARA EL WIDGET DE MINI-CHAT DE WHATSAPP ---
    const whatsappTriggerBtn = document.getElementById('whatsappTriggerBtn');
    const whatsappChatBox = document.getElementById('whatsappChatBox');
    const closeChatBtn = document.getElementById('closeChatBtn');

    // Función para mostrar u ocultar el chat
    function toggleChatBox() {
        if (whatsappChatBox) {
            whatsappChatBox.classList.toggle('show');
        }
    }

    // Abrir el chat al hacer clic en el botón de WhatsApp
    if (whatsappTriggerBtn) {
        whatsappTriggerBtn.addEventListener('click', function(event) {
            event.stopPropagation(); // Evita que el clic se propague al documento
            toggleChatBox();
        });
    }

    // Cerrar el chat al hacer clic en el botón de cerrar (X)
    if (closeChatBtn) {
        closeChatBtn.addEventListener('click', toggleChatBox);
    }
    // Atrapa los clics DENTRO del chat box para que no lo cierren.
    if (whatsappChatBox) {
        whatsappChatBox.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    }
    
    // Cerrar el chat si se hace clic fuera de él
    document.addEventListener('click', function(event) {
        if (whatsappChatBox && whatsappChatBox.classList.contains('show')) {
            // Comprueba si el clic fue fuera del chat box y fuera del botón que lo abre
            if (!whatsappChatBox.contains(event.target) && !whatsappTriggerBtn.contains(event.target)) {
                whatsappChatBox.classList.remove('show');
            }
        }
    });

}); // --- Fin de $(document).ready() ---