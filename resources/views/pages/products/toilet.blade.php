@extends('layouts.app')

@section('title', 'Kit de Inodoro Biológico - BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kit Inodoro</li>
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
                            <img src="{{ asset('images/producto-inodoro.jpg') }}" class="img-fluid rounded-3 mb-3" alt="Vista principal del Kit de Inodoro Biológico HomeBiogas">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <span class="badge bg-primary-soft text-primary mb-2">HIGIENE SOSTENIBLE</span>
                        <h1 class="display-5 fw-bold">Kit de Inodoro Biológico</h1>
                        <p class="lead text-muted">Una solución sostenible e higiénica que transforma los desechos humanos en gas y efluentes para cocinar gratuitos.</p>
                        
                        <div class="mt-4">
                            <a href="https://wa.me/595994354817?text=%C2%A1Hola%2C%20BioMote!%20%F0%9F%91%8B%20Vi%20su%20p%C3%A1gina%20web%20y%20me%20gustar%C3%ADa%20solicitar%20una%20cotizaci%C3%B3n%20para%20un%20sistema%20HomeBiogas-Kit.%20%C2%A1Gracias!" target="_blank" class="btn btn-primary btn-lg">Solicitar Cotización</a>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-lg ms-2">Ver otros modelos</a>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3">Características Únicas</h5>
                        <ul class="specs-list">
                            <li>¡Ahorra agua con cada descarga!</li>
                            <li>Fuera de la red y ecológico, no requiere conexión a la red de saneamiento.</li>
                            <li>Seguro, sin complicaciones y sin olores.</li>
                            <li>Compatible con los sistemas HomeBiogas 2, 4 y 6.</li>
                            <li>Garantía de 2 años en el inodoro.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-spacing bg-light">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="mb-4">Especificaciones de Uso</h3>
                        <table class="table table-striped table-bordered">
                             <thead>
                                <tr>
                                    <th>Modelo del Sistema</th>
                                    <th>Usos diarios</th>
                                    <th>Ideal para</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">HomeBiogas 2</th>
                                    <td>Hasta 25 usos</td>
                                    <td>4 personas</td>
                                </tr>
                                 <tr>
                                    <th scope="row">HomeBiogas 4</th>
                                    <td>Hasta 50 usos</td>
                                    <td>8 personas</td>
                                </tr>
                                 <tr>
                                    <th scope="row">HomeBiogas 6</th>
                                    <td>Hasta 75 usos</td>
                                    <td>12 personas</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="mb-4 mt-5">Especificaciones Técnicas Adicionales</h3>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Volumen del sistema</th>
                                    <td>Varía según el tipo de sistema HomeBiogas conectado</td>
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
                                    <th scope="row">Dimensiones del inodoro</th>
                                    <td>17 kg, 52 cm (largo) x 52 cm (ancho) x 48 cm (alto)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <h3 class="mb-4">Cada paquete incluye:</h3>
                        <img src="{{ asset('images/paquete-inodoro-completo.png') }}" alt="Paquete Completo Inodoro" class="complete-package-image">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
