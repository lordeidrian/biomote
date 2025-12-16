@extends('layouts.app')

@section('title', 'Soluciones - BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                </ol>
            </nav>
    
            <h1 class="page-title">Soluciones HomeBiogas</h1>
            
            <p class="lead text-muted mx-auto">Encuentra el sistema de biogás perfecto para tu hogar, comunidad o negocio. Energía limpia y fertilizante natural a tu alcance.</p>
            
        </div>
    </header>
    
    <main>
        <section id="product-gallery" class="section-spacing">
            <div class="container">
        
                <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/producto-hb2.jpg') }}" class="img-fluid rounded-3 product-image-shadow" alt="Sistema HomeBiogas 2">
                    </div>
                    <div class="col-lg-6">
                        <span class="product-tagline">HOGARES</span>
                        <h3 class="product-title">HomeBiogas 2</h3>
                        <p class="text-muted">La solución compacta ideal para hogares con patio trasero que desean convertir sus residuos de cocina en energía renovable y fertilizante líquido de alta calidad.</p>
                        <a href="{{ route('products.hb2') }}" class="btn btn-outline-primary stretched-link">Ver detalles y especificaciones</a>
                    </div>
                </div>
        
                <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
                    <div class="col-lg-6 order-lg-2"> <img src="{{ asset('images/producto-hb4.jpg') }}" class="img-fluid rounded-3 product-image-shadow" alt="Sistema HomeBiogas 4">
                    </div>
                    <div class="col-lg-6 order-lg-1"> <span class="product-tagline">COMUNIDADES</span>
                        <h3 class="product-title">HomeBiogas 4</h3>
                        <p class="text-muted">Perfecto para hogares grandes, huertos comunitarios o alojamientos de hostelería que necesitan gestionar un mayor volumen de residuos orgánicos.</p>
                        <a href="{{ route('products.hb4') }}" class="btn btn-outline-primary stretched-link">Ver detalles y especificaciones</a>
                    </div>
                </div>
        
                <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/producto-hb6.jpg') }}" class="img-fluid rounded-3 product-image-shadow" alt="Sistema HomeBiogas 6">
                    </div>
                    <div class="col-lg-6">
                        <span class="product-tagline">PEQUEÑAS FINCAS</span>
                        <h3 class="product-title">HomeBiogas 6</h3>
                        <p class="text-muted">Diseñado para pequeñas explotaciones agrícolas, procesa tanto residuos de cocina como estiércol animal para una máxima producción de energía y biofertilizante.</p>
                        <a href="{{ route('products.hb6') }}" class="btn btn-outline-primary stretched-link">Ver detalles y especificaciones</a>
                    </div>
                </div>
        
                <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
                    <div class="col-lg-6 order-lg-2">
                        <img src="{{ asset('images/producto-hb8.jpg') }}" class="img-fluid rounded-3 product-image-shadow" alt="Sistema HomeBiogas 8">
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <span class="product-tagline">AGRICULTORES</span>
                        <h3 class="product-title">HomeBiogas 8</h3>
                        <p class="text-muted">La solución definitiva para agricultores con ganado. Convierte grandes cantidades de estiércol en una fuente constante de gas y fertilizante natural.</p>
                        <a href="{{ route('products.hb8') }}" class="btn btn-outline-primary stretched-link">Ver detalles y especificaciones</a>
                    </div>
                </div>
        
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/producto-inodoro.jpg') }}" class="img-fluid rounded-3 product-image-shadow" alt="Kit de Inodoro Biológico">
                    </div>
                    <div class="col-lg-6">
                        <span class="product-tagline">SANEAMIENTO SOSTENIBLE</span>
                        <h3 class="product-title">Kit de Inodoro Biológico</h3>
                        <p class="text-muted">Una solución higiénica y fuera de la red que se integra con los sistemas HomeBiogas para transformar los desechos humanos en recursos valiosos.</p>
                        <a href="{{ route('products.toilet') }}" class="btn btn-outline-primary stretched-link">Ver detalles y especificaciones</a>
                    </div>
                </div>
        
            </div>
        </section>

        <section id="comparison" class="section-spacing bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Compara nuestras soluciones</h2>
                    <p class="lead text-muted">Encuentra las especificaciones técnicas para elegir el sistema que mejor se adapta a ti.</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center comparison-table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="text-start">Especificaciones técnicas</th>
                                <th scope="col">HomeBiogas 2</th>
                                <th scope="col">HomeBiogas 4</th>
                                <th scope="col">HomeBiogas 6</th>
                                <th scope="col">Agricultores (HomeBiogas 8)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Volumen del tanque de gas (L)</th>
                                <td>500</td>
                                <td>1,100</td>
                                <td>1,700</td>
                                <td>2,500</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Volumen del tanque digestor (L)</th>
                                <td>1,500</td>
                                <td>2,500</td>
                                <td>3,900</td>
                                <td>5,100</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Dimensiones ensamblado (CM)</th>
                                <td>210L-115W-125H</td>
                                <td>300L-145W-140H</td>
                                <td>400L-180W-150H</td>
                                <td>680L-200W</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Tiempo máximo diario de cocción (horas)</th>
                                <td>2</td>
                                <td>4</td>
                                <td>6</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Entrada diaria de residuos de cocina (Máx. L)</th>
                                <td>8 (4 + 4)</td>
                                <td>12 (4 + 8)</td>
                                <td>18 (9 + 9)</td>
                                <td>NR</td>
                            </tr>
                             <tr>
                                <th scope="row" class="text-start">Entrada diaria de estiércol animal (Máx. L)</th>
                                <td>48 (16 + 32)</td>
                                <td>84 (28 + 56)</td>
                                <td>126 (42 + 84)</td>
                                <td>195 (65 + 130)</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Fertilizante diario Total (L)</th>
                                <td>56</td>
                                <td>96</td>
                                <td>144</td>
                                <td>195</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
