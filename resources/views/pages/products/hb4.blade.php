@extends('layouts.app')

@section('title', 'HomeBiogas 4 - BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">HomeBiogas 4</li>
                </ol>
            </nav>
    
            <h1 class="page-title">Soluciones HomeBiogas</h1>
            
            <p class="lead text-muted mx-auto">Encuentra el sistema de biogás perfecto para tu hogar, comunidad o negocio. Energía limpia y fertilizante natural a tu alcance.</p>
            
        </div>
    </header>

    <main style="padding-top: 80px;">
        
        <section class="product-detail-section section-spacing">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="product-image-gallery">
                            <img src="{{ asset('images/producto-hb4.jpg') }}" class="img-fluid rounded-3 mb-3" alt="Vista principal del HomeBiogas 4">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <span class="badge bg-primary-soft text-primary mb-2">HOGARES Y COMUNIDADES</span>
                        <h1 class="display-5 fw-bold">HomeBiogas 4</h1>
                        <p class="lead text-muted">Ideal para hogares grandes, huertos comunitarios y alojamientos de hostelería como glamping o ecoalojamientos.</p>
                        
                        <div class="mt-4">
                            <a href="https://wa.me/595994354817?text=%C2%A1Hola%2C%20BioMote!%20%F0%9F%91%8B%20Vi%20su%20p%C3%A1gina%20web%20y%20me%20gustar%C3%ADa%20solicitar%20una%20cotizaci%C3%B3n%20para%20un%20sistema%20HomeBiogas4.%20%C2%A1Gracias!" target="_blank" class="btn btn-primary btn-lg">Solicitar Cotización</a>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-lg ms-2">Ver otros modelos</a>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3">Características Principales</h5>
                        <ul class="specs-list">
                            <li>Hasta 4 horas diarias de gas para cocinar.</li>
                            <li>Produce hasta 96L de biofertilizante líquido al día.</li>
                            <li>Montaje sencillo en menos de 3 horas.</li>
                            <li>Diseño duradero con más de 10 años de vida útil.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-spacing bg-light">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="mb-4">Especificaciones Técnicas</h3>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Entrada de Residuos de cocina</th>
                                    <td>4 L residuos + 8 L agua</td>
                                </tr>
                                <tr>
                                    <th scope="row">Entrada de estiércol animal</th>
                                    <td>28 L estiércol + 56 L agua</td>
                                </tr>
                                <tr>
                                    <th scope="row">Volumen del sistema</th>
                                    <td>3.6 M³</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensiones (ensamblado)</th>
                                    <td>300 cm (largo) x 145 cm (ancho) x 140 cm (alto)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Distancia máxima a la estufa</th>
                                    <td>20 metros</td>
                                </tr>
                                <tr>
                                    <th scope="row">Presión nominal de gas</th>
                                    <td>10 mbar</td>
                                </tr>
                                 <tr>
                                    <th scope="row">Garantía del sistema</th>
                                    <td>2 años</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <h3 class="mb-4">Cada paquete incluye:</h3>
                        <img src="{{ asset('images/paquete-hb2-completo.png') }}" alt="Paquete Completo HomeBiogas 2" class="complete-package-image">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
