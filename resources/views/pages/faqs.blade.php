@extends('layouts.app')

@section('title', 'Preguntas Frecuentes - BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Preguntas Frecuentes</li>
                </ol>
            </nav>
            <h1 class="page-title">Preguntas Frecuentes</h1>
            <p class="lead text-muted mx-auto">Aquí respondemos las dudas más comunes sobre el funcionamiento, instalación y beneficios de los sistemas HomeBiogas.</p>
        </div>
    </header>
    
    <main>
        <section class="section-spacing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="faqAccordion">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿Qué es HomeBiogas y cómo funciona?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        HomeBiogas es un sistema biodigestor que convierte residuos orgánicos (restos de comida, estiércol) en dos productos valiosos: <strong>gas metano para cocinar</strong> y <strong>biofertilizante líquido</strong> para nutrir plantas. Lo logra a través de un proceso natural de descomposición anaeróbica realizado por bacterias dentro del sistema sellado.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Qué tipo de residuos puedo introducir en el sistema?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Puedes introducir la mayoría de los <strong>residuos de cocina</strong> y el <strong>estiércol animal</strong>. La cantidad máxima diaria varía según el modelo, desde 4 litros de residuos de cocina para el HomeBiogas 2 hasta 65 litros de estiércol para el modelo de Agricultores (HomeBiogas 8).
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿El sistema produce mal olor?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        No. El sistema HomeBiogas es <strong>completamente sellado</strong>, por lo que el proceso de descomposición ocurre sin liberar olores al exterior. La solución de saneamiento del Kit de Inodoro también es descrita como "sin olores".
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        ¿La instalación es complicada?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        No, la instalación es sencilla y está pensada para que la puedas realizar tú mismo. Dependiendo del modelo, el montaje puede tomar entre <strong>2 y 4 horas</strong>. Cada paquete incluye una guía de montaje detallada para facilitar el proceso.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        ¿Cuánto gas para cocinar produce?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        La producción de gas depende del modelo y la cantidad de residuos que introduzcas. Por ejemplo, el HomeBiogas 2 puede generar hasta <strong>2 horas</strong> de gas diarias, mientras que el modelo para Agricultores puede producir hasta <strong>8 horas</strong> diarias de gas para cocinar.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        ¿Qué es el biofertilizante y para qué sirve?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        El biofertilizante es un subproducto líquido del proceso, <strong>rico en nutrientes y excelente para jardines, huertos y cultivos</strong>. Mejora la salud del suelo y el crecimiento de las plantas. La producción diaria puede ir desde 8 litros en el modelo más pequeño hasta 195 litros en el más grande.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        ¿El sistema es seguro de usar?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Sí. Los sistemas HomeBiogas están diseñados con múltiples características de seguridad. Estas incluyen un <strong>filtro de gas, tanques sellados y un mecanismo automático de liberación de gas</strong> si la presión excede el límite recomendado.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        ¿Qué vida útil tiene el sistema y qué garantía ofrece?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Los sistemas son duraderos y están fabricados con materiales de alta calidad, diseñados para una <strong>vida útil de más de 10 años</strong>. BioMote, a través de HomeBiogas, ofrece una <strong>garantía de 2 años</strong> para el sistema principal y 1 año para la estufa de biogás.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
