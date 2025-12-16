@extends('layouts.app')

@section('title', 'Sobre Nosotros - BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                </ol>
            </nav>
            <h1 class="page-title">Sobre BioMote</h1>
            <p class="lead text-muted mx-auto">Conectando a Paraguay con el futuro de la energía sostenible.</p>
        </div>
    </header>
    
    <main>
        <section class="section-spacing">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/about-us-image-1.webp') }}" class="img-fluid rounded-3 product-image-shadow" alt="Persona utilizando sistema HomeBiogas en un entorno natural">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="display-5" style="font-weight: bold;">Nuestra Misión</h2>
                        <p class="text-secondary mt-4">Nuestra misión en <strong>BioMote</strong> es liderar la transición de Paraguay hacia un futuro más sostenible, introduciendo y facilitando el acceso a la innovadora tecnología de HomeBiogas. Buscamos empoderar a hogares, agricultores y empresas de nuestro país con herramientas que les permitan convertir sus residuos orgánicos en un recurso valioso, promoviendo la autosuficiencia energética y la agricultura regenerativa.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-spacing bg-light">
            <div class="container">
                <div class="row align-items-center g-5 flex-row-reverse">
                     <div class="col-lg-6">
                        <img src="{{ asset('images/about-us-image-2.webp') }}" class="img-fluid rounded-3 product-image-shadow" alt="Miembros de una comunidad colaborando con HomeBiogas">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="display-5" style="font-weight: bold;">Nuestra Visión para Paraguay</h2>
                        <p class="text-secondary mt-4">Ser la empresa líder y el referente principal en Paraguay en soluciones de energía renovable y gestión de residuos a escala doméstica y agrícola. Aspiramos a construir una comunidad de usuarios conscientes que contribuyan activamente a la reducción de la huella de carbono y al fortalecimiento de la soberanía alimentaria y energética de nuestra nación.</p>
                        <hr class="my-4">
                        <h5 style="font-weight: bold;">Nuestro Compromiso</h5>
                        <p class="text-secondary">Como distribuidores oficiales de HomeBiogas, garantizamos que cada sistema es auténtico, cuenta con la garantía oficial y cumple con los más altos estándares de seguridad. Traemos a nuestro país una tecnología probada y en la que confían organizaciones de talla mundial.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-spacing">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Nuestros Objetivos</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card feature-card text-center h-100">
                            <div class="card-body benefit-item">
                                <i class="bi bi-pin-map-fill"></i>
                                <h3 class="h5 mt-3">Accesibilidad</h3>
                                <p class="text-muted small">Garantizar que la tecnología HomeBiogas esté disponible en todo el territorio paraguayo con un servicio de instalación y post-venta de primer nivel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card feature-card text-center h-100">
                            <div class="card-body benefit-item">
                                <i class="bi bi-lightbulb-fill"></i>
                                <h3 class="h5 mt-3">Educación</h3>
                                <p class="text-muted small">Informar y educar al mercado sobre los inmensos beneficios del biogás y el biofertilizante como pilar de un estilo de vida sostenible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card feature-card text-center h-100">
                            <div class="card-body benefit-item">
                                <i class="bi bi-headset"></i>
                                <h3 class="h5 mt-3">Soporte Local</h3>
                                <p class="text-muted small">Ofrecer un respaldo técnico y asesoramiento cercano y en español, asegurando que cada cliente maximice el potencial de su sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card feature-card text-center h-100">
                            <div class="card-body benefit-item">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3 class="h5 mt-3">Impacto Medible</h3>
                                <p class="text-muted small">Fomentar proyectos que generen un impacto climático positivo y medible en Paraguay, alineados con los más altos estándares internacionales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
