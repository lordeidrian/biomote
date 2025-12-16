@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <header class="hero-section d-flex align-items-center" id="page-top">
        <div class="overlay"></div>
        <div class="container text-center position-relative z-1">
            <h1 class="hero-title display-3">Energía que nace de tus residuos.</h1>
            <p class="hero-subtitle lead mx-auto">Convierte los desechos orgánicos de tu hogar o negocio en gas para cocinar y fertilizante líquido con HomeBiogas.</p>
        </div>
    
        <div class="scroll-indicator" id="scrollIndicator"> 
            <i class="bi bi-mouse scroll-mouse-animation"></i>
            <i class="bi bi-chevron-double-down scroll-arrows-animation"></i>
        </div>
    </header>
    
    <main>        
        <!-- SECCIÓN ALIADO CLIMÁTICO -->
        <section id="aliado-seccion" class="climate-partner-section section-spacing" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image-wrapper-climate">
                           <img src="{{ asset('images/partner-climate.webp') }}" class="img-fluid" alt="Sistema de biogás en un entorno rural">
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5 mt-5 mt-lg-0">
                        <h1 class="display-5" style="font-weight: bold;">Tu Aliado en<br>Acción Climática y Energía Renovable</h1>
                        <p class="text-secondary mt-4">Empoderamos a pequeños agricultores y comunidades para que adopten prácticas sostenibles que mejoren sus medios de vida y protejan el planeta.</p>
                        <p class="text-secondary">Con la misión de llegar a <strong>200 millones de familias</strong> cuyas vidas pueden ser transformadas por el biogás, nos dedicamos a escalar nuestro impacto. Respaldados por alianzas con organizaciones como MCFA, UNDP, WWF y GIZ, y certificados por Gold Standard, nuestros proyectos de alto estándar generan un impacto climático medible.</p>
                        <!-- <a href="#" class="btn btn-read-more mt-4">Leer Más</a> -->
                    </div>
                </div>
            </div>
        </section>           

        <!-- SECCIÓN SOLUCIÓN PARA AGRICULTORES -->
        <section class="solution-farmer-section section-spacing" style="background-color: #f8f9fa; padding-top: 0px;">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h2 style="font-weight: lighter;">Nuestra Solución Completa</h2>
                        <h1 style="font-weight: bold;">Para Agricultores</h1>
                        <p class="text-secondary mt-4">El Sistema HomeBiogas para Agricultores es una solución duradera y eficiente diseñada para procesar estiércol animal y residuos orgánicos, proporcionando a las fincas energía renovable y valioso biofertilizante. Con una capacidad para procesar hasta 50 litros de estiércol animal diariamente, es una herramienta simple pero potente para la agricultura sostenible.</p>
                        <ul class="list-unstyled mt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Más de 5 horas de Gas para cocinar</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Producción de diaria de BioFertilizante</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Diseño Duradero</span>
                            </li>
                        </ul>
                        <!-- <a href="#" class="btn btn-read-more mt-4">Read More</a> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper-farmer">
                           <img src="{{ asset('images/solucion-agricultores.webp') }}" class="img-fluid rounded-3" alt="Placeholder Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECCIÓN CÓMO FUNCIONA -->
        <section id="features" class="section-spacing">

            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Un ciclo perfecto en 3 simples pasos.</h2>
                </div>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <div class="card mb-4 feature-card">
                            <div class="card-body benefit-item">
                                <i class="bi bi-recycle"></i>
                                <h3 class="h5 mt-3" style="color: var(--primary-green);">1. Deposita Residuos</h3>
                                <p class="text-muted">Introduce restos de comida, y/o estiércol animal en el sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 feature-card">
                            <div class="card-body benefit-item">
                                <i class="bi bi-fire"></i>
                                <h3 class="h5 mt-3" style="color: var(--primary-green);">2. Genera Biogás</h3>
                                <p class="text-muted">Las bacterias descomponen la materia y producen gas para cocinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="card mb-4 feature-card">
                            <div class="card-body benefit-item">
                                <i class="bi bi-flower1"></i>
                                <h3 class="h5 mt-3" style="color: var(--primary-green);">3. Nutre tus Plantas</h3>
                                <p class="text-muted">Obtén un biofertilizante líquido, rico en nutrientes para tu huerto o jardín.</p>
                            </div>
                        </div> 
                        </div>
                </div>
            </div>
        </section>
        <!-- SECCIÓN REDUCE TU HUELLA DE CARBONO -->
        <section class="carbon-footprint-section section-spacing" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h2 style="font-weight: bold;">Reduce tu huella de carbono con<br>el Estándar de Oro (Gold Standard)</h2>
                        <p class="text-secondary mt-4">Los proyectos HomeBiogas generan créditos de carbono certificados, verificados por los estándares líderes a nivel mundial como Gold Standard. Esto significa que al apoyar o implementar una solución HomeBiogas, estás contribuyendo directamente a la reducción de emisiones de gases de efecto invernadero y ayudando a combatir el cambio climático.</p>
                        <a href="{{ route('home') }}#solutions" class="btn btn-read-more mt-4">Compensa tu Huella</a>
                    </div>
                    <div class="col-lg-6">
                         <div class="image-wrapper-carbon">
                            <img src="{{ asset('images/homebiogas-certicado.png') }}" class="img-fluid rounded-3" alt="Placeholder image for carbon footprint section">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN SOLUCIONES (PRODUCTOS) -->
        <section id="solutions" class="section-spacing" style="padding-bottom: 0px;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Una solución para cada escala.</h2>
                </div>
                <!-- Solución 1: Hogares -->
                <div class="row align-items-center g-0 mb-0">
                    <!-- TEXTO -->
                    <div class="col-lg-6 order-2 order-lg-1">
                        <span class="badge bg-primary-soft mb-2" style="color: #003a46;">HOGARES Y COMUNIDADES</span>
                        <h3 class="h2">Para la vida diaria</h3>
                        <p class="text-muted">Los sistemas HomeBiogas 2 y 4 son perfectos para familias y pequeños grupos que buscan autosuficiencia energética y reducir su huella de carbono.</p>
                        <ul class="specs-list">
                            <li>Hasta 4 horas de gas de cocina al día.</li>
                            <li>Reduce las emisiones de CO2 de tu hogar.</li>
                            <li>Fácil instalación en menos de 3 horas.</li>
                        </ul>
                    </div>
                    <!-- IMAGEN -->
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('images/homebiogas-2-4-c.png') }}" class="img-fluid rounded-3" alt="Familia en un jardín con HomeBiogas">
                    </div>
                </div>
                <!-- Solución 2: Agricultores -->
                <div class="row align-items-center g-5">
                    <!-- TEXTO -->
                    <div class="col-lg-6 order-1 order-lg-2">
                        <span class="badge bg-primary-soft mb-2" style="color: #003a46;">NEGOCIOS Y AGRICULTURA</span>
                        <h3 class="h2">Para tu emprendimiento</h3>
                        <p class="text-muted">Los modelos HomeBiogas 6 y 8 están diseñados para explotaciones agrícolas y negocios de hostelería, convirtiendo mayores volúmenes de residuos en valiosos recursos.</p>
                        <ul class="specs-list">
                            <li>Hasta 8 horas de gas de cocina al día.</li>
                            <li>Procesa estiércol animal y residuos a gran escala.</li>
                            <li>Produce hasta 195L de fertilizante diario.</li>
                        </ul>
                    </div>
                    <!-- IMAGEN -->
                    <div class="col-lg-6 order-2 order-lg-1">
                        <img src="{{ asset('images/homebiogas-6-8.png') }}" class="img-fluid rounded-3" alt="Campo agrícola con sistema HomeBiogas">
                    </div>
                </div>
            </div>
        </section>
        <!-- MAPA -->
        <section id="impacto-mundial" class="section-spacing bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Cambiando la vida de las personas en todo el mundo</h2>
                </div>
                <div class="row align-items-center justify-content-center g-5">
                    <div class="col-lg-7">
                        <img src="{{ asset('images/mapa-mundial-impacto.png') }}" alt="Mapa del impacto global de BioMote" class="img-fluid">
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center mb-5">
                            <i class="bi bi-globe display-4 me-4" style="color: var(--primary-green);"></i>
                            <div>
                                <span class="text-secondary" style="font-size: 1.1rem;">Más de</span>
                                <h3 class="h4 mb-0 fw-bold">100 países</h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-check-fill display-4 me-4" style="color: var(--primary-green);"></i>
                            <div>
                                <span class="text-secondary" style="font-size: 1.1rem;">Más de</span>
                                <h3 class="h4 mb-0 fw-bold">30,000 sistemas vendidos</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECCIÓN TESTIMONIALS -->
        <section id="testimonials" class="section-spacing">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Nuestra Comunidad en Latinoamérica</h2>
                    <p class="lead text-muted">Historias reales de familias y negocios que transforman sus vidas con HomeBiogas.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Testimonio 1"></button>
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Testimonio 2"></button>
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Testimonio 3"></button>
                            </div>
        
                            <div class="carousel-inner">
            
                                <div class="carousel-item active">
                                    <div class="testimonial-item-floating">
                                        <img src="{{ asset('images/image_es.webp') }}" alt="Foto de la Familia Rivera" class="testimonial-avatar">
                                        <p class="testimonial-quote">"Dejamos de depender del gas propano. Es un alivio increíble para el bolsillo y una lección de sostenibilidad para nuestros hijos. La instalación fue sencilla y el sistema funciona a la perfección."</p>
                                        <!-- <a href="#" class="btn btn-sm btn-outline-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="1OGAl4YAcc0">
                                            <i class="bi bi-play-btn-fill me-2"></i>Ver Testimonio en Video
                                        </a> -->
                                        <div class="testimonial-author">
                                            <div class="author-name">Familia Rivera</div>
                                            <div class="author-location">
                                                <i class="bi bi-geo-alt-fill me-1"></i>El Salvador
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="carousel-item">
                                    <div class="testimonial-item-floating">
                                        <img src="{{ asset('images/image_br.webp') }}" alt="Foto de João da Silva" class="testimonial-avatar">
                                        
                                        <p class="testimonial-quote">"O biofertilizante mudou a qualidade da minha horta. A produção aumentou e tudo é 100% orgânico. A tecnologia é robusta e o suporte, excelente."</p>
                                        
                                        <!-- <a href="#" class="btn btn-sm btn-outline-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="1OGAl4YAcc0">
                                            <i class="bi bi-play-btn-fill me-2"></i>Ver Testimonio en Video
                                        </a> -->
        
                                        <div class="testimonial-author">
                                            <div class="author-name">João da Silva</div>
                                            <div class="author-location">
                                                <i class="bi bi-geo-alt-fill me-1"></i>Brasil
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="carousel-item">
                                    <div class="testimonial-item-floating">
                                        <img src="{{ asset('images/image_ec.webp') }}" alt="Foto de Sofía Zambrano" class="testimonial-avatar">
                                        <p class="testimonial-quote">"Nuestros huéspedes en el lodge eligen visitarnos por nuestro compromiso ambiental. HomeBiogas es el corazón de nuestra operación sostenible."</p>
                                        <!-- <a href="#" class="btn btn-sm btn-outline-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="1OGAl4YAcc0">
                                            <i class="bi bi-play-btn-fill me-2"></i>Ver Testimonio en Video
                                        </a> -->
                                        <div class="testimonial-author">
                                            <div class="author-name">Sofía Zambrano</div>
                                            <div class="author-location">
                                                <i class="bi bi-geo-alt-fill me-1"></i>Ecuador
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- modal testimonials      -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content" style="background-color: transparent; border: none;">
                <div class="modal-body p-0">
                   <div class="ratio ratio-16x9">
                      <iframe class="embed-responsive-item" src="" id="videoIframe" allowfullscreen allow="autoplay; encrypted-media"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- SECCIÓN BENEFICIOS -->
        <section id="benefits" class="section-spacing bg-light">
             <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Más que energía, un estilo de vida.</h2>
                </div>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <div class="card mb-4 feature-card">
                            <div class="card-body benefit-item">
                                <i class="bi bi-piggy-bank-fill"></i>
                                <h3 class="h5 mt-3" style="color: var(--primary-green);">Ahorro Económico</h3>
                                <p class="text-muted">Reduce o elimina tu gasto en gas y fertilizantes comerciales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 feature-card">
                            <div class="card-body benefit-item">
                                <i class="bi bi-shield-check"></i>
                                <h3 class="h5 mt-3" style="color: var(--primary-green);">Independencia Energética</h3>
                                <p class="text-muted">Genera tu propio combustible sin depender de la red o proveedores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 feature-card">
                            <div class="card-body benefit-item">
                                <i class="bi bi-globe-americas"></i>
                                <h3 class="h5 mt-3" style="color: var(--primary-green);">Impacto Ambiental</h3>
                                <p class="text-muted">Minimiza los residuos, reduce el metano y promueve un planeta más sano.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECCIÓN EMPRESAS ALIADAS (NUEVO) -->
        <section class="section-spacing">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Empresas del sector biogás y energía renovable</h2>
                </div>
                <div class="row g-4 justify-content-center align-items-center">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                            <a href="#" target="_blank">
                                <img src="https://placehold.co/200x100?text=Empresa+{{ $i }}" alt="Empresa {{ $i }}" class="partner-logo">
                            </a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE CONFIANZA (SOCIAL PROOF) -->
        <section class="section-spacing bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Con la confianza de organizaciones líderes</h2>
                </div>
                <div class="row g-4 justify-content-center align-items-center">
        
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                            <img src="{{ asset('images/logo-un.png') }}" alt="Naciones Unidas" class="partner-logo">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                            <img src="{{ asset('images/logo-wwf.png') }}" alt="WWF" class="partner-logo">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                            <img src="{{ asset('images/logo-cruz-roja.png') }}" alt="Cruz Roja" class="partner-logo">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                            <img src="{{ asset('images/logo-governmet.png') }}" alt="Government of India" class="partner-logo">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                            <img src="{{ asset('images/logo-usaid.png') }}" alt="USAID" class="partner-logo">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="partner-logo-wrapper">
                             <img src="{{ asset('images/logo-b-corp.webp') }}" alt="Bcorp" class="partner-logo">
                        </div>
                    </div>
        
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE CONTACTO (FINAL CTA) -->
        <section id="contact" class="section-spacing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">Únete a la revolución sostenible.</h2>
                    <p class="lead text-muted mb-2">Estamos aquí para asesorarte. Contáctanos para encontrar la solución perfecta para ti.</p>
                        
                        <a href="mailto:info@biomote.com.py" class="btn btn-primary btn-lg">Quiero más información</a>


                    </div>
                </div>
            </div>
        </section>        
    </main>
@endsection